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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Primary/Secondary Switchover Log
 *
 * @method string getEventId() Obtain Switchover Event ID
 * @method void setEventId(string $EventId) Set Switchover Event ID
 * @method integer getSwitchType() Obtain Switchover Mode 0-System Automatic Switchover, 1-Manual Switchover
 * @method void setSwitchType(integer $SwitchType) Set Switchover Mode 0-System Automatic Switchover, 1-Manual Switchover
 * @method string getStartTime() Obtain Switchover Start Time
 * @method void setStartTime(string $StartTime) Set Switchover Start Time
 * @method string getEndTime() Obtain Switchover End Time
 * @method void setEndTime(string $EndTime) Set Switchover End Time
 * @method string getReason() Obtain Machine failure causes automatic switchover.
 * @method void setReason(string $Reason) Set Machine failure causes automatic switchover.
 */
class SwitchLog extends AbstractModel
{
    /**
     * @var string Switchover Event ID
     */
    public $EventId;

    /**
     * @var integer Switchover Mode 0-System Automatic Switchover, 1-Manual Switchover
     */
    public $SwitchType;

    /**
     * @var string Switchover Start Time
     */
    public $StartTime;

    /**
     * @var string Switchover End Time
     */
    public $EndTime;

    /**
     * @var string Machine failure causes automatic switchover.
     */
    public $Reason;

    /**
     * @param string $EventId Switchover Event ID
     * @param integer $SwitchType Switchover Mode 0-System Automatic Switchover, 1-Manual Switchover
     * @param string $StartTime Switchover Start Time
     * @param string $EndTime Switchover End Time
     * @param string $Reason Machine failure causes automatic switchover.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
