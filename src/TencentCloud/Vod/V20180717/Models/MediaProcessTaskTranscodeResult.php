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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result type of transcoding task
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
 * @method TranscodeTaskInput getInput() Obtain Input of transcoding task.
 * @method void setInput(TranscodeTaskInput $Input) Set Input of transcoding task.
 * @method MediaTranscodeItem getOutput() Obtain Output of transcoding task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(MediaTranscodeItem $Output) Set Output of transcoding task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Transcoding progress. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set Transcoding progress. Value range: 0-100.
 * @method string getBeginProcessTime() Obtain Transcoding task start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Transcoding task start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 * @method string getFinishTime() Obtain Transcoding task end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 * @method void setFinishTime(string $FinishTime) Set Transcoding task end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 */
class MediaProcessTaskTranscodeResult extends AbstractModel
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
     * @var TranscodeTaskInput Input of transcoding task.
     */
    public $Input;

    /**
     * @var MediaTranscodeItem Output of transcoding task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var integer Transcoding progress. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var string Transcoding task start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
     */
    public $BeginProcessTime;

    /**
     * @var string Transcoding task end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
     */
    public $FinishTime;

    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     * @param integer $ErrCode Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTaskInput $Input Input of transcoding task.
     * @param MediaTranscodeItem $Output Output of transcoding task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Transcoding progress. Value range: 0-100.
     * @param string $BeginProcessTime Transcoding task start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
     * @param string $FinishTime Transcoding task end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
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
            $this->Input = new TranscodeTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MediaTranscodeItem();
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
