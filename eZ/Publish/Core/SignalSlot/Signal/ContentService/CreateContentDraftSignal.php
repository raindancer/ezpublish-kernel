<?php
/**
 * CreateContentDraftSignal class
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateContentDraftSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentService
 */
class CreateContentDraftSignal extends Signal
{
    /**
     * ContentId
     *
     * @var mixed
     */
    public $contentId;

    /**
     * Version Number
     *
     * @var int
     */
    public $versionNo;

    /**
     * UserId
     *
     * @var mixed
     */
    public $userId;
}
