<?php
//exit;
//echo phpinfo();
//error_reporting(0);
//ini_set('display_errors', 1);
include 'include/MVC/preDispatch.php';
require_once 'include/entryPoint.php';
global $db;
 
 /*$sql = "select a.id,b.week5_date_c from sar_bitmaster a left join sar_bitmaster_cstm b on a.id = b.id_c
 where a.deleted = 0 and date(b.week5_date_c) = '2017-10-23' and b.week5_date_c!= '0000-00-00'";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 $beatMasterBean = $resRow['id'];
 	 $date1 =  date('Y-m-d', strtotime('+28 day', strtotime($resRow['week5_date_c']))); 
 	
 	
 	if(!empty($beatMasterBean)){
 		echo $updateROBeat = "Update sar_bitmaster_cstm set week5_date_c='$date1' where id_c ='$beatMasterBean'"; 
		
 		
 		echo '<br>';
 		$exeBeatRoResult = $db->query($updateROBeat);
 	}
	
 }
 */

  //$get_acc_rec = "select a.id,a.account_type,b.customer_number_c,a.billing_address_state,a.assigned_user_id,b.counter_type_c from accounts a left join accounts_cstm b on a.id = b.id_c where a.deleted = 0 and b.account_status_c = 'Active' and a.assigned_user_id!= ''";
 
