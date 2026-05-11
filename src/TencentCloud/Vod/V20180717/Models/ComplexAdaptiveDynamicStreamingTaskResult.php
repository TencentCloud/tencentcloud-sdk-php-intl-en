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
 * Adaptive bitrate task information.
 *
 * @method string getStatus() Obtain Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>SUCCESS: Completed;</li>
<li>FAIL: Failed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>SUCCESS: Completed;</li>
<li>FAIL: Failed.</li>
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method integer getProgress() Obtain Transcoding progress, with a value range of [0-100].
 * @method void setProgress(integer $Progress) Set Transcoding progress, with a value range of [0-100].
 * @method ComplexAdaptiveDynamicStreamingTaskInput getInput() Obtain Input of adaptive bitrate streaming.
 * @method void setInput(ComplexAdaptiveDynamicStreamingTaskInput $Input) Set Input of adaptive bitrate streaming.
 * @method ComplexAdaptiveDynamicStreamingTaskOutput getOutput() Obtain Output of adaptive bitrate streaming.
 * @method void setOutput(ComplexAdaptiveDynamicStreamingTaskOutput $Output) Set Output of adaptive bitrate streaming.
 */
class ComplexAdaptiveDynamicStreamingTaskResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>SUCCESS: Completed;</li>
<li>FAIL: Failed.</li>
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
     * @var integer Transcoding progress, with a value range of [0-100].
     */
    public $Progress;

    /**
     * @var ComplexAdaptiveDynamicStreamingTaskInput Input of adaptive bitrate streaming.
     */
    public $Input;

    /**
     * @var ComplexAdaptiveDynamicStreamingTaskOutput Output of adaptive bitrate streaming.
     */
    public $Output;

    /**
     * @param string $Status Task status. Valid values:
<li>PROCESSING: Processing;</li>
<li>SUCCESS: Completed;</li>
<li>FAIL: Failed.</li>
     * @param string $ErrCodeExt Error code. An empty string indicates success, and additional values indicate failure. For values, see the video processing error code list (https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param string $Message Error message.
     * @param integer $Progress Transcoding progress, with a value range of [0-100].
     * @param ComplexAdaptiveDynamicStreamingTaskInput $Input Input of adaptive bitrate streaming.
     * @param ComplexAdaptiveDynamicStreamingTaskOutput $Output Output of adaptive bitrate streaming.
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new ComplexAdaptiveDynamicStreamingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComplexAdaptiveDynamicStreamingTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
