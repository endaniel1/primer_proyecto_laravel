<img cals="img-thumbnail" src="{{ $message->image }}" />
    <p class="card-text">
        <div class="text-muteo">Escrito por
            <a href="/mi-proyecto/public/{{$message->user->username}}">{{$message->user->name}}</a>
        </div>
        {{$message->content}} 
        <a href="messages/{{$message->id}}"> Leer mas</a>
    </p>
<div class="card-text text-muted float-right"> 
    {{$message->created_at}}
</div>