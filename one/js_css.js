
   
 let btn = document.querySelector('#btn');
 
 btn.addEventListener('click', (event) => {
     let  checkboxes = document.querySelectorAll('input[name="q1"]:checked');
     let  values = [];
      
      checkboxes.forEach((checkbox) => {
          values.push(checkbox.value);
       });
      

      //  if(values[0]=='JS' && values[1]=='PHP')
      //  alert(values);

       function Q1(){
          if(values[0]=='formatting' && values.length==1)
          return true;
          else return false;
       }
     
 

      let checkboxes1 = document.querySelectorAll('input[name="q2"]:checked');
      let values1 = [];
      checkboxes1.forEach((checkbox) => {
          values1.push(checkbox.value);
      });

      function Q2(){
          if(values1[0]=='style' && values1.length==1)
          return true;
          else return false;
       }

       
      





      let checkboxes2 = document.querySelectorAll('input[name="q3"]:checked');
      let values2 = [];
      checkboxes2.forEach((checkbox) => {
          values2.push(checkbox.value);
      });

      function Q3(){
          if(values2[0]=='font-family' && values2.length==1)
          return true;
          else return false;
       }

      

      let checkboxes3 = document.querySelectorAll('input[name="q4"]:checked');
      let values3 = [];
      checkboxes3.forEach((checkbox) => {
          values3.push(checkbox.value);
      });


      function Q4(){
          if(values3[0]=='background-color' && values3.length==1)
          return true;
          else return false;
       }

       


      let checkboxes4 = document.querySelectorAll('input[name="q5"]:checked');
      let values4 = [];
      checkboxes4.forEach((checkbox) => {
          values4.push(checkbox.value);
      });

      function Q5(){
          if(values4[0]=='border-radius:30px;' && values4.length==1)
          return true;
          else return false;
       }

//q6
       let checkboxes5 = document.querySelectorAll('input[name="q6"]:checked');
      let values5 = [];
      checkboxes5.forEach((checkbox) => {
          values5.push(checkbox.value);
      });

      function Q6(){
          if(values5[0]=='border' && values5.length==1)
          return true;
          else return false;
       }
///q6

//q7
        let checkboxes6 = document.querySelectorAll('input[name="q7"]:checked');
        let values6 = [];
        checkboxes6.forEach((checkbox) => {
            values6.push(checkbox.value);
        });

        function Q7(){
            if(values6[0]=='body{color:black;}' && values6.length==1)
            return true;
            else return false;
        }
///q7


//q8
    let checkboxes7 = document.querySelectorAll('input[name="q8"]:checked');
    let values7 = [];
    checkboxes7.forEach((checkbox) => {
        values7.push(checkbox.value);
    });

    function Q8(){
        if(values7[0]=='Cascading Style Sheets' && values7.length==1)
        return true;
        else return false;
    }
///q8

       let qestions=[Q1(),Q2(),Q3(),Q4(),Q5(),Q6(),Q7(),Q8()];
      

      
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
      document.getElementById('h2').innerHTML=(`You got 0 Correct`);

      img5.style.display='none'; 
      img4.style.display='none'; 
      img3.style.display='none'; 
      img2.style.display='none';       
      img1.style.display='block';
      div.style.display='block';
          
      }

       else if(c==8)

      {
      document.getElementById('h2').innerHTML=(`You got 8 Correct`);

      img1.style.display='none'; 
      img2.style.display='none';  
      img3.style.display='none';  
      img4.style.display='none';       
      img5.style.display='block';
      div.style.display='block';
          
      }

      else if(c==1 || c==2 || c==3)

    //   else if(c==4 || c==3 || c==2 || c==1 || c==5 || c==6 || c==7)

      {
      document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

      img1.style.display='none';
      img3.style.display='none';
      img4.style.display='none';
      img5.style.display='none';       
    
      img2.style.display='block';
      div.style.display='block';
          
      }

      else if(c==4){
        document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

        img1.style.display='none';
        img2.style.display='none';
        img4.style.display='none';
        img5.style.display='none';       
      
        img3.style.display='block';
        div.style.display='block';
      }


      else if(c==5 || c==6 || c==7){
        document.getElementById('h2').innerHTML=(`You got ${c} Correct`);

        img1.style.display='none';
        img2.style.display='none';
        img3.style.display='none';
        img5.style.display='none';       
      
        img4.style.display='block';
        div.style.display='block';
      

      }
      
     
  

   });  
   


   

