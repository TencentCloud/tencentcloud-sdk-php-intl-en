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
 * Execution history of the invoker.
 *
 * @method string getInvokerId() Obtain Invoker ID.
 * @method void setInvokerId(string $InvokerId) Set Invoker ID.
 * @method string getInvokeTime() Obtain Execution time.
 * @method void setInvokeTime(string $InvokeTime) Set Execution time.
 * @method string getReason() Obtain Execution reason.
 * @method void setReason(string $Reason) Set Execution reason.
 * @method string getInvocationId() Obtain Command execution ID.
 * @method void setInvocationId(string $InvocationId) Set Command execution ID.
 * @method string getResult() Obtain Trigger result.
 * @method void setResult(string $Result) Set Trigger result.
 */
class InvokerRecord extends AbstractModel
{
    /**
     * @var string Invoker ID.
     */
    public $InvokerId;

    /**
     * @var string Execution time.
     */
    public $InvokeTime;

    /**
     * @var string Execution reason.
     */
    public $Reason;

    /**
     * @var string Command execution ID.
     */
    public $InvocationId;

    /**
     * @var string Trigger result.
     */
    public $Result;

    /**
     * @param string $InvokerId Invoker ID.
     * @param string $InvokeTime Execution time.
     * @param string $Reason Execution reason.
     * @param string $InvocationId Command execution ID.
     * @param string $Result Trigger result.
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
        if (array_key_exists("InvokerId",$param) and $param["InvokerId"] !== null) {
            $this->InvokerId = $param["InvokerId"];
        }

        if (array_key_exists("InvokeTime",$param) and $param["InvokeTime"] !== null) {
            $this->InvokeTime = $param["InvokeTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
