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
 * The result of a content recognition task of a scheme.
 *
 * @method string getStatus() Obtain The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; any other value returned indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; any other value returned indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method integer getErrCode() Obtain The error code. 0 indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
 * @method void setErrCode(integer $ErrCode) Set The error code. 0 indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method AiRecognitionTaskInput getInput() Obtain The input of the content recognition task.
 * @method void setInput(AiRecognitionTaskInput $Input) Set The input of the content recognition task.
 * @method array getOutput() Obtain Output of the identification task.
 * @method void setOutput(array $Output) Set Output of the identification task.
 * @method string getBeginProcessTime() Obtain Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getFinishTime() Obtain Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setFinishTime(string $FinishTime) Set Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class ScheduleRecognitionTaskResult extends AbstractModel
{
    /**
     * @var string The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; any other value returned indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     */
    public $ErrCodeExt;

    /**
     * @var integer The error code. 0 indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
     */
    public $ErrCode;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var AiRecognitionTaskInput The input of the content recognition task.
     */
    public $Input;

    /**
     * @var array Output of the identification task.
     */
    public $Output;

    /**
     * @var string Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $BeginProcessTime;

    /**
     * @var string Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $FinishTime;

    /**
     * @param string $Status The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; any other value returned indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     * @param integer $ErrCode The error code. 0 indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
     * @param string $Message The error message.
     * @param AiRecognitionTaskInput $Input The input of the content recognition task.
     * @param array $Output Output of the identification task.
     * @param string $BeginProcessTime Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $FinishTime Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
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
            $this->Input = new AiRecognitionTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = [];
            foreach ($param["Output"] as $key => $value){
                $obj = new AiRecognitionResult();
                $obj->deserialize($value);
                array_push($this->Output, $obj);
            }
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
