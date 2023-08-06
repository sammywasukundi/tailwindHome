const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click' ,() => {
    if (menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
})

// images defilentes 
image=new Array("img_cuisine.jpg","img_cuisine3.jpg","img_cuisine4.jpg");
im=0;
op=0;
sop="cr";
function album(){
   setTimeout("album()",20);
   document.getElementById("idImage").src="img/"+image[im%3];
   try{
      document.getElementById("idImage").filters.alpha.opacity=op*100;
   }
   catch(e){
      document.getElementById("idImage").style.opacity=op;
   }
   if(sop=="cr"){
      op+=0.02;
      if(op>2)
         sop="dcr";
   }
   if(sop=="dcr"){
      op-=0.02;
      if(op<=0){
         sop="cr";
         im+=1;
      }
   }
}
// js of recipes pages
const add_recipe = document.querySelector('#add_recipe');
const hidden_recipe = document.querySelector('#formulaire');
add_recipe.addEventListener('click', function(){
    if(getComputedStyle(hidden_recipe).visibility != 'visible'){
      hidden_recipe.style.visibility='visible';
    }else{
      hidden_recipe.style.visibility='hidden';
    }
})
