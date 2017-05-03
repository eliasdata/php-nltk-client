<?php
/**
 * Created by Szymon Szymański <szymon.szymanski@hotmail.com>
 * Date: 02.05.2017
 * Time: 23:16
 */

namespace Szyku\NLTK\Util;


use Szyku\NLTK\Assertion\Assertion;

final class PhraseNormalization
{
    /**
     * Trims strings, makes lowercase (multibyte safe) and replaces spaces with underscores.
     * @param $value string Phrase to be normalized.
     * @return string The normalized phrase.
     */
    public static function normalizeForApi($value)
    {
        Assertion::string($value, "This method normalizes only strings.");

        return str_replace(' ', '_', mb_strtolower(trim($value)));
    }
}
