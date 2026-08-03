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
 * Create account
 *
 * @method string getAccountName() Obtain <p>Account name, containing letters, digits, and underscores, starting with a letter, ending with a letter or digit, length 1-30</p>
 * @method void setAccountName(string $AccountName) Set <p>Account name, containing letters, digits, and underscores, starting with a letter, ending with a letter or digit, length 1-30</p>
 * @method string getHost() Obtain <p>host (% or ipv4 address)</p>
 * @method void setHost(string $Host) Set <p>host (% or ipv4 address)</p>
 * @method string getAccountPassword() Obtain <p>Password. The length range is 8 to 64 characters.</p>
 * @method void setAccountPassword(string $AccountPassword) Set <p>Password. The length range is 8 to 64 characters.</p>
 * @method integer getPasswordRotation() Obtain <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
 * @method void setPasswordRotation(integer $PasswordRotation) Set <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method integer getMaxUserConnections() Obtain <p>Maximum user connections cannot be greater than 10240</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set <p>Maximum user connections cannot be greater than 10240</p>
 */
class NewAccount extends AbstractModel
{
    /**
     * @var string <p>Account name, containing letters, digits, and underscores, starting with a letter, ending with a letter or digit, length 1-30</p>
     */
    public $AccountName;

    /**
     * @var string <p>host (% or ipv4 address)</p>
     */
    public $Host;

    /**
     * @var string <p>Password. The length range is 8 to 64 characters.</p>
     */
    public $AccountPassword;

    /**
     * @var integer <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
     */
    public $PasswordRotation;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Maximum user connections cannot be greater than 10240</p>
     */
    public $MaxUserConnections;

    /**
     * @param string $AccountName <p>Account name, containing letters, digits, and underscores, starting with a letter, ending with a letter or digit, length 1-30</p>
     * @param string $Host <p>host (% or ipv4 address)</p>
     * @param string $AccountPassword <p>Password. The length range is 8 to 64 characters.</p>
     * @param integer $PasswordRotation <p>Whether password rotation is enabled (0: turn off; 1: turn on)</p>
     * @param string $Description <p>Description.</p>
     * @param integer $MaxUserConnections <p>Maximum user connections cannot be greater than 10240</p>
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

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("PasswordRotation",$param) and $param["PasswordRotation"] !== null) {
            $this->PasswordRotation = $param["PasswordRotation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
