@extends('layout')
@section('app-page', 'homepage')

@section('content')
<section class="bg-shadow text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-heading">Header</h1>
                            <h2 class="smaller">Emergency WEB Developer</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3>Summary:</h3>
                            <p>Working as a Freelancer for the last 6 years. Since 2012 helped lots of projects and solved hundreds of web application problems. Good at creating and simplifying complex algorithms, performing urgent fixes, setting various automation processes and reading someone's else code. <br/>
                            Top priorities: <span class="my-bold">quality and liability.</span></p>
                            <p>Looking forward for new challenges and opportunities.</p>
                        </div>
                    </div>
                </div>
            </section>
            <contacts-section :email="{{ $email }}"></contacts-section>
            <skills-section></skills-section>
            <section class="mt-20px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center expertise small">
                            <p>
                                Remote work | Custom PHP solutions | Performance upgrade | Urgent website fixes | Website maintenance | Third party integrations | Payment integration | Responsive websites | PHP Frameworks | Onsite SEO | WordPress | Linux
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <footer-section></footer-section>
@endsection