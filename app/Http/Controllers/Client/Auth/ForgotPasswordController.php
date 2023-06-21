<?php

namespace App\Http\Controllers\Client\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    public function forgotPassword(){
        return view('auth_custom.auth.forgot');

    }
    public function sendResetLinkEmail(Request $request)
    {
       

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }
    public function broker()
    {
        return Password::broker('accounts');
    }
}
