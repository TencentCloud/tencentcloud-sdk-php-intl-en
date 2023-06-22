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
 * Step details
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
 * @method string getStatus() Obtain Status of the current step. Valid values: `notStarted`, `running`, `failed`, `finished, `skipped`, `paused`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status of the current step. Valid values: `notStarted`, `running`, `failed`, `finished, `skipped`, `paused`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Step start time, which may be null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Step start time, which may be null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrors() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWarnings() Obtain Warning message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarnings(array $Warnings) Set Warning message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Current step progress. Value range: 0-100. The value `-1` indicates that the progress of the current step is unavailable. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Current step progress. Value range: 0-100. The value `-1` indicates that the progress of the current step is unavailable. Note: This field may return null, indicating that no valid values can be obtained.
 */
class StepInfo extends AbstractModel
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
     * @var string Status of the current step. Valid values: `notStarted`, `running`, `failed`, `finished, `skipped`, `paused`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Step start time, which may be null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var array Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var array Warning message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Warnings;

    /**
     * @var integer Current step progress. Value range: 0-100. The value `-1` indicates that the progress of the current step is unavailable. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @param integer $StepNo Step number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepName Step name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepId Step ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status of the current step. Valid values: `notStarted`, `running`, `failed`, `finished, `skipped`, `paused`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Step start time, which may be null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Errors Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Warnings Warning message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Current step progress. Value range: 0-100. The value `-1` indicates that the progress of the current step is unavailable. Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new StepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new StepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
