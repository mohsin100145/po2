
/*Embroidery START*/

$("#edit-cat-name").click(function(){
    var cat_select_val = $(this).parents(".input-group").find("#cate-select option:selected").text();
    //alert(cat_select_val);
    $(this).parents(".input-group").find("#cate-select").addClass("hidden");
    $(this).parents(".input-group").find("#parent-cat-hidden").removeClass("hidden").val(cat_select_val);
});

// Data tables
$('#category-table').DataTable({
    searching: false,
    'dom': 'rilftp',
});

/*var table;

$.fn.dataTable.ext.search.push(
    function (settings, data) {
        var statusData = data[2] || "";
        var filterVal = $("#category_id option:selected").text();
        if(filterVal.length > 0)
        {
            if(statusData == filterVal)
                return true;
            else
                return false;
        }
        else
            return true;
    }
);

$(document).ready(function() {
    table = $('#product-table').dataTable({
        "dom": "<'#myFilter'>rpt"
    });

    table.fnDraw();
});



// Event listener to the two range filtering inputs to redraw on input
$('#category_id').change( function() {
    table.fnDraw();
} );*/



//tinymce
tinymce.init({ 
	selector:'textarea',
	height: 200,
  	menubar: false
});

//Multitple image uploader START
//For Front file
    var filesInput = document.getElementById("files");
    
    filesInput.addEventListener("change", function(event){
        
        var files = event.target.files; //FileList object
        var output = document.getElementById("result");
        
        for(var i = 0; i< files.length; i++)
        {
            var file = files[i];
            //Only pics
            if(!file.type.match('image'))
              continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener("load",function(event){
                var picFile = event.target;
                var div = document.createElement("div");
                div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                        "title='" + picFile.name + "'/>"+"<a href='javascript:;' class='img-close'><i class='icon-close icons'></i></a>";
                output.insertBefore(div,null);            
            });
             //Read the image
            picReader.readAsDataURL(file);
        }                               
    });


//For downloadable file
    var filesInput = document.getElementById("files01");
    
    filesInput.addEventListener("change", function(event){
        
        var files = event.target.files; //FileList object
        var output = document.getElementById("result01");
        
        for(var i = 0; i< files.length; i++)
        {
            var file = files[i];
            //Only pics
            if(!file.type.match('image'))
              continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener("load",function(event){
                var picFile = event.target;
                var div = document.createElement("div");
                div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                        "title='" + picFile.name + "'/>"+"<a href='javascript:;' class='img-close'><i class='icon-close icons'></i></a>";
                output.insertBefore(div,null);            
            });
             //Read the image
            picReader.readAsDataURL(file);
        }                               
    });

//Multitple image uploader END

// close multiple image START 
$(document).on('click','.img-close',function(){
	$(this).parent('div').remove();
});   
// close multiple image END  

/*Embroidery END*/

