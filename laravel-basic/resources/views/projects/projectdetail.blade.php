<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
   @vite('resources/css/app.css') 

</head>
<body>
  <div class="flex flex-col text-5xl items-center space-y-8 justify-center min-h-screen bg-gray-900">

  <div class="w-[80dvw] flex justify-start">

    <a href="/projects" class="text-2xl font-bold bg-red-200 p-2 rounded-lg cursor-pointer text-red-500">Back</a>
  </div>

    <h1 class="text-4xl font-bold bg-gray-200 p-8 rounded-3xl text-blue-500">Project Details</h1>
  
    <h1 class="text-5xl font-bold bg-gray-200 p-8 rounded-3xl text-blue-500">
      Project: {{$project['name']}}  It has a Score of {{$project['Score']}} <br> and is {{$project['Popularity']}} Popular
    </h1>

  </div>
</body>
</html>