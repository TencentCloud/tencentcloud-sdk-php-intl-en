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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Step information
 *
 * @method integer getStepNo() Obtain Step number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNo(integer $StepNo) Set Step number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepName() Obtain Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepName(string $StepName) Set Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepId() Obtain Step ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepId(string $StepId) Set Step ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Step status. Valid values: `success`, `failed`, `running`, `notStarted`. Default value: `notStarted`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Step status. Valid values: `success`, `failed`, `running`, `notStarted`. Default value: `notStarted`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time of the current step in the format of "yyyy-mm-dd hh:mm:ss". If this field does not exist or is empty, it is meaningless.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of the current step in the format of "yyyy-mm-dd hh:mm:ss". If this field does not exist or is empty, it is meaningless.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepMessage() Obtain Step error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepMessage(string $StepMessage) Set Step error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPercent() Obtain Execution progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(integer $Percent) Set Execution progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrors() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWarnings() Obtain Warning
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarnings(array $Warnings) Set Warning
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StepDetailInfo extends AbstractModel
{
    /**
     * @var integer Step number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNo;

    /**
     * @var string Step name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepName;

    /**
     * @var string Step ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepId;

    /**
     * @var string Step status. Valid values: `success`, `failed`, `running`, `notStarted`. Default value: `notStarted`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Start time of the current step in the format of "yyyy-mm-dd hh:mm:ss". If this field does not exist or is empty, it is meaningless.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Step error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepMessage;

    /**
     * @var integer Execution progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var array Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var array Warning
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Warnings;

    /**
     * @param integer $StepNo Step number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepName Step name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepId Step ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Step status. Valid values: `success`, `failed`, `running`, `notStarted`. Default value: `notStarted`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time of the current step in the format of "yyyy-mm-dd hh:mm:ss". If this field does not exist or is empty, it is meaningless.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepMessage Step error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Percent Execution progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Errors Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Warnings Warning
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StepMessage",$param) and $param["StepMessage"] !== null) {
            $this->StepMessage = $param["StepMessage"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new ProcessStepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new ProcessStepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }
    }
}
