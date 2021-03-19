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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTimerScalingPolicy request structure.
 *
 * @method string getTimerId() Obtain Unique ID of the policy
 * @method void setTimerId(string $TimerId) Set Unique ID of the policy
 * @method string getFleetId() Obtain ID of the fleet to be bound with the policy
 * @method void setFleetId(string $FleetId) Set ID of the fleet to be bound with the policy
 * @method string getTimerName() Obtain Scheduled scaling policy name
 * @method void setTimerName(string $TimerName) Set Scheduled scaling policy name
 */
class DeleteTimerScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the policy
     */
    public $TimerId;

    /**
     * @var string ID of the fleet to be bound with the policy
     */
    public $FleetId;

    /**
     * @var string Scheduled scaling policy name
     */
    public $TimerName;

    /**
     * @param string $TimerId Unique ID of the policy
     * @param string $FleetId ID of the fleet to be bound with the policy
     * @param string $TimerName Scheduled scaling policy name
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
        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }
    }
}
