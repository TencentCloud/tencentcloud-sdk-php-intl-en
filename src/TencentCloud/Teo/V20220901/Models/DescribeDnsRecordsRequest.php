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
 * DescribeDnsRecords request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>id: Filter by DNS record ID. Fuzzy query is supported.</li><li>name: Filter by DNS record name. Fuzzy query is supported.</li><li>content: Filter by DNS record content. Fuzzy query is supported.</li><li>type: Filter by DNS record type. Fuzzy query is not supported. Options:<br>        A: Point the domain to an external IPv4 address, such as 8.8.8.8.<br>        AAAA: Point the domain to an external IPv6 address.<br>        CNAME: Point the domain to another domain, which then resolves to the final IP address.<br>        TXT: Identify and describe the domain. Commonly used for domain verification and SPF records (anti-spam).<br>        NS: If you need to delegate a subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added for root domains.<br>        CAA: Specify the CA that can issue certificates for this site.<br>        SRV: Identify that a server uses a service. Commonly used for directory management in Microsoft systems.<br>        MX: Specify the recipient mail server.</li><li>ttl: Filter by resolution time. Fuzzy query is not supported.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>id: Filter by DNS record ID. Fuzzy query is supported.</li><li>name: Filter by DNS record name. Fuzzy query is supported.</li><li>content: Filter by DNS record content. Fuzzy query is supported.</li><li>type: Filter by DNS record type. Fuzzy query is not supported. Options:<br>        A: Point the domain to an external IPv4 address, such as 8.8.8.8.<br>        AAAA: Point the domain to an external IPv6 address.<br>        CNAME: Point the domain to another domain, which then resolves to the final IP address.<br>        TXT: Identify and describe the domain. Commonly used for domain verification and SPF records (anti-spam).<br>        NS: If you need to delegate a subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added for root domains.<br>        CAA: Specify the CA that can issue certificates for this site.<br>        SRV: Identify that a server uses a service. Commonly used for directory management in Microsoft systems.<br>        MX: Specify the recipient mail server.</li><li>ttl: Filter by resolution time. Fuzzy query is not supported.</li>
 * @method string getSortBy() Obtain Sorting basis. Valid values: <li>content: DNS record content;</li><li>created-on: DNS record creation time;</li><li>name: DNS record name;</li><li>ttl: cache time;</li><li>type: DNS record type.</li>Default sorting order: by the combination of type and name attributes.
 * @method void setSortBy(string $SortBy) Set Sorting basis. Valid values: <li>content: DNS record content;</li><li>created-on: DNS record creation time;</li><li>name: DNS record name;</li><li>ttl: cache time;</li><li>type: DNS record type.</li>Default sorting order: by the combination of type and name attributes.
 * @method string getSortOrder() Obtain List sort method. Valid values: <li>asc: ascending sort;</li><li>desc: descending sort.</li> Default value: asc.
 * @method void setSortOrder(string $SortOrder) Set List sort method. Valid values: <li>asc: ascending sort;</li><li>desc: descending sort.</li> Default value: asc.
 * @method string getMatch() Obtain Match mode. Valid values: <li>all: return records that match all query conditions;</li><li>any: return records that match any query condition.</li> Default value: all.
 * @method void setMatch(string $Match) Set Match mode. Valid values: <li>all: return records that match all query conditions;</li><li>any: return records that match any query condition.</li> Default value: all.
 */
class DescribeDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer Offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>id: Filter by DNS record ID. Fuzzy query is supported.</li><li>name: Filter by DNS record name. Fuzzy query is supported.</li><li>content: Filter by DNS record content. Fuzzy query is supported.</li><li>type: Filter by DNS record type. Fuzzy query is not supported. Options:<br>        A: Point the domain to an external IPv4 address, such as 8.8.8.8.<br>        AAAA: Point the domain to an external IPv6 address.<br>        CNAME: Point the domain to another domain, which then resolves to the final IP address.<br>        TXT: Identify and describe the domain. Commonly used for domain verification and SPF records (anti-spam).<br>        NS: If you need to delegate a subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added for root domains.<br>        CAA: Specify the CA that can issue certificates for this site.<br>        SRV: Identify that a server uses a service. Commonly used for directory management in Microsoft systems.<br>        MX: Specify the recipient mail server.</li><li>ttl: Filter by resolution time. Fuzzy query is not supported.</li>
     */
    public $Filters;

    /**
     * @var string Sorting basis. Valid values: <li>content: DNS record content;</li><li>created-on: DNS record creation time;</li><li>name: DNS record name;</li><li>ttl: cache time;</li><li>type: DNS record type.</li>Default sorting order: by the combination of type and name attributes.
     */
    public $SortBy;

    /**
     * @var string List sort method. Valid values: <li>asc: ascending sort;</li><li>desc: descending sort.</li> Default value: asc.
     */
    public $SortOrder;

    /**
     * @var string Match mode. Valid values: <li>all: return records that match all query conditions;</li><li>any: return records that match any query condition.</li> Default value: all.
     */
    public $Match;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset Offset of paginated query. Default value: 0.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter criteria. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>id: Filter by DNS record ID. Fuzzy query is supported.</li><li>name: Filter by DNS record name. Fuzzy query is supported.</li><li>content: Filter by DNS record content. Fuzzy query is supported.</li><li>type: Filter by DNS record type. Fuzzy query is not supported. Options:<br>        A: Point the domain to an external IPv4 address, such as 8.8.8.8.<br>        AAAA: Point the domain to an external IPv6 address.<br>        CNAME: Point the domain to another domain, which then resolves to the final IP address.<br>        TXT: Identify and describe the domain. Commonly used for domain verification and SPF records (anti-spam).<br>        NS: If you need to delegate a subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added for root domains.<br>        CAA: Specify the CA that can issue certificates for this site.<br>        SRV: Identify that a server uses a service. Commonly used for directory management in Microsoft systems.<br>        MX: Specify the recipient mail server.</li><li>ttl: Filter by resolution time. Fuzzy query is not supported.</li>
     * @param string $SortBy Sorting basis. Valid values: <li>content: DNS record content;</li><li>created-on: DNS record creation time;</li><li>name: DNS record name;</li><li>ttl: cache time;</li><li>type: DNS record type.</li>Default sorting order: by the combination of type and name attributes.
     * @param string $SortOrder List sort method. Valid values: <li>asc: ascending sort;</li><li>desc: descending sort.</li> Default value: asc.
     * @param string $Match Match mode. Valid values: <li>all: return records that match all query conditions;</li><li>any: return records that match any query condition.</li> Default value: all.
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
