<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">

            @foreach ($menus as $menu)

                @if(count($menu->childMenus)>0)
                    <li>
                    <a class="dropmenu" href="#"><i class="{{$menu->icon}}"></i><span class="hidden-tablet"> {{$menu->name}}</span><span class="label label-important"> {{count($menu->childMenus)}} </span></a>

                        <ul>
                            @foreach ($menu->childMenus as $child)

                                <li><a class="submenu" href="{{$child->target}}"><i class="{{$child->icon}}}"></i><span class="hidden-tablet">{{$child->name}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{$menu->target}}"><i class="{{$menu->icon}} icon-edit"></i><span class="hidden-tablet"> {{$menu->name}}</span></a></li>
                @endif


            @endforeach
        </ul>
    </div>
</div>