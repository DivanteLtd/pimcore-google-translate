<?php
/**
 * @author Piotr Rugała <piotr@isedo.pl>
 * @copyright Copyright (c) 2021 Divante Ltd. (https://divante.co)
 */

declare(strict_types=1);

namespace DivanteTranslateBundle\Provider;

interface ProviderInterface
{
    public function translate(string $data, string $targetLanguage): string;
    public function getName(): string;
}
