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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('causes/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.causes')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.causes')}}">
												<a data-toggle="modal" data-target="#myModal{{$causes->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$causes->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$causes->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['causes.destroy', $causes->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('causes')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.causes')}}">
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
										
{!! Form::open(['url'=>aurl('/causes/'.$causes->id),'method'=>'put','id'=>'causes','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('title_ar',trans('admin.title_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('title_ar', $causes->title_ar ,['class'=>'form-control','placeholder'=>trans('admin.title_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('title_en',trans('admin.title_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('title_en', $causes->title_en ,['class'=>'form-control','placeholder'=>trans('admin.title_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('disc_ar',trans('admin.disc_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('disc_ar', $causes->disc_ar ,['class'=>'form-control','placeholder'=>trans('admin.disc_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('disc_en',trans('admin.disc_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('disc_en', $causes->disc_en ,['class'=>'form-control','placeholder'=>trans('admin.disc_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('country_id',trans('admin.country_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('country_id',App\Model\Country::pluck("Country_ar","id"), $causes->country_id ,['class'=>'form-control','placeholder'=>trans('admin.country_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('city_id',trans('admin.city_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('city_id', $causes->city_id ,['class'=>'form-control','placeholder'=>trans('admin.city_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('cause_data',trans('admin.cause_data'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('cause_data', $causes->cause_data ,['class'=>'form-control date-picker','placeholder'=>trans('admin.cause_data'),'readonly'=>'readonly','data-date'=>date("Y-m-d"),'data-date-format'=>'yyyy-mm-dd']) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('category_id',trans('admin.category_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('category_id',App\Model\category::pluck("category_ar","id"), $causes->category_id ,['class'=>'form-control','placeholder'=>trans('admin.category_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('disc_page',trans('admin.disc_page'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('disc_page', $causes->disc_page ,['class'=>'form-control','placeholder'=>trans('admin.disc_page')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('keyword',trans('admin.keyword'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('keyword', $causes->keyword ,['class'=>'form-control','placeholder'=>trans('admin.keyword')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('p_color',trans('admin.p_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::color('p_color', $causes->p_color ,['class'=>'form-control','placeholder'=>trans('admin.p_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('img_color',trans('admin.img_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('img_color', $causes->img_color ,['class'=>'form-control','placeholder'=>trans('admin.img_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image',trans('admin.image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('image',['class'=>'form-control','placeholder'=>trans('admin.image')]) !!}
        @if(!empty($causes->image))
        <img src="{{it()->url($causes->image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('YouTube_link',trans('admin.YouTube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('YouTube_link', $causes->YouTube_link ,['class'=>'form-control','placeholder'=>trans('admin.YouTube_link')]) !!}
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
		
