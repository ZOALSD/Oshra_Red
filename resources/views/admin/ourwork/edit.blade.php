@extends('admin.index')
	@section('content')
	<div class="row">
		<div class="col-md-12">
				<div class="widget-extra body-req portlet light bordered">
						<div class="portlet-title">
								<div class="caption">
										<span class="caption-subject bold uppercase font-dark">{{$title}}</span>
								</div>
								<div class="actions">
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('ourwork/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.ourwork')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.ourwork')}}">
												<a data-toggle="modal" data-target="#myModal{{$ourwork->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$ourwork->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$ourwork->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['ourwork.destroy', $ourwork->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('ourwork')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.ourwork')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('admin.fullscreen')}}"
												title="{{trans('admin.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/ourwork/'.$ourwork->id),'method'=>'put','id'=>'ourwork','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_imig',trans('admin.main_imig'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('main_imig',['class'=>'form-control','placeholder'=>trans('admin.main_imig')]) !!}
        @if(!empty($ourwork->main_imig))
        <img src="{{it()->url($ourwork->main_imig)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_ar',trans('admin.main_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_ar', $ourwork->main_p_ar ,['class'=>'form-control','placeholder'=>trans('admin.main_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_en',trans('admin.main_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_en', $ourwork->main_p_en ,['class'=>'form-control','placeholder'=>trans('admin.main_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_ar',trans('admin.sub_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('sub_p_ar', $ourwork->sub_p_ar ,['class'=>'form-control','placeholder'=>trans('admin.sub_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_en',trans('admin.sub_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('sub_p_en', $ourwork->sub_p_en ,['class'=>'form-control','placeholder'=>trans('admin.sub_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_ar',trans('admin.what_our_do_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('what_our_do_ar', $ourwork->what_our_do_ar ,['class'=>'form-control','placeholder'=>trans('admin.what_our_do_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_en',trans('admin.what_our_do_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('what_our_do_en', $ourwork->what_our_do_en ,['class'=>'form-control','placeholder'=>trans('admin.what_our_do_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_img',trans('admin.what_our_do_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('what_our_do_img',['class'=>'form-control','placeholder'=>trans('admin.what_our_do_img')]) !!}
        @if(!empty($ourwork->what_our_do_img))
        <img src="{{it()->url($ourwork->what_our_do_img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_ar',trans('admin.why_oshra_unique_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('why_oshra_unique_ar', $ourwork->why_oshra_unique_ar ,['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_en',trans('admin.why_oshra_unique_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('why_oshra_unique_en', $ourwork->why_oshra_unique_en ,['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_img',trans('admin.why_oshra_unique_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('why_oshra_unique_img',['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_img')]) !!}
        @if(!empty($ourwork->why_oshra_unique_img))
        <img src="{{it()->url($ourwork->why_oshra_unique_img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('page_description',trans('admin.page_description'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('page_description', $ourwork->page_description ,['class'=>'form-control','placeholder'=>trans('admin.page_description')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('key_Word',trans('admin.key_Word'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('key_Word', $ourwork->key_Word ,['class'=>'form-control','placeholder'=>trans('admin.key_Word')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('p_color',trans('admin.p_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::color('p_color', $ourwork->p_color ,['class'=>'form-control','placeholder'=>trans('admin.p_color')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
