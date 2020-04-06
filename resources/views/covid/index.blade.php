<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('seo.title') }}</title>
         <meta name="description" content="{{ __('seo.description') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/flip.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="emoji m-b-md">
                    <h1><span class="text-block blue">Lost</span><span class="text-block yellow">In</span><span class="text-block rose">Lockdown</span></h1>
                </div>
                <div class="emoji m-b-md">
                    😷☀️
                </div>
                <div class="title m-b-md">
                    @if ($start === 'unknown')
                    {{ __('messages.welcome-unkown') }}
                    @else
                    {!! __('messages.welcome', ['today' => $today, 'country' => $country, 'city' => $city]) !!}
                    @endif

                </div>
                <div class="title m-b-md">
                    {{ __('messages.title') }}
                </div>
                <div class="container">
                    @if ($start === 'unknown')
                    {{ __('messages.unknown') }}
                    @else
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
                <a class="link-1" href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019">COVID19</a>
                <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public">{{ __('messages.advices') }}</a>
                <a href="https://google.com/covid19-map">{{ __('messages.map') }}</a>
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

    <script src="js/app.js"></script>
    <script src="js/flip.min.js"></script>
</body>
</html>