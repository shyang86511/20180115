@extends('teachers.app')

@section('title', 'LHU 所有老師')

@section('teachers_contents')
        <table border="1" align="center">
            <tr>
                <th>姓名</th>
                <th>電子郵件信箱</th>
                <th>專長</th>
                <th>檢視或編輯</th>
            </tr>
        @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name  }}</td>
                <td><a href="{{ $teacher->email }}">{{ $teacher->email }}</a></td>
                <td>{{ $teacher->professional  }}</td>
                <td>
                    <a href="{{ route('teachers.show', ['id' => $teacher->id])  }}">檢視</a></a>
                    <a href="{{ route('teachers.edit', ['id' => $teacher->id])  }}">編輯</a></a>
                </td>
            </tr>
        @empty
            目前沒有老師
        @endforelse
        </table>
@stop
