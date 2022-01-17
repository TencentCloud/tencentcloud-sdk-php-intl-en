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
 * Running status of the function
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getRetMsg() Obtain Return value after the function is executed
 * @method void setRetMsg(string $RetMsg) Set Return value after the function is executed
 * @method string getRequestId() Obtain Request ID
 * @method void setRequestId(string $RequestId) Set Request ID
 * @method string getStartTime() Obtain Request start time
 * @method void setStartTime(string $StartTime) Set Request start time
 * @method integer getRetCode() Obtain Result of the request. `0`: succeeded, `1`: running, `-1`: exception
 * @method void setRetCode(integer $RetCode) Set Result of the request. `0`: succeeded, `1`: running, `-1`: exception
 * @method float getDuration() Obtain Time consumed for the request in ms
 * @method void setDuration(float $Duration) Set Time consumed for the request in ms
 * @method float getMemUsage() Obtain Time consumed by the request in MB
 * @method void setMemUsage(float $MemUsage) Set Time consumed by the request in MB
 * @method integer getRetryNum() Obtain Retry Attempts
 * @method void setRetryNum(integer $RetryNum) Set Retry Attempts
 */
class RequestStatus extends AbstractModel
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
     * @var string Request ID
     */
    public $RequestId;

    /**
     * @var string Request start time
     */
    public $StartTime;

    /**
     * @var integer Result of the request. `0`: succeeded, `1`: running, `-1`: exception
     */
    public $RetCode;

    /**
     * @var float Time consumed for the request in ms
     */
    public $Duration;

    /**
     * @var float Time consumed by the request in MB
     */
    public $MemUsage;

    /**
     * @var integer Retry Attempts
     */
    public $RetryNum;

    /**
     * @param string $FunctionName Function name
     * @param string $RetMsg Return value after the function is executed
     * @param string $RequestId Request ID
     * @param string $StartTime Request start time
     * @param integer $RetCode Result of the request. `0`: succeeded, `1`: running, `-1`: exception
     * @param float $Duration Time consumed for the request in ms
     * @param float $MemUsage Time consumed by the request in MB
     * @param integer $RetryNum Retry Attempts
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("RetryNum",$param) and $param["RetryNum"] !== null) {
            $this->RetryNum = $param["RetryNum"];
        }
    }
}
