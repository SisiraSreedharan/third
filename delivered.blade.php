<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <style>

       input{

           padding:2px;
           font-size:10px; 
           border-radius:5px;
       }

       label{
           width:140px;
           display:inline-block;
           text-align:right;
       }
       

      .container{
                   width:80%;
                   height:40px;  
                 
      }
      .left{
             width:50%;
             float:left;   

      }
    .right{
             width:50%;
             float:right;   
           }
    
     .main_div { 
                height: 80%; 
                width:110%; 
                border-collapse: collapse; 
            }  
    
    
    </style>
</head>
<body>
<center>
	 <div class="container">
      
	 	 <h2 style="margin:5px">Glaube Logistics Delivery Note</h2>
	 	 <br>
	 	 <br>
	 	<form  method="post"  id="frm">
	 		@csrf
             <input  type="hidden"   id="id" value="{{$delivery->id}}">          
             <div class="left">

             <div class="row">
                <div class="col col-lg-6 col-6">
                  <div class="form-group">
                   <label >Date:</label>
                      <!-- <input type="date"  class="form-control" id="date" name="date"   > -->

                                    <!-- <div class='input-group date' id='datepicker1'> -->
                                    <input class="  form-control datepicker" data-date-format="mm/dd/yyyy" name="date" value="{{$delivery->date}}" >
                        <!-- <input type='text' class=""  /> -->
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                

                   </div>
                   </div>
                   </div>
            
             <div class="row">
            <div class="col col-lg6 col-6">
                <div class="form-group">   
                    <label >Delivery Note No:</label>
                       <input type="text" class="form-control"  id="delivery_nmbr" name="delivery_nmbr"  value="{{$delivery->delivery_nmbr}}">
            
            </div>
            </div>
            </div>
            

            <div class="row">
               <div class="col col-lg-6 col-6">
                  <div class="form-group">
                      <label >Reference:</label>
                         <input type="text"class="form-control"  id="reference" name="reference" value="{{$delivery->reference}}">
                         </div>
                         </div>
                         </div>

                         
            <div class="row">
               <div class="col col-lg-6 col-6">
                  <div class="form-group">
                      <label>Customer ID:</label>
                          <input type="text" class="form-control"  id="customer_nmbr" name="customer_nmbr" value="{{$delivery->customer_nmbr}}">
            </div>
            </div>
            </div>

            <div class="row">
               <div class="col col-lg-6 col-6">
                  <div class="form-group">
                     <label>JOB NO:</label>
                        <input type="text" class="form-control" id="job_nmbr" name="job_nmbr" value="{{$delivery->job_nmbr}}">


             </div>
            </div>
            </div>   

            <div class="row">
               <div class="col col-lg-6 col-6">
                  <div class="form-group">
                    <label >REQ NO:</label>
                        <input type="text" class="form-control" id="req_nmbr" name="req_nmbr"  value="{{$delivery->req_nmbr}}">
            
                   </div> 
                   </div>
            </div>
            </div>      
 
        <div class="right">
        <h4> Customer Details</h4> 
        <br>
        <br>     
         <div class="row">
            <div class="col col-lg-6 col-6">
                <div class="form-group">
                     <label >Name of Customer:</label>
                        <input type="text" class="form-control"  id="customer_name" name="customer_name"  value="{{$delivery->customer_name}}" >
                </div>
                </div>
                </div>
                
                
        <div class="row">
          <div class="col col-lg-6 col-6">
             <div class="form-group">    
                  <label >Company Name:</label>
                      <input type="text" class="form-control" id="company_name" name="company_name" value="{{$delivery->company_name}}"> 
                
                </div>
                </div>
                </div>
                
                   
        <div class="row">
          <div class="col col-lg-6 col-6">
             <div class="form-group">          
                  <label >Place of Delivery:</label>
                      <input type="text" class="form-control" id="place" name="place"  value="{{$delivery->place}}">
               </div>
               </div>
               </div>
               
        <div class="row">
          <div class="col col-lg-6 col-6">
             <div class="form-group">  
                 <label >City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{$delivery->city}}">
                    </div>
                    </div>
                    </div>

        <div class="row">
          <div class="col col-lg-6 col-6">
             <div class="form-group">             
                <label >Contact:</label>
                   <input type="text" class="form-control"  id="contact" name="contact" value="{{$delivery->contact}}"> 

            </div>
            </div>
            </div>
          </div>
         <br>
         <br>
         <br>
         <br>
         <br>
        <div>
        <table  border="1"  class="main_div">

                <thead>
                    <tr>
                    <th>No</th>
                    <th>Part Number</th> 
                    <th>Code Number</th>
                    <th>Expiry</th>
                    <th>LOT Number</th>
                    <th>Description</th>
                    <th>PCS</th>
                    <th>BOXES</th>
                    <th><i class="fa fa-plus-circle" id="add" aria-hidden="true" style="color:red;"></i></th>
                    </tr>
                    </thead>

             <tbody class="users" id="users"> 

                @foreach($relations as $relation) 

                   <tr class="item" id="item">
                   
        <td><input type="text" class="form-control"   name="nmbr[]"  value=""></td>
        <td><input type="text" class="form-control"  name="part_nmbr[]" value="{{$relation->part_nmbr}}"></td>
        <td><input type="text"  class="form-control"  name="code_nmbr[]"  value="{{$relation->code_nmbr}}"></td>
        <td><input type="text" class="form-control"  name="expiry[]" value="{{$relation->expiry}}"></td>
        <td><input type="text" class="form-control"  name="lot_nmbr[]" value="{{$relation->lot_nmbr}}"></td>
        <td><input type="text" name="description[]" class="form-control"  id="description"  value="{{$relation->description}}" style="width: 200px";></td>
        <td><input type="text"  class="form-control pcs"  name="pcs[]" value="{{$relation->pcs}}"></td>
        <td><input type="text" class="form-control  boxes"  name="boxes[]"  value="{{$relation->boxes}}"></td>
           
        <input type="hidden" name="sub_id[]" value="{{$relation->id}}">
        		
            </tr>
                   @endforeach
                </tbody>
                <tfoot>
                        <tr>

                        <td colspan="5"></td>
                        <td>Total Quantity And Pallets Delivered</td>
                        <td><input type="text"class="form-control" disabled  id="ttl_pcs"></td>
                        <td><input type="text" class="form-control"  disabled  id="ttl_boxes"></td>
                        </tr>

                </tfoot>
        </table>

        </div>
                <br>
        <button type="submit" class="btn btn-success" id="save">Save</button>
        <a href="show" style="color:green;" >Show</a>
        
        <br>
        <br>
            
