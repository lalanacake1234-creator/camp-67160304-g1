@extends('template.default')
@section('title', 'Workshop FROM')
@section('header', 'Workshop #HTML - FORM')
@section('content')
<form method="POST" action="{{ url('/submit') }}" enctype="multipart/form-data">
    @csrf
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-lg-7">
        <h1></h1>

            <!-- ชื่อ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col-md-7">
                    <input id="fname" name="fname" class="form-control" type="text">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุชื่อ
                    </div>
                </div>
            </div>

            <!-- สกุล -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="lname">สกุล</label>
                </div>
                <div class="col-md-7">
                    <input id="lname" name="lname" class="form-control" type="text">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุสกุล
                    </div>
                </div>
            </div>

            <!-- วันเกิด -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="dob">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col-md-7">
                    <input id="dob" name="dob" class="form-control" type="date">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุวัน/เดือน/ปีเกิด
                    </div>
                </div>
            </div>

            <!-- อายุ + เพศ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="age">อายุ</label>
                </div>
                <div class="col-md-7">
                    <input id="age" name="age" class="form-control" type="number">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุอายุ
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>เพศ</label>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" value="ชาย" id="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" value="หญิง" id="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>
                </div>
            </div>

            <!-- รูป -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="photo">รูป</label>
                </div>
                <div class="col-md-7">
                    <input id="photo" name="photo" class="form-control" type="file">
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดเลือกไฟล์
                    </div>
                </div>
            </div>

            <!-- ที่อยู่ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="address">ที่อยู่</label>
                </div>
                <div class="col-md-7">
                    <textarea id="address" name="address" class="form-control"></textarea>
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุที่อยู่
                    </div>
                </div>
            </div>

            <!-- สีที่ชอบ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="color">สีที่ชอบ</label>
                </div>
                <div class="col-md-7">
                    <select id="color" name="color" class="form-select">
                        <option> - </option>
                        <option>แดง</option>
                        <option>น้ำเงิน</option>
                        <option>เขียว</option>
                        <option>เหลือง</option>
                        <option>ชมพู</option>
                    </select>
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class="invalid-feedback">
                        โปรดระบุ
                    </div>
                </div>
            </div>

            <!-- แนวเพลงที่ชอบ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-md-7">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="music" value="Pop" id="Pop">
                        <label class="form-check-label" for="Pop">Pop</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="music" value="Jazz" id="Jazz">
                        <label class="form-check-label" for="Jazz">Jazz</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="music" value="Rock" id="Rock">
                        <label class="form-check-label" for="Rock">Rock</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="music" value="อื่นๆ" id="other">
                        <label class="form-check-label" for="other">อื่นๆ</label>
                    </div>
                </div>
            </div>

            <!-- Checkbox -->
            <div class="row mt-4">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agree" name="agree" value="yes">
                        <label class="form-check-label" for="agree">
                            ยินยอมให้เก็บข้อมูล
                        </label>
                        <div class="invalid-feedback">
                        โปรดเลือกยินยอมเพื่อดำเนินการต่อ
                        </div>
                    </div>
                </div>
            </div>

            <!-- ปุ่ม -->
            <div class="row mt-4">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <button class="btn btn-success" onclick="clickMe()" type="submit">Submit</button>
                </div>
                <div class="col">
                    <button class="btn btn-light" type="reset">Reset</button>
                </div>
            </div>


        </div>
    </div>

@endsection

<!-- @push('scripts')
        <script>
            console.log('Hello World! JS')
            console.error('Hello Error!')
            console.warn('Hello Warn!')
        </script>
@endpush -->

@push('scripts')
        <script>
            let clickMe = function (){
            let fname = document.getElementById('fname')
            // fname.value = "from ClickMe"
            // console.log(fname.value)
            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            let lname = document.getElementById('lname')
            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }else{
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            let dob = document.getElementById('dob')
            if(dob.value == ""){
                dob.classList.remove('is-valid')
                dob.classList.add('is-invalid')
            }else{
                dob.classList.remove('is-invalid')
                dob.classList.add('is-valid')
            }

            let age = document.getElementById('age')
            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            }else{
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            let male = document.getElementById('male')
            let female = document.getElementById('female')
            if(!male.checked && !female.checked){
            male.classList.remove('is-valid')
            male.classList.add('is-invalid')
            female.classList.remove('is-valid')
            female.classList.add('is-invalid')
            }else{
            male.classList.remove('is-invalid')
            male.classList.add('is-valid')
            female.classList.remove('is-invalid')
            female.classList.add('is-valid')
            }

            let photo = document.getElementById('photo')
            if(photo.value == ""){
                photo.classList.remove('is-valid')
                photo.classList.add('is-invalid')
            }else{
                photo.classList.remove('is-invalid')
                photo.classList.add('is-valid')
            }

            let address = document.getElementById('address')
            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            }else{
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            let color = document.getElementById('color')
            if(color.value == "-"){
                color.classList.remove('is-valid')
                color.classList.add('is-invalid')
            }else{
                color.classList.remove('is-invalid')
                color.classList.add('is-valid')
            }

            let Pop = document.getElementById('Pop')
            let Jazz = document.getElementById('Jazz')
            let Rock = document.getElementById('Rock')
            let other = document.getElementById('other')
            if(!Pop.checked && !Jazz.checked && !Rock.checked && !other.checked){
            Pop.classList.remove('is-valid')
            Pop.classList.add('is-invalid')
            Jazz.classList.remove('is-valid')
            Jazz.classList.add('is-invalid')
            Rock.classList.remove('is-valid')
            Rock.classList.add('is-invalid')
            other.classList.remove('is-valid')
            other.classList.add('is-invalid')
            }else{
            Pop.classList.remove('is-invalid')
            Pop.classList.add('is-valid')
            Jazz.classList.remove('is-invalid')
            Jazz.classList.add('is-valid')
            Rock.classList.remove('is-invalid')
            Rock.classList.add('is-valid')
            other.classList.remove('is-invalid')
            other.classList.add('is-valid')
            }

            let agree = document.getElementById('agree')
            if(!agree.checked){
                agree.classList.remove('is-valid')
                agree.classList.add('is-invalid')
            }else{
                agree.classList.remove('is-invalid')
                agree.classList.add('is-valid')
            }
            }
            let myfunc = (callback)=>{
                callback("in Callback")
            }
            callMe = (param) => {
                console.log(param)
            }
            myfunc(callMe)

            let myvar1 =  1
            let myvar2 = "1"
            myvar2 = parseInt(myvar2)

            console.log(myvar2 + myvar1 +"\n\n\n\nทดสอบ")
            console.log(1 == '1')
    </script>
@endpush
