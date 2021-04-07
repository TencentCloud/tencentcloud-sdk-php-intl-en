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
 * StopAutoScalingInstances request structure.
 *
 * @method string getAutoScalingGroupId() Obtain The scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set The scaling group ID.
 * @method array getInstanceIds() Obtain The list of the CVM instances you want to shut down.
 * @method void setInstanceIds(array $InstanceIds) Set The list of the CVM instances you want to shut down.
 * @method string getStoppedMode() Obtain Whether the shutdown instances will be charged. Valid values:  
KEEP_CHARGING: keep charging after shutdown.  
STOP_CHARGING: stop charging after shutdown.
Default value: KEEP_CHARGING.
 * @method void setStoppedMode(string $StoppedMode) Set Whether the shutdown instances will be charged. Valid values:  
KEEP_CHARGING: keep charging after shutdown.  
STOP_CHARGING: stop charging after shutdown.
Default value: KEEP_CHARGING.
 */
class StopAutoScalingInstancesRequest extends AbstractModel
{
    /**
     * @var string The scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var array The list of the CVM instances you want to shut down.
     */
    public $InstanceIds;

    /**
     * @var string Whether the shutdown instances will be charged. Valid values:  
KEEP_CHARGING: keep charging after shutdown.  
STOP_CHARGING: stop charging after shutdown.
Default value: KEEP_CHARGING.
     */
    public $StoppedMode;

    /**
     * @param string $AutoScalingGroupId The scaling group ID.
     * @param array $InstanceIds The list of the CVM instances you want to shut down.
     * @param string $StoppedMode Whether the shutdown instances will be charged. Valid values:  
KEEP_CHARGING: keep charging after shutdown.  
STOP_CHARGING: stop charging after shutdown.
Default value: KEEP_CHARGING.
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            $this->StoppedMode = $param["StoppedMode"];
        }
    }
}
