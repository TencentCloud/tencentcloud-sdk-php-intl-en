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
 * GetFunctionLogs request structure.
 *
 * @method string getFunctionName() Obtain Function name.
-To ensure compatibility of the [retrieve function execution log](https://www.tencentcloud.com/document/product/583/18583?from_cn_redirect=1) API `GetFunctionLogs`, the input parameter `FunctionName` remains an optional field, but it is recommended to fill in this parameter. Otherwise, log acquisition failure may occur.
- After associating a function with CLS, it is recommended to use the relevant CLS APIs (https://www.tencentcloud.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
 * @method void setFunctionName(string $FunctionName) Set Function name.
-To ensure compatibility of the [retrieve function execution log](https://www.tencentcloud.com/document/product/583/18583?from_cn_redirect=1) API `GetFunctionLogs`, the input parameter `FunctionName` remains an optional field, but it is recommended to fill in this parameter. Otherwise, log acquisition failure may occur.
- After associating a function with CLS, it is recommended to use the relevant CLS APIs (https://www.tencentcloud.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
 * @method integer getOffset() Obtain Offset of the data. Offset + Limit cannot be greater than 10000.
 * @method void setOffset(integer $Offset) Set Offset of the data. Offset + Limit cannot be greater than 10000.
 * @method integer getLimit() Obtain Length of the returned data. Offset + Limit cannot be greater than 10000.
 * @method void setLimit(integer $Limit) Set Length of the returned data. Offset + Limit cannot be greater than 10000.
 * @method string getOrder() Obtain Whether to sort logs in descending or ascending order. Available values: `desc` and `asc`.
 * @method void setOrder(string $Order) Set Whether to sort logs in descending or ascending order. Available values: `desc` and `asc`.
 * @method string getOrderBy() Obtain Sort logs by a certain field. The following fields are supported: function_name, duration, mem_usage, start_time
 * @method void setOrderBy(string $OrderBy) Set Sort logs by a certain field. The following fields are supported: function_name, duration, mem_usage, start_time
 * @method LogFilter getFilter() Obtain Log filter criteria. It can be used to distinguish correct and error logs. filter.RetCode=not0 means only return error logs, filter.RetCode=is0 means only return correct logs. If not passed, all logs are returned.
 * @method void setFilter(LogFilter $Filter) Set Log filter criteria. It can be used to distinguish correct and error logs. filter.RetCode=not0 means only return error logs, filter.RetCode=is0 means only return correct logs. If not passed, all logs are returned.
 * @method string getNamespace() Obtain Namespace of the function
 * @method void setNamespace(string $Namespace) Set Namespace of the function
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method string getFunctionRequestId() Obtain Request ID for executing the function
 * @method void setFunctionRequestId(string $FunctionRequestId) Set Request ID for executing the function
 * @method string getStartTime() Obtain Specific date of the query, for example: 2017-05-16 20:00:00. It must differ from endtime by no more than one day.
 * @method void setStartTime(string $StartTime) Set Specific date of the query, for example: 2017-05-16 20:00:00. It must differ from endtime by no more than one day.
 * @method string getEndTime() Obtain Specific date of the query, for example: 2017-05-16 20:59:59. It must differ from startTime by no more than one day.
 * @method void setEndTime(string $EndTime) Set Specific date of the query, for example: 2017-05-16 20:59:59. It must differ from startTime by no more than one day.
 * @method LogSearchContext getSearchContext() Obtain This field is offline.
 * @method void setSearchContext(LogSearchContext $SearchContext) Set This field is offline.
 */
class GetFunctionLogsRequest extends AbstractModel
{
    /**
     * @var string Function name.
-To ensure compatibility of the [retrieve function execution log](https://www.tencentcloud.com/document/product/583/18583?from_cn_redirect=1) API `GetFunctionLogs`, the input parameter `FunctionName` remains an optional field, but it is recommended to fill in this parameter. Otherwise, log acquisition failure may occur.
- After associating a function with CLS, it is recommended to use the relevant CLS APIs (https://www.tencentcloud.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
     */
    public $FunctionName;

    /**
     * @var integer Offset of the data. Offset + Limit cannot be greater than 10000.
     */
    public $Offset;

    /**
     * @var integer Length of the returned data. Offset + Limit cannot be greater than 10000.
     */
    public $Limit;

    /**
     * @var string Whether to sort logs in descending or ascending order. Available values: `desc` and `asc`.
     */
    public $Order;

    /**
     * @var string Sort logs by a certain field. The following fields are supported: function_name, duration, mem_usage, start_time
     */
    public $OrderBy;

    /**
     * @var LogFilter Log filter criteria. It can be used to distinguish correct and error logs. filter.RetCode=not0 means only return error logs, filter.RetCode=is0 means only return correct logs. If not passed, all logs are returned.
     */
    public $Filter;

    /**
     * @var string Namespace of the function
     */
    public $Namespace;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var string Request ID for executing the function
     */
    public $FunctionRequestId;

    /**
     * @var string Specific date of the query, for example: 2017-05-16 20:00:00. It must differ from endtime by no more than one day.
     */
    public $StartTime;

    /**
     * @var string Specific date of the query, for example: 2017-05-16 20:59:59. It must differ from startTime by no more than one day.
     */
    public $EndTime;

    /**
     * @var LogSearchContext This field is offline.
     */
    public $SearchContext;

    /**
     * @param string $FunctionName Function name.
-To ensure compatibility of the [retrieve function execution log](https://www.tencentcloud.com/document/product/583/18583?from_cn_redirect=1) API `GetFunctionLogs`, the input parameter `FunctionName` remains an optional field, but it is recommended to fill in this parameter. Otherwise, log acquisition failure may occur.
- After associating a function with CLS, it is recommended to use the relevant CLS APIs (https://www.tencentcloud.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
     * @param integer $Offset Offset of the data. Offset + Limit cannot be greater than 10000.
     * @param integer $Limit Length of the returned data. Offset + Limit cannot be greater than 10000.
     * @param string $Order Whether to sort logs in descending or ascending order. Available values: `desc` and `asc`.
     * @param string $OrderBy Sort logs by a certain field. The following fields are supported: function_name, duration, mem_usage, start_time
     * @param LogFilter $Filter Log filter criteria. It can be used to distinguish correct and error logs. filter.RetCode=not0 means only return error logs, filter.RetCode=is0 means only return correct logs. If not passed, all logs are returned.
     * @param string $Namespace Namespace of the function
     * @param string $Qualifier Function version
     * @param string $FunctionRequestId Request ID for executing the function
     * @param string $StartTime Specific date of the query, for example: 2017-05-16 20:00:00. It must differ from endtime by no more than one day.
     * @param string $EndTime Specific date of the query, for example: 2017-05-16 20:59:59. It must differ from startTime by no more than one day.
     * @param LogSearchContext $SearchContext This field is offline.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new LogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchContext",$param) and $param["SearchContext"] !== null) {
            $this->SearchContext = new LogSearchContext();
            $this->SearchContext->deserialize($param["SearchContext"]);
        }
    }
}
