<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- page-content  -->
<main class="page-content">
        <header>
                <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #252627;">
                        <a  class="navbar-brand" href="#">
                            <span id="toggle-sidebar"><span class="fa fa-bars"></span> <?php echo APP_SRT_NAME;?></span>

                        </a>
                        <button style="background-color: #ffffff !important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">
                                  <span class="fa fa-tachometer-alt"></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><span class="fa fa-comments"></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><span id="pin-sidebar"><i class="fas fa-thumbtack"></i></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><span class="fa fa-sign-out-alt"></span></a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                      <nav aria-label="breadcrumb" style="border-top: 1px solid #6c757d;">
                            <ol class="breadcrumb rounded-0" style="background-color: #252627 !important;">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                          </nav>
        </header>
    <div id="overlay" class="overlay"></div>
