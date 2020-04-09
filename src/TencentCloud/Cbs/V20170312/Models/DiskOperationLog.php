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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The operation log of the cloud disk.
 *
 * @method string getOperator() Obtain UIN of operator.
 * @method void setOperator(string $Operator) Set UIN of operator.
 * @method string getOperation() Obtain Operation type. Value range:
CBS_OPERATION_ATTACH: Mount cloud disk
CBS_OPERATION_DETACH: Unmount cloud disk
CBS_OPERATION_RENEW: Renew
CBS_OPERATION_EXPAND: Expand
CBS_OPERATION_CREATE: Create
CBS_OPERATION_ISOLATE: Isolate
CBS_OPERATION_MODIFY: Modify cloud disk attributes
ASP_OPERATION_BIND: Associate scheduled snapshot policy
ASP_OPERATION_UNBIND: Cancel associated scheduled snapshot policy
 * @method void setOperation(string $Operation) Set Operation type. Value range:
CBS_OPERATION_ATTACH: Mount cloud disk
CBS_OPERATION_DETACH: Unmount cloud disk
CBS_OPERATION_RENEW: Renew
CBS_OPERATION_EXPAND: Expand
CBS_OPERATION_CREATE: Create
CBS_OPERATION_ISOLATE: Isolate
CBS_OPERATION_MODIFY: Modify cloud disk attributes
ASP_OPERATION_BIND: Associate scheduled snapshot policy
ASP_OPERATION_UNBIND: Cancel associated scheduled snapshot policy
 * @method string getDiskId() Obtain Cloud disk ID of operation.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID of operation.
 * @method string getOperationState() Obtain Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
 * @method void setOperationState(string $OperationState) Set Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class DiskOperationLog extends AbstractModel
{
    /**
     * @var string UIN of operator.
     */
    public $Operator;

    /**
     * @var string Operation type. Value range:
CBS_OPERATION_ATTACH: Mount cloud disk
CBS_OPERATION_DETACH: Unmount cloud disk
CBS_OPERATION_RENEW: Renew
CBS_OPERATION_EXPAND: Expand
CBS_OPERATION_CREATE: Create
CBS_OPERATION_ISOLATE: Isolate
CBS_OPERATION_MODIFY: Modify cloud disk attributes
ASP_OPERATION_BIND: Associate scheduled snapshot policy
ASP_OPERATION_UNBIND: Cancel associated scheduled snapshot policy
     */
    public $Operation;

    /**
     * @var string Cloud disk ID of operation.
     */
    public $DiskId;

    /**
     * @var string Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
     */
    public $OperationState;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param string $Operator UIN of operator.
     * @param string $Operation Operation type. Value range:
CBS_OPERATION_ATTACH: Mount cloud disk
CBS_OPERATION_DETACH: Unmount cloud disk
CBS_OPERATION_RENEW: Renew
CBS_OPERATION_EXPAND: Expand
CBS_OPERATION_CREATE: Create
CBS_OPERATION_ISOLATE: Isolate
CBS_OPERATION_MODIFY: Modify cloud disk attributes
ASP_OPERATION_BIND: Associate scheduled snapshot policy
ASP_OPERATION_UNBIND: Cancel associated scheduled snapshot policy
     * @param string $DiskId Cloud disk ID of operation.
     * @param string $OperationState Status of operation. Value range:
SUCCESS: Operation successful 
FAILED: Operation failed 
PROCESSING: Operation in process
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("OperationState",$param) and $param["OperationState"] !== null) {
            $this->OperationState = $param["OperationState"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
