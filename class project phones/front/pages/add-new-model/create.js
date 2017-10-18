'use strict';
//ajax call for a dropdown of directors
(function(){$.ajax({
    url: "../../../back/api/api.php",
    type: 'GET',
    data:{table:'mana',
          data:{id:"all"}
        },
    success: function(data) {
   console.log(JSON.parse(data))
      let arr=JSON.parse(data)
        
        for (let i=0; i<arr.length; i++) {

          $("select").append("<option value='"+i+9+"'>"+arr[i]+"</option>")

         }
   }
})
 }()) 
 function addPhone(){
    let name= $("#name").val();
    var mana= $("#mana").val()+1;
    $.ajax({
        url: "../../../back/api/api.php",
        type: 'POST',
        data:{table:'cellaphone',
              data:{name:name,
                     mana:mana}
            },
        success: function(data) {
       console.log(data)
        }
        
         
    })
     



 }
 var mana= $("#mana").val();