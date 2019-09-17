<h3>blogs page</h3>
@foreach($blogs as $blog)
   <h2>{{$blog->title}}</h2>
   <p>{{$blog->body}}</p> 
@endforeach