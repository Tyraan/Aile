function sendImage(){
    var file=$("input[name='image']").val();
    var image=$("input[name='image']")[0].files[0];
    var filename=file.replace(/.*(\/|\\)/, "");
    var fileExt=(/[.]/.exec(filename)) ? /[^.]+$/.exec(filename.toLowerCase()) : '';
    var allowExt = ['png','gif','jpg'];
    alert('try alert');
    if($.inArry(fileExt,allowExt) ){
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var fm = new FormData();
        fm.append('image',image);
        $ajax({
            url:'test/update',
            type:"POST",
            data:fm,
            //因为要传图，所以禁止Jquery再对Data做处理
            contentType:false,
            processData:false,
            success:function (result) {
                alert(result);
            }
        });

    }else{
        alert("此处只能传 png，gif，或者jpg。");
    }
}