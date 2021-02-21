<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Valve extends Model
{
    //
    public $Site_name;
    public $Valve_1_Size;
    public $Valve_1_Man;
    public $Valve_1_Model;
    public $Valve_1_Serial;
    public $Valve_1_MDP;
    public $Valve_1_TR;
    public $Valve_1_MWS;
    public $Valve_1_BAM;
    public $Valve_1_PLMAOP;
    public $Valve_1_PLDP;
    public $Valve_1_Pipe_Grade;
    public $Valve_1_TS;
    public $DB_Names;
    public $Valve_1_Ansi;
    private $Valve_T_NS;
    private $Valve_T_S;
    private $Valve_T_Mast;
    private $Valve_RT_NS;
    private $Valve_R_S;

    //Setter methods for the database enties
    public function Site_name($Site_name) {

        $this->Site_name = $Site_name;

    }
    public function Valve_1_Size($Valve_1_Size) {

        $this->valve1size = $Valve_1_Size;

    }
    public function Valve_1_Man($Valve_1_Man) {

        $this->valve1man = $Valve_1_Man;

    }
    public function Valve_1_Model($Valve_1_Model) {

        $this->valve1model = $Valve_1_Model;

    }
    public function Valve_1_Serial($Valve_1_Serial) {

        $this->valve1serial = $Valve_1_Serial;

    }
    public function Valve_1_MDP($Valve_1_MDP) {

        $this->valve1mdp = $Valve_1_MDP;
    }
    public function Valve_1_TR($Valve_1_TR) {

        $this->valve1tr = $Valve_1_TR;

    }
    public function Valve_1_MWS($Valve_1_MWS) {

        $this->valve1mws = $Valve_1_MWS;

    }
    public function Valve_1_BAM($Valve_1_BAM) {

        $this->valve1bam = $Valve_1_BAM;

    }
    public function Valve_1_PLMAOP($Valve_1_PLMAOP) {

        $this->valve1plmaop = $Valve_1_PLMAOP;

    }
    public function Valve_1_PLDP($Valve_1_PLDP) {

        $this->valve1pldp = $Valve_1_PLDP;

    }
    public function Valve_1_Pipe_Grade($Valve_1_Pipe_Grade) {

        $this->valve1pipegrade = $Valve_1_Pipe_Grade;

    }
    public function Valve_1_TS($Valve_1_TS) {

        $this->valve1ts = $Valve_1_TS;

    }

    //Valve methods
    public function add_valve_info() {
        DB::table('Valves')->insert(
            ['SiteName' => $this->Site_name,
             'Valve_1_Size' => $this->valve1size,
             'Valve_1_Man' => $this->valve1man,
             'Valve_1_Serial' => $this->valve1serial,
             'Valve_1_MDP' => $this->valve1mdp,
             'Valve_1_TR' => $this->valve1tr,
             'Valve_1_MWS' => $this->valve1mws,
             'Valve_1_BAM' => $this->valve1bam,
             'Valve_1_PLMAOP' => $this->valve1plmaop,
             'Valve_1_PLDP' => $this->valve1pldp,
             'Valve_1_Pipe_Grade' => $this->valve1pipegrade,
             'Valve_1_TS' => $this->valve1ts]
        );
    }

    public function all_valves() {
        $Valves = DB::table('Valves')->paginate(10);
        return $Valves;
    }

    public function DB_Names() {
        $DB_Names = DB::table('Project_sites')->distinct()->pluck('SiteName');
        //dd($DB_Names);
        return($DB_Names);
    }

    public function find_Valves($Site_name) {
        $this->Site_name = $Site_name;
        $DB_Valves = DB::table('Valves')->where('SiteName', $this->Site_name)->get();
        return($DB_Valves);
    }

    public function get_valve($ID) {
        $this->ID = $ID;
        $result = DB::table('Valves')->where('ID', '=', $this->ID)->get();
        return $result;
    }

    public function remove($ID) {
        $this->ID = $ID;
        $result = DB::table('Valves')->where('ID', $this->ID)->delete();
    }

    public function edit_valve($ID, $Site_Name, $Valve_1_Size, $Valve_1_Man, $Valve_1_Model,
                      $Valve_1_Serial, $Valve_1_MDP, $Valve_1_TR, $Valve_1_MWS, $Valve_1_BAM,
                      $Valve_1_PLMAOP, $Valve_1_PLDP, $Valve_1_Pipe_Grade, $Valve_1_TS) {
        $this->ID = $ID;
        $this->Site_name = $Site_Name;
        $this->Valve_1_Size = $Valve_1_Size;
        $this->Valve_1_Man = $Valve_1_Man;
        $this->Valve_1_Model = $Valve_1_Model;
        $this->Valve_1_Serial = $Valve_1_Serial;
        $this->Valve_1_MDP = $Valve_1_MDP;
        $this->Valve_1_TR = $Valve_1_TR;
        $this->Valve_1_MWS = $Valve_1_MWS;
        $this->Valve_1_BAM = $Valve_1_BAM;
        $this->Valve_1_PLMAOP = $Valve_1_PLMAOP;
        $this->Valve_1_PLDP = $Valve_1_PLDP;
        $this->Valve_1_Pipe_Grade = $Valve_1_Pipe_Grade;
        $this->Valve_1_TS = $Valve_1_TS;

        $result = DB::table('Valves')
                            ->where('ID', $this->ID)
                            ->update(['SiteName' => $this->Site_name,
                                      'Valve_1_Size' => $this->Valve_1_Size,
                                      'Valve_1_Man' => $this->Valve_1_Man,
                                      'Valve_1_Serial' => $this->Valve_1_Serial,
                                      'Valve_1_MDP' => $this->Valve_1_MDP,
                                      'Valve_1_TR' => $this->Valve_1_TR,
                                      'Valve_1_MWS' => $this->Valve_1_MWS,
                                      'Valve_1_BAM' => $this->Valve_1_BAM,
                                      'Valve_1_PLMAOP' => $this->Valve_1_PLMAOP,
                                      'Valve_1_PLDP' => $this->Valve_1_PLDP,
                                      'Valve_1_Pipe_Grade' => $this->Valve_1_Pipe_Grade,
                                      'Valve_1_TS' => $this->Valve_1_TS]); 
        return $result; 
    }

    public function size_valve($dia, $ansi, $op_pres) {
        $this->Valve_1_Size = $dia;
        $this->Valve_1_Ansi = $ansi;
        $this->Valve_1_MDP = $op_pres;

        //Case for 2" valve, ANSI 150, 300, or 600 valve break torque value
        if ($this->Valve_1_Size == 2 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 540 + 0.4 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 1054) {
                $this->Valve_T_NS = 1054;
              }
        }
        //Case for 3" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 3 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 1188 + 0.71 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 1566) {
                $this->Valve_T_NS = 1566;
              }
        }

        //Case for 4" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 4 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 1328 + 1.09 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 2702) {
                $this->Valve_T_NS = 2702;
              }
        }

        //Case for 6" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 6 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 4823 + 1.47 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 5423) {
                $this->Valve_T_NS = 5423;
              }
        }

        //Case for 8" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 8 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 6010 + 6.86 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 7216) {
                $this->Valve_T_NS = 7216;
              }
        }

        //Case for 10" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 10 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 7581 + 10.12 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 11440) {
                $this->Valve_T_NS = 11440;
              }
        }

       //Case for 12" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 12 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 13300 + 12.3 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 13300) {
                $this->Valve_T_NS = 13300;
              }
        }

       //Case for 14" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 14 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 15700 + 17.5 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 15700) {
                $this->Valve_T_NS = 15700;
              }
        }

       //Case for 16" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 16 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 18000 + 24.2 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 18000) {
                $this->Valve_T_NS = 18000;
              }
        }

       //Case for 18" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 18 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 22000 + 34.7 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 22000) {
                $this->Valve_T_NS = 22000;
              }
        }

       //Case for 20" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 20 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 25000 + 48.0 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 25000) {
                $this->Valve_T_NS = 25000;
              }
        }

       //Case for 22" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 22 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 29000 + 60.0 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 29000) {
                $this->Valve_T_NS = 29000;
              }
        }    

        //Case for 24" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 24 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 35000 + 74.0 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 35000) {
                $this->Valve_T_NS = 35000;
              }
        }

        //Case for 26" valve, ANSI 150, 300, or 600 valve break torque value
        elseif ($this->Valve_1_Size == 26 && ($this->Valve_1_Ansi == 150 || $this->Valve_1_Ansi == 300 || $this->Valve_1_Ansi == 600)) {
            $this->Valve_T_NS = 41000 + 90.0 * $this->Valve_1_MDP;
              if ($this->Valve_T_NS < 41000) {
                $this->Valve_T_NS = 41000;
              }
        }

        //Calculate the break torque multiplied by the safety factor that is passed in.
        $this->Valve_T_S = $this->Valve_T_NS * 1.5;

        //Get Spec from database
        if ($this->Valve_1_Ansi == 150) {
            $Valve_Spec = DB::table('Valve_150_specs')->where('Valve_Dia', $this->Valve_1_Size)->get();
        }

        //From Valve spec, get the maximum allowable stem torque.
        $this->Valve_T_Mast = $Valve_Spec->get(0)->MAST;

        //From Valve spec, get the run torque value (not safety factor)
        $this->Valve_RT_NS = $Valve_Spec->get(0)->Run_Torque;

        //Calculate the run torque multiplied by the safety factor that is passed in.
        $this->Valve_RT_S = $this->Valve_RT_NS * 1.5;

        //Return the Valve break torque (with and without the safety factor)
        //Return the Valve run torque (with and without the safety factor)
        //Return the maximum allowable stem torque for the valve.
        return(['1' => $this->Valve_T_NS, '2' => $this->Valve_T_S, '3' => $this->Valve_T_Mast, '4' => $this->Valve_RT_NS, '5' => $this->Valve_RT_S]);
    }
}
