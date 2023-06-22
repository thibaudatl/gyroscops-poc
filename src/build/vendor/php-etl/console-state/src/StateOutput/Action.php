<?php

declare(strict_types=1);

namespace Kiboko\Component\State\StateOutput;

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\ConsoleSectionOutput;

final class Action
{
    /** @var array<string, callable> */
    private array $metrics = [];
    private readonly ConsoleSectionOutput $section;

    public function __construct(
        private readonly ConsoleOutput $output,
        string $index,
        string $label,
    ) {
        $this->section = $this->output->section();
        $this->section->writeln('');
        $this->section->writeln(sprintf('<fg=green> % 2s. %-50s</>', $index, $label));
    }

    public function addMetric(string $label, callable $callback): self
    {
        $this->metrics[$label] = $callback;

        return $this;
    }

    public function update(): void
    {
        $this->section
            ->writeln('     '.implode(', ', array_map(
                fn (string $label, callable $callback) => sprintf('%s <fg=cyan>%d</>', $label, ($callback)()),
                array_keys($this->metrics),
                array_values($this->metrics),
            )))
        ;
    }
}
