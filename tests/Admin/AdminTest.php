<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   tests
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Help\tests\Admin;

/**
 * @internal
 */
class AdminTest extends \PHPUnit\Framework\TestCase
{
    protected const MODULE_NAME = 'Help';

    protected const URI_LOAD = 'http://127.0.0.1/en/backend/help';

    use \Modules\tests\ModuleTestTrait;
}
