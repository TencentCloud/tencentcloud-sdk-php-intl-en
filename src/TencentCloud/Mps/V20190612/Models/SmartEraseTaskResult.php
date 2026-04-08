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
 * Smart erasure task result.
 *
 * @method string getStatus() Obtain Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method SmartEraseTaskInput getInput() Obtain Input of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInput(SmartEraseTaskInput $Input) Set Input of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AiAnalysisTaskDelLogoOutput getOutput() Obtain Output of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutput(AiAnalysisTaskDelLogoOutput $Output) Set Output of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getProgress() Obtain Task progress.		
 * @method void setProgress(integer $Progress) Set Task progress.		
 * @method string getBeginProcessTime() Obtain Task execution start time in ISO datetime format.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Task execution start time in ISO datetime format.
 * @method string getFinishTime() Obtain Task execution completion time in ISO datetime format.
 * @method void setFinishTime(string $FinishTime) Set Task execution completion time in ISO datetime format.
 */
class SmartEraseTaskResult extends AbstractModel
{
    /**
     * @var string Task status, including PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var SmartEraseTaskInput Input of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskDelLogoOutput Output of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Output;

    /**
     * @var integer Task progress.		
     */
    public $Progress;

    /**
     * @var string Task execution start time in ISO datetime format.
     */
    public $BeginProcessTime;

    /**
     * @var string Task execution completion time in ISO datetime format.
     */
    public $FinishTime;

    /**
     * @param string $Status Task status, including PROCESSING, SUCCESS, and FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param string $Message Error message.
     * @param SmartEraseTaskInput $Input Input of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AiAnalysisTaskDelLogoOutput $Output Output of the smart erasure task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Progress Task progress.		
     * @param string $BeginProcessTime Task execution start time in ISO datetime format.
     * @param string $FinishTime Task execution completion time in ISO datetime format.
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SmartEraseTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskDelLogoOutput();
            $this->Output->deserialize($param["Output"]);
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
