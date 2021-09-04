@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Settings</h2>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    @include('backend.layouts.notification')

                @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{route('settings.update')}}" method="post">
                                @method('put')
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Project Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$setting->title}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta Keywords</label>
                                            <input type="text" class="form-control" placeholder="Meta Keywords" name="meta_keywords" value="{{$setting->meta_keywords}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Footer</label>
                                            <input type="text" class="form-control" placeholder="Footer" name="footer" value="{{$setting->footer}}">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea class="form-control" rows="5" placeholder="Write some text..." name="meta_description">{{$setting->meta_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Logo</label>
                                            <div class="input-group">
                                           <span class="input-group-btn">
                                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                               <i class="fa fa-picture-o"></i> Choose
                                             </a>
                                           </span>
                                                <input id="thumbnail" class="form-control" type="text" name="logo" value="{{asset($setting->logo)}}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;">
                                                @if(get_setting('logo'))
                                                    <img src="{{asset($setting->logo)}}" alt="Logo" style="border: 1px solid #ddd; padding:4px 8px;">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Favicon</label>
                                            <div class="input-group">
                                           <span class="input-group-btn">
                                             <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                               <i class="fa fa-picture-o"></i> Choose
                                             </a>
                                           </span>
                                                <input id="thumbnail1" class="form-control" type="text" name="favicon" value="{{$setting->favicon}}">
                                            </div>
                                            <div id="holder1" style="margin-top:15px;max-height:100px;">
                                                @if(get_setting('favicon'))
                                                    <img src="{{asset($setting->favicon)}}" alt="Favicon" style="border: 1px solid #ddd; padding:4px 8px;">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Email address" name="email" value="{{$setting->email}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Address" name="address" value="{{$setting->address}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Phone number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$setting->phone}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">FAX <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="FAX" name="fax" value="{{$setting->fax}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Facebook Url</label>
                                            <input type="text" class="form-control" placeholder="Facebook URL" name="facebook_url" value="{{$setting->facebook_url}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Twitter URL </label>
                                            <input type="text" class="form-control" placeholder="Twitter Url" name="twitter_url" value="{{$setting->twitter_url}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Linkedin URL</label>
                                            <input type="text" class="form-control" placeholder="Linkedin URL" name="linkedin_url" value="{{$setting->linkedin_url}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Pinterest URL </label>
                                            <input type="text" class="form-control" placeholder="Pinterest URL" name="pinterest_url" value="{{$setting->pinterest_url}}">
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
        $('#lfm1').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
@endsection
