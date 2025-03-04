<?php
session_start();
error_reporting(0);
include('../../config/config.php');
include('include/checklogin.php');
check_login();
include('include/header.php');
include('include/sidebar.php');
$title="Sales";
if(isset($_GET) & !empty($_GET)){
	$aid=intval($_GET['aid']);// association's id
    $name=($_GET['name']);// association's name

}else{
		echo "<script>window.location.href='association.php';</script>";
	}
?>
<div class="container-fluid py-4">

           

                  <div class="card" style="padding:30px;">
                <h5 class="card-header">Farmers under <?php echo $name?></h5>
                <div class="table-responsive table-wrapper-top text-nowrap" >
                <p style="padding-left:10vw;color:#cb0c9f;"><?php if($msg) { echo htmlentities($msg);}?> </h5>

                  <table class="table table-bordered" id="dataTables-example" >
                    <thead>
                      <tr class="text-nowrap">
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Location</th>
                        <th>Phone No</th>
                        <th>Type of Crop Grown</th>
                        <th>Hectares of land</th>
                        <th>Type of Input </th>
                        <th> Quantity of Input</th>
                        <th>Capacity/ Production Annually</th>
                        <th>Preferred Period of Input delivered</th>
                        <th>Farm Niche</th>
                        <th>BVN</th>
                        <th>Reg. Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>    
                  <tbody>
                  <?php 
                  $query="SELECT * FROM farms WHERE `association_id`='$aid' ";
                  $result=mysqli_query($con,$query);
                  $cnt=1;
                  if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                      ?>
                    <tr>
                    <td><?php echo $cnt++;?></td>
                    <td><?php echo htmlentities($row['farm_name']);?>  </td>
                      <td><?php echo htmlentities($row['farm_email']);?></td>
                      <td><?php echo htmlentities($row['farm_address']);?></td>
                      <td><?php echo htmlentities($row['farm_location']);?></td>
                      <td><?php echo htmlentities($row['farm_contact']);?></td>
                      <td><?php echo htmlentities($row['farm_cropType']);?></td>
                      <td><?php echo htmlentities($row['farm_hectares']);?></td>
                      <td><?php echo htmlentities($row['farm_input_type']);?></td>
                      <td><?php echo htmlentities($row['farm_input_quantity']);?></td>

                      <td><?php echo htmlentities($row['farm_cropType']);?></td>
                      <td><?php echo htmlentities($row['farm_capacity']);?></td>
                      <td><?php echo htmlentities($row['farm_period']);?></td>
                      <td><?php echo htmlentities($row['farm_niche']);?></td>
                      <td><?php echo htmlentities($row['farm_bvn']);?></td>
                      <td><?php echo htmlentities($row['creationDate']);?>  </td>
                      <td class="align-middle">
                      <a href="mapping-farmer-details.php?fid=<?php echo $row['farm_id'];?>" class="badge bg-label-success me-1 add-to-cart-button" >View</a> 
                      </td>
                      
                    </tr>
                    
                    <?php } 
                    }else{

                      echo"No Record Found!";
                    }

                    ?>            
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-left:10vw;height:30vh;"></div>



<?php include('include/footer.php');?>
