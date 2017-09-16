@extends('emails.layouts.master')

@section('title')
  Welcome to iConstruct Project Monitoring System
@stop

@section('content') 
iConstuct

  <br><br>
  <a style="text-decoration: none; background-color: #74cd9e;color: #fff;border-radius: 4px;display: inline-block;
  padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: 400;line-height:1.42857143;text-align: center;
  white-space: nowrap;" target="_blank" href="{{ $project_url }}">Go To Project Home</a>
@stop
