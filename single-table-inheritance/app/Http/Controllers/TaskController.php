<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\FeatureTask;
use App\BugTask;

class TaskController extends Controller
{
    protected $tasks;
    protected $ftasks;
    protected $btasks;

    public function __construct(Task $tasks, FeatureTask $ftasks, BugTask $btasks)
    {
        $this->tasks = $tasks;
        $this->ftasks = $ftasks;
        $this->btasks = $btasks;
    }

    public function index() {
        // echo model collection
        dd($this->tasks->all()); // sama dengan Task::all()
    }

    public function features() {
        dd($this->ftasks->all()); // sama dengan FeatureTask::all(), lihat constructor di atas
    }

    public function bugs() {
        dd($this->btasks->all());
    }
}
