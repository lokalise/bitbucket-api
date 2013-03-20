<?php

/*
 * This file is part of the bitbucket-api package.
 *
 * (c) Alexandru G. <alex@gentle.ro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gentle\Bitbucket\API\Repo\Issues;

use Gentle\Bitbucket\API;

/**
 * Milestones class
 *
 * @author  Alexandru G.    <alex@gentle.ro>
 */
class Milestones extends API\Api
{
    /**
     * Get a list of milestones
     *
     * Get a list of milestones associated with the issue tracker
     *
     * @access public
     * @param  string $account The team or individual account owning the repository.
     * @param  string $repo    The repository identifier.
     * @return mixed
     */
    public function all($account, $repo)
    {
        return $this->requestGet(
            sprintf('repositories/%s/%s/issues/milestones', $account, $repo)
        );
    }

    /**
     * Get an individual milestone
     *
     * @access public
     * @param  string $account     The team or individual account owning the repository.
     * @param  string $repo        The repository identifier.
     * @param  int    $milestoneID The milestone identifier.
     * @return mixed
     */
    public function get($account, $repo, $milestoneID)
    {
        return $this->requestGet(
            sprintf('repositories/%s/%s/issues/milestones/%d', $account, $repo, $milestoneID)
        );
    }

    /**
     * Add a new milestone
     *
     * @access public
     * @param  string $account The team or individual account owning the repository.
     * @param  string $repo    The repository identifier.
     * @param  string $name    The milestone name to create.
     * @return mixed
     */
    public function create($account, $repo, $name)
    {
        return $this->requestPost(
            sprintf('repositories/%s/%s/issues/milestones', $account, $repo),
            array('name' => $name)
        );
    }
}
