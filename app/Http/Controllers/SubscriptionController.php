<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Subscription;
use App\Events\NewNotification;
use App\Http\Requests\SubscriptionRequest;

class SubscriptionController extends Controller
{
    public function add(SubscriptionRequest $request)
    {
    	$newSubscription = Subscription::create([
    		'email' => $request->email,
    	]);

    	$notification = Notification::create([
    		'type' 		=> 'New Subscription',
    		'message'	=> "{$newSubscription->email} subscribed " . $newSubscription->created_at->diffForHumans(),
    	]);

    	event( new NewNotification( $notification ) );

        return redirect('/')->with('message', "You've successfully subscribed");
    }
}
