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
 * The information of an adaptive bitrate (bitrate reduction) task.
 *
 * @method string getStatus() Obtain The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method AdaptiveDynamicStreamingTaskInput getInput() Obtain The input of an adaptive bitrate task.
 * @method void setInput(AdaptiveDynamicStreamingTaskInput $Input) Set The input of an adaptive bitrate task.
 * @method AdaptiveDynamicStreamingInfoItem getOutput() Obtain The output of an adaptive bitrate task.
 * @method void setOutput(AdaptiveDynamicStreamingInfoItem $Output) Set The output of an adaptive bitrate task.
 */
class ReduceMediaBitrateAdaptiveDynamicStreamingResult extends AbstractModel
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
     * @var AdaptiveDynamicStreamingTaskInput The input of an adaptive bitrate task.
     */
    public $Input;

    /**
     * @var AdaptiveDynamicStreamingInfoItem The output of an adaptive bitrate task.
     */
    public $Output;

    /**
     * @param string $Status The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     * @param string $Message The error message.
     * @param AdaptiveDynamicStreamingTaskInput $Input The input of an adaptive bitrate task.
     * @param AdaptiveDynamicStreamingInfoItem $Output The output of an adaptive bitrate task.
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
            $this->Input = new AdaptiveDynamicStreamingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AdaptiveDynamicStreamingInfoItem();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
