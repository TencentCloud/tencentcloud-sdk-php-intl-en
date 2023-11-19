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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result for OCR-based recognition of politically sensitive content
 *
 * @method string getStatus() Obtain Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method integer getErrCode() Obtain Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewPoliticalOcrTaskInput getInput() Obtain Input for OCR-based recognition of politically sensitive content
 * @method void setInput(AiReviewPoliticalOcrTaskInput $Input) Set Input for OCR-based recognition of politically sensitive content
 * @method AiReviewPoliticalOcrTaskOutput getOutput() Obtain Output for OCR-based recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setOutput(AiReviewPoliticalOcrTaskOutput $Output) Set Output for OCR-based recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method integer getProgress() Obtain Audio and video review OCR text involves the task progress of inappropriate information, the value range is [0-100].
 * @method void setProgress(integer $Progress) Set Audio and video review OCR text involves the task progress of inappropriate information, the value range is [0-100].
 */
class AiReviewTaskPoliticalOcrResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
     */
    public $ErrCode;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var AiReviewPoliticalOcrTaskInput Input for OCR-based recognition of politically sensitive content
     */
    public $Input;

    /**
     * @var AiReviewPoliticalOcrTaskOutput Output for OCR-based recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Output;

    /**
     * @var integer Audio and video review OCR text involves the task progress of inappropriate information, the value range is [0-100].
     */
    public $Progress;

    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     * @param integer $ErrCode Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewPoliticalOcrTaskInput $Input Input for OCR-based recognition of politically sensitive content
     * @param AiReviewPoliticalOcrTaskOutput $Output Output for OCR-based recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
     * @param integer $Progress Audio and video review OCR text involves the task progress of inappropriate information, the value range is [0-100].
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
            $this->Input = new AiReviewPoliticalOcrTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiReviewPoliticalOcrTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
