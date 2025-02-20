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
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method integer getOffset() Obtain Offset of paginated query. default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. default value: 20. maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. default value: 20. maximum value: 1000.
 * @method array getFilters() Obtain Filter conditions. up to 20 values for each filter. detailed filter conditions are as follows: <li>id: filter by dns record id, supports fuzzy search;</li><li>name: filter by dns record name, supports fuzzy search;</li><li>content: filter by dns record content, supports fuzzy search;</li><li>type: filter by dns record type, does not support fuzzy search. valid values:<br>   a: points the domain name to an external ipv4 address, such as 8.8.8.8;<br>   aaaa: points the domain name to an external ipv6 address;<br>   cname: points the domain name to another domain name, which then resolves to the final ip address;<br>   txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);<br>   ns: if you need to delegate the subdomain to another dns service provider, you need to add an ns record. root domain cannot add ns records;<br>   caa: specifies the ca that can issue certificates for this site;<br>   srv: identifies a server using a specific service, commonly used in microsoft's directory management;<br>   mx: specifies the recipient's mail server.</li><li>ttl: filter by resolution effective time, does not support fuzzy search.</li>.
 * @method void setFilters(array $Filters) Set Filter conditions. up to 20 values for each filter. detailed filter conditions are as follows: <li>id: filter by dns record id, supports fuzzy search;</li><li>name: filter by dns record name, supports fuzzy search;</li><li>content: filter by dns record content, supports fuzzy search;</li><li>type: filter by dns record type, does not support fuzzy search. valid values:<br>   a: points the domain name to an external ipv4 address, such as 8.8.8.8;<br>   aaaa: points the domain name to an external ipv6 address;<br>   cname: points the domain name to another domain name, which then resolves to the final ip address;<br>   txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);<br>   ns: if you need to delegate the subdomain to another dns service provider, you need to add an ns record. root domain cannot add ns records;<br>   caa: specifies the ca that can issue certificates for this site;<br>   srv: identifies a server using a specific service, commonly used in microsoft's directory management;<br>   mx: specifies the recipient's mail server.</li><li>ttl: filter by resolution effective time, does not support fuzzy search.</li>.
 * @method string getSortBy() Obtain Sorting basis. values include: <li>`content`: dns record content</li><li>`created-on`: dns record creation time</li><li>`name`: dns record name</li><li>`ttl`: cache time</li><li>`type`: dns record type</li> default sorting is by the combination of `type`, `name`.
 * @method void setSortBy(string $SortBy) Set Sorting basis. values include: <li>`content`: dns record content</li><li>`created-on`: dns record creation time</li><li>`name`: dns record name</li><li>`ttl`: cache time</li><li>`type`: dns record type</li> default sorting is by the combination of `type`, `name`.
 * @method string getSortOrder() Obtain List sort method. values: <li>`asc`: ascending order</li><li>`desc`: sort in descending order</li> default value: `asc`.
 * @method void setSortOrder(string $SortOrder) Set List sort method. values: <li>`asc`: ascending order</li><li>`desc`: sort in descending order</li> default value: `asc`.
 * @method string getMatch() Obtain Match method. values: <li>`all`: return records that match all query conditions</li><li>`any`: return records that match any query condition</li> default value: `all`.
 * @method void setMatch(string $Match) Set Match method. values: <li>`all`: return records that match all query conditions</li><li>`any`: return records that match any query condition</li> default value: `all`.
 */
class DescribeDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var integer Offset of paginated query. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. default value: 20. maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter conditions. up to 20 values for each filter. detailed filter conditions are as follows: <li>id: filter by dns record id, supports fuzzy search;</li><li>name: filter by dns record name, supports fuzzy search;</li><li>content: filter by dns record content, supports fuzzy search;</li><li>type: filter by dns record type, does not support fuzzy search. valid values:<br>   a: points the domain name to an external ipv4 address, such as 8.8.8.8;<br>   aaaa: points the domain name to an external ipv6 address;<br>   cname: points the domain name to another domain name, which then resolves to the final ip address;<br>   txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);<br>   ns: if you need to delegate the subdomain to another dns service provider, you need to add an ns record. root domain cannot add ns records;<br>   caa: specifies the ca that can issue certificates for this site;<br>   srv: identifies a server using a specific service, commonly used in microsoft's directory management;<br>   mx: specifies the recipient's mail server.</li><li>ttl: filter by resolution effective time, does not support fuzzy search.</li>.
     */
    public $Filters;

    /**
     * @var string Sorting basis. values include: <li>`content`: dns record content</li><li>`created-on`: dns record creation time</li><li>`name`: dns record name</li><li>`ttl`: cache time</li><li>`type`: dns record type</li> default sorting is by the combination of `type`, `name`.
     */
    public $SortBy;

    /**
     * @var string List sort method. values: <li>`asc`: ascending order</li><li>`desc`: sort in descending order</li> default value: `asc`.
     */
    public $SortOrder;

    /**
     * @var string Match method. values: <li>`all`: return records that match all query conditions</li><li>`any`: return records that match any query condition</li> default value: `all`.
     */
    public $Match;

    /**
     * @param string $ZoneId Zone id.
     * @param integer $Offset Offset of paginated query. default value: 0.
     * @param integer $Limit Number limit of paginated query. default value: 20. maximum value: 1000.
     * @param array $Filters Filter conditions. up to 20 values for each filter. detailed filter conditions are as follows: <li>id: filter by dns record id, supports fuzzy search;</li><li>name: filter by dns record name, supports fuzzy search;</li><li>content: filter by dns record content, supports fuzzy search;</li><li>type: filter by dns record type, does not support fuzzy search. valid values:<br>   a: points the domain name to an external ipv4 address, such as 8.8.8.8;<br>   aaaa: points the domain name to an external ipv6 address;<br>   cname: points the domain name to another domain name, which then resolves to the final ip address;<br>   txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);<br>   ns: if you need to delegate the subdomain to another dns service provider, you need to add an ns record. root domain cannot add ns records;<br>   caa: specifies the ca that can issue certificates for this site;<br>   srv: identifies a server using a specific service, commonly used in microsoft's directory management;<br>   mx: specifies the recipient's mail server.</li><li>ttl: filter by resolution effective time, does not support fuzzy search.</li>.
     * @param string $SortBy Sorting basis. values include: <li>`content`: dns record content</li><li>`created-on`: dns record creation time</li><li>`name`: dns record name</li><li>`ttl`: cache time</li><li>`type`: dns record type</li> default sorting is by the combination of `type`, `name`.
     * @param string $SortOrder List sort method. values: <li>`asc`: ascending order</li><li>`desc`: sort in descending order</li> default value: `asc`.
     * @param string $Match Match method. values: <li>`all`: return records that match all query conditions</li><li>`any`: return records that match any query condition</li> default value: `all`.
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
