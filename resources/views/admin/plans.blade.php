@extends('layouts.admin')

@section('content')

    <div class="w-full md:px-10 px-3 py-12 grid">
        <div class="w-full md:w-1/2 min-h-[200pt] rounded-md bg-gray-50 mx-auto p-5 shadow-lg">
            <h2 class="text-xl font-bold text-gray-600">
                Manage Plans
            </h2>

            <script>
                $('document').ready(() => {

                    const fetchPlans = () => {
                        const plan = $('.plans').val()

                        $.get(`/api/plan/${plan}`, res => {
                            console.log(res)

                            $('.min-deposit').val(res.min_deposit)
                            $('.max-deposit').val(res.max_deposit)
                            $('.max-return').val(res.max_return)
                            $('.min-return').val(res.min_return)
                            $('.gift-bonus').val(res.gift_bonus)
                            $('.duration').val(`${Math.round(res.duration/(30.44 * 24))} Months`)
                        })
                    }

                    fetchPlans(1)
                    
                    $('.plans').change(() => {
                        fetchPlans()
                    })

                    $('.change-plans').submit(e => {
                        e.preventDefault();
                        const id = $('.plans').val()
                        const newPlanDetails = $('.change-plans').serializeArray();
                        $.get(`/api2/plans/update/${id}`, newPlanDetails, res => {
                            console.log(res)
                            alert(res.message)
                        })
                    })
                })
            </script>

            <form class="change-plans w-full flex flex-col justify-center items-center">
                <div class="w-full md:w-2/3 my-2 mt-5 text-xs">
                    <select type="text" class="plans w-full border-gray-200 px-3 py-3 rounded-xl text-xs">
                        @foreach ($plans as $plan)
                            <option value="{{$plan -> id}}">{{$plan -> name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="min-deposit" class="pb-3">Minimum Deposit</label>
                    <input type="text" name="min_deposit" class="min-deposit w-full border-gray-200 px-3 py-3 rounded-xl" />
                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="max-deposit" class="pb-3">Maximum Deposit</label>
                    <input type="text" name="max_deposit" class="max-deposit w-full border-gray-200 px-3 py-3 rounded-xl" />
                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="min-return" class="pb-3">Minimum Return</label>
                    <input type="text" name="min_return" class="min-return w-full border-gray-200 px-3 py-3 rounded-xl" />
                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="max-return" class="pb-3">Maximum Returns</label>
                    <input type="text" name="max_return" class="max-return w-full border-gray-200 px-3 py-3 rounded-xl" />
                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="gift-bonus" class="pb-3">Gift Bonus</label>
                    <input type="text" name="gift_bonus" class="gift-bonus w-full border-gray-200 px-3 py-3 rounded-xl" />
                </div>

                <div class="w-full md:w-2/3 my-2 text-xs pt-2 text-gray-600">
                    <label for="duration" class="pb-3">Duration</label>
                    <input type="text" name="duration" class="duration w-full border-gray-200 px-3 py-3 rounded-xl" disabled />
                </div>

                <div class="pt-2 my-2">
                    <button class="bg-blue-500 rounded-lg text-white text-xs px-4 py-3 font-bold">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endSection