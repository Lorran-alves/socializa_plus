<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Category;
use App\Http\Controllers\Dashboard\Dashboard;
use App\Models\Order;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $status = $request->status;

        /*->when($status, function ($query, $status) {
                if($status == 'approved')
                    return $query->where('status', 'approved')->orWhere('status', 'send');
                if($status == 'pending')
                    return $query->where('status', 'pending');
            })
            ->with('plan.category')*/

        $purchases = Purchase::where(function ($query) use ($search) {
            return $query->where('id', 'like', '%' . $search . '%')
                ->orWhere('profile', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('telefone', 'like', '%' . $search . '%')
                ->orWhere('period', 'like', '%' . $search . '%')
                ->orWhere('payment_id', 'like', '%' . $search . '%');
                
        });
        if($status){
            if($status == 'approved')
                $purchases = $purchases->where('status', 'approved')->orWhere('status', 'send');
            if($status == 'pending')
                $purchases = $purchases->where('status', 'pending');
        }
        $purchases = $purchases->orderBy('id', 'desc')
            ->paginate(15);

        foreach($purchases as $p){
            $p->plan = Plan::find($p->plan_id);
            $p->plan->category = Category::find($p->plan->category_id);
        }
        ///dd($purchases);
        return view('dashboard.purchases.index', [
            'purchases' => $purchases,
            'request' => $request
        ]);
    }
    public function approved($purchase_id){
        $purchase = Purchase::find($purchase_id);
        $purchase->status = 'approved';
        $purchase->save();

        return redirect()->back()->withSuccess('Aprovado com sucesso!');
    }
    public function destroy($purchase_id){

        $dashboard = new Dashboard;
        $dashboard->reajustarDashboard($purchase_id);

        Purchase::find($purchase_id)->delete();
        Order::where("purchase_id", $purchase_id)->delete();

        return redirect()->back()->withSuccess('Deletado com sucesso!');
    }
}
