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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forward affinity info in availability zone
 *
 * @method boolean getEnable() Obtain Whether to enable availability zone forwarding affinity. true: enable availability zone forwarding affinity; false: enable availability zone forwarding affinity.
 * @method void setEnable(boolean $Enable) Set Whether to enable availability zone forwarding affinity. true: enable availability zone forwarding affinity; false: enable availability zone forwarding affinity.
 * @method integer getExitRatio() Obtain The availability zone forwarding affinity failure threshold. When the healthy ratio of backend services in an availability zone is less than this threshold, the Cloud Load Balancer will exit availability zone forwarding affinity and convert to forwarding across all availability zones.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExitRatio(integer $ExitRatio) Set The availability zone forwarding affinity failure threshold. When the healthy ratio of backend services in an availability zone is less than this threshold, the Cloud Load Balancer will exit availability zone forwarding affinity and convert to forwarding across all availability zones.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReentryRatio() Obtain The threshold for re-enabling availability zone forwarding affinity. When forwarding is in all availability zones and the proportion of healthy backend services in the Cloud Load Balancer availability zone is greater than or equal to this threshold, the CLB will enter availability zone forwarding affinity again.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReentryRatio(integer $ReentryRatio) Set The threshold for re-enabling availability zone forwarding affinity. When forwarding is in all availability zones and the proportion of healthy backend services in the Cloud Load Balancer availability zone is greater than or equal to this threshold, the CLB will enter availability zone forwarding affinity again.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AvailableZoneAffinityInfo extends AbstractModel
{
    /**
     * @var boolean Whether to enable availability zone forwarding affinity. true: enable availability zone forwarding affinity; false: enable availability zone forwarding affinity.
     */
    public $Enable;

    /**
     * @var integer The availability zone forwarding affinity failure threshold. When the healthy ratio of backend services in an availability zone is less than this threshold, the Cloud Load Balancer will exit availability zone forwarding affinity and convert to forwarding across all availability zones.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExitRatio;

    /**
     * @var integer The threshold for re-enabling availability zone forwarding affinity. When forwarding is in all availability zones and the proportion of healthy backend services in the Cloud Load Balancer availability zone is greater than or equal to this threshold, the CLB will enter availability zone forwarding affinity again.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReentryRatio;

    /**
     * @param boolean $Enable Whether to enable availability zone forwarding affinity. true: enable availability zone forwarding affinity; false: enable availability zone forwarding affinity.
     * @param integer $ExitRatio The availability zone forwarding affinity failure threshold. When the healthy ratio of backend services in an availability zone is less than this threshold, the Cloud Load Balancer will exit availability zone forwarding affinity and convert to forwarding across all availability zones.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReentryRatio The threshold for re-enabling availability zone forwarding affinity. When forwarding is in all availability zones and the proportion of healthy backend services in the Cloud Load Balancer availability zone is greater than or equal to this threshold, the CLB will enter availability zone forwarding affinity again.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ExitRatio",$param) and $param["ExitRatio"] !== null) {
            $this->ExitRatio = $param["ExitRatio"];
        }

        if (array_key_exists("ReentryRatio",$param) and $param["ReentryRatio"] !== null) {
            $this->ReentryRatio = $param["ReentryRatio"];
        }
    }
}
