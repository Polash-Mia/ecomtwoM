@extends('website.master')
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($settings as $setting )
                        {!! $setting->return !!}
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
@endsection