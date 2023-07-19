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
 * Function list
 *
 * @method string getModTime() Obtain Modification time
 * @method void setModTime(string $ModTime) Set Modification time
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getRuntime() Obtain Runtime 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setRuntime(string $Runtime) Set Runtime 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getFunctionId() Obtain Function ID
 * @method void setFunctionId(string $FunctionId) Set Function ID
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getStatus() Obtain Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
 * @method void setStatus(string $Status) Set Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
 * @method string getStatusDesc() Obtain Function status details
 * @method void setStatusDesc(string $StatusDesc) Set Function status details
 * @method string getDescription() Obtain Function description
 * @method void setDescription(string $Description) Set Function description
 * @method array getTags() Obtain Function tag
 * @method void setTags(array $Tags) Set Function tag
 * @method string getType() Obtain Function type. The value is `HTTP` or `Event`.
 * @method void setType(string $Type) Set Function type. The value is `HTTP` or `Event`.
 * @method array getStatusReasons() Obtain Cause of function failure
 * @method void setStatusReasons(array $StatusReasons) Set Cause of function failure
 * @method integer getTotalProvisionedConcurrencyMem() Obtain Sum of provisioned concurrence memory for all function versions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalProvisionedConcurrencyMem(integer $TotalProvisionedConcurrencyMem) Set Sum of provisioned concurrence memory for all function versions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getReservedConcurrencyMem() Obtain Reserved memory for function concurrence
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReservedConcurrencyMem(integer $ReservedConcurrencyMem) Set Reserved memory for function concurrence
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAsyncRunEnable() Obtain Asynchronization attribute of the function. Values: `TRUE` and `FALSE`.
 * @method void setAsyncRunEnable(string $AsyncRunEnable) Set Asynchronization attribute of the function. Values: `TRUE` and `FALSE`.
 * @method string getTraceEnable() Obtain Whether to enable call tracing for ansynchronized functions. Values: `TRUE` and `FALSE`.
 * @method void setTraceEnable(string $TraceEnable) Set Whether to enable call tracing for ansynchronized functions. Values: `TRUE` and `FALSE`.
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string Modification time
     */
    public $ModTime;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Runtime 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Runtime;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Function ID
     */
    public $FunctionId;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
     */
    public $Status;

    /**
     * @var string Function status details
     */
    public $StatusDesc;

    /**
     * @var string Function description
     */
    public $Description;

    /**
     * @var array Function tag
     */
    public $Tags;

    /**
     * @var string Function type. The value is `HTTP` or `Event`.
     */
    public $Type;

    /**
     * @var array Cause of function failure
     */
    public $StatusReasons;

    /**
     * @var integer Sum of provisioned concurrence memory for all function versions
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalProvisionedConcurrencyMem;

    /**
     * @var integer Reserved memory for function concurrence
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReservedConcurrencyMem;

    /**
     * @var string Asynchronization attribute of the function. Values: `TRUE` and `FALSE`.
     */
    public $AsyncRunEnable;

    /**
     * @var string Whether to enable call tracing for ansynchronized functions. Values: `TRUE` and `FALSE`.
     */
    public $TraceEnable;

    /**
     * @param string $ModTime Modification time
     * @param string $AddTime Creation time
     * @param string $Runtime Runtime 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $FunctionName Function name
     * @param string $FunctionId Function ID
     * @param string $Namespace Namespace
     * @param string $Status Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
     * @param string $StatusDesc Function status details
     * @param string $Description Function description
     * @param array $Tags Function tag
     * @param string $Type Function type. The value is `HTTP` or `Event`.
     * @param array $StatusReasons Cause of function failure
     * @param integer $TotalProvisionedConcurrencyMem Sum of provisioned concurrence memory for all function versions
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ReservedConcurrencyMem Reserved memory for function concurrence
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AsyncRunEnable Asynchronization attribute of the function. Values: `TRUE` and `FALSE`.
     * @param string $TraceEnable Whether to enable call tracing for ansynchronized functions. Values: `TRUE` and `FALSE`.
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StatusReasons",$param) and $param["StatusReasons"] !== null) {
            $this->StatusReasons = [];
            foreach ($param["StatusReasons"] as $key => $value){
                $obj = new StatusReason();
                $obj->deserialize($value);
                array_push($this->StatusReasons, $obj);
            }
        }

        if (array_key_exists("TotalProvisionedConcurrencyMem",$param) and $param["TotalProvisionedConcurrencyMem"] !== null) {
            $this->TotalProvisionedConcurrencyMem = $param["TotalProvisionedConcurrencyMem"];
        }

        if (array_key_exists("ReservedConcurrencyMem",$param) and $param["ReservedConcurrencyMem"] !== null) {
            $this->ReservedConcurrencyMem = $param["ReservedConcurrencyMem"];
        }

        if (array_key_exists("AsyncRunEnable",$param) and $param["AsyncRunEnable"] !== null) {
            $this->AsyncRunEnable = $param["AsyncRunEnable"];
        }

        if (array_key_exists("TraceEnable",$param) and $param["TraceEnable"] !== null) {
            $this->TraceEnable = $param["TraceEnable"];
        }
    }
}
