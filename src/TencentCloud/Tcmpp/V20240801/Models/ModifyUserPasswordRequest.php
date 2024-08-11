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
 * ModifyUserPassword request structure.
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getPassword() Obtain Account password. Use CreatePresetKey to get publick key to encrypt the password.
 * @method void setPassword(string $Password) Set Account password. Use CreatePresetKey to get publick key to encrypt the password.
 * @method string getKeyId() Obtain Call CreatePresetKey to get the keyID from RequestId
 * @method void setKeyId(string $KeyId) Set Call CreatePresetKey to get the keyID from RequestId
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class ModifyUserPasswordRequest extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string Account password. Use CreatePresetKey to get publick key to encrypt the password.
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
     * @param string $UserId User ID
     * @param string $Password Account password. Use CreatePresetKey to get publick key to encrypt the password.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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
