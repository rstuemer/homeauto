


@if($alarmsystem->securitystatus =="fine")

<div class="status green largeFont">
    <i class="fa fa-check fa-12 largeIcon"></i>
    {{$alarmsystem->securitystatus}}
</div>
@else
    <div class="status red largeFont">
        <i class="fa fa-bell-o fa-6 largeIcon"></i>
        {{$alarmsystem->securitystatus}}
    </div>
    @endif
