<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>favicon.ico">

    <title>Psicometria Web</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>bootstrap-3.3.5-dist/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>bootstrap-3.3.5-dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style type="text/css">
  .bwizard-steps {
  display: inline-block;
  margin: 0; padding: 0;
  background: #fff }
  .bwizard-steps .active {
    color: #fff;
    background: #007ACC }
  .bwizard-steps .active:after {
    border-left-color: #007ACC }
  .bwizard-steps .active a {
    color: #fff;
    cursor: default }
  .bwizard-steps .label {
    position: relative;
    top: -1px;
    margin: 0 5px 0 0; padding: 1px 5px 2px }
  .bwizard-steps .active .label {
    background-color: #333;}
  .bwizard-steps li {
    display: inline-block; position: relative;
    margin-right: 5px;
    padding: 12px 17px 10px 30px;
    *display: inline;
    *padding-left: 17px;
    background: #efefef;
    line-height: 18px;
    list-style: none;
    zoom: 1; }
  .bwizard-steps li:first-child {
    padding-left: 12px;
    -moz-border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px; }
  .bwizard-steps li:first-child:before {
    border: none }
  .bwizard-steps li:last-child {
    margin-right: 0;
    -moz-border-radius: 0 4px 4px 0;
    -webkit-border-radius: 0 4px 4px 0;
    border-radius: 0 4px 4px 0; }
  .bwizard-steps li:last-child:after {
    border: none }
  .bwizard-steps li:before {
    position: absolute;
    left: 0; top: 0;
    height: 0; width: 0;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #fff;
    border-top: 20px inset transparent;
    content: "" }
  .bwizard-steps li:after {
    position: absolute;
    right: -20px; top: 0;
    height: 0; width: 0;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #efefef;
    border-top: 20px inset transparent;
    content: "";
    z-index: 2; }
  .bwizard-steps a {
    color: #333 }
  .bwizard-steps a:hover {
    text-decoration: none }
.bwizard-steps.clickable li:not(.active) {
  cursor: pointer }
.bwizard-steps.clickable li:hover:not(.active) {
  background: #ccc }
.bwizard-steps.clickable li:hover:not(.active):after {
  border-left-color: #ccc }
.bwizard-steps.clickable li:hover:not(.active) a {
  color: #08c }
@media (max-width: 480px) { 
  /* badges only on small screens */
  .bwizard-steps li:after,
  .bwizard-steps li:before {
    border: none }
  .bwizard-steps li,
  .bwizard-steps li.active,
  .bwizard-steps li:first-child,
  .bwizard-steps li:last-child {
    margin-right: 0;
    padding: 0;
    background-color: transparent }
}
</style>
  <body>