@extends('template.default')

@section('content')
<h3 class="mb-4 text-center">ข้อมูลที่บันทึก</h3>

<label>ชื่อ</label>
<input value="{{ $fname }}" readonly class="form-control mb-3">

<label>สกุล</label>
<input value="{{ $lname }}" readonly class="form-control mb-3">

<label>วัน/เดือน/ปีเกิด</label>
<input value="{{ $dob }}" readonly class="form-control mb-3">

<label>อายุ</label>
<input value="{{ $age }}" readonly class="form-control mb-3">

<label>เพศ</label>
<input value="{{ $gender }}" readonly class="form-control mb-3">

<label>ที่อยู่</label>
<textarea readonly class="form-control mb-3">{{ $address }}</textarea>

<label>สีที่ชอบ</label>
<input value="{{ $color }}" readonly class="form-control mb-3">

<label>แนวเพลงที่ชอบ</label>
<input value="{{ $music }}" readonly class="form-control mb-3">
@endsection
