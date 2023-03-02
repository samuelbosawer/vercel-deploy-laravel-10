<?php

namespace App\Http\Controllers;

use App\Models\SaCodesWeekends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contributors;
use Illuminate\Support\Facades\Storage;
use Alert;

class SaCodesWeekendsController extends Controller
{

    // ALL
    public function index()
    {
        $data = SaCodesWeekends::select(
                "sacodesweekends.*", // select all from sacodesweekends table
                "contributors.*"
            )
            ->join('contributors', 'contributors.id', 'sacodesweekends.contributor_id')
            ->get();

        return view('sacodesweekends.index', [
            'sacodesweekends' => $data,
            'pageTitle' => "Sacode's Weekend"
        ]);

    }

    // ACTIVE ONLY
    public function indexActive()
    {
        $data = SaCodesWeekends::select(
                "sacodesweekends.*", // select all from sacodesweekends table
                "contributors.*"
            )
            ->join('contributors', 'contributors.id', 'sacodesweekends.contributor_id')
            ->where('status', 'active')
            ->get();

        return view('sacodesweekends.indexActive', [
            'sacodesweekends' => $data,
            'pageTitle' => "Sacode's Weekend"
        ]);
    }

    // TRASH ONLY
    public function indexTrash()
    {
        $data = SaCodesWeekends::select(
                "sacodesweekends.*", // select all from sacodesweekends table
                "contributors.*"
            )
            ->join('contributors', 'contributors.id', 'sacodesweekends.contributor_id')
            ->where('status', 'trash')
            ->get();

        return view('sacodesweekends.indexTrash', [
            'sacodesweekends' => $data,
            'pageTitle' => "Sacode's Weekend"
        ]);
    }

    // CREATE
    public function create()
    {
        $contributors = DB::select('SELECT * FROM contributors');
        return view('sacodesweekends.create', ['pageTitle' => "New SaCode's Weekend",
                                              'contributors' => $contributors
    ]);
    }

    // STORE
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            // Data SaCode's Weekends
            'contributor_id' => 'required',
            'topic' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'poster' => 'required|file|max:2000|mimes:jpg,bmp,png',
        ]);


        $data['contributor_id'] = $request->contributor_id;
        $data['topic'] = $request->topic;
        $data['description'] = $request->description;
        $data['date'] = $request->date;
        $data['time'] = $request->time;

        if($request->hasFile('poster')) {
            $data['poster'] = $request->file('poster')->store('sacodesweekends', 'public');
        }

        SaCodesWeekends::create($data);
        Alert::success('Success','Data created successfully');
        return redirect('./admin/sacodesweekends');
    }

    // SHOW
    public function show($sacodesweekend)
    {
        $data = SaCodesWeekends::select(
            "sacodesweekends.*", // select all from sacodesweekends table
            "contributors.*"
        )
        ->join("contributors", "contributors.id", "=", "sacodesweekends.contributor_id")
        ->where("sacodesweekends.id", $sacodesweekend)
        ->first();

        return view('sacodesweekends.show', [
            'sacodesweekend' => $data,
            'pageTitle' => "SaCode's Weekend"
        ]);
    }

    // EDIT
    public function edit($SaCodesWeekends)
    {
        $contributors = DB::select("SELECT * FROM contributors");
        $SaCodesWeekend = DB::select("SELECT * FROM sacodesweekends WHERE id = '$SaCodesWeekends' ");
        return view('sacodesweekends.edit', ['pageTitle' => "Edit",
                                              'contributors' => $contributors,
                                              'sacodeweekend' => $SaCodesWeekend
                                            ]);
    }

    // UPDATE
    public function update(Request $request, SaCodesWeekends $SaCodesWeekends)
    {
        //
    }

    // UPDATE STATUS ONLY
    public function updateStatus(Request $request, SaCodesWeekends $sacodesweekend)
    {

        $formFields = $request->validate([
            'status' => 'nullable',
        ]);

        // return $formFields['status'];

        // dd($formFields['status']);


        $sacodesweekend->update($formFields);

        return redirect('./admin/sacodesweekends/' . $formFields['status'])->with([
            'message' => 'Contributor created successfully!',
            'alert' => 'alert alert-success',
        ]);
    }

    // DESTROY
    public function destroy(SaCodesWeekends $sacodesweekend){
        $sacodesweekend->delete();
        return redirect('admin/sacodesweekends/trash')->with([
            'message' => 'Contributor deleted succesfully',
            'alert' => 'alert alert-success',
        ]);
    }
}
