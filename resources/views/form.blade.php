<?php header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure"); ?>
@extends('layout.app')
@section('content')
    <style>
        body{
            background: #00283F;
        }
        .bg-white{
            background: white;
        }
        .round-border-5{
            border-radius: 5px;
        }
        .error{
            color:red;
        }
        input.error, textarea.error{
            border:1px solid red;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4 bg-white  round-border-5" style="padding:20px; margin-top: 30px; margin-bottom: 30px;">
            <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_17" data-bold="inherit" style="text-align: center; color: rgb(36, 130, 189); font-size: 18px;" data-gramm="false" bis_skin_checked="1" contenteditable="false"><b>
                Get Case Value</b>
            </div>
            @foreach($errors->all() as $message)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!! $message !!}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-12" style="margin-top:40px;">

                <form action="{{route('submit-form')}}" id="lead-form" method="post" autocomplete="off">
                    @csrf
                    <input type="hidden" name="vid" value="9">
                    <input type="hidden" name="leadtype" value="legal">
                    <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                    <input type="text" style="display: none;" name="url" value="{{route('get_case_value')}}">
                <div class="form-group" >
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="+1 (555) 555-1234" required>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="40202" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfAccident">Date of accident</label>
                        <input type="date" class="form-control" name="dateOfAccident" id="dateOfAccident" placeholder="yyyy-mm-dd" required>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="1" id="tcpaConsent" name="tcpaConsent" required>
                        <label class="form-check-label" for="tcpaConsent">TCPA Consent</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>


        </div>
    </div>
</div>
    <script id="LeadiDscript" type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/0d1f2cfe-92be-d814-d5a6-c67fdd78d3ed.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=DE46FD47-CF53-D4E8-4F27-09FCD95B4AED&lck=0d1f2cfe-92be-d814-d5a6-c67fdd78d3ed&snippet_version=2' /></noscript>
<script type="text/javascript">
    (function() {
        var tf = document.createElement('script');
        tf.type = 'text/javascript'; tf.async = true;
        tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&sandbox=true&l=" + new Date().getTime() + Math.random();
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
    })();
</script>
<noscript>
    <img src="https://api.trustedform.com/ns.gif" />
</noscript>
@endsection
@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script>
        $('#lead-form').validate();
    </script>
@endsection
