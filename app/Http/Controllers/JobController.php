<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplication;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to fetch all jobs from the database
        $jobs = Job::all();
        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logic to store new job data in the database
        Job::create($request->all());
        return redirect()->route('jobs.index')
            ->with('success', 'Job created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        // Logic to fetch and display a specific job
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        // Logic to fetch job data for editing
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        // Logic to update job data in the database
        $job->update($request->all());
        return redirect()->route('jobs.index')
            ->with('success', 'Job updated successfully');
    }
    /**
     * Show the form for applying to a job.
     */
    public function apply(Request $request, Job $job)
    {
        return view('jobs.apply', ['job' => $job]);
    }

    /**
     * Store a newly created job application in storage.
     */
    public function storeApplication(Request $request, Job $job)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048', // Example: Limit to PDF, DOC, DOCX files
        ]);

        // Store the resume file
        $resumePath = $request->file('resume')->store('resumes');

        // Create a new job application record
        $jobApplication = new JobApplication();
        $jobApplication->job_id = $job->id;
        $jobApplication->name = $validatedData['name'];
        $jobApplication->email = $validatedData['email'];
        $jobApplication->resume_path = $resumePath;
        $jobApplication->save();

        return redirect()->route('jobs.index')->with('success', 'Job application submitted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        // Logic to delete job data from the database
        $job->delete();
        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully');
    }
}
