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
 * Async event
 *
 * @method string getInvokeRequestId() Obtain Invocation request ID
 * @method void setInvokeRequestId(string $InvokeRequestId) Set Invocation request ID
 * @method string getInvokeType() Obtain Invocation type
 * @method void setInvokeType(string $InvokeType) Set Invocation type
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method string getStatus() Obtain Event status. Values: `RUNNING`; `FINISHED` (invoked successfully); `ABORTED` (invocation ended); `FAILED` (invocation failed)
 * @method void setStatus(string $Status) Set Event status. Values: `RUNNING`; `FINISHED` (invoked successfully); `ABORTED` (invocation ended); `FAILED` (invocation failed)
 * @method string getStartTime() Obtain Invocation start time in the format of "%Y-%m-%d %H:%M:%S.%f"
 * @method void setStartTime(string $StartTime) Set Invocation start time in the format of "%Y-%m-%d %H:%M:%S.%f"
 * @method string getEndTime() Obtain Invocation end time in the format of "%Y-%m-%d %H:%M:%S.%f"
 * @method void setEndTime(string $EndTime) Set Invocation end time in the format of "%Y-%m-%d %H:%M:%S.%f"
 */
class AsyncEvent extends AbstractModel
{
    /**
     * @var string Invocation request ID
     */
    public $InvokeRequestId;

    /**
     * @var string Invocation type
     */
    public $InvokeType;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var string Event status. Values: `RUNNING`; `FINISHED` (invoked successfully); `ABORTED` (invocation ended); `FAILED` (invocation failed)
     */
    public $Status;

    /**
     * @var string Invocation start time in the format of "%Y-%m-%d %H:%M:%S.%f"
     */
    public $StartTime;

    /**
     * @var string Invocation end time in the format of "%Y-%m-%d %H:%M:%S.%f"
     */
    public $EndTime;

    /**
     * @param string $InvokeRequestId Invocation request ID
     * @param string $InvokeType Invocation type
     * @param string $Qualifier Function version
     * @param string $Status Event status. Values: `RUNNING`; `FINISHED` (invoked successfully); `ABORTED` (invocation ended); `FAILED` (invocation failed)
     * @param string $StartTime Invocation start time in the format of "%Y-%m-%d %H:%M:%S.%f"
     * @param string $EndTime Invocation end time in the format of "%Y-%m-%d %H:%M:%S.%f"
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
        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
