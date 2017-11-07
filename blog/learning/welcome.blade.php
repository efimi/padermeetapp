<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Es gibt nur probleme wenn php nicht verwendet wird sonderen shorthand = -->
    <!-- <h1>Hello <?php $name; ?> </h1> -->

    <ul>
      <!--  so wäre es in php - -->
      <!--  warum bräuchte man ein <=? ?>, das würde mit normalem php sonst nicht funktionieren-->

      @foreach ($tasks as $task)


        <li>{{ $task->body }}</li>

       @endforeach
       
    </ul>


  </body>
</html>
