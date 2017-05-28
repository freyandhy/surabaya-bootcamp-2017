<?php

namespace App\Controllers;

use App\Models\Student;

class ApiController extends Controller
{
    public function getAllMhs($req,$res)
    {
        $student = Student::all();
        return $res->withJson($student);
    }

    public function getLimitMhs($req,$res)
    {
        $limit = $req->getAttribute('limit');

        $student = Student::limit($limit)->get();
        return $res->withJson($student);
    }

    public function getMhsId($req,$res)
    {
        $id = $req->getAttribute('id');

        $student = Student::find($id);
        return $res->withJson($student);
    }    
}