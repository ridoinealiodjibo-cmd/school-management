@extends('layout')

@section('content')
    <div style="margin: 20px;">
        <h3>Student Details</h3>

        <table style="border: 0px;">
            <tr>
                <td>
                    <p class="lbl"><b>ID :</b> {{ $student->id }} </p>
                    <p class="lbl"><b>Name :</b> {{ $student->name }} </p>
                    <p class="lbl"><b>Phone :</b> {{ $student->phone }} </p>
                    <p class="lbl"><b>Email :</b> {{ $student->email }} </p>
                    <p class="lbl"><b>Section :</b> {{ $student->section }} </p>
                </td>
                <td style="padding-left:150px;">
                    <img src="/image/{{ $student->image }}" width="128" height="128">
                </td>
            </tr>
        </table>
    </div>
@endsection

