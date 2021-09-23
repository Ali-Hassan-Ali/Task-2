@extends('site.layouts.master')

@section('page_content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Login / Register
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">

                @include('dashboard.layouts.messages')
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div style="border-right: 2px solid #088178;" class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login to your account</h3>
                                    </div>
                                    <form method="post"  action="{{ route('user.login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" value="{{ old('email') }}" required="" name="email" placeholder="Email or Phone">
                                            @error('email')
                                            <p class="text-danger" > {{ $message }} </p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Password">
                                            @error('password')
                                            <p class="text-danger" > {{ $message }} </p>
                                            @enderror
                                        </div>
                                        {{-- <select class="form-control-lg" name="status">
                                            <label>customer type</label>
                                            <option value="seller">seller</option>
                                            <option value="user">custmer</option>
                                        </select> --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                   <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Login</button>
                                               </div>
                                               <div class="col-md-8">
                                                   <div class="text-muted text-center"> Did you  <a href="{{ url('/register') }}"> forget your password ? </a></div>
                                               </div>
                                           </div>
                                       </div>
                                   </form>                                   
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6">
                        <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                            <div class="padding_eight_all bg-white">

                                <ul class="btn-login list_none text-center mb-15">
                                    <li style="display: block; margin-top:10px ; "><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                    <li style="display: block; margin-top:10px ; " ><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                </ul>
                                <div class="text-muted text-center">Don't have an account ? </div>
                                <div class="text-muted text-center">
                                 <ul>
                                    <li style="display: block; margin-top:10px ; " ><a href="#" class="btn btn-fill-out btn-block hover-up">Sign Up Now </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
</main>
@endsection