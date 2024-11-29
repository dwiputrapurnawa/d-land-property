<?php

if (!function_exists('formatNumber')) {
    function formatNumber($number)
    {
        if ($number >= 1000000000) {
            return round($number / 1000000000, 1) . 'B';
        } elseif ($number >= 1000000) {
            return round($number / 1000000, 1) . 'M';
        } elseif ($number >= 1000) {
            return round($number / 1000, 1) . 'K';
        }
        return number_format($number);
    }
}

function cleanPhoneNumber($phoneNumber)
{
    // Remove any non-numeric characters, except the `+` sign at the beginning
    $cleanedNumber = preg_replace('/[^\d+]/', '', $phoneNumber);

    // Ensure the number starts with `+62`. If not, add it manually (if applicable)
    if (!str_starts_with($cleanedNumber, '+62')) {
        if (str_starts_with($cleanedNumber, '0')) {
            // Replace the leading `0` with `+62`
            $cleanedNumber = '+62' . substr($cleanedNumber, 1);
        } else {
            // Assume the number is incomplete and prepend `+62`
            $cleanedNumber = '+62' . $cleanedNumber;
        }
    }

    return $cleanedNumber;
}
