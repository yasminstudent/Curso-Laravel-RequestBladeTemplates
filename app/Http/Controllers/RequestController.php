<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function understandingTheRequest1(Request $request){
        $url = $request->url(); //retorna a url
        $method = $request->method(); //retorna o método

        /*
         *  all -> pega todos os dados
         *  input -> prioriza o corpo da requisição, se não tiver pega da url
         *  query -> pega apenas da url
        */
        $data = $request->all();

        if(isset($data["name"])){
            $name = $data["name"];
            echo "Nome: ".$name." <br>";
        }

        $city = $request->query('city', 'São Paulo');
        echo "Cidade: ".$city." <br>";

        print_r($data);

        return view('form');
    }

    public function understandingTheRequest2(Request $request){
        //if($request->has('state')){ //verifica se o dado foi enviado
        //if($request->missing('state')){ //verifica se o dado não existe

        if($request->filled('state')){ //verifica se o dado foi preenchido
            echo "Tem estado";
        }
        else{
            echo "Não tem estado";
        }

        return view('formPost');
    }

    public function understandingTheRequest2Post(Request $request){
        $data = $request->only(['name', 'age']);
        $data2 = $request->except(['city']); //pega todos os dados exceto o city

        echo "Meu nome é: ".$data['name']."<br>";

        return view('formPost');
    }

    public function sendingDataToTheView(){
        $data = [
            "name" => "Yasmin",
            "age" => "19",
            "lista" => [
                "Farinha",
                "Ovo",
                "Leite",
                "Fermento"
            ],
            "lista2" => [
                ["nome" => "farinha", "qt" => "1kg"],
                ["nome" => "ovo", "qt" => "4"]
            ],
            "cont" => 0
        ];

        return view("admin-teste.test", $data);
    }

}
