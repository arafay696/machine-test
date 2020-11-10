<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Common_model');
    }

    public function index()
    {
        $this->load->view("index");
    }

    public function speed()
    {
        $kb = 1024;
        $fp = fopen(__DIR__ . '/../../assets/output.txt', 'w+') or die('Failed to open');
        $time = explode(" ", microtime());
        $start = $time[0] + $time[1];
        for ($x = 0; $x < $kb; $x++) {
            fwrite($fp, str_pad('', 1024, '-') . "\n");
        }
        fclose($fp);
        $time = explode(" ", microtime());
        $finish = $time[0] + $time[1];
        $deltat = $finish - $start;

        $kb = round($kb / $deltat, 3);
        $bytes = $kb * 1000;
        $mb = $kb / 8000;

        $timeSeconds = number_format($deltat, 2);
        $kb = number_format($kb, 2);
        $mb = number_format($mb, 2);

        // Maintain test_histories
        $message = "Test finished in $timeSeconds seconds. Your speed is " . $kb . " Kb/s and " . $mb . " MB";
        $data = array(
            'title' => $message
        );
        $this->Common_model->insert_entry('test_histories', $data);
        echo json_encode([
            'status' => true,
            'message' => $message,
            'data' => $this->Common_model->select_all_histories()
        ]);
    }

    public function deleteHistory()
    {
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $request = json_decode($stream_clean, true);

        echo json_encode([
            'status' => true,
            'message' => 'history deleted',
            'data' => $this->Common_model->delete_entry('test_histories', $request['id'])
        ]);
    }
}