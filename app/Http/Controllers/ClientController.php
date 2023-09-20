<?php

 /* namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;
use Validator;

class ClientController extends Controller
{
    public  function  inscription (Request $request){

        $clientData = $request->validate([

            "name" => ["required", "string", "min:2", "max:255"],
            "prenom" => ["required", "string", "min:2", "max:255"],
            "email" => ["required", "email", "unique:client,email"],
            "password" => ["required", "string", "min:8", "max:255","confirmed"]
        ]);

        $client = client::create([
            "name" => $clientData["name"],
            "prenom" => $clientData["prenom"],
            "adresse" => "adresse",
            "telephone" => "telephone",
            "email" => $clientData["email"],
            "tel" => "tel",
            "password" => bcrypt($clientData["password"])
        ]);

        return response($client, 201);
    }


    public function connexion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => ["required", "email"],
            "password" => ["required", "string", "min:8", "max:255"]
        ]);

        if($validator->fails()){
            return new JsonResponse( $validator->errors(), 401);
        }

        $clients = client::where('email', $request->email)->first();

        if (!$clients || !Hash::check($request->password, $clients->password)) {
            return new JsonResponse(["message" => "Invalid credentials"], 401);
        }

        $token = $clients->createToken("CLE_SECRETE")->plainTextToken;

        return new JsonResponse([
            "id" => $clients->id,
            "name" => $clients->name,
            "prenom" => $clients->prenom,
            "adresse" =>$clients->adresse,
            "telephone" =>$clients->telephone,
            "email" => $clients->email,
            "token" => $token
        ], 200);
    }



    /**
     * Display a listing of the resource.
     *
     * @return Response
     *
    public function store(Request $request)
    {
        $clients = client::all();
        return view('admins.index', ['admin' => $clients]);
    }

    public function edit($id)
    {
        $clients = client::find($id);
        return view('admin.form', ['admin' => $clients]);
    }

    public function index()
    {
        $clients = client::get();

        return view('admins.index', ['data' => $clients]);
    }

    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' =>$request->adresse,
            'telephone' =>$request->telephone,
            'password' => $request->password,
        ];


        client::create($data);

        return redirect()->route('admin');
    }

    public function update($id, Request $request)
    {
        $data = [
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse'=>$request->adresse,
            'password' => $request->password,
        ];

        client::find($id)->update($data);
        return redirect()->route('admin');
    }

    public function delete($id)
    {
        client::find($id)->delete();
        return redirect()->route('admin');
    }


    public function getAdminCount()
    {
        $AdminCount = client::count();
        return $AdminCount;
    }



}
*/
