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
 * DataSight Intranet anonymous login account information
 *
 * @method string getSecretId() Obtain <p>Anonymous login account secretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretId(string $SecretId) Set <p>Anonymous login account secretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain <p>Anonymous login account secretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set <p>Anonymous login account secretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AnonymousLoginInfo extends AbstractModel
{
    /**
     * @var string <p>Anonymous login account secretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretId;

    /**
     * @var string <p>Anonymous login account secretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @param string $SecretId <p>Anonymous login account secretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey <p>Anonymous login account secretKey</p>
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
    }
}
