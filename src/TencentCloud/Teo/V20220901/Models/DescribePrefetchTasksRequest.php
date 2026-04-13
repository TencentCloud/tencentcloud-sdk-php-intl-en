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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrefetchTasks request structure.
 *
 * @method string getZoneId() Obtain Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
 * @method void setZoneId(string $ZoneId) Set Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
 * @method string getStartTime() Obtain Start time of the query. Either time or job-id is required.
 * @method void setStartTime(string $StartTime) Set Start time of the query. Either time or job-id is required.
 * @method string getEndTime() Obtain End time of the query. Either time or job-id is required.
 * @method void setEndTime(string $EndTime) Set End time of the query. Either time or job-id is required.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter criteria. the maximum number of Filters.Values is 20. the detailed filter criteria are as follows: <li>job-id: filter by task id in the format like 1379afjk91u32h. multiple Values and fuzzy queries are not supported.</li><li>target: filter by target resource information in the format like http://www.qq.com/1.txt. multiple Values and fuzzy queries are not supported.</li><li>domains: filter by domain name in the format like www.qq.com. fuzzy queries are not supported.</li><li>statuses: filter by task status. fuzzy queries are not supported. options:<br>  processing: processing<br>  success: successful<br>  failed: failed<br>  timeout: timed out<br>  canceled: canceled<br>  invalid: invalid, that is, the origin server response status code is not 2xx. please check the origin server service.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. the maximum number of Filters.Values is 20. the detailed filter criteria are as follows: <li>job-id: filter by task id in the format like 1379afjk91u32h. multiple Values and fuzzy queries are not supported.</li><li>target: filter by target resource information in the format like http://www.qq.com/1.txt. multiple Values and fuzzy queries are not supported.</li><li>domains: filter by domain name in the format like www.qq.com. fuzzy queries are not supported.</li><li>statuses: filter by task status. fuzzy queries are not supported. options:<br>  processing: processing<br>  success: successful<br>  failed: failed<br>  timeout: timed out<br>  canceled: canceled<br>  invalid: invalid, that is, the origin server response status code is not 2xx. please check the origin server service.</li>.
 */
class DescribePrefetchTasksRequest extends AbstractModel
{
    /**
     * @var string Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
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
     * @var integer Offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. the maximum number of Filters.Values is 20. the detailed filter criteria are as follows: <li>job-id: filter by task id in the format like 1379afjk91u32h. multiple Values and fuzzy queries are not supported.</li><li>target: filter by target resource information in the format like http://www.qq.com/1.txt. multiple Values and fuzzy queries are not supported.</li><li>domains: filter by domain name in the format like www.qq.com. fuzzy queries are not supported.</li><li>statuses: filter by task status. fuzzy queries are not supported. options:<br>  processing: processing<br>  success: successful<br>  failed: failed<br>  timeout: timed out<br>  canceled: canceled<br>  invalid: invalid, that is, the origin server response status code is not 2xx. please check the origin server service.</li>.
     */
    public $Filters;

    /**
     * @param string $ZoneId Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
     * @param string $StartTime Start time of the query. Either time or job-id is required.
     * @param string $EndTime End time of the query. Either time or job-id is required.
     * @param integer $Offset Offset of paginated query. Default value: 0.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter criteria. the maximum number of Filters.Values is 20. the detailed filter criteria are as follows: <li>job-id: filter by task id in the format like 1379afjk91u32h. multiple Values and fuzzy queries are not supported.</li><li>target: filter by target resource information in the format like http://www.qq.com/1.txt. multiple Values and fuzzy queries are not supported.</li><li>domains: filter by domain name in the format like www.qq.com. fuzzy queries are not supported.</li><li>statuses: filter by task status. fuzzy queries are not supported. options:<br>  processing: processing<br>  success: successful<br>  failed: failed<br>  timeout: timed out<br>  canceled: canceled<br>  invalid: invalid, that is, the origin server response status code is not 2xx. please check the origin server service.</li>.
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
