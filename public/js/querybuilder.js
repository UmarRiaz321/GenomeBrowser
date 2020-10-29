$(function () {
  $(document).ready(function () {
    $(".rttradio").checkboxradio({
      icon: false,
    });
  });

  $(document).on("click", ".addtoRegion", function () {
    var locus = $(document).find(".igv-search-container").find(":input").val();

    var ReOption = new Option(locus, locus, false, true);

    var exists = false;
    $("#regionList  option").each(function () {
      if (this.value == locus) {
        exists = true;
      }
    });

    if (exists == false) {
      $("#regionList").append(ReOption).trigger("change");
    }

    $(this).remove();
  });

  $(document).on("click", ".add-gene-to-query", function () {
    var gene = $(this).parent().find(".igv-popover-value").text();

    var GeOption = new Option(gene, gene, false, true);

    var exists = false;

    $("#genlist  option").each(function () {
      if (this.value == gene) {
        exists = true;
      }
    });

    if (exists == false) {
      $("#genlist").append(GeOption).trigger("change");
    }
  });
  //add-pos-to-query


  $(document).on("click", ".add-pos-to-query", function () {
    

    var position = $(this).parent().find(".igv-popover-value").text();
    var ReOption = new Option("Position : "+position, position, false, true);
    var exists = false;
    $("#regionList  option").each(function () {
      if (this.value == position) {
        exists = true;
      }
    });
    if (exists == false) {
      $("#regionList").append(ReOption).trigger("change");
    }

  });



  $("#genlist").on("select2:unselect", function (e) {
    var opt = e.params.data.text;
    $("#genlist  option").each(function () {
      if (this.value == opt) {
        this.remove();
      }
    });
  });

  $("#regionList").on("select2:unselect", function (e) {
    var opt = e.params.data.text;

    $("#regionList  option").each(function () {
      if (this.value == opt) {
        this.remove();
      }
    });
  });

  $.fn.uncheckableRadioButton = function () {
    var $root = this;
    $root.each(function () {
      var $radio = $(this);
      if ($radio.prop("checked")) {
        $radio.data("checked", true);
      } else {
        $radio.data("checked", false);
      }

      $radio.click(function () {
        var $this = $(this);
        var id = $(this).attr("id");
        var name = $(this).attr("name");
        var value = $("label[for='" + id + "']").text();
        var obj = {};
        obj["Name"] = name;
        obj["Value"] = value;

        if ($this.data("checked")) {
          $this.prop("checked", false);
          $this.data("checked", false);
          $this.trigger("change");
          if (RadioSlection.some((rs) => rs.Name === name)) {
            RadioSlection = RadioSlection.filter((e) => e.Name !== name);
          }
        } else {
          $this.data("checked", true);
          // $("input[name="+name+"]:radio").attr('previousValue', false);
          $(this).attr("previousValue", "checked");

          if (RadioSlection.some((rs) => rs.Name === name)) {
            RadioSlection = RadioSlection.filter((e) => e.Name !== name);
          }

          RadioSlection.push(obj);
        }

        console.log(RadioSlection);
      });
    });
    return $root;
  };

  $("[type=radio]").uncheckableRadioButton();
});
