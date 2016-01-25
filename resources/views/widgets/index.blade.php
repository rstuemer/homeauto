@extends('layouts.app')

@section('content')
    <div class="row-fluid singlePage">
        <h1> Widgets</h1>
        <table class="table table-striped table-bordered">
            <thead class="thead-inverse">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Title
                </th>
                <th>
                    DataRoute
                </th>
                <th>
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($widgetsList as $widget)
                <tr>
                    <td>
                        <a href="#" id="name" class="editable" data-type="text" data-pk="{{$widget->id}}" data-url="{{$editPath."/".$widget->id."/quick_update"}}"
                           data-title="Enter Name">{{$widget->name}}</a>
                    </td>
                    <td> <a href="#" id="target" class="editable" data-type="text" data-pk="{{$widget->id}}" data-url="{{$editPath."/".$widget->id."/quick_update"}}"
                            data-title="Enter Target">{{$widget->title}}</a></td>
                    <td> <a href="#" id="icon" class="editable" data-type="text" data-pk="{{$widget->id}}" data-url="{{$editPath."/".$widget->id."/quick_update"}}"
                            data-title="Enter Icon">{{$widget->dataRoute}}</a></td>
                    <td>
                       <a href="#" class="widgetDelete" data-id="{{$widget->id}}"> <i class="fa fa-trash-o"> </i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

    <script>
        $(function() {
            $('.widgetDelete').each(function(){

                $(this).click(function(){

                    id = $(this).data("id");
                    var element = $(this);
                    bootbox.confirm("Wollen sie wirklich dieses Widget löschen?", function(result) {
                        if(result) {

                            $.delete("/widgets/" + id, null, function () {
                                element.parent().parent().remove();
                            });
                        }
                    });

                })

            })
        });


    </script>
@endsection