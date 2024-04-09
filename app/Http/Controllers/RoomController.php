<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Room_size_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('manage_room', compact('rooms'));
    }

    public function index_size() {
        $sizes = Room_size_model::all();
        return view('add_room', compact('sizes'));
    }

    public function index_booking() {
        $rooms = Room::all();
        return view('other.booking', compact('rooms'));
    }

    public function index_process_first(Request $request) {
        $roomId = $request->query('room_id');
        $room = Room::findOrFail($roomId);
        return view('other.process_first', compact('room'));
    }

    public function storeRoom(Request $request) {
        // Validate input data
        // $request->validate([
        //     'rm_name' => 'required|string|max:255',
        //     'rm_type' => 'required|string|max:255',
        //     'rm_status' => 'required|string|max:255',
        //     'rm_price' => 'required|numeric',
        //     'rm_facilities' => 'nullable|string',
        //     'rm_can_half' => 'required|boolean',
        //     'rm_size_id' => 'required|integer',
        //     'rm_is_half' => 'nullable|boolean',
        //     'rm_pic_path' => 'nullable|string',
        //     'rm_half_a_size_id' => 'nullable|integer',
        //     'rm_half_a_facilities' => 'nullable|string',
        //     'rm_half_a_pic_path' => 'nullable|string',
        //     'rm_half_a_is_half' => 'nullable|boolean',
        //     'rm_half_b_size_id' => 'nullable|integer',
        //     'rm_half_b_facilities' => 'nullable|string',
        //     'rm_half_b_pic_path' => 'nullable|string',
        //     'rm_half_b_is_half' => 'nullable|boolean'
        // ]);

        $room = new Room();
        $room->rm_name = $request->input('rm_name');
        $room->rm_type = $request->input('rm_type');
        $room->rm_status = $request->input('rm_status');
        $room->rm_price = $request->input('rm_price');
        $room->rm_facilities = $request->input('rm_facilities');
        // $room->rm_can_half = $request->input('rm_can_half');
        $room->rm_size_id = (int) $request->input('rm_size_id');
        $room->rm_is_half = $request->input('rm_is_half');

        $room->rm_pic_path = $request->input('rm_pic_path');

        $room->rm_half_a_size_id = $request->input('rm_half_a_size_id');
        $room->rm_half_a_facilities = $request->input('rm_half_a_facilities');

        $room->rm_half_a_pic_path = $request->input('rm_half_a_pic_path');

        $room->rm_half_a_is_half = $request->input('rm_half_a_is_half');
        $room->rm_half_b_size_id = $request->input('rm_half_b_size_id');
        $room->rm_half_b_facilities = $request->input('rm_half_b_facilities');

        $room->rm_half_b_pic_path = $request->input('rm_half_b_pic_path');

        $room->rm_half_b_is_half = $request->input('rm_half_b_is_half');

        if ($request->hasFile('rm_pic_path')) {
            $imagePath = $request->file('rm_pic_path')->store('public/room_images');
            $room->rm_pic_path = basename($imagePath);
        }


        // บันทึกรูปภาพของครึ่งห้อง A
        if ($request->hasFile('rm_half_a_pic_path')) {
            $imagePath = $request->file('rm_half_a_pic_path')->store('public/room_images');
            $room->rm_half_a_pic_path = $imagePath;
        }

        // บันทึกรูปภาพของครึ่งห้อง B
        if ($request->hasFile('rm_half_b_pic_path')) {
            $imagePath = $request->file('rm_half_b_pic_path')->store('public/room_images');
            $room->rm_half_b_pic_path = $imagePath;
        }

        $room->save();

        return redirect()->to('/manage_room');
    }

}
