<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateWebController extends Controller
{
    public function update()
    {

        // Ensure the script runs in the correct project directory
        $output = shell_exec('cd ' . base_path() . ' && git pull origin main 2>&1');

        return back()->with([
            'success' => 'System successfully updated to the latest version! Your application is now up-to-date.',
            'update_output' => nl2br($output), // Store output for display
        ]);
    }

    public function checkForUpdates()
    {
        // Navigate to project directory and check for new commits
        $output = shell_exec('cd ' . base_path() . ' && git fetch origin main 2>&1 && git status -uno');

        if (strpos($output, 'Your branch is behind') !== false) {
            return response()->json([
                'update_available' => true,
                'message' => 'New commits are available!',
                'details' => nl2br($output),
            ]);
        }

        return response()->json([
            'update_available' => false,
            'message' => 'No new commits found.',
        ]);
    }
}
