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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log information
 *
 * @method string getFunctionName() Obtain Function name.
 * @method void setFunctionName(string $FunctionName) Set Function name.
 * @method string getRetMsg() Obtain Returned value after function execution
 * @method void setRetMsg(string $RetMsg) Set Returned value after function execution
 * @method string getRequestId() Obtain requestId for executing the function
 * @method void setRequestId(string $RequestId) Set requestId for executing the function
 * @method string getStartTime() Obtain Time point when the function starts execution
 * @method void setStartTime(string $StartTime) Set Time point when the function starts execution
 * @method integer getRetCode() Obtain Function execution result. 0 indicates successful execution, 2 indicates the function is running, 3 indicates an execution interrupt, and other values indicate failure.
 * @method void setRetCode(integer $RetCode) Set Function execution result. 0 indicates successful execution, 2 indicates the function is running, 3 indicates an execution interrupt, and other values indicate failure.
 * @method integer getInvokeFinished() Obtain Whether the function call ends. If so, 1 means execution ended, and additional values indicate a call exception.
 * @method void setInvokeFinished(integer $InvokeFinished) Set Whether the function call ends. If so, 1 means execution ended, and additional values indicate a call exception.
 * @method float getDuration() Obtain Function execution duration in milliseconds.
 * @method void setDuration(float $Duration) Set Function execution duration in milliseconds.
 * @method integer getBillDuration() Obtain Billing duration of a function. It is rounded up to the nearest 100 ms based on the duration, in ms.
 * @method void setBillDuration(integer $BillDuration) Set Billing duration of a function. It is rounded up to the nearest 100 ms based on the duration, in ms.
 * @method integer getMemUsage() Obtain Memory size actually consumed during function execution, in bytes.
 * @method void setMemUsage(integer $MemUsage) Set Memory size actually consumed during function execution, in bytes.
 * @method string getLog() Obtain Log output during function execution
 * @method void setLog(string $Log) Set Log output during function execution
 * @method string getLevel() Obtain Log level.
 * @method void setLevel(string $Level) Set Log level.
 * @method string getSource() Obtain Log source
 * @method void setSource(string $Source) Set Log source
 * @method integer getRetryNum() Obtain Number of retries.
 * @method void setRetryNum(integer $RetryNum) Set Number of retries.
 */
class FunctionLog extends AbstractModel
{
    /**
     * @var string Function name.
     */
    public $FunctionName;

    /**
     * @var string Returned value after function execution
     */
    public $RetMsg;

    /**
     * @var string requestId for executing the function
     */
    public $RequestId;

    /**
     * @var string Time point when the function starts execution
     */
    public $StartTime;

    /**
     * @var integer Function execution result. 0 indicates successful execution, 2 indicates the function is running, 3 indicates an execution interrupt, and other values indicate failure.
     */
    public $RetCode;

    /**
     * @var integer Whether the function call ends. If so, 1 means execution ended, and additional values indicate a call exception.
     */
    public $InvokeFinished;

    /**
     * @var float Function execution duration in milliseconds.
     */
    public $Duration;

    /**
     * @var integer Billing duration of a function. It is rounded up to the nearest 100 ms based on the duration, in ms.
     */
    public $BillDuration;

    /**
     * @var integer Memory size actually consumed during function execution, in bytes.
     */
    public $MemUsage;

    /**
     * @var string Log output during function execution
     */
    public $Log;

    /**
     * @var string Log level.
     * @deprecated
     */
    public $Level;

    /**
     * @var string Log source
     * @deprecated
     */
    public $Source;

    /**
     * @var integer Number of retries.
     */
    public $RetryNum;

    /**
     * @param string $FunctionName Function name.
     * @param string $RetMsg Returned value after function execution
     * @param string $RequestId requestId for executing the function
     * @param string $StartTime Time point when the function starts execution
     * @param integer $RetCode Function execution result. 0 indicates successful execution, 2 indicates the function is running, 3 indicates an execution interrupt, and other values indicate failure.
     * @param integer $InvokeFinished Whether the function call ends. If so, 1 means execution ended, and additional values indicate a call exception.
     * @param float $Duration Function execution duration in milliseconds.
     * @param integer $BillDuration Billing duration of a function. It is rounded up to the nearest 100 ms based on the duration, in ms.
     * @param integer $MemUsage Memory size actually consumed during function execution, in bytes.
     * @param string $Log Log output during function execution
     * @param string $Level Log level.
     * @param string $Source Log source
     * @param integer $RetryNum Number of retries.
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
