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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log information
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getRetMsg() Obtain Return value after the function is executed
 * @method void setRetMsg(string $RetMsg) Set Return value after the function is executed
 * @method string getRequestId() Obtain RequestId corresponding to the executed function
 * @method void setRequestId(string $RequestId) Set RequestId corresponding to the executed function
 * @method string getStartTime() Obtain Start time of the function execution
 * @method void setStartTime(string $StartTime) Set Start time of the function execution
 * @method integer getRetCode() Obtain Function execution result. `0` indicates successful execution and other values indicate failure.
 * @method void setRetCode(integer $RetCode) Set Function execution result. `0` indicates successful execution and other values indicate failure.
 * @method integer getInvokeFinished() Obtain It specifies whether the function invocation is finished. `1` indicates execution completion and other values indicate that exceptions occurred during the invocation.
 * @method void setInvokeFinished(integer $InvokeFinished) Set It specifies whether the function invocation is finished. `1` indicates execution completion and other values indicate that exceptions occurred during the invocation.
 * @method float getDuration() Obtain Duration of the function execution. The unit is millisecond (ms).
 * @method void setDuration(float $Duration) Set Duration of the function execution. The unit is millisecond (ms).
 * @method integer getBillDuration() Obtain Function billing duration. The unit is millisecond (ms). The value is rounded up to a multiple of 100 ms.
 * @method void setBillDuration(integer $BillDuration) Set Function billing duration. The unit is millisecond (ms). The value is rounded up to a multiple of 100 ms.
 * @method integer getMemUsage() Obtain Actual memory size used during the function execution. The unit is byte.
 * @method void setMemUsage(integer $MemUsage) Set Actual memory size used during the function execution. The unit is byte.
 * @method string getLog() Obtain Function execution logs
 * @method void setLog(string $Log) Set Function execution logs
 * @method string getLevel() Obtain Log level
 * @method void setLevel(string $Level) Set Log level
 * @method string getSource() Obtain Log source
 * @method void setSource(string $Source) Set Log source
 * @method integer getRetryNum() Obtain Number of retries
 * @method void setRetryNum(integer $RetryNum) Set Number of retries
 */
class FunctionLog extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Return value after the function is executed
     */
    public $RetMsg;

    /**
     * @var string RequestId corresponding to the executed function
     */
    public $RequestId;

    /**
     * @var string Start time of the function execution
     */
    public $StartTime;

    /**
     * @var integer Function execution result. `0` indicates successful execution and other values indicate failure.
     */
    public $RetCode;

    /**
     * @var integer It specifies whether the function invocation is finished. `1` indicates execution completion and other values indicate that exceptions occurred during the invocation.
     */
    public $InvokeFinished;

    /**
     * @var float Duration of the function execution. The unit is millisecond (ms).
     */
    public $Duration;

    /**
     * @var integer Function billing duration. The unit is millisecond (ms). The value is rounded up to a multiple of 100 ms.
     */
    public $BillDuration;

    /**
     * @var integer Actual memory size used during the function execution. The unit is byte.
     */
    public $MemUsage;

    /**
     * @var string Function execution logs
     */
    public $Log;

    /**
     * @var string Log level
     */
    public $Level;

    /**
     * @var string Log source
     */
    public $Source;

    /**
     * @var integer Number of retries
     */
    public $RetryNum;

    /**
     * @param string $FunctionName Function name
     * @param string $RetMsg Return value after the function is executed
     * @param string $RequestId RequestId corresponding to the executed function
     * @param string $StartTime Start time of the function execution
     * @param integer $RetCode Function execution result. `0` indicates successful execution and other values indicate failure.
     * @param integer $InvokeFinished It specifies whether the function invocation is finished. `1` indicates execution completion and other values indicate that exceptions occurred during the invocation.
     * @param float $Duration Duration of the function execution. The unit is millisecond (ms).
     * @param integer $BillDuration Function billing duration. The unit is millisecond (ms). The value is rounded up to a multiple of 100 ms.
     * @param integer $MemUsage Actual memory size used during the function execution. The unit is byte.
     * @param string $Log Function execution logs
     * @param string $Level Log level
     * @param string $Source Log source
     * @param integer $RetryNum Number of retries
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("InvokeFinished",$param) and $param["InvokeFinished"] !== null) {
            $this->InvokeFinished = $param["InvokeFinished"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("BillDuration",$param) and $param["BillDuration"] !== null) {
            $this->BillDuration = $param["BillDuration"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RetryNum",$param) and $param["RetryNum"] !== null) {
            $this->RetryNum = $param["RetryNum"];
        }
    }
}
