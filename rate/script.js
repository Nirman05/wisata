

 const stars=document.querySelector(".ratings").children;
 const ratingValue=document.querySelector("#rating-value");
  let index;
  
  for(let i=0; i<stars.length; i++){
  	stars[i].addEventListener("mouseover",function(){
  		 // console.log(i)
  		 for(let j=0; j<stars.length; j++){
  		 	stars[j].classList.remove("fa-star");		 	
            stars[j].classList.add("fa-star-o");		 	
  		 }
  		 for(let j=0; j<=i; j++){
  		 	stars[j].classList.remove("fa-star-o");		 	
           stars[j].classList.add("fa-star");		 	
  		 }
  	})
  	stars[i].addEventListener("click",function(){
      ratingValue.value=i+1;
      index=i;
  	})
  	stars[i].addEventListener("mouseout",function(){
  		 
  		 for(let j=0; j<stars.length; j++){
  		 	stars[j].classList.remove("fa-star");		 	
            stars[j].classList.add("fa-star-o");		 	
  		 }
  		 for(let j=0; j<=index; j++){
  		 	stars[j].classList.remove("fa-star-o");		 	
           stars[j].classList.add("fa-star");		 	
  		 }
  	})
  }






