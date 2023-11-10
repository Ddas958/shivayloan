@section('title','Loan Settings')
@extends('admin.main')
@section('content')

<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
    @include('admin.message')
        <div class="card">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Loan Settings</div>
                    </div>
                </header>
                <div class="card-text h-full">
                    <div>
                        <ul class="nav nav-pills flex items-center flex-wrap list-none pl-0 mb-6 space-x-4 " id="pills-tabHorizontal" role="tablist">
                        <li class="nav-item text-center" role="presentation">
                            <a href="#pills-contentHorizontal" class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 active dark:bg-slate-900 dark:text-slate-300" id="pills-home-tabHorizontal" data-bs-toggle="pill" data-bs-target="#pills-contentHorizontal" role="tab" aria-controls="pills-contentHorizontal" aria-selected="true">Loans</a>
                        </li>
                        <li class="nav-item text-center" role="presentation">
                            <a href="#pills-faqs" class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 dark:bg-slate-900 dark:text-slate-300" id="pills-faqs-tabHorizontal" data-bs-toggle="pill" data-bs-target="#pills-faqs" role="tab" aria-controls="pills-faqs" aria-selected="false">Faqs</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContentHorizontal">
                            <div class="tab-pane fade show active" id="pills-contentHorizontal" role="tabpanel" aria-labelledby="pills-contentHorizontal">
                                <div class="card">
                                    <!-- <header class="">
                                            <div class="justify-start flex gap-3 items-center flex-wrap">
                                                <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" href="{{route('admin.addLoan')}}">
                                                    <iconify-icon icon="ic:round-plus" class="text-lg mr-1">
                                                    </iconify-icon>
                                                    Add Loan
                                                </a>
                                            </div>
                                    </header> -->
                                    <div class="card-body px-6 pb-6">
                                        <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                            <div class="inline-block min-w-full align-middle">
                                                <div class="overflow-hidden ">
                                                    <table id="data-table-course" class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                        <thead class="bg-slate-200 dark:bg-slate-700">
                                                            <tr>
                                                                <th scope="col" class="table-td ">
                                                                    {{ __('Sl No') }}
                                                                </th>
                                                                <th scope="col" class="table-td ">
                                                                    {{ __('Name') }}
                                                                </th>
                                                                
                                                                <th scope="col" class="table-td w-20">
                                                                    {{ __('Action') }}
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                            @forelse ($loans as $item)
                                                            <tr>
                                                                <td class="table-td">
                                                                    # {{ $item->id }}
                                                                </td>
                                                                <td class="table-td">
                                                                    <div class="flex items-center">
                                                                        <div class="flex-1 text-center">
                                                                            <h4 class="text-sm font-medium text-slate-600">
                                                                                {{ $item->name }}
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                
                                                                <td class="table-td">
                                                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                                                        <a class="action-btn" href="{{ route('admin.editLoan',$item->id) }}">
                                                                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                        </a>
                                                                        <!-- <a class="action-btn" href="{{ route('admin.deleteLoan',$item->id) }}">
                                                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                        </a> -->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr class="border border-slate-100 dark:border-slate-900 relative">
                                                                <td class="table-cell text-center" colspan="5">
                                                                    <h2 class="text-xl text-slate-700 mb-8 mt-4">{{ __('No loan added.') }}</h2>
                                                                </td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-faqs" role="tabpanel" aria-labelledby="pills-faqs">
                                <div class="card">
                                    <header class="">
                                            <div class="justify-start flex gap-3 items-center flex-wrap">
                                                <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" href="{{route('admin.addLoanFaq')}}">
                                                    <iconify-icon icon="ic:round-plus" class="text-lg mr-1">
                                                    </iconify-icon>
                                                    Add Faq
                                                </a>
                                            </div>
                                    </header>
                                    <div class="card-body px-6 pb-6">
                                        <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                            <div class="inline-block min-w-full align-middle">
                                                <div class="overflow-hidden ">
                                                    <table id="data-table-course" class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                        <thead class="bg-slate-200 dark:bg-slate-700">
                                                            <tr>
                                                               
                                                                <th scope="col" class="table-td ">
                                                                    {{ __('Loan') }}
                                                                </th>
                                                                <th scope="col" class="table-td ">
                                                                    {{ __('Question') }}
                                                                </th>
                                                                <th scope="col" class="table-td ">
                                                                    {{ __('Answer') }}
                                                                </th>
                                                                
                                                                <th scope="col" class="table-td w-20">
                                                                    {{ __('Action') }}
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                            @forelse ($faqs as $item)
                                                            <tr>
                                                               
                                                                <td class="table-td">
                                                                    <div class="flex items-center">
                                                                        <div class="flex-1 text-center">
                                                                            <h4 class="text-sm font-medium text-slate-600">
                                                                                @php $loan = DB::table('loans')->where('id','=',$item->loan_id)->first();
                                                                                echo $loan->name;
                                                                                @endphp
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table-td">
                                                                    <div class="flex items-center">
                                                                        <div class="flex-1 text-center">
                                                                            <h4 class="text-sm font-medium text-slate-600">
                                                                                {{ $item->question }}
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="table-td">
                                                                    <div class="flex items-center">
                                                                        <div class="flex-1 text-center">
                                                                            <h4 class="text-sm font-medium text-slate-600">
                                                                                {!! $item->answer !!}
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                
                                                                <td class="table-td">
                                                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                                                        <a class="action-btn" href="{{ route('admin.editLoanFaq',$item->id) }}">
                                                                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                        </a>
                                                                        <a class="action-btn" href="{{ route('admin.deleteLoanFaq',$item->id) }}">
                                                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr class="border border-slate-100 dark:border-slate-900 relative">
                                                                <td class="table-cell text-center" colspan="5">
                                                                    <h2 class="text-xl text-slate-700 mb-8 mt-4">{{ __('No faq added.') }}</h2>
                                                                </td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection