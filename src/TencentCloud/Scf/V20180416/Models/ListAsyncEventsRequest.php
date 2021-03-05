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
 * ListAsyncEvents request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getQualifier() Obtain Filter (function version)
 * @method void setQualifier(string $Qualifier) Set Filter (function version)
 * @method array getInvokeType() Obtain Filter (invocation type list)
 * @method void setInvokeType(array $InvokeType) Set Filter (invocation type list)
 * @method array getStatus() Obtain Filter (event status list)
 * @method void setStatus(array $Status) Set Filter (event status list)
 * @method TimeInterval getStartTimeInterval() Obtain Filter (left-closed-right-open range of execution start time)
 * @method void setStartTimeInterval(TimeInterval $StartTimeInterval) Set Filter (left-closed-right-open range of execution start time)
 * @method TimeInterval getEndTimeInterval() Obtain Filter (left-closed-right-open range of execution end time)
 * @method void setEndTimeInterval(TimeInterval $EndTimeInterval) Set Filter (left-closed-right-open range of execution end time)
 * @method string getOrder() Obtain Valid values: ASC, DESC. Default value: DESC
 * @method void setOrder(string $Order) Set Valid values: ASC, DESC. Default value: DESC
 * @method string getOrderby() Obtain Valid values: StartTime, EndTime. Default value: StartTime
 * @method void setOrderby(string $Orderby) Set Valid values: StartTime, EndTime. Default value: StartTime
 * @method integer getOffset() Obtain Data offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100
 * @method string getInvokeRequestId() Obtain Filter (event invocation request ID)
 * @method void setInvokeRequestId(string $InvokeRequestId) Set Filter (event invocation request ID)
 */
class ListAsyncEventsRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Filter (function version)
     */
    public $Qualifier;

    /**
     * @var array Filter (invocation type list)
     */
    public $InvokeType;

    /**
     * @var array Filter (event status list)
     */
    public $Status;

    /**
     * @var TimeInterval Filter (left-closed-right-open range of execution start time)
     */
    public $StartTimeInterval;

    /**
     * @var TimeInterval Filter (left-closed-right-open range of execution end time)
     */
    public $EndTimeInterval;

    /**
     * @var string Valid values: ASC, DESC. Default value: DESC
     */
    public $Order;

    /**
     * @var string Valid values: StartTime, EndTime. Default value: StartTime
     */
    public $Orderby;

    /**
     * @var integer Data offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @var string Filter (event invocation request ID)
     */
    public $InvokeRequestId;

    /**
     * @param string $FunctionName Function name
     * @param string $Namespace Namespace
     * @param string $Qualifier Filter (function version)
     * @param array $InvokeType Filter (invocation type list)
     * @param array $Status Filter (event status list)
     * @param TimeInterval $StartTimeInterval Filter (left-closed-right-open range of execution start time)
     * @param TimeInterval $EndTimeInterval Filter (left-closed-right-open range of execution end time)
     * @param string $Order Valid values: ASC, DESC. Default value: DESC
     * @param string $Orderby Valid values: StartTime, EndTime. Default value: StartTime
     * @param integer $Offset Data offset. Default value: 0
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100
     * @param string $InvokeRequestId Filter (event invocation request ID)
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTimeInterval",$param) and $param["StartTimeInterval"] !== null) {
            $this->StartTimeInterval = new TimeInterval();
            $this->StartTimeInterval->deserialize($param["StartTimeInterval"]);
        }

        if (array_key_exists("EndTimeInterval",$param) and $param["EndTimeInterval"] !== null) {
            $this->EndTimeInterval = new TimeInterval();
            $this->EndTimeInterval->deserialize($param["EndTimeInterval"]);
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }
    }
}
