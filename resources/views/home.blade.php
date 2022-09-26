@extends('base')
@section('data')
    <div class="flex place-content-center place-items-center h-screen">
        <div class=" w-1/4 place-content-center place-items-center bg-sky-500 rounded">
            <form action="{{route('home')}}" method="post">
                @csrf
                <div class="flex p-4">
                    <input type="text" name="title" class="p-2 border-2 rounded-sm shadow">
                    <input type="submit" class="p-2 bg-fuchsia-500 rounded ">
                </div>
            </form>
            <div class="mt-6 mx-4 mb-6">
                @foreach ($title as $item)
                    <div class="">
                        <span>{{$item->title}}</span>
                        @if ($item->status == '1')
                            <a href="{{route('statusf',['id'=>$item->id])}}" class="p-2 bg-slate-500 rounded">Active</a>  
                        @else
                            <a href="{{route('statust',['id'=>$item->id])}}" class="p-2 bg-slate-500 rounded">anActive</a>
                        @endif
                    </div>
                @endforeach
            </div>
        
        </div>
    </div>
@endsection