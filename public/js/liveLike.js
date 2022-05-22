// $(function(){
//     $('#like_post_form').on('submit',function(e){
//         e.preventDefault();
//         $.ajax({
//             url:$(this).artt('action'),
//             method:$(this).attr('method'),
//             data:"",
//             success:function(data){
//                 alert('post liked')
//             }
//         })
//     });
// });
// $.ajax({
//     url:$(this).artt('action'),
//     method:$(this).attr('method'),
//     data:{
//         'user_id': "{{auth()->user()->id}}",
//         'post_id': "{{$post-id}}",
//         'liked': true,
//     },
//     success:function(data){
//         alert('post liked')
//     }
// })
// $.ajax({
//     method:"post",
//     url:"{{ route('likepost') }}",
//     data:{
//         'user_id': "{{auth()->user()->id}}",
//         'post_id': "{{$post-id}}",
//         'liked': true,
//     },
//     success:function(data){
//         alert('post liked')
//     }
// })
    // $.ajax({
    //     url:$(this).artt('action'),
    //     method:$(this).attr('method'),
    //     data:new FormData(this),
    //     success:function(data){
    //         alert('post liked')
    //     }
    // })

// e.preventDefault();// you dont want your anchor to redirect so prevent it
// $.ajax({
//     type: "GET",
//     // blade.php already loaded with contents we need, so we just need to
//     // select the anchor attribute href with js.
//     url: $('.interactor').attr('href'),
//     success: function() {
//     console.log("Simple example");
//     }
// })