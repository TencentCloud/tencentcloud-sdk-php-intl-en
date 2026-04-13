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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter modification event information
 *
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method string getOldValue() Obtain Original parameter value.
 * @method void setOldValue(string $OldValue) Set Original parameter value.
 * @method string getNewValue() Obtain This modification specifies the expected parameter value.
 * @method void setNewValue(string $NewValue) Set This modification specifies the expected parameter value.
 * @method string getModifyTime() Obtain Specifies the start time for backend parameter modification.
 * @method void setModifyTime(string $ModifyTime) Set Specifies the start time for backend parameter modification.
 * @method string getEffectiveTime() Obtain Specifies the start of effective time for the backend parameter.
 * @method void setEffectiveTime(string $EffectiveTime) Set Specifies the start of effective time for the backend parameter.
 * @method string getState() Obtain Modification status. valid values: in progress, success, paused.
 * @method void setState(string $State) Set Modification status. valid values: in progress, success, paused.
 * @method string getOperator() Obtain Operator (normal: user sub UIN).
 * @method void setOperator(string $Operator) Set Operator (normal: user sub UIN).
 * @method string getEventLog() Obtain Time log.
 * @method void setEventLog(string $EventLog) Set Time log.
 */
class EventInfo extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var string Original parameter value.
     */
    public $OldValue;

    /**
     * @var string This modification specifies the expected parameter value.
     */
    public $NewValue;

    /**
     * @var string Specifies the start time for backend parameter modification.
     */
    public $ModifyTime;

    /**
     * @var string Specifies the start of effective time for the backend parameter.
     */
    public $EffectiveTime;

    /**
     * @var string Modification status. valid values: in progress, success, paused.
     */
    public $State;

    /**
     * @var string Operator (normal: user sub UIN).
     */
    public $Operator;

    /**
     * @var string Time log.
     */
    public $EventLog;

    /**
     * @param string $ParamName Parameter name.
     * @param string $OldValue Original parameter value.
     * @param string $NewValue This modification specifies the expected parameter value.
     * @param string $ModifyTime Specifies the start time for backend parameter modification.
     * @param string $EffectiveTime Specifies the start of effective time for the backend parameter.
     * @param string $State Modification status. valid values: in progress, success, paused.
     * @param string $Operator Operator (normal: user sub UIN).
     * @param string $EventLog Time log.
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
