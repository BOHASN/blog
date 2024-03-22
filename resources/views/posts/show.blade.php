@extends('layouts.app')

@section('show')
    

        <div class="card">
            <div class="card-header">
              Post Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Title: {{$post['title']}}</h5>
              <p class="card-text">Description: {{$post['description']}}</p>
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-header">
              Post Creator Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Name:</h5>
              <p class="card-text">Email:</p>
              <p class="card-text">Created At:</p>
            </div>
          </div>
    </div>

    
    @endsection