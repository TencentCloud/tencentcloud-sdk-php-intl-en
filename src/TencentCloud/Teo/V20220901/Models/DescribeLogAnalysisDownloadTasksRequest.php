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
 * DescribeLogAnalysisDownloadTasks request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getArea() Obtain <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul> Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
 * @method void setArea(string $Area) Set <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul> Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
 * @method string getLogType() Obtain <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
 * @method void setLogType(string $LogType) Set <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
 * @method array getFilters() Obtain <p>Filtering Conditions. The maximum number of Filters.Values is 20. Detailed filter criteria are as follows:<ul><li>task-id: Filter by log download task id. For optional Values, refer to the TaskId returned by the CreateLogAnalysisDownloadTask api.</li></ul></p><p>For reference: CreateLogAnalysisDownloadTask</p>
 * @method void setFilters(array $Filters) Set <p>Filtering Conditions. The maximum number of Filters.Values is 20. Detailed filter criteria are as follows:<ul><li>task-id: Filter by log download task id. For optional Values, refer to the TaskId returned by the CreateLogAnalysisDownloadTask api.</li></ul></p><p>For reference: CreateLogAnalysisDownloadTask</p>
 * @method integer getLimit() Obtain <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Paginated query offset, defaults to 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset, defaults to 0.</p>
 */
class DescribeLogAnalysisDownloadTasksRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul> Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
     */
    public $Area;

    /**
     * @var string <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
     */
    public $LogType;

    /**
     * @var array <p>Filtering Conditions. The maximum number of Filters.Values is 20. Detailed filter criteria are as follows:<ul><li>task-id: Filter by log download task id. For optional Values, refer to the TaskId returned by the CreateLogAnalysisDownloadTask api.</li></ul></p><p>For reference: CreateLogAnalysisDownloadTask</p>
     */
    public $Filters;

    /**
     * @var integer <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paginated query offset, defaults to 0.</p>
     */
    public $Offset;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Area <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul> Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
     * @param string $LogType <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
     * @param array $Filters <p>Filtering Conditions. The maximum number of Filters.Values is 20. Detailed filter criteria are as follows:<ul><li>task-id: Filter by log download task id. For optional Values, refer to the TaskId returned by the CreateLogAnalysisDownloadTask api.</li></ul></p><p>For reference: CreateLogAnalysisDownloadTask</p>
     * @param integer $Limit <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
     * @param integer $Offset <p>Paginated query offset, defaults to 0.</p>
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
