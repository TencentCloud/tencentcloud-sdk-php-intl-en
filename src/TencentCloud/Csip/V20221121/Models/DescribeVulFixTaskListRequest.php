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
 * @method integer getOffset() Obtain <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported Filter.Name:<br>TaskId - Exact match, Filter by task ID<br>JobId - Exact match, Filter by task JobId, which corresponds to the task ID in the background job system<br>FixStatus - Exact match, Filter by remediation status: 0-initialization 1-in remediation 2-repair successful 3-partially failed to fix 4-all failed to fix 5-stop fix<br>StartTime - Range match, remediation start time range. Input two values to indicate the start and end time<br>AppId - Exact match, Filter by creator AppId<br>VulCategory - Exact match, Filter by vulnerability type: LINUX-LINUX software vulnerability WINDOWS-WINDOWS system patch vulnerability WEB_CMS-WEB-CMS vulnerability APPLICATION-APPLICATION vulnerability EMERGENCY-urgent vulnerability<br>TaskName - Fuzzy matching, Filter by vulnerability Name/CVE ID/KB patch Name, matching the vulnerability or KB patch associated with the task</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported Filter.Name:<br>TaskId - Exact match, Filter by task ID<br>JobId - Exact match, Filter by task JobId, which corresponds to the task ID in the background job system<br>FixStatus - Exact match, Filter by remediation status: 0-initialization 1-in remediation 2-repair successful 3-partially failed to fix 4-all failed to fix 5-stop fix<br>StartTime - Range match, remediation start time range. Input two values to indicate the start and end time<br>AppId - Exact match, Filter by creator AppId<br>VulCategory - Exact match, Filter by vulnerability type: LINUX-LINUX software vulnerability WINDOWS-WINDOWS system patch vulnerability WEB_CMS-WEB-CMS vulnerability APPLICATION-APPLICATION vulnerability EMERGENCY-urgent vulnerability<br>TaskName - Fuzzy matching, Filter by vulnerability Name/CVE ID/KB patch Name, matching the vulnerability or KB patch associated with the task</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration values:<br>StartTime: sort by repair start time<br>EndTime: sort by repair end time<br>CreateTime: sort by creation time</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration values:<br>StartTime: sort by repair start time<br>EndTime: sort by repair end time<br>CreateTime: sort by creation time</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration values:<br>asc: in ascending order<br>desc: in descending order<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration values:<br>asc: in ascending order<br>desc: in descending order<br>Default value: desc</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported Filter.Name:<br>TaskId - Exact match, Filter by task ID<br>JobId - Exact match, Filter by task JobId, which corresponds to the task ID in the background job system<br>FixStatus - Exact match, Filter by remediation status: 0-initialization 1-in remediation 2-repair successful 3-partially failed to fix 4-all failed to fix 5-stop fix<br>StartTime - Range match, remediation start time range. Input two values to indicate the start and end time<br>AppId - Exact match, Filter by creator AppId<br>VulCategory - Exact match, Filter by vulnerability type: LINUX-LINUX software vulnerability WINDOWS-WINDOWS system patch vulnerability WEB_CMS-WEB-CMS vulnerability APPLICATION-APPLICATION vulnerability EMERGENCY-urgent vulnerability<br>TaskName - Fuzzy matching, Filter by vulnerability Name/CVE ID/KB patch Name, matching the vulnerability or KB patch associated with the task</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field<br>Enumeration values:<br>StartTime: sort by repair start time<br>EndTime: sort by repair end time<br>CreateTime: sort by creation time</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting method<br>Enumeration values:<br>asc: in ascending order<br>desc: in descending order<br>Default value: desc</p>
     */
    public $By;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
     * @param array $Filters <p>Filter criteria<br>Supported Filter.Name:<br>TaskId - Exact match, Filter by task ID<br>JobId - Exact match, Filter by task JobId, which corresponds to the task ID in the background job system<br>FixStatus - Exact match, Filter by remediation status: 0-initialization 1-in remediation 2-repair successful 3-partially failed to fix 4-all failed to fix 5-stop fix<br>StartTime - Range match, remediation start time range. Input two values to indicate the start and end time<br>AppId - Exact match, Filter by creator AppId<br>VulCategory - Exact match, Filter by vulnerability type: LINUX-LINUX software vulnerability WINDOWS-WINDOWS system patch vulnerability WEB_CMS-WEB-CMS vulnerability APPLICATION-APPLICATION vulnerability EMERGENCY-urgent vulnerability<br>TaskName - Fuzzy matching, Filter by vulnerability Name/CVE ID/KB patch Name, matching the vulnerability or KB patch associated with the task</p>
     * @param string $Order <p>Sorting field<br>Enumeration values:<br>StartTime: sort by repair start time<br>EndTime: sort by repair end time<br>CreateTime: sort by creation time</p>
     * @param string $By <p>Sorting method<br>Enumeration values:<br>asc: in ascending order<br>desc: in descending order<br>Default value: desc</p>
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
