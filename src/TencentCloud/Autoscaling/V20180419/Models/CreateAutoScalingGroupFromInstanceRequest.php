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
 * CreateAutoScalingGroupFromInstance request structure.
 *
 * @method string getAutoScalingGroupName() Obtain The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen “-” and periods. It cannot exceed 55 bytes.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen “-” and periods. It cannot exceed 55 bytes.
 * @method string getInstanceId() Obtain The instance ID.
 * @method void setInstanceId(string $InstanceId) Set The instance ID.
 * @method integer getMinSize() Obtain The minimum number of instances. Value range: 0-2000.
 * @method void setMinSize(integer $MinSize) Set The minimum number of instances. Value range: 0-2000.
 * @method integer getMaxSize() Obtain The maximum number of instances. Value range: 0-2000.
 * @method void setMaxSize(integer $MaxSize) Set The maximum number of instances. Value range: 0-2000.
 * @method integer getDesiredCapacity() Obtain The desired capacity. Its value must be greater than the minimum and smaller than the maximum.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set The desired capacity. Its value must be greater than the minimum and smaller than the maximum.
 * @method boolean getInheritInstanceTag() Obtain Whether to inherit the instance tag. Default value: False
 * @method void setInheritInstanceTag(boolean $InheritInstanceTag) Set Whether to inherit the instance tag. Default value: False
 */
class CreateAutoScalingGroupFromInstanceRequest extends AbstractModel
{
    /**
     * @var string The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen “-” and periods. It cannot exceed 55 bytes.
     */
    public $AutoScalingGroupName;

    /**
     * @var string The instance ID.
     */
    public $InstanceId;

    /**
     * @var integer The minimum number of instances. Value range: 0-2000.
     */
    public $MinSize;

    /**
     * @var integer The maximum number of instances. Value range: 0-2000.
     */
    public $MaxSize;

    /**
     * @var integer The desired capacity. Its value must be greater than the minimum and smaller than the maximum.
     */
    public $DesiredCapacity;

    /**
     * @var boolean Whether to inherit the instance tag. Default value: False
     */
    public $InheritInstanceTag;

    /**
     * @param string $AutoScalingGroupName The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen “-” and periods. It cannot exceed 55 bytes.
     * @param string $InstanceId The instance ID.
     * @param integer $MinSize The minimum number of instances. Value range: 0-2000.
     * @param integer $MaxSize The maximum number of instances. Value range: 0-2000.
     * @param integer $DesiredCapacity The desired capacity. Its value must be greater than the minimum and smaller than the maximum.
     * @param boolean $InheritInstanceTag Whether to inherit the instance tag. Default value: False
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
        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("InheritInstanceTag",$param) and $param["InheritInstanceTag"] !== null) {
            $this->InheritInstanceTag = $param["InheritInstanceTag"];
        }
    }
}
