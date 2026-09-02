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
 * AI scheduled task information
 *
 * @method string getScheduleId() Obtain <p>ID of the AI scheduled task.</p>
 * @method void setScheduleId(string $ScheduleId) Set <p>ID of the AI scheduled task.</p>
 * @method string getName() Obtain <p>Task name. Maximum 128 characters.</p>
 * @method void setName(string $Name) Set <p>Task name. Maximum 128 characters.</p>
 * @method string getPrompts() Obtain <p>Execute the prompt content. Maximum 2048 characters.</p>
 * @method void setPrompts(string $Prompts) Set <p>Execute the prompt content. Maximum 2048 characters.</p>
 * @method integer getStatus() Obtain <p>Status. Parameter Value: 1 (enabled), 2 (disabled).</p>
 * @method void setStatus(integer $Status) Set <p>Status. Parameter Value: 1 (enabled), 2 (disabled).</p>
 * @method array getTriggers() Obtain <p>Trigger</p>
 * @method void setTriggers(array $Triggers) Set <p>Trigger</p>
 * @method integer getMaxFireCount() Obtain <p>Maximum trigger count. 0 indicates unlimited.</p>
 * @method void setMaxFireCount(integer $MaxFireCount) Set <p>Maximum trigger count. 0 indicates unlimited.</p>
 * @method integer getCurrentFireCount() Obtain <p>Trigger count.</p>
 * @method void setCurrentFireCount(integer $CurrentFireCount) Set <p>Trigger count.</p>
 * @method integer getStartTime() Obtain <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
 * @method integer getEndTime() Obtain <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
 * @method void setEndTime(integer $EndTime) Set <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
 * @method integer getCreateTime() Obtain <p>Creation time, Unix millisecond timestamp.</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time, Unix millisecond timestamp.</p>
 * @method integer getUpdateTime() Obtain <p>Update time, Unix millisecond timestamp.</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Update time, Unix millisecond timestamp.</p>
 * @method AIScheduleUserIdentity getIdentity() Obtain <p>Identity information</p>
 * @method void setIdentity(AIScheduleUserIdentity $Identity) Set <p>Identity information</p>
 */
class AiScheduleInfo extends AbstractModel
{
    /**
     * @var string <p>ID of the AI scheduled task.</p>
     */
    public $ScheduleId;

    /**
     * @var string <p>Task name. Maximum 128 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Execute the prompt content. Maximum 2048 characters.</p>
     */
    public $Prompts;

    /**
     * @var integer <p>Status. Parameter Value: 1 (enabled), 2 (disabled).</p>
     */
    public $Status;

    /**
     * @var array <p>Trigger</p>
     */
    public $Triggers;

    /**
     * @var integer <p>Maximum trigger count. 0 indicates unlimited.</p>
     */
    public $MaxFireCount;

    /**
     * @var integer <p>Trigger count.</p>
     */
    public $CurrentFireCount;

    /**
     * @var integer <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Creation time, Unix millisecond timestamp.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Update time, Unix millisecond timestamp.</p>
     */
    public $UpdateTime;

    /**
     * @var AIScheduleUserIdentity <p>Identity information</p>
     */
    public $Identity;

    /**
     * @param string $ScheduleId <p>ID of the AI scheduled task.</p>
     * @param string $Name <p>Task name. Maximum 128 characters.</p>
     * @param string $Prompts <p>Execute the prompt content. Maximum 2048 characters.</p>
     * @param integer $Status <p>Status. Parameter Value: 1 (enabled), 2 (disabled).</p>
     * @param array $Triggers <p>Trigger</p>
     * @param integer $MaxFireCount <p>Maximum trigger count. 0 indicates unlimited.</p>
     * @param integer $CurrentFireCount <p>Trigger count.</p>
     * @param integer $StartTime <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
     * @param integer $EndTime <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
     * @param integer $CreateTime <p>Creation time, Unix millisecond timestamp.</p>
     * @param integer $UpdateTime <p>Update time, Unix millisecond timestamp.</p>
     * @param AIScheduleUserIdentity $Identity <p>Identity information</p>
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = [];
            foreach ($param["Triggers"] as $key => $value){
                $obj = new AiScheduleTriggerInfo();
                $obj->deserialize($value);
                array_push($this->Triggers, $obj);
            }
        }

        if (array_key_exists("MaxFireCount",$param) and $param["MaxFireCount"] !== null) {
            $this->MaxFireCount = $param["MaxFireCount"];
        }

        if (array_key_exists("CurrentFireCount",$param) and $param["CurrentFireCount"] !== null) {
            $this->CurrentFireCount = $param["CurrentFireCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Identity",$param) and $param["Identity"] !== null) {
            $this->Identity = new AIScheduleUserIdentity();
            $this->Identity->deserialize($param["Identity"]);
        }
    }
}
