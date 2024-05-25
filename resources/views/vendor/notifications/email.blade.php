<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
  </xml><![endif]-->
    <!-- fix outlook zooming on 120 DPI windows devices -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
    <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->
    <title>OIC Email Notification</title>

    <style type="text/css">
        @media all {
            .btn-primary table td:hover {
                background-color: #AC43D9 !important;
            }

            .btn-primary a:hover {
                background-color: #AC43D9 !important;
                border-color: #AC43D9 !important;
            }
        }

        body {
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-spacing: 0;
        }

        table td {
            border-collapse: collapse;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .ReadMsgBody {
            width: 100%;
            background-color: #ebebeb;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        .yshortcuts a {
            border-bottom: none !important;
        }

        @media screen and (max-width: 599px) {

            .force-row,
            .container {
                width: 100% !important;
                max-width: 100% !important;
            }
        }

        @media screen and (max-width: 400px) {
            .container-padding {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
        }

        .ios-footer a {
            color: #aaaaaa !important;
            text-decoration: underline;
        }

        a[href^="x-apple-data-detectors:"],
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
    </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

    <!-- 100% background wrapper (grey background) -->
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
        <tr>
            <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

                <br>

                <!-- 600px container (white background) -->
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container"
                    style="width:600px;max-width:600px">
                    <tr>
                        <td class="container-padding content" align="left"
                            style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff; border-radius:12px">
                            <br>

                            <div class="title"
                                style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">
                                @if (!empty($greeting))
                                    {{ $greeting }}
                                @endif
                            </div>
                            <br>


                            <div class="body-text"
                                style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                                @isset($actionText)
                                    @if($actionText == 'Reset Password')
                                        Reset Password telah dilakukan harap klik button dibawah
                                        <br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">
                                                                            Reset Password
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa menikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>
                                    @endif

                                    @if ($actionText == 'Verify Email Address')
                                        Tekan tombol di bawah untuk melanjutkan proses verifikasi akun anda. Jika anda tidak
                                        merasa mendaftarkan diri anda di website Open Ideas Challenge, abaikan email ini.
                                        <br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">Verifikasi
                                                                            Akun
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa menikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>
                                    @endif

                                    @if ($actionText == 'komentar')
                                        Hi {{ $introLines[0] }},
                                        <br> <br>
                                        <span>
                                            Ide Kamu dapat komentar dari orang lain. Artinya, idemu berhasil menginspirasi
                                            orang lain. Coba cek langsung ke situs Open Ideas Challenge (OIC), dan lihat
                                            apakah ada yang mengembangkan/menambahkan idemu di kolom komentar. Kamu bisa
                                            menciptakan obrolan atau diskusi yang positif dan membangun dengan membalas
                                            komentar tersebut.
                                        </span>
                                        <br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">
                                                                            Cek Ide
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa menikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>

                                        <span>
                                            Kamu bisa mematikan notifikasi email ini bila ternyata dirasa mengganggu dengan
                                            klik <a href="{{ $introLines[2] }}" target="_blank"><u>link ini</u></a> .
                                            Sekali mematikan email ini, maka notifikasi ini akan mati secara permanen dan
                                            tidak bisa dinyalakan lagi. Untuk itu, silakan pikir dua kali bila ingin
                                            mematikannya ya. Ingat, bila idemu didiskusikan dan dikembangkan maka idemu baru
                                            bekerja menuju inovasi!
                                        </span>
                                    @endif

                                    @if ($actionText == 'publish_solusi')
                                        Hi {{ $introLines[0] }},
                                        <br><br>

                                        <span>
                                            Ide Kamu sudah dipublikasikan di situs Open Ideas Challenge (OIC) dan siap
                                            menginspirasi para pembuat dampak Indonesia. Sekarang Kamu bisa cek idemu
                                            langsung di situs dan lakukan hal berikut:
                                        </span>
                                        <br>
                                        <ol class="numbered-list">
                                            <li style="margin-top: 10px">Ajak teman, saudara, dan kenalanmu untuk vote
                                                idemu agar Kamu bisa memenangkan kompetisi, siap-siap dapat hadiah GoPay
                                                ataupun idemu diwujudkan jadi solusi!</li>
                                            <li style="margin-top: 10px">Pantau terus idemu karena setiap individu boleh
                                                mengembangkan/ menambahkan di kolom komentar idemu, ingat, gabungan dari
                                                berbagai ide bisa menjadi kekuatan besar yang berdampak!</li>
                                            <li style="margin-top: 10px">Gunakan twibbon terlampir untuk Kamu post di media
                                                sosial mu, semakin banyak orang yang mengunjungi idemu, semakin besar
                                                kesempatanmu untuk menang!</li>
                                        </ol>
                                        <br>
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">
                                                                            Cek Ide
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa mengikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>
                                        <span>Selamat memulai inovasimu!</span>
                                        <br>
                                        <span>Salam,</span><br>
                                        <span>Teman barumu dari OIC</span>
                                    @endif

                                    @if ($actionText == 'solusi_submit')
                                        {{$introLines[0]}}
                                        <br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">
                                                                            Cek Ide
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa menikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>
                                    @endif
                                    
                                    @if ($actionText == 'blokir_solusi')
                                        Hi {{ $introLines[0] }},
                                        <br><br>

                                        <span>
                                            Ide Kamu sudah diblokir di situs Open Ideas Challenge (OIC) 
                                        </span>
                                        <br>
                                        <br>
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            class="btn btn-primary"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="left"
                                                        style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                                                        valign="top">
                                                        <table role="presentation" border="0" cellpadding="0"
                                                            cellspacing="0"
                                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 6px; text-align: center; background-color: #00CC33;"
                                                                        valign="top" align="center" bgcolor="#00CC33">
                                                                        <a href="{{ $actionUrl }}" target="_blank"
                                                                            style="border: solid 2px #00CC33; border-radius: 8px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #00CC33; border-color: #00CC33; color: #ffffff;">
                                                                            Cek Ide
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Jika tombol di atas tidak berfungsi, kamu bisa mengikuti link di bawah ini untuk
                                        melanjutkan:<br><br>

                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
                                            width="100%">
                                            <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                                            <br><br>

                                        </table>
                                        <span>Selamat memulai inovasimu!</span>
                                        <br>
                                        <span>Salam,</span><br>
                                        <span>Teman barumu dari OIC</span>
                                    @endif

                                @endisset

                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="container-padding footer-text" align="left"
                            style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
                            <br><br>
                            © 2024 Catalyst Changemaker Ecosystem. Powered by GoTo Impact Foundation
                            <br>
                            @if (isset($introLines[1]))
                                <br>
                                You are receiving this email because you opted in on our website.<br>Opt out from our
                                newsletter by
                                @if ($introLines[1])
                                    <a href="{{ $introLines[2] }}" style="color:#aaaaaa">unsubscribe</a>.
                                @endif
                                <br>
                            @endif
                            <br>
                            <strong>GoTo Impact Foundation</strong><br>
                            <span class="ios-footer">
                                Gedung Pasaraya Blok M, Floor 6-7<br>
                                Jl Iskandarsyah II No. 2 Melawai Kebayoran Baru<br>
                                Jakarta Selatan 12160<br>
                            </span>
                            <a href="https://goto-impact.org/oic"
                                style="color:#aaaaaa">www.goto-impact.org/oic</a><br>

                            <br><br>

                        </td>
                    </tr>
                </table>
                <!--/600px container -->


            </td>
        </tr>
    </table>
    <!--/100% background wrapper-->

</body>

</html>
