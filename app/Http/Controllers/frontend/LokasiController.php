<?php

namespace App\Http\Controllers\frontend;

use App\Models\Solution;
use App\Models\Location;
use App\Models\Comment;
use App\Models\master_sektor;
use App\Models\Vote;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\BlacklistWord;
use App\Enums\LocationStatusEnum;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Messages\MailMessage;
use App\Http\Requests\LocationSolutionRequest;
use App\Http\Requests\CommentRequest;
use Auth;
use App\Services\ImageService;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Notifications\CommentUserNotification;
use App\Notifications\SolusiSubmitNotification;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Mail;


class LokasiController extends BaseController
{
    public function index($slug, Request $param)
    {

        $query_param = $param->query();

        $ip_address = $_SERVER['REMOTE_ADDR'];

        $location = Location::where([
            'status' => LocationStatusEnum::Active,
            'slug' => $slug,
        ])->firstOrFail();

        $others = Location::where('status', LocationStatusEnum::Active)
            ->where('id', '<>', $location->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $cta = match ($slug) {
            'belitung' => 'Kirim Ide Inovatif Kamu untuk Membantu Memecahkan Masalah Perikanan, Pertanian, dan Pariwisata yang ada di Belitung',
            'lombok-tengah' => 'Kirim Ide Inovatif Kamu untuk Membantu Memecahkan Masalah Sumber Daya Manusia, Pertanian dan Perikanan, dan Lingkungan yang ada di Lombok Tengah',
            'magelang' => 'Kirim Ide Inovatif Kamu untuk Membantu Memecahkan Masalah Kemiskinan, Parisiwata, dan Lingkungan yang ada di Magelang',
            'malang' => 'Kirim Ide Inovatif Kamu untuk Membantu Memecahkan Masalah Pertanian, Perikanan, dan Usaha Kreatif yang ada di Malang',
        };



        $location_id = $location->id;

        $sektors = master_sektor::get();

        $data = [
            'data' => $location,
            'others' => $others,
            'cta' => $cta,
            'sektors' => $sektors,
            // 'content' => $content,
            'slug' => $slug,
            'query_param' => $query_param,
            'locations' => Location::where('status', LocationStatusEnum::Active)->get(),
        ];

        return view('frontend.lokasi', $data);
    }

    public function sendSolution(LocationSolutionRequest $request)
    {

        $solution = new Solution();
        $linksAll = "";
        $links = $request->link;
        $linksAll = $links;


        $blacklistWords = BlacklistWord::get();

        $status = 'pending';

        foreach ($blacklistWords as $value) {
            // echo $request->solution;

            // if (stripos($request->solution, $value->word) !== false) {
            //     $status = 'blocked';
            // }
            // if (stripos($request->title, $value->word) !== false) {
            //     $status = 'blocked';
            // }

            $escapedWord = preg_quote($value->word, '/');

            // Use a case-insensitive regex pattern to match the exact word
            $pattern = '/\b' . $escapedWord . '\b/i';

            if (preg_match($pattern, $request->solution)) {
                $status = 'blocked';
                break; // Exit the loop if a forbidden word is found
            }
            if (preg_match($pattern, $request->title)) {
                $status = 'blocked';
                break; // Exit the loop if a forbidden word is found
            }
        }
        if ($request->checkSubmission == "true") {
            $request->validate([
                'uploaded_file' => 'required|file|max:20480',
            ]);

            $file = $request->file('uploaded_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $img = ImageService::saveImage($file, 'files/location');

            // Create a record in the database
            $solution->attachment_file = $img;
        }
        $solution->user_id = Auth::id();
        $solution->link_url = $linksAll;
        $solution->title = $request->title;
        $solution->solution = $request->solution;
        $solution->type = ($request->checkSubmission == "false" || $request->checkSubmission == null) ? false : true;
        $solution->status = $status;
        $solution->location_id = $request->location_id;
        $solution->sektor_id = $request->sektor;

        $solution->save();



        if ($status == 'pending') {

            # code...
            $user = User::find(1);
            $user->notify(new SolusiSubmitNotification());

            // return redirect()->back()->with([
            //     'thankyouModal' => true,
            // ]);

            echo json_encode([
                'status' => 'success',
                'data' => 'thankyou'
            ]);
        } else {
            echo json_encode([
                'status' => 'success',
                'data' => 'blocked'
            ]);
        }
    }

    public function sendComment(CommentRequest $request)
    {

        $solution = Solution::where('id', $request->solution_id)->first();

        $user = User::find($solution->user_id);

        $blacklistWords = BlacklistWord::get();

        $status = 'publish';

        foreach ($blacklistWords as $value) {
            // echo $request->solution;

            // if(stripos($request->title, $value->word) !== false){
            //     $status = 'deleted';
            // }

            // Escape special characters in the word to avoid issues with regex
            $escapedWord = preg_quote($value->word, '/');

            // Use a case-insensitive regex pattern to match the exact word
            $pattern = '/\b' . $escapedWord . '\b/i';

            if (preg_match($pattern, $request->title)) {
                $status = 'deleted';
                break; // Exit the loop if a forbidden word is found
            }
        }
        if ($status == 'publish') {
            $data = (object) [
                'property1' => $user,
            ];
            if ($user->subscribed) {
                $user->notify(new CommentUserNotification($data));
            }
        }

        $data = [
            'user_id' => Auth::id(),
            'title' => $request->title,
            'solution_id' => $request->solution_id,
            'status' => $status
        ];

        Comment::create($data);

        echo json_encode([
            'status' => 'success',
            'data' => $status
        ]);
    }

    public function sendGuide(Request $request)
    {
        $data = [
            'guide' => true
        ];

        User::where('id', Auth::id())->update($data);

        // return redirect()->back()->with([
        //     'submissionFormModal' => true,
        // ]);

        echo json_encode([
            'status' => 'success'
        ]);
    }

    public function deleteComment(Request $request)
    {

        Comment::where('id', $request->comment_id)->update([
            'status' => 'deleted'
        ]);

        return back()->with('toast_success', 'Hapus Komentar berhasil');
    }

    public function sendVote(Request $request)
    {
        $data = [
            'solution_id' => $request->solution_id,
            'user_id' => Auth::id(),
            'vote' => !$request->vote
        ];
        $check = Vote::where(['user_id' => Auth::id(), 'solution_id' => $request->solution_id])->exists();
        $solution = Solution::where('id', $request->solution_id)->first();

        if (!$request->vote) {
            $total_vote = $solution->total_vote + 1;
        } else {
            $total_vote = $solution->total_vote - 1;
        }

        if ($check) {
            Vote::where(['user_id' => Auth::id(), 'solution_id' => $request->solution_id])->update([
                'vote' => !$request->vote
            ]);
        } else {
            Vote::create($data);
        }

        Solution::where('id', $request->solution_id)->update([
            'total_vote' => $total_vote
        ]);

        echo json_encode([
            'status' => 'success',
        ]);
    }

    public function emailContent()
    {

        $introLines = [];
        return view(
            'vendor.notifications.email',
            [
                'introLines' => ['peh', 1, 'tes'],
                'actionText' => 'publish_solusi',
                'actionUrl' => 'http://localhost:8000/email-content',

            ]
        );
    }

    public function unsubscribe($id)
    {

        User::where('id', $id)->update([
            'subscribed' => false
        ]);

        return redirect('/')->with(['unsubModal' => true]);
    }

    public function getLocation(Request $request)
    {

        $query_param = $request->query();

        $location = Location::where([
            'status' => LocationStatusEnum::Active,
            'slug' => $request->slug,
        ])->firstOrFail();

        $solutions = Solution::where(['status' => 'published', 'location_id' => $location->id])->with([
            'user',
            'comment' => function ($query) {
                $query->where('status', 'publish')->orderBy('created_at', 'desc');
            },
            'comment.user',
            'vote' => function ($query) {
                $query->where('vote', true);
            }
        ]);

        if (count($query_param) > 0) {
            if (!empty($query_param['search'])) {
                $search = strtolower($query_param['search']);
                $solutions->whereRaw('lower(solution) like ?', ['%' . $search . '%']);
            }

            if (!empty($query_param['urut'])) {
                $urut = $query_param['urut'];
                if ($urut == 'Terpopuler') {
                    $solutions->orderBy('total_vote', 'desc');
                } else if ($urut == 'Terbaru') {
                    $solutions->orderBy('created_at', 'desc');
                } else if ($urut == 'Terlama') {
                    $solutions->orderBy('created_at', 'asc');
                }
            }

            if (!empty($query_param['berdasarkan'])) {
                $berdasarkan = $query_param['berdasarkan'];

                if ($berdasarkan == 'Submission Saya') {
                    $solutions->where('user_id', Auth::id());
                } else if (is_numeric($berdasarkan)) {
                    $solutions->where('sektor_id', $berdasarkan);
                }
            }
        }

        $totalSolutions = $solutions->count();
        $offset = ($query_param['paginate'] * $query_param['limit']) - $query_param['limit'];

        $solutions = $solutions->skip($offset)->limit($query_param['limit'])->get();

        $location_id = $location->id;

        $vote = [];
        if (Auth::check()) {
            $vote = Vote::where('user_id', Auth::id())->whereHas('solution', function ($query) use ($location_id) {
                $query->where('location_id', $location_id);
            })->get();
        }

        echo json_encode([
            'solutions' => $solutions,
            'totalSolutions' => $totalSolutions,
            'vote' => $vote
        ]);
    }

    public function getUser(Request $request)
    {

        $user = User::where('id', Auth::id())->first();

        echo json_encode([
            'status' => 'Success',
            'data' => $user
        ]);
    }

    public function buttonTest(Request $request)
    {
        $sektors = master_sektor::get();

        $data = [
            'sektors' => $sektors,
            'locations' => [],
            'slug' => 'Belitung'

        ];
        return view('frontend.button', $data);
    }
}
