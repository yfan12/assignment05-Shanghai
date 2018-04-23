<?php  
 $connect = mysqli_connect('localhost', 'Friends', 'coffee', 'testing');  
 $output = '';  
 $sql = "SELECT * FROM tbl_sample ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="10%">Age</th>  
                     <th width="20%">Job</th>
                     <th width="20%">Favourite</th>  
                     <th width="10%">Frequency</th>    
                     <th width="30%">Email</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    /*
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tbl_sample LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
    */
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="age" data-id1="'.$row["id"].'" contenteditable>'.$row["age"].'</td>  
                     <td class="job" data-id2="'.$row["id"].'" contenteditable>'.$row["job"].'</td>
                     <td class="favourite" data-id4="'.$row["id"].'" contenteditable>'.$row["favourite"].'</td>
                     <td class="frequency" data-id5="'.$row["id"].'" contenteditable>'.$row["frequency"].'</td>
                     <td class="email" data-id6="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="age" contenteditable></td>  
                <td id="job" contenteditable></td>
                <td id="favourite" contenteditable></td>  
                <td id="frequency" contenteditable></td> 
                <td id="email" contenteditable></td>   
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="age" contenteditable></td>  
          <td id="job" contenteditable></td>
          <td id="favourite" contenteditable></td>  
          <td id="frequency" contenteditable></td> 
          <td id="email" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>