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
 * DescribeSharedCNAME request structure.
 *
 * @method string getZoneId() Obtain Zone ID associated with the shared CNAME.
 * @method void setZoneId(string $ZoneId) Set Zone ID associated with the shared CNAME.
 * @method array getFilters() Obtain Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>shared-cname<br>        Filter by [<strong>shared CNAME</strong>].<br>        Type: String<br>        Required: No</li>
<li>type<br>        Filter by [<strong>shared canme type</strong>].<br>        Type: String<br>        Required: No</li>
<li>description<br> Filter by <strong>description</strong>.<br> Type: String<br> Required: No</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>shared-cname<br>        Filter by [<strong>shared CNAME</strong>].<br>        Type: String<br>        Required: No</li>
<li>type<br>        Filter by [<strong>shared canme type</strong>].<br>        Type: String<br>        Required: No</li>
<li>description<br> Filter by <strong>description</strong>.<br> Type: String<br> Required: No</li>
 * @method string getDirection() Obtain List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>Default value: asc.
 * @method void setDirection(string $Direction) Set List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>Default value: asc.
 * @method string getMatch() Obtain Match mode. Valid values:
<li>all: return the shared CNAME that matches all query conditions;</li>
<li>any: return the shared CNAME that matches any query condition.</li>The default value is all.
 * @method void setMatch(string $Match) Set Match mode. Valid values:
<li>all: return the shared CNAME that matches all query conditions;</li>
<li>any: return the shared CNAME that matches any query condition.</li>The default value is all.
 * @method string getOrder() Obtain Sorting basis. Valid values:
<li>create-time: creation time;</li>
<li>shared-cname: Shared CNAME.</li>Sorted by the shared-cname attribute by default.
 * @method void setOrder(string $Order) Set Sorting basis. Valid values:
<li>create-time: creation time;</li>
<li>shared-cname: Shared CNAME.</li>Sorted by the shared-cname attribute by default.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 200.
 */
class DescribeSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string Zone ID associated with the shared CNAME.
     */
    public $ZoneId;

    /**
     * @var array Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>shared-cname<br>        Filter by [<strong>shared CNAME</strong>].<br>        Type: String<br>        Required: No</li>
<li>type<br>        Filter by [<strong>shared canme type</strong>].<br>        Type: String<br>        Required: No</li>
<li>description<br> Filter by <strong>description</strong>.<br> Type: String<br> Required: No</li>
     */
    public $Filters;

    /**
     * @var string List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>Default value: asc.
     */
    public $Direction;

    /**
     * @var string Match mode. Valid values:
<li>all: return the shared CNAME that matches all query conditions;</li>
<li>any: return the shared CNAME that matches any query condition.</li>The default value is all.
     */
    public $Match;

    /**
     * @var string Sorting basis. Valid values:
<li>create-time: creation time;</li>
<li>shared-cname: Shared CNAME.</li>Sorted by the shared-cname attribute by default.
     */
    public $Order;

    /**
     * @var integer Offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @param string $ZoneId Zone ID associated with the shared CNAME.
     * @param array $Filters Filter criteria. The maximum value of Filters.Values is 20. The detailed filter criteria are as follows:
<li>shared-cname<br>        Filter by [<strong>shared CNAME</strong>].<br>        Type: String<br>        Required: No</li>
<li>type<br>        Filter by [<strong>shared canme type</strong>].<br>        Type: String<br>        Required: No</li>
<li>description<br> Filter by <strong>description</strong>.<br> Type: String<br> Required: No</li>
     * @param string $Direction List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>Default value: asc.
     * @param string $Match Match mode. Valid values:
<li>all: return the shared CNAME that matches all query conditions;</li>
<li>any: return the shared CNAME that matches any query condition.</li>The default value is all.
     * @param string $Order Sorting basis. Valid values:
<li>create-time: creation time;</li>
<li>shared-cname: Shared CNAME.</li>Sorted by the shared-cname attribute by default.
     * @param integer $Offset Offset of paginated query. Default value: 0.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 200.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
