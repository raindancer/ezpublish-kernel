<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\ContentValidationException class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\API\Repository\Exceptions;

/**
 * This Exception is thrown on create or update content one or more given fields are not valid
 */
abstract class ContentValidationException extends ForbiddenException
{
}
