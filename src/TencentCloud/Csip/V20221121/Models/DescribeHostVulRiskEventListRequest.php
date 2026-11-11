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
 * DescribeHostVulRiskEventList request structure.
 *
 * @method integer getOffset() Obtain <p>Pagination offset.<br>Value range: [0, +∞).<br>Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.<br>Value range: [0, +∞).<br>Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned items per page.<br>Value range: [1, 100].<br>Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned items per page.<br>Value range: [1, 100].<br>Default value: 10.</p>
 * @method array getFilters() Obtain <p>Filter.Name supported by Filter criteria: VulName - fuzzy matching, search by vulnerability Name. Category - exact matching, Filter by vulnerability Category: LINUX-LINUX software vulnerability, WINDOWS-WINDOWS system patch vulnerability, WEB_CMS-WEB-CMS vulnerability, APPLICATION-APPLICATION vulnerability, EMERGENCY-URGENT vulnerability. RiskStatus - exact matching, Filter by risk status: PENDING-PENDING, HANDLED-processed, FIXED-FIXED, SCANNING-rechecking, IGNORED-IGNORED, NOT_REQUIRED-no action is REQUIRED, DELETED-DELETED, FIXING-in remediation, NEED_REBOOT-FIXED PENDING restart, FIX_FAILED-FIX failure. Level - exact matching, Filter by vulnerability severity Level: UNKNOWN-unavailable, LOW-LOW risk, MEDIUM-MEDIUM risk, HIGH-HIGH risk, CRITICAL-CRITICAL. CVSSLevel - exact matching, compatible field, equivalent to Level. VPRLevel - exact matching, Filter by VPR repair priority: DEFERRABLE-DEFERRABLE repair, PLANNED-PLANNED repair, SOON-repair as SOON as possible, URGENT-URGENT repair. - exact matching, Filter by vulnerability ID. InstanceID - exact matching, Filter by CVM instance ID. InstanceID - exact matching, compatible field, equivalent to InstanceID. UUID - exact matching, Filter by host security UUID. LatestScanTimeStart - range matching, latest scan time start, format: YYYY-MM-DD HH:MM:ss. LatestScanTimeEnd - range matching, latest scan time end, format: YYYY-MM-DD HH:MM:ss</p>
 * @method void setFilters(array $Filters) Set <p>Filter.Name supported by Filter criteria: VulName - fuzzy matching, search by vulnerability Name. Category - exact matching, Filter by vulnerability Category: LINUX-LINUX software vulnerability, WINDOWS-WINDOWS system patch vulnerability, WEB_CMS-WEB-CMS vulnerability, APPLICATION-APPLICATION vulnerability, EMERGENCY-URGENT vulnerability. RiskStatus - exact matching, Filter by risk status: PENDING-PENDING, HANDLED-processed, FIXED-FIXED, SCANNING-rechecking, IGNORED-IGNORED, NOT_REQUIRED-no action is REQUIRED, DELETED-DELETED, FIXING-in remediation, NEED_REBOOT-FIXED PENDING restart, FIX_FAILED-FIX failure. Level - exact matching, Filter by vulnerability severity Level: UNKNOWN-unavailable, LOW-LOW risk, MEDIUM-MEDIUM risk, HIGH-HIGH risk, CRITICAL-CRITICAL. CVSSLevel - exact matching, compatible field, equivalent to Level. VPRLevel - exact matching, Filter by VPR repair priority: DEFERRABLE-DEFERRABLE repair, PLANNED-PLANNED repair, SOON-repair as SOON as possible, URGENT-URGENT repair. - exact matching, Filter by vulnerability ID. InstanceID - exact matching, Filter by CVM instance ID. InstanceID - exact matching, compatible field, equivalent to InstanceID. UUID - exact matching, Filter by host security UUID. LatestScanTimeStart - range matching, latest scan time start, format: YYYY-MM-DD HH:MM:ss. LatestScanTimeEnd - range matching, latest scan time end, format: YYYY-MM-DD HH:MM:ss</p>
 * @method string getOrder() Obtain <p>Sorting order.<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting order.<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc.</p>
 * @method string getBy() Obtain <p>Sorting field<br>Enumeration values:<br>LatestScanTime: sort by latest scan time<br>Level: sort by threat level<br>VPRLevel: sort by VPR rating<br>RiskStatus: sort by risk status<br>VulID: sort by vulnerability ID<br>InstanceID: sort by instance ID<br>Default value: LatestScanTime</p>
 * @method void setBy(string $By) Set <p>Sorting field<br>Enumeration values:<br>LatestScanTime: sort by latest scan time<br>Level: sort by threat level<br>VPRLevel: sort by VPR rating<br>RiskStatus: sort by risk status<br>VulID: sort by vulnerability ID<br>InstanceID: sort by instance ID<br>Default value: LatestScanTime</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeHostVulRiskEventListRequest extends AbstractModel
{
    /**
     * @var integer <p>Pagination offset.<br>Value range: [0, +∞).<br>Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned items per page.<br>Value range: [1, 100].<br>Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter.Name supported by Filter criteria: VulName - fuzzy matching, search by vulnerability Name. Category - exact matching, Filter by vulnerability Category: LINUX-LINUX software vulnerability, WINDOWS-WINDOWS system patch vulnerability, WEB_CMS-WEB-CMS vulnerability, APPLICATION-APPLICATION vulnerability, EMERGENCY-URGENT vulnerability. RiskStatus - exact matching, Filter by risk status: PENDING-PENDING, HANDLED-processed, FIXED-FIXED, SCANNING-rechecking, IGNORED-IGNORED, NOT_REQUIRED-no action is REQUIRED, DELETED-DELETED, FIXING-in remediation, NEED_REBOOT-FIXED PENDING restart, FIX_FAILED-FIX failure. Level - exact matching, Filter by vulnerability severity Level: UNKNOWN-unavailable, LOW-LOW risk, MEDIUM-MEDIUM risk, HIGH-HIGH risk, CRITICAL-CRITICAL. CVSSLevel - exact matching, compatible field, equivalent to Level. VPRLevel - exact matching, Filter by VPR repair priority: DEFERRABLE-DEFERRABLE repair, PLANNED-PLANNED repair, SOON-repair as SOON as possible, URGENT-URGENT repair. - exact matching, Filter by vulnerability ID. InstanceID - exact matching, Filter by CVM instance ID. InstanceID - exact matching, compatible field, equivalent to InstanceID. UUID - exact matching, Filter by host security UUID. LatestScanTimeStart - range matching, latest scan time start, format: YYYY-MM-DD HH:MM:ss. LatestScanTimeEnd - range matching, latest scan time end, format: YYYY-MM-DD HH:MM:ss</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting order.<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc.</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field<br>Enumeration values:<br>LatestScanTime: sort by latest scan time<br>Level: sort by threat level<br>VPRLevel: sort by VPR rating<br>RiskStatus: sort by risk status<br>VulID: sort by vulnerability ID<br>InstanceID: sort by instance ID<br>Default value: LatestScanTime</p>
     */
    public $By;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>Pagination offset.<br>Value range: [0, +∞).<br>Default value: 0.</p>
     * @param integer $Limit <p>Number of returned items per page.<br>Value range: [1, 100].<br>Default value: 10.</p>
     * @param array $Filters <p>Filter.Name supported by Filter criteria: VulName - fuzzy matching, search by vulnerability Name. Category - exact matching, Filter by vulnerability Category: LINUX-LINUX software vulnerability, WINDOWS-WINDOWS system patch vulnerability, WEB_CMS-WEB-CMS vulnerability, APPLICATION-APPLICATION vulnerability, EMERGENCY-URGENT vulnerability. RiskStatus - exact matching, Filter by risk status: PENDING-PENDING, HANDLED-processed, FIXED-FIXED, SCANNING-rechecking, IGNORED-IGNORED, NOT_REQUIRED-no action is REQUIRED, DELETED-DELETED, FIXING-in remediation, NEED_REBOOT-FIXED PENDING restart, FIX_FAILED-FIX failure. Level - exact matching, Filter by vulnerability severity Level: UNKNOWN-unavailable, LOW-LOW risk, MEDIUM-MEDIUM risk, HIGH-HIGH risk, CRITICAL-CRITICAL. CVSSLevel - exact matching, compatible field, equivalent to Level. VPRLevel - exact matching, Filter by VPR repair priority: DEFERRABLE-DEFERRABLE repair, PLANNED-PLANNED repair, SOON-repair as SOON as possible, URGENT-URGENT repair. - exact matching, Filter by vulnerability ID. InstanceID - exact matching, Filter by CVM instance ID. InstanceID - exact matching, compatible field, equivalent to InstanceID. UUID - exact matching, Filter by host security UUID. LatestScanTimeStart - range matching, latest scan time start, format: YYYY-MM-DD HH:MM:ss. LatestScanTimeEnd - range matching, latest scan time end, format: YYYY-MM-DD HH:MM:ss</p>
     * @param string $Order <p>Sorting order.<br>Enumeration values:<br>asc: ascending<br>desc: descending<br>Default value: desc.</p>
     * @param string $By <p>Sorting field<br>Enumeration values:<br>LatestScanTime: sort by latest scan time<br>Level: sort by threat level<br>VPRLevel: sort by VPR rating<br>RiskStatus: sort by risk status<br>VulID: sort by vulnerability ID<br>InstanceID: sort by instance ID<br>Default value: LatestScanTime</p>
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
