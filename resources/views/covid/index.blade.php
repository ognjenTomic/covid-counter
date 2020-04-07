<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('seo.title') }}</title>
         <meta name="description" content="{{ __('seo.description') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="css/flip.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta property="og:title" content="{{ __('seo.title') }}" />
        <meta property="og:url" content="{{ $url }}" />
        <link rel="image_src" href="{{ $url }}/logo.png" />
        <meta property="og:image" content="{{ $url }}/logo.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="{{ __('seo.description') }}" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:title" content="{{ __('seo.title') }}" />
        <meta property="twitter:description" content="{{ __('seo.description') }}" />
        <meta property="twitter:image" content="{{ $url }}/logo.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <h1><span class="text-block blue">Lost</span><span class="text-block yellow">In</span><span class="text-block rose">Lockdown</span></h1>
                </div>
                <div class="emoji m-b-md">
                    😷🏡
                </div>
                <div class="title m-b-md">
                    @if ($start === 'unknown')
                    {!! __('messages.welcome-unknown', ['today' => $today]) !!}
                    @else
                    {!! __('messages.welcome', ['today' => $today, 'country' => $country, 'city' => $city]) !!}
                    @endif
                </div>
                @if ($start != 'unknown')
                    <div class="title m-b-md">
                        {{ __('messages.title') }}
                    </div>
                @endif
                <div class="container">
                    @if ($start != 'unknown')
                    <div class="tick m-b-md"
                        data-did-init="handleTickInit">
                        <div data-repeat="true"
                            data-layout="horizontal center fit"
                            data-transform="preset(d, h, m, s) -> delay">
                            <div class="tick-group">
                                <div data-key="value"
                                    data-repeat="true"
                                    data-transform="pad(00) -> split -> delay">
                                    <span data-view="flip"></span>
                                </div>
                                <span data-key="label"
                                    data-view="text"
                                class="tick-label"></span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="title m-b-md">
                    {!! __('messages.citation') !!}
                </div>
                <div class="quote">
                <blockquote>{{ $quote }}</blockquote>
                <cite>— Winston Churchill</cite>
            </div>
        </div>
    </div>

    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="https://www.twitter.com/sarimarcus/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/olivierdepiesse/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/Sarimarcus/covid-counter/settings"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a class="link-1" href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019" target="_blank">COVID19</a>
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">{{ __('messages.advices') }}</a>
                <a href="https://google.com/covid19-map" target="_blank">{{ __('messages.map') }}</a>
                <a href="{{ __('messages.toilet-paper') }}" target="_blank">🧻</a>
                <a href="#">#stayathome</a>
            </p>

            <p>Olivier Depiesse &copy; 2020</p>
        </div>

    </footer>

    <script>
        function handleTickInit(tick) {

            var locale = {
                YEAR_PLURAL: '{{ __('time.year_plural') }}',
                YEAR_SINGULAR: '{{ __('time.year_singular') }}',
                MONTH_PLURAL: '{{ __('time.month_plural') }}',
                MONTH_SINGULAR: '{{ __('time.month_singular') }}',
                WEEK_PLURAL: '{{ __('time.week_plural') }}',
                WEEK_SINGULAR: '{{ __('time.week_singular') }}',
                DAY_PLURAL: '{{ __('time.day_plural') }}',
                DAY_SINGULAR: '{{ __('time.day_singular') }}',
                HOUR_PLURAL: '{{ __('time.hour_plural') }}',
                HOUR_SINGULAR: '{{ __('time.hour_singular') }}',
                MINUTE_PLURAL: '{{ __('time.minute_plural') }}',
                MINUTE_SINGULAR: '{{ __('time.minute_singular') }}',
                SECOND_PLURAL: '{{ __('time.second_plural') }}',
                SECOND_SINGULAR: '{{ __('time.second_singular') }}',
                MILLISECOND_PLURAL: '{{ __('time.millisecond_plural') }}',
                MILLISECOND_SINGULAR: '{{ __('time.millisecond_singular') }}'
            };

            for (var key in locale) {
                if (!locale.hasOwnProperty(key)) { continue; }
                tick.setConstant(key, locale[key]);
            }

            var nextYear = (new Date()).getFullYear() + 1;

            Tick.count.up('{{ $start }}').onupdate = function(value) {
                tick.value = value;
            };

        }
    </script>

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="js/flip.min.js"></script>
</body>
</html>