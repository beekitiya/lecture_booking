<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
  {
    parent::__construct();// you have missed this line.
	$this->load->model('m_booking','booking');

	$this->load->helper(array('form', 'url'));
  }

	public function index()
	{
		$data['list_date'] = $this->booking->get_list_date();
		$data['list_booking'] = $this->booking->get_list_booking();
		$data['list_lecture_status'] = $this->booking->get_list_lecture_dateTime();
		//var_dump($status);
		$this->load->view('v_booking',$data);
	}

	public function save_booking()
	{
		$dateBooking = date("Y-m-d H:i:s");
		$fileupload = $_FILES['lecture_file']['tmp_name'];
		$fileupload_name = $_FILES['lecture_file']['name'];
		$path_upload = "upload/";

		if($fileupload){
			$arrayfile = explode(".",$fileupload_name);
			$filetype = $arrayfile[1];

			if($filetype=="doc"||$filetype="docx") {
				$filename = $dateBooking.$arrayfile[0].".".$filetype;
				$filePath = "upload/".$filename;
				copy($fileupload, $path_upload.$filename);
				$lecture_file = $this->booking->lecture_file = $filePath;
			} else {
				echo "<h3>ERROR : ไม่สามารถอัปโหลดไฟล์ได้</h3>";
			}
		} else {
			$lecture_file = $this->booking->lecture_file = $this->input->post('lecture_file');
		}

		$lecture_topic = $this->booking->lecture_topic = $this->input->post('lecture_topic');
		$lecturer = $this->booking->lecturer = $this->input->post('lecturer');
		$id_lecture_date = $this->booking->id_lecture_date = $this->input->post('id_date');
		$id_lecture_time = $this->booking->id_lecture_time = $this->input->post('time');
		$status = 1;

		$data = array (
			'lecture_topic' => $lecture_topic,
			'lecturer' => $lecturer,
			'lecture_file' => $lecture_file,
			'id_lecture_date' => $id_lecture_date,
			'id_lecture_time' => $id_lecture_time,
			'booking_date' => $dateBooking,
		);
		$this->booking->insert_booking($data,$id_lecture_date,$id_lecture_time,$status);
		redirect('booking/index');
	}
}
?>
