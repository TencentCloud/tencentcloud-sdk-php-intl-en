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
 * CreateVulFixedExportJob request structure.
 *
 * @method array getFilters() Obtain <p>Filter criteria (same as DescribeVulFixedList)<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, host name search<br>InstanceId - Fuzzy matching, instance ID search<br>FixTime - Range matching, repair time range, input two values for start and end time</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria (same as DescribeVulFixedList)<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, host name search<br>InstanceId - Fuzzy matching, instance ID search<br>FixTime - Range matching, repair time range, input two values for start and end time</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration value:<br>FixTime: Sort by repair time<br>VulName: Sort by vulnerability name</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending order<br>Default value: desc</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class CreateVulFixedExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Filter criteria (same as DescribeVulFixedList)<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, host name search<br>InstanceId - Fuzzy matching, instance ID search<br>FixTime - Range matching, repair time range, input two values for start and end time</p>
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
     * @param array $Filters <p>Filter criteria (same as DescribeVulFixedList)<br>Supported Filter.Name:<br>Keyword - Fuzzy matching, search by keyword (vulnerability name/CVE ID/host name/instance ID)<br>VulName - Fuzzy matching, vulnerability name search<br>Level - Exact match, filter by vulnerability level: LOW-Low risk MEDIUM-Medium risk HIGH-High risk CRITICAL-Critical<br>VprLevel - Exact match, filter by VPR rating: 1-Low 2-Medium 3-High 4-Critical<br>VulCategory - Exact match, filter by vulnerability type: LINUX-Linux software vulnerability WINDOWS-Windows system patch vulnerability WEB_CMS-Web-CMS vulnerability APPLICATION-Application vulnerability EMERGENCY-Emergency vulnerability<br>MachineName - Fuzzy matching, host name search<br>InstanceId - Fuzzy matching, instance ID search<br>FixTime - Range matching, repair time range, input two values for start and end time</p>
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
