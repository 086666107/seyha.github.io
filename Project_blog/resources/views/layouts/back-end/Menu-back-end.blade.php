@section('title','Header')
@extends('layouts.back-end')
@section('content')


<div class="content-wrapper">
        <section class="content-header">
           <div class="col-sm-12">
                <h2>menu</h2>
                 @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>    
                    </div>
                @endif 
           </div>
        </section>


        <div class="box">
          <div class="content">
            <div class="col-sm-12">
              

              <form action="" method="">
                <div class="row">
                  <div class="col-sm-6">
                    <label>Menu name</label>
                    <input type="text" name="menu" class="form-control" placeholder="input meny">
                  </div>
                  </div>
                  
                  <div class="row">
                    <input type="submit" value="save" class="btn btn-primary">
                  </div>
              </form>

              <hr> 
              <h3>List All Data</h3>

              <table class="table">
                <thead>
                  <th>Id</th>
                  <th>Menu</th>
                  <th>url</th>
                  <th>Action</th>           
                </thead>
                <tr>
                  <td>01</td>
                  <td>home</td>
                  <td>home</td>
                  <td>Edit/Delete</td>
                </tr>

              </table>
            




            </div>
          </div>
          </div>





@endsection