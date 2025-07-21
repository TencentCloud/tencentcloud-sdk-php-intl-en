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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDesiredCapacity request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method integer getDesiredCapacity() Obtain Expected number of instances, value ranges from 0 to 2000, to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Expected number of instances, value ranges from 0 to 2000, to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method integer getMinSize() Obtain Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
 * @method integer getMaxSize() Obtain Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
 * @method void setMaxSize(integer $MaxSize) Set Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
 */
class ModifyDesiredCapacityRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupId;

    /**
     * @var integer Expected number of instances, value ranges from 0 to 2000, to meet MaxSize >= DesiredCapacity >= MinSize.
     */
    public $DesiredCapacity;

    /**
     * @var integer Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
     */
    public $MinSize;

    /**
     * @var integer Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
     */
    public $MaxSize;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     * @param integer $DesiredCapacity Expected number of instances, value ranges from 0 to 2000, to meet MaxSize >= DesiredCapacity >= MinSize.
     * @param integer $MinSize Minimum number of instances. value range: [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize at the same time.
     * @param integer $MaxSize Maximum instance count. value range [0,2000]. to meet MaxSize >= DesiredCapacity >= MinSize.
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
