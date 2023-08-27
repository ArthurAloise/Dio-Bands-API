<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll(){

        $bands = $this->getBands();

        return response()->json($bands);
    }

    public function getById($id){

        $band = null;

        foreach($this->getBands() as $_band){
            if($_band['id'] == $id){
                $band = $_band;
            }
        }
        //Caso seja uma requisição que não exista, será mostrado "erro 404".
        return $band ? response()->json($band) : abort(404);
    }

    public function getByGender($gender){

        $band = [];

        foreach($this->getBands() as $_band){
            if($_band['gender'] == $gender){
                $band[] = $_band;
            }
        }
        //Caso seja uma requisição que não exista, será mostrado "erro 404".
        return $band ? response()->json($band) : abort(404);
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required|min:3'

        ]);
    }

    protected function getBands(){
        return [
            [
                'id' => 1, 'name' => 'dream teather', 'gender' => 'progressivo'
            ],
            [
                'id' => 2, 'name' => 'megadeth', 'gender' => 'trash metal'
            ],
            [
                'id' => 3, 'name' => 'djavu', 'gender' => 'forro'
            ],
            [
                'id' => 4, 'name' => 'metallica', 'gender' => 'heavy metal'
            ]
        ];
    }
}
