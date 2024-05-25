<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use App\Models\Voucher;
use App\Enums\DiscountType;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Enums\TransactionStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function formatPhoneNumber($phoneNumber)
    {
        if(!$phoneNumber) {
            return null;
        }

        $phoneNumber = preg_replace('/[\s\-\(\)]+/', '', $phoneNumber);

        $stringReplacements = [
            '08' => '628',
            '+628' => '628'
        ];

        foreach($stringReplacements as $key => $value) {
            if(strpos($phoneNumber, $key) === 0) {
                $phoneNumber = substr_replace($phoneNumber, $value, 0, strlen($key));
            }
        }

        return $phoneNumber;
    }

    public static function trimPhoneNumber($phoneNumber)
    {
        if(!$phoneNumber) {
            return null;
        }

        $phoneNumber = preg_replace('/[\s\-\(\)]+/', '', $phoneNumber);

        $stringReplacements = [
            '08' => '8',
            '+628' => '8',
            '628' => '8',
        ];

        foreach($stringReplacements as $key => $value) {
            if(strpos($phoneNumber, $key) === 0) {
                $phoneNumber = substr_replace($phoneNumber, $value, 0, strlen($key));
            }
        }

        return $phoneNumber;
    }

    public static function readMore($string, $limit = 150)
    {
        $length = strlen(strip_tags($string));
        $dash = ' ...';
        if ($length > $limit) {
            $isi_halaman = strip_tags($string);
            $isi = substr($isi_halaman, 0, $limit);
            $isi = substr($isi_halaman, 0, strrpos($isi, " "));

            return $isi . $dash;

        } else {
            return strip_tags($string);
        }
    }

    public static function renderSectionByName($sections)
    {
        $result = [];
        foreach ($sections ?? [] as $section) {
            $result[$section->section_name] = $section->section_data;
        }
        return $result;
    }

    public static function readableText($text = '')
    {
        $textWithSpace = preg_replace('/([!?\-\_])/i', ' ', $text);
        $textUpperCase = Str::upper($textWithSpace);
        return $textUpperCase;
    }
}
