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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter modification event information
 *
 * @method string getParamName() Obtain Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setParamName(string $ParamName) Set Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOldValue() Obtain Original parameter value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOldValue(string $OldValue) Set Original parameter value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getNewValue() Obtain New parameter value in this modification event
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNewValue(string $NewValue) Set New parameter value in this modification event
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Start time of parameter modification
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Start time of parameter modification
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEffectiveTime() Obtain Start time when the modified parameter takes effect
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEffectiveTime(string $EffectiveTime) Set Start time when the modified parameter takes effect
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getState() Obtain Modification status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setState(string $State) Set Modification status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOperator() Obtain Operator (generally, the value is the UIN of a sub-user)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOperator(string $Operator) Set Operator (generally, the value is the UIN of a sub-user)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEventLog() Obtain Event log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEventLog(string $EventLog) Set Event log
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class EventInfo extends AbstractModel
{
    /**
     * @var string Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ParamName;

    /**
     * @var string Original parameter value
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OldValue;

    /**
     * @var string New parameter value in this modification event
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NewValue;

    /**
     * @var string Start time of parameter modification
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Start time when the modified parameter takes effect
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EffectiveTime;

    /**
     * @var string Modification status
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var string Operator (generally, the value is the UIN of a sub-user)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Operator;

    /**
     * @var string Event log
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EventLog;

    /**
     * @param string $ParamName Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $OldValue Original parameter value
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $NewValue New parameter value in this modification event
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ModifyTime Start time of parameter modification
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EffectiveTime Start time when the modified parameter takes effect
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $State Modification status
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Operator Operator (generally, the value is the UIN of a sub-user)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EventLog Event log
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("EventLog",$param) and $param["EventLog"] !== null) {
            $this->EventLog = $param["EventLog"];
        }
    }
}
