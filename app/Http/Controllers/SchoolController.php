<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function fillSchool() {
        $school = new School();
        $uuid = (string)Str::uuid();
        $school->fill([
            'uuid' =>  $uuid,
            'name' => 'COACHTECH',
            ]) ;
        $school->save();
    }
    public function createSchool() {
        $uuid = (string)Str::uuid();
        School::create([
            'uuid' =>  $uuid,
            'name' => 'COACHTECH-Pro',
        ]);
    }
    public function insertSchool() {
        $school = new School();
        $uuid = (string)Str::uuid();
        $school::insert([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'COACHTECH-Lab',
        ]);
    }
}
