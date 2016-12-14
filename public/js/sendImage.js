/*
 * Tyraan
 * 2016-12-7
 * 需要Jquery 1.3 以上版本
 * sendImage function ：用ajax 传送图片到后台。
 * todo: 需要把sendImage 模块化，以方便复用。
 * */


/*
 *  param:None
 *
 * */
function sendImage(){
    var file=$("input[name='image']").val();
    var image=$("input[name='image']")[0].files[0];
    var filename=file.replace(/.*(\/|\\)/, "");
    var fileExt=(/[.]/.exec(filename)) ? /[^.]+$/.exec(filename.toLowerCase()) : '';
    var allowExt = ['png','gif','jpg'];
    if($.inArray(fileExt,allowExt) ){
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var fm = new FormData();
        fm.append('image',image);
        $.ajax({
            url:'admin/banner',
            type:"POST",
            data:fm,
            //因为要传图，所以禁止Jquery再对Data做处理
            contentType:false,
            processData:false,
            success:function (returnJson) {
                var a = "status :" + returnJson.status;
                var b = " action : "+ returnJson.action;
                $("input[name='image']").val("");
                alert(a+b);

            }
        });

    }else{
        alert("此处只能传 png，gif，或者jpg。");
    }

}

/*
*
* */
function delteImage($id) {
    var fm = new FormData();
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    fm.append('id'=>$id);
    $.ajax(
        {
            url: 'admin/banner',
            type: 'POST',
            data:fm,
            success:function (returnJson) {
                var a = "status :" + returnJson.status;
                var b = " action : "+ returnJson.action;
                $("input[name='image']").val("");
                alert(a+b);

            }
        }
    )


}