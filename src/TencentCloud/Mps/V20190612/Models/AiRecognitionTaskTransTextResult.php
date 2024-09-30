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
 * The translation result.
 *
 * @method string getStatus() Obtain The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
 * @method integer getErrCode() Obtain The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
 * @method void setErrCode(integer $ErrCode) Set The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method AiRecognitionTaskTransTextResultInput getInput() Obtain The input of the translation task.
 * @method void setInput(AiRecognitionTaskTransTextResultInput $Input) Set The input of the translation task.
 * @method AiRecognitionTaskTransTextResultOutput getOutput() Obtain The output of the translation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiRecognitionTaskTransTextResultOutput $Output) Set The output of the translation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Task progress.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Task progress.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiRecognitionTaskTransTextResult extends AbstractModel
{
    /**
     * @var string The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     */
    public $ErrCodeExt;

    /**
     * @var integer The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
     */
    public $ErrCode;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var AiRecognitionTaskTransTextResultInput The input of the translation task.
     */
    public $Input;

    /**
     * @var AiRecognitionTaskTransTextResultOutput The output of the translation task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var integer Task progress.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @param string $Status The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://intl.cloud.tencent.com/document/product/1041/40249).
     * @param integer $ErrCode The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
     * @param string $Message The error message.
     * @param AiRecognitionTaskTransTextResultInput $Input The input of the translation task.
     * @param AiRecognitionTaskTransTextResultOutput $Output The output of the translation task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Task progress.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->Input = new AiRecognitionTaskTransTextResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiRecognitionTaskTransTextResultOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
