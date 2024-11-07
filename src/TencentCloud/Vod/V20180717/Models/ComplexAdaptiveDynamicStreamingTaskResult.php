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
 * Execution information of a single adaptive bitrate stream in a complex adaptive bitrate streaming task.
 *
 * @method string getStatus() Obtain Task status of a single adaptive bitrate stream. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status of a single adaptive bitrate stream. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method integer getProgress() Obtain The execution progress of a single adaptive bitrate stream. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set The execution progress of a single adaptive bitrate stream. Value range: 0-100.
 * @method ComplexAdaptiveDynamicStreamingTaskInput getInput() Obtain Input of a single adaptive bitrate stream.
 * @method void setInput(ComplexAdaptiveDynamicStreamingTaskInput $Input) Set Input of a single adaptive bitrate stream.
 * @method ComplexAdaptiveDynamicStreamingTaskOutput getOutput() Obtain Output of a single adaptive bitrate stream.
 * @method void setOutput(ComplexAdaptiveDynamicStreamingTaskOutput $Output) Set Output of a single adaptive bitrate stream.
 */
class ComplexAdaptiveDynamicStreamingTaskResult extends AbstractModel
{
    /**
     * @var string Task status of a single adaptive bitrate stream. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     */
    public $ErrCodeExt;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var integer The execution progress of a single adaptive bitrate stream. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var ComplexAdaptiveDynamicStreamingTaskInput Input of a single adaptive bitrate stream.
     */
    public $Input;

    /**
     * @var ComplexAdaptiveDynamicStreamingTaskOutput Output of a single adaptive bitrate stream.
     */
    public $Output;

    /**
     * @param string $Status Task status of a single adaptive bitrate stream. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     * @param string $Message Error message.
     * @param integer $Progress The execution progress of a single adaptive bitrate stream. Value range: 0-100.
     * @param ComplexAdaptiveDynamicStreamingTaskInput $Input Input of a single adaptive bitrate stream.
     * @param ComplexAdaptiveDynamicStreamingTaskOutput $Output Output of a single adaptive bitrate stream.
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