/*
 $get_acc_rec = "select a.id,a.account_type,b.customer_number_c,a.billing_address_state,a.assigned_user_id,b.counter_type_c from accounts a left join accounts_cstm b on a.id = b.id_c where a.deleted = 0 and b.account_status_c = 'Active' and a.assigned_user_id in ('4ab694a4-c870-8d77-f13f-59310da6dab4')";
		$get_rec = $db->query($get_acc_rec);
		$count_row = $get_rec->num_rows;
 
		while($fetch_rec=$db->fetchByAssoc($get_rec)){
			
			//select user
			$get_user_id = "Select * from users where id = '".$fetch_rec['assigned_user_id']."' ";
			$get_user = $db->query($get_user_id);
			$fetch_user = $db->fetchByAssoc($get_user);
			
			$check_bitmaster = "Select id from sar_bitmaster where account_id_c = '".$fetch_rec['id']."' and deleted = 0";
			$check_bitmaster1 = $db->query($check_bitmaster);
			$count_bit = $check_bitmaster1->num_rows;
			
			if($count_bit > 0){
				$fetch_bit = $db->fetchByAssoc($check_bitmaster1);
				
				echo $update_bit_cstm = "UPDATE `sar_bitmaster_cstm` SET `pjp_next_due_date_c` = '".$fetch_rec['pjp_next_due_date_c']."', `counter_pjp_flag_c`='".$fetch_rec['counter_pjp_flag_c']."', `pjp_visit_date_c` = '".$fetch_rec['pjp_visit_date_c']."', `counter_type_c`='".$fetch_rec['counter_type_c']."', `repeated_c`='".$fetch_rec['repeated_c']."', `pjp_last_due_date_c`='".$fetch_rec['pjp_last_due_date_c']."',week1_date_c = '',week2_date_c = '',week3_date_c = '', week4_date_c = '',week5_date_c = '',week6_date_c = '' WHERE id_c = '".$fetch_bit['id']."' ";
				$up_bit_cstm = $db->query($update_bit_cstm);
				
				echo $update_bitmaster = "UPDATE `sar_bitmaster` SET `account_type` = '".$fetch_rec['account_type']."', `account_code` = '".$fetch_rec['customer_number_c']."', `account_location` = '".$fetch_rec['billing_address_state']."', `user_id_c`='".$fetch_rec['assigned_user_id']."', `se_code` = '".$fetch_user['user_name']."',base_location = '".$fetch_rec['billing_address_state']."' WHERE id = '".$fetch_bit['id']."' ";
				$up_bit = $db->query($update_bitmaster);

				
			}
			
			else{
				$bit_guid = create_guid();
				
				echo $crt_bit = "INSERT INTO `sar_bitmaster`(`id`,name,date_entered,date_modified, `account_type`, `account_code`, `account_id_c`, `account_location`, user_id_c, se_code,base_location,assigned_user_id) VALUES ('".$bit_guid."','Route', now(),now(),'".$fetch_rec['account_type']."', '".$fetch_rec['customer_number_c']."', '".$fetch_rec['id']."', '".$fetch_rec['billing_address_state']."', '".$fetch_rec['assigned_user_id']."', '".$fetch_user['user_name']."','".$fetch_rec['billing_address_state']."','".$fetch_rec['assigned_user_id']."' )";
				$create_bit = $db->query($crt_bit);
				
				echo $crt_bit_cstm = "INSERT INTO `sar_bitmaster_cstm`(`id_c`, `pjp_next_due_date_c`, `counter_pjp_flag_c`, `pjp_visit_date_c`, `counter_type_c`, `repeated_c`, `pjp_last_due_date_c`) VALUES ('".$bit_guid."', '".$fetch_rec['pjp_next_due_date_c']."', '".$fetch_rec['counter_pjp_flag_c']."', '".$fetch_rec['pjp_visit_date_c']."', '".$fetch_rec['counter_type_c']."', '".$fetch_rec['repeated_c']."', '".$fetch_rec['pjp_last_due_date_c']."' )";
				$crt_bitsctm = $db->query($crt_bit_cstm);
	
				
	
				
			}
		}
*/		
		
 /*echo $sql = "select a.* from sar_se_dd_visit a left join sar_collection b on a.fe_ref_num = b.fe_ref_num
left join  sar_secondary_order c on a.fe_ref_num = c.fe_ref_num
left join sar_secondary_stock_cstm d on a.fe_ref_num = d.fe_ref_num_c
left join sar_secondary_stock f on d.id_c = f.id
left join sar_shelf_visibility e on a.fe_ref_num = e.fe_ref_num
where a.deleted = 0 and b.deleted = 0 and c.deleted = 0 and e.deleted = 0 and f.deleted = 0
group by a.fe_ref_num";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
   echo $updateROBeat = "Update sar_se_dd_visit_cstm set compliance_c = 'Complied' where id_c ='".$resRow['id']."'"; 
		$exeBeatRoResult = $db->query($updateROBeat);
 	//exit;
 }*/
 
 /*echo $sql = "select * from sar_bitmaster where user_id_c = '56de22de-75e9-189a-1a25-59578aa3a179'";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
   echo $updateROBeat = "Update sar_bitmaster_cstm set week1_date_c = '',week2_date_c = '',week3_date_c = '', week4_date_c = '' , week5_date_c = '', week6_date_c = '' where id_c ='".$resRow['id']."'"; 
		//$exeBeatRoResult = $db->query($updateROBeat);
 	
 }*/

 
 /*$sql = "select id,user_id_c from sar_bitmaster where account_id_c in ('e19b5fd8-2ec2-7b2f-ccf6-5932426c2755','3eb71f83-72db-3674-9964-5932429c04bc','95011053-55b7-fc44-f64c-5932424033a2','d83147e4-b903-35ea-b3d9-5932420730ca','c2422a11-65bf-ee7f-8cd0-593242fa23bb','94110818-412f-eefe-089a-59324232682a','9fbea659-bd12-8639-bc29-593242e5615f','773388a3-c697-170f-ab1e-5932421faf27','299192fb-8607-ec16-8be9-593242eeccb2','f2216d35-4ef9-fafa-fe72-5932428b5b59','7d0ca76d-9208-d084-9291-593242ccddcd','73e9feda-ae85-b0a3-4c1c-5932427b6388','6f06d3a9-3d46-ec50-52b5-593242e825ce','d65581c9-5579-5d03-6cfd-593242acde6c','f1de6613-a37e-594c-f963-5932425d4d58','639fce6d-c5b1-994d-08c1-593242ff866a','ef95b604-b519-d44c-6feb-593242ee647e','2e7c0ee1-02c9-4ea4-01b2-593242f796c4','eca63d1b-d3f5-85fc-b2dd-5932421ab3d4','de080e1c-5d17-9466-3ac2-5932437b0dc3','5c648ad0-8d00-7eb6-acc7-593242a2cfc3','c91c9726-db4d-046b-8816-5932421c51f8','5be0c60d-80df-ef51-820d-5932431ff611','87f4bf10-90b0-b3f2-bb66-5964983e9d00','8767355b-6034-a8ae-1478-5932424f9f3c','db8d094a-fbc6-5048-4561-5932425b3a58','3f0e4fd5-e0d3-654b-60f7-593242409847','ade02773-557b-8032-f7e2-5932421cdb7f','3da86427-be50-67e8-8af2-59324229c174','9fa76052-5d32-52bb-b377-593242d0ddb0')";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	$beatMasterBean = $resRow['id'];
 		echo $updateROBeat = "Update sar_bitmaster set user_id_c = '523f2e22-6c58-57ad-7a9b-59310d379e40',se_code = '2001404' where id ='$beatMasterBean'"; 
		
 	
 		echo '<br>';
 		$exeBeatRoResult = $db->query($updateROBeat);
 	
 	
	
 }*/


 $sql = "select a.id,b.week6_date_c from sar_bitmaster a left join sar_bitmaster_cstm b on a.id = b.id_c
 where a.deleted = 0 and date(b.week6_date_c) < '2018-02-28' and b.week6_date_c!= '0000-00-00'";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 $beatMasterBean = $resRow['id'];
 	 $date1 =  date('Y-m-d', strtotime('+28 day', strtotime($resRow['week6_date_c']))); 
 	
 	
 	if(!empty($beatMasterBean)){
 		echo $updateROBeat = "Update sar_bitmaster_cstm set week6_date_c='$date1' where id_c ='$beatMasterBean'"; 
		
 		
 		echo '<br>';
 	$exeBeatRoResult = $db->query($updateROBeat);
 	}
	
 }
 
 
 
 /*
 $sql = "select a.* from esc_escaltion a left join esc_escaltion_cstm b on a.id = b.id_c where a.deleted = 0 and a.name = ''";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 	echo $updateROBeat = "delete from esc_escaltion where id = '".$resRow['id']."'"; 
		echo '<br>';
		echo $updateROBeat1 = "delete from esc_escaltion_cstm where id_c = '".$resRow['id']."'"; 
 		$exeBeatRoResult = $db->query($updateROBeat);
 		$exeBeatRoResult1 = $db->query($updateROBeat1);
 	
 }
*/
/*
 $sql = "select a.id from sar_bitmaster a left join sar_bitmaster_cstm b on a.id = b.id_c where a.deleted = 0 and a.name = '' and a.account_id_c is null";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 	echo $updateROBeat = "delete from sar_bitmaster where id = '".$resRow['id']."'"; 
		echo '<br>';
		echo $updateROBeat1 = "delete from sar_bitmaster_cstm where id_c = '".$resRow['id']."'"; 
 		$exeBeatRoResult = $db->query($updateROBeat);
 		$exeBeatRoResult1 = $db->query($updateROBeat1);
 	
 }
*/
/*
$sql = "select a.*,b.*,d.email_address from leads a left join leads_cstm b on a.id = b.id_c left join email_addr_bean_rel c on a.id = c.bean_id and c.bean_module = 'Leads' left join email_addresses d on c.email_address_id = d.id where a.deleted = 0 and a.status = 'Demo_Booked' and a.price IS NULL and date(b.preffered_time_c) = CURDATE() and a.assigned_user_id!= '53f5d6e5-9467-617a-ecf9-5940e9a58354' limit 1";

$exe=$db->query($sql);

while($res2_res=$db->fetchByAssoc($exe))
{

				$jobType = 'demo';
	            		$fieldExecutiveName =$res2_res['assigned_user_id'];
				
				$contactObj = new User();
				$contactObj->retrieve ( $fieldExecutiveName );
				$hubID  = $contactObj->sar_branches_users_1sar_branches_ida;
				$Branch = BeanFactory::getBean('SAR_Branches',$hubID);
				$Userid = $contactObj->user_number_c;
				$Branch->hub_code;
	
				$userObj = new User();
				$userObj->retrieve($res2_res['assigned_user_id']);
				$fareuserFormat = $userObj->user_number_c.'_livpure';
				$fareEyeUser = strtolower($fareuserFormat);
				//echo $date_captur = explode(" ", $res2_res['date_entered']);
				
				 $preferred_time = explode(" ",$res2_res['preffered_time_c']);	
				// print_r($preferred_time);
				//exit;
					
				//FOR PRODUCT CATEGORY	
				$getProductACMC = new AOS_Product_Categories();
				$getProductACMC->retrieve($res2_res['aos_product_categories_id_c']);
				$getProductACMC->name;
				//FOR PRODUCT NAME	
				$getProductNAME = new AOS_Products();
				$getProductNAME->retrieve($res2_res['aos_products_id1_c']);
				$getProductNAME->name;
				
					
			$leadArray = 
			array(
			array(
			  "jobType" => $jobType,
			  "referenceNo"=> $res2_res['lead_no_c'],
			  "date" => date('Y-m-d'),
		 	  "city" => $res2_res['primary_address_city'],
              "hub" =>  $Branch->hub_code,
              
			    "fieldExecutive" => $fareEyeUser,
		    	"jobData"=>array(
				"email_id" => $res2_res['email_address'],
				"source_of_enquiry" =>$res2_res['source_of_enquiry'],
				//"attempt_count" => "1000",
				"date_captured" => date('Y-m-d'),
				"area" => $res2_res['primary_address_area'],
				"product_type" =>$getProductACMC->name,
				"first_name" => $res2_res['first_name'],
				"lead_id" => $res2_res['lead_no_c'],
				"last_name" =>$res2_res['last_name'],
				"pincode" => $res2_res['primary_address_postalcode'],
				"product" => $getProductNAME->name,
				"preferred_date" =>$preferred_time[0],
				"preferred_time" =>$preferred_time[1],
				"remarks" => $res2_res['enquiry_remark'],
				"address_2" => $res2_res['land_mark_c'],
				"city" =>$res2_res['primary_address_city'],
				"mobile_no" => $res2_res['phone_mobile'],
				"address_1" => $res2_res['primary_address_address1'],
				"remarks" => $res2_res['remarks'],
				"attempt_count"=> "1"
		  	),
			),
			);
echo json_encode($leadArray);exit;			
}
*/

