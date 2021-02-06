@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget-extra body-req portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="uppercase caption-subject bold font-dark">{{ $title }}</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ aurl('tearninglearn/create') }}"
                            data-toggle="tooltip" title="{{ trans('admin.add') }}  {{ trans('admin.tearninglearn') }}">
                            <i class="fa fa-plus"></i>
                        </a>
                        <span data-toggle="tooltip"
                            title="{{ trans('admin.delete') }}  {{ trans('admin.tearninglearn') }}">
                            <a data-toggle="modal" data-target="#myModal{{ $tearninglearn->id }}"
                                class="btn btn-circle btn-icon-only btn-default" href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </span>
                        <div class="modal fade" id="myModal{{ $tearninglearn->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">x</button>
                                        <h4 class="modal-title">{{ trans('admin.delete') }}؟</h4>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-exclamation-triangle"></i> {{ trans('admin.ask_del') }}
                                        {{ trans('admin.id') }} ({{ $tearninglearn->id }}) ؟
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['tearninglearn.destroy', $tearninglearn->id],
                                        ]) !!}
                                        {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                                        <a class="btn btn-default" data-dismiss="modal">{{ trans('admin.cancel') }}</a>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ aurl('tearninglearn') }}"
                            data-toggle="tooltip"
                            title="{{ trans('admin.show_all') }}   {{ trans('admin.tearninglearn') }}">
                            <i class="fa fa-list"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
                            data-original-title="{{ trans('admin.fullscreen') }}"
                            title="{{ trans('admin.fullscreen') }}">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="col-md-12">

                        {!! Form::open(['url' => aurl('/tearninglearn/' . $tearninglearn->id), 'method' => 'put', 'id' =>
                        'tearninglearn', 'files' => true, 'class' => 'form-horizontal form-row-seperated']) !!}
                        <div class="form-group">
                            {!! Form::label('main_image', trans('admin.main_image'), ['class' => 'col-md-3 control-label'])
                            !!}
                            <div class="col-md-9">
                                {!! Form::file('main_image', ['class' => 'form-control', 'placeholder' =>
                                trans('admin.main_image')]) !!}
                                @if (!empty($tearninglearn->main_image))
                                    <img src="{{ it()->url($tearninglearn->main_image) }}"
                                        style="width:150px;height:150px;" />
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            {!! Form::label('main_p_ar', trans('admin.main_p_ar'), ['class' => 'col-md-3 control-label'])
                            !!}
                            <div class="col-md-9">
                                {!! Form::text('main_p_ar', $tearninglearn->main_p_ar, ['class' => 'form-control',
                                'placeholder' => trans('admin.main_p_ar')]) !!}
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            {!! Form::label('main_p_en', trans('admin.main_p_en'), ['class' => 'col-md-3 control-label'])
                            !!}
                            <div class="col-md-9">
                                {!! Form::text('main_p_en', $tearninglearn->main_p_en, ['class' => 'form-control',
                                'placeholder' => trans('admin.main_p_en')]) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            {!! Form::label('sup_p_ar', trans('admin.sup_p_ar'), ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-9">
                                {!! Form::text('sup_p_ar', $tearninglearn->sup_p_ar, ['class' => 'form-control',
                                'placeholder' => trans('admin.sup_p_ar')]) !!}
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            {!! Form::label('sup_p_en', trans('admin.sup_p_en'), ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-9">
                                {!! Form::text('sup_p_en', $tearninglearn->sup_p_en, ['class' => 'form-control',
                                'placeholder' => trans('admin.sup_p_en')]) !!}
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            {!! Form::label('Desc_search', trans('admin.Desc_search'), [
                            'class' => 'col-md-3
                            control-label',
                            ]) !!}
                            <div class="col-md-9">
                                {!! Form::textarea('Desc_search', $tearninglearn->Desc_search, ['class' => 'form-control',
                                'placeholder' => trans('admin.Desc_search')]) !!}
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            {!! Form::label('Key_word', trans('admin.Key_word'), ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-9">
                                {!! Form::textarea('Key_word', $tearninglearn->Key_word, ['class' => 'form-control',
                                'placeholder' => trans('admin.Key_word')]) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            {!! Form::submit(trans('admin.save'), ['class' => 'btn btn-success']) !!}
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
