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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixTaskList request structure.
 *
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filtering Conditions<br>Supported Filter.Name:<br>TaskId - Exact match, filter by task ID<br>JobId - Exact match, filter by task JobId, corresponding to the task ID of the background job system<br>FixStatus - Exact match, filter by remediation status: 0-Initialization 1-In remediation 2-Repair successful 3-Partially fix failed 4-All fix failed 5-Stop fix<br>StartTime - Range match, remediation startup time range, input two values to indicate start and end time<br>AppId - Exact match, filter by creator AppId<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>TaskName - Fuzzy matching, filter by vulnerability name/CVE ID/KB patch name, matching task associated vulnerability or KB patch</p>
 * @method void setFilters(array $Filters) Set <p>Filtering Conditions<br>Supported Filter.Name:<br>TaskId - Exact match, filter by task ID<br>JobId - Exact match, filter by task JobId, corresponding to the task ID of the background job system<br>FixStatus - Exact match, filter by remediation status: 0-Initialization 1-In remediation 2-Repair successful 3-Partially fix failed 4-All fix failed 5-Stop fix<br>StartTime - Range match, remediation startup time range, input two values to indicate start and end time<br>AppId - Exact match, filter by creator AppId<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>TaskName - Fuzzy matching, filter by vulnerability name/CVE ID/KB patch name, matching task associated vulnerability or KB patch</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time<br>CreateTime: Sort by creation time</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time<br>CreateTime: Sort by creation time</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array <p>Filtering Conditions<br>Supported Filter.Name:<br>TaskId - Exact match, filter by task ID<br>JobId - Exact match, filter by task JobId, corresponding to the task ID of the background job system<br>FixStatus - Exact match, filter by remediation status: 0-Initialization 1-In remediation 2-Repair successful 3-Partially fix failed 4-All fix failed 5-Stop fix<br>StartTime - Range match, remediation startup time range, input two values to indicate start and end time<br>AppId - Exact match, filter by creator AppId<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>TaskName - Fuzzy matching, filter by vulnerability name/CVE ID/KB patch name, matching task associated vulnerability or KB patch</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time<br>CreateTime: Sort by creation time</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
     */
    public $By;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param array $Filters <p>Filtering Conditions<br>Supported Filter.Name:<br>TaskId - Exact match, filter by task ID<br>JobId - Exact match, filter by task JobId, corresponding to the task ID of the background job system<br>FixStatus - Exact match, filter by remediation status: 0-Initialization 1-In remediation 2-Repair successful 3-Partially fix failed 4-All fix failed 5-Stop fix<br>StartTime - Range match, remediation startup time range, input two values to indicate start and end time<br>AppId - Exact match, filter by creator AppId<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>TaskName - Fuzzy matching, filter by vulnerability name/CVE ID/KB patch name, matching task associated vulnerability or KB patch</p>
     * @param string $Order <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time<br>CreateTime: Sort by creation time</p>
     * @param string $By <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
