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
 * Type of the orchestration video moderation job result
 *
 * @method string getStatus() Obtain <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
 * @method void setStatus(string $Status) Set <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
 * @method string getErrCodeExt() Obtain <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
 * @method void setErrCodeExt(string $ErrCodeExt) Set <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
 * @method integer getErrCode() Obtain <p>Error code. 0 indicates success, and other values indicate failure. (This field is not recommended. Use the new error code field ErrCodeExt instead.)</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. 0 indicates success, and other values indicate failure. (This field is not recommended. Use the new error code field ErrCodeExt instead.)</p>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method AiContentReviewTaskInput getInput() Obtain <p>Input of the review task.</p>
 * @method void setInput(AiContentReviewTaskInput $Input) Set <p>Input of the review task.</p>
 * @method array getOutput() Obtain <p>Output of the moderation task.</p>
 * @method void setOutput(array $Output) Set <p>Output of the moderation task.</p>
 * @method string getBeginProcessTime() Obtain <p>Starting time of task execution, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) Set <p>Starting time of task execution, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
 * @method string getFinishTime() Obtain <p>Task completion time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Task completion time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
 */
class ScheduleReviewTaskResult extends AbstractModel
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
     * @var integer <p>Error code. 0 indicates success, and other values indicate failure. (This field is not recommended. Use the new error code field ErrCodeExt instead.)</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var AiContentReviewTaskInput <p>Input of the review task.</p>
     */
    public $Input;

    /**
     * @var array <p>Output of the moderation task.</p>
     */
    public $Output;

    /**
     * @var string <p>Starting time of task execution, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>Task completion time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
     */
    public $FinishTime;

    /**
     * @param string $Status <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p>
     * @param string $ErrCodeExt <p>Error code. An empty string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of <a href="https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">MPS error codes</a>.</p>
     * @param integer $ErrCode <p>Error code. 0 indicates success, and other values indicate failure. (This field is not recommended. Use the new error code field ErrCodeExt instead.)</p>
     * @param string $Message <p>Error message.</p>
     * @param AiContentReviewTaskInput $Input <p>Input of the review task.</p>
     * @param array $Output <p>Output of the moderation task.</p>
     * @param string $BeginProcessTime <p>Starting time of task execution, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
     * @param string $FinishTime <p>Task completion time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date and time format</a>.</p>
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiContentReviewTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = [];
            foreach ($param["Output"] as $key => $value){
                $obj = new AiContentReviewResult();
                $obj->deserialize($value);
                array_push($this->Output, $obj);
            }
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
