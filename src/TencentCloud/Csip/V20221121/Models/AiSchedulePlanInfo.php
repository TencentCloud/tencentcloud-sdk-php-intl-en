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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Future trigger plan entry
 *
 * @method string getTriggerId() Obtain Trigger ID.
 * @method void setTriggerId(string $TriggerId) Set Trigger ID.
 * @method integer getFireTime() Obtain Expected trigger time, Unix millisecond timestamp.
 * @method void setFireTime(integer $FireTime) Set Expected trigger time, Unix millisecond timestamp.
 * @method integer getTriggerType() Obtain Trigger type. Parameter Value: 1 (Cron expression), 2 (fixed time).
 * @method void setTriggerType(integer $TriggerType) Set Trigger type. Parameter Value: 1 (Cron expression), 2 (fixed time).
 */
class AiSchedulePlanInfo extends AbstractModel
{
    /**
     * @var string Trigger ID.
     */
    public $TriggerId;

    /**
     * @var integer Expected trigger time, Unix millisecond timestamp.
     */
    public $FireTime;

    /**
     * @var integer Trigger type. Parameter Value: 1 (Cron expression), 2 (fixed time).
     */
    public $TriggerType;

    /**
     * @param string $TriggerId Trigger ID.
     * @param integer $FireTime Expected trigger time, Unix millisecond timestamp.
     * @param integer $TriggerType Trigger type. Parameter Value: 1 (Cron expression), 2 (fixed time).
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
        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("FireTime",$param) and $param["FireTime"] !== null) {
            $this->FireTime = $param["FireTime"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }
    }
}
