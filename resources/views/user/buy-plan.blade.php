<x-app-layout>

    <script>

        $.get('/api/plans', res => {
            console.log(res)

            $('.plans').html('')

            res.map(plan => {
                $('.plans').append(`
                    <div class="w-full md:w-1/3 md:p-2 my-2">
                        <div class="w-full h-auto rounded-xl shadow-md py-5 px-6 bg-gray-50 text-sm text-gray-700">
                            <div>
                                <h3 class="text-2xl text-gray-700 px-3 font-bold">${plan.name}</h3>
                            </div>
                            <div class="h-[100pt] w-full flex justify-center items-center">
                                <div class="w-full flex justify-center items-baseline text-gray-800">
                                    <span class="text-[16pt]">$</span>
                                    <span class="text-7xl capitalize">${plan.min_deposit}</span>
                                </div>
                            </div> 

                            <div class="w-full my-10 flex flex-col space-y-3">
                                <div class="flex justify-between">
                                    <div>
                                        Minimum Possible Deposit:
                                    </div>
                                    <div>
                                        $${plan.min_deposit}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Maximum Possible Deposit:
                                    </div>
                                    <div>
                                        $${plan.max_deposit}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Minimum Return:
                                    </div>
                                    <div>
                                        $${plan.min_return}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Maximum Return:
                                    </div>
                                    <div>
                                        $${plan.max_return}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Gift Bonus:
                                    </div>
                                    <div>
                                        $${plan.gift_bonus}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Duration:
                                    </div>
                                    <div>
                                        ${ plan.duration > 24 ? `${Math.round(plan.duration/(30.44 * 24))} Months` : `${plan.duration} Hours` }
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                Amount to invest: ($${plan.min_deposit} default)
                            </div>
                            <form>
                                <div class="w-full py-2">
                                    <input type="hidden" value="${plan.min_deposit}" class="${plan.id}-min_deposit" />
                                    <input type="hidden" value="${plan.max_deposit}" class="${plan.id}-max_deposit" />
                                    <input type="number" name="amount" min="${plan.min_deposit}" max="${plan.max_deposit}" class="${plan.id}-amount w-full rounded border-1 border-gray-900 py-2 px-3 shadow bg-gray-100 placeholder:text-gray-600 text-sm" placeholder="$0" required />
                                </div>
            
                                <div class="w-full py-2">
                                    <input type="button" onClick="subscribe('${plan.id}')" class="w-full rounded border-1 bg-blue-600 hover:bg-blue-500 transition-colors border-none text-white py-3 px-3 shadow text-sm cursor-pointer" value="Join Plan" />
                                </div>
                            </form>
                        </div>
                    </div>
                `)
            })
        })

        function subscribe(id){
            const plan = `${id}`
            const amount = Number($(`.${id}-amount`).val())
            const min = Number($(`.${plan}-min_deposit`).val())
            const max = Number($(`.${plan}-max_deposit`).val())

            console.log(min, max, amount)

            if(amount > min && amount < max){
                data = {plan, amount}
                $.get('/api/investments/subscribe', data, res => {
                    console.log(res)
                    alert(res.message)
                })
                
                console.log(data)
            }
            else{
                alert("The selected Amount is below or above limit")
            }
        }
        
    </script>
    
    <div class="p-2 md:p-5 flex flex-wrap">
        <div class="w-full">
            <h3 class="text-3xl text-gray-700">
                Available Packages
            </h3>
        </div>
        <div class="plans w-full flex flex-wrap justify-around flex-col md:flex-row mb-[100pt]">
            <div class="w-full md:w-1/3 p-2">
                <div class="w-full h-auto rounded-xl shadow-lg py-5 px-6 bg-gray-50 text-sm text-gray-700">
                    <div>
                        <h3 class="text-2xl text-gray-700 px-3 font-bold">Starter</h3>
                    </div>
                    <div class="h-[100pt] w-full flex justify-center items-center">
                        <div class="w-full flex justify-center items-baseline text-gray-800">
                            <span class="text-[16pt]">$</span>
                            <span class="text-7xl">0</span>
                        </div>
                    </div> 

                    <div class="w-full my-10 flex flex-col space-y-3">
                        <div class="flex justify-between">
                            <div>
                                Minimum Possible Deposit:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Maximum Possible Deposit:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Minimum Return:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Maximum Return:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Gift Bonus:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Duration:
                            </div>
                            <div>
                                4 Hours
                            </div>
                        </div>
                    </div>

                    <div class="">
                        Amount to invest: ($0 default)
                    </div>
                    <form>
                        <div class="w-full py-2">
                            <input type="number" name="amount" id="amount" class="w-full rounded border-1 border-gray-900 py-2 px-3 shadow bg-gray-100 placeholder:text-gray-600 text-sm" placeholder="$0" />
                        </div>
    
                        <div class="w-full py-2">
                            <input type="submit" class="w-full rounded border-1 bg-blue-600 hover:bg-blue-500 transition-colors border-none text-white py-3 px-3 shadow text-sm cursor-pointer" value="Join Plan" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>