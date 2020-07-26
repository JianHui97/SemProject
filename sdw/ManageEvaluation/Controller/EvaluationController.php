<?php

include('../model/JuryModel.php');

if(isset($_POST['method'])){
	if($_POST['method'] == "AddJury"){
		$result = AddJury($_POST['Name'],$_POST['Age'],$_POST['Gender'],$_POST['Contact'],$_POST['Email']);
		if($result){
			echo "<script>alert('Add Jury Successful')</script>";
			echo "<script>window.location.assign('../view/JuryListView.php')</script>";
		}else{
			echo "<script>alert('Add Jury Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('../view/JuryListView.php')</script>";
		}	
	}
	else if($_POST['method'] == "EditJury"){
		$result = EditJury($_POST['JuryID'],$_POST['Name'],$_POST['Age'],$_POST['Gender'],$_POST['Contact']);
		
		if($result){
			echo "<script>alert('Edit Jury successful')</script>";
			echo "<script>window.location.assign('/sdw/ManageEvaluation/view/JuryListView.php')</script>";
		}else{
			echo "<script>alert('Edit Jury Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('/sdw/ManageEvaluation/view/JuryListView.php')</script>";
		}
	}
	else if($_POST['method'] == "AddEvaluation"){
		$result = AddEvaluation($_POST['ParticipantID'],$_POST['JuryID'],$_POST['Mark'],$_POST['Remark']);
		
		if($result){
			echo "<script>alert('Add Evaluation Successful')</script>";
			echo "<script>window.location.assign('../view/EvaluationForm.php')</script>";
		}else{
			echo "<script>alert('Add Evaluation Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('../view/EvaluationForm.php')</script>";
		}
	} 
}

	


	if($_SERVER['PHP_SELF'] == "/sdw/ManageEvaluation/view/JuryListView.php"){

	$alljury = AllJury();

	}
	

	
	if(isset($_GET['JuryID'])){

	$evaluation = Evaluation($_GET['JuryID']);
	
	}
	
	if($_SERVER['PHP_SELF'] == "/sdw/ManageEvaluation/view/ResultView.php"){

	$allresult = AllResult();

	}
	
	if(isset($_GET['dlt_id'])){

	$result = DeleteJury($_GET['dlt_id']);
	if($result){
			echo "<script>alert('Jury Deleted Successful')</script>";
			echo "<script>window.location.assign('../view/JuryListView.php')</script>";
		}else{
			echo "<script>alert('Jury Delete Fail, Please Try Again')</script>";
			echo "<script>window.location.assign('../view/JuryListView.php')</script>";
	}
}

	if($_SERVER['PHP_SELF'] == "/sdw/ManageEvaluation/view/EvaluationForm.php"){

	$listid = ListID();

	}
?>	