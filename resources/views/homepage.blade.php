<x-layout>
    <x-slot name="content">

        <!-- Create post card start -->
        <div id='create_post_card' class="create_post_card">
            <div class="post_card">
                <div class="create_post">
                    <div class="upper">
                        <span></span>
                        <h3>Create Post</h3>
                        <button id="close_post_btn" class="closebtn">
                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/OCLXtMwRrfj.png&quot;); background-position: -154px -74px; background-size: 190px 150px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </button>
                    </div>
                    <!-- Post feed container start -->
                    <div class="lower">
                        <div class="profile_container">
                            <div class="image_container">
                                <img src="{{auth()->user()->profile->profile_pic}}" alt="" />
                            </div>
                            <div class="info">
                                <h3>{{auth()->user()->fname}} {{auth()->user()->lname}}</h3>
                                <div class="privacy_selector">
                                    <div class="icon">
                                        <!-- <img class="hu5pjgll lzf7d6o1" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/JSmL99pVrUz.png" alt="Only me" height="14" width="14"> -->
                                    </div>
                                    <p style="font-size: 14px;">Only me</p>
                                    <div class="icon">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/OCLXtMwRrfj.png&quot;); background-position: -98px -136px; background-size: 190px 150px; width: 14px; height: 14px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <form class="creat_post_form" action="{{route('postfeed')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- status start -->
                            <textarea name="caption" id="" cols="30" rows="10" placeholder="What's on your mind, {{auth()->user()->fname}}?"></textarea>
                            <!-- status start -->

                            <!-- Preview images start-->
                            <div class="image_preview" id="preview">

                            </div>
                            <!-- Preview images start-->

                            <div class="color_emoti">
                                <div class="icon">
                                    <img src="/images/color_picker.png" alt="">
                                </div>
                                <div class="icon">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/ID-6ITjaL2Q.png&quot;); background-position: 0px -26px; background-size: 26px 212px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                            </div>
                            <div class="add_post_section">
                                <label for="">Add to your post</label>
                                <div class="action_container">
                                    <label for="img_input" class="post_action_content">
                                        <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/mk6Qfpcq-kT.png&quot;); background-position: 0px -190px; background-size: 34px 510px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </label>
                                    <input name="images[]" id="img_input" style="display:none;" type="file" multiple class="post_action_content image_post">
                                </input>
                                <div class="post_action_content tag_people">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/mk6Qfpcq-kT.png&quot;); background-position: 0px -164px; background-size: 34px 510px; background-repeat: no-repeat; display: inline-block;"></i>                                </div>
                                    <div class="post_action_content add_emo">
                                        <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/mk6Qfpcq-kT.png&quot;); background-position: 0px -138px; background-size: 34px 510px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <div class="post_action_content add_location">
                                        <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/jFFXSLBdcxF.png&quot;); background-position: 0px -234px; background-size: 26px 260px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <div class="post_action_content mic">
                                        <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/V8UkvudEuVL.png&quot;); background-position: 0px -104px; background-size: 26px 156px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <div class="post_action_content dot_option">
                                        <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/mk6Qfpcq-kT.png&quot;); background-position: 0px -112px; background-size: 34px 510px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="submitt" id="postbtn" class="post_add_btn" style="outline:none ;" action=''>Post</button>
                        </form>

                    </div>
                    <!-- Post feed container end -->
                </div>
            </div>
        </div>
        <!-- Create post card end -->
        
        <x-navbar/>

        <!-- Container Left Sidebar Start -->
        <div class="container">
            <div class="left_sidebar" >
                <div class="upper_section">
                    <div class="profile_section">
                        <div class="image_container">
                            <img src="/{{auth()->user()->profile->profile_pic}}" alt="" class="profile_pic" />
                        </div>
                        <p>{{auth()->user()->fname}} {{auth()->user()->lname}}</p>
                    </div>
                    <ul class="link_section">
                        <div class="link_container">
                            <div class="icon">
                            <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/-XF4FQcre_i.png" alt="" style="height: 36px; width: 36px;">
                            </div>
                            <li class="link">Friends</li>
                        </div>
                        <div class="link_container">
                            <div class="icon">
                                <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/mk4dH3FK0jT.png" alt="" style="height: 36px; width: 36px;">
                            </div>
                            <li class="link">Groups</li>
                        </div>
                        <div class="link_container">
                            <div class="icon">
                                <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/9BDqQflVfXI.png" alt="" style="height: 36px; width: 36px;">
                            </div>
                            <li class="link">Marketplace</li>
                        </div>
                        <div class="link_container">
                            <div class="icon">
                            <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/A1HlI2LVo58.png" alt="" style="height: 36px; width: 36px;">
                            </div>
                            <li class="link">Watch</li>
                        </div>
                        <div class="link_container">
                            <div class="icon">
                                <img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/AYj2837MmgX.png" alt="" style="height: 36px; width: 36px;">
                            </div>
                            <li class="link">Memories</li>
                        </div>
                        <div class="link_container" style="margin-left: 5px;">
                            <div class="icon" style="display:flex; align-items:center; justify-content:center;background-color:#d8dadf; width:25px; height:25px; border-radius:50%;">
                                <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3"><g fill-rule="evenodd" transform="translate(-446 -542)"><path fill-rule="nonzero" d="M452.707 549.293a1 1 0 0 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L456 552.586l-3.293-3.293z"></path></g></svg>
                            </div>
                            <li class="link">See more</li>
                            <div class="icon"></div>
                        </div>
                    </ul>
                </div>
                <div class="lower_section">
                    <h1 class="header">Your Shortcuts</h1>
                </div>

        </div>
        <!-- Container Right Sidebar End -->

        <!-- Main Content Start -->
        <div class="main_content">

            <div class="story_section">
                <div class="arrow">
                    <svg width="40" height="40" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="100" fill="white"/>
                        <path d="M155.35 104.256C158.253 101.301 158.211 96.5528 155.256 93.6499L107.106 46.3444C104.151 43.4415 99.4026 43.4836 96.4997 46.4383C93.5968 49.393 93.6388 54.1416 96.5936 57.0445L139.394 99.0938L97.3444 141.894C94.4415 144.849 94.4836 149.597 97.4383 152.5C100.393 155.403 105.142 155.361 108.044 152.406L155.35 104.256ZM36.0664 107.508L150.066 106.5L149.934 91.5002L35.9336 92.5091L36.0664 107.508Z" fill="#606266"/>
                    </svg>

                </div>
                <a href="/story" class="add">
                    <img src="{{auth()->user()->profile->profile_pic}}" alt="" />
                    <svg width="35" height="35" viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="330" cy="330" r="330" fill="#0475FF"/>
                        <rect x="303.221" y="145" width="54.5588" height="371" rx="13" fill="white"/>
                        <rect x="516" y="303.221" width="54.5588" height="371" rx="13" transform="rotate(90 516 303.221)" fill="white"/>
                    </svg>
                    <div class="addsign">
                        <span></span>
                        <p>Create Story</p>
                    </div>  
                </a>
                <div class="story_container">
                    <div class="profile">
                        <img src="" alt="" />
                        <span></span>
                    </div>
                </div>
                <div class="story_container"></div>
                <div class="story_container"></div>
                <div class="story_container"></div>
            </div>

            <div class="create_post">
                <div class="upper">
                    <div class="image_container">

                        <img src="{{auth()->user()->profile->profile_pic}}" alt="" />  
                    </div>
                    <button id="post_card_open_btn">
                        <p>What's on your mind, {{auth()->user()->fname}}?</p>
                    </button>                  
                </div>
                <span class="line">
                </span>
                <div class="lower">
                    <div class=" post_content live_v">
                        <div class="icon">
                            <svg fill="#E73F5A" viewBox="0 0 25 25" width="2em" height="2em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 fxtw5amg rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M113.029 2.514c-.363-.088-.746.014-1.048.234l-2.57 1.88a.999.999 0 0 0-.411.807v8.13a1 1 0 0 0 .41.808l2.602 1.901c.219.16.477.242.737.242.253 0 .508-.077.732-.235.34-.239.519-.65.519-1.065V3.735a1.25 1.25 0 0 0-.971-1.22m-20.15 6.563c.1-.146 2.475-3.578 5.87-3.578 3.396 0 5.771 3.432 5.87 3.578a.749.749 0 0 1 0 .844c-.099.146-2.474 3.578-5.87 3.578-3.395 0-5.77-3.432-5.87-3.578a.749.749 0 0 1 0-.844zM103.75 19a3.754 3.754 0 0 0 3.75-3.75V3.75A3.754 3.754 0 0 0 103.75 0h-10A3.754 3.754 0 0 0 90 3.75v11.5A3.754 3.754 0 0 0 93.75 19h10z" transform="translate(354 158.5)"></path><path d="M98.75 12c1.379 0 2.5-1.121 2.5-2.5S100.129 7 98.75 7a2.503 2.503 0 0 0-2.5 2.5c0 1.379 1.121 2.5 2.5 2.5" transform="translate(354 158.5)"></path></g></g></svg>
                        </div>
                        <p>Live Video</p>
                    </div>
                    <div class="post_content photo_vid">
                        <div class="icon">
                            <svg width="25" height="25" viewBox="0 0 254 267" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="34.8032" width="113" height="219" rx="25" transform="rotate(-8.03926 0 34.8032)" fill="#41B35D"/>
                            <rect x="59.4694" y="0.51062" width="195" height="245.737" rx="30" transform="rotate(6.42608 59.4694 0.51062)" fill="white"/>
                            <g clip-path="url(#clip0_14_40)">
                            <rect x="70.5923" y="7" width="175" height="236" rx="25" transform="rotate(6.95871 70.5923 7)" fill="white"/>
                            <rect x="76.9148" y="222.276" width="150.042" height="127.414" transform="rotate(-37.4692 76.9148 222.276)" fill="#41B35D"/>
                            <rect x="5.01008" y="207.36" width="114" height="168.318" transform="rotate(-37.4692 5.01008 207.36)" fill="#41B35D" stroke="white" stroke-width="10"/>
                            <circle cx="121.5" cy="75.5" r="22.5" fill="#41B35D"/>
                            </g>
                            <rect x="74.9497" y="12.5689" width="165" height="226" rx="20" transform="rotate(6.95871 74.9497 12.5689)" stroke="#41B35D" stroke-width="10"/>
                            <defs>
                            <clipPath id="clip0_14_40">
                            <rect x="70.5923" y="7" width="175" height="236" rx="25" transform="rotate(6.95871 70.5923 7)" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </div>
                        <p>Photo/video</p>
                        </div>
                    <div class="post_content activity">
                        <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#eab026" d="M130.7 313.9C126.5 300.4 137.8 288 151.1 288H364.5C378.7 288 389.9 300.4 385.8 313.9C368.1 368.4 318.2 408 258.2 408C198.2 408 147.5 368.4 130.7 313.9V313.9zM208.4 192C208.4 209.7 194 224 176.4 224C158.7 224 144.4 209.7 144.4 192C144.4 174.3 158.7 160 176.4 160C194 160 208.4 174.3 208.4 192zM304.4 192C304.4 174.3 318.7 160 336.4 160C354 160 368.4 174.3 368.4 192C368.4 209.7 354 224 336.4 224C318.7 224 304.4 209.7 304.4 192zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/>
                        </svg>
                        </div>
                        <p>Feeling/Activity</p>
                    </div>
                </div>
            </div>  

            <div class="create_room">
                <div class="icon_containter">
                    <div class="icon">
                        <svg width="197" height="134" viewBox="0 0 197 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="166" height="134" rx="23" fill="url(#paint0_linear_12_29)"/>
                            <rect x="70" y="19" width="27" height="96" rx="5" fill="#EFEFEF"/>
                            <rect x="131.5" y="53.5" width="27" height="96" rx="5" transform="rotate(90 131.5 53.5)" fill="#EFEFEF"/>
                            <path d="M197 100.715V29.4791C197 27.3439 194.833 25.8922 192.858 26.705L166 37.7607V93.7117L192.974 103.534C194.93 104.246 197 102.797 197 100.715Z" fill="url(#paint1_linear_12_29)"/>
                            <defs>
                            <linearGradient id="paint0_linear_12_29" x1="2.32115e-07" y1="70" x2="166" y2="71" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#5061CF"/>
                            <stop offset="1" stop-color="#BF46A9"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_12_29" x1="197" y1="65" x2="166" y2="65" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#BD46A9"/>
                            <stop offset="1" stop-color="#4755BC"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <p>Create room</p>
                </div>
                <div class="room_members_container">
                    
                </div>
            </div>

            @foreach($posts as $post)
                <div class="post_card">
                    <div class="top_part">
                        <div class="right">
                            <div class="profile_pic">
                                <img src="{{$post->author->profile->profile_pic}}" alt="" />
                            </div>
                            <div class="post_detail">
                                <h3>{{$post->author->fname}}</h3>
                                <p>{{$post->created_at->diffForHumans()}}    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM51.68 295.1L83.41 301.5C91.27 303.1 99.41 300.6 105.1 294.9L120.5 279.5C132 267.1 151.6 271.1 158.9 285.8L168.2 304.3C172.1 313.9 182.8 319.1 193.5 319.1C208.7 319.1 219.6 305.4 215.2 290.8L209.3 270.9C204.6 255.5 216.2 240 232.3 240H234.6C247.1 240 260.5 233.3 267.9 222.2L278.6 206.1C284.2 197.7 283.9 186.6 277.8 178.4L261.7 156.9C251.4 143.2 258.4 123.4 275.1 119.2L292.1 114.1C299.6 113.1 305.7 107.8 308.6 100.6L324.9 59.69C303.4 52.12 280.2 48 255.1 48C141.1 48 47.1 141.1 47.1 256C47.1 269.4 49.26 282.5 51.68 295.1L51.68 295.1zM450.4 300.4L434.6 304.9C427.9 306.7 420.8 304 417.1 298.2L415.1 295.1C409.1 285.7 398.7 279.1 387.5 279.1C376.4 279.1 365.1 285.7 359.9 295.1L353.8 304.6C352.4 306.8 350.5 308.7 348.2 309.1L311.1 330.1C293.9 340.2 286.5 362.5 294.1 381.4L300.5 393.8C309.1 413 331.2 422.3 350.1 414.9L353.5 413.1C363.6 410.2 374.8 411.8 383.5 418.1L385 419.2C422.2 389.7 449.1 347.8 459.4 299.7C456.4 299.4 453.4 299.6 450.4 300.4H450.4zM156.1 367.5L188.1 375.5C196.7 377.7 205.4 372.5 207.5 363.9C209.7 355.3 204.5 346.6 195.9 344.5L163.9 336.5C155.3 334.3 146.6 339.5 144.5 348.1C142.3 356.7 147.5 365.4 156.1 367.5V367.5zM236.5 328.1C234.3 336.7 239.5 345.4 248.1 347.5C256.7 349.7 265.4 344.5 267.5 335.9L275.5 303.9C277.7 295.3 272.5 286.6 263.9 284.5C255.3 282.3 246.6 287.5 244.5 296.1L236.5 328.1zM321.7 120.8L305.7 152.8C301.7 160.7 304.9 170.4 312.8 174.3C320.7 178.3 330.4 175.1 334.3 167.2L350.3 135.2C354.3 127.3 351.1 117.6 343.2 113.7C335.3 109.7 325.6 112.9 321.7 120.8V120.8z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>  
                        <div class="left">
                            <div class="option_btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="caption">
                        <h4>{{$post->caption}}</h4>
                    </div>
                    <div class="image_container">
                        @foreach($post->images as $image)
                            <img src="{{$image->image}}" alt="" />
                        @endforeach
                    </div>

                    <div class="bottom_part">
                        <div class="upper_half">
                            <div class="likes">
                                <div class="icons_container">
                                    <div class="icon" style="z-index:3">
                                        <svg width="20" height="20" viewBox="0 0 347 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="173.5" cy="175" rx="173.5" ry="175" fill="url(#paint0_linear_21_73)"/>
                                            <path d="M110 265.386V143.761C110 134.167 102.947 126.875 94.25 126.875H62.75C54.053 126.875 47 134.656 47 143.761V264.898C47 274.492 54.053 281.784 62.75 281.784H94.25C102.962 282.761 110 275.431 110 265.386ZM299 144.304C299 129.916 288.428 118.253 275.375 118.253H203.27C214.477 97.6687 220.26 74.3373 220.26 66.1168C220.25 53.3136 211.145 40 195.887 40C164.815 40 182.913 81.3471 142.632 116.884L134.609 123.943C128.802 129.101 125.848 136.648 125.799 144.25C125.788 144.263 125.799 144.25 125.799 144.25L125.75 231.125C125.75 239.324 129.251 247.05 135.2 251.97L152.003 265.864C165.617 277.169 182.204 283.25 199.234 283.25H228.125C241.178 283.25 251.75 271.592 251.75 257.198C251.75 255.225 251.514 253.32 251.137 251.47C260.609 248.066 267.5 238.401 267.5 226.781C267.5 221.814 266.173 217.22 263.986 213.272C274.932 211.035 283.25 200.447 283.25 187.742C283.25 180.955 280.842 174.83 276.989 170.193C289.255 169.281 299 158.096 299 144.304Z" fill="white"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_21_73" x1="173" y1="24.5" x2="173.5" y2="350" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#629DDF"/>
                                            <stop offset="1" stop-color="#046EE4"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="icon" style="z-index:2;left:15px;">
                                        <svg width="20" height="20" viewBox="0 0 635 635" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="317.5" cy="317.5" r="317.5" fill="url(#paint0_linear_21_93)"/>
                                            <circle cx="317.5" cy="317.5" r="317.5" fill="url(#paint1_linear_21_93)"/>
                                            <path d="M135 113.023C149.941 70.9507 216.814 66.422 237.5 108.381" stroke="url(#paint2_linear_21_93)" stroke-width="20"/>
                                            <path d="M370 106.562C390.074 66.6823 456.989 70.5326 472.278 114.745" stroke="url(#paint3_linear_21_93)" stroke-width="20"/>
                                            <ellipse cx="187.5" cy="208" rx="44.5" ry="55" fill="#242424"/>
                                            <ellipse cx="210" cy="172" rx="6" ry="8" fill="white"/>
                                            <ellipse cx="408.5" cy="206" rx="44.5" ry="55" fill="#242424"/>
                                            <ellipse cx="423" cy="170" rx="6" ry="8" fill="white"/>
                                            <path d="M412.888 413.431C428.797 484.292 399.465 574 308.75 574C210.576 564.521 192.555 486.888 204.058 413.431C211.093 368.508 230.515 301.384 308.75 291C375.727 291 401.753 363.835 412.888 413.431Z" fill="url(#paint4_linear_21_93)"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_21_93" x1="317.5" y1="0" x2="317.5" y2="635" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FDE86E"/>
                                            <stop offset="1" stop-color="#F7A935"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_21_93" x1="317.5" y1="0" x2="317.5" y2="635" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FDE86E"/>
                                            <stop offset="1" stop-color="#F7A935"/>
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_21_93" x1="120.882" y1="112.638" x2="267.881" y2="120.325" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#E8952D"/>
                                            <stop offset="0.46875" stop-color="#DD7E08" stop-opacity="0.401042"/>
                                            <stop offset="1" stop-color="#DA8D2C"/>
                                            </linearGradient>
                                            <linearGradient id="paint3_linear_21_93" x1="356.04" y1="104.418" x2="500.932" y2="130.386" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#E8952D"/>
                                            <stop offset="0.46875" stop-color="#DD7E08" stop-opacity="0.401042"/>
                                            <stop offset="1" stop-color="#DA8D2C"/>
                                            </linearGradient>
                                            <linearGradient id="paint4_linear_21_93" x1="309.007" y1="311.146" x2="309.007" y2="592.558" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#4D2514"/>
                                            <stop offset="0.222445" stop-color="#592913"/>
                                            <stop offset="1" stop-color="#85380F"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="icon" style="z-index:1;left:30px;">
                                        <svg width="20" height="20" viewBox="0 0 635 635" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="317.5" cy="317.5" r="317.5" fill="url(#paint0_linear_21_98)"/>
                                            <path d="M82 268.287V262.856C82 197.402 128.474 141.574 191.839 130.824C232.959 123.717 276.471 137.631 306.461 168.205L317.5 179.423L327.711 168.205C358.529 137.631 401.213 123.717 443.161 130.824C506.544 141.574 553 197.402 553 262.856V268.287C553 307.148 537.177 344.323 509.212 370.823L342.982 528.793C336.082 535.348 326.975 539 317.5 539C308.025 539 298.918 535.348 292.018 528.793L125.779 370.823C97.8503 344.323 82.0003 307.148 82.0003 268.287H82Z" fill="white"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_21_98" x1="317.5" y1="0" x2="317.5" y2="635" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F8698A"/>
                                            <stop offset="1" stop-color="#E41544"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="total_likes">
                                    <p>You and</p>
                                    <p>5.7K others</p>
                                </div>
                            </div>
                            <div class="interactions">
                                <p>900 Comments</p>
                                <p>2 Shares</p>
                            </div>
                        </div>
                        <span></span>
                        <div class="lower_half">
                            <div class="like">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#727272"  d="M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z"/>
                                </svg>
                                <p>Like</p>
                            </div>
                            <div class="comment">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#727272" d="M447.1 0h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.98c0 9.836 11.02 15.55 19.12 9.7l124.9-93.68h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 0 447.1 0zM464 352c0 8.75-7.25 16-16 16h-160l-80 60v-60H64c-8.75 0-16-7.25-16-16V64c0-8.75 7.25-16 16-16h384c8.75 0 16 7.25 16 16V352z"/>
                                </svg>  
                                <p>Comment</p>
                            </div>
                            <div class="share">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="white " stroke="#727272" stroke-width="30" storke-location="inside"
                                    d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z"/>
                                </svg>
                                <p>Share</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Main Content End -->

        <!-- Right Sidebar Start -->
        <div class="right_sidebar">
                <div class="upper_part">
                    <h3 class="header">Sponsored</h3>
                    <div class="s_content">
                        <div class="img_container"><img src="/images/about.png" alt="" /></div>
                        <div class="s_content_details">
                            <h2 class="title"> Something </h2>
                            <p><a href="#">something.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="lower_part">
                    <div class="top_part">
                        <h3 class="header">Contacts</h3>
                        <div class="icons_container">
                            <span class="icon">
                                <svg viewBox="0 0 16 16" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh gl3lb2sf hhz5lgdu"><g fill-rule="evenodd" transform="translate(-448 -544)"><path d="M457.25 552.5H455v2.25a.75.75 0 0 1-1.5 0v-2.25h-2.25a.75.75 0 0 1 0-1.5h2.25v-2.25a.75.75 0 0 1 1.5 0V551h2.25a.75.75 0 0 1 0 1.5m6.38-4.435a.62.62 0 0 0-.64.047l-2.49 1.634v-1.394a1.854 1.854 0 0 0-1.852-1.852l-8.796.002a1.854 1.854 0 0 0-1.851 1.852v6.793c0 1.021.83 1.852 1.852 1.852l1.147-.002h7.648a1.854 1.854 0 0 0 1.852-1.851v-1.392l2.457 1.61a.641.641 0 0 0 .673.071.663.663 0 0 0 .37-.601v-6.167c0-.26-.142-.49-.37-.602"></path></g></svg>
                            </span>
                            <span class="icon">
                                <svg viewBox="0 0 16 16" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh gl3lb2sf hhz5lgdu"><g fill-rule="evenodd" transform="translate(-448 -544)"><g fill-rule="nonzero"><path d="M10.743 2.257a6 6 0 1 1-8.485 8.486 6 6 0 0 1 8.485-8.486zm-1.06 1.06a4.5 4.5 0 1 0-6.365 6.364 4.5 4.5 0 0 0 6.364-6.363z" transform="translate(448 544)"></path><path d="M10.39 8.75a2.94 2.94 0 0 0-.199.432c-.155.417-.23.849-.172 1.284.055.415.232.794.54 1.103a.75.75 0 0 0 1.112-1.004l-.051-.057a.39.39 0 0 1-.114-.24c-.021-.155.014-.356.09-.563.031-.081.06-.145.08-.182l.012-.022a.75.75 0 1 0-1.299-.752z" transform="translate(448 544)"></path><path d="M9.557 11.659c.038-.018.09-.04.15-.064.207-.077.408-.112.562-.092.08.01.143.034.198.077l.041.036a.75.75 0 0 0 1.06-1.06 1.881 1.881 0 0 0-1.103-.54c-.435-.058-.867.018-1.284.175-.189.07-.336.143-.433.2a.75.75 0 0 0 .624 1.356l.066-.027.12-.061z" transform="translate(448 544)"></path><path d="m13.463 15.142-.04-.044-3.574-4.192c-.599-.703.355-1.656 1.058-1.057l4.191 3.574.044.04c.058.059.122.137.182.24.249.425.249.96-.154 1.41l-.057.057c-.45.403-.986.403-1.411.154a1.182 1.182 0 0 1-.24-.182zm.617-.616.444-.444a.31.31 0 0 0-.063-.052c-.093-.055-.263-.055-.35.024l.208.232.207-.206.006.007-.22.257-.026-.024.033-.034.025.027-.257.22-.007-.007zm-.027-.415c-.078.088-.078.257-.023.35a.31.31 0 0 0 .051.063l.205-.204-.233-.209z" transform="translate(448 544)"></path></g></g></svg>
                            </span>
                            <span class="icon">
                                <svg viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh jnigpg78 odw8uiq3"><g fill-rule="evenodd" transform="translate(-446 -350)"><path d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"></path></g></svg>
                            </span>
                        </div>
                    </div>
                    <div class="contact_container"  >
                        <div class="contact">
                            <div class="img_container" style="position:relative">
                                <img src="https://external.fpkr1-1.fna.fbcdn.net/safe_image.php?w=500&h=261&url=https%3A%2F%2Flh3.googleusercontent.com%2FH5BHTvkvBM2-MGrd7uIXMSAoLr5cte9_eWot_iO_tVwdscttIM72VMyZ3HioOSE7NFMstB6FEztJqNwn4cibVOF5QlHqR30if_KCHKlUA9MEJ0A%3Dw1200-h630-rj-pp-e365&cfs=1&ext=jpg&_nc_oe=70122&_nc_sid=06c271&_nc_o2e=1&ccb=3-6&_nc_hash=AQFmIY_9J9VSrf-Z" alt="" />
                            </div>
                                <span style="background-color:#d3e3d6;color:#2f9a48;font-size:10px;height:10px;width:20px;border:solid 3px white;
                                    font: weight 600px; display:flex;align-items:center;justify-content:center;position:absolute;bottom:0;left:15px;border-radius:15px;">
                                    1h
                                </span>
                            <h3 style="font-weight: 500;" class="name">
                                Prajal Rana
                            </h3>
                        </div>
                        <div class="contact">
                            <div class="img_container" style="position:relative">
                                <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-1/262932630_3345736799044076_440811122378242122_n.jpg?stp=c0.0.480.480a_dst-jpg_p480x480&_nc_cat=111&ccb=1-6&_nc_sid=7206a8&_nc_ohc=6K9JhMjLoi4AX85mBu2&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_cd6UvmI_d7ugJR5DMCYcpzFy36ZKAs6syEcUaQd8FrQ&oe=627E27C7" alt="" />
                            </div>
                                <span style="background-color:#d3e3d6;color:#2f9a48;font-size:10px;height:10px;width:25px;border:solid 3px white;
                                    font: weight 600px; display:flex;align-items:center;justify-content:center;position:absolute;bottom:0;left:15px;border-radius:15px">
                                    30m
                                </span>
                            <h3 style="font-weight: 500;" class="name">
                                Elizabeth Wondor
                            </h3>
                        </div>
                        <div class="contact">
                            <div class="img_container" style="border:solid 3px lightgrey;">
                                <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/279858450_549622113473153_1171472893397502339_n.jpg?_nc_cat=104&ccb=1-6&_nc_sid=8bfeb9&_nc_ohc=NwPUOrtLV7QAX9ENab8&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_9c1HXHcztHYbrFxedkYydyAgjshQYvbsWhT8SEJY66g&oe=627E3F82" alt="" />
                                <span></span>
                            </div>
                            <h3 style="font-weight: 500;" class="name">
                                Tom Holland
                            </h3>
                        </div>
                        <div class="contact">
                            <div class="img_container">
                                <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t45.1600-4/274800747_6254021128894_7692071757161991246_n.jpg?stp=cp0_dst-jpg_p960x960_q75_spS444&_nc_cat=109&ccb=1-6&_nc_sid=67cdda&_nc_ohc=UEh1FuKOPQEAX8PMExm&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_Yi30CF2dQkh8_WhatnVTQb_t9Zt1_gZYDwV2mJuZaIw&oe=627EE9C3" alt="" />
                                <span></span>
                            </div>
                            <h3 style="font-weight: 500;" class="name">
                                Micheal Jackson
                            </h3>
                        </div>
                        <div class="contact">
                            <div class="img_container">
                                <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/279707809_6465568116832835_4568729045434822971_n.jpg?stp=dst-jpg_p843x403&_nc_cat=1&ccb=1-6&_nc_sid=8bfeb9&_nc_ohc=QTi97vuPplEAX8uvuUS&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT-IBnlLUTmGenp8GGbd5lnL_Slezfl69Yjn-OgXkYujYQ&oe=627FAC40" alt="" />
                                <span></span>
                            </div>
                            <h3 style="font-weight: 500;" class="name">
                                Margarot Robbie
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Sidebar End -->
        
    </x-slot>
</x-layout>