</form>
</div>
</center>
<script>
            $(document).ready(function(){ 

            $("#add").off('click').on('click',function(){

            // alert('aa');
            

                  let item=$("#item").clone();
                //   console.log(item);
                  item.find('input').val('');
                  item.appendTo("#users");
                

            });
            $(document).on("keyup",function(){ 

             let z= 0, x=0;
            //  var x= 0;
            $("#users").find("tr").each(function(){
               
            z += parseFloat($(this).find("td input.pcs").val());
            x += parseFloat($(this).find("td input.boxes").val());

            });

            $("#ttl_pcs").val(z);
            $("#ttl_boxes").val(x);

            });


                                // $(function(){
          $('.datepicker').datepicker();
   
                    // $('#datepicker1').datepicker();
                    // });



            });

            // function addRow(){

            // //alert('test');

            // var tr='<tr>'+
            // '<td><input type="text" class="form-control"  name=""  value=""></td>'+
            //        '<td><input type="text" class="form-control"  name="part_nmbr[]" value=""></td>'+
        	// 	   '<td><input type="text"  class="form-control"    name="code_nmbr[]"  value=""></td>'+
        	// 	   '<td><input type="text"  class="form-control"   name="expiry[]" value=""></td>'+
            //        '<td><input type="text" class="form-control"  name="lot_nmbr[]" value=""></td>'+
        	// 	   '<td><textarea name="description[]" class="form-control"   id="description" style="width: 200px";></textarea></td>'+
            //        '<td><input type="text" class="form-control"  name="pcs[]" value=""></td>'+
        	// 	   '<td><input type="text" class="form-control"  name="boxes[]"  value=""></td> '+'</tr>';
                    
                    
            //         $('tbody').append(tr);

                 

            // };

</script>
</body>
</html>