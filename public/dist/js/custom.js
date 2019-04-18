

// Creating Property URL
$('#post_title').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var post_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#post_url').val(post_url.toLowerCase());
});

$('#post_url').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var post_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#post_url').val(post_url.toLowerCase());
});

// Creating Category URL
$('#category_name').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var category_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#category_url').val(category_url.toLowerCase());
});

$('#category_url').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var category_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#category_url').val(category_url.toLowerCase());
});

// Creating Repair Service URL
$('#service_name').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var service_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#service_url').val(service_url.toLowerCase());
});

// Data fields according to Property Type Selection
$(function() {
    $("#PropertyType").change(function() {
        if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1012" || $(this).val() == "1014" || $(this).val() == "1016") {
            $("#MapPassed").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#MapPassed").hide();
        }

        if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1005" || $(this).val() == "1012" || $(this).val() == "1013" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017" || $(this).val() == "1018") {
            $("#OpenSides").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#OpenSides").hide();
        }

        if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1005" || $(this).val() == "1012" || $(this).val() == "1013" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017" || $(this).val() == "1018") {
            $("#WidthRoadFacing").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#WidthRoadFacing").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1018") {
            $("#Bedrooms").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#Bedrooms").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1011" || $(this).val() == "1018") {
            $("#Bathrooms").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#Bathrooms").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007") {
            $("#Balconies").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#Balconies").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1013" || $(this).val() == "1018") {
            $("#FurnishStatus").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#FurnishStatus").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1013") {
            $("#FloorNo").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#FloorNo").hide();
        }

        if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1015" || $(this).val() == "1018" || $(this).val() == "1013") {
            $("#TotalFloor").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#TotalFloor").hide();
        }

        if ($(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010") {
            $("#PWashroom").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#PWashroom").hide();
        }

        if ($(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011") {
            $("#Cafeteria").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#Cafeteria").hide();
        }

        if ($(this).val() == "1010" || $(this).val() == "1011") {
            $("#IsRoadFacing").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#IsRoadFacing").hide();
        }

        if ($(this).val() == "1011") {
            $("#PShowroom").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#PShowroom").hide();
        }

        if ($(this).val() == "1010" || $(this).val() == "1011") {
            $("#CornerShop").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#CornerShop").hide();
        }

        if ($(this).val() == "1001" || $(this).val() == "1012" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017") {
            $("#BoundryWall").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#BoundryWall").hide();
        }

        if ($(this).val() == "1019") {
            $("#AppleTrees").show();
            $('#PropertyInfo').removeClass('hidden').addClass('show');
        } else {
            $("#AppleTrees").hide();
        }

    });
});

// Country, State, City Ajax Fetch
$('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
            type:"GET",
            url:"get-state-list?country_id="+countryID,
            success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select State</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
            }else{
                $("#state").empty();
            }
            }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
    });
    // Get City List According to state
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
            type:"GET",
            url:"get-city-list?state_id="+stateID,
            success:function(res){               
            if(res){
                $("#city").empty();
                $("#city").append('<option>Select City</option>');
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
            
            }else{
                $("#city").empty();
            }
            }
        });
    }else{
        $("#city").empty();
    }   
});


// Multiple Property Image upload by admin or user
var abc = 0; // Declaring and defining global increment variable.
$(document).ready(function() {
    $('#add_more').click(function() {
        $('.add_image').before($("<div/>", {
            id: 'filediv'
        }).fadeIn('slow').append($("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file'
        }).trigger('click'),));
    });

    // Following function will executes on change event of file input to select different file.
    $('body').on('change', '#file', function() {
        if (this.files && this.files[0]) {
            abc += 1; // Incrementing global variable by 1.
            var z = abc - 1;
            var x = $(this).parent().find('#previewimg' + z).remove();
            $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            $(this).hide();
            $("#abcd" + abc).append($("<i></i>", {
                id: 'close',
                alt: 'delete',
                class: 'fa fa-close'
            }).click(function() {
                $(this).parent().parent().remove();
            }));
        }
    });
    // To Preview Image
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };
    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name) {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});

// Hide all but Show after select any option from Property type
$("#PropertyType").change(function() {
    if ($(this).val() == 'no') {
        $("#PropertyInfo").hide();
    } else {
        $("#PropertyInfo").show();
    }
});

// Access Datatables
$(function () {
    $('#allusers-table').DataTable();
    $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
    })
});

// Select2, Datepicker, Colorpicker function
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
});

// TinyMCE Text Editor for Description
var editor_config = {
    height: 250,
    width: 750,
    path_absolute : "/",
    selector: "textarea.my-editor",
    branding: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);

  // Onclick Password Generate
  var Password = {
 
    _pattern : /[a-zA-Z0-9_\-\+\.]/,
    
    
    _getRandomByte : function()
    {
      if(window.crypto && window.crypto.getRandomValues) 
      {
        var result = new Uint8Array(1);
        window.crypto.getRandomValues(result);
        return result[0];
      }
      else if(window.msCrypto && window.msCrypto.getRandomValues) 
      {
        var result = new Uint8Array(1);
        window.msCrypto.getRandomValues(result);
        return result[0];
      }
      else
      {
        return Math.floor(Math.random() * 256);
      }
    },
    
    generate : function(length)
    {
      return Array.apply(null, {'length': length})
        .map(function()
        {
          var result;
          while(true) 
          {
            result = String.fromCharCode(this._getRandomByte());
            if(this._pattern.test(result))
            {
              return result;
            }
          }        
        }, this)
        .join('');  
    }    
      
  };
