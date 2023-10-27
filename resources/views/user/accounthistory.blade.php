<x-app-layout>

    <script>
        const active = "bg-white text-gray-700"
        const regular = "bg-gray-100 text-gray-400"

        const setActiveTab = id => {
            $('.tab').removeClass(active)
            $('.tab').addClass(regular)

            $('.tab-content').hide()
            
            $(`.tab-${id}`).addClass(active)
            $(`.tab-${id}-content`).show()
        }

        window.addEventListener('load', () => setActiveTab(1) )
        
        
    </script>
    
    
    <div class="py-6 md:px-5 w-full">
        <div class="w-full">
            <h3 class="text-[20pt] md:text-[25pt] text-gray-600">Transactions on your account</h3>
        </div>

        <div class="w-full pt-10">
            <div class="w-full bg-gray-50 shadow-lg flex justify-center items-center flex-col py-6 px-4 rounded-2xl">
                {{-- tabs --}}
                    <div class="w-full flex items-center text-gray-700">
                        <div onclick="setActiveTab(1)" class="tab tab-1 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Desposits
                        </div>

                        <div onclick="setActiveTab(2)" class="tab tab-2 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Withdrawals
                        </div>

                        <div onclick="setActiveTab(3)" class="tab tab-3 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Others
                        </div>
                    </div>
                {{-- ? tabs --}}
                
                <div class="tab-contents w-full">
                    {{-- tab1 content --}}
                        <div class="tab-1-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto text-sm text-left">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th class="p-2">Amount</th>
                                        <th class="p-2">Payment Mode</th>
                                        <th class="p-2">Status</th>
                                        <th class="p-2">Date Created</th>
                                    </tr>
                                </thead>
                
                                <tbody class="text-gray-600">
                                    @if(count($payments) > 0)
                                        @foreach($payments as $deposit)
                                            <tr class="w-full px-5 py-5 hover:bg-gray-200 cursor-pointer">
                                                <td class="py-2 px-2">${{ number_format($deposit['amount']) }}</td>
                                                <td class="py-2 px-2 capitalize">{{ $deposit['method'] }}</td>
                                                <td class="py-2 px-2 text-{{ $deposit['validated'] ? "green" : "red" }}-600">{{ $deposit['validated'] ? "Confirmed" : "Pending" }}</td>
                                                <td class="py-2 px-2">{{ $deposit['created_at'] }}</td>
                                            </tr>
                                        @endforeach
                                    
                                        @else
                                            <tr class="no-data w-full px-5 py-5 grid">
                                                <div colspan="2" class="mx-auto w-auto py-5">
                                                    No data available in table
                                                </div>
                                            </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab1 content --}}


                    {{-- tab2 content --}}
                        <div class="tab-2-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto text-left">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th class="p-2">Amount requested</th>
                                        <th class="p-2">Receiving Mode</th>
                                        <th class="p-2">Status</th>
                                        <th class="p-2">Date created</th>
                                    </tr>
                                </thead>
                
                                <tbody class="text-gray-600">
                                    @if(count($withdrawals) > 0)
                                        @foreach($withdrawals as $payoff)
                                            <tr class="w-full px-5 py-5 hover:bg-gray-200 cursor-pointer">
                                                <td class="py-2 px-2">${{ number_format($payoff['amount']) }}</td>
                                                <td class="py-2 px-2 capitalize">{{ $payoff['method'] }}</td>
                                                <td class="py-2 px-2 text-{{ $payoff['confirmed'] ? "green" : "red" }}-600">{{ $payoff['confirmed'] ? "Confirmed" : "Pending" }}</td>
                                                <td class="py-2 px-2">{{ $payoff['address'] }}</td>
                                                <td class="py-2 px-2">{{ $payoff['created_at'] }}</td>
                                            </tr>
                                        @endforeach
                                    
                                        @else
                                            <tr class="no-data w-full px-5 py-5 grid text-gray-700s">
                                                <div colspan="2" class="mx-auto w-auto py-5">
                                                    No data available in table
                                                </div>
                                            </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab2 content --}}

                    {{-- tab2 content --}}
                        <div class="tab-3-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto text-left">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th class="p-2">Amount</th>
                                        <th class="p-2">Profit</th>
                                        <th class="p-2">Plan/Naration</th>
                                        <th class="p-2">Status</th>
                                        <th class="p-2">Date created</th>
                                    </tr>
                                </thead>
                
                                <tbody class="text-gray-600">
                                    @if(count($investments) > 0)
                                        @foreach($investments as $invests)
                                            <tr class="w-full px-5 py-5 hover:bg-gray-200 cursor-pointer">
                                                <td class="py-2 px-2">${{ number_format($invests['capital']) }}</td>
                                                <td class="py-2 px-2 capitalize">${{ number_format($invests['profit']) }}</td>
                                                <td class="py-2 px-2 capitalize">{{ $invests['plan'] }}</td>
                                                <td class="py-2 px-2 italic text-xs text-{{ $invests['status'] == 'active' ? "green" : "red" }}-600">{{ $invests['plan'] == 'active' ? "active" : "ended" }}</td>
                                                <td class="py-2 px-2">{{ $invests['created_at'] }}</td>
                                            </tr>
                                        @endforeach
                                    
                                        @else
                                            <tr class="no-data w-full px-5 py-5 grid text-gray-700s">
                                                <div colspan="2" class="mx-auto w-auto py-5">
                                                    No data available in table
                                                </div>
                                            </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab2 content --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>