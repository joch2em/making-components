<div class="flex flex-col <?php 
    if($getPosition() == "L"){
        echo "items-start";
    } elseif ($getPosition() == "M") {
        echo "items-center";
    } elseif ($getPosition() == "R") {
        echo "items-end";
    } ?>"
>
    <h1 class="font-bold">{{ $getTitle() }}</h1>
    <p class="opacity-50 text-xs">{{ $getSubTitle() }}</p>
</div>