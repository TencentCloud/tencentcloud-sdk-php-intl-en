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
 * The information of a transcoding (bitrate reduction) task.
 *
 * @method string getStatus() Obtain The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method TranscodeTaskInput getInput() Obtain The input of a transcoding task.
 * @method void setInput(TranscodeTaskInput $Input) Set The input of a transcoding task.
 * @method MediaTranscodeItem getOutput() Obtain The output of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(MediaTranscodeItem $Output) Set The output of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain The transcoding progress. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set The transcoding progress. Value range: 0-100.
 * @method string getBeginProcessTime() Obtain The start time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set The start time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method string getFinishTime() Obtain The end time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setFinishTime(string $FinishTime) Set The end time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class ReduceMediaBitrateTranscodeResult extends AbstractModel
{
    /**
     * @var string The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     */
    public $ErrCodeExt;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var TranscodeTaskInput The input of a transcoding task.
     */
    public $Input;

    /**
     * @var MediaTranscodeItem The output of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var integer The transcoding progress. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var string The start time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $BeginProcessTime;

    /**
     * @var string The end time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $FinishTime;

    /**
     * @param string $Status The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     * @param string $Message The error message.
     * @param TranscodeTaskInput $Input The input of a transcoding task.
     * @param MediaTranscodeItem $Output The output of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress The transcoding progress. Value range: 0-100.
     * @param string $BeginProcessTime The start time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param string $FinishTime The end time of the transcoding task, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
