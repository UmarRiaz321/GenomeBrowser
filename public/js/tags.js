$(function () {
    $(document).ready(function () {

       
        $("#genlist").select2({
            placeholder: "Selected Genes",
            tags: true,
            tokenSeparators: [",", ";"],
            theme: "bootstrap",
            width: '100%'
          });
    //   regionList
    $("#regionList").select2({
        placeholder: "Selected Regions",
        tags: true,
        tokenSeparators: [",", ";"],
        theme: "bootstrap",
        width: '100%'
      });
    });
});
