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
 * Media quality inspection task information.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method MediaMetaData getMetaData() Obtain Metadata of audio and video for quality inspection input.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of audio and video for quality inspection input.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityInspectTaskInput getInput() Obtain Audio and video quality inspection task input.
 * @method void setInput(QualityInspectTaskInput $Input) Set Audio and video quality inspection task input.
 * @method QualityInspectTaskOutput getOutput() Obtain Audio and video quality inspection task output.
 * @method void setOutput(QualityInspectTaskOutput $Output) Set Audio and video quality inspection task output.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method string getSessionContext() Obtain Source context. This is used to pass through user request information. The audio and video quality detection completion callback returns the value of this field. The maximum length is 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context. This is used to pass through user request information. The audio and video quality detection completion callback returns the value of this field. The maximum length is 1000 characters.
 */
class QualityInspectTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var MediaMetaData Metadata of audio and video for quality inspection input.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @var QualityInspectTaskInput Audio and video quality inspection task input.
     */
    public $Input;

    /**
     * @var QualityInspectTaskOutput Audio and video quality inspection task output.
     */
    public $Output;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var string Source context. This is used to pass through user request information. The audio and video quality detection completion callback returns the value of this field. The maximum length is 1000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param string $ErrCodeExt Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param string $Message Error message.
     * @param MediaMetaData $MetaData Metadata of audio and video for quality inspection input.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityInspectTaskInput $Input Audio and video quality inspection task input.
     * @param QualityInspectTaskOutput $Output Audio and video quality inspection task output.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param string $SessionContext Source context. This is used to pass through user request information. The audio and video quality detection completion callback returns the value of this field. The maximum length is 1000 characters.
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new QualityInspectTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new QualityInspectTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
