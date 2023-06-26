<?php

namespace App\Http\Controllers;

use App\Models\maklumat_tuntutan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function addNewClaim(){
        return view('layouts.addNewClaim');
    } 
    

    public function dashboard()
    {
        $claimAdmin = maklumat_tuntutan::all();
    
        return view('dashboard', ['claimAdmin' => $claimAdmin]);
    }
    
    
    public function insertClaim(Request $request){



        $tuntutan = new maklumat_tuntutan();
        $tuntutan->tarikh = $request->input('Tarikh');
        $tuntutan ->hari = $request -> input('Day');
        $tuntutan ->masa_mula_bekerja = $request -> input('timeStart');
        $tuntutan -> masa_akhir_bekerja  = $request -> input('timeEnd');
        $tuntutan->jenis_hari = $request->input('dropdown1');
        $tuntutan->jenis_waktu_bekerja = $request->input('dropdown2');
        $tuntutan->jumlah_jam_bekerja = $request->input('Hour');
        $tuntutan->status ="pending";
        $tuntutan->id_pekerja = $request->input('id_pekerja');
        $tuntutan->bulan_tuntutan = $request->input('bulan_tuntutan');
        $tuntutan->catatan = $request->input('catatan');
        $tuntutan->save();









        return redirect('dashboard');
    }  
    
    
    public function changeClaim(Request $request){  
        $id= $request->input('id_tuntutan');
    $tuntutan = maklumat_tuntutan::find($id);
  
    $tuntutan->tarikh = $request->input('Tarikh');
    $tuntutan ->hari = $request -> input('Day');
    $tuntutan ->masa_mula_bekerja = $request -> input('timeStart');
    $tuntutan -> masa_akhir_bekerja  = $request -> input('timeEnd');
    $tuntutan->jenis_hari = $request->input('dropdown1');
    $tuntutan->jenis_waktu_bekerja = $request->input('dropdown2');
    $tuntutan->jumlah_jam_bekerja = $request->input('Hour');
    $tuntutan->status ="pending";
    $tuntutan->id_pekerja = $request->input('id_pekerja');
    $tuntutan->bulan_tuntutan = $request->input('bulan_tuntutan');
    $tuntutan->catatan = $request->input('catatan');
    $tuntutan->save();

        return redirect('dashboard');
    } 

    

    public function deleteClaim(Request $request){

        $id = $request->input('ids');

        $maklumat_tuntutan = maklumat_tuntutan::whereIn('id_tuntutan', $id);
        $maklumat_tuntutan->delete();
        return redirect('dashboard');
    } 
    
    public function feedback(){
        return view('layouts.feedback');
    }  
    
    public function deleteFeedback(){
        return view('layouts.addNewClaim');
    }
    
    public function contactUs(){
        return view('layouts.contactUs');
    } 
    
    public function deleteContactUS(){
        return view('layouts.addNewClaim');
    } 
    
    public function paymentStatus(){
        return view('layouts.paymentStatus');
    } 
    


    public function deletePaymentStatus(){
        return view('layouts.addNewClaim');
    }

    public function botAssistant(){
        return view('layouts.botAssistant');
    }
}
