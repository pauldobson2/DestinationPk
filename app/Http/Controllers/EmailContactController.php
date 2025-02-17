<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Mailer\Exception\UnexpectedResponseException;

class EmailContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form fields
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'Please enter a message.',
        ]);

        // Prepare data for the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Create a new instance of the Mailable class
        $mail = new ContactFormMail($data);

        try {
            // Send the email
            Mail::to('hello@destinationpk.com')->send($mail);

            // Return success response
            return response()->json(['success' => 'Your email has been successfully sent! Our team will get in touch with you shortly.']);
        } catch (UnexpectedResponseException $e) {
            // Log the specific Symfony Mailer exception
            Log::error('UnexpectedResponseException while sending email: ' . $e->getMessage(), ['data' => $data]);

            // Return specific error response
            return response()->json(['error' => 'Sorry! There was an issue with the email service. Please try again later.'], 500);
        } catch (\Exception $e) {
            // Log the general exception
            Log::error('Exception caught while sending email: ' . $e->getMessage(), ['data' => $data]);

            // Return general error response
            return response()->json(['error' => 'Sorry! Something went wrong while sending your email. Please try again later.'], 500);
        }
    }
}
