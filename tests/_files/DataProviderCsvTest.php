<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class DataProviderCsvTest extends TestCase
{
    /**
     * @test
     * @dataProviderCsv bool,true
     * @dataProviderCsv bool,false
     * @dataProviderCsv int,123
     * @dataProviderCsv float,123.12
     * @dataProviderCsv string,foo
     */
    public function it_best_guesses_types(string $expectedType, $value): void
    {
        $method = "assertIs".ucfirst($expectedType);

        $this->$method($value);
    }
}
