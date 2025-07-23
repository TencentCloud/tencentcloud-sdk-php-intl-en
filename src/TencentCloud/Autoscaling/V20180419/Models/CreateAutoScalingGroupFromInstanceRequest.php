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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoScalingGroupFromInstance request structure.
 *
 * @method string getAutoScalingGroupName() Obtain The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen "-" and periods. It cannot exceed 55 bytes.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen "-" and periods. It cannot exceed 55 bytes.
 * @method string getInstanceId() Obtain Instance ID. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
 * @method integer getMinSize() Obtain Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
 * @method integer getMaxSize() Obtain Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method void setMaxSize(integer $MaxSize) Set Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method integer getDesiredCapacity() Obtain Expected number of instances, value ranges from 0 to 2000, default value equals current MinSize, to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Expected number of instances, value ranges from 0 to 2000, default value equals current MinSize, to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method boolean getInheritInstanceTag() Obtain Whether to inherit the instance tag. Default value: False
 * @method void setInheritInstanceTag(boolean $InheritInstanceTag) Set Whether to inherit the instance tag. Default value: False
 */
class CreateAutoScalingGroupFromInstanceRequest extends AbstractModel
{
    /**
     * @var string The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen "-" and periods. It cannot exceed 55 bytes.
     */
    public $AutoScalingGroupName;

    /**
     * @var string Instance ID. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
     */
    public $InstanceId;

    /**
     * @var integer Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
     */
    public $MinSize;

    /**
     * @var integer Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
     */
    public $MaxSize;

    /**
     * @var integer Expected number of instances, value ranges from 0 to 2000, default value equals current MinSize, to meet MaxSize >= DesiredCapacity >= MinSize.
     */
    public $DesiredCapacity;

    /**
     * @var boolean Whether to inherit the instance tag. Default value: False
     */
    public $InheritInstanceTag;

    /**
     * @param string $AutoScalingGroupName The scaling group name. It must be unique under your account. The name can only contain letters, numbers, underscore, hyphen "-" and periods. It cannot exceed 55 bytes.
     * @param string $InstanceId Instance ID. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
     * @param integer $MinSize Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
     * @param integer $MaxSize Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
     * @param integer $DesiredCapacity Expected number of instances, value ranges from 0 to 2000, default value equals current MinSize, to meet MaxSize >= DesiredCapacity >= MinSize.
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
