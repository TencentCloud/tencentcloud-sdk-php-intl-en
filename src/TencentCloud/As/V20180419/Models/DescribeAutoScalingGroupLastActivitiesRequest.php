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
 * DescribeAutoScalingGroupLastActivities request structure.
 *
 * @method array getAutoScalingGroupIds() Obtain Auto scaling group ID list. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) Set Auto scaling group ID list. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving AutoScalingGroupId from the returned information.
 * @method boolean getExcludeCancelledActivity() Obtain Excludes cancelled type activities when querying. Default value is false, which means cancelled type activities are not excluded.
 * @method void setExcludeCancelledActivity(boolean $ExcludeCancelledActivity) Set Excludes cancelled type activities when querying. Default value is false, which means cancelled type activities are not excluded.
 */
class DescribeAutoScalingGroupLastActivitiesRequest extends AbstractModel
{
    /**
     * @var array Auto scaling group ID list. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupIds;

    /**
     * @var boolean Excludes cancelled type activities when querying. Default value is false, which means cancelled type activities are not excluded.
     */
    public $ExcludeCancelledActivity;

    /**
     * @param array $AutoScalingGroupIds Auto scaling group ID list. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving AutoScalingGroupId from the returned information.
     * @param boolean $ExcludeCancelledActivity Excludes cancelled type activities when querying. Default value is false, which means cancelled type activities are not excluded.
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

        if (array_key_exists("ExcludeCancelledActivity",$param) and $param["ExcludeCancelledActivity"] !== null) {
            $this->ExcludeCancelledActivity = $param["ExcludeCancelledActivity"];
        }
    }
}
