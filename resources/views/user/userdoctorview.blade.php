<!DOCTYPE html>
<html lang="en">
  <head>
   
 @include('admin.css')

  </head>
  <body>


    
   

    
     
    <div class="container-scroller ">
      
      @include('admin.sidebar')

     

     
      @include('admin.navbar')

      <div align=''; style="margin-top:70px; right:-300px; width:10000px">

    <ul class="navbar-nav w-100">
      <li class="nav-item w-100  " style="">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET" action="{{url('search/')}}">
          <input type="text" class="form-control text-white " name="search" placeholder="Search Doctor">

          <button class="btn btn-primary" type="submit">Search</button>
        </form>
        
      </li>
    </ul>
   </div>

     



      <div class="container-fluid page-body-wrapper">


      


        

          @if ( session()->has ('message') )

          <div style="margin-top: 80px" class="alert alert success">
  
      
        
              {{session()->get('message')}}
            </div>
  
     @endif
      

     
        <div class="container" >

          
     
    

     
            <div  style="background-color: green; margin-right:150px; color:black">
      
              <table style="margin-top: 150px">
                  <tr  >
          
                    <th style="padding: 10px ; font-size :20px">Name</th>
                    <th style="padding: 10px ; font-size :20px">Phone</th>
                    <th style="padding: 10px ; font-size :20px">Speciality</th>
                      <th style="padding: 10px ; font-size :20px">Room</th>
                      <th style="padding: 10px ; font-size :20px">Image</th>
                      <th style="padding: 10px ; font-size :20px">ADD </th>
                      <th style="padding: 10px ; font-size :20px">DELETE</th>
                      <th style="padding: 10px ; font-size :20px">Update</th>


                      </tr>

                      @foreach ($data as $item)
                      <tr style="background-color:black; color:white">
                        <td style="padding: 10px ; font-size :20px; ">{{$item->name}}</td>
    
                        <td style="padding: 10px ; font-size :20px">{{$item->phone}}</td>
              
                        <td style="padding: 10px ; font-size :20px">{{$item->speciality}}</td>
              
                          <td style="padding: 10px ; font-size :20px">{{$item->room}}</td>
              
                          <td style="padding: 10px ; font-size :20px"><img src="doctorimage/{{$item['image']}}" 
                            alt=""></td>
                             
                            <td style="padding: 10px ; font-size :20px"><a href="{{url('adddoctorview')}}">ADD NEW</a></td>

                            <td style="padding: 10px ; font-size :20px"><a onclick="return confirm('Are You Sure To Delete This ?')" href="{{url('deletedoctor/'.$item->id)}}">DELETE DOCTOR</a></td>

                            <td style="padding: 10px ; font-size :20px"><a href="{{url('updatedoctorview/'.$item->id)}}">UPDATE DOCTOR</a></td>

                      </tr>
                          
                      @endforeach

                   

                </table>

            </div>

      </div>

    </div>

</div>


      
       
       
          
    
        
     

        @include('user.script')
  </body>
</html>

