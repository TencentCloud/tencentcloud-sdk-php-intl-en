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
 * StopInstanceRefresh request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID.
 * @method string getRefreshActivityId() Obtain Refresh activity ID.
 * @method void setRefreshActivityId(string $RefreshActivityId) Set Refresh activity ID.
 */
class StopInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Refresh activity ID.
     */
    public $RefreshActivityId;

    /**
     * @param string $AutoScalingGroupId Scaling group ID.
     * @param string $RefreshActivityId Refresh activity ID.
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

        if (array_key_exists("RefreshActivityId",$param) and $param["RefreshActivityId"] !== null) {
            $this->RefreshActivityId = $param["RefreshActivityId"];
        }
    }
}
