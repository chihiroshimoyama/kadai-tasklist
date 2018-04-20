@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    

             {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="row">
            <div class="form-group">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-offset-6">
                    {!! Form::label('status', 'スターテス：') !!}
                </div>
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-offset-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        
        
         <div class="row">
            <div class="form-group">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-offset-6">
                    {!! Form::label('content', 'タスク:') !!}
                </div>
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-offset-6">
                    {!! Form::text('content', null, ['class' =>'form-control']) !!}
                </div>
            </div>
        </div>
    
   
    

        
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection