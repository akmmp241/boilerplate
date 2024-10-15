<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class StrongPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param Closure(string, ?string=): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $length = strlen($value);
        $hasDigit = preg_match('/\d/', $value);
        $hasUppercase = preg_match('/[A-Z]/', $value);
        $hasSymbol = preg_match('/[^a-zA-Z\d]/', $value);
        $hasLowercase = preg_match('/[a-z]/', $value);

        if (! ($length >= 8 && $hasDigit && $hasUppercase && $hasSymbol && $hasLowercase))
            $fail('The :attribute must be at least 8 characters long, contain at least one digit, one uppercase letter, and one symbol.');
    }
}
