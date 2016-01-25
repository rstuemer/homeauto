@extends('layouts.app')

@section('content')
    <div class="row-fluid singlePage">
        <h1> Menüs</h1>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        ParentMenu
                    </th>
                    <th>
                        Target
                    </th>
                    <th>Icon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menusList as $menu)
                    <tr>
                    <td>
                        <a href="#" id="name" class="editable" data-type="text" data-pk="{{$menu->id}}" data-url="{{$menuEditPath."/".$menu->id."/quick_update"}}"
                           data-title="Enter Name">{{$menu->name}}</a>
                    </td>

                        @if($menu->parentMenu!=0)


                    <td>       <a href="#" data-source="{{"/API/Einstellungen/".$menuEditPath."/?valueColumn=id&textColumn=name"}}" id="parentMenu" class="editable" data-type="select" data-pk="{{$menu->id}}" data-url="{{$menuEditPath."/".$menu->id."/quick_update"}}"
                                  data-title="Enter Name">{{$menu->parentMenuModel->name}}</a></td>
                        @else
                            <td>
                                <a href="#" data-source="{{"/API/Einstellungen/".$menuEditPath."/?valueColumn=id&textColumn=name"}}"  id="parentMenu" class="editable" data-type="select" data-pk="{{$menu->id}}" data-url="{{$menuEditPath."/".$menu->id."/quick_update"}}"
                                          data-title="Select parentMenu"></a>
                            </td>
                        @endif

                    <td> <a href="#" id="target" class="editable" data-type="text" data-pk="{{$menu->id}}" data-url="{{$menuEditPath."/".$menu->id."/quick_update"}}"
                            data-title="Enter Target">{{$menu->target}}</a></td>
                        <td> <a href="#" id="icon" class="editable" data-type="text" data-pk="{{$menu->id}}" data-url="{{$menuEditPath."/".$menu->id."/quick_update"}}"
                                data-title="Enter Icon">{{$menu->icon}}</a></td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
@endsection