/* task creation from beat master */
/*
$todaysDate = Date('Y-m-d');
//$nextDayDate = date('Y-m-d', strtotime('+1 day', strtotime($todaysDate)));
$nextDayDate = date('Y-m-d');

echo $getSql = "select a.* ,b.* from sar_bitmaster a left join sar_bitmaster_cstm b on a.id = b.id_c where a.deleted = 0 and
(b.week1_date_c = '$nextDayDate' || b.week2_date_c = '$nextDayDate' ||
b.week3_date_c = '$nextDayDate' || b.week4_date_c = '$nextDayDate' ||
b.week5_date_c = '$nextDayDate' || b.week6_date_c = '$nextDayDate') and a.user_id_c in ('6a18a948-2977-8b06-3fc8-59310d1ed981')"; 

$executiveQuery = $db->query($getSql);
while($resRow = $db->fetchByAssoc($executiveQuery))
{
	//Bean ID
	$beatMasterBean = $resRow['id'];
	if(!empty($beatMasterBean)){
		$account_id = $resRow['account_id_c'];
		//assigned user id
		$userID2 = $resRow['assigned_user_id'];
		
		//get assigned user details
		$userObj = new User();
		$userObj->retrieve($userID2);
		
		
		//check if account still active or not
		$getAccountStatus1 = "select id from accounts left join accounts_cstm on id=id_c where id = '$account_id' and deleted='0' and account_status_c ='Active'";
		$exeAccountsResult1 = $db->query($getAccountStatus1);
		$numRows1 = $exeAccountsResult1->num_rows;
		//exit;
		if( $numRows1 > 0 ){
			//create task for next day
			$taskObject = new Task();
			$taskObject->name ='PJP';
			$taskObject->status='Not Started';
			$taskObject->date_start=$nextDayDate.' 00:00:00';
			$taskObject->date_due=$nextDayDate.' 00:00:00';
			//$taskObject->status='PJP';
			$taskObject->parent_type='Accounts';
			$taskObject->parent_id=$account_id;
			$taskObject->priority='High';
			$taskObject->user_type_c=$userObj->account_type_c;
			$taskObject->created_by=$resRow6['assigned_user_id'];
			$taskObject->modified_user_id=$resRow['assigned_user_id'];
			$taskObject->bit_root_c = $resRow['name'];
			$taskObject->assigned_user_id=$resRow['assigned_user_id'];
			$taskObject->user_id_c=$resRow['assigned_user_id'];
			$taskObject->save();
			
			if(!empty($taskObject->id)){
				//update beat master after creating task
				if($resRow['week1_date_c']  ==	$nextDayDate){
					$getDate1 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week1_date_c'])));
					
					//Update Beat Accordingly...
					$updateBeatQuery 	= 	"update sar_bitmaster_cstm set week1_date_c='$getDate1' where id_c='$beatMasterBean'";
					$executiveBeatQuery =	 $db->query($updateBeatQuery);
					
				}
				
				if( $resRow['week2_date_c'] ==	$nextDayDate){
					$getDate2 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week2_date_c'])));
					
					//Update Beat Accordingly...
					$updateBeatQuery1 	= 	"update sar_bitmaster_cstm set week2_date_c='$getDate2' where id_c='$beatMasterBean'";
					$executiveBeatQuery1 =	 $db->query($updateBeatQuery1);
					
				}
				
				
				if( $resRow['week3_date_c'] ==	$nextDayDate){
					$getDate3 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week3_date_c'])));
					
					//Update Beat Accordingly...
					$updateBeatQuery2 	= 	"update sar_bitmaster_cstm set week3_date_c='$getDate3' where id_c='$beatMasterBean'";
					$executiveBeatQuery2 =	 $db->query($updateBeatQuery2);
				}
				
				
				if( $resRow['week4_date_c'] ==	$nextDayDate){
					$getDate4 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week4_date_c'])));
					
					//Update Beat Accordingly...
					$updateBeatQuery3 	= 	"update sar_bitmaster_cstm set week4_date_c='$getDate4' where id_c='$beatMasterBean'";
					$executiveBeatQuery3 =	 $db->query($updateBeatQuery3);
					
				}
				
				if( $resRow['week5_date_c'] ==	$nextDayDate){
					$getDate5 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week5_date_c'])));
					
					//Update Beat Accordingly...
					echo $updateBeatQuery4 	= 	"update sar_bitmaster_cstm set week5_date_c='$getDate5' where id_c='$beatMasterBean'";
					$executiveBeatQuery4 =	 $db->query($updateBeatQuery4);
				}
				
				if(	$resRow['week6_date_c'] ==	$nextDayDate){
					$getDate6 = date('Y-m-d', strtotime('+28 day', strtotime($resRow['week6_date_c'])));
					
					//Update Beat Accordingly...
					echo $updateBeatQuery5 	= 	"update sar_bitmaster_cstm set week6_date_c='$getDate6' where id_c='$beatMasterBean'";
					$executiveBeatQuery5 =	 $db->query($updateBeatQuery5);
				}
			} //end not empty check
		}
	} //end check account status
}
*/
/* end for task creation from beat master */

