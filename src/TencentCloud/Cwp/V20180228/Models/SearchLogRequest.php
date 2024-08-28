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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog request structure.
 *
 * @method integer getStartTime() Obtain Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
 * @method void setStartTime(integer $StartTime) Set Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
 * @method integer getEndTime() Obtain End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
 * @method void setEndTime(integer $EndTime) Set End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
 * @method string getQueryString() Obtain Statement for search and analysis, with a maximum length of 12 KB
 * @method void setQueryString(string $QueryString) Set Statement for search and analysis, with a maximum length of 12 KB
 * @method integer getCount() Obtain Number of raw logs returned for a single query. Maximum value: 1000. The Context parameter can be used to obtain subsequent logs.
 * @method void setCount(integer $Count) Set Number of raw logs returned for a single query. Maximum value: 1000. The Context parameter can be used to obtain subsequent logs.
 * @method string getSort() Obtain Order for returning the raw logs. Valid values: asc (ascending), desc (descending). Default value: desc.
 * @method void setSort(string $Sort) Set Order for returning the raw logs. Valid values: asc (ascending), desc (descending). Default value: desc.
 * @method string getContext() Obtain Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with a validity period of 1 hour.
 * @method void setContext(string $Context) Set Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with a validity period of 1 hour.
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
     */
    public $StartTime;

    /**
     * @var integer End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
     */
    public $EndTime;

    /**
     * @var string Statement for search and analysis, with a maximum length of 12 KB
     */
    public $QueryString;

    /**
     * @var integer Number of raw logs returned for a single query. Maximum value: 1000. The Context parameter can be used to obtain subsequent logs.
     */
    public $Count;

    /**
     * @var string Order for returning the raw logs. Valid values: asc (ascending), desc (descending). Default value: desc.
     */
    public $Sort;

    /**
     * @var string Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with a validity period of 1 hour.
     */
    public $Context;

    /**
     * @param integer $StartTime Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
     * @param integer $EndTime End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds
     * @param string $QueryString Statement for search and analysis, with a maximum length of 12 KB
     * @param integer $Count Number of raw logs returned for a single query. Maximum value: 1000. The Context parameter can be used to obtain subsequent logs.
     * @param string $Sort Order for returning the raw logs. Valid values: asc (ascending), desc (descending). Default value: desc.
     * @param string $Context Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with a validity period of 1 hour.
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

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
