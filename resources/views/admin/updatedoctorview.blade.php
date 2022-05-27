<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
   
 @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
     
    
      
      @include('admin.sidebar')

      

     
      @include('admin.navbar')

  
   

      <div class="container-fluid page-body-wrapper">

       

        <div class="container" >

        


          <div style="margin-top :170px">
                  
            <div style=" margin-right:500px" >
    
              <h1 style="font-size: 30px"> UPDATE DOCTOR  </h1> <br>
    
              <form style="" action="{{url('updatedoctor/'.$data['id'])}}" method="POST" enctype="multipart/form-data" >
    
                @csrf
          
                <div>
          
                
                  <label for="">New Doctor Name</label> <br>
                <input type="text " value="{{$data->name}}" class="text-black"   name="name"> 
          
                </div>
          
               <div>
          
                <label for="">New Number</label> <br>
                <input type="number" " value="{{$data->phone}}" class="text-black" name="number">
               </div>
          
                 <div>
                  <label for="">New Speciality</label> <br>
                  <input type="text" " value="{{$data->speciality}}" class="text-black" name="speciality">
                 </div>
          
               
          
                 <div>
          
                  <label for="">New Room</label> <br>
                  <input type="number" " value="{{$data->room}}" class="text-black" name="room">
                  
                 </div>
    
                 <div>
                  <label for="">Old Image</label> <br>
         
                  <img height="150px" width="150px" src="doctorimage/{{$data['image']}}" alt="image nai">
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
      
       
       
          
        </div>
        
     

        @include('admin.script')
  </body>
</html>