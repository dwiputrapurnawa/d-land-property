<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckForUpdates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            // Fetch the latest commit hash from the remote repository
            $remoteHash = shell_exec('cd ' . base_path() . ' && git ls-remote origin -h refs/heads/main | cut -f1');

            // Get the current local commit hash
            $localHash = shell_exec('cd ' . base_path() . ' && git rev-parse HEAD');

            // Compare the hashes
            if (trim($localHash) !== trim($remoteHash)) {
                session()->flash('update_available', 'A new version of the system is available. Please update to access the latest features and improvements.');
            }
        }

        return $next($request);
    }
}
