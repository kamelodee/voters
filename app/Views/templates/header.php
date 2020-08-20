<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voters</title> 
   
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
</head>
<body class="container_">
<div class="">
<?php
      $uri = service('uri');
     ?>
<nav class="navbar navbar-expand-lg  p-3 navbar-light">
  <a class="navbar-brand brand" href="#">Voters</a>
  <button class="navbar-toggler toggle-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
            <a class="nav-link"  href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'polling-station' ? 'active' : null) ?>">
            <a class="nav-link" href="/polling-stations">Polling Station</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'users' ? 'active' : null) ?>">
            <a class="nav-link" href="/registered-users">Users</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'membertypes' ? 'active' : null) ?>">
            <a class="nav-link" href="/membertypes">Member Types</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a class="nav-link" href="/">Login</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>
        <?php endif; ?>
  </div>
</nav>