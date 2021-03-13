@extends('layout.app')
@section('title', 'halaman home')
@section('conten')
<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Selamat Datang di WEB ASAL</h1>
      <br>
    </div>
  </header>


        <!-- Title -->
        <h1 class="mt-4">Tugas Blade Template Engine</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Hadi Lazuardi Sufyan</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on maret 14, 2021 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

  
    <!-- Comments Form -->
    <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>


@stop



@section('js')
<script>
console.log("hello");

</script>
@stop