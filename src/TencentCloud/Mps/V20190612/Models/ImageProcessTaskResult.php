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
 * Result type of the image processing task.
 *
 * @method string getStatus() Obtain Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrMsg() Obtain Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of [MPS error codes](https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrMsg(string $ErrMsg) Set Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of [MPS error codes](https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method string getMessage() Obtain Error message.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ImageProcessTaskOutput getOutput() Obtain Transcoding task output.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutput(ImageProcessTaskOutput $Output) Set Transcoding task output.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getProgress() Obtain Transcoding progress, with a value range of [0-100].
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProgress(integer $Progress) Set Transcoding progress, with a value range of [0-100].
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ImageProcessTaskResult extends AbstractModel
{
    /**
     * @var string Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of [MPS error codes](https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrMsg;

    /**
     * @var string Error message.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Message;

    /**
     * @var ImageProcessTaskOutput Transcoding task output.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Output;

    /**
     * @var integer Transcoding progress, with a value range of [0-100].
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Progress;

    /**
     * @param string $Status Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrMsg Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of [MPS error codes](https://www.tencentcloud.com/document/product/862/50369?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param string $Message Error message.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ImageProcessTaskOutput $Output Transcoding task output.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Progress Transcoding progress, with a value range of [0-100].
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

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ImageProcessTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
