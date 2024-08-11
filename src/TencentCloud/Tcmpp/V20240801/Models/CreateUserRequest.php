<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser request structure.
 *
 * @method string getUserAccount() Obtain User account
 * @method void setUserAccount(string $UserAccount) Set User account
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 * @method integer getAccountType() Obtain User account type. 2: Platform administrator; 3: Ordinary member. 
 * @method void setAccountType(integer $AccountType) Set User account type. 2: Platform administrator; 3: Ordinary member. 
 * @method string getPassword() Obtain Account password. Use CreatePresetKey to get the public key to encrypt the password.
 * @method void setPassword(string $Password) Set Account password. Use CreatePresetKey to get the public key to encrypt the password.
 * @method string getKeyId() Obtain Call CreatePresetKey to get the keyID from RequestId
 * @method void setKeyId(string $KeyId) Set Call CreatePresetKey to get the keyID from RequestId
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string User account
     */
    public $UserAccount;

    /**
     * @var string User name
     */
    public $UserName;

    /**
     * @var integer User account type. 2: Platform administrator; 3: Ordinary member. 
     */
    public $AccountType;

    /**
     * @var string Account password. Use CreatePresetKey to get the public key to encrypt the password.
     */
    public $Password;

    /**
     * @var string Call CreatePresetKey to get the keyID from RequestId
     */
    public $KeyId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @param string $UserAccount User account
     * @param string $UserName User name
     * @param integer $AccountType User account type. 2: Platform administrator; 3: Ordinary member. 
     * @param string $Password Account password. Use CreatePresetKey to get the public key to encrypt the password.
     * @param string $KeyId Call CreatePresetKey to get the keyID from RequestId
     * @param string $PlatformId Platform ID
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
        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
