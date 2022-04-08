<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.index');
    }
    public function about() {
        return view('front.about');
    }
    public function approach() {
        return view('front.approach');
    }
    public function expertise() {
        return view('front.expertise');
    }
    public function clients() {
        return view('front.clients');
    }
    public function services() {
        return view('front.services');
    }
    public function servicesmarketing() {
        return view('front.servicesmarketing');
    }
    public function servicespr() {
        return view('front.servicespr');
    }
    public function servicesexperience() {
        return view('front.servicesexperience');
    }
    public function servicesbtl() {
        return view('front.servicesbtl');
    }
    public function servicesirm() {
        return view('front.servicesirm');
    }
    public function servicessocial() {
        return view('front.servicessocial');
    }
    public function servicescontent() {
        return view('front.servicescontent');
    }
    public function servicesbranding() {
        return view('front.servicesbranding');
    }
    public function team() {
        return view('front.team');
    }
    public function contact() {
        return view('front.contact');
    }
}
