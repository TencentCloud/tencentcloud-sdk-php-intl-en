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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video (audio) recognition result.
 *
 * @method string getStatus() Obtain Task status. Valid values: `PROCESSING`, `SUCCESS`, and `FAIL`.
 * @method void setStatus(string $Status) Set Task status. Valid values: `PROCESSING`, `SUCCESS`, and `FAIL`.
 * @method integer getErrCode() Obtain Error code. 0: successful; other values: failed.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: successful; other values: failed.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AiAnalysisTaskVideoComprehensionInput getInput() Obtain Input file for video (audio) recognition.
 * @method void setInput(AiAnalysisTaskVideoComprehensionInput $Input) Set Input file for video (audio) recognition.
 * @method AiAnalysisTaskVideoComprehensionOutput getOutput() Obtain Output file for video (audio) recognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiAnalysisTaskVideoComprehensionOutput $Output) Set Output file for video (audio) recognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrCodeExt() Obtain Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of MPS error codes.
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of MPS error codes.
 * @method integer getProgress() Obtain Task progress
 * @method void setProgress(integer $Progress) Set Task progress
 * @method string getBeginProcessTime() Obtain Starting time of task execution, in ISO date and time format.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Starting time of task execution, in ISO date and time format.
 * @method string getFinishTime() Obtain Completion time of task execution, in ISO date and time format.
 * @method void setFinishTime(string $FinishTime) Set Completion time of task execution, in ISO date and time format.
 */
class AiAnalysisTaskVideoComprehensionResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values: `PROCESSING`, `SUCCESS`, and `FAIL`.
     */
    public $Status;

    /**
     * @var integer Error code. 0: successful; other values: failed.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AiAnalysisTaskVideoComprehensionInput Input file for video (audio) recognition.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskVideoComprehensionOutput Output file for video (audio) recognition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of MPS error codes.
     */
    public $ErrCodeExt;

    /**
     * @var integer Task progress
     */
    public $Progress;

    /**
     * @var string Starting time of task execution, in ISO date and time format.
     */
    public $BeginProcessTime;

    /**
     * @var string Completion time of task execution, in ISO date and time format.
     */
    public $FinishTime;

    /**
     * @param string $Status Task status. Valid values: `PROCESSING`, `SUCCESS`, and `FAIL`.
     * @param integer $ErrCode Error code. 0: successful; other values: failed.
     * @param string $Message Error message.
     * @param AiAnalysisTaskVideoComprehensionInput $Input Input file for video (audio) recognition.
     * @param AiAnalysisTaskVideoComprehensionOutput $Output Output file for video (audio) recognition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrCodeExt Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of MPS error codes.
     * @param integer $Progress Task progress
     * @param string $BeginProcessTime Starting time of task execution, in ISO date and time format.
     * @param string $FinishTime Completion time of task execution, in ISO date and time format.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiAnalysisTaskVideoComprehensionInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskVideoComprehensionOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
