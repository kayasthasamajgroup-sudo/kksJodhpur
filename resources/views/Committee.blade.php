@extends('layouts.app')

@section('title', 'Committee')

@section('content')



<div class="container my-4">
   
    <h1 class="text-center fw-bold text-primary mb-4">
        @if($activeCommittee && in_array($activeCommittee, ['core','female','youth']))
            {{ __('messages.' . $activeCommittee) }} <!-- dot, no space -->
        @else
            {{ __('committees.select') }}
        @endif
    </h1>
    
    
    
  @if($content->count() > 0)
        <div class="row">
            @foreach($content as $item)
                <div class="col-6 col-md-3 mb-3"> <!-- col-6 for mobile, col-md-4 for desktop -->
                    <div class="card h-100">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        @endif
                        
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Select a committee to view content.</p>
    @endif
</div>










@endsection

{{-- <div>
    <h3>Select Committee</h3>
    @foreach($allCommittees as $c)
        <a href="{{ route('committees.index', ['committee' => $c]) }}"
           class="btn {{ $activeCommittee == $c ? 'btn-primary' : 'btn-outline-primary' }}">
            {{ ucfirst($c) }}
        </a>
    @endforeach
</div>

<hr>

<div>
    <h3>Members / Content:</h3>
    @if($content->count() > 0)
        <ul>
            @foreach($content as $item)
                <li>
                    {{ $item->name ?? 'No Name' }}
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" width="50" alt="{{ $item->name }}">
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>Select a committee to view content.</p>
    @endif
</div> --}}
