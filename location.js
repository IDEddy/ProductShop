$(document).ready(function(){

 load_json_data('colour');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('location.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'colour')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#colour', function(){
  var colour_id = $(this).val();
  if(colour_id != '')
  {
   load_json_data('location', colour_id);
  }
  else
  {
   $('#location').html('<option value="">Select location</option>');
  }
 });
 

});