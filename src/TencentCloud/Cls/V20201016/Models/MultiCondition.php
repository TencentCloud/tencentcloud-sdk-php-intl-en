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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multiple trigger conditions.
 *
 * @method string getCondition() Obtain Trigger condition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCondition(string $Condition) Set Trigger condition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAlarmLevel() Obtain Alarm severity. 0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).<li> If not specified, the default is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm severity. 0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).<li> If not specified, the default is 0.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MultiCondition extends AbstractModel
{
    /**
     * @var string Trigger condition.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Condition;

    /**
     * @var integer Alarm severity. 0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).<li> If not specified, the default is 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmLevel;

    /**
     * @param string $Condition Trigger condition.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AlarmLevel Alarm severity. 0: Warning (Warn); 1: Reminder (Info); 2: Urgent (Critical).<li> If not specified, the default is 0.
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }
    }
}
