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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access key
 *
 * @method string getAccessKeyId() Obtain Access key ID
 * @method void setAccessKeyId(string $AccessKeyId) Set Access key ID
 * @method string getSecretAccessKey() Obtain Access key, which is visible only when it is created. Keep it properly.
 * @method void setSecretAccessKey(string $SecretAccessKey) Set Access key, which is visible only when it is created. Keep it properly.
 * @method string getStatus() Obtain Key status. Valid values: `Active` (activated), `Inactive` (not activated).
 * @method void setStatus(string $Status) Set Key status. Valid values: `Active` (activated), `Inactive` (not activated).
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class AccessKeyDetail extends AbstractModel
{
    /**
     * @var string Access key ID
     */
    public $AccessKeyId;

    /**
     * @var string Access key, which is visible only when it is created. Keep it properly.
     */
    public $SecretAccessKey;

    /**
     * @var string Key status. Valid values: `Active` (activated), `Inactive` (not activated).
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param string $AccessKeyId Access key ID
     * @param string $SecretAccessKey Access key, which is visible only when it is created. Keep it properly.
     * @param string $Status Key status. Valid values: `Active` (activated), `Inactive` (not activated).
     * @param string $CreateTime Creation time
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

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
