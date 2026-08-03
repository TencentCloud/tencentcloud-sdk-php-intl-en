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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database account information
 *
 * @method string getAccountName() Obtain <p>Database account name.</p>
 * @method void setAccountName(string $AccountName) Set <p>Database account name.</p>
 * @method string getHost() Obtain <p>host</p>
 * @method void setHost(string $Host) Set <p>host</p>
 * @method string getDescription() Obtain <p>Database account description.</p>
 * @method void setDescription(string $Description) Set <p>Database account description.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getMaxUserConnections() Obtain <p>Maximum user connections</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set <p>Maximum user connections</p>
 * @method integer getPasswordRotation() Obtain <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
 * @method void setPasswordRotation(integer $PasswordRotation) Set <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
 */
class Account extends AbstractModel
{
    /**
     * @var string <p>Database account name.</p>
     */
    public $AccountName;

    /**
     * @var string <p>host</p>
     */
    public $Host;

    /**
     * @var string <p>Database account description.</p>
     */
    public $Description;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Maximum user connections</p>
     */
    public $MaxUserConnections;

    /**
     * @var integer <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
     */
    public $PasswordRotation;

    /**
     * @param string $AccountName <p>Database account name.</p>
     * @param string $Host <p>host</p>
     * @param string $Description <p>Database account description.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $MaxUserConnections <p>Maximum user connections</p>
     * @param integer $PasswordRotation <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }

        if (array_key_exists("PasswordRotation",$param) and $param["PasswordRotation"] !== null) {
            $this->PasswordRotation = $param["PasswordRotation"];
        }
    }
}
