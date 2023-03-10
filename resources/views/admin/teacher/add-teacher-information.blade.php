@extends('layouts.dashboard')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Teacher Information</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Teacher Information Form</h6>
                        <form class="forms-sample" action="{{route('teacher.information.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="exampleInputUsername2" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Email Optional">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputAddress" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPosition" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" name="position" class="form-control" id="exampleInputPosition" placeholder="Position">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputNationality" class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nationality" class="form-control" id="exampleInputNationality" placeholder="Nationality">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputBlood" class="col-sm-3 col-form-label">Blood</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blood" class="form-control" id="exampleInputBlood" placeholder="Blood">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMarital" class="col-sm-3 col-form-label">Marital Status</label>
                                <div class="col-sm-9">
                                    <input type="text" name="marital_status" class="form-control" id="exampleInputMarital" placeholder="Marital Status">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputSocial" class="col-sm-3 col-form-label">Social Media Link</label>
                                <div class="col-sm-3">
                                    <input type="text" name="facebook" class="form-control" id="exampleInputSocial" placeholder="Facebook">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="github" class="form-control" id="exampleInputSocial" placeholder="Github">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="linkedin" class="form-control" id="exampleInputSocial" placeholder="Linkedin">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="exampleInputImage" class="col-sm-3 col-form-label">Profile Image</label>
                                <div class="col-sm-9">
                                    <input type="file" id="exampleInputImage" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                                    <img id="img" src="" alt="" style="height: 50px; width: 50px">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
