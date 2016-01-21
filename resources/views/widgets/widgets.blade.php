@if (count($widgetByRow) > 0)
        <!-- Form Error List -->

        @foreach ($widgetByRow->all() as $widgetRow)

            <div class="gridster">
                <ul>
                @foreach($widgetRow->all() as $widget)
                    @include('widgets.widget', ['$widget' => $widget,'widgetsCount'=>count($widgetRow)])
                @endforeach
                </ul>
            </div>

        @endforeach

@endif