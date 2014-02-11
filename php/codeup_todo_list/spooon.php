<?php
/**
 * Spooon.php
 *
 * This is a file to hold things.
 *
 * @package MyProject
 * @subpackage Common
 * @license http://opensource.org/licenses/MIT The MIT License
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */

/**
 * Finds and returns user by ID or username
 *
 * @param int|string $user Either an ID or a username
 * @param PDO $pdo A valid PDO object
 * @return User Returns User object or null if not found
 */
function getUser($user, PDO $pdo)
{
    // ...
    if ($isFound) {
        return new User(...);
    }
    return null;
}
?>