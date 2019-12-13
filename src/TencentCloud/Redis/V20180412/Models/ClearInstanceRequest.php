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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getPassword() 获取Redis instance password (this parameter is not required for password-free instances but for password-enabled instances)
 * @method void setPassword(string $Password) 设置Redis instance password (this parameter is not required for password-free instances but for password-enabled instances)
 */

/**
 *ClearInstance request structure.
 */
class ClearInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Redis instance password (this parameter is not required for password-free instances but for password-enabled instances)
     */
    public $Password;
    /**
     * @param string $InstanceId Instance ID
     * @param string $Password Redis instance password (this parameter is not required for password-free instances but for password-enabled instances)
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
