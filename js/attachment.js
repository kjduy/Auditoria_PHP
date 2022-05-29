$('#pdf_upload')
  .submit( function( e ) {
    $.ajax( {
      url: "../controller/attach_update.php?id="+$("#id").val()+"&type="+$("#link").val(),
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false,
      success: function (data) {
        var obj = JSON.parse(data);
        if(obj[0]=='exito'){
          update_frame(obj[1]);
          $("#demo").html(obj[0]);
        }
        else{
          $("#demo").html(obj[0]);
        }
     }
    } );
    e.preventDefault();
});

function update_frame(url){
    $('#pdf_frame').attr('src',url);
}

function loadForm(){
  $.ajax( {
    type: "POST",
    datatype: "html",
    url: "../controller/attach_load.php",
    data: {id: $("#id").val(), type: $("#link").val()},
    success: function (response) {
        update_frame('../../uploads/'+response);
    }
  });

}