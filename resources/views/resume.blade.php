
@extends('layouts.base')


@section('title', 'resume')

@section('content')        
    
<div class="flex-center">
    <div class="content">
        <embed src="{{ URL::asset('/pdf/resume.pdf#toolbar=0&scrollbar=0') }}" type="application/pdf" width="600px" height="800px" />


    </div>
</div>
    

@endsection
