<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
<head>
    <title>Workshop #HTML - FORM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Kodchasan", sans-serif;
            color: #7B3F00;
            font-size: 1.1rem;
            background-image: url('/images/wall.jpg'); 
            background-size: cover; 
            background-position: center; 
        }
        }
        h1 {
            font-weight: 700;
        }
        label {
            color: #7B3F00;
            font-weight: 600;
         }
        .form-control, .form-select, textarea {
            border: 2px solid #7B3F00;
            background-color: rgba(255, 255, 255, 0.7);
        }
        
    </style>
</head>
<body>
    <div class="container mt-4">

        <h1>Workshop #HTML - FORM</h1>

        <form class="mt-4">

            <!-- ชื่อ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col-md-6">
                    <input id="fname" class="form-control" type="text">
                </div>
            </div>

            <!-- สกุล -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="lname">สกุล</label>
                </div>
                <div class="col-md-6">
                    <input id="lname" class="form-control" type="text">
                </div>
            </div>

            <!-- วันเกิด -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="dob">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col-md-6">
                    <input id="dob" class="form-control" type="date">
                </div>
            </div>

            <!-- อายุ + เพศ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="age">อายุ</label>
                </div>
                <div class="col-md-3">
                    <input id="age" class="form-control" type="number" min="1">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>เพศ</label>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>
                </div>
            </div>

            <!-- รูป -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="photo">รูป</label>
                </div>
                <div class="col-md-6">
                    <input id="photo" class="form-control" type="file">
                </div>
            </div>

            <!-- ที่อยู่ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="address">ที่อยู่</label>
                </div>
                <div class="col-md-6">
                    <textarea id="address" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <!-- สีที่ชอบ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="color">สีที่ชอบ</label>
                </div>
                <div class="col-md-6">
                    <select id="color" class="form-select">
                        <option> - </option>
                        <option>แดง</option>
                        <option>น้ำเงิน</option>
                        <option>เขียว</option>
                        <option>เหลือง</option>
                        <option>ชมพู</option>
                    </select>
                </div>
            </div>

            <!-- แนวเพลงที่ชอบ -->
            <div class="row mt-3">
                <div class="col-md-3">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="life">
                        <label class="form-check-label" for="life">Pop</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="country">
                        <label class="form-check-label" for="country">Jazz</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="country">
                        <label class="form-check-label" for="country">Rock</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="other">
                        <label class="form-check-label" for="other">อื่นๆ</label>
                    </div>
                </div>
            </div>

            <!-- Checkbox -->
            <div class="row mt-4">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agree">
                        <label class="form-check-label" for="agree">
                            ยินยอมให้เก็บข้อมูล
                        </label>
                    </div>
                </div>
            </div>

            <!-- ปุ่ม -->
            <div class="row mt-4">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </div>

        </form>

    </div>
</body>
</html>
