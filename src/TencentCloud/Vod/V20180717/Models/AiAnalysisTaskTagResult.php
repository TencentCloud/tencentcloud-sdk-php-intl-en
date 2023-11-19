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
 * Result type of intelligent tagging task
 *
 * @method string getStatus() Obtain Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method integer getErrCode() Obtain Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AiAnalysisTaskTagInput getInput() Obtain Input of intelligent tagging task.
 * @method void setInput(AiAnalysisTaskTagInput $Input) Set Input of intelligent tagging task.
 * @method AiAnalysisTaskTagOutput getOutput() Obtain Output of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiAnalysisTaskTagOutput $Output) Set Output of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain The progress of an intelligent labeling task. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set The progress of an intelligent labeling task. Value range: 0-100.
 * @method string getBeginProcessTime() Obtain The time when the smart label task started executing, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set The time when the smart label task started executing, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method string getFinishTime() Obtain The time when the smart label task is completed, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setFinishTime(string $FinishTime) Set The time when the smart label task is completed, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class AiAnalysisTaskTagResult extends AbstractModel
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
     */
    public $Message;

    /**
     * @var AiAnalysisTaskTagInput Input of intelligent tagging task.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskTagOutput Output of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var integer The progress of an intelligent labeling task. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var string The time when the smart label task started executing, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $BeginProcessTime;

    /**
     * @var string The time when the smart label task is completed, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $FinishTime;

    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     * @param integer $ErrCode Error code. 0 indicates the task is successful; other values indicate failure. You’re not recommended to use this parameter, but to use the new parameter `ErrCodeExt`.
     * @param string $Message Error message.
     * @param AiAnalysisTaskTagInput $Input Input of intelligent tagging task.
     * @param AiAnalysisTaskTagOutput $Output Output of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress The progress of an intelligent labeling task. Value range: 0-100.
     * @param string $BeginProcessTime The time when the smart label task started executing, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param string $FinishTime The time when the smart label task is completed, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
            $this->Input = new AiAnalysisTaskTagInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskTagOutput();
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
