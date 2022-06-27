<?php

class SPK extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index($data)
    {
        $this->form_validation->set_rules('EBPS', 'Cek', 'required');
        $this->form_validation->set_rules('FKS', 'Cek', 'required');
        $this->form_validation->set_rules('GPS', 'Cek', 'required');
        $this->form_validation->set_rules('KDS', 'Cek', 'required');
        $this->form_validation->set_rules('SAS', 'Cek', 'required');
        $this->form_validation->set_rules('NPC', 'Cek', 'required|numeric|greater_than[0]|less_than_equal_to[100]');
        $this->form_validation->set_rules('EBPR', 'Cek', 'required');
        $this->form_validation->set_rules('FKR', 'Cek', 'required');
        $this->form_validation->set_rules('GPR', 'Cek', 'required');
        $this->form_validation->set_rules('KDR', 'Cek', 'required');
        $this->form_validation->set_rules('SAR', 'Cek', 'required');
        $this->form_validation->set_rules('NPW', 'Cek', 'required|numeric|greater_than[0]|less_than_equal_to[100]');
        $this->form_validation->set_rules('EBPJ', 'Cek', 'required');
        $this->form_validation->set_rules('FKJ', 'Cek', 'required');
        $this->form_validation->set_rules('GPJ', 'Cek', 'required');
        $this->form_validation->set_rules('KDJ', 'Cek', 'required');
        $this->form_validation->set_rules('SAJ', 'Cek', 'required');
        $this->form_validation->set_rules('NJK', 'Cek', 'required|numeric|greater_than[0]|less_than_equal_to[100]');
        $this->form_validation->set_rules('EBPM', 'Cek', 'required');
        $this->form_validation->set_rules('FKM', 'Cek', 'required');
        $this->form_validation->set_rules('GPM', 'Cek', 'required');
        $this->form_validation->set_rules('KDM', 'Cek', 'required');
        $this->form_validation->set_rules('SAM', 'Cek', 'required');
        $this->form_validation->set_rules('NML', 'Cek', 'required|numeric|greater_than[0]|less_than_equal_to[100]');

        if ($this->form_validation->run() == FALSE) {
            $nama = $this->uri->segment(3);
            $nim = $this->uri->segment(4);

            $data = [
                'nama'  => $nama,
                'nim'   => $nim
            ];
            $this->load->view('input', $data);
        } else {

            $nama = $this->uri->segment(3);
            $nim = $this->uri->segment(4);
            $preprocessing = [
                'EBPS'  => $this->input->post('EBPS', true),
                'FKS'   => $this->input->post('FKS', true),
                'GPS'   => $this->input->post('GPS', true),
                'KDS'   => $this->input->post('KDS', true),
                'SAS'   => $this->input->post('SAS', true),
                'NPC'   => $this->input->post('NPC', true),
                'EBPR'  => $this->input->post('EBPR', true),
                'FKR'   => $this->input->post('FKR', true),
                'GPR'   => $this->input->post('GPR', true),
                'KDR'   => $this->input->post('KDR', true),
                'SAR'   => $this->input->post('SAR', true),
                'NPW'   => $this->input->post('NPW', true),
                'EBPJ'  => $this->input->post('EBPJ', true),
                'FKJ'   => $this->input->post('FKJ', true),
                'GPJ'   => $this->input->post('GPJ', true),
                'KDJ'   => $this->input->post('KDJ', true),
                'SAJ'   => $this->input->post('SAJ', true),
                'NJK'   => $this->input->post('NJK', true),
                'EBPM'  => $this->input->post('EBPM', true),
                'FKM'   => $this->input->post('FKM', true),
                'GPM'   => $this->input->post('GPM', true),
                'KDM'   => $this->input->post('KDM', true),
                'SAM'   => $this->input->post('SAM', true),
                'NML'   => $this->input->post('NML', true),
            ];

            // METODE SAW
            $EBP_SAW = array(intval($preprocessing['EBPS']), intval($preprocessing['EBPR']), intval($preprocessing['EBPJ']), intval($preprocessing['EBPM']));
            $FK_SAW = array(intval($preprocessing['FKS']), intval($preprocessing['FKR']), intval($preprocessing['FKJ']), intval($preprocessing['FKM']));
            $GP_SAW = array(intval($preprocessing['GPS']), intval($preprocessing['GPR']), intval($preprocessing['GPJ']), intval($preprocessing['GPM']));
            $KD_SAW = array(intval($preprocessing['KDS']), intval($preprocessing['KDR']), intval($preprocessing['KDJ']), intval($preprocessing['KDM']));
            $SA_SAW = array(intval($preprocessing['SAS']), intval($preprocessing['SAR']), intval($preprocessing['SAJ']), intval($preprocessing['SAM']));
            $N_SAW = array(intval($preprocessing['NPC']), intval($preprocessing['NPW']), intval($preprocessing['NJK']), intval($preprocessing['NML']));


            $minEBP = min($EBP_SAW); // Cost
            $maxFK = max($FK_SAW); // Benefit
            $maxGP = max($GP_SAW); // Benefit
            $minKD = min($KD_SAW); // Cost
            $maxSA = max($SA_SAW); // Benefit
            $maxN = max($N_SAW); // Benefit

            // Proses Normalisasi
            $NorEBP_SAW = array();
            $NorFK_SAW = array();
            $NorGP_SAW = array();
            $NorKD_SAW = array();
            $NorSA_SAW = array();
            $NorN_SAW = array();
            $bobot  = array(0.212, 0.152, 0.091, 0.182, 0.121, 0.242);

            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    switch ($i) {
                        case 0:
                            $temp = $minEBP / $EBP_SAW[$j];
                            array_push($NorEBP_SAW, $temp);
                            break;
                        case 1:
                            $temp = $FK_SAW[$j] / $maxFK;
                            array_push($NorFK_SAW, $temp);
                            break;
                        case 2:
                            $temp = $GP_SAW[$j] / $maxGP;
                            array_push($NorGP_SAW, $temp);
                            break;
                        case 3:
                            $temp = $minKD / $KD_SAW[$j];
                            array_push($NorKD_SAW, $temp);
                            break;
                        case 4:
                            $temp = $SA_SAW[$j] / $maxSA;
                            array_push($NorSA_SAW, $temp);
                            break;
                        case 5:
                            $temp = $N_SAW[$j] / $maxN;
                            array_push($NorN_SAW, $temp);
                            break;
                    }
                }
            }

            $rankingSAW = array();
            // Perangkingan
            for ($i = 0; $i < 4; $i++) {
                switch ($i) {
                    case 0:
                        $temp = ($NorEBP_SAW[$i] * $bobot[0]) + ($NorFK_SAW[$i] * $bobot[1]) + ($NorGP_SAW[$i] * $bobot[2]) + ($NorKD_SAW[$i] * $bobot[3]) + ($NorSA_SAW[$i] * $bobot[4]) + ($NorN_SAW[$i] * $bobot[5]);
                        array_push($rankingSAW, $temp);
                        break;

                    case 1:
                        $temp = ($NorEBP_SAW[$i] * $bobot[0]) + ($NorFK_SAW[$i] * $bobot[1]) + ($NorGP_SAW[$i] * $bobot[2]) + ($NorKD_SAW[$i] * $bobot[3]) + ($NorSA_SAW[$i] * $bobot[4]) + ($NorN_SAW[$i] * $bobot[5]);
                        array_push($rankingSAW, $temp);
                        break;

                    case 2:
                        $temp = ($NorEBP_SAW[$i] * $bobot[0]) + ($NorFK_SAW[$i] * $bobot[1]) + ($NorGP_SAW[$i] * $bobot[2]) + ($NorKD_SAW[$i] * $bobot[3]) + ($NorSA_SAW[$i] * $bobot[4]) + ($NorN_SAW[$i] * $bobot[5]);
                        array_push($rankingSAW, $temp);
                        break;

                    case 3:
                        $temp = ($NorEBP_SAW[$i] * $bobot[0]) + ($NorFK_SAW[$i] * $bobot[1]) + ($NorGP_SAW[$i] * $bobot[2]) + ($NorKD_SAW[$i] * $bobot[3]) + ($NorSA_SAW[$i] * $bobot[4]) + ($NorN_SAW[$i] * $bobot[5]);
                        array_push($rankingSAW, $temp);
                        break;
                }
            }


            // METODE TOPSIS
            $EBP_TOPSIS = array(intval($preprocessing['EBPS']), intval($preprocessing['EBPR']), intval($preprocessing['EBPJ']), intval($preprocessing['EBPM']));
            $FK_TOPSIS = array(intval($preprocessing['FKS']), intval($preprocessing['FKR']), intval($preprocessing['FKJ']), intval($preprocessing['FKM']));
            $GP_TOPSIS = array(intval($preprocessing['GPS']), intval($preprocessing['GPR']), intval($preprocessing['GPJ']), intval($preprocessing['GPM']));
            $KD_TOPSIS = array(intval($preprocessing['KDS']), intval($preprocessing['KDR']), intval($preprocessing['KDJ']), intval($preprocessing['KDM']));
            $SA_TOPSIS = array(intval($preprocessing['SAS']), intval($preprocessing['SAR']), intval($preprocessing['SAJ']), intval($preprocessing['SAM']));
            $N_TOPSIS = array(intval($preprocessing['NPC']), intval($preprocessing['NPW']), intval($preprocessing['NJK']), intval($preprocessing['NML']));

            $EBP_TOPSIS2 = array(intval($preprocessing['EBPS']) ** 2, intval($preprocessing['EBPR']) ** 2, intval($preprocessing['EBPJ']) ** 2, intval($preprocessing['EBPM']) ** 2);
            $FK_TOPSIS2 = array(intval($preprocessing['FKS']) ** 2, intval($preprocessing['FKR']) ** 2, intval($preprocessing['FKJ']) ** 2, intval($preprocessing['FKM']) ** 2);
            $GP_TOPSIS2 = array(intval($preprocessing['GPS']) ** 2, intval($preprocessing['GPR']) ** 2, intval($preprocessing['GPJ']) ** 2, intval($preprocessing['GPM']) ** 2);
            $KD_TOPSIS2 = array(intval($preprocessing['KDS']) ** 2, intval($preprocessing['KDR']) ** 2, intval($preprocessing['KDJ']) ** 2, intval($preprocessing['KDM']) ** 2);
            $SA_TOPSIS2 = array(intval($preprocessing['SAS']) ** 2, intval($preprocessing['SAR']) ** 2, intval($preprocessing['SAJ']) ** 2, intval($preprocessing['SAM']) ** 2);
            $N_TOPSIS2 = array(intval($preprocessing['NPC']) ** 2, intval($preprocessing['NPW']) ** 2, intval($preprocessing['NJK']) ** 2, intval($preprocessing['NML']) ** 2);

            $AkarEBP = sqrt(array_sum($EBP_TOPSIS2)); // Cost
            $AkarFK = sqrt(array_sum($FK_TOPSIS2)); // Benefit
            $AkarGP = sqrt(array_sum($GP_TOPSIS2)); // Benefit
            $AkarKD = sqrt(array_sum($KD_TOPSIS2)); // Cost
            $AkarSA = sqrt(array_sum($SA_TOPSIS2)); // Benefit
            $AkarN = sqrt(array_sum($N_TOPSIS2)); // Benefit

            // Proses Normalisasi sekaligus Perkailan dengan Bobot
            $NorEBP_TOPSIS = array();
            $NorFK_TOPSIS = array();
            $NorGP_TOPSIS = array();
            $NorKD_TOPSIS = array();
            $NorSA_TOPSIS = array();
            $NorN_TOPSIS = array();
            $bobot  = array(0.212, 0.152, 0.091, 0.182, 0.121, 0.242);

            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    switch ($i) {
                        case 0:
                            $temp = $EBP_TOPSIS[$j] / $AkarEBP * $bobot[0];
                            array_push($NorEBP_TOPSIS, $temp);
                            break;
                        case 1:
                            $temp = $FK_TOPSIS[$j] / $AkarFK * $bobot[1];
                            array_push($NorFK_TOPSIS, $temp);
                            break;
                        case 2:
                            $temp = $GP_TOPSIS[$j] / $AkarGP * $bobot[2];
                            array_push($NorGP_TOPSIS, $temp);
                            break;
                        case 3:
                            $temp = $KD_TOPSIS[$j] / $AkarKD * $bobot[3];
                            array_push($NorKD_TOPSIS, $temp);
                            break;
                        case 4:
                            $temp = $SA_TOPSIS[$j] / $AkarSA * $bobot[4];
                            array_push($NorSA_TOPSIS, $temp);
                            break;
                        case 5:
                            $temp = $N_TOPSIS[$j] / $AkarN * $bobot[5];
                            array_push($NorN_TOPSIS, $temp);
                            break;
                    }
                }
            }

            // ideal +
            $idealP = array();
            $idealN = array();

            // ideal +
            $minEBP_TOPSIS = array();
            $minFK_TOPSIS = array();
            $minGP_TOPSIS = array();
            $minKD_TOPSIS = array();
            $minSA_TOPSIS = array();
            $minN_TOPSIS = array();
            for ($i = 0; $i < 6; $i++) {
                switch ($i) {
                    case 0:
                        $max = max($NorEBP_TOPSIS);
                        $min = min($NorEBP_TOPSIS);
                        array_push($idealP, $min);
                        array_push($idealN, $max);
                        break;
                    case 1:
                        $max = max($NorFK_TOPSIS);
                        $min = min($NorFK_TOPSIS);
                        array_push($idealP, $max);
                        array_push($idealN, $min);
                        break;
                    case 2:
                        $max = max($NorGP_TOPSIS);
                        $min = min($NorGP_TOPSIS);
                        array_push($idealP, $max);
                        array_push($idealN, $min);
                        break;
                    case 3:
                        $max = max($NorKD_TOPSIS);
                        $min = min($NorKD_TOPSIS);
                        array_push($idealP, $min);
                        array_push($idealN, $max);
                        break;
                    case 4:
                        $max = max($NorSA_TOPSIS);
                        $min = min($NorSA_TOPSIS);
                        array_push($idealP, $max);
                        array_push($idealN, $min);
                        break;
                    case 5:
                        $max = max($NorN_TOPSIS);
                        $min = min($NorN_TOPSIS);
                        array_push($idealP, $max);
                        array_push($idealN, $min);
                        break;
                }
            }


            $sPositif = array();
            $sNegatif = array();
            for ($i = 0; $i < 4; $i++) {
                switch ($i) {
                    case 0:
                        $pos = sqrt((($NorEBP_TOPSIS[0] - $idealP[0]) ** 2) + (($NorFK_TOPSIS[0] - $idealP[1]) ** 2) + (($NorGP_TOPSIS[0] - $idealP[2]) ** 2) + (($NorKD_TOPSIS[0] - $idealP[3]) ** 2) + (($NorSA_TOPSIS[0] - $idealP[4]) ** 2) + (($NorN_TOPSIS[0] - $idealP[5]) ** 2));

                        $neg = sqrt((($NorEBP_TOPSIS[0] - $idealN[0]) ** 2) + (($NorFK_TOPSIS[0] - $idealN[1]) ** 2) + (($NorGP_TOPSIS[0] - $idealN[2]) ** 2) + (($NorKD_TOPSIS[0] - $idealN[3]) ** 2) + (($NorSA_TOPSIS[0] - $idealN[4]) ** 2) + (($NorN_TOPSIS[0] - $idealN[5]) ** 2));

                        array_push($sPositif, $pos);
                        array_push($sNegatif, $neg);
                        break;

                    case 1:
                        $pos = sqrt((($NorEBP_TOPSIS[1] - $idealP[0]) ** 2) + (($NorFK_TOPSIS[1] - $idealP[1]) ** 2) + (($NorGP_TOPSIS[1] - $idealP[2]) ** 2) + (($NorKD_TOPSIS[1] - $idealP[3]) ** 2) + (($NorSA_TOPSIS[1] - $idealP[4]) ** 2) + (($NorN_TOPSIS[1] - $idealP[5]) ** 2));

                        $neg = sqrt((($NorEBP_TOPSIS[1] - $idealN[0]) ** 2) + (($NorFK_TOPSIS[1] - $idealN[1]) ** 2) + (($NorGP_TOPSIS[1] - $idealN[2]) ** 2) + (($NorKD_TOPSIS[1] - $idealN[3]) ** 2) + (($NorSA_TOPSIS[1] - $idealN[4]) ** 2) + (($NorN_TOPSIS[1] - $idealN[5]) ** 2));

                        array_push($sPositif, $pos);
                        array_push($sNegatif, $neg);
                        break;

                    case 2:
                        $pos = sqrt((($NorEBP_TOPSIS[2] - $idealP[0]) ** 2) + (($NorFK_TOPSIS[2] - $idealP[1]) ** 2) + (($NorGP_TOPSIS[2] - $idealP[2]) ** 2) + (($NorKD_TOPSIS[2] - $idealP[3]) ** 2) + (($NorSA_TOPSIS[2] - $idealP[4]) ** 2) + (($NorN_TOPSIS[2] - $idealP[5]) ** 2));

                        $neg = sqrt((($NorEBP_TOPSIS[2] - $idealN[0]) ** 2) + (($NorFK_TOPSIS[2] - $idealN[1]) ** 2) + (($NorGP_TOPSIS[2] - $idealN[2]) ** 2) + (($NorKD_TOPSIS[2] - $idealN[3]) ** 2) + (($NorSA_TOPSIS[2] - $idealN[4]) ** 2) + (($NorN_TOPSIS[2] - $idealN[5]) ** 2));

                        array_push($sPositif, $pos);
                        array_push($sNegatif, $neg);
                        break;

                    case 3:
                        $pos = sqrt((($NorEBP_TOPSIS[3] - $idealP[0]) ** 2) + (($NorFK_TOPSIS[3] - $idealP[1]) ** 2) + (($NorGP_TOPSIS[3] - $idealP[2]) ** 2) + (($NorKD_TOPSIS[3] - $idealP[3]) ** 2) + (($NorSA_TOPSIS[3] - $idealP[4]) ** 2) + (($NorN_TOPSIS[3] - $idealP[5]) ** 2));

                        $neg = sqrt((($NorEBP_TOPSIS[3] - $idealN[0]) ** 2) + (($NorFK_TOPSIS[3] - $idealN[1]) ** 2) + (($NorGP_TOPSIS[3] - $idealN[2]) ** 2) + (($NorKD_TOPSIS[3] - $idealN[3]) ** 2) + (($NorSA_TOPSIS[3] - $idealN[4]) ** 2) + (($NorN_TOPSIS[3] - $idealN[5]) ** 2));

                        array_push($sPositif, $pos);
                        array_push($sNegatif, $neg);
                        break;
                }
            }

            $rankingTOPSIS = array();
            for ($i = 0; $i < 4; $i++) {
                switch ($i) {
                    case 0:
                        $temp = $sNegatif[0] / ($sNegatif[0] + $sPositif[0]);
                        array_push($rankingTOPSIS, $temp);
                        break;
                    case 1:
                        $temp = $sNegatif[1] / ($sNegatif[1] + $sPositif[1]);
                        array_push($rankingTOPSIS, $temp);
                        break;
                    case 2:
                        $temp = $sNegatif[2] / ($sNegatif[2] + $sPositif[2]);
                        array_push($rankingTOPSIS, $temp);
                        break;
                    case 3:
                        $temp = $sNegatif[3] / ($sNegatif[3] + $sPositif[3]);
                        array_push($rankingTOPSIS, $temp);
                        break;
                }
            }

            $hasilSAW = [
                strval($rankingSAW[0])  => 'SC_SAW',
                strval($rankingSAW[1])  => 'RPL_SAW',
                strval($rankingSAW[2])  => 'JR_SAW',
                strval($rankingSAW[3])  => 'MM_SAW'
            ];

            $hasilTOPSIS = [
                strval($rankingTOPSIS[0]) => 'SC_TOPSIS',
                strval($rankingTOPSIS[1]) => 'RPL_TOPSIS',
                strval($rankingTOPSIS[2]) => 'JR_TOPSIS',
                strval($rankingTOPSIS[3]) => 'MM_TOPSIS'
            ];

            ksort($hasilSAW);
            ksort($hasilTOPSIS);

            $indexSAW = array_keys($hasilSAW);
            $lengthSAW = count($indexSAW);
            $indexTOPSIS = array_keys($hasilTOPSIS);
            $lengthTopsis = count($indexTOPSIS);
            // var_dump($indexSAW, $indexTOPSIS);
            switch ($hasilSAW[$indexSAW[$lengthSAW - 1]]) {
                case "SC_SAW":
                    $hasilKeputusanSAW = 'Sistem Cerdas';
                    break;
                case "RPL_SAW":
                    $hasilKeputusanSAW = 'Rekayasa Perangkat Lunak';
                    break;
                case "JR_SAW":
                    $hasilKeputusanSAW = 'Jaringan Komputer';
                    break;
                case "MM_SAW":
                    $hasilKeputusanSAW = 'Multimedia';
                    break;
            }

            switch ($hasilTOPSIS[$indexTOPSIS[$lengthTopsis - 1]]) {
                case "SC_TOPSIS":
                    $hasilKeputusanTOPSIS = 'Sistem Cerdas';
                    break;
                case "RPL_TOPSIS":
                    $hasilKeputusanTOPSIS = 'Rekayasa Perangkat Lunak';
                    break;
                case "JR_TOPSIS":
                    $hasilKeputusanTOPSIS = 'Jaringan Komputer';
                    break;
                case "MM_TOPSIS":
                    $hasilKeputusanTOPSIS = 'Multimedia';
                    break;
            }




            //echo ; die;

            $data = [
                'EBPS'  => $this->input->post('EBPS', true),
                'FKS'   => $this->input->post('FKS', true),
                'GPS'   => $this->input->post('GPS', true),
                'KDS'   => $this->input->post('KDS', true),
                'SAS'   => $this->input->post('SAS', true),
                'TATLS'   => $this->input->post('TATLS', true),
                'NPC'   => $this->input->post('NPC', true),
                'EBPR'  => $this->input->post('EBPR', true),
                'FKR'   => $this->input->post('FKR', true),
                'GPR'   => $this->input->post('GPR', true),
                'KDR'   => $this->input->post('KDR', true),
                'SAR'   => $this->input->post('SAR', true),
                'TATLR'   => $this->input->post('TATLR', true),
                'NPW'   => $this->input->post('NPW', true),
                'EBPJ'  => $this->input->post('EBPJ', true),
                'FKJ'   => $this->input->post('FKJ', true),
                'GPJ'   => $this->input->post('GPJ', true),
                'KDJ'   => $this->input->post('KDJ', true),
                'SAJ'   => $this->input->post('SAJ', true),
                'TATLJ'   => $this->input->post('TATLJ', true),
                'NJK'   => $this->input->post('NJK', true),
                'EBPM'  => $this->input->post('EBPM', true),
                'FKM'   => $this->input->post('FKM', true),
                'GPM'   => $this->input->post('GPM', true),
                'KDM'   => $this->input->post('KDM', true),
                'SAM'   => $this->input->post('SAM', true),
                'TATLM'   => $this->input->post('TATLM', true),
                'NML'   => $this->input->post('NML', true),
                'nama'  => $nama,
                'nim'   => $nim,
                'hasilSAW' => $hasilKeputusanSAW,
                'hasilTOPSIS' => $hasilKeputusanTOPSIS,
                'indexSAW' => $indexSAW[$lengthSAW - 1],
                'indexTOPSIS' => $indexTOPSIS[$lengthTopsis - 1],
            ];



            $this->load->view('result', $data);
        }
    }
}
