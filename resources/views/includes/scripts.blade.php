<script>




    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
            }
        });

        $.put = function(url, data, callback, type){

            if ( $.isFunction(data) ){
                type = type || callback,
                        callback = data,
                        data = {}
            }

            return $.ajax({
                url: url,
                method: 'PUT',
                success: callback,
                data: data,
                contentType: type
            });
        }

        $.delete = function(url, data, callback, type){

            if ( $.isFunction(data) ){
                type = type || callback,
                        callback = data,
                        data = {}
            }

            return $.ajax({
                url: url,
                type: 'DELETE',
                success: callback,
                data: data,
                contentType: type
            });
        }
        $.fn.editable.defaults.ajaxOptions = {type: "PUT"};
        $('.editable').editable();


        $(".gridster ul").gridster({
            widget_margins: [10, 10],
            widget_base_dimensions: [250, 250],
            autogrow_cols:true,
            resize: {
                enabled: true,
                stop: function(e, ui, $widget) {
                    updateMenuWidget($widget);
                }
            },
            draggable: {
                start: function(e, ui, $widget) {
                    //log.innerHTML = 'START position: ' + ui.position.top +' '+ ui.position.left + "<br >" + log.innerHTML;
                },

                drag: function(e, ui, $widget) {
                   // log.innerHTML = 'DRAG offset: ' + ui.pointer.diff_top +' '+ ui.pointer.diff_left + "<br >" + log.innerHTML;
                },

                stop: function(e, ui, $widget) {

                    $('.widget').each(function(){
                        updateMenuWidget($(this));
                    })

                }
            }

        })});


    $('.widget > .box-content').each(function(){
          dataRoute =   $(this).data('dataroute');

        contentBox = $(this);
        if( dataRoute != "")
            $(this).load( "http://localhost:8000/" +dataRoute);

    })

    function updateMenuWidget(widget){
        var newSizeX = widget.data('sizex');
        var newSizeY = widget.data('sizey');
        var col = widget.data('col');
        var row = widget.data('row');
        var menuWidgetid =  widget.data('menuwidgetid');
        $.put('/menuWidget/'+menuWidgetid,{"menuwidgetid":menuWidgetid,"row":row,"col":col,"sizex":newSizeX,"sizey":newSizeY});
    }


</script>