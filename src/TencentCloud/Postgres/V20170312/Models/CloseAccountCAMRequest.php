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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseAccountCAM request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getUserName() Obtain Account name of the CAM service to be disabled.
 * @method void setUserName(string $UserName) Set Account name of the CAM service to be disabled.
 * @method string getPassword() Obtain Specifies the new password necessary to log on to this account after CAM is disabled.
 * @method void setPassword(string $Password) Set Specifies the new password necessary to log on to this account after CAM is disabled.
 * @method boolean getPasswordEncrypt() Obtain Indicates whether the password is encrypted.
 * @method void setPasswordEncrypt(boolean $PasswordEncrypt) Set Indicates whether the password is encrypted.
 */
class CloseAccountCAMRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Account name of the CAM service to be disabled.
     */
    public $UserName;

    /**
     * @var string Specifies the new password necessary to log on to this account after CAM is disabled.
     */
    public $Password;

    /**
     * @var boolean Indicates whether the password is encrypted.
     */
    public $PasswordEncrypt;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $UserName Account name of the CAM service to be disabled.
     * @param string $Password Specifies the new password necessary to log on to this account after CAM is disabled.
     * @param boolean $PasswordEncrypt Indicates whether the password is encrypted.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordEncrypt",$param) and $param["PasswordEncrypt"] !== null) {
            $this->PasswordEncrypt = $param["PasswordEncrypt"];
        }
    }
}
