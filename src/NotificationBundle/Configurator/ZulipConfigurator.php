<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) Pierre du Plessis <open-source@solidworx.co>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

// !! This file is autogenerated. Do not edit. !!

namespace SolidInvoice\NotificationBundle\Configurator;

use SolidInvoice\NotificationBundle\Form\Type\Transport\ZulipType;
use Symfony\Component\Notifier\Transport\Dsn;
use function sprintf;
use function urlencode;

/**
 * @codeCoverageIgnore
 */
final class ZulipConfigurator implements ConfiguratorInterface
{
    public static function getName(): string
    {
        return 'Zulip';
    }

    public static function getType(): string
    {
        return 'chatter';
    }

    public function getForm(): string
    {
        return ZulipType::class;
    }

    /**
     * @param array{ email: string, token: string, host: string, channel: string } $config
     */
    public function configure(array $config): Dsn
    {
        return new Dsn(sprintf('zulip://%s:%s@%s?channel=%s', urlencode($config['email']), urlencode($config['token']), urlencode($config['host']), urlencode($config['channel'])));
    }
}
