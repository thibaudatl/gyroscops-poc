<?php declare(strict_types=1);

namespace functional\Factory;

use Kiboko\Contract\Configurator\InvalidConfigurationException;
use Kiboko\Plugin\CSV;
use PHPUnit\Framework\TestCase;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

final class ExtractorTest extends TestCase
{
    public static function configProvider()
    {
        yield [
            'expected' => [
                'file_path' => 'input.csv',
            ],
            'actual' => [
                'extractor' => [
                    'file_path' => 'input.csv'
                ]
            ]
        ];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('configProvider')]
    public function testWithConfiguration(array $expected, array $actual): void
    {
        $factory = new CSV\Factory\Extractor(new ExpressionLanguage());
        $normalizedConfig = $factory->normalize($actual);

        $this->assertEquals(
            new CSV\Configuration\Extractor(),
            $factory->configuration()
        );

        $this->assertEquals(
            $expected,
            $normalizedConfig
        );

        $this->assertTrue($factory->validate($actual));
    }

    public function testFailToNormalize(): void
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('The child config "file_path" under "extractor" must be configured.');

        $wrongConfig = [
            'extractor' => []
        ];

        $factory = new CSV\Factory\Extractor(new ExpressionLanguage());
        $factory->normalize($wrongConfig);
    }

    public function testFailToValidate(): void
    {
        $factory = new CSV\Factory\Extractor(new ExpressionLanguage());
        $this->assertFalse($factory->validate([]));
    }
}
