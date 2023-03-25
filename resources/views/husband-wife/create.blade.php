@extends('layouts.app')

@section('title','Add Husband Wife New Pair')

@section('content')

    <form action="{{ route('husband-wife.store') }}" method="post">
        @csrf
        <table border='2'>
            <tr>
                <th>Husband</th>
                <th>Wife</th>
                <th rowspan="2"><button type="submit">Add</button></th>
            </tr>
            <tr>
                <td><input type="text" name="husband_name" id=""></td>
                <td><input type="text" name="wife_name" id=""></td>
            </tr>
        </table>
    </form>

@endsection
