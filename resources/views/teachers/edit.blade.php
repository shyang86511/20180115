@extends('teachers.app')

@section('title', 'Edit Teacher Info')

@section('teachers_contents')

    {!! Form::open(['url' => 'teachers/update']) !!}
        <div class="form-group">
            {!! Form::hidden('id', $teacher->id) !!} <br/>
        </div>
        <table border="1" align="center">
            <tr>
                <div class="form-group">
                    <td>{!! Form::label('name', "老師的姓名：") !!}</td>
                    <td>{!! Form::text('name', $teacher->name, ['class' => 'form-control']) !!}</td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>{!! Form::label('email', "老師的電子郵件信箱：") !!}</td>
                    <td>{!! Form::text('email', $teacher->email, ['class' => 'form-control']) !!}</td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>{!! Form::label('professional', "老師的專長：") !!}</td>
                    <td>{!! Form::text('professional', $teacher->professional, ['class' => 'form-control']) !!}</td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>{!! Form::label('url', "老師的網站：") !!}</td>
                    <td>{!! Form::text('url', $teacher->url, ['class' => 'form-control']) !!}</td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td>{!! Form::label('employed_at', "聘僱日：") !!}</td>
                    <td>{!! Form::input('date', 'employed_at', Carbon\Carbon::parse($teacher->employed_at)->format('Y-m-d'), ['class' => 'form-control']) !!}</td>
                </div>
            </tr>
        </table>

    <div class="form-group">
        {!! Form::submit('送出', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
