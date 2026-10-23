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
 * DescribeLogAnalysisDetail request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getArea() Obtain <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul>Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
 * @method void setArea(string $Area) Set <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul>Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
 * @method string getStartTime() Obtain <p>Start time, example value: 2020-04 29T00:00:00Z. The maximum span supported for query start time to this day varies by package version. For more details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time, example value: 2020-04 29T00:00:00Z. The maximum span supported for query start time to this day varies by package version. For more details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
 * @method string getEndTime() Obtain <p>End time, example value: 2020-04-30T00:00:00Z. The maximum duration from the start time to the end time per request is 31 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time, example value: 2020-04-30T00:00:00Z. The maximum duration from the start time to the end time per request is 31 days.</p>
 * @method string getLogType() Obtain <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
 * @method void setLogType(string $LogType) Set <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
 * @method string getCondition() Obtain <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
 * @method void setCondition(string $Condition) Set <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
 * @method integer getLimit() Obtain <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Paginated query offset, defaults to 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset, defaults to 0.</p>
 * @method string getSort() Obtain <p>Whether raw logs are returned in time sequence. Available values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul> Default is desc.</p>
 * @method void setSort(string $Sort) Set <p>Whether raw logs are returned in time sequence. Available values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul> Default is desc.</p>
 */
class DescribeLogAnalysisDetailRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul>Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
     */
    public $Area;

    /**
     * @var string <p>Start time, example value: 2020-04 29T00:00:00Z. The maximum span supported for query start time to this day varies by package version. For more details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time, example value: 2020-04-30T00:00:00Z. The maximum duration from the start time to the end time per request is 31 days.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
     */
    public $LogType;

    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
     */
    public $Condition;

    /**
     * @var integer <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paginated query offset, defaults to 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Whether raw logs are returned in time sequence. Available values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul> Default is desc.</p>
     */
    public $Sort;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Area <p>Data service area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding Mainland China).</li></ul>Note: If the site service area is "global availability zone", you need to query the data of mainland and overseas separately to obtain all data.</p>
     * @param string $StartTime <p>Start time, example value: 2020-04 29T00:00:00Z. The maximum span supported for query start time to this day varies by package version. For more details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
     * @param string $EndTime <p>End time, example value: 2020-04-30T00:00:00Z. The maximum duration from the start time to the end time per request is 31 days.</p>
     * @param string $LogType <p>Log type. Available values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed Rule Logs.</li></ul>Defaults to l7-access-logs.</p>
     * @param string $Condition <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
     * @param integer $Limit <p>Paginated query limit. Default value: 20, maximum value: 100.</p>
     * @param integer $Offset <p>Paginated query offset, defaults to 0.</p>
     * @param string $Sort <p>Whether raw logs are returned in time sequence. Available values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul> Default is desc.</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
