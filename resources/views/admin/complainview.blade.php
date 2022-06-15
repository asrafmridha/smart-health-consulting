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

       

     
      @include('admin.navbar')
         
      <div class="container-fluid page-body-wrapper">
      

    <div class="container" >

     

     
      <div align='' style="background-color: white; color:black; margin-right:100px">

       

        <table style="margin-top: 100px ">

       
            <tr  >
    
              <th style="padding: 10px ; font-size :20px">Name</th>
              <th style="padding: 10px ; font-size :20px">Email</th>
              <th style="padding: 10px ; font-size :20px">Subject</th>
                <th style="padding: 10px ; font-size :20px">Message</th>
                <th style="padding: 10px ; font-size :20px">Action</th>
        

               
    
    
            </tr>
                   
            @foreach ($data as $item)
    
            <tr style="background-color:black; color:white" >
    
              <td  style="padding: 10px ; font-size :20px;  " >{{$item->name}}</td>
    
              <td style="padding: 10px ; font-size :20px">{{$item->email}}</td>
    
              <td style="padding: 10px ; font-size :20px">{{$item->subject}}</td>
    
                <td style="padding: 10px ; font-size :20px">{{$item['message']}}</td>

                <td style="padding: 10px ; font-size :20px"><a onclick="return confirm ('Are you sure to delete this?')" href="{{url('deletecomplain'.$item->id)}}">Delete</a></td>



{{--     
                <td style="padding: 10px ; font-size :20px;background-color:green">{{$item['status']}}</td>
    
                <td style="padding: 10px ; font-size :20px"><a href="{{url('acceptappoinment/'.$item['id'])}}" class="btn btn-success">Approved</a></td>
    
                <td onclick="return confirm('Are you sure Cancel This Appoinment?')" style="padding: 10px ; font-size :20px"><a href="{{url('cancelappoinment/'.$item['id'])}}" class="btn btn-danger">Canceled</a></td>

                <td style="padding: 10px ; font-size :20px"><a href="{{url('sendmail/'.$item['id'])}}" class="btn btn-success">Send Mail</a></td> --}}
    
    
            
    
    
    
    
            </tr>
                
            @endforeach
           
        </table>
     </div>
    
     

   

     



    
    </div>

        </div>
      
      
       
          
    
        
     

        @include('admin.script')
  </body>
</html>