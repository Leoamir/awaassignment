@extends('layouts.app')

@section('content')



<style>
    body{
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
    .row h3{
      text-align: center;
      margin-bottom: 5px;
      margin-top: 15px;
    }

  </style>

@section('content')
    <div class="row">
      <div class="col-2-below">

        <h3>Upload Your Post</h3>
        <hr class="below-line">
        <div class="container">

          <form action="submit" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Caption</label>
              <textarea class="form-control rounded-0" name="caption" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1"></label>
              <input type="file" class="form-control-file" name="photo" id="sdfsdf">
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
          </form>


        </div>
      </div>
    </div>















@endsection
