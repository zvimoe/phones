'use strict';
// get tamplate

// get all phones
function showPhones(){$.ajax({
    url: "../../../back/api/api.php",
    type: 'GET',
    data:{table:'cellaphones',
          data:{id:"all"}
        },
    success: function(data) {
        // get tamplate
     $.ajax('phone-tamp.html').always(function(phoneTamp){
        let arr=JSON.parse(data)
        for (let i=0; i<arr.length; i++) {
                let t=phoneTamp;
                t =t.replace("{{mana}}", arr[i].name);
                t =t.replace("{{model}}", arr[i].model);
                t =t.replace("{{imgsrc}}","../images/"+ arr[i].image);
                t =t.replace("{{imgalt}}", arr[i].imgalt);
                
                let d = document.createElement('div');
                d.innerHTML = t;
                $('body').append(d);
            
              
           }
        })
     
    }
  })
}