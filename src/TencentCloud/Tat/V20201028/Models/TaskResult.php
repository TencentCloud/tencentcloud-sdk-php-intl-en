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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task result.
 *
 * @method integer getExitCode() Obtain ExitCode of the execution.
 * @method void setExitCode(integer $ExitCode) Set ExitCode of the execution.
 * @method string getOutput() Obtain Base64-encoded command output. The maximum length is 24 KB.
 * @method void setOutput(string $Output) Set Base64-encoded command output. The maximum length is 24 KB.
 * @method string getExecStartTime() Obtain Time when the execution is started.
 * @method void setExecStartTime(string $ExecStartTime) Set Time when the execution is started.
 * @method string getExecEndTime() Obtain Time when the execution is ended.
 * @method void setExecEndTime(string $ExecEndTime) Set Time when the execution is ended.
 * @method integer getDropped() Obtain Dropped bytes of the command output.
 * @method void setDropped(integer $Dropped) Set Dropped bytes of the command output.
 * @method string getOutputUrl() Obtain COS URL of the logs.
 * @method void setOutputUrl(string $OutputUrl) Set COS URL of the logs.
 * @method string getOutputUploadCOSErrorInfo() Obtain Error message for uploading logs to COS.
 * @method void setOutputUploadCOSErrorInfo(string $OutputUploadCOSErrorInfo) Set Error message for uploading logs to COS.
 */
class TaskResult extends AbstractModel
{
    /**
     * @var integer ExitCode of the execution.
     */
    public $ExitCode;

    /**
     * @var string Base64-encoded command output. The maximum length is 24 KB.
     */
    public $Output;

    /**
     * @var string Time when the execution is started.
     */
    public $ExecStartTime;

    /**
     * @var string Time when the execution is ended.
     */
    public $ExecEndTime;

    /**
     * @var integer Dropped bytes of the command output.
     */
    public $Dropped;

    /**
     * @var string COS URL of the logs.
     */
    public $OutputUrl;

    /**
     * @var string Error message for uploading logs to COS.
     */
    public $OutputUploadCOSErrorInfo;

    /**
     * @param integer $ExitCode ExitCode of the execution.
     * @param string $Output Base64-encoded command output. The maximum length is 24 KB.
     * @param string $ExecStartTime Time when the execution is started.
     * @param string $ExecEndTime Time when the execution is ended.
     * @param integer $Dropped Dropped bytes of the command output.
     * @param string $OutputUrl COS URL of the logs.
     * @param string $OutputUploadCOSErrorInfo Error message for uploading logs to COS.
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
        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("ExecStartTime",$param) and $param["ExecStartTime"] !== null) {
            $this->ExecStartTime = $param["ExecStartTime"];
        }

        if (array_key_exists("ExecEndTime",$param) and $param["ExecEndTime"] !== null) {
            $this->ExecEndTime = $param["ExecEndTime"];
        }

        if (array_key_exists("Dropped",$param) and $param["Dropped"] !== null) {
            $this->Dropped = $param["Dropped"];
        }

        if (array_key_exists("OutputUrl",$param) and $param["OutputUrl"] !== null) {
            $this->OutputUrl = $param["OutputUrl"];
        }

        if (array_key_exists("OutputUploadCOSErrorInfo",$param) and $param["OutputUploadCOSErrorInfo"] !== null) {
            $this->OutputUploadCOSErrorInfo = $param["OutputUploadCOSErrorInfo"];
        }
    }
}
