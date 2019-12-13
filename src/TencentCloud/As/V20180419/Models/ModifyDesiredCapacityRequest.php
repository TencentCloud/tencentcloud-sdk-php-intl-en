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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoScalingGroupId() 获取Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置Auto scaling group ID
 * @method integer getDesiredCapacity() 获取Desired capacity
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置Desired capacity
 */

/**
 *ModifyDesiredCapacity request structure.
 */
class ModifyDesiredCapacityRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var integer Desired capacity
     */
    public $DesiredCapacity;
    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param integer $DesiredCapacity Desired capacity
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }
    }
}
