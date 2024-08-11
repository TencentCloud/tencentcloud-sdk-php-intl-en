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
 * CreateTeamMember request structure.
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserAccount() Obtain User account
 * @method void setUserAccount(string $UserAccount) Set User account
 * @method string getUserPassword() Obtain Account password. Use CreatePresetKey to get publick key to encrypt the password.
 * @method void setUserPassword(string $UserPassword) Set Account password. Use CreatePresetKey to get publick key to encrypt the password.
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method integer getRoleId() Obtain Team role
 * @method void setRoleId(integer $RoleId) Set Team role
 * @method string getKeyId() Obtain Call CreatePresetKey to get the keyID from RequestId
 * @method void setKeyId(string $KeyId) Set Call CreatePresetKey to get the keyID from RequestId
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class CreateTeamMemberRequest extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string User account
     */
    public $UserAccount;

    /**
     * @var string Account password. Use CreatePresetKey to get publick key to encrypt the password.
     */
    public $UserPassword;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var integer Team role
     */
    public $RoleId;

    /**
     * @var string Call CreatePresetKey to get the keyID from RequestId
     */
    public $KeyId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @param string $UserName Username
     * @param string $UserAccount User account
     * @param string $UserPassword Account password. Use CreatePresetKey to get publick key to encrypt the password.
     * @param string $TeamId Team ID
     * @param integer $RoleId Team role
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }

        if (array_key_exists("UserPassword",$param) and $param["UserPassword"] !== null) {
            $this->UserPassword = $param["UserPassword"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
