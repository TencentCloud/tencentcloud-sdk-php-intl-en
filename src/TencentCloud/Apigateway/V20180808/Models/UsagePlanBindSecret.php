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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key bound to usage plan
 *
 * @method string getAccessKeyId() Obtain Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccessKeyId(string $AccessKeyId) Set Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSecretName() Obtain Key name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecretName(string $SecretName) Set Key name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Key status. 0: disabled. 1: enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Key status. 0: disabled. 1: enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanBindSecret extends AbstractModel
{
    /**
     * @var string Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccessKeyId;

    /**
     * @var string Key name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecretName;

    /**
     * @var integer Key status. 0: disabled. 1: enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $AccessKeyId Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SecretName Key name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Key status. 0: disabled. 1: enabled.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
