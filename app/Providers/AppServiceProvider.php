<?php

namespace App\Providers;

use App\Enums\MasterDataTypeEnum;
use App\Http\Helpers\Helper;
use App\Models\MasterData;
use App\Models\Section;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('replaceAfterSpaceWithX', function ($expression) {
            return "<?php echo collect(explode(' ', $expression))->map(function(\$word) {
                return substr(\$word, 0, 1) . str_repeat('*', strlen(\$word) - 1);
            })->implode(' '); ?>";
        });

    }
}
