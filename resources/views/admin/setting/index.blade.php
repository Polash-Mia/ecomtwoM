@extends('admin.master')

@section('title')
    Add Setting
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Setting Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('setting.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> logo</label>
                            <div class="col-sm-9">
                                <input type="file" name="logo" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Bkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="bkas" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Facebook Pixel</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixel" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> Title Bar</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> Facebook link</label>
                            <div class="col-sm-9">
                                <input type="text" name="facebook" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> instragram link</label>
                            <div class="col-sm-9">
                                <input type="text" name="instragram" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> youtube link</label>
                            <div class="col-sm-9">
                                <input type="text" name="youtube" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> facebook page </label>
                            <div class="col-sm-9">
                                <input type="text" name="fbpage" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Footer Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="footer_description" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contact Us</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="contact" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Privacy Policy</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="privacy" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Return Policy</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="return" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Term Condition </label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="term" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                                          
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
