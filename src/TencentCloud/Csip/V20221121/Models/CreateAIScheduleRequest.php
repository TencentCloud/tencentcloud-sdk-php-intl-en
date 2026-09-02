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
 * CreateAISchedule request structure.
 *
 * @method string getName() Obtain <p>Task name. Maximum 128 characters.</p>
 * @method void setName(string $Name) Set <p>Task name. Maximum 128 characters.</p>
 * @method string getPrompts() Obtain <p>Execute the prompt content. Maximum 2048 characters.</p>
 * @method void setPrompts(string $Prompts) Set <p>Execute the prompt content. Maximum 2048 characters.</p>
 * @method array getTriggers() Obtain <p>Trigger list. Multiple triggers have an "or" relationship, and any one of them triggers the action.</p>
 * @method void setTriggers(array $Triggers) Set <p>Trigger list. Multiple triggers have an "or" relationship, and any one of them triggers the action.</p>
 * @method integer getMaxFireCount() Obtain <p>Maximum trigger count. 0 indicates unlimited.</p>
 * @method void setMaxFireCount(integer $MaxFireCount) Set <p>Maximum trigger count. 0 indicates unlimited.</p>
 * @method integer getStartTime() Obtain <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
 * @method integer getEndTime() Obtain <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
 * @method void setEndTime(integer $EndTime) Set <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
 */
class CreateAIScheduleRequest extends AbstractModel
{
    /**
     * @var string <p>Task name. Maximum 128 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Execute the prompt content. Maximum 2048 characters.</p>
     */
    public $Prompts;

    /**
     * @var array <p>Trigger list. Multiple triggers have an "or" relationship, and any one of them triggers the action.</p>
     */
    public $Triggers;

    /**
     * @var integer <p>Maximum trigger count. 0 indicates unlimited.</p>
     */
    public $MaxFireCount;

    /**
     * @var integer <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
     */
    public $EndTime;

    /**
     * @param string $Name <p>Task name. Maximum 128 characters.</p>
     * @param string $Prompts <p>Execute the prompt content. Maximum 2048 characters.</p>
     * @param array $Triggers <p>Trigger list. Multiple triggers have an "or" relationship, and any one of them triggers the action.</p>
     * @param integer $MaxFireCount <p>Maximum trigger count. 0 indicates unlimited.</p>
     * @param integer $StartTime <p>Start of effective time, Unix millisecond timestamp. 0 means effective immediately.</p>
     * @param integer $EndTime <p>Expiration time, Unix millisecond timestamp. 0 means never expires.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
