<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covid Counter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/flip.min.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ __('messages.title') }}
                </div>

                <div class="tick"
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

            </div>
        </div>

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

                Tick.count.up('{{ __('time.start') }}').onupdate = function(value) {
                    tick.value = value;
                };

            }
        </script>

        <script src="js/app.js"></script>
        <script src="js/flip.min.js"></script>

    </body>
</html>
