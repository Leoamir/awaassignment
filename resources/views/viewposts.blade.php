@extends('layouts.app')

@section('content')

<style>
    /* body{
      background-image: url("images/Mainbg.jpg");
      background-size: cover;
      background-attachment: fixed;
    }
    .row{
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      height: 600px;
      justify-content: space-around;

    }
    .col-2{
      flex-basis: 50%;
      min-width: 300px;
    }
    .col-2 img{
      max-width: 90%;
      padding: 50px 0;
      border-radius: 20px;
    }
    .col-2 h1{
      font-size: 50px;
      line-height: 60px;
      margin: 25px 0;
      text-align: center;
    }
    .col-2 p{
      text-align: center;
    }
    hr{
      background: #98FB98;
      height: 2px;
      border: none;
    }
    .col-2-below{
      border-radius: 5px;
      height:400px;
      width: 500px;
      margin: 5px;
      padding: 5px;
      box-shadow: 2px 2px 10px black;
    }
    .col-2-below h2{
      text-align: center;
    }


    .below-line{
      background: gray;
      height: 1 px;
      border: none;
      margin: 20px;
    }


    .row h1{
      text-align: center;
    }
    */
    h3{
      text-align: center;
      margin-bottom: 5px;
      margin-top: 15px;
    }
    tr th{
      text-align: center;
    }

  </style>

@section('content')
<div class="container">


    <div class="row">
      <div class="col-2-below">

        <h3>Your All Posts</h3>

        <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User ID</th>
          <th scope="col">Caption</th>
          <th scope="col">content</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach($posts  as $posts)
        <tr>
          <td>{{$posts->id}}</td>
          <td>{{$posts->user_id}}</td>
          <td>{{$posts->title}}</td>
          <td>{{$posts->content}}</td>
          <td> <a href="http://localhost/awaassignment/public/update/{{$posts->id}}" >Update</a></td>
          <td> <a href="{{url('')}}/click_delete/{{$posts->id}}" >Delete</a></td>
        </tr>
          @endforeach
      </tbody>
    </table>


        </div>
      </div>
    </div>
</div>















@endsection
