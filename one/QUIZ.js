
   
 let btn = document.querySelector('#btn');
 
 btn.addEventListener('click', (event) => {
     let  checkboxes = document.querySelectorAll('input[name="q1"]:checked');
     let  values = [];
      
      checkboxes.forEach((checkbox) => {
          values.push(checkbox.value);
       });
      

      //  if(values[0]=='JS' && values[1]=='PHP')
      let v1 =document.getElementById("form1").v1.value;
    //    alert(v1);
    //    v=true;
       function Q1(){
        for (i=0;i<v1;i++){
            if((values[i]=="true") && values.length==v1)
            
            return true;
            // continue;
           
            else return false;
           
        }


        }
     
 

      let checkboxes1 = document.querySelectorAll('input[name="q2"]:checked');
      let values1 = [];
      checkboxes1.forEach((checkbox) => {
          values1.push(checkbox.value);
      });

      let v2 =document.getElementById("form2").v2.value;
    //   alert(v2);

      function Q2(){
        for (i=0;i<v2;i++){
            if((values1[i]=="true") && values1.length==v2)
            return true;
            else return false;
           
        }
       }

       
      





      let checkboxes2 = document.querySelectorAll('input[name="q3"]:checked');
      let values2 = [];
      checkboxes2.forEach((checkbox) => {
          values2.push(checkbox.value);
      });

      let v3 =document.getElementById("form3").v3.value;
      //   alert(v2);
  
        function Q3(){
          for (i=0;i<v3;i++){
              if((values2[i]=="true") && values2.length==v3)
              return true;
              else return false;
             
          }
         }
      

      let checkboxes3 = document.querySelectorAll('input[name="q4"]:checked');
      let values3 = [];
      checkboxes3.forEach((checkbox) => {
          values3.push(checkbox.value);
      });


      let v4 =document.getElementById("form4").v4.value;
      //   alert(v2);
  
        function Q4(){
          for (i=0;i<v4;i++){
              if((values3[i]=="true") && values3.length==v4)
              return true;
              else return false;
             
          }
         }

       

//q5
      let checkboxes4 = document.querySelectorAll('input[name="q5"]:checked');
      let values4 = [];
      checkboxes4.forEach((checkbox) => {
          values4.push(checkbox.value);
      });

      let v5 =document.getElementById("form5").v5.value;
      //   alert(v2);
  
        function Q5(){
          for (i=0;i<v5;i++){
              if((values4[i]=="true") && values4.length==v5)
              return true;
              else return false;
             
          }
         }


       let qestions=[Q1(),Q2(),Q3(),Q4(),Q5()];
      

      
       let c=0;
       for(let qestion in qestions){
          
          if (qestions[qestion]==true)
          c++;
      }
      // alert(c);   


      let img=document.querySelector('#img');
      let img1=document.querySelector('#img1');
      let img2=document.querySelector('#img2');
      let div=document.querySelector('#div_js');

      
      

//all

      if(c==0)

      {
      document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

      img5.style.display='none'; 
      img4.style.display='none'; 
      img3.style.display='none'; 
      img2.style.display='none';       
      img1.style.display='block';
      div.style.display='block';
          
      }

       else if(c==5)

      {
      document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

      img1.style.display='none'; 
      img2.style.display='none';  
      img3.style.display='none';  
      img4.style.display='none';       
      img5.style.display='block';
      div.style.display='block';
          
      }

      else if(c==1 || c==2)

    //   else if(c==4 || c==3 || c==2 || c==1 || c==5 || c==6 || c==7)

      {
      document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

      img1.style.display='none';
      img2.style.display='none';
      img4.style.display='none';
      img5.style.display='none';       
    
      img3.style.display='block';
      div.style.display='block';
          
      }

      else if(c==4 || c==3){
        document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

        img1.style.display='none';
        img2.style.display='none';
        img3.style.display='none';
        img5.style.display='none';       
      
        img4.style.display='block';
        div.style.display='block';
      }


    //   else if(c==5 || c==6 || c==7){
    //     document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

    //     img1.style.display='none';
    //     img2.style.display='none';
    //     img3.style.display='none';
    //     img5.style.display='none';       
      
    //     img4.style.display='block';
    //     div.style.display='block';
      

    //   }
      
     
  

   });  
   


   

