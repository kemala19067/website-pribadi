@extends('layouts.main')

@section('container')
    <header style="text-align: center">
        <h1 class="text mb-3"> Welcome!<br>My Personal Blog</h1>
        <img src="img/foto.jpg" width="250" height="250" style="border-radius: 50%;"/>
        <h1 class="text mt-3">Kemala Adinda Salwa</h1>
        <p>Student majoring in informatics engineering Surabaya State University</p>
        <p>19050974067 | Pendidikan Teknologi Informasi 2019 B</p>
    </header>

    <hr />

    <div class="text mt-3 mb-3" style="text-align: center">
        <h5>Welcome to My Personal Blog Kemala Adinda Salwa</h5>
        <p>The simple website to know about me like my experience, skill, and projects</p>
    </div>

    <hr />

  <div class="container marketing" style="padding: 50px">
    <div class="row" style="text-align: center">
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
            </svg>
            <h2 style="padding: 5px">Resume</h2>
          <p>Short introduction about my personal data</p>
          <p><a class="btn btn-warning" href="/resume">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
            </svg>
          <h2 style="padding: 5px">Projects</h2>
          <p>There are many projects that I have done</p>
          <p><a class="btn btn-warning" href="/projects">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
            </svg>
          <h2 style="padding: 5px">Contact</h2>
          <p>Contact me from my social media</p>
          <p><a class="btn btn-warning" href="/contact">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

@endsection

