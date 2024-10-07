@extends('layouts.header')
@section('title')
    Dashboard
@endsection

@section('content')
    @include('user.nav')
    <div class="h-[550px] bg-black mx-6 px-20 flex justify-between items-center rounded-lg mt-1">
        <div class="flex justify-around gap-5 w-full">
            <div class="w-full">
                <h2 class="text-white text-2xl font-semibold">OverView</h2>
                <div class="bg-[#1c1f24]  px-10 py-8 rounded-2xl mt-3">
                    <div class="flex gap-10 w-full">
                        <div class="w-[500px]">
                            <img class="w-[120px] h-[120px] rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Rounded avatar" />
                            <div class="mt-4">
                                <h2 class="text-white font-semibold text-2xl">
                                    Brooklyn Simmaona
                                </h2>
                                <p class="text-gray-300 text-lg mt-1">Student - Senior</p>
                            </div>
                            <div
                                class="flex border border-gray-500 gap-4 justify-between items-center py-4 rounded-xl mt-8 px-4 w-[220px]">
                                <div class="h-12 w-12 bg-[#71aefe] rounded-full"></div>
                                <div>
                                    <h3 class="font-bold text-3xl text-white">126</h3>
                                    <p class="text-gray-200 text-md mt-1">Total Credit</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 w-full gap-5 items-center">
                            <!-- ==== -->
                            <div
                                class="flex border border-gray-500 gap-4 justify-between items-center h-[120px] rounded-xl px-4 w-full">
                                <div class="h-20 w-20 bg-[#fe8949] rounded-full"></div>
                                <div>
                                    <h3 class="font-bold text-4xl text-white">126</h3>
                                    <p class="text-gray-300 text-lg">Total Credit</p>
                                </div>
                            </div>
                            <!-- ==== -->
                            <!-- ==== -->
                            <div
                                class="flex border border-gray-500 gap-4 justify-between items-center h-[120px] rounded-xl px-4 w-full">
                                <div class="h-20 w-20 bg-[#fbbc1d] rounded-full"></div>
                                <div>
                                    <h3 class="font-bold text-4xl text-white">126</h3>
                                    <p class="text-gray-300 text-lg">Total Credit</p>
                                </div>
                            </div>
                            <!-- ==== -->
                            <!-- ==== -->
                            <div
                                class="flex border border-gray-500 gap-4 justify-between items-center h-[120px] rounded-xl px-4 w-full">
                                <div class="h-20 w-20 bg-[#ffa7a7] rounded-full"></div>
                                <div>
                                    <h3 class="font-bold text-4xl text-white">126</h3>
                                    <p class="text-gray-300 text-lg">Total Credit</p>
                                </div>
                            </div>
                            <!-- ==== -->
                            <!-- ==== -->
                            <div
                                class="flex border border-gray-500 gap-4 justify-between items-center h-[120px] rounded-xl px-4 w-full">
                                <div class="h-20 w-20 bg-[#0ebdf6] rounded-full"></div>
                                <div>
                                    <h3 class="font-bold text-4xl text-white">126</h3>
                                    <p class="text-gray-300 text-lg">Total Credit</p>
                                </div>
                            </div>
                            <!-- ==== -->

                            <!-- ==== -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-full relative">
                <h2 class="text-white text-2xl font-semibold">My Progress</h2>
                <div class="bg-[#1c1f24]  min-h-[395px] px-10  rounded-2xl mt-3 flex justify-center   relative w-[400px]">
                    <div class="w-[300px] " id="progressChart"></div>
                    <div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        window.onload = function() {

            var chart3 = new CanvasJS.Chart("progressChart", {
                animationEnabled: true,
                backgroundColor: "transparent",
                data: [{
                    type: "doughnut",
                    startAngle: 60,

                    //innerRadius: 60,
                    indexLabelFontColor: "transparent",
                    indexLabelPlacement: "inside",
                    dataPoints: [{
                            y: 10,
                            color: "#fe8949",
                            label: "Pending"
                        },
                        {
                            y: 20,
                            color: "#417DFC",
                            label: "Processing"
                        },
                        {
                            y: 50,
                            color: "#fbbc1d",
                            label: "Approved"
                        },

                    ]
                }]
            });

            chart3.render();

        }
    </script>
@endsection
