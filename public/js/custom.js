
// Start JQuery
$(document).ready(function() {

    // Function For Remove Photo
    $('a.delete-photo').click(function () {
        var father = $(this).parents('.delete-parent-image');
        var file = father.attr('data-file-name');
        var id = father.attr('data-id');
        var formData = {
            id : id,
            path : file
        }
        var method = $(this).attr('data-method');
        var route = $(this).attr('data-route');
        var type = $(this).attr('data-type');
        sendAjax(method,formData,type,route,null);
        father.remove();

    });


    // Active And Inactive Function
    $('a.active').click(function () {

        var method = $(this).attr('data-method');
        console.log('method',method);
        var route = $(this).attr('data-route');
        console.log('route',route);
        var type = $(this).attr('data-type');
        console.log('type',type);
        var id = $(this).parents('td.oprate').attr('data-oprate-id');
        var formData = {
            id : id
        }

        sendAjax(method,formData,type,route,null);
        $(this).children('i.active').toggleClass('fa-eye-slash fa-eye');
        $(this).children('i.active').toggleClass('text-secondary text-success');

    });


    //  Function For Remove Data
    $('a.deleteData').click(function () {

        element = $(this).parents('tr.father') ;
        route = $(this).attr('data-route');
        id = $(this).parents('td.oprate').attr('data-oprate-id');
        var formData = {
            id : id
        }
        type = 'DELETE';
        method = id;
        deleteAlert(method,formData,type,route,null,element);
    });

});
// End JQuery



// SweetAlert Function For Delete
function deleteAlert(method,formData,type,route,target,element) {

    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        text: "بعد از تایید اطلاعات مورد نظر کاملا حذف میشود",
        icon: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'confirm-button-class',
            cancelButton: 'cancel-button-class',
        },
        cancelButtonText: 'خیر',
        confirmButtonText: 'بله, حذف شود!'
      }).then((result) => {
        if (result.value) {
          Swal.fire({
              title: 'حذف شد',
              text: 'اطلاعات مورد نظر شما کاملا حذف شد',
            customClass: {
                confirmButton: 'ok-confirm-button-class',
            },
        })
        sendAjax(method,formData,type,route,target);
        element.hide();
        }
      });
}

// Function For Send Ajax
function sendAjax(method,formData,type,route,target){

    var token = $('input[name="_token"]').val();
    formData._token = token;

    var url = documentRoot+route+method;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: type,
        url: url,
        data: formData,
        success: function(data) {
            if(target && data){
                target.html(data);
            }
            return data;
        }
    });
}





$('#category_id').change(function(){
    var id = $(this).val();
    var route='/admin/ajax/selectattrs/'+id;
    //'selectattrs'
    if(id)
        {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        })
        $.ajax({
                url:route,
                type:'post',
                success:function(data)
                    {       
                        if(data)
                        {
                            $("#attrsprent").empty();
                            $("#attrsprent").append('<option value="0">بدون زیرمجموعه</option>');
                            $.each(data,function(key,value){
                                $("#attrsprent").append('<option value="'+value['id']+'">'+value['name']+'</option>');
                            });
                        }
                    }
            }).done(function(data){
                console.log('cat_data done',data);
            }).fail(function(data){
                console.log('cat_data fail',data);
            });
        }
   });