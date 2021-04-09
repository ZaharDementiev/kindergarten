<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
{{--<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>--}}
@if(backpack_user()->type == \App\Models\User::DIRECTOR)
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('parent') }}"><i class="la la-users nav-icon"></i> Родители</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('teacher') }}"><i class="la la-business-time nav-icon"></i> Учителя</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('childrens') }}"><i class="la la-child nav-icon"></i> Дети</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subjects') }}"><i class="la la-book nav-icon"></i> Предметы</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('marks') }}"><i class="la la-marker nav-icon"></i> Оценки</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('teacher-groups') }}"><i class="la la-group nav-icon"></i> Группы учителей</a></li>
@elseif(backpack_user()->type == \App\Models\User::TEACHER)
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('parent') }}"><i class="la la-users nav-icon"></i> Родители</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('childrens') }}"><i class="la la-child nav-icon"></i> Дети</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('marks') }}"><i class="la la-marker nav-icon"></i> Оценки</a></li>
@elseif(backpack_user()->type == \App\Models\User::PARENT)
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('marks') }}"><i class="la la-marker nav-icon"></i> Оценки</a></li>
@endif
