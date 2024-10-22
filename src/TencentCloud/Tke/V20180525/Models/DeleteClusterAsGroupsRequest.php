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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterAsGroups request structure.
 *
 * @method string getClusterId() Obtain The cluster ID, obtained through the [DescribeClusters](https://www.tencentcloud.com/document/api/457/32025) API.
 * @method void setClusterId(string $ClusterId) Set The cluster ID, obtained through the [DescribeClusters](https://www.tencentcloud.com/document/api/457/32025) API.
 * @method array getAutoScalingGroupIds() Obtain Cluster scaling group ID list
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) Set Cluster scaling group ID list
 * @method boolean getKeepInstance() Obtain Whether to keep nodes in the scaling group. Default to **false** (not keep)
 * @method void setKeepInstance(boolean $KeepInstance) Set Whether to keep nodes in the scaling group. Default to **false** (not keep)
 */
class DeleteClusterAsGroupsRequest extends AbstractModel
{
    /**
     * @var string The cluster ID, obtained through the [DescribeClusters](https://www.tencentcloud.com/document/api/457/32025) API.
     */
    public $ClusterId;

    /**
     * @var array Cluster scaling group ID list
     */
    public $AutoScalingGroupIds;

    /**
     * @var boolean Whether to keep nodes in the scaling group. Default to **false** (not keep)
     */
    public $KeepInstance;

    /**
     * @param string $ClusterId The cluster ID, obtained through the [DescribeClusters](https://www.tencentcloud.com/document/api/457/32025) API.
     * @param array $AutoScalingGroupIds Cluster scaling group ID list
     * @param boolean $KeepInstance Whether to keep nodes in the scaling group. Default to **false** (not keep)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScalingGroupIds",$param) and $param["AutoScalingGroupIds"] !== null) {
            $this->AutoScalingGroupIds = $param["AutoScalingGroupIds"];
        }

        if (array_key_exists("KeepInstance",$param) and $param["KeepInstance"] !== null) {
            $this->KeepInstance = $param["KeepInstance"];
        }
    }
}
