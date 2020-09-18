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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blogs/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.blogs')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.blogs')}}">
												<a data-toggle="modal" data-target="#myModal{{$blogs->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$blogs->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$blogs->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['blogs.destroy', $blogs->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blogs')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.blogs')}}">
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
										
{!! Form::open(['url'=>aurl('/blogs/'.$blogs->id),'method'=>'put','id'=>'blogs','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('blog_title_ar',trans('admin.blog_title_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_ar', $blogs->blog_title_ar ,['class'=>'form-control','placeholder'=>trans('admin.blog_title_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_title_en',trans('admin.blog_title_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_en', $blogs->blog_title_en ,['class'=>'form-control','placeholder'=>trans('admin.blog_title_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_ar',trans('admin.blog_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_ar', $blogs->blog_ar ,['class'=>'form-control','placeholder'=>trans('admin.blog_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_en',trans('admin.blog_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_en', $blogs->blog_en ,['class'=>'form-control','placeholder'=>trans('admin.blog_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_img',trans('admin.blog_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('blog_img',['class'=>'form-control','placeholder'=>trans('admin.blog_img')]) !!}
        @if(!empty($blogs->blog_img))
        <img src="{{it()->url($blogs->blog_img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_date',trans('admin.blog_date'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_date', $blogs->blog_date ,['class'=>'form-control date-picker','placeholder'=>trans('admin.blog_date'),'readonly'=>'readonly','data-date'=>date("Y-m-d"),'data-date-format'=>'yyyy-mm-dd']) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Disc',trans('admin.Disc'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('Disc', $blogs->Disc ,['class'=>'form-control','placeholder'=>trans('admin.Disc')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('keyword',trans('admin.keyword'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('keyword', $blogs->keyword ,['class'=>'form-control','placeholder'=>trans('admin.keyword')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('p_color',trans('admin.p_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::color('p_color', $blogs->p_color ,['class'=>'form-control','placeholder'=>trans('admin.p_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('img_color',trans('admin.img_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('img_color', $blogs->img_color ,['class'=>'form-control','placeholder'=>trans('admin.img_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('youtube_link',trans('admin.youtube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('youtube_link', $blogs->youtube_link ,['class'=>'form-control','placeholder'=>trans('admin.youtube_link')]) !!}
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
		
