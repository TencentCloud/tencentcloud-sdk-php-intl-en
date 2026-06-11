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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of the third-party verification login role for DataSight
 *
 * @method string getRoleName() Obtain <p>Auth role name</p>
 * @method void setRoleName(string $RoleName) Set <p>Auth role name</p>
 * @method string getSecretId() Obtain <p>SecretId of the permission corresponding to the Auth role</p>
 * @method void setSecretId(string $SecretId) Set <p>SecretId of the permission corresponding to the Auth role</p>
 * @method string getSecretKey() Obtain <p>SecretKey of the permission corresponding to the Auth role</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set <p>SecretKey of the permission corresponding to the Auth role</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AuthRoleInfo extends AbstractModel
{
    /**
     * @var string <p>Auth role name</p>
     */
    public $RoleName;

    /**
     * @var string <p>SecretId of the permission corresponding to the Auth role</p>
     */
    public $SecretId;

    /**
     * @var string <p>SecretKey of the permission corresponding to the Auth role</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @param string $RoleName <p>Auth role name</p>
     * @param string $SecretId <p>SecretId of the permission corresponding to the Auth role</p>
     * @param string $SecretKey <p>SecretKey of the permission corresponding to the Auth role</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
