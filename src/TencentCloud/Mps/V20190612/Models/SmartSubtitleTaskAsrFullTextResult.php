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
 * Full speech recognition result.
 *
 * @method string getStatus() Obtain Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method integer getErrCode() Obtain Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method SmartSubtitleTaskResultInput getInput() Obtain Input information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInput(SmartSubtitleTaskResultInput $Input) Set Input information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SmartSubtitleTaskAsrFullTextResultOutput getOutput() Obtain Output information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutput(SmartSubtitleTaskAsrFullTextResultOutput $Output) Set Output information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getProgress() Obtain Task progress.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProgress(integer $Progress) Set Task progress.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SmartSubtitleTaskAsrFullTextResult extends AbstractModel
{
    /**
     * @var string Task status, including PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var SmartSubtitleTaskResultInput Input information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Input;

    /**
     * @var SmartSubtitleTaskAsrFullTextResultOutput Output information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Output;

    /**
     * @var integer Task progress.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Progress;

    /**
     * @param string $Status Task status, including PROCESSING, SUCCESS, and FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates that the task is successful, and other values indicate that the task has failed. For specific values, see [Error Codes] (https://intl.cloud.tencent.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param integer $ErrCode Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     * @param string $Message Error message.
     * @param SmartSubtitleTaskResultInput $Input Input information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SmartSubtitleTaskAsrFullTextResultOutput $Output Output information on the full speech recognition task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Progress Task progress.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SmartSubtitleTaskResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SmartSubtitleTaskAsrFullTextResultOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
