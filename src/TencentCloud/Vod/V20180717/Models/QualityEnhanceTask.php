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
 * Audio and video quality regeneration task
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain Error code. 0 indicates success. Additional values indicate failure:
<li>40000: Invalid input parameter. Check the input parameter;</li>
<li>60000: Source file error (for example, video data damage). Confirm whether the source file is normal;</li>
<li>70000: internal service error. Retry is recommended.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates success. Additional values indicate failure:
<li>40000: Invalid input parameter. Check the input parameter;</li>
<li>60000: Source file error (for example, video data damage). Confirm whether the source file is normal;</li>
<li>70000: internal service error. Retry is recommended.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method integer getProgress() Obtain Progress of the audio and video quality regeneration task. Value range: [0-100].
 * @method void setProgress(integer $Progress) Set Progress of the audio and video quality regeneration task. Value range: [0-100].
 * @method QualityEnhanceTaskInput getInput() Obtain Input of the audio and video quality regeneration task.
 * @method void setInput(QualityEnhanceTaskInput $Input) Set Input of the audio and video quality regeneration task.
 * @method QualityEnhanceTaskOutput getOutput() Obtain Output of the audio and video quality regeneration task.
 * @method void setOutput(QualityEnhanceTaskOutput $Output) Set Output of the audio and video quality regeneration task.
 * @method MediaMetaData getMetaData() Obtain Meta information of the output video after audio and video quality revival.
 * @method void setMetaData(MediaMetaData $MetaData) Set Meta information of the output video after audio and video quality revival.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 */
class QualityEnhanceTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer Error code. 0 indicates success. Additional values indicate failure:
<li>40000: Invalid input parameter. Check the input parameter;</li>
<li>60000: Source file error (for example, video data damage). Confirm whether the source file is normal;</li>
<li>70000: internal service error. Retry is recommended.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var integer Progress of the audio and video quality regeneration task. Value range: [0-100].
     */
    public $Progress;

    /**
     * @var QualityEnhanceTaskInput Input of the audio and video quality regeneration task.
     */
    public $Input;

    /**
     * @var QualityEnhanceTaskOutput Output of the audio and video quality regeneration task.
     */
    public $Output;

    /**
     * @var MediaMetaData Meta information of the output video after audio and video quality revival.
     */
    public $MetaData;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode Error code. 0 indicates success. Additional values indicate failure:
<li>40000: Invalid input parameter. Check the input parameter;</li>
<li>60000: Source file error (for example, video data damage). Confirm whether the source file is normal;</li>
<li>70000: internal service error. Retry is recommended.</li>
     * @param string $Message Error message.
     * @param string $ErrCodeExt Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param integer $Progress Progress of the audio and video quality regeneration task. Value range: [0-100].
     * @param QualityEnhanceTaskInput $Input Input of the audio and video quality regeneration task.
     * @param QualityEnhanceTaskOutput $Output Output of the audio and video quality regeneration task.
     * @param MediaMetaData $MetaData Meta information of the output video after audio and video quality revival.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new QualityEnhanceTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new QualityEnhanceTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
