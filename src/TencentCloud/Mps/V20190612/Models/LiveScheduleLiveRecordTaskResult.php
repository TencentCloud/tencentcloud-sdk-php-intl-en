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
 * The result of a live scheme's live recording task.
 *
 * @method string getStatus() Obtain The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
 * @method void setStatus(string $Status) Set The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://www.tencentcloud.com/document/product/1041/40249).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://www.tencentcloud.com/document/product/1041/40249).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getErrCode() Obtain The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain The error message.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set The error message.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method LiveRecordTaskInput getInput() Obtain The input of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInput(LiveRecordTaskInput $Input) Set The input of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method LiveRecordResult getOutput() Obtain The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutput(LiveRecordResult $Output) Set The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getBeginProcessTime() Obtain The time when the task was started, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set The time when the task was started, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getFinishTime() Obtain The time when the task was completed, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFinishTime(string $FinishTime) Set The time when the task was completed, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class LiveScheduleLiveRecordTaskResult extends AbstractModel
{
    /**
     * @var string The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://www.tencentcloud.com/document/product/1041/40249).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ErrCodeExt;

    /**
     * @var integer The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string The error message.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var LiveRecordTaskInput The input of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var LiveRecordResult The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string The time when the task was started, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $BeginProcessTime;

    /**
     * @var string The time when the task was completed, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FinishTime;

    /**
     * @param string $Status The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; any other value indicates the task has failed. For details, see [Error Codes](https://www.tencentcloud.com/document/product/1041/40249).
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ErrCode The error code. `0` indicates the task is successful; other values indicate the task has failed. This parameter is not recommended. Please use `ErrCodeExt` instead.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Message The error message.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param LiveRecordTaskInput $Input The input of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param LiveRecordResult $Output The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $BeginProcessTime The time when the task was started, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $FinishTime The time when the task was completed, in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
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
            $this->Input = new LiveRecordTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new LiveRecordResult();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
