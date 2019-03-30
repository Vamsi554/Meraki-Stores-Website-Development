<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSubscriptionModel;

class UserSubscriptionController extends Controller
{
    public function store(Request $request) {

        if (!($request->emailAddress)) {
            return response()->json(['message' => 'Please Enter Your Email Address!']);
        }

        if (!(filter_var($request->emailAddress, FILTER_VALIDATE_EMAIL))) {
            return response()->json(['message' => 'Please Provide Valid Email Address!']);
        }

        $userSubscription = new UserSubscriptionModel();
        $userSubscription->user_email = $request->emailAddress;
        $userSubscription->save();
        return response()->json(['message' => 'Thank You! You\'ve been subscribed to our NewsLetter!']);
    }
}
