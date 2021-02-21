<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    //This model will save Project_Site information to a database table called "Project_Sites" (default Laravel)
    public $site_name;
    public $project_num;
    public $comm_num;
    public $const_num;
    public $issuance;
    public $prep_by;
    public $review_by;
    public $approve_by;
    public $subDate;
    public $location;
    public $lat;
    public $long;
    public $section;
    public $township;
    public $range;
    public $division;
    public $county;
    public $sb1;
    public $sb2;
    public $sb3;
    public $sb4;
    public $sb5;
    public $par1;
    public $par2;
    public $result;
    public $test;
    public $Valve;
    public $name;

    public function get_sitename($site_name) {

        $this->site_name = $site_name;

    }
    public function get_projNum($project_num) {

        $this->project_num = $project_num;

    }
    public function get_commNum($comm_num) {

        $this->comm_num = $comm_num;

    }
    public function get_constNum($const_num) {

        $this->const_num = $const_num;

    }
    public function get_issuance($issuance) {

        $this->issuance = $issuance;

    }
    public function get_prepBy($prep_by) {

        $this->prep_by = $prep_by;

    }
    public function get_reviewBy($review_by) {

        $this->review_by = $review_by;

    }
    public function get_approveBy($approve_by) {

        $this->approve_by = $approve_by;

    }
    public function get_subDate($subDate) {

        $this->submittal_date = $subDate;

    }
    public function get_location($location) {

        $this->location = $location;

    }
    public function get_lat($lat) {

        $this->latitude = $lat;

    }
    public function get_long($long) {

        $this->longitude = $long;

    }
    public function get_section($section) {

        $this->section = $section;

    }
    public function get_township($township) {

        $this->township = $township;

    }
    public function get_range($range) {

        $this->range = $range;

    }    
    public function get_division($division) {

        $this->division = $division;

    }
    public function get_county($county) {

        $this->county = $county;

    }
    public function get_scopeBullet1($sb1) {

        $this->scopeBullet1 = $sb1;

    }
    public function get_scopeBullet2($sb2) {

        $this->scopeBullet2 = $sb2;

    }
    public function get_scopeBullet3($sb3) {

        $this->scopeBullet3 = $sb3;

    }
    public function get_scopeBullet4($sb4) {

        $this->scopeBullet4 = $sb4;

    }
    public function get_scopeBullet5($sb5) {

        $this->scopeBullet5 = $sb5;

    }

    public function set_inject(Valve $valve) {

        $this->Valve = $valve;
    }

    public function show($test) {
        if ($test == "this is a test") {
            $this->Valve->Site_name = $test;
        }
        else $this->Valve->Site_name = "are you joking?";

    }
    public function showVname() {
        $name = $this->Valve->Site_name;
        return $name;
    }

    //The function below create, read, update, and
    // delete entries from the database 
    public function show_sites() {

        $users = DB::table('Project_sites')->orderby('subDate', 'desc')->paginate(10);
        //$users = Project_site::paginate();
        return $users;
    }

    public function add_Site_info() {

        DB::table('Project_sites')->insert(
            ['SiteName' => $this->site_name,
             'ProjectNum' => $this->project_num,
             'CommNum' => $this->comm_num,
             'ConstNum' => $this->const_num,
             'Issuance' => $this->issuance,
             'PrepBy' => $this->prep_by,
             'ReviewBy' => $this->review_by,
             'ApproveBy' => $this->approve_by,
             'subDate' => $this->submittal_date,
             'location' => $this->location,
             'latitude' => $this->latitude,
             'longitude' => $this->longitude,
             'section' => $this->section,
             'township' => $this->township,
             'Range_' => $this->range,
             'division' => $this->division,
             'county' => $this->county,
             'scopeBullet1' => $this->scopeBullet1,
             'scopeBullet2' => $this->scopeBullet2,
             'scopeBullet3' => $this->scopeBullet3,
             'scopeBullet4' => $this->scopeBullet4,
             'scopeBullet5' => $this->scopeBullet5]
        );
    }

    public function find_site($par1) {
        $this->ID = $par1;
        $result = DB::table('Project_sites')->where('ID', '=', $this->ID)->get();
        //dd($result);
        return $result;
    }

    public function updates($ID, $SN, $PN, $CommN, $ConstN, $Is, $PB, $RB, $AB, $SubD, $loc, $lat, 
                             $long, $sect, $town, $range, $div, $county, $sb1, $sb2, $sb3, $sb4, $sb5) {
        $this->ID = $ID;
        $this->site_name = $SN;
        $this->project_num = $PN;
        $this->comm_num = $CommN;
        $this->const_num = $ConstN;
        $this->issuance = $Is;
        $this->prep_by = $PB;
        $this->review_by = $RB;
        $this->approve_by = $AB;
        $this->submittal_date = $SubD;
        $this->location = $loc;
        $this->latitude = $lat;
        $this->longitude = $long;
        $this->section = $sect;
        $this->township = $town;
        $this->range = $range;
        $this->division = $div;
        $this->county = $county;
        $this->scopeBullet1 = $sb1;
        $this->scopeBullet2 = $sb2;
        $this->scopeBullet3 = $sb3;
        $this->scopeBullet4 = $sb4;
        $this->scopeBullet5 = $sb5;

        $result = DB::table('Project_sites')
                            ->where('ID', $this->ID)
                            ->update(['SiteName' => $this->site_name,
                                    'ProjectNum' => $this->project_num,
                                    'CommNum' => $this->comm_num,
                                    'ConstNum' => $this->const_num,
                                    'Issuance' => $this->issuance,
                                    'PrepBy' => $this->prep_by,
                                    'ReviewBy' => $this->review_by,
                                    'ApproveBy' => $this->approve_by,
                                    'subDate' => $this->submittal_date,
                                    'location' => $this->location,
                                    'latitude' => $this->latitude,
                                    'longitude' => $this->longitude,
                                    'section' => $this->section,
                                    'township' => $this->township,
                                    'Range_' => $this->range,
                                    'division' => $this->division,
                                    'county' => $this->county,
                                    'scopeBullet1' => $this->scopeBullet1,
                                    'scopeBullet2' => $this->scopeBullet2,
                                    'scopeBullet3' => $this->scopeBullet3,
                                    'scopeBullet4' => $this->scopeBullet4,
                                    'scopeBullet5' => $this->scopeBullet5]); 
        return $result; 
    }

    public function remove($ID) {
        $this->ID = $ID;
        $result = DB::table('Project_sites')->where('ID', $this->ID)->delete();
    }

}
