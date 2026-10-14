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
 * AI dubbing task result
 *
 * @method string getStatus() Obtain <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
 * @method void setStatus(string $Status) Set <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
 * @method string getErrCodeExt() Obtain <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
 * @method void setErrCodeExt(string $ErrCodeExt) Set <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method AIDubbingTaskInput getInput() Obtain <p>AI dubbing task input.</p>
 * @method void setInput(AIDubbingTaskInput $Input) Set <p>AI dubbing task input.</p>
 * @method AIDubbingTaskOutput getOutput() Obtain <p>AI dubbing task output.</p>
 * @method void setOutput(AIDubbingTaskOutput $Output) Set <p>AI dubbing task output.</p>
 * @method integer getProgress() Obtain <p>Task progress.</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress.</p>
 * @method string getBeginProcessTime() Obtain <p>Starting time of task execution, in ISO date and time format.</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) Set <p>Starting time of task execution, in ISO date and time format.</p>
 * @method string getFinishTime() Obtain <p>Completion time of task execution, in ISO date format.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Completion time of task execution, in ISO date format.</p>
 */
class AIDubbingTaskResult extends AbstractModel
{
    /**
     * @var string <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
     */
    public $Status;

    /**
     * @var string <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var AIDubbingTaskInput <p>AI dubbing task input.</p>
     */
    public $Input;

    /**
     * @var AIDubbingTaskOutput <p>AI dubbing task output.</p>
     */
    public $Output;

    /**
     * @var integer <p>Task progress.</p>
     */
    public $Progress;

    /**
     * @var string <p>Starting time of task execution, in ISO date and time format.</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>Completion time of task execution, in ISO date format.</p>
     */
    public $FinishTime;

    /**
     * @param string $Status <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
     * @param string $ErrCodeExt <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
     * @param string $Message <p>Error message.</p>
     * @param AIDubbingTaskInput $Input <p>AI dubbing task input.</p>
     * @param AIDubbingTaskOutput $Output <p>AI dubbing task output.</p>
     * @param integer $Progress <p>Task progress.</p>
     * @param string $BeginProcessTime <p>Starting time of task execution, in ISO date and time format.</p>
     * @param string $FinishTime <p>Completion time of task execution, in ISO date format.</p>
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
            $this->Input = new AIDubbingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AIDubbingTaskOutput();
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
