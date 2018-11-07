@extends('layouts.app')
@section('menu')

    @if($menu)
        <nav>
            <div class="menu classic">
                <ul id="nav" class="topmenu">
                    <!--$menu->roots() - получаем только родительские элементы меню-->
                    @include('customMenuItems', ['items'=>$menu->roots()])
                </ul>
            </div>
        </nav>
    @endif
@endsection


