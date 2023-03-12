@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            
                    <h4 class="card-title mb-4">Edit Setting</h4>
        
                    <form action="{{route('setting.update',['id'=>$setting->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Logo </label>
                            <div class="col-sm-9">
                                <input type="file" name="logo" class="form-control" id="horizontal-email-input" accept="image/*" required>
                                <img src="{{asset($setting->logo)}}" alt="" height="150" width="150">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile" value="{{$setting->mobile}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Bkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="bkas" value="{{$setting->bkas}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Pixel</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixel" value="{{$setting->pixel}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Title bar</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value="{{$setting->title}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> Facebook link</label>
                            <div class="col-sm-9">
                                <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> instragram link</label>
                            <div class="col-sm-9">
                                <input type="text" name="instragram" value="{{ $setting->facebook }}" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> youtube link</label>
                            <div class="col-sm-9">
                                <input type="text" name="youtube" value="{{ $setting->facebook }}" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> facebook page </label>
                            <div class="col-sm-9">
                                <input type="text" name="fbpage" value="{{ $setting->fbpage }}" class="form-control" id="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input"  class="col-sm-3 col-form-label">Footer Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="footer_description" id="horizontal-email-input">{{ $setting->footer_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contact Us</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="contact" id="horizontal-email-input">{{ $setting->contact }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Privacy Policy</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="privacy" id="horizontal-email-input">{{ $setting->privacy }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Return Policy</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="return" id="horizontal-email-input">{{ $setting->return }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Term Condition </label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="term" id="horizontal-email-input">{{ $setting->term }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
        
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection