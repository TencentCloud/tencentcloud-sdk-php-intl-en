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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks request structure.
 *
 * @method string getZoneId() Obtain ZoneId. The parameter is required.
 * @method void setZoneId(string $ZoneId) Set ZoneId. The parameter is required.
 * @method string getStartTime() Obtain Start time of the query. Either time or job-id is required.
 * @method void setStartTime(string $StartTime) Set Start time of the query. Either time or job-id is required.
 * @method string getEndTime() Obtain End time of the query. Either time or job-id is required.
 * @method void setEndTime(string $EndTime) Set End time of the query. Either time or job-id is required.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: `0`.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 * @method array getFilters() Obtain Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>job-id: Filter based on task ID. job-id format: 1379afjk91u32h. Multiple values are not supported, Fuzzy search is not supported;</li>
<li>target: Filter based on: target resource information. target format: http://www.qq.com/1.txt or tag1. Multiple values are not supported, Fuzzy search is not supported; </li>
<li>domains: Filter based on domain name. domains format: www.qq.com, Fuzzy search is not supported; </li>
<li>statuses: Filter based on task status, Fuzzy search is not supported. Options: <br>processing: Processing<br>success: Success<br>failed: Failure<br>timeout: Timeout</li>
<li>type: Filter based on cleared cache type. Multiple values are not supported, Fuzzy search is not supported. Options:<br> purge_url: URL<br> purge_prefix: Prefix<br> purge_all: All cache content<br> purge_host: Hostname<br> purge_cache_tag: CacheTag</li>
 * @method void setFilters(array $Filters) Set Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>job-id: Filter based on task ID. job-id format: 1379afjk91u32h. Multiple values are not supported, Fuzzy search is not supported;</li>
<li>target: Filter based on: target resource information. target format: http://www.qq.com/1.txt or tag1. Multiple values are not supported, Fuzzy search is not supported; </li>
<li>domains: Filter based on domain name. domains format: www.qq.com, Fuzzy search is not supported; </li>
<li>statuses: Filter based on task status, Fuzzy search is not supported. Options: <br>processing: Processing<br>success: Success<br>failed: Failure<br>timeout: Timeout</li>
<li>type: Filter based on cleared cache type. Multiple values are not supported, Fuzzy search is not supported. Options:<br> purge_url: URL<br> purge_prefix: Prefix<br> purge_all: All cache content<br> purge_host: Hostname<br> purge_cache_tag: CacheTag</li>
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string ZoneId. The parameter is required.
     */
    public $ZoneId;

    /**
     * @var string Start time of the query. Either time or job-id is required.
     */
    public $StartTime;

    /**
     * @var string End time of the query. Either time or job-id is required.
     */
    public $EndTime;

    /**
     * @var integer Offset for paginated queries. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
     */
    public $Limit;

    /**
     * @var array Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>job-id: Filter based on task ID. job-id format: 1379afjk91u32h. Multiple values are not supported, Fuzzy search is not supported;</li>
<li>target: Filter based on: target resource information. target format: http://www.qq.com/1.txt or tag1. Multiple values are not supported, Fuzzy search is not supported; </li>
<li>domains: Filter based on domain name. domains format: www.qq.com, Fuzzy search is not supported; </li>
<li>statuses: Filter based on task status, Fuzzy search is not supported. Options: <br>processing: Processing<br>success: Success<br>failed: Failure<br>timeout: Timeout</li>
<li>type: Filter based on cleared cache type. Multiple values are not supported, Fuzzy search is not supported. Options:<br> purge_url: URL<br> purge_prefix: Prefix<br> purge_all: All cache content<br> purge_host: Hostname<br> purge_cache_tag: CacheTag</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId ZoneId. The parameter is required.
     * @param string $StartTime Start time of the query. Either time or job-id is required.
     * @param string $EndTime End time of the query. Either time or job-id is required.
     * @param integer $Offset Offset for paginated queries. Default value: `0`.
     * @param integer $Limit Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
     * @param array $Filters Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>job-id: Filter based on task ID. job-id format: 1379afjk91u32h. Multiple values are not supported, Fuzzy search is not supported;</li>
<li>target: Filter based on: target resource information. target format: http://www.qq.com/1.txt or tag1. Multiple values are not supported, Fuzzy search is not supported; </li>
<li>domains: Filter based on domain name. domains format: www.qq.com, Fuzzy search is not supported; </li>
<li>statuses: Filter based on task status, Fuzzy search is not supported. Options: <br>processing: Processing<br>success: Success<br>failed: Failure<br>timeout: Timeout</li>
<li>type: Filter based on cleared cache type. Multiple values are not supported, Fuzzy search is not supported. Options:<br> purge_url: URL<br> purge_prefix: Prefix<br> purge_all: All cache content<br> purge_host: Hostname<br> purge_cache_tag: CacheTag</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
