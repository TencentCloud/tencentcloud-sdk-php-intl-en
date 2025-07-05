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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The customer provides cos authentication information.
 *
 * @method string getSecretId() Obtain ID in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretId(string $SecretId) Set ID in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain Key in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set Key in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCosPath() Obtain Path in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosPath(string $CosPath) Set Path in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CosSourceInfo extends AbstractModel
{
    /**
     * @var string ID in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretId;

    /**
     * @var string Key in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string Path in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosPath;

    /**
     * @param string $SecretId ID in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey Key in cos authentication
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CosPath Path in cos authentication
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }
    }
}
