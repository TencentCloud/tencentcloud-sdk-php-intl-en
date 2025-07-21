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
 * DescribeAutoScalingAdvices request structure.
 *
 * @method array getAutoScalingGroupIds() Obtain The scaling group list to be queried, with an upper limit of 100. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) Set The scaling group list to be queried, with an upper limit of 100. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
 */
class DescribeAutoScalingAdvicesRequest extends AbstractModel
{
    /**
     * @var array The scaling group list to be queried, with an upper limit of 100. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupIds;

    /**
     * @param array $AutoScalingGroupIds The scaling group list to be queried, with an upper limit of 100. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
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
        if (array_key_exists("AutoScalingGroupIds",$param) and $param["AutoScalingGroupIds"] !== null) {
            $this->AutoScalingGroupIds = $param["AutoScalingGroupIds"];
        }
    }
}
