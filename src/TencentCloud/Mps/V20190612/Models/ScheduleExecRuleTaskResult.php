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
 * Result type of the media quality inspection task.
 *
 * @method string getStatus() Obtain Task status, which can be PROCESSING, SUCCESS, or FAIL.
 * @method void setStatus(string $Status) Set Task status, which can be PROCESSING, SUCCESS, or FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success, while other values indicate failure. For specific values, see the list of MPS error codes at https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81.
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success, while other values indicate failure. For specific values, see the list of MPS error codes at https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method ExecRulesTask getInput() Obtain Input of the conditional judgment task.
 * @method void setInput(ExecRulesTask $Input) Set Input of the conditional judgment task.
 * @method ExecRuleTaskData getOutput() Obtain Output of the conditional judgment task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutput(ExecRuleTaskData $Output) Set Output of the conditional judgment task.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ScheduleExecRuleTaskResult extends AbstractModel
{
    /**
     * @var string Task status, which can be PROCESSING, SUCCESS, or FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates success, while other values indicate failure. For specific values, see the list of MPS error codes at https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81.
     */
    public $ErrCodeExt;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var ExecRulesTask Input of the conditional judgment task.
     */
    public $Input;

    /**
     * @var ExecRuleTaskData Output of the conditional judgment task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Output;

    /**
     * @param string $Status Task status, which can be PROCESSING, SUCCESS, or FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates success, while other values indicate failure. For specific values, see the list of MPS error codes at https://www.tencentcloud.comom/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81.
     * @param string $Message Error message.
     * @param ExecRulesTask $Input Input of the conditional judgment task.
     * @param ExecRuleTaskData $Output Output of the conditional judgment task.
Note: This field may return null, indicating that no valid value can be obtained.
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
            $this->Input = new ExecRulesTask();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ExecRuleTaskData();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
