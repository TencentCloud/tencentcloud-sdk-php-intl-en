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
 * Response of the executed function
 *
 * @method string getLog() Obtain It indicates the log output during the function execution. Null is returned for asynchronous invocations.
 * @method void setLog(string $Log) Set It indicates the log output during the function execution. Null is returned for asynchronous invocations.
 * @method string getRetMsg() Obtain It indicates the response from the executed function. Null is returned for asynchronous invocations.
 * @method void setRetMsg(string $RetMsg) Set It indicates the response from the executed function. Null is returned for asynchronous invocations.
 * @method string getErrMsg() Obtain It indicates the error message of the executed function. Null is returned for asynchronous invocations.
 * @method void setErrMsg(string $ErrMsg) Set It indicates the error message of the executed function. Null is returned for asynchronous invocations.
 * @method integer getMemUsage() Obtain It indicates the memory size (in bytes) when the function is running. Null is returned for asynchronous invocations.
 * @method void setMemUsage(integer $MemUsage) Set It indicates the memory size (in bytes) when the function is running. Null is returned for asynchronous invocations.
 * @method float getDuration() Obtain It indicates the duration (in milliseconds) required for running the function. Null is returned for asynchronous invocations.
 * @method void setDuration(float $Duration) Set It indicates the duration (in milliseconds) required for running the function. Null is returned for asynchronous invocations.
 * @method integer getBillDuration() Obtain It indicates the billing duration (in milliseconds) for the function. Null is returned for asynchronous invocations.
 * @method void setBillDuration(integer $BillDuration) Set It indicates the billing duration (in milliseconds) for the function. Null is returned for asynchronous invocations.
 * @method string getFunctionRequestId() Obtain ID of the executed function
 * @method void setFunctionRequestId(string $FunctionRequestId) Set ID of the executed function
 * @method integer getInvokeResult() Obtain The [status code](https://intl.cloud.tencent.com/document/product/583/42611?from_cn_redirect=1) of the request. It’s not available for `Invoke` API. 
 * @method void setInvokeResult(integer $InvokeResult) Set The [status code](https://intl.cloud.tencent.com/document/product/583/42611?from_cn_redirect=1) of the request. It’s not available for `Invoke` API. 
 */
class Result extends AbstractModel
{
    /**
     * @var string It indicates the log output during the function execution. Null is returned for asynchronous invocations.
     */
    public $Log;

    /**
     * @var string It indicates the response from the executed function. Null is returned for asynchronous invocations.
     */
    public $RetMsg;

    /**
     * @var string It indicates the error message of the executed function. Null is returned for asynchronous invocations.
     */
    public $ErrMsg;

    /**
     * @var integer It indicates the memory size (in bytes) when the function is running. Null is returned for asynchronous invocations.
     */
    public $MemUsage;

    /**
     * @var float It indicates the duration (in milliseconds) required for running the function. Null is returned for asynchronous invocations.
     */
    public $Duration;

    /**
     * @var integer It indicates the billing duration (in milliseconds) for the function. Null is returned for asynchronous invocations.
     */
    public $BillDuration;

    /**
     * @var string ID of the executed function
     */
    public $FunctionRequestId;

    /**
     * @var integer The [status code](https://intl.cloud.tencent.com/document/product/583/42611?from_cn_redirect=1) of the request. It’s not available for `Invoke` API. 
     */
    public $InvokeResult;

    /**
     * @param string $Log It indicates the log output during the function execution. Null is returned for asynchronous invocations.
     * @param string $RetMsg It indicates the response from the executed function. Null is returned for asynchronous invocations.
     * @param string $ErrMsg It indicates the error message of the executed function. Null is returned for asynchronous invocations.
     * @param integer $MemUsage It indicates the memory size (in bytes) when the function is running. Null is returned for asynchronous invocations.
     * @param float $Duration It indicates the duration (in milliseconds) required for running the function. Null is returned for asynchronous invocations.
     * @param integer $BillDuration It indicates the billing duration (in milliseconds) for the function. Null is returned for asynchronous invocations.
     * @param string $FunctionRequestId ID of the executed function
     * @param integer $InvokeResult The [status code](https://intl.cloud.tencent.com/document/product/583/42611?from_cn_redirect=1) of the request. It’s not available for `Invoke` API. 
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("BillDuration",$param) and $param["BillDuration"] !== null) {
            $this->BillDuration = $param["BillDuration"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("InvokeResult",$param) and $param["InvokeResult"] !== null) {
            $this->InvokeResult = $param["InvokeResult"];
        }
    }
}
