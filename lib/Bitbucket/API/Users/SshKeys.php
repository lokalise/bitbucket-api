<?php

/*
 * This file is part of the bitbucket_api package.
 *
 * (c) Alexandru G. <alex@gentle.ro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\API\Users;

use Bitbucket\API\Api;

/**
 * SshKeys class
 *
 * Manipulate the ssh-keys on an individual or team account.
 *
 * @author  Alexandru G.    <alex@gentle.ro>
 */
class SshKeys extends Api
{
    /**
     * Gets a list of the keys associated with an account.
     *
     * @access public
     * @param  string $account The name of an individual or team account.
     * @return mixed
     */
    public function get($account)
    {
        return $this->requestGet(
            sprintf('users/%s/ssh-keys', $account)
        );
    }

    /**
     * Create a key on the specified account.
     *
     * @access public
     * @param  string $account The name of an individual or team account.
     * @param  string $key     The key value.
     * @param  string $label   A label for the key. (optional)
     * @return mixed
     */
    public function create($account, $key, $label = null)
    {
        $params['key'] = $key;

        if (!is_null($label)) {
            $params['label'] = $label;
        }

        return $this->requestPost(
            sprintf('users/%s/ssh-keys', $account),
            $params
        );
    }
}
