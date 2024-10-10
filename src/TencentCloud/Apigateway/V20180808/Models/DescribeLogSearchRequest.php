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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogSearch request structure.
 *
 * @method string getStartTime() Obtain Log start time
 * @method void setStartTime(string $StartTime) Set Log start time
 * @method string getEndTime() Obtain Log end time
 * @method void setEndTime(string $EndTime) Set Log end time
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method array getFilters() Obtain Reserved field
 * @method void setFilters(array $Filters) Set Reserved field
 * @method integer getLimit() Obtain Number of logs to be returned at a time. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of logs to be returned at a time. Maximum value: 100
 * @method string getConText() Obtain Subsequent content can be obtained based on the `ConText` returned last time. Up to 10,000 data entries can be obtained
 * @method void setConText(string $ConText) Set Subsequent content can be obtained based on the `ConText` returned last time. Up to 10,000 data entries can be obtained
 * @method string getSort() Obtain Sorting by time. Valid values: asc (ascending), desc (descending). Default value: desc
 * @method void setSort(string $Sort) Set Sorting by time. Valid values: asc (ascending), desc (descending). Default value: desc
 * @method string getQuery() Obtain Reserved field
 * @method void setQuery(string $Query) Set Reserved field
 * @method array getLogQuerys() Obtain Search criterion. Valid values:
req_id: "="
api_id: "="
cip: "="
uip: ":"
err_msg: ":"
rsp_st: "=", "!=", ":", ">", "<"
req_t: ">=", "<="

Note:
":" indicates included, and "!=" indicates not equal to. For the meanings of fields, please see the `LogSet` description of the output parameter
 * @method void setLogQuerys(array $LogQuerys) Set Search criterion. Valid values:
req_id: "="
api_id: "="
cip: "="
uip: ":"
err_msg: ":"
rsp_st: "=", "!=", ":", ">", "<"
req_t: ">=", "<="

Note:
":" indicates included, and "!=" indicates not equal to. For the meanings of fields, please see the `LogSet` description of the output parameter
 */
class DescribeLogSearchRequest extends AbstractModel
{
    /**
     * @var string Log start time
     */
    public $StartTime;

    /**
     * @var string Log end time
     */
    public $EndTime;

    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var array Reserved field
     */
    public $Filters;

    /**
     * @var integer Number of logs to be returned at a time. Maximum value: 100
     */
    public $Limit;

    /**
     * @var string Subsequent content can be obtained based on the `ConText` returned last time. Up to 10,000 data entries can be obtained
     */
    public $ConText;

    /**
     * @var string Sorting by time. Valid values: asc (ascending), desc (descending). Default value: desc
     */
    public $Sort;

    /**
     * @var string Reserved field
     */
    public $Query;

    /**
     * @var array Search criterion. Valid values:
req_id: "="
api_id: "="
cip: "="
uip: ":"
err_msg: ":"
rsp_st: "=", "!=", ":", ">", "<"
req_t: ">=", "<="

Note:
":" indicates included, and "!=" indicates not equal to. For the meanings of fields, please see the `LogSet` description of the output parameter
     * @deprecated
     */
    public $LogQuerys;

    /**
     * @param string $StartTime Log start time
     * @param string $EndTime Log end time
     * @param string $ServiceId Service ID
     * @param array $Filters Reserved field
     * @param integer $Limit Number of logs to be returned at a time. Maximum value: 100
     * @param string $ConText Subsequent content can be obtained based on the `ConText` returned last time. Up to 10,000 data entries can be obtained
     * @param string $Sort Sorting by time. Valid values: asc (ascending), desc (descending). Default value: desc
     * @param string $Query Reserved field
     * @param array $LogQuerys Search criterion. Valid values:
req_id: "="
api_id: "="
cip: "="
uip: ":"
err_msg: ":"
rsp_st: "=", "!=", ":", ">", "<"
req_t: ">=", "<="

Note:
":" indicates included, and "!=" indicates not equal to. For the meanings of fields, please see the `LogSet` description of the output parameter
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConText",$param) and $param["ConText"] !== null) {
            $this->ConText = $param["ConText"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("LogQuerys",$param) and $param["LogQuerys"] !== null) {
            $this->LogQuerys = [];
            foreach ($param["LogQuerys"] as $key => $value){
                $obj = new LogQuery();
                $obj->deserialize($value);
                array_push($this->LogQuerys, $obj);
            }
        }
    }
}
