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
 * DescribeVulFixedList request structure.
 *
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, type filter: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, search by host name<br>InstanceId - Fuzzy matching, id search by instance<br>FixTime - Range matching, repair time range, input two values to indicate start and end time</p>
 * @method void setFilters(array $Filters) Set <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, type filter: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, search by host name<br>InstanceId - Fuzzy matching, id search by instance<br>FixTime - Range matching, repair time range, input two values to indicate start and end time</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixedListRequest extends AbstractModel
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
     * @var array <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, type filter: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, search by host name<br>InstanceId - Fuzzy matching, id search by instance<br>FixTime - Range matching, repair time range, input two values to indicate start and end time</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
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
     * @param array $Filters <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, type filter: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, search by host name<br>InstanceId - Fuzzy matching, id search by instance<br>FixTime - Range matching, repair time range, input two values to indicate start and end time</p>
     * @param string $Order <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
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
