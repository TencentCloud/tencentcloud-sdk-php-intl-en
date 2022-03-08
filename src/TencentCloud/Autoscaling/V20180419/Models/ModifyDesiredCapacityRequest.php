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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDesiredCapacity request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method integer getDesiredCapacity() Obtain Desired capacity
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Desired capacity
 * @method integer getMinSize() Obtain Minimum number of instances. Value range: 0-2000.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances. Value range: 0-2000.
 * @method integer getMaxSize() Obtain Maximum number of instances. Value range: 0-2000.
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of instances. Value range: 0-2000.
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
     * @var integer Minimum number of instances. Value range: 0-2000.
     */
    public $MinSize;

    /**
     * @var integer Maximum number of instances. Value range: 0-2000.
     */
    public $MaxSize;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param integer $DesiredCapacity Desired capacity
     * @param integer $MinSize Minimum number of instances. Value range: 0-2000.
     * @param integer $MaxSize Maximum number of instances. Value range: 0-2000.
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
