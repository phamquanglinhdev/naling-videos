<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-film'></i> Danh mục</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('video') }}'><i class='nav-icon lab la-youtube'></i> Videos</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-user'></i> Tài khoản</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('feature') }}'><i class='nav-icon la la-book'></i> Khoá học đang có</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

