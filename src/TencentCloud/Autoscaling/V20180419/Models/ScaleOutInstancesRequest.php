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
 * ScaleOutInstances request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Specifies the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://www.tencentcloud.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Specifies the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://www.tencentcloud.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
 * @method integer getScaleOutNumber() Obtain Number of resource instances to scale out. the static value range of this parameter is [1,2000]. this parameter must not be larger than the difference between the expected number and the maximum value. for example, if the expected number of the scaling group is 20 and the maximum value is 100, the valid values are [1,80].
 * @method void setScaleOutNumber(integer $ScaleOutNumber) Set Number of resource instances to scale out. the static value range of this parameter is [1,2000]. this parameter must not be larger than the difference between the expected number and the maximum value. for example, if the expected number of the scaling group is 20 and the maximum value is 100, the valid values are [1,80].
 */
class ScaleOutInstancesRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Specifies the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://www.tencentcloud.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var integer Number of resource instances to scale out. the static value range of this parameter is [1,2000]. this parameter must not be larger than the difference between the expected number and the maximum value. for example, if the expected number of the scaling group is 20 and the maximum value is 100, the valid values are [1,80].
     */
    public $ScaleOutNumber;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Specifies the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://www.tencentcloud.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
     * @param integer $ScaleOutNumber Number of resource instances to scale out. the static value range of this parameter is [1,2000]. this parameter must not be larger than the difference between the expected number and the maximum value. for example, if the expected number of the scaling group is 20 and the maximum value is 100, the valid values are [1,80].
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

        if (array_key_exists("ScaleOutNumber",$param) and $param["ScaleOutNumber"] !== null) {
            $this->ScaleOutNumber = $param["ScaleOutNumber"];
        }
    }
}
