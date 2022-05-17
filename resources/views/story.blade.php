<x-storyLayout>
    <x-slot name="content">
        <x-navbar/>

        <!-- Story container start -->
        <div class="story_container">

            <!-- Photo story upload modal card start -->
            <div id="photo_story_card" class="story_upload_card">
                <div class="card">
                    <div class="card_inner">
                        <!-- Story image preveiw start -->
                        <div class="story_preview">
                            <div id="story_preview">
                                <!-- Image preview will be here -->
                            </div>
                        </div>
                        <!-- Story image preveiw end -->
                        <div class="lower">
                            <button id="discard_btn" class="discard_btn">Discard</button>
                            <form id="post_story_form" action="{{route('storyUpload')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input name="story_pic" onchange="handleStoryFile()" style="display: none;" id="story_input" type="file"/>
                                <button class="post_btn" type="submit">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Photo story upload modal card end -->

            <div class="left">
                <div class="top">
                    <div class="upper">
                        <h2>Your Story</h2>
                        <div class="icon">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yM/r/t-LRotop31x.png&quot;); background-position: 0px -258px; background-size: 74px 330px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="image_container">
                            <img src="/{{auth()->user()->profile->profile_pic}}" alt="">
                        </div>
                        <p>{{auth()->user()->fname}} {{auth()->user()->lname}}</p>
                    </div>
                </div>
                <!-- <div class="bottom">

                </div> -->
            </div>
            <div class="right">
                <div class="story_action">
                    <label for="story_input" id="photo_story" class="photo_sto">
                        <div class="content">
                            <div class="icon">
                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/aZqDjvEe1TY.png&quot;); background-position: 0px -1082px; background-size: 34px 1648px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4>Create a photo story</h4>
                        </div>
                    </label>
                    
                    <div id="text_story" class="text_sto">
                        <div class="content">
                            <div class="icon">
                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/HtH3ivm4rQw.png&quot;); background-position: 0px -52px; background-size: 26px 74px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4>Create a text story</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Story container end -->
        
       
    </x-slot>
</x-storyLayout>