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
 * DescribeVulRiskRelateHost request structure.
 *
 * @method integer getKBID() Obtain <p>p>KB patch internal ID (kb_info.id)</p>
 * @method void setKBID(integer $KBID) Set <p>p>KB patch internal ID (kb_info.id)</p>
 * @method integer getVulID() Obtain <p>Vulnerability ID (vul_vuls.id)</p>
 * @method void setVulID(integer $VulID) Set <p>Vulnerability ID (vul_vuls.id)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter conditions array. Multi-condition with each other is AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)<br>CloudTag: Cloud tag<br>Tag: Security center tag</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions array. Multi-condition with each other is AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)<br>CloudTag: Cloud tag<br>Tag: Security center tag</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method string getOrder() Obtain <p>Sorting order<br>Enumeration value:<br>ASC: Ascending<br>DESC: Descending order<br>Default value: DESC</p>
 * @method void setOrder(string $Order) Set <p>Sorting order<br>Enumeration value:<br>ASC: Ascending<br>DESC: Descending order<br>Default value: DESC</p>
 * @method string getBy() Obtain <p>Sorting field<br>Enumeration value:<br>LatestScanTime: Latest scan time<br>VPRLevel: VPR rating<br>RiskStatus: Remediation status<br>Default value: LatestScanTime</p>
 * @method void setBy(string $By) Set <p>Sorting field<br>Enumeration value:<br>LatestScanTime: Latest scan time<br>VPRLevel: VPR rating<br>RiskStatus: Remediation status<br>Default value: LatestScanTime</p>
 */
class DescribeVulRiskRelateHostRequest extends AbstractModel
{
    /**
     * @var integer <p>p>KB patch internal ID (kb_info.id)</p>
     */
    public $KBID;

    /**
     * @var integer <p>Vulnerability ID (vul_vuls.id)</p>
     */
    public $VulID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter conditions array. Multi-condition with each other is AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)<br>CloudTag: Cloud tag<br>Tag: Security center tag</p>
     */
    public $Filters;

    /**
     * @var integer <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order<br>Enumeration value:<br>ASC: Ascending<br>DESC: Descending order<br>Default value: DESC</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field<br>Enumeration value:<br>LatestScanTime: Latest scan time<br>VPRLevel: VPR rating<br>RiskStatus: Remediation status<br>Default value: LatestScanTime</p>
     */
    public $By;

    /**
     * @param integer $KBID <p>p>KB patch internal ID (kb_info.id)</p>
     * @param integer $VulID <p>Vulnerability ID (vul_vuls.id)</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter conditions array. Multi-condition with each other is AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)<br>CloudTag: Cloud tag<br>Tag: Security center tag</p>
     * @param integer $Limit <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param integer $Offset <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     * @param string $Order <p>Sorting order<br>Enumeration value:<br>ASC: Ascending<br>DESC: Descending order<br>Default value: DESC</p>
     * @param string $By <p>Sorting field<br>Enumeration value:<br>LatestScanTime: Latest scan time<br>VPRLevel: VPR rating<br>RiskStatus: Remediation status<br>Default value: LatestScanTime</p>
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
        if (array_key_exists("KBID",$param) and $param["KBID"] !== null) {
            $this->KBID = $param["KBID"];
        }

        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
