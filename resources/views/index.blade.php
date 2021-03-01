@extends('layouts.main')

@section('content')


<div> 
{{-- Flights will be shown here  --}}

<div class="container mx-auto px-9 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold"> Past Flights</h2>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-16 ">
        {{-- <div class="grid grid-cols-3 gap-4"> --}}
                    <div class="grid grid-cols-2 gap-x-2  "> 
                    @foreach ($pastLaunches as $pastlaunch)
                        {{-- <x-movie-card :movie="$movie" /> --}}

                        <div class="mt-8">
                            <span class="text-lg mt-2 text-green-400 "> 
                               Flight number: 
                                {{-- {{ $pastlaunch['mission_name']}} --}}

                            </span><span> {{ $pastlaunch['flight_number']}} </span>
                            <div> 
                            <span class=" text-lg mt-2 text-green-500"> 
                                {{-- {{ $pastlaunch['flight_number']}} --}}
                              Mission name:

                            </span>
                            <span class="text-2xl"> {{ $pastlaunch['mission_name']}} </span>

                        </div>
                            <span class="text-lg mt-2 text-green-500"> 
                                {{-- {{ $pastlaunch['flight_number']}} --}}
                              Launch year :   
                        
                            </span> <span> {{ $pastlaunch['launch_year']}}</span>
                            {{-- <a href="#">
                                Hello asv
                            </a> --}}
            
                            <div class="mt-2">
                                <h4>  Flight details  </h4>
                                <p href="#" class="text-lg mt-2 hover:text-orange:200"> 
                                   
                                    {{ $pastlaunch['details']}}
                                 
                                    
                                </p>
            
                                <div class="flex items-center text-yellow-400">
                                    <span> more details  </span>
                                    <span class="ml-1"> more details  </span>
                                   
                                   
                                </div>
                                <div class="text-green-400"> 
            

                                    Rockets:
                                    @foreach ($rocketArray as $rocketid)

                                    {{ $rocketid ['rocket_id']}}


                                    @endforeach --}} id is missing properly 
                                    {{-- {{-- {{ $pastlaunch['rocket_type']}} --}}
                                   

                                    {{-- {{ $rocketIDs['rocket_id']}} --}}


                                    {{-- @foreach ($rocketIDs as $rocket_id)
                                    {{ $rocket_id ['rocket_id']}}
                                    @endforeach --}}
                                </div> 
                            </div>
            
                        </div>
                        
                    @endforeach

                    {{-- blooody movies --}}

           






           


           


           


            
            

        </div>
    </div> <!-- end pouplar-movies -->

</div>


@endsection