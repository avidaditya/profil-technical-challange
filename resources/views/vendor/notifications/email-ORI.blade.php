<!DOCTYPE html>
<html style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-size:100%;font-family:'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;line-height:1.65;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />    
</head>

<body style="width:100% !important;height:100%;background-color:#f8f8f8;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;" >
    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
    <table class="body-wrap" style="width:100% !important;height:100%;background-color:#f8f8f8;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;" >
        <tr>
            <td class="container" style="display:block !important;clear:both !important;margin-top:20px !important;margin-bottom:20px !important;margin-right:auto !important;margin-left:auto !important;max-width:580px !important;" >
                <!-- Message start -->
                <table style="width:100% !important;border-collapse:collapse;" >
                    <tr>
                        <td align="center" class="masthead" style="padding-top:30px;padding-bottom:30px;padding-right:0;padding-left:0;background-color:white;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;color:white;" >
                            <img src="https://oic2.frendywijaya.com/frontend/images/logo-main.svg" style="width: 200px;text-transform: uppercase;display: block;">
                            <h1 style="margin-top:20px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;margin-bottom:10px;line-height:1.25;font-size:23px;text-align: center;color:#292929" >OIC Web</h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="content" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-size:100%;font-family:'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;line-height:normal;background-color:white;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding-top:30px;padding-bottom:30px;padding-right:35px;padding-left:35px;border-top: 4px solid #f8f8f8;color:black" >
                            <div style="margin-top:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;line-height:normal;font-size:16px;font-weight:normal;margin-bottom:20px;" >
                              @foreach ($introLines as $line)
                                {{ $line }}

                                @endforeach

                                {{-- Action Button --}}
                                @isset($actionText)
                                <?php
                                    $color = match ($level) {
                                        'success', 'error' => $level,
                                        default => 'primary',
                                    };
                                ?>
                                <x-mail::button :url="$actionUrl" :color="$color">
                                {{ $actionText }}
                                </x-mail::button>
                                @endisset
                            </div>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="" >
            <td class="container" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-size:100%;font-family:'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;line-height:1.65;display:block !important;clear:both !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;max-width:580px !important;" >

                {{-- Outro Lines --}}
                @foreach ($outroLines as $line)
                {{ $line }}

                @endforeach

                {{-- Salutation --}}
                @if (! empty($salutation))
                {{ $salutation }}
                @else
                @lang('Regards'),<br>
                {{ config('app.name') }}
                @endif

                {{-- Subcopy --}}
                @isset($actionText)
                <x-slot:subcopy>
                @lang(
                    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
                    'into your web browser:',
                    [
                        'actionText' => $actionText,
                    ]
                ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
                </x-slot:subcopy>
                @endisset

            </td>
        </tr>
    </table>
</body>

</html>
