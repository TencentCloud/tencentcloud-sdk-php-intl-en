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
 * DescribeDnsRecords request structure.
 *
 * @method string getZoneId() Obtain The site ID of the DNS record.
 * @method void setZoneId(string $ZoneId) Set The site ID of the DNS record.
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain The upper limit of Filters.Values is 20. The detailed filtering conditions are as follows: <li>id: Filter by DNS record ID, supports fuzzy query;</li><li>name: Filter by DNS record name, supports fuzzy query;</li><li>content: Filter by DNS record content, supports fuzzy query;</li><li>type: Filter by DNS record type, does not support fuzzy query. Options:<br> A: Point the domain name to an external IPv4 address, such as 8.8.8.8;<br> AAAA: Point the domain name to an external IPv6 address;<br> CNAME: Point the domain name to another domain name, which then resolves to the final IP address;<br> TXT: Identify and describe the domain name, often used for domain verification and SPF records (anti-spam);<br> NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. Root domains cannot add NS records;<br> CAA: Specify the CA that can issue certificates for this site;<br> SRV: Identify a server using a specific service, commonly used in Microsoft's directory management;<br> MX: Specify the recipient's mail server.</li><li>ttl: Filter by the time-to-live (TTL) of the record, does not support fuzzy query.</li>
 * @method void setFilters(array $Filters) Set The upper limit of Filters.Values is 20. The detailed filtering conditions are as follows: <li>id: Filter by DNS record ID, supports fuzzy query;</li><li>name: Filter by DNS record name, supports fuzzy query;</li><li>content: Filter by DNS record content, supports fuzzy query;</li><li>type: Filter by DNS record type, does not support fuzzy query. Options:<br> A: Point the domain name to an external IPv4 address, such as 8.8.8.8;<br> AAAA: Point the domain name to an external IPv6 address;<br> CNAME: Point the domain name to another domain name, which then resolves to the final IP address;<br> TXT: Identify and describe the domain name, often used for domain verification and SPF records (anti-spam);<br> NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. Root domains cannot add NS records;<br> CAA: Specify the CA that can issue certificates for this site;<br> SRV: Identify a server using a specific service, commonly used in Microsoft's directory management;<br> MX: Specify the recipient's mail server.</li><li>ttl: Filter by the time-to-live (TTL) of the record, does not support fuzzy query.</li>
 * @method string getSortBy() Obtain Sort criteria, with possible values:
<li>content: DNS record content;</li>
<li>created-on: DNS record creation time;</li>
<li>name: DNS record name;</li>
<li>ttl: Time-to-live (TTL);</li>
<li>type: DNS record type.</li>
The default sorting is based on a combination of type and name attributes.
 * @method void setSortBy(string $SortBy) Set Sort criteria, with possible values:
<li>content: DNS record content;</li>
<li>created-on: DNS record creation time;</li>
<li>name: DNS record name;</li>
<li>ttl: Time-to-live (TTL);</li>
<li>type: DNS record type.</li>
The default sorting is based on a combination of type and name attributes.
 * @method string getSortOrder() Obtain List sorting order, with possible values:
<li>asc: Ascending order;</li>
<li>desc: Descending order.</li>
The default value is asc.
 * @method void setSortOrder(string $SortOrder) Set List sorting order, with possible values:
<li>asc: Ascending order;</li>
<li>desc: Descending order.</li>
The default value is asc.
 * @method string getMatch() Obtain The match mode. Values:
<li>`all`: Return all records that match the specified filter.</li>
<li>`any`: Return any record that matches the specified filter.</li>Default value: all.
 * @method void setMatch(string $Match) Set The match mode. Values:
<li>`all`: Return all records that match the specified filter.</li>
<li>`any`: Return any record that matches the specified filter.</li>Default value: all.
 */
class DescribeDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string The site ID of the DNS record.
     */
    public $ZoneId;

    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array The upper limit of Filters.Values is 20. The detailed filtering conditions are as follows: <li>id: Filter by DNS record ID, supports fuzzy query;</li><li>name: Filter by DNS record name, supports fuzzy query;</li><li>content: Filter by DNS record content, supports fuzzy query;</li><li>type: Filter by DNS record type, does not support fuzzy query. Options:<br> A: Point the domain name to an external IPv4 address, such as 8.8.8.8;<br> AAAA: Point the domain name to an external IPv6 address;<br> CNAME: Point the domain name to another domain name, which then resolves to the final IP address;<br> TXT: Identify and describe the domain name, often used for domain verification and SPF records (anti-spam);<br> NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. Root domains cannot add NS records;<br> CAA: Specify the CA that can issue certificates for this site;<br> SRV: Identify a server using a specific service, commonly used in Microsoft's directory management;<br> MX: Specify the recipient's mail server.</li><li>ttl: Filter by the time-to-live (TTL) of the record, does not support fuzzy query.</li>
     */
    public $Filters;

    /**
     * @var string Sort criteria, with possible values:
<li>content: DNS record content;</li>
<li>created-on: DNS record creation time;</li>
<li>name: DNS record name;</li>
<li>ttl: Time-to-live (TTL);</li>
<li>type: DNS record type.</li>
The default sorting is based on a combination of type and name attributes.
     */
    public $SortBy;

    /**
     * @var string List sorting order, with possible values:
<li>asc: Ascending order;</li>
<li>desc: Descending order.</li>
The default value is asc.
     */
    public $SortOrder;

    /**
     * @var string The match mode. Values:
<li>`all`: Return all records that match the specified filter.</li>
<li>`any`: Return any record that matches the specified filter.</li>Default value: all.
     */
    public $Match;

    /**
     * @param string $ZoneId The site ID of the DNS record.
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
     * @param array $Filters The upper limit of Filters.Values is 20. The detailed filtering conditions are as follows: <li>id: Filter by DNS record ID, supports fuzzy query;</li><li>name: Filter by DNS record name, supports fuzzy query;</li><li>content: Filter by DNS record content, supports fuzzy query;</li><li>type: Filter by DNS record type, does not support fuzzy query. Options:<br> A: Point the domain name to an external IPv4 address, such as 8.8.8.8;<br> AAAA: Point the domain name to an external IPv6 address;<br> CNAME: Point the domain name to another domain name, which then resolves to the final IP address;<br> TXT: Identify and describe the domain name, often used for domain verification and SPF records (anti-spam);<br> NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. Root domains cannot add NS records;<br> CAA: Specify the CA that can issue certificates for this site;<br> SRV: Identify a server using a specific service, commonly used in Microsoft's directory management;<br> MX: Specify the recipient's mail server.</li><li>ttl: Filter by the time-to-live (TTL) of the record, does not support fuzzy query.</li>
     * @param string $SortBy Sort criteria, with possible values:
<li>content: DNS record content;</li>
<li>created-on: DNS record creation time;</li>
<li>name: DNS record name;</li>
<li>ttl: Time-to-live (TTL);</li>
<li>type: DNS record type.</li>
The default sorting is based on a combination of type and name attributes.
     * @param string $SortOrder List sorting order, with possible values:
<li>asc: Ascending order;</li>
<li>desc: Descending order.</li>
The default value is asc.
     * @param string $Match The match mode. Values:
<li>`all`: Return all records that match the specified filter.</li>
<li>`any`: Return any record that matches the specified filter.</li>Default value: all.
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

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
