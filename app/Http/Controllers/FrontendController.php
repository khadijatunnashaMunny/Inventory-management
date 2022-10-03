<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\employee;
use App\Models\cart;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;

class FrontendController extends Controller
{
    //
    public function home(){
       
        return view('frontend.index');
    } 
    public function about(){
       
        return view('frontend.about');
    }   
    public function addEmployee(){
       
        return view('frontend.addEmployee');
    }   
    public function products(){
       
        return view('frontend.products');
    }   
    public function contact(){
       
        return view('frontend.contact');
    }   
    public function addProduct(){

            return view('frontend.addProduct');

        
    } 
    public function productSubmit(Request $request)
    {       
        if ($request->session()->has('user')) {

            $product = new product;
            $product['product_name'] = $request->product_name;
            $product['product_price'] = $request->product_price;
            $product['product_description'] = $request->product_description;
            $product['product_quantity'] = $request->product_quantity;

            if ($request->hasfile('product_image')) {
                $file = $request->file('product_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('uploads/images/', $filename);
                $product->product_image = $filename;
            }
            $product->save();
            return redirect()->back();
        } 
        else {
            return redirect('/login');
        }
    }
    public function employeeSubmit(Request $request)
    {
        if ($request->session()->has('user')) {

            $employee = new employee;
            $employee['e_name'] = $request->e_name;
            $employee['e_title'] = $request->e_title;
            $employee['e_info'] = $request->e_info;
            $employee['e_mail'] = $request->e_mail;
            if ($request->hasfile('e_image')) {
                $file = $request->file('e_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('uploads/images/', $filename);
                $employee->e_image = $filename;
            }
    
            $employee->save();
            return redirect()->back();
        } 
        else {
            return redirect('/login');
        }
    }
    public function product_detail($id){
        $product = product::find($id);
        return view ('frontend.detail_product')->with('product', $product);
    }
    public function contactSubmit(Request $request)
    {
        if ($request->session()->has('user')) {

            $contact = new contact;
            $contact['name'] = $request->name;
            $contact['subject'] = $request->subject;
            $contact['message'] = $request->message;
            $contact['mail'] = $request->mail;
        
            $contact->save();
            return redirect()->back();
        } 
        else {
            return redirect('/login');
        }
    }
public function report(){
    return view('frontend.report');

}
public function pdfGeneration(){

    $projects = product::all();

    $pdf_view = PDF::loadView('frontend.pdf_convert', compact('projects'));

    return $pdf_view->download('myPDF.pdf');
}

public  function edit($id)
{
    $product = product::find($id);

    return view('frontend.edit', compact('product'));
}
    public function updatedetail(Request $request, $id)
    {
        if ($request->session()->has('user')) {

        $data = product::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('/')->with('flash_message', 'Contact Updated!');  
    } 
    else {
        return redirect('/login');
    }
        
    }
    
    function delete($id)
    {

        product::destroy($id);
        return redirect('/');
       
    }

}
