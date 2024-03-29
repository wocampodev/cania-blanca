<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator, Mail;
use App\Mail\EmailQueryCompany;
use App\Mail\EmailQueryClient;
use DB;

class SolicitudeController extends Controller
{
    public function new_contact(Request $request)
    {
        // return $request;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company = $request->company;
        $message = $request->message;

        $input = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ];
        $rules = [
            'name' => 'required|max:80',
            'email' => 'email|max:80',
            'phone' => 'required|digits_between:9,14',
            'message' => 'required|max:300',
        ];

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            $response = ['status' => 'fail-validate', 'errors' => $validation->errors()];
            return $response;
        } else {
            //$data_company = Company::data_company();
            //$email_company = $data_company->email;
            //$email_company = 'fearless347@gmail.com';
             $email_company = 'canablanca.fino.destilado@gmail.com';
//            $email_company = 'jorgealvarobarreravasquez@gmail.com';

            $client['name'] = $name;
            $client['email'] = $email;
            $client['phone'] = $phone;
            $client['company'] = $company;
            $client['description'] = $message;

            try {
                DB::beginTransaction();
                // $new_solicitude = new Solicitude();
                // $new_solicitude->name = $name;
                // $new_solicitude->email = $email;
                // $new_solicitude->message = $message;
                // $new_solicitude->phone = $phone;
                // $new_solicitude->save();

                $details = ['name' => $name, 'email' => $email, 'msg' => $message, 'phone' => $phone];
                $confirm_solicitude = new EmailQueryCompany($client);
//                dd($confirm_solicitude);
                Mail::to($email_company)->send($confirm_solicitude);

                $confirm_client = new EmailQueryClient($client);
                Mail::to($email)->send($confirm_client);
                $response = ['status' => 'success'];

                // DB::commit();
            } catch (\Exception $e) {
                dd($e);
                Log::error("Error email: " . $e);
                Log::error("Error email: " . $e->getMessage());
                // DB::rollback();
                $response = ['status' => 'fail-send'];
            }
            return $response;
        }
    }
}
