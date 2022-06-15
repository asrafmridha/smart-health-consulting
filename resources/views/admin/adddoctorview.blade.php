<!DOCTYPE html>
<html lang="en">
  <head>
   
 @include('admin.css')

        <style>
          label{

            display: inline-block;

            width: 100px
          }
        </style>

  </head>
  <body>
    
     
    
      
     

      <div class="container-scroller ">

        @include('admin.sidebar')

       
        {{-- @if ( session()->has ('message') )

 
        <div align='cente' style="margin-top: 100px">
          {{session()->get('message')}}
      
        </div>
  
        @endif --}}
     
      @include('admin.navbar')

     
         
      <div class="container-fluid page-body-wrapper">

      
      

    <div class="container" >

   

     

        <div style="margin-top: 150px; margin-right:600px" >

          <h1 style="font-size: 30px"> ADD DOCTOR  </h1> <br>

          <form action="{{url('adddoctor')}}" method="POST" enctype="multipart/form-data" >

            @csrf
      
            <div>
      
            
              <label for="">Doctor Name</label> <br>
            <input type="text " class="text-black"   name="name"> 
      
            </div>
      
           <div>
      
            <label for=""> Phone</label> <br>
            <input type="number" class="text-black" name="number">
           </div>
      
             <div>
              <label for=""> Speciality</label> <br>
              <input type="text" class="text-black" name="speciality">
             </div>
      
           
      
             <div>
      
              <label for=""> Room</label> <br>
              <input type="number" class="text-black" name="room">
              
             </div>
      
             <div>
               <label for="">Image</label> <br>
      
               <input type="file" name="image"> <br>
             </div>
      
              <button type="submit" class=" btn btn-success" style="text-left">Submit</button>
      
      
      
      
          </form>
        </div>
 
    </div>

              
        </div>
      
      
       
          
        </div>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      

        @if (Session::has('adddoctor'))

        <script>
           swal('Great Job!',"{!! Session::get('adddoctor')!!}, Success",{

            button: 'Ok',
           })

        </script>
            
        @endif
        
     

        @include('admin.script')
  </body>
</html>