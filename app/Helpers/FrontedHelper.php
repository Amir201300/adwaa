<?php

function gePageSection($title){
    return '<div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="/">الرئيسية</a></li>
                    <li class="active">'.$title.'</li>
                </ol>
                <h1 class="page-title">'.$title.'</h1>
            </div>
        </div>
    </div>';
}