<x-app-layout>
    <div class="py-10 px-5 flex flex-wrap">
        <div class="w-full">
            <h3 class="text-3xl font-semibold text-gray-700">
                My Plans
            </h3>
        </div>

        @if(count($investments) < 1)

            <div class="w-full md:p-5 flex">
                <div class="w-[5pt] rounded-l-md bg-red-500 h-full">

                </div>
                <div class="w-full flex space-x-2 items-center rounded-r-md bg-white px-3 py-5 shadow-md text-gray-400">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                    </div>
                    <div class="text-sm">
                        You do not have a package at the moment
                    </div>
                </div>
            </div>

            @else
                <div class="w-full flex flex-wrap py-5 md:px-5 text-gray-600">
                    
                    @foreach($investments as $investment)
                    
                        <div class="w-full md:w-1/3 p-2">
                            <div class="w-full rounded-2xl shadow-lg bg-gray-50 p-5 overflow-hidden h-full">
                                <div class="mb-5">
                                    <h3 class="uppercase font-bold text-xl text-gray-400">{{ $investment -> plan }}</h3>
                                </div>

                                <div class="text-sm mb-3 italic">
                                    <div class="text-xs">
                                        Activated:
                                    </div>
                                    <div class="text-lg font-bold">
                                        {{ $investment -> created_at }}
                                    </div>
                                </div>

                                <div class="text-sm mb-3 italic">
                                    <div class="text-xs">
                                        Expies:
                                    </div>
                                    <div class="text-lg font-bold">
                                        {{ $investment -> due_at }}
                                    </div>
                                </div>

                                <div class="flex justify-between mb-3 font-bold">
                                    <div class="">
                                        <div class="text-xs">
                                            Invested:
                                        </div>
                                        <div class="text-2xl">
                                            ${{ number_format($investment -> capital) }}
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="text-xs">
                                            Profit:
                                        </div>
                                        <div class="text-2xl">
                                            ${{ number_format($investment -> profit) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach

                </div>
                    
        @endif
    </div>
</x-app-layout>