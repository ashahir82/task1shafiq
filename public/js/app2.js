jQuery(function ($) {


  //---------Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  // -------------------------------------------------------------------------------


  //-------------------For change.blade.php --------------------
  $('.modalButton').on('click', function () {
    $('#formTemp').attr('action', $(this).data('formTempAction'));
  });
  //------------------------------------------------------------

  $("#myModal").modal('show');

    $("#getEmel").click(function (){
        /* Get the text field */
        var copyText = document.getElementById("emels");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        // alert("Copied the text: " + copyText.value);
    });


    //----------------Method untuk contacts-----------------
    $("#checkall").click(function (){
        if ($("#checkall").is(':checked')){
            // alert('checked');
           $(".checkboxes").each(function (){
              $(this).prop("checked", true);
              });
           }else{
            //    alert('unchecked');
              $(".checkboxes").each(function (){
                   $(this).prop("checked", false);
              });
           }
    });
    //--------------------------------------------------------

    // $(".home").show(1000);

  if (window.matchMedia("(max-width: 768px)").matches) {
      /* The viewport is less than, or equal to, 768 pixels wide */

      $(".page-wrapper").removeClass("toggled");

    } else {
      /* The viewport is greater than 768 pixels wide */
  }

  $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);

  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");

    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");

    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");

  }
});


$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


});


