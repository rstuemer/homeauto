@if (count($menuWidgets) > 0)
        <div class="gridster widgetContainer">
            <ul class="widgetList">
                @foreach ($menuWidgets as $menuWidget)
                    @include('widgets.widget', ['widget' => $menuWidget->Widget,'menuWidget'=>$menuWidget])
                @endforeach
            </ul>
        </div>

@else
    WIDGETS EMPTY
@endif