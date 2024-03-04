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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceAccountPassword request structure.
 *
 * @method string getRegistryId() Obtain Instance ID.
 * @method void setRegistryId(string $RegistryId) Set Instance ID.
 * @method string getName() Obtain Service level account name.
 * @method void setName(string $Name) Set Service level account name.
 * @method boolean getRandom() Obtain Whether to randomly generate a password.
 * @method void setRandom(boolean $Random) Set Whether to randomly generate a password.
 * @method string getPassword() Obtain Service level account password, 8 to 20 characters, contains at least one uppercase letter, one lowercase letter, and one number.
 * @method void setPassword(string $Password) Set Service level account password, 8 to 20 characters, contains at least one uppercase letter, one lowercase letter, and one number.
 */
class ModifyServiceAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $RegistryId;

    /**
     * @var string Service level account name.
     */
    public $Name;

    /**
     * @var boolean Whether to randomly generate a password.
     */
    public $Random;

    /**
     * @var string Service level account password, 8 to 20 characters, contains at least one uppercase letter, one lowercase letter, and one number.
     */
    public $Password;

    /**
     * @param string $RegistryId Instance ID.
     * @param string $Name Service level account name.
     * @param boolean $Random Whether to randomly generate a password.
     * @param string $Password Service level account password, 8 to 20 characters, contains at least one uppercase letter, one lowercase letter, and one number.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Random",$param) and $param["Random"] !== null) {
            $this->Random = $param["Random"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
