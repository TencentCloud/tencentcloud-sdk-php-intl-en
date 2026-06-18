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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetUserPassword request structure.
 *
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getHost() Obtain Host IP, IP range ending with % to denote permission for all IPs in the range
 * @method void setHost(string $Host) Set Host IP, IP range ending with % to denote permission for all IPs in the range
 * @method string getPassword() Obtain New password, required length 8-32, include at least two of English, digits and symbols.
 * @method void setPassword(string $Password) Set New password, required length 8-32, include at least two of English, digits and symbols.
 * @method string getEncryptedPassword() Obtain Encryption password
 * @method void setEncryptedPassword(string $EncryptedPassword) Set Encryption password
 */
class ResetUserPasswordRequest extends AbstractModel
{
    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Host IP, IP range ending with % to denote permission for all IPs in the range
     */
    public $Host;

    /**
     * @var string New password, required length 8-32, include at least two of English, digits and symbols.
     */
    public $Password;

    /**
     * @var string Encryption password
     */
    public $EncryptedPassword;

    /**
     * @param string $UserName Username.
     * @param string $InstanceId Instance ID.
     * @param string $Host Host IP, IP range ending with % to denote permission for all IPs in the range
     * @param string $Password New password, required length 8-32, include at least two of English, digits and symbols.
     * @param string $EncryptedPassword Encryption password
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }
    }
}
