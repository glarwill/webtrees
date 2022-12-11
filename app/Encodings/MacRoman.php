<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2022 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Encodings;

/**
 * Convert between UTF-8 and MacOS Roman encoding.
 */
class MacRoman extends AbstractEncoding
{
    public const NAME = 'MACROMAN';

    protected const TO_UTF8 = [
        "\x80" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_DIAERESIS,
        "\x81" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_RING_ABOVE,
        "\x82" => UTF8::LATIN_CAPITAL_LETTER_C_WITH_CEDILLA,
        "\x83" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_ACUTE,
        "\x84" => UTF8::LATIN_CAPITAL_LETTER_N_WITH_TILDE,
        "\x85" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_DIAERESIS,
        "\x86" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_DIAERESIS,
        "\x87" => UTF8::LATIN_SMALL_LETTER_A_WITH_ACUTE,
        "\x88" => UTF8::LATIN_SMALL_LETTER_A_WITH_GRAVE,
        "\x89" => UTF8::LATIN_SMALL_LETTER_A_WITH_CIRCUMFLEX,
        "\x8A" => UTF8::LATIN_SMALL_LETTER_A_WITH_DIAERESIS,
        "\x8B" => UTF8::LATIN_SMALL_LETTER_A_WITH_TILDE,
        "\x8C" => UTF8::LATIN_SMALL_LETTER_A_WITH_RING_ABOVE,
        "\x8D" => UTF8::LATIN_SMALL_LETTER_C_WITH_CEDILLA,
        "\x8E" => UTF8::LATIN_SMALL_LETTER_E_WITH_ACUTE,
        "\x8F" => UTF8::LATIN_SMALL_LETTER_E_WITH_GRAVE,
        "\x90" => UTF8::LATIN_SMALL_LETTER_E_WITH_CIRCUMFLEX,
        "\x91" => UTF8::LATIN_SMALL_LETTER_E_WITH_DIAERESIS,
        "\x92" => UTF8::LATIN_SMALL_LETTER_I_WITH_ACUTE,
        "\x93" => UTF8::LATIN_SMALL_LETTER_I_WITH_GRAVE,
        "\x94" => UTF8::LATIN_SMALL_LETTER_I_WITH_CIRCUMFLEX,
        "\x95" => UTF8::LATIN_SMALL_LETTER_I_WITH_DIAERESIS,
        "\x96" => UTF8::LATIN_SMALL_LETTER_N_WITH_TILDE,
        "\x97" => UTF8::LATIN_SMALL_LETTER_O_WITH_ACUTE,
        "\x98" => UTF8::LATIN_SMALL_LETTER_O_WITH_GRAVE,
        "\x99" => UTF8::LATIN_SMALL_LETTER_O_WITH_CIRCUMFLEX,
        "\x9A" => UTF8::LATIN_SMALL_LETTER_O_WITH_DIAERESIS,
        "\x9B" => UTF8::LATIN_SMALL_LETTER_O_WITH_TILDE,
        "\x9C" => UTF8::LATIN_SMALL_LETTER_U_WITH_ACUTE,
        "\x9D" => UTF8::LATIN_SMALL_LETTER_U_WITH_GRAVE,
        "\x9E" => UTF8::LATIN_SMALL_LETTER_U_WITH_CIRCUMFLEX,
        "\x9F" => UTF8::LATIN_SMALL_LETTER_U_WITH_DIAERESIS,
        "\xA0" => UTF8::DAGGER,
        "\xA1" => UTF8::DEGREE_SIGN,
        "\xA2" => UTF8::CENT_SIGN,
        "\xA3" => UTF8::POUND_SIGN,
        "\xA4" => UTF8::SECTION_SIGN,
        "\xA5" => UTF8::BULLET,
        "\xA6" => UTF8::PILCROW_SIGN,
        "\xA7" => UTF8::LATIN_SMALL_LETTER_SHARP_S,
        "\xA8" => UTF8::REGISTERED_SIGN,
        "\xA9" => UTF8::COPYRIGHT_SIGN,
        "\xAA" => UTF8::TRADE_MARK_SIGN,
        "\xAB" => UTF8::ACUTE_ACCENT,
        "\xAC" => UTF8::DIAERESIS,
        "\xAD" => UTF8::NOT_EQUAL_TO,
        "\xAE" => UTF8::LATIN_CAPITAL_LETTER_AE,
        "\xAF" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_STROKE,
        "\xB0" => UTF8::INFINITY,
        "\xB1" => UTF8::PLUS_MINUS_SIGN,
        "\xB2" => UTF8::LESS_THAN_OR_EQUAL_TO,
        "\xB3" => UTF8::GREATER_THAN_OR_EQUAL_TO,
        "\xB4" => UTF8::YEN_SIGN,
        "\xB5" => UTF8::MICRO_SIGN,
        "\xB6" => UTF8::PARTIAL_DIFFERENTIAL,
        "\xB7" => UTF8::N_ARY_SUMMATION,
        "\xB8" => UTF8::N_ARY_PRODUCT,
        "\xB9" => UTF8::GREEK_SMALL_LETTER_PI,
        "\xBA" => UTF8::INTEGRAL,
        "\xBB" => UTF8::FEMININE_ORDINAL_INDICATOR,
        "\xBC" => UTF8::MASCULINE_ORDINAL_INDICATOR,
        "\xBD" => UTF8::GREEK_CAPITAL_LETTER_OMEGA,
        "\xBE" => UTF8::LATIN_SMALL_LETTER_AE,
        "\xBF" => UTF8::LATIN_SMALL_LETTER_O_WITH_STROKE,
        "\xC0" => UTF8::INVERTED_QUESTION_MARK,
        "\xC1" => UTF8::INVERTED_EXCLAMATION_MARK,
        "\xC2" => UTF8::NOT_SIGN,
        "\xC3" => UTF8::SQUARE_ROOT,
        "\xC4" => UTF8::LATIN_SMALL_LETTER_F_WITH_HOOK,
        "\xC5" => UTF8::ALMOST_EQUAL_TO,
        "\xC6" => UTF8::INCREMENT,
        "\xC7" => UTF8::LEFT_POINTING_DOUBLE_ANGLE_QUOTATION_MARK,
        "\xC8" => UTF8::RIGHT_POINTING_DOUBLE_ANGLE_QUOTATION_MARK,
        "\xC9" => UTF8::HORIZONTAL_ELLIPSIS,
        "\xCA" => UTF8::NO_BREAK_SPACE,
        "\xCB" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_GRAVE,
        "\xCC" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_TILDE,
        "\xCD" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_TILDE,
        "\xCE" => UTF8::LATIN_CAPITAL_LIGATURE_OE,
        "\xCF" => UTF8::LATIN_SMALL_LIGATURE_OE,
        "\xD0" => UTF8::EN_DASH,
        "\xD1" => UTF8::EM_DASH,
        "\xD2" => UTF8::LEFT_DOUBLE_QUOTATION_MARK,
        "\xD3" => UTF8::RIGHT_DOUBLE_QUOTATION_MARK,
        "\xD4" => UTF8::LEFT_SINGLE_QUOTATION_MARK,
        "\xD5" => UTF8::RIGHT_SINGLE_QUOTATION_MARK,
        "\xD6" => UTF8::DIVISION_SIGN,
        "\xD7" => UTF8::LOZENGE,
        "\xD8" => UTF8::LATIN_SMALL_LETTER_Y_WITH_DIAERESIS,
        "\xD9" => UTF8::LATIN_CAPITAL_LETTER_Y_WITH_DIAERESIS,
        "\xDA" => UTF8::FRACTION_SLASH,
        "\xDB" => UTF8::EURO_SIGN,
        "\xDC" => UTF8::SINGLE_LEFT_POINTING_ANGLE_QUOTATION_MARK,
        "\xDD" => UTF8::SINGLE_RIGHT_POINTING_ANGLE_QUOTATION_MARK,
        "\xDE" => UTF8::LATIN_SMALL_LIGATURE_FI,
        "\xDF" => UTF8::LATIN_SMALL_LIGATURE_FL,
        "\xE0" => UTF8::DOUBLE_DAGGER,
        "\xE1" => UTF8::MIDDLE_DOT,
        "\xE2" => UTF8::SINGLE_LOW_9_QUOTATION_MARK,
        "\xE3" => UTF8::DOUBLE_LOW_9_QUOTATION_MARK,
        "\xE4" => UTF8::PER_MILLE_SIGN,
        "\xE5" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_CIRCUMFLEX,
        "\xE6" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_CIRCUMFLEX,
        "\xE7" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_ACUTE,
        "\xE8" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_DIAERESIS,
        "\xE9" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_GRAVE,
        "\xEA" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_ACUTE,
        "\xEB" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_CIRCUMFLEX,
        "\xEC" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_DIAERESIS,
        "\xED" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_GRAVE,
        "\xEE" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_ACUTE,
        "\xEF" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_CIRCUMFLEX,
        "\xF1" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_GRAVE,
        "\xF2" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_ACUTE,
        "\xF3" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_CIRCUMFLEX,
        "\xF4" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_GRAVE,
        "\xF5" => UTF8::LATIN_SMALL_LETTER_DOTLESS_I,
        "\xF6" => UTF8::MODIFIER_LETTER_CIRCUMFLEX_ACCENT,
        "\xF7" => UTF8::SMALL_TILDE,
        "\xF8" => UTF8::MACRON,
        "\xF9" => UTF8::BREVE,
        "\xFA" => UTF8::DOT_ABOVE,
        "\xFB" => UTF8::RING_ABOVE,
        "\xFC" => UTF8::CEDILLA,
        "\xFD" => UTF8::DOUBLE_ACUTE_ACCENT,
        "\xFE" => UTF8::OGONEK,
        "\xFF" => UTF8::CARON,
    ];
}