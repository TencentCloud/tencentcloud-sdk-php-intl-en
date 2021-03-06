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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin access authentication for S3 bucket.
 *
 * @method string getSwitch() Obtain Switch, which can be set to on or off.
 * @method void setSwitch(string $Switch) Set Switch, which can be set to on or off.
 * @method string getAccessKey() Obtain Access ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccessKey(string $AccessKey) Set Access ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain Key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set Key.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AwsPrivateAccess extends AbstractModel
{
    /**
     * @var string Switch, which can be set to on or off.
     */
    public $Switch;

    /**
     * @var string Access ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccessKey;

    /**
     * @var string Key.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @param string $Switch Switch, which can be set to on or off.
     * @param string $AccessKey Access ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey Key.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
