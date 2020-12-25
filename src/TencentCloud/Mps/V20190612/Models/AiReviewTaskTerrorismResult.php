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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result type of a terrorism information detection task during content audit
 *
 * @method string getStatus() Obtain Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain Error code, an empty string indicates the task is successful; otherwise it is failed. For details about the values, see [Error Code List](https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code, an empty string indicates the task is successful; otherwise it is failed. For details about the values, see [Error Code List](https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method integer getErrCode() Obtain Error code. 0 suggests the task is successful; otherwise it is failed. This field is no longer recommended. Consider using the new error code ErrCodeExt.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 suggests the task is successful; otherwise it is failed. This field is no longer recommended. Consider using the new error code ErrCodeExt.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AiReviewTerrorismTaskInput getInput() Obtain Input for a terrorism information detection task during content audit.
 * @method void setInput(AiReviewTerrorismTaskInput $Input) Set Input for a terrorism information detection task during content audit.
 * @method AiReviewTerrorismTaskOutput getOutput() Obtain Output of a terrorism information detection task during content audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiReviewTerrorismTaskOutput $Output) Set Output of a terrorism information detection task during content audit.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiReviewTaskTerrorismResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string Error code, an empty string indicates the task is successful; otherwise it is failed. For details about the values, see [Error Code List](https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 suggests the task is successful; otherwise it is failed. This field is no longer recommended. Consider using the new error code ErrCodeExt.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AiReviewTerrorismTaskInput Input for a terrorism information detection task during content audit.
     */
    public $Input;

    /**
     * @var AiReviewTerrorismTaskOutput Output of a terrorism information detection task during content audit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt Error code, an empty string indicates the task is successful; otherwise it is failed. For details about the values, see [Error Code List](https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param integer $ErrCode Error code. 0 suggests the task is successful; otherwise it is failed. This field is no longer recommended. Consider using the new error code ErrCodeExt.
     * @param string $Message Error message.
     * @param AiReviewTerrorismTaskInput $Input Input for a terrorism information detection task during content audit.
     * @param AiReviewTerrorismTaskOutput $Output Output of a terrorism information detection task during content audit.
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
            $this->Input = new AiReviewTerrorismTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiReviewTerrorismTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