/*
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$curl = curl_init();
$apiKey='B2CDE943-0254-4884-ABA5-9917009715CF';
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: 0',
        'API_KEY : B2CDE943-0254-4884-ABA5-9917009715CF'
	));
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_URL, "http://125.21.177.54:61/api/master/GetNewData?fromdate='30-Oct-2017'&todate='31-Oct-2017'");
$info=curl_getinfo($curl);

$result = curl_exec($curl);
if(curl_error($curl))
{
    echo 'error:' . curl_error($curl);
}
echo "<pre>";
print_R($result);

*/
/*
$sql = "select a.id from tasks a left join tasks_cstm b on a.id = b.id_c
where a.deleted = 0 and a.date_due = '2018-01-17'
and a.assigned_user_id in ('bcd0eece-a626-cf78-6912-59310d101b12','c131e7ff-2bba-e6ac-8e91-59310daa7407','8ed43b12-4b0b-5b99-65e4-59310dc7d00b','a3abbbbd-5ce2-a7ab-7bf6-59310df8936e','d93fe6fc-b9fc-a2f4-e9f2-59310d6f3332','a99dcd77-af4d-7e1f-5fb3-59310dd74a8b','6a5b78db-5f88-1dd2-4135-59393aa5e6e5','f33bb510-f20d-6840-f8ab-593fcefa2654','79b6541c-1308-a00e-eaea-59310dcb39e6','ac297a2d-7357-702d-1537-59310d8412da','6497A2D1-5277-171B-AC46-3D0F2F840335','8A52788E-44BE-EF96-956C-26E789F924F7','9fbee9bf-be1b-c24d-50ca-59310d8cc092','FFA4ABF4-DC21-D923-8B25-43E55E2BB476','9ec60299-0093-e69c-434a-59310d74ace3','449f8cfe-f5cd-aa10-5b99-59310dda522c','9f2ae522-6377-fb3d-494d-59393dd2d8e0','c48ae053-0b57-4289-64a2-59310d25b3b7','8DB96970-9CB4-5E01-75DE-3A57CBF94DEF','ae273ae7-eaed-a308-9dc2-59310d1a5e97','27AA8C0B-0470-152E-2343-82DAF0D5DF4A','7c324232-41e4-fc71-a39d-59310d252bd4','244a607a-44ba-4d1e-4a50-59310db0de9d','57282d94-3338-8a30-e3b7-59310d30542c','b16da8bf-c5c1-d5da-cb9f-59310dd4826d','8d488edd-7806-ea35-8496-59578a42a7b1','0F54CA11-028C-40D9-C64E-A6D7F4820204','dad97737-1e81-8e19-346b-59310de18928','2d7347e2-afa3-81eb-c6fb-59310dafc6e8','4c1c43f7-7e1d-b38a-bb64-59310d5e9bb1','9ba8b426-fa38-11a1-cb5a-59310dca8736','4c9a68f0-3514-a34e-cb20-59310d1117c1','e5454d92-224b-1e00-d173-59310da379ab','80ece44e-6563-72ad-8a01-59310d513d96','49c928dc-068f-aa02-570e-59578aee0782','3879d43e-e4e4-518b-84c5-59310d4852e0','5cdad768-a816-0c6e-fc6f-59310d96f3a3','234ea478-d1b9-72a9-0de4-59393d796b97','c8ef35db-5c77-de41-85b9-59310da8ada2','c974b110-0cce-4828-b342-59310df4bcad','DCED07FA-F884-FF36-91B3-8AA2791F39F0','33e0ce72-77ab-8d6b-1b12-59310d73ee69','6259a168-6183-3c90-723f-593fc8ccca47','7AECC33B-179F-3667-C4AC-CA55FAE9D454','11231e95-f100-f0a5-17be-59310d1ca4e0','a951410e-1e52-bc35-ef34-59310d0e9dd5','c6104b02-29b9-8fce-19eb-59d325f1e5f5','a4acd5f1-5151-2d1b-b58f-59310dce9ef9','9e2857de-37e8-ed1f-dffd-59310dfca690','D8EAEFEB-2D0E-CA60-2C28-B42A04A81E38','6a18a948-2977-8b06-3fc8-59310d1ed981','709eda3c-fa18-2a8f-1ffe-5948d9b8124b','930e0645-6ba5-e1b8-f488-59310d742d56','6b7f0519-04c9-d00a-7863-59310d0b00a8','FC6D7433-9CD7-B8E8-3FF4-931D81B28410','9998ca43-286c-e2d9-5b90-59310d894f29','353dde00-41c1-bdc6-0cdd-59310d7dbae3','917bdca4-742d-c109-ec93-59310de283d1','54c917e5-440e-4962-f1b4-59310d3b0b66','23177C0A-6A55-B70D-0258-B4D4AE5FCB01','523f2e22-6c58-57ad-7a9b-59310d379e40','ee05b2cd-9f87-60fe-1c42-59310d14a0b1','4f75561b-a83e-0ddd-b99c-59310d818f39','56de22de-75e9-189a-1a25-59578aa3a179','1b930cfb-ee08-6ba3-ad76-59310d9d0c5b','ac464683-b24e-cbb4-ab57-59310dc2df31','66a32a06-be59-1995-63b7-59310dde5771','15173F52-0B52-0A0F-9BE6-3C9E6932148D','8f245920-b9d6-72cf-ce2b-59310d925e0a','907d3444-3845-88da-1e1d-59310dbede32','1143C0F3-67B2-F237-16AD-71BC06FAC127','1f62c9e3-d7ab-18f3-bf95-59310d8ca823','96B5C66D-82D4-75AE-74FD-22C1CEC18EFC','D8BA5183-493D-1C66-0EB8-C8153B301FC4','a47f6ae1-d9f8-f36c-f3f0-59310d2b5eb2','66facef3-a02f-564b-8382-59310da1d2ec','f109c8b0-7f0d-792e-e646-59578afecb4e','2eb5d375-e97f-6954-d719-595a19b92708','c64b79d7-6cba-dd44-16a0-59310daa2131','22f011c7-f4df-bdaa-4e7d-59310da71750','75f9b2dd-c9b2-bfb8-5059-59310d12f6e5','4b086784-5df0-ca82-b454-59310d80cbbe','376e0760-7158-ee4c-4de9-5948db96b394','1f790fd1-3081-34af-5462-59310d129577','38800a26-b808-3b02-777e-59310d466a0a','ccff25d3-ea80-6253-6acc-59310d896ba7','5F87C9B6-4FAA-D60E-B4A3-B383348B0545','2e65889d-452d-014d-524c-59310df263e9','af0c27b8-60fa-6985-0739-59310df16465','4300dbba-2a59-1cff-52d0-59310dc05db1','6297801e-4009-40ba-6ca8-59310d0c46f8','305f5768-c70b-7402-678e-59310d3eafcb','8A875A80-7F81-087C-A408-4ECA3FDCD077','2DE21992-AA08-8CFC-27C4-1F79391D3DE6','581BFCC8-84F6-D4F8-30BE-BCB1B8F746A1','7a1a372a-b499-9d5b-a0f1-59310dcf1025','571a65bd-b94d-fa8f-c079-59578a2454a7','c248ba58-429c-ccd0-a1d4-59310d56a823','eb82fb67-da0c-4cee-3bc1-59310dfb16e5','52783c37-4899-cfcc-b522-59578a7c00ab','5e7fb78c-3d0b-1c03-064f-59310dd486cb','15D5453F-A800-E0CA-39D2-1905C5A934FF','984462cc-bb35-98c4-7f17-59310dc9d929','2cc5d7b1-b20a-e346-c3d5-59310d4ce853','c7c6ee89-856f-47ba-c735-59310dbde242','c4321c24-b791-05cd-2ab4-59310dae00b5','14cd58d5-22de-bfe4-d8c8-59310d5131ab','9f4f8720-ed49-0b15-691d-59310d37950d','e8178ed2-373f-fa0d-19c6-59310ddf627a','2b4ea807-ba1a-5031-575e-593fd42018cc','8991bc97-d201-5912-b397-59310fb9c9f6','189C5B2D-53F2-3B83-5833-AD829884731C','a338f36d-3f0f-4f8d-32d6-59310d4e855f','4ab694a4-c870-8d77-f13f-59310da6dab4','7bdc8265-251d-acb0-ee74-59310d54e8c7','a2956ab2-3c00-3ddc-c9bd-59310d75e889','494AF790-AFF0-A009-5262-B1DBC2C50668','ced0035d-bdb7-7176-3e02-59a1391db220','35b263b3-7c93-042f-17a8-59310d81fbae','17801DCB-D26A-535B-1605-8A51AEE73D47','c20f79b7-8bc1-ddc8-1ae2-59b92924b012','14be8cd5-418b-4361-8fd5-59310d00bf5a','9626e9a4-16ee-9423-605e-59310df3eb85','d8f083c9-02f7-092a-0428-5993f789ea6f','75b70dd4-0eed-6aad-8fce-59310d9176df','d89f6bd6-fdb1-388f-194d-59310dcea3c3','c98ed25d-6e56-969e-5f8b-59310dbe8463','a2a9d20f-7140-022c-c31a-59310d34403e','7f1184e1-11c4-46be-65cb-59578a7e290d','18b69474-a5cc-eb71-e401-59310da08c33','57cc0fc0-1524-6e2e-e0a8-59310d7e3251','0871D1AC-DE36-5E99-BFBC-6CE23D9366F2','756e6096-1082-7e85-b04a-59578a6e8b98')
and a.name = 'pjp' and b.rescheduled_c = '0'";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 	echo $updateROBeat = "delete from tasks where id = '".$resRow['id']."'"; 
		echo '<br>';
		echo $updateROBeat1 = "delete from tasks_cstm where id_c = '".$resRow['id']."'"; 
 		$exeBeatRoResult = $db->query($updateROBeat);
 		$exeBeatRoResult1 = $db->query($updateROBeat1);
 	
}
 */
 /*

 $get_acc_rec = "select a.id,a.account_type,b.customer_number_c,a.billing_address_state,a.assigned_user_id,b.counter_type_c from accounts a left join accounts_cstm b on a.id = b.id_c where a.deleted = 0 and b.account_status_c = 'Active' and a.assigned_user_id in ('c6104b02-29b9-8fce-19eb-59d325f1e5f5')";
 
		$get_rec = $db->query($get_acc_rec);
		$count_row = $get_rec->num_rows;
 
		while($fetch_rec=$db->fetchByAssoc($get_rec)){
			
			$get_user_beat = "select id from sar_bitmaster where user_id_c = '".$fetch_rec['assigned_user_id']."'";
			$get_user_beats = $db->query($get_user_beat);
			while($fetch_rec_user=$db->fetchByAssoc($get_user_beats)){
				$upps = "update sar_bitmaster_cstm set week1_date_c = '',week2_date_c = '',week3_date_c = '', week4_date_c = '',week5_date_c = '',week6_date_c = '' where id_c = '".$fetch_rec_user['id']."'";
				$db->query($upps);
			}
			//select user
			$get_user_id = "Select * from users where id = '".$fetch_rec['assigned_user_id']."' ";
			$get_user = $db->query($get_user_id);
			$fetch_user = $db->fetchByAssoc($get_user);
			
			$check_bitmaster = "Select id from sar_bitmaster where account_id_c = '".$fetch_rec['id']."' and deleted = 0";
			$check_bitmaster1 = $db->query($check_bitmaster);
			$count_bit = $check_bitmaster1->num_rows;
			
			if($count_bit > 0){
				$fetch_bit = $db->fetchByAssoc($check_bitmaster1);
				
				echo $update_bit_cstm = "UPDATE `sar_bitmaster_cstm` SET `pjp_next_due_date_c` = '".$fetch_rec['pjp_next_due_date_c']."', `counter_pjp_flag_c`='".$fetch_rec['counter_pjp_flag_c']."', `pjp_visit_date_c` = '".$fetch_rec['pjp_visit_date_c']."', `counter_type_c`='".$fetch_rec['counter_type_c']."', `repeated_c`='".$fetch_rec['repeated_c']."', `pjp_last_due_date_c`='".$fetch_rec['pjp_last_due_date_c']."',week1_date_c = '',week2_date_c = '',week3_date_c = '', week4_date_c = '',week5_date_c = '',week6_date_c = '' WHERE id_c = '".$fetch_bit['id']."' ";
				$up_bit_cstm = $db->query($update_bit_cstm);
				
				echo $update_bitmaster = "UPDATE `sar_bitmaster` SET `account_type` = '".$fetch_rec['account_type']."', `account_code` = '".$fetch_rec['customer_number_c']."', `account_location` = '".$fetch_rec['billing_address_state']."', `user_id_c`='".$fetch_rec['assigned_user_id']."', `se_code` = '".$fetch_user['user_name']."',base_location = '".$fetch_rec['billing_address_state']."' WHERE id = '".$fetch_bit['id']."' ";
				$up_bit = $db->query($update_bitmaster);

				
			}
			
			else{
				$bit_guid = create_guid();
				
				echo $crt_bit = "INSERT INTO `sar_bitmaster`(`id`,name,date_entered,date_modified, `account_type`, `account_code`, `account_id_c`, `account_location`, user_id_c, se_code,base_location,assigned_user_id) VALUES ('".$bit_guid."','Route', now(),now(),'".$fetch_rec['account_type']."', '".$fetch_rec['customer_number_c']."', '".$fetch_rec['id']."', '".$fetch_rec['billing_address_state']."', '".$fetch_rec['assigned_user_id']."', '".$fetch_user['user_name']."','".$fetch_rec['billing_address_state']."','".$fetch_rec['assigned_user_id']."' )";
				$create_bit = $db->query($crt_bit);
				
				echo $crt_bit_cstm = "INSERT INTO `sar_bitmaster_cstm`(`id_c`, `pjp_next_due_date_c`, `counter_pjp_flag_c`, `pjp_visit_date_c`, `counter_type_c`, `repeated_c`, `pjp_last_due_date_c`) VALUES ('".$bit_guid."', '".$fetch_rec['pjp_next_due_date_c']."', '".$fetch_rec['counter_pjp_flag_c']."', '".$fetch_rec['pjp_visit_date_c']."', '".$fetch_rec['counter_type_c']."', '".$fetch_rec['repeated_c']."', '".$fetch_rec['pjp_last_due_date_c']."' )";
				$crt_bitsctm = $db->query($crt_bit_cstm);
	
				
	
				
			}
		}

	*/	
		/*
		$todaysDate = Date('Y-m-d');
		$prevDayDate = date('Y-m-d', strtotime('-1 day', strtotime($todaysDate)));
		$sql = "select a.*,b.* from sar_se_dd_visit a left join sar_se_dd_visit_cstm b on 
a.id = b.id_c left join users_cstm c on a.assigned_user_id = c.id_c
where  a.deleted = 0 and c.account_type_c = 'SE' 
and date(a.date_entered) = '".$prevDayDate."'
and b.channel_category_c = 'GT'";
$get_rec = $db->query($sql);
		$sum = '0';
		while($fetch_rec=$db->fetchByAssoc($get_rec))
		{
			// first check in secondary order
	 $first_check = "select a.id from sar_secondary_order a left join sar_secondary_order_cstm b on a.id = b.id_c where a.fe_ref_num = '".$fetch_rec['fe_ref_num']."' and date(a.date_entered) = '".$prevDayDate."' limit 1";
	$get_rec2 = $db->query($first_check);
	 $count_secondary_order = $get_rec2->num_rows;// echo "<br>";
	
	       // second check secondary stock
     $second_check = "select a.id from sar_secondary_stock a left join sar_secondary_stock_cstm b on a.id = b.id_c where b.fe_ref_num_c = '".$fetch_rec['fe_ref_num']."' and date(a.date_entered) = '".$prevDayDate."' limit 1";
	$get_rec3 = $db->query($second_check);
	 $count_secondary_stock = $get_rec3->num_rows; //echo "<br>";
	
	      // third check shelf visibility
	 $third_check = "select a.id from sar_shelf_visibility a left join sar_shelf_visibility_cstm b on a.id = b.id_c where a.fe_ref_num = '".$fetch_rec['fe_ref_num']."' and date(a.date_entered) = '".$prevDayDate."' limit 1";
	$get_rec4 = $db->query($third_check);
	 $count_shelf_visibility = $get_rec4->num_rows; //echo "<br>";
		  
		   $sum_total = $count_secondary_order+$count_secondary_stock+$count_shelf_visibility;
		  if($sum_total >= 3)
		  {
			// echo  $ups = "update sar_se_dd_visit_cstm set compliance_c = 'Complied' where id_c = '".$fetch_rec['id']."'";
			$sum = $sum+1;
		  }
		}
		echo $sum;
 */
 /*
 $sql = "select a.id from sar_collection a left join sar_collection_cstm b on a.id = b.id_c
where a.deleted = 0 
and a.fe_ref_num in ('298777/26436/1517926109844','298777/26436/1517925114084','298777/26436/1517922264480','298777/26436/1517921501386','298777/26436/1517921338188','298777/26436/1517921212686','298777/26436/1517920986547','298777/26436/1517921062935','298777/26436/1517920629658','298777/26436/1517920408607','298777/26436/1517920327189','298777/26436/1517919342102','298777/26436/1517918038925','298777/26436/1517917010412','298777/26436/1517915802656','298777/26436/1517914445431','298777/26436/1517913661769','298777/26436/1517912706684','298777/26436/1517900825412','333321/26436/1517928867572','333321/26436/1517926797164','333321/26436/1517916016076','333321/26436/1517914505689') ";
$executiveQuery = $db->query($sql);
 while($resRow = $db->fetchByAssoc($executiveQuery))
 {
	 
	 	echo $updateROBeat = "delete from sar_collection where id = '".$resRow['id']."'"; 
		echo '<br>';
		echo $updateROBeat1 = "delete from sar_collection_cstm where id_c = '".$resRow['id']."'"; 
 		$exeBeatRoResult = $db->query($updateROBeat);
 		$exeBeatRoResult1 = $db->query($updateROBeat1);
 	
}*/
?>