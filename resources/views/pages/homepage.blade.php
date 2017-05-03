@extends('layout')
@section('app-page', 'homepage')

@section('content')
<about-section></about-section>
            <summary-section></summary-section>
            <contacts-section :email="{{ $email }}"></contacts-section>
            <skills-section></skills-section>
            <expertise-section></expertise-section>
            <footer-section></footer-section>
@endsection