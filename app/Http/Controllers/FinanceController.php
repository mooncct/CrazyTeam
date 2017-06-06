<?php

namespace App\Http\Controllers;

use App\Finance;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::get();
        $moneySum = DB::select('select SUM(money) as moneySum from detailed_users_finance ');
        $money = array();
        foreach ($users as $k => $v) {
            $results= DB::select('select SUM(money) as moneySum from detailed_users_finance where users_id = ' . $v->id . '');
            $money[$k]['money'] = numbers($results[0]->moneySum,2,2);
            $money[$k]['name'] = $v['name'];
            $money[$k]['proportion'] = $money[$k]['money']/$moneySum[0]->moneySum*100;
        }
//        dd($money);

        $finance = Finance::get();
        $data=array(
            'finance'=>$finance,
            'money'=>$money,
            'moneySum'=>$moneySum,
        );
        return view('finance.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = Users::get();
        return view('finance.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'amount' => 'numeric',
        ];
        $this->validate($request, $rules);
        $article = new Finance();
//        $article->user = \Auth::id();
        $arr['amount'] = $request->get('amount');
        $arr['name'] = $request->get('name') == null ? 'The new consumer' : $request->get('name');
        $arr['start'] = str_replace('T', ' ', $request->get('start'));
        $arr['end'] = str_replace('T', ' ', $request->get('end'));
        $arr['describe'] = $request->get('describe');
        $arr['created_at'] = date("Y-m-d h:m:i");
        $arr['updated_at'] = date("Y-m-d h:m:i");
        dd($arr);
        $insertGetId = DB::table('finance')->insertGetId($arr);
        $money = $arr['amount'] / 3;
        foreach ($request->get('details') as $v) {
            DB::insert('insert into detailed_users_finance (finance_id,users_id,money) VALUES (' . $insertGetId . ',' . $v . ',' . numbers($money, 10, 1) . ')');
        }


        $url = url('finance');
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Finance::del($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
