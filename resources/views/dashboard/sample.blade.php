@extends('dashboard.layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush