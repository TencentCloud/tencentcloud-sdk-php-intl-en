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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Call event.
 *
 * @method integer getTimestamp() Obtain Event timestamp. Unix second-level timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Event timestamp. Unix second-level timestamp.
 * @method string getEventType() Obtain Event type. currently supports StaffHold, StaffUnhold, StaffMute, StaffUnmute.
 * @method void setEventType(string $EventType) Set Event type. currently supports StaffHold, StaffUnhold, StaffMute, StaffUnmute.
 * @method EventStaffDetail getStaffEventDetail() Obtain Describes event details related to the agent.
 * @method void setStaffEventDetail(EventStaffDetail $StaffEventDetail) Set Describes event details related to the agent.
 */
class SessionEvent extends AbstractModel
{
    /**
     * @var integer Event timestamp. Unix second-level timestamp.
     */
    public $Timestamp;

    /**
     * @var string Event type. currently supports StaffHold, StaffUnhold, StaffMute, StaffUnmute.
     */
    public $EventType;

    /**
     * @var EventStaffDetail Describes event details related to the agent.
     */
    public $StaffEventDetail;

    /**
     * @param integer $Timestamp Event timestamp. Unix second-level timestamp.
     * @param string $EventType Event type. currently supports StaffHold, StaffUnhold, StaffMute, StaffUnmute.
     * @param EventStaffDetail $StaffEventDetail Describes event details related to the agent.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("StaffEventDetail",$param) and $param["StaffEventDetail"] !== null) {
            $this->StaffEventDetail = new EventStaffDetail();
            $this->StaffEventDetail->deserialize($param["StaffEventDetail"]);
        }
    }
}
