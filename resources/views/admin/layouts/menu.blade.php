<li class="nav-item start {{ active_link(null, 'active open') }} ">
    <a href="{{ aurl('') }}" class="nav-link nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">{{ trans('admin.dashboard') }}</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item start {{ active_link('settings', 'active open') }}  ">
    <a href="{{ aurl('settings') }}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{ trans('admin.settings') }}</span>
        <span class="selected"></span>
    </a>
</li>


<li class="nav-item start {{ active_link('settings', 'active open') }}  ">
    <a href="{{ aurl('homepage/1/edit') }}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{ trans('admin.homepage') }}</span>
        <span class="selected"></span>
    </a>
</li>


<li class="nav-item start {{ active_link('ourwork', 'active open') }}  ">
    <a href="{{ aurl('ourwork/1/edit') }}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{ trans('admin.ourwork') }}</span>
    </a>
</li>

<li class="nav-item start {{ active_link('tearninglearn', 'active open') }}  ">
    <a href="{{ aurl('tearninglearn/1/edit') }}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{ trans('admin.tearninglearn') }}</span>
    </a>
</li>


{{-- <li class="nav-item start {{active_link('ourwork','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{trans('admin.ourwork')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('ourwork','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('ourwork','active open')}}  "> 
            <a href="{{aurl('ourwork')}}" class="nav-link "> 
                <i class="fa "></i>
                <span class="title">{{trans('admin.ourwork')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('ourwork/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li> --}}

<li class="nav-item start {{ active_link('addadmin', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.addadmin') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('addadmin', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('addadmin', 'active open') }}  ">
            <a href="{{ aurl('addadmin') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.addadmin') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('addadmin/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
{{-- /
    <div>

    /Home.update<li class="nav-item start {{active_link('homepage','active open')}} ">

    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{trans('admin.homepage')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('homepage','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('homepage','active open')}}  "> 
            <a href="{{aurl('homepage')}}" class="nav-link "> 
                <i class="fa "></i>
                <span class="title">{{trans('admin.homepage')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('homepage/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> </li>
    </div> --}}





<li class="nav-item start {{ active_link('conutry', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.conutry') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('conutry', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('conutry', 'active open') }}  ">
            <a href="{{ aurl('conutry') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.conutry') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('conutry/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('city', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.city') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('city', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('city', 'active open') }}  ">
            <a href="{{ aurl('city') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.city') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('city/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('category', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.category') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('category', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('category', 'active open') }}  ">
            <a href="{{ aurl('category') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.category') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('category/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('causes', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.causes') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('causes', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('causes', 'active open') }}  ">
            <a href="{{ aurl('causes') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.causes') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('causes/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('blogs', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.blogs') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('blogs', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('blogs', 'active open') }}  ">
            <a href="{{ aurl('blogs') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.blogs') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('blogs/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('blogsbage', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.blogsbage') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('blogsbage', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('blogsbage', 'active open') }}  ">
            <a href="{{ aurl('blogsbage') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.blogsbage') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('blogsbage/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item start {{ active_link('contact', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.contact') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('contact', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('contact', 'active open') }}  ">
            <a href="{{ aurl('contact') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.contact') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('contact/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li>

{{-- <li class="nav-item start {{ active_link('tearninglearn', 'active open') }} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{ trans('admin.tearninglearn') }} </span>
        <span class="selected"></span>
        <span class="arrow {{ active_link('tearninglearn', 'open') }}"></span>
    </a>
    <ul class="sub-menu" style="{{ active_link('', 'block') }}">
        <li class="nav-item start {{ active_link('tearninglearn', 'active open') }}  ">
            <a href="{{ aurl('tearninglearn') }}" class="nav-link ">
                <i class="fa "></i>
                <span class="title">{{ trans('admin.tearninglearn') }} </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start">
            <a href="{{ aurl('tearninglearn/create') }}" class="nav-link ">
                <i class="fa fa-plus"></i>
                <span class="title"> {{ trans('admin.create') }} </span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</li> --}}
