<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/auth.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Open+Sans:wght@700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer> </script>
    <style>
        *{
            font-family: 'Roboto', sans-serif;        
        }
    </style>
    <title>Login Page</title>
</head>
<body>
    <div class="main">
        <div class="left_part">
            <div class="account">
                <h1 class="logo ">facebook</h1>
                <p style="font-size:30px;font-weight:400;">Connect with friends and the world around you on Facebook.</p>
                <!-- <div class="recent_login ">
                    <h2 class="s">Recent Login</h2>
                    <p class="s">Click your picture or add an account.</p>
                </div> -->
                <!-- <div class="account_container">
                    <div class="account_add_card">
                        <div class="add_sign">
                            <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="75" cy="75" r="75" fill="#1877F2"/>
                            <rect x="64" y="15" width="22" height="120" rx="11" fill="white"/>
                            <rect x="135" y="64" width="22" height="120" rx="11" transform="rotate(90 135 64)" fill="white"/>
                            </svg>
                        </div>
                        <div class="text_div">
                            Add Account
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Registration form start -->

        <div id="register_container">
            <div class="container">
                <div class="upper_part">
                    <h1>Sign Up</h1>
                    <label class="close_btn" for="myCheck" onclick="myFunction()">
                        <svg class="cross_sign" width="278" height="277" viewBox="0 0 278 277" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.538788" y="35.8378" width="50.1803" height="341" rx="10" transform="rotate(-45 0.538788 35.8378)" fill="black"/>
                            <rect x="36.0216" y="276.961" width="50.1803" height="341" rx="10" transform="rotate(-135 36.0216 276.961)" fill="black"/>
                        </svg>
                    </label>
                </div>
                <form action="{{route('register-user')}}" method="POST" class="lower_part">
                    @csrf
                    <div class="name_part">
                        <input id="fname" class="fnaming" name="fname" type="text" placeholder="First name" value="{{old('fname')}}">
                        <span class="error_message">
                            @error('fname')
                                {{$message}}
                            @enderror   
                        </span>
                        <input id="lname" class="lnaming" name="lname" type="text" placeholder="Last name" value="{{old('lname')}}">
                        <span class="error_message">
                            @error('lname')
                                {{$message}}
                            @enderror   
                        </span>
                    </div>
                    <input class="form_control" type="email" placeholder="Email name" name="email" value="{{old('email')}}">
                        <span class="error_message">
                            @error('email')
                                {{$message}}
                            @enderror   
                        </span>
                    <input class="form_control" type="password" placeholder="New password" name="password" value="{{old('password')}}">
                        <span class="error_message">
                            @error('password')
                                {{$message}}
                            @enderror   
                        </span>
                    <p>Birthday</p>
                    <div class="dob">
                        @php
                            $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                        @endphp

                        <select class="dob_select" name="month" id="month">
                            @for($i=0;$i<count($months);$i++)
                                <option value="{{$months[$i]}}">{{$months[$i]}}</option>
                            @endfor
                        </select>
                        
                        <select class="dob_select" name="day" id="day">
                            @for($i=1;$i<=31;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <select class="dob_select" name="year" id="year">
                            @for($i=2022;$i>1950;$i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <p>Gender</p>
                    <div class="gender">
                        <input class="gend" type="radio" name="gender" value="male"> Male<br>
                        <input class="gend" type="radio" name="gender" value="female"> Female<br>
                        <input class="gend" type="radio" name="gender" value="other"> Other
                    </div>
                    <p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.</p>
                    <div class="btn_container">
                        <button class="signup_button" onclick="handleSubmit()">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Registration form end -->

        <!-- Login form start -->

        <div class="right_part">
            
            <div class="form_container">
                <form class="login_form" method="POST" id="login_form" action="{{route('login-user')}}">
                    @csrf
                    <div class="login_section">
                        <input class="form_control" type="email" placeholder="Email" name="lemail" value="{{old('lemail')}}">
                        <span class="error_message">
                            @error('lemail')
                                {{$message}}
                            @enderror
                        </span>
                        <input class="form_control" type="password" placeholder="Password" name="lpassword" >
                        <span class="error_message">
                            @error('lpassword')
                                {{$message}}
                            @enderror
                        </span>
                        <button>Log In</button>
                        <div class="password_reset_section">
                            <a class="forgot_password_link" href="#" style="color:blue;">Forgot password?</a>
                        </div>
                    </div>
                    <div class="signup_section">
                        <!-- Sign up button stays here -->
                        <input type="checkbox" id="myCheck" onchange="myFunction()">                        
                        <div for="show" class="create_account_btn">
                            <label class="create_account_btn" for="myCheck">Create new account</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="random_text">
                <p><a href="#" style="color:black;"><strong>Create a Page&nbsp;</strong></a>for a celebrity, brand or business.</p>
            </div>
        </div>

        <!-- Login form end -->
    </div>
    <footer>
        <div class="footer_container">
            <div class="language_section">

            </div>
            <div class="random_links">

            </div>
            <div class="company_copyright">
                
            </div>
        </div>
    </footer>
    <script>
        function myFunction() {
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            // Get the output text
            var container = document.getElementById("register_container");

            // If the checkbox is checked, display the output text
            if (checkBox.checked == true){
                container.style.display = "block";
            } else {
                container.style.display = "none";
            }
        }
        function handleSubmit(){
            var container = document.getElementById("register_container");
            return (container.style.display = "block");
        }
        function registered($message){
            alert($message);
        }
        // function f
    </script>
    @if(session()->has('success'))
        <div 
            x-data="{show:true}"
            x-init = "setTimeout(()=>show = false,3000)"
            x-show="show"
            style="position:fixed;background-color:teal;padding: 3px 10px;bottom:10px;right:10px;color:white;border-radius:10px;font-size:16px"
        >
            <p>{{session('success')}}</p>
        </div>

    @endif
    @if(session()->has('fail'))
        <div 
            x-data="{show:true}"
            x-init = "setTimeout(()=>show = false,3000)"
            x-show="show"
            style="position:fixed;background-color:red;padding: 3px 10px;bottom:10px;right:10px;color:white;border-radius:10px;font-size:16px"
        >
            <p>{{session('fail')}}</p>
        </div>

    @endif
</body>
</html>