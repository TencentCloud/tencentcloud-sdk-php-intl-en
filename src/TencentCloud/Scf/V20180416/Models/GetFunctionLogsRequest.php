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
 * GetFunctionLogs request structure.
 *
 * @method string getFunctionName() Obtain Function name.
- To ensure the compatibility of the [`GetFunctionLogs`](https://intl.cloud.tencent.com/document/product/583/18583?from_cn_redirect=1) API, the input parameter `FunctionName` is optional, but we recommend you enter it; otherwise, log acquisition may fail.
- After the function is connected to CLS, we recommend you use the [related CLS API](https://intl.cloud.tencent.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
 * @method void setFunctionName(string $FunctionName) Set Function name.
- To ensure the compatibility of the [`GetFunctionLogs`](https://intl.cloud.tencent.com/document/product/583/18583?from_cn_redirect=1) API, the input parameter `FunctionName` is optional, but we recommend you enter it; otherwise, log acquisition may fail.
- After the function is connected to CLS, we recommend you use the [related CLS API](https://intl.cloud.tencent.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
 * @method integer getOffset() Obtain Data offset. The addition of `Offset` and `Limit` cannot exceed 10,000.
 * @method void setOffset(integer $Offset) Set Data offset. The addition of `Offset` and `Limit` cannot exceed 10,000.
 * @method integer getLimit() Obtain Length of the return data. The addition of `Offset` and `Limit` cannot exceed 10,000.
 * @method void setLimit(integer $Limit) Set Length of the return data. The addition of `Offset` and `Limit` cannot exceed 10,000.
 * @method string getOrder() Obtain It specifies whether to sort the logs in an ascending or descending order. The value is `desc` or `asc`.
 * @method void setOrder(string $Order) Set It specifies whether to sort the logs in an ascending or descending order. The value is `desc` or `asc`.
 * @method string getOrderBy() Obtain It specifies the sorting order of the logs based on a specified field, such as `function_name`, `duration`, `mem_usage`, and `start_time`.
 * @method void setOrderBy(string $OrderBy) Set It specifies the sorting order of the logs based on a specified field, such as `function_name`, `duration`, `mem_usage`, and `start_time`.
 * @method LogFilter getFilter() Obtain Log filter used to identify whether to return logs of successful or failed requests. `filter.RetCode=not0` indicates that only the logs of failed requests will be returned. `filter.RetCode=is0` indicates that only the logs of successful requests will be returned. If this parameter is left blank, all logs will be returned. 
 * @method void setFilter(LogFilter $Filter) Set Log filter used to identify whether to return logs of successful or failed requests. `filter.RetCode=not0` indicates that only the logs of failed requests will be returned. `filter.RetCode=is0` indicates that only the logs of successful requests will be returned. If this parameter is left blank, all logs will be returned. 
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method string getFunctionRequestId() Obtain RequestId corresponding to the executed function
 * @method void setFunctionRequestId(string $FunctionRequestId) Set RequestId corresponding to the executed function
 * @method string getStartTime() Obtain Query date, for example, 2017-05-16 20:00:00. The date must be within one day of the end time.
 * @method void setStartTime(string $StartTime) Set Query date, for example, 2017-05-16 20:00:00. The date must be within one day of the end time.
 * @method string getEndTime() Obtain Query date, for example, 2017-05-16 20:59:59. The date must be within one day of the start time.
 * @method void setEndTime(string $EndTime) Set Query date, for example, 2017-05-16 20:59:59. The date must be within one day of the start time.
 * @method LogSearchContext getSearchContext() Obtain This field is disused.
 * @method void setSearchContext(LogSearchContext $SearchContext) Set This field is disused.
 */
class GetFunctionLogsRequest extends AbstractModel
{
    /**
     * @var string Function name.
- To ensure the compatibility of the [`GetFunctionLogs`](https://intl.cloud.tencent.com/document/product/583/18583?from_cn_redirect=1) API, the input parameter `FunctionName` is optional, but we recommend you enter it; otherwise, log acquisition may fail.
- After the function is connected to CLS, we recommend you use the [related CLS API](https://intl.cloud.tencent.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
     */
    public $FunctionName;

    /**
     * @var integer Data offset. The addition of `Offset` and `Limit` cannot exceed 10,000.
     */
    public $Offset;

    /**
     * @var integer Length of the return data. The addition of `Offset` and `Limit` cannot exceed 10,000.
     */
    public $Limit;

    /**
     * @var string It specifies whether to sort the logs in an ascending or descending order. The value is `desc` or `asc`.
     */
    public $Order;

    /**
     * @var string It specifies the sorting order of the logs based on a specified field, such as `function_name`, `duration`, `mem_usage`, and `start_time`.
     */
    public $OrderBy;

    /**
     * @var LogFilter Log filter used to identify whether to return logs of successful or failed requests. `filter.RetCode=not0` indicates that only the logs of failed requests will be returned. `filter.RetCode=is0` indicates that only the logs of successful requests will be returned. If this parameter is left blank, all logs will be returned. 
     */
    public $Filter;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var string RequestId corresponding to the executed function
     */
    public $FunctionRequestId;

    /**
     * @var string Query date, for example, 2017-05-16 20:00:00. The date must be within one day of the end time.
     */
    public $StartTime;

    /**
     * @var string Query date, for example, 2017-05-16 20:59:59. The date must be within one day of the start time.
     */
    public $EndTime;

    /**
     * @var LogSearchContext This field is disused.
     */
    public $SearchContext;

    /**
     * @param string $FunctionName Function name.
- To ensure the compatibility of the [`GetFunctionLogs`](https://intl.cloud.tencent.com/document/product/583/18583?from_cn_redirect=1) API, the input parameter `FunctionName` is optional, but we recommend you enter it; otherwise, log acquisition may fail.
- After the function is connected to CLS, we recommend you use the [related CLS API](https://intl.cloud.tencent.com/document/product/614/16875?from_cn_redirect=1) to get the best log retrieval experience.
     * @param integer $Offset Data offset. The addition of `Offset` and `Limit` cannot exceed 10,000.
     * @param integer $Limit Length of the return data. The addition of `Offset` and `Limit` cannot exceed 10,000.
     * @param string $Order It specifies whether to sort the logs in an ascending or descending order. The value is `desc` or `asc`.
     * @param string $OrderBy It specifies the sorting order of the logs based on a specified field, such as `function_name`, `duration`, `mem_usage`, and `start_time`.
     * @param LogFilter $Filter Log filter used to identify whether to return logs of successful or failed requests. `filter.RetCode=not0` indicates that only the logs of failed requests will be returned. `filter.RetCode=is0` indicates that only the logs of successful requests will be returned. If this parameter is left blank, all logs will be returned. 
     * @param string $Namespace Function namespace
     * @param string $Qualifier Function version
     * @param string $FunctionRequestId RequestId corresponding to the executed function
     * @param string $StartTime Query date, for example, 2017-05-16 20:00:00. The date must be within one day of the end time.
     * @param string $EndTime Query date, for example, 2017-05-16 20:59:59. The date must be within one day of the start time.
     * @param LogSearchContext $SearchContext This field is disused.
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
