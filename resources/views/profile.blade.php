<x-profileLayout>
    <x-slot name="profileContent">
        <x-navbar/>

        <!-- Profile pic upload start -->
        <div id="profile_card_container" class="profile_pic_card">
            <div class="card">
                <form class="modal" action="{{route('pPUpload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="border-radius:50%;overflow:hidden;" id="preview">
                        <!-- <img src="{{auth()->user()->profile->profile_pic}}" alt=""> -->
                    </div>
                    <button id="ppcbtn" style="position:absolute;right:10px;top:10px;">close</button>
                    <h3>Upload Profile Picture</h3>
                    <input id="img_input" type="file" name="profilePic" style="margin-top: 10px;"/>
                    <button style="height: 40px; width:100px;margin-top:10px;border:none;border-radius:5px;background-color:teal;color:white;font-size:18px;font-weight:400;cursor:pointer;" type="submit">Upload</button>
                </form>
            </div>
        </div>
        <!-- Profile pic upload end -->

        <!-- Profile container start -->
        <div class="container">
            <div class="upper_part">
                <div class="image_container">
                    <!-- cover pic preview -->
                    <div class="cover_image_preview" id="coverPreview">
                        <!-- Cover image preview here -->
                    </div>
                    <img  style="z-index:0;" src="{{auth()->user()->profile->cover_pic}}" alt="" />
                    <button id="cover_photo_upload" style="border:none;" class="edit_cover_btn">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 550">
                                <path d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z"/>
                            </svg>
                        </div>
                        <p>Edit cover photo</p>
                    </button>
                </div>
                <div class="profile_detail">
                    <!-- Cover image upload start -->
                    <div id="cover_pic_container" class="cover_pic_card">
                        <button id="closeBtn" class="cover_pic_card_closebtn">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/2LbgkLQ1Cgn.png');background-position:-54px -118px;background-size:190px 164px;width:16px;height:16px;background-repeat:no-repeat;display:inline-block"></i>
                        </button>
                        <label for="cover_photo_input" class="upper">
                            <div class="icon">
                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/qoa8MpL4ruQ.png&quot;); background-position: 0px -108px; background-size: 34px 184px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h3>Upload Image</h3>
                        </label>
                        <form action="{{route('cPUpload')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input style="display: none;" name="CoverPic" type="file" id="cover_photo_input"/>
                            <button>Upload Image</button>
                        </form>
                    </div>
                    <!-- Cover image uplaod end -->
                    <div class="left_part">
                        <div class="remedy">
                            <button id="upload_profile_pic" class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z"/>
                                </svg>
                            </button>                    
                        </div>
                        <div class="profile_bubble" style="background-color: lightgrey;">
                            <img src="{{auth()->user()->profile->profile_pic}}" alt="" />
                        </div>
                        <div class="detail_container">
                            <h2 class="name">{{auth()->user()->fname}} {{auth()->user()->lname}}</h2>
                            <h3 class="no_friends">230 friends</h3>
                            <div class="friends_coll_icons">
                                <div class="img_container">
                                    <img src="/images/friends.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right_part">
                        <div class="add_story">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill='#1a6ed8' d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/>
                                </svg>
                            </div>
                            <p>Add to story</p>
                        </div>
                        <button id="edit_profle_btn" class="edit_profile">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/>
                                </svg>
                            </div>
                            <input type="checkbox" id='myCheck' />
                            <label htmlFor="">Edit Profile</label>
                        </button>
                    </div>
                </div>
                <div class="sticky_nav">
                    <ul class="nav_links">
                        <li class="link">Posts</li>
                        <li class="link">About</li>
                        <li class="link">Friends</li>
                        <li class="link">Photos</li>
                        <li class="link">Videos</li>
                        <li class="link">Check-ins</li>
                        <li class="link">More</li>
                    </ul>
                    <div class="options">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile container end -->

        <!-- Edit profile card start -->
        <div id="edit_profile_card" class="edit_profile">
            <div class="edit_profile_card" >
                <div class="edit_card">
                    <div class="upper_section">
                        <span></span>
                        <h3>Edit profile</h3>
                        <button id="edit_profile_close_btn" class='close_btn'>
                            <svg width="25" height="25" viewBox="0 0 627 626" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="458.103" y="145.062" width="33" height="442" rx="10" transform="rotate(45 458.103 145.062)" fill="black"/>
                                <rect x="145.562" y="168.397" width="33" height="442" rx="10" transform="rotate(-45 145.562 168.397)" fill="black"/>
                            </svg>
                        </button>
                    </div>
                    <div class="lower_section">
                        <div class="profile_pic">
                            <div class="top">
                                <h3>Profile Picture</h3>
                                <label htmlFor="">Edit</label>
                            </div>
                            <div class="image_container">
                                <img src="{{auth()->user()->profile->profile_pic}}" alt="" />
                            </div>
                        </div>
                        <div class="cover_pic">
                            <div class="top">
                                <h3>Cover Picture</h3>
                                <label htmlFor="">Edit</label>
                            </div>
                            <div class="image_container">
                                <img src="{{auth()->user()->profile->cover_pic}}" alt="" />
                            </div>
                        </div>
                        <div class="bio">
                            <div class="top">
                                <h3>Bio</h3>
                                <label htmlFor="">Add</label>
                            </div>
                            <p>{{auth()->user()->profile->bio}}</p>
                        </div>
                        <div class="custom">
                            <div class="top">
                                <h3>Customize your intro</h3>
                                <label htmlFor="">Edit</label>
                            </div>
                            <div class="bottom">    
                                <div class="m college">
                                    <div class="icon"></div>
                                    <p>Went to something college</p>
                                </div>
                                <div class="m home">
                                    <div class="icon"></div>
                                    <p>Lives in <strong>Pokhara</strong></p>
                                </div>
                                <div class="m location">
                                    <div class="icon"></div>
                                    <p>From <strong>Pokhara</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="hobbies">
    
                        </div>
                        <div class="featured">
                            <div class="top">
                                <h3>Featured</h3>
                                <label htmlFor="">Add</label>
                            </div>
                            <img src="/images/about.png" alt="" />
                            <p style="color:grey;">Feature your favorite photos and stories here for all your friends to see.</p>
                        </div>
                        <div class="about_info">
                            <h3>Edit yout about info</h3>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Edit profile card end -->

    </x-slot>
</x-profileLayout>