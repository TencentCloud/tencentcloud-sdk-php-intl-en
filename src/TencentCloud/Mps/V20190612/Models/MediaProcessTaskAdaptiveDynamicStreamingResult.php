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
 * Result type of adaptive bitrate streaming task
 *
 * @method string getStatus() Obtain Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; any other value returned indicates the task failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; any other value returned indicates the task failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method integer getErrCode() Obtain Error code. 0 indicates the task is successful; otherwise it is failed. This parameter is no longer recommended. Consider using the new error code parameter ErrCodeExt.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates the task is successful; otherwise it is failed. This parameter is no longer recommended. Consider using the new error code parameter ErrCodeExt.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AdaptiveDynamicStreamingTaskInput getInput() Obtain Input of an adaptive bitrate streaming task.
 * @method void setInput(AdaptiveDynamicStreamingTaskInput $Input) Set Input of an adaptive bitrate streaming task.
 * @method AdaptiveDynamicStreamingInfoItem getOutput() Obtain Output of an adaptive bitrate streaming task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AdaptiveDynamicStreamingInfoItem $Output) Set Output of an adaptive bitrate streaming task.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaProcessTaskAdaptiveDynamicStreamingResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; any other value returned indicates the task failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 indicates the task is successful; otherwise it is failed. This parameter is no longer recommended. Consider using the new error code parameter ErrCodeExt.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AdaptiveDynamicStreamingTaskInput Input of an adaptive bitrate streaming task.
     */
    public $Input;

    /**
     * @var AdaptiveDynamicStreamingInfoItem Output of an adaptive bitrate streaming task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; any other value returned indicates the task failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     * @param integer $ErrCode Error code. 0 indicates the task is successful; otherwise it is failed. This parameter is no longer recommended. Consider using the new error code parameter ErrCodeExt.
     * @param string $Message Error message.
     * @param AdaptiveDynamicStreamingTaskInput $Input Input of an adaptive bitrate streaming task.
     * @param AdaptiveDynamicStreamingInfoItem $Output Output of an adaptive bitrate streaming task.
Note: this field may return null, indicating that no valid values can be obtained.
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
            $this->Input = new AdaptiveDynamicStreamingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AdaptiveDynamicStreamingInfoItem();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
