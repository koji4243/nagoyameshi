<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::with(['user', 'restaurant'])->paginate(15);
        return view('admin.reviews.index', compact('reviews'));
    }
    public function destroy(Review $review){
        $review->delete();
        return redirect()->route('admin.reviews.index');
    }
}
