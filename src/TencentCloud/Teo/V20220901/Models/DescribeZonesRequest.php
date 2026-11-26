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
 * DescribeZones request structure.
 *
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Paginated query limit. Default value: 20, maximum value: 100.
 * @method void setLimit(integer $Limit) Set Paginated query limit. Default value: 20, maximum value: 100.
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all site information authorized under the current appid will be returned. The detailed filter criteria are as follows: <li>zone-name: Filter by site name.</li><li>zone-type: Filter by site type. Options:<br>        full: NS access type<br>        partial: CNAME access type<br>        partialComposite: domainless access<br>        dnsPodAccess: DNSPod managed access<br>        pages: Pages access type<br>        ai: edge reasoning access type.</li><li>zone-id: Filter by site ID in the format like zone-2noz78a8ev6k.</li><li>status: Filter by site status. Options:<br>        active: NS switched<br>        pending: NS to be switched<br>        deleted: deleted.</li><li>tag-key: Filter by tag key.</li><li>tag-value: Filter by tag value.</li><li>alias-zone-name: Filter by identical site identifier.</li>Fuzzy query supports filtering fields named zone-name or alias-zone-name.
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all site information authorized under the current appid will be returned. The detailed filter criteria are as follows: <li>zone-name: Filter by site name.</li><li>zone-type: Filter by site type. Options:<br>        full: NS access type<br>        partial: CNAME access type<br>        partialComposite: domainless access<br>        dnsPodAccess: DNSPod managed access<br>        pages: Pages access type<br>        ai: edge reasoning access type.</li><li>zone-id: Filter by site ID in the format like zone-2noz78a8ev6k.</li><li>status: Filter by site status. Options:<br>        active: NS switched<br>        pending: NS to be switched<br>        deleted: deleted.</li><li>tag-key: Filter by tag key.</li><li>tag-value: Filter by tag value.</li><li>alias-zone-name: Filter by identical site identifier.</li>Fuzzy query supports filtering fields named zone-name or alias-zone-name.
 * @method string getOrder() Obtain Sort returned results based on this field. Valid values:
<li> type: access type;</li>
<li> area: acceleration region;</li>
<li> create-time: creation time;</li>
<li> zone-name: site name;</li>
<li> use-time: last used time;</li>
<li> active-status: effective status.</li>If left empty, the returned results are sorted by create-time by default.
 * @method void setOrder(string $Order) Set Sort returned results based on this field. Valid values:
<li> type: access type;</li>
<li> area: acceleration region;</li>
<li> create-time: creation time;</li>
<li> zone-name: site name;</li>
<li> use-time: last used time;</li>
<li> active-status: effective status.</li>If left empty, the returned results are sorted by create-time by default.
 * @method string getDirection() Obtain Sorting order. If the field value is a number, sort by number size. If the field value is text, sort by ASCII code size. Valid values:
<li> asc: sort in ascending order;</li>
<li> desc: in descending order.</li>Use default value desc if not specified.
 * @method void setDirection(string $Direction) Set Sorting order. If the field value is a number, sort by number size. If the field value is text, sort by ASCII code size. Valid values:
<li> asc: sort in ascending order;</li>
<li> desc: in descending order.</li>Use default value desc if not specified.
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Paginated query limit. Default value: 20, maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all site information authorized under the current appid will be returned. The detailed filter criteria are as follows: <li>zone-name: Filter by site name.</li><li>zone-type: Filter by site type. Options:<br>        full: NS access type<br>        partial: CNAME access type<br>        partialComposite: domainless access<br>        dnsPodAccess: DNSPod managed access<br>        pages: Pages access type<br>        ai: edge reasoning access type.</li><li>zone-id: Filter by site ID in the format like zone-2noz78a8ev6k.</li><li>status: Filter by site status. Options:<br>        active: NS switched<br>        pending: NS to be switched<br>        deleted: deleted.</li><li>tag-key: Filter by tag key.</li><li>tag-value: Filter by tag value.</li><li>alias-zone-name: Filter by identical site identifier.</li>Fuzzy query supports filtering fields named zone-name or alias-zone-name.
     */
    public $Filters;

    /**
     * @var string Sort returned results based on this field. Valid values:
<li> type: access type;</li>
<li> area: acceleration region;</li>
<li> create-time: creation time;</li>
<li> zone-name: site name;</li>
<li> use-time: last used time;</li>
<li> active-status: effective status.</li>If left empty, the returned results are sorted by create-time by default.
     */
    public $Order;

    /**
     * @var string Sorting order. If the field value is a number, sort by number size. If the field value is text, sort by ASCII code size. Valid values:
<li> asc: sort in ascending order;</li>
<li> desc: in descending order.</li>Use default value desc if not specified.
     */
    public $Direction;

    /**
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit Paginated query limit. Default value: 20, maximum value: 100.
     * @param array $Filters Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all site information authorized under the current appid will be returned. The detailed filter criteria are as follows: <li>zone-name: Filter by site name.</li><li>zone-type: Filter by site type. Options:<br>        full: NS access type<br>        partial: CNAME access type<br>        partialComposite: domainless access<br>        dnsPodAccess: DNSPod managed access<br>        pages: Pages access type<br>        ai: edge reasoning access type.</li><li>zone-id: Filter by site ID in the format like zone-2noz78a8ev6k.</li><li>status: Filter by site status. Options:<br>        active: NS switched<br>        pending: NS to be switched<br>        deleted: deleted.</li><li>tag-key: Filter by tag key.</li><li>tag-value: Filter by tag value.</li><li>alias-zone-name: Filter by identical site identifier.</li>Fuzzy query supports filtering fields named zone-name or alias-zone-name.
     * @param string $Order Sort returned results based on this field. Valid values:
<li> type: access type;</li>
<li> area: acceleration region;</li>
<li> create-time: creation time;</li>
<li> zone-name: site name;</li>
<li> use-time: last used time;</li>
<li> active-status: effective status.</li>If left empty, the returned results are sorted by create-time by default.
     * @param string $Direction Sorting order. If the field value is a number, sort by number size. If the field value is text, sort by ASCII code size. Valid values:
<li> asc: sort in ascending order;</li>
<li> desc: in descending order.</li>Use default value desc if not specified.
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
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
