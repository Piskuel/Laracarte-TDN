@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a href="https://laramap.com">"laramap.com"</a></p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built and learn by @etsmo during learning purpose</strong>

                </p>
            </div>
        </div>
        <p>Feel free to help to improve <a href="http://#">the source code</a></p>
        <hr>

        <h2>What is laramap?</h2>
        <p>laramap is the website by which laracarte was inpired :)</p>
        <p>more info <a href="http://latamap.com/p/about">here</a></p>
        <hr>

        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection
