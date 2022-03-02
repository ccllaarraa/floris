$(document).ready(function(){
  $(function(){
    $(".pan").pan(false);
})
});

function tree() {  
  var  children = $('.child');
  var lengthOfChildren = children.length;

  for (var index = 0; index < lengthOfChildren; index++) {
       var classIndex = index % 14; //The magic happens here
       console.log(classIndex);
       children.eq(index).addClass('child'+classIndex);
  }             
}    
