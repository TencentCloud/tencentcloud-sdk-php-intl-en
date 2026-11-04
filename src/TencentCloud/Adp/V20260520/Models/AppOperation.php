<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * App operation information
 *
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method string getCreatorUin() Obtain Creator UIN
 * @method void setCreatorUin(string $CreatorUin) Set Creator UIN
 * @method string getCreatorUserAccount() Obtain Creator account (for private scenarios)
 * @method void setCreatorUserAccount(string $CreatorUserAccount) Set Creator account (for private scenarios)
 * @method string getUpdateTime() Obtain Last modified (Unix timestamp in seconds).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified (Unix timestamp in seconds).
 * @method string getUpdater() Obtain Last modified by
 * @method void setUpdater(string $Updater) Set Last modified by
 * @method string getUpdaterUin() Obtain Modifier UIN
 * @method void setUpdaterUin(string $UpdaterUin) Set Modifier UIN
 */
class AppOperation extends AbstractModel
{
    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var string Creator UIN
     */
    public $CreatorUin;

    /**
     * @var string Creator account (for private scenarios)
     */
    public $CreatorUserAccount;

    /**
     * @var string Last modified (Unix timestamp in seconds).
     */
    public $UpdateTime;

    /**
     * @var string Last modified by
     */
    public $Updater;

    /**
     * @var string Modifier UIN
     */
    public $UpdaterUin;

    /**
     * @param string $Creator Creator
     * @param string $CreatorUin Creator UIN
     * @param string $CreatorUserAccount Creator account (for private scenarios)
     * @param string $UpdateTime Last modified (Unix timestamp in seconds).
     * @param string $Updater Last modified by
     * @param string $UpdaterUin Modifier UIN
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreatorUserAccount",$param) and $param["CreatorUserAccount"] !== null) {
            $this->CreatorUserAccount = $param["CreatorUserAccount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }

        if (array_key_exists("UpdaterUin",$param) and $param["UpdaterUin"] !== null) {
            $this->UpdaterUin = $param["UpdaterUin"];
        }
    }
}
