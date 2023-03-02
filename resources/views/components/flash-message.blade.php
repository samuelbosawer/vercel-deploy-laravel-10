@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
    <p class="{{session('alert')}}">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>
</div>
@endif