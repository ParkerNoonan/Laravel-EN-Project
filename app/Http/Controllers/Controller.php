<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Project;
use App\Valve;
use App\Site;
use App\today;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function About() {
    	return view('about');
    }

    public function Contact() {
        return view('/contact');
    }

    public function Data_input() {
    	return view('valve_sizing');
    }

    public function add_valve(Request $request) {
       $site_name = $request->input('sitename');
       if ($site_name == null) {
          $Vals = new Valve;
          $Test = $Vals->DB_Names();
          //dd($Test);
          if ($Test != null) {
            return view('add_valve', ['test' => $Test]);
          }
          else {
            return view('add_valve', ['test' => "Enter Site Name"]);
          }
        }
        else {
          $site = array("site"=>$site_name);
          return view('add_valve', ['test' => $site]);
        }
    }

    //Submit1 function adds the site informoation to the database
    public function Submit1(Request $request) {
        //Pass post parameters and assign them to variables
       $site_name = $request->input('sitename');
       $project_num = $request->input('EN_proj_num');
       $comm_num = $request->input('comm_wo_num');
       $const_num = $request->input('const_wo_num');
       $issuance = $request->input('issuance');
       $prep_by = $request->input('prepared_by');
       $review_by = $request->input('reviewed_by');
       $approve_by = $request->input('approved_by');
       $subDate = $request->input('date');
       $location = $request->input('location');
       $lat = $request->input('latitude');
       $long = $request->input('longitude');
       $section = $request->input('section');
       $township = $request->input('township');
       $range = $request->input('range');
       $division = $request->input('division');
       $county = $request->input('county');
       $sb1 = $request->input('scopeBullet1');
       $sb2 = $request->input('scopeBullet2');
       $sb3 = $request->input('scopeBullet3');
       $sb4 = $request->input('scopeBullet4');
       $sb5 = $request->input('scopeBullet5');

       //Create a new Project object
       $Proj = new Project;

       //Get all the post values and put them in object
       $Proj->get_sitename($site_name);
       $Proj->get_projNum($project_num);
       $Proj->get_commNum($comm_num);
       $Proj->get_constNum($const_num);
       $Proj->get_issuance($issuance);
       $Proj->get_prepBy($prep_by);
       $Proj->get_reviewBy($review_by);
       $Proj->get_approveBy($approve_by);
       $Proj->get_subDate($subDate);
       $Proj->get_location($location);
       $Proj->get_lat($lat);
       $Proj->get_long($long);
       $Proj->get_section($section);
       $Proj->get_township($township);
       $Proj->get_range($range);
       $Proj->get_division($division);
       $Proj->get_county($county);
       $Proj->get_scopeBullet1($sb1);
       $Proj->get_scopeBullet2($sb2);
       $Proj->get_scopeBullet3($sb3);
       $Proj->get_scopeBullet4($sb4);
       $Proj->get_scopeBullet5($sb5);

       //Take object and add all it's properties to the database
       $Proj->add_Site_info();

       //return view('add_valve', ['sitename' => $site_name]);
      $site = array("site"=>$site_name);
       return view('add_valve', ['test' => $site]);
    }

    public function Submit2(Request $request) {

        $Site_Name = $request->input('proj_site');
        $Valve_1_Size = $request->input('Valve_1_Size');
        $Valve_1_Man = $request->input('Valve_1_Man');
        $Valve_1_Model = $request->input('Valve_1_Model');
        $Valve_1_Serial = $request->input('Valve_1_Serial');
        $Valve_1_MDP = $request->input('Valve_1_MDP');
        $Valve_1_TR = $request->input('Valve_1_TR');
        $Valve_1_MWS = $request->input('Valve_1_MWS');
        $Valve_1_BAM = $request->input('Valve_1_BAM');
        $Valve_1_PLMAOP = $request->input('Valve_1_PLMAOP');
        $Valve_1_PLDP = $request->input('Valve_1_PLDP');
        $Valve_1_Pipe_Grade = $request->input('Valve_1_Pipe_Grade');
        $Valve_1_TS = $request->input('Valve_1_TS');

        $Valve = new Valve;

        $Valve->Site_name($Site_Name);
        $Valve->Valve_1_Size($Valve_1_Size);
        $Valve->Valve_1_Man($Valve_1_Man);
        $Valve->Valve_1_Model($Valve_1_Model);
        $Valve->Valve_1_Serial($Valve_1_Serial);
        $Valve->Valve_1_MDP($Valve_1_MDP);
        $Valve->Valve_1_TR($Valve_1_TR);
        $Valve->Valve_1_MWS($Valve_1_MWS);
        $Valve->Valve_1_BAM($Valve_1_BAM);
        $Valve->Valve_1_PLMAOP($Valve_1_PLMAOP);
        $Valve->Valve_1_PLDP($Valve_1_PLDP);
        $Valve->Valve_1_Pipe_Grade($Valve_1_Pipe_Grade);
        $Valve->Valve_1_TS($Valve_1_TS);

        $Valve->add_valve_info();
        //dd($game);
        return view('Valve_submitted', ['test' => $Site_Name]);
    }

    public function Submit3(Request $request) {
        $Proj = new Project;
        $test = $Proj->show_sites();
        return view('edit_site', ['test' => $test]);
    }

    public function Submit4(Request $request) {
        $test1 = $request->input('SiteName');
        $test2 = $request->input('ID');
        //$test3 = strval($test2);
        $Site = new Project;
        $Results = $Site->find_site($test2);
        return view('edit_proj', ['test' => $Results]);
    }

    public function Submit5(Request $request) {
       $ID = $request->input('ID');
       $site_name = $request->input('sitename');
       $project_num = $request->input('EN_proj_num');
       $comm_num = $request->input('comm_wo_num');
       $const_num = $request->input('const_wo_num');
       $issuance = $request->input('issuance');
       $prep_by = $request->input('prepared_by');
       $review_by = $request->input('reviewed_by');
       $approve_by = $request->input('approved_by');
       $subDate = $request->input('date');
       $location = $request->input('location');
       $lat = $request->input('latitude');
       $long = $request->input('longitude');
       $section = $request->input('section');
       $township = $request->input('township');
       $range = $request->input('range');
       $division = $request->input('division');
       $county = $request->input('county');
       $sb1 = $request->input('scopeBullet1');
       $sb2 = $request->input('scopeBullet2');
       $sb3 = $request->input('scopeBullet3');
       $sb4 = $request->input('scopeBullet4');
       $sb5 = $request->input('scopeBullet5');

      $Proj = new Project;

      $Updated = $Proj->updates($ID, $site_name, $project_num, $comm_num, $const_num, $issuance,
                                $prep_by, $review_by, $approve_by, $subDate, $location, $lat, $long,
                                $section, $township, $range, $division, $county, $sb1, $sb2, $sb3,
                                $sb4, $sb5);
      $test = $Proj->show_sites();
      return redirect()->action('Controller@Submit3');
    }

    public function Submit6(Request $request) {
        $ID = $request->input('ID');
        $Proj = new Project;
        $Proj->remove($ID);
        return redirect()->action('Controller@Submit3');
    }

    public function Submit7(Request $request) {
        $test1 = $request->input('SiteName');
        $test2 = $request->input('ID');
        $Site = new Project;
        $Results = $Site->find_site($test2);
        return view('view_site', ['test' => $Results]);
    }

    public function Submit8(Request $request) {
        $test1 = $request->input('SiteName');
        $test2 = $request->input('ID');
        $Proj = new Project;
        $Sites = $Proj->find_site($test2);
        $ProjV = new Valve;
        $Valves = $ProjV->find_Valves($test1);
        return view('Design_Basis_Manual', ['test' => $Sites,
                                            'valves' => $Valves]);
    }

    public function Submit9(Request $request) {
        $Valve = new Valve;
        $Valves = $Valve->all_valves();
        return view('edit_valve', ['test' => $Valves]);
    }

    public function Submit10(Request $request) {
        $ID = $request->input('ID');
        $Valve = new Valve;
        $Valve_return = $Valve->get_valve($ID);
        //dd($Valve_return);
        return view('change_valve', ['test' => $Valve_return]);
    }

    public function Submit11(Request $request) {
        $ID = $request->input('ID');
        $Valve = new Valve;
        $Valve->remove($ID);
        return redirect()->action('Controller@Submit9');
    }

    public function Submit12(Request $request) {
        $ID = $request->input('ID');
        $Valve = new Valve;
        $Valve_return = $Valve->get_valve($ID);
        return view('view_valve', ['test' => $Valve_return]);
    }

    //Submit13 will allow you to size the valve based on the pressures you put into the database
    public function Submit13(Request $request) {
      //Set initial conditions from request
      $valve_dia = $request->input('dia');
      $ansi_rating = $request->input('ansi');
      $op_pres = $request->input('op_pres');
      $id = $request->input('ID');

      //Check if a manufacturer is passed (it should be). If not, present a error screen.
      $man = $request->input('man');
        if ($man == null) {
          return view('Create');
        }
        
      $Valve  = new Valve;
      $test1 = $Valve->size_valve($valve_dia, $ansi_rating, $op_pres);

      $test2 = $Valve->get_valve($id);
      //dd($test2);
      return view('valve_size_return', ['area1' => $test1,
                                        'area2' => $test2]);
    }

    public function Submit14(Request $request) {

        $ID = $request->input('ID');
        $Site_Name = $request->input('proj_site');
        $Valve_1_Size = $request->input('Valve_1_Size');
        $Valve_1_Man = $request->input('Valve_1_Man');
        $Valve_1_Model = $request->input('Valve_1_Model');
        $Valve_1_Serial = $request->input('Valve_1_Serial');
        $Valve_1_MDP = $request->input('Valve_1_MDP');
        $Valve_1_TR = $request->input('Valve_1_TR');
        $Valve_1_MWS = $request->input('Valve_1_MWS');
        $Valve_1_BAM = $request->input('Valve_1_BAM');
        $Valve_1_PLMAOP = $request->input('Valve_1_PLMAOP');
        $Valve_1_PLDP = $request->input('Valve_1_PLDP');
        $Valve_1_Pipe_Grade = $request->input('Valve_1_Pipe_Grade');
        $Valve_1_TS = $request->input('Valve_1_TS');

        $Valve = new Valve;

        //$test = array($ID, $Site_Name, $Valve_1_Size, $Valve_1_Man, $Valve_1_Model, $Valve_1_Serial,
                      //$Valve_1_MDP, $Valve_1_TR, $Valve_1_MWS, $Valve_1_BAM, $Valve_1_PLMAOP,
                      //$Valve_1_PLDP, $Valve_1_Pipe_Grade, $Valve_1_TS);

        //dd($test);

        $Updated = $Valve->edit_valve($ID, $Site_Name, $Valve_1_Size, $Valve_1_Man, $Valve_1_Model,
                      $Valve_1_Serial, $Valve_1_MDP, $Valve_1_TR, $Valve_1_MWS, $Valve_1_BAM,
                      $Valve_1_PLMAOP, $Valve_1_PLDP, $Valve_1_Pipe_Grade, $Valve_1_TS);
        //dd($Updated);
        //$test = $Proj->show_sites();
        //return redirect()->action('Controller@Submit3');
                $Valves = $Valve->all_valves();
        return view('edit_valve', ['test' => $Valves]);
    }

    public function Submit15( ) {
       return view('Act_Data_Sheet');
    }

    public function Submit20( ) {
      $Project_test = new Project;
      $Valve_test = new Valve;
      $Project_test->set_inject($Valve_test);
      $Project_test->show("this is a test");
      $test = $Project_test->showVname();
      echo $test;
    }
}
