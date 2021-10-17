@extends('layouts.main')

@section('container')
    <h1>Kemala Adinda | Resume</h1>
    <hr />

    <a href="/file/CV.pdf" class="btn btn-outline-warning mt-3" download>Download CV</a>

    <div class="row mt-5">
        <div class="text">
            <div class="icon" style="float: left; margin-right: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <h4>Executive Summary</h4>
            <p>Experienced as general chairman in an organization in high school. Currently, I am a student from Universitas Negeri Surabaya with a concentration majoring in Information Technology Education. Have an interest in technology and able to use programming languages.</p>
        </div>
        <hr />
        <div class="text">
            <div class="icon" style="float: left; margin-right: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                </svg>
            </div>
            <div class="article" style="float: left">
            <h4>Specialization</h4>
            <p> - Public Speaking<br>
                - Microsoft Office<br>
                - Premier Pro<br>
                - Adobe Photoshop<br>
                - Programming Languanges</p>
            </div>
        </div>
        <hr />
        <div class="text">
            <div class="icon" style="float: left; margin-right: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </div>
            <div class="article" style="float: left">
            <h4>Experience</h4>
            <p style="font-weight:bold">Staff of Digital Creator Division</p>
            <p>Event of Bedah Kampus 2k21 | 2021</p>
            <p> - Make the required design<br>
                - Operate social media<br>
                - Documentation during the event</p>
            <p style="font-weight:bold">Team leader of network development project for the company</p>
            <p>Subject: Computer Networking, Faculty of Engineering,UNESA</p>
            <p> - Coordinate tasks for each team member<br>
                - Create an outline of the project carried out</p>
            </div>
        </div>
        <hr />
        <div class="text">
            <div class="icon" style="float: left; margin-right: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
            </div>
            <div class="article" style="float: left">
            <h4>Education Highlights</h4>
            <p style="font-weight:bold">Surabaya State University</p>
            <p>Informatics - Information Technology Education | 2019-Now</p>
            <p style="font-weight:bold">SMAN 2 Nganjuk</p>
            <p>Sciences | 2016 - 2019 <br>
                - Chairman of the Journalism Club <br>
                - Member of the School Yearbook Committee<br>
                - City-level Photography Favorite Champion<br></p>
            </div>
        </div>
        <hr />
        <div class="text">
            <div class="icon" style="float: left; margin-right: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                </svg>
            </div>
            <div class="article" style="float: left">
            <h4>Language Spoken</h4>
            <p> - Indonesian (Native)<br>
                - English (Advance)</p>
            </div>
        </div>
    <hr />
    </div>
@endsection
