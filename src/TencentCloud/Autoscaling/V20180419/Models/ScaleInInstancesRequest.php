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
 * ScaleInInstances request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method integer getScaleInNumber() Obtain Number of resource instances to scale in. this parameter has a static value range of [1,2000] and must not be larger than the difference between the desired number and the minimum value. for example, if the scaling group desired number is 100 and the minimum value is 20, the permissible range is [1,80].
 * @method void setScaleInNumber(integer $ScaleInNumber) Set Number of resource instances to scale in. this parameter has a static value range of [1,2000] and must not be larger than the difference between the desired number and the minimum value. for example, if the scaling group desired number is 100 and the minimum value is 20, the permissible range is [1,80].
 */
class ScaleInInstancesRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var integer Number of resource instances to scale in. this parameter has a static value range of [1,2000] and must not be larger than the difference between the desired number and the minimum value. for example, if the scaling group desired number is 100 and the minimum value is 20, the permissible range is [1,80].
     */
    public $ScaleInNumber;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     * @param integer $ScaleInNumber Number of resource instances to scale in. this parameter has a static value range of [1,2000] and must not be larger than the difference between the desired number and the minimum value. for example, if the scaling group desired number is 100 and the minimum value is 20, the permissible range is [1,80].
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

        if (array_key_exists("ScaleInNumber",$param) and $param["ScaleInNumber"] !== null) {
            $this->ScaleInNumber = $param["ScaleInNumber"];
        }
    }
}
