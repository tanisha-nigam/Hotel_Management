
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <h1 class="heading">ALL BOOKINGS</h1>
</div>
<div class="card-body">


<table class="table">
<thead>
<tr>
<th><h1>NAME</h1></th>
<th><h1>EMAIL</h1></th>
<th><h1>NUMBER</h1></th>
<th><h1>DESTINATION</h1></th>
<th><h1>HOTEL</h1></th>
<th><h1>ROOM</h1></th>
<th><h1>MEALS</h1></th>
<th><h1>ACTIONS</h1></th>
</tr>
</thead>

<tbody>
   @foreach($posts as $post)
   <tr>
       <td>{{$post->name}}</td>
       <td>{{$post->email}}</td> 
       <td>{{$post->number}}</td> 
       <td>{{$post->destination}}</td> 
       <td>{{$post->hotel}}</td> 
       <td>{{$post->room}}</td> 
       <td>{{$post->meals}}</td> 
       <td>{{$post->message}}</td>
       <td>
           <a href="/posts/{{$post->id}}" class="btn btn-success"> VIEW </a> 
           <a href="/edit-post/{{$post->id}}" class="btn btn-info"> EDIT </a> 
           <a href="/delete-post/{{$post->id}}" class="btn btn-danger"> DELETE </a> 
       </td>
    </tr>
    @endforeach

</tbody>
</table>

</div>

</div>

</div>

</div>
</div>

</section>


</body>
</html>