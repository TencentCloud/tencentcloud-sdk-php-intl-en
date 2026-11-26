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
 * DescribeAccelerationDomains request structure.
 *
 * @method string getZoneId() Obtain <p>Zone ID of the acceleration domain name.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID of the acceleration domain name.</p>
 * @method integer getOffset() Obtain <p>The offset of paginated query. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>The offset of paginated query. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
 * @method array getFilters() Obtain <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all domain information under the current zone-id is returned. The detailed filter criteria are as follows:</p><li>domain-name: Filter by acceleration domain name;</li><li>origin-type: Filter by origin server type;</li><li>origin: Filter by primary origin server address;</li><li>backup-origin: Filter by secondary origin server address;</li><li>domain-cname: Filter by CNAME;</li><li>share-cname: Filter by shared CNAME;</li>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all domain information under the current zone-id is returned. The detailed filter criteria are as follows:</p><li>domain-name: Filter by acceleration domain name;</li><li>origin-type: Filter by origin server type;</li><li>origin: Filter by primary origin server address;</li><li>backup-origin: Filter by secondary origin server address;</li><li>domain-cname: Filter by CNAME;</li><li>share-cname: Filter by shared CNAME;</li>
 * @method string getOrder() Obtain <p>Sort returned results by this field. Valid values:</p><li>created_on: acceleration domain name creation time;</li><li>domain-name: acceleration domain name.</li>If left empty, returned results are sorted by domain-name by default.
 * @method void setOrder(string $Order) Set <p>Sort returned results by this field. Valid values:</p><li>created_on: acceleration domain name creation time;</li><li>domain-name: acceleration domain name.</li>If left empty, returned results are sorted by domain-name by default.
 * @method string getDirection() Obtain <p>Sorting order. If the field value is a number, sort by its size. If the field value is text, sort by ASCII code size. Valid values:</p><li>asc: ascending order;</li><li>desc: descending order.</li>Use default value asc if not specified.
 * @method void setDirection(string $Direction) Set <p>Sorting order. If the field value is a number, sort by its size. If the field value is text, sort by ASCII code size. Valid values:</p><li>asc: ascending order;</li><li>desc: descending order.</li>Use default value asc if not specified.
 * @method string getMatch() Obtain <p>Match mode. Valid values:</p><li>all: return acceleration domain names that match all query conditions;</li><li>any: return acceleration domain names that match any query condition.</li>If left empty, the default value is all.
 * @method void setMatch(string $Match) Set <p>Match mode. Valid values:</p><li>all: return acceleration domain names that match all query conditions;</li><li>any: return acceleration domain names that match any query condition.</li>If left empty, the default value is all.
 */
class DescribeAccelerationDomainsRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID of the acceleration domain name.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>The offset of paginated query. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all domain information under the current zone-id is returned. The detailed filter criteria are as follows:</p><li>domain-name: Filter by acceleration domain name;</li><li>origin-type: Filter by origin server type;</li><li>origin: Filter by primary origin server address;</li><li>backup-origin: Filter by secondary origin server address;</li><li>domain-cname: Filter by CNAME;</li><li>share-cname: Filter by shared CNAME;</li>
     */
    public $Filters;

    /**
     * @var string <p>Sort returned results by this field. Valid values:</p><li>created_on: acceleration domain name creation time;</li><li>domain-name: acceleration domain name.</li>If left empty, returned results are sorted by domain-name by default.
     */
    public $Order;

    /**
     * @var string <p>Sorting order. If the field value is a number, sort by its size. If the field value is text, sort by ASCII code size. Valid values:</p><li>asc: ascending order;</li><li>desc: descending order.</li>Use default value asc if not specified.
     */
    public $Direction;

    /**
     * @var string <p>Match mode. Valid values:</p><li>all: return acceleration domain names that match all query conditions;</li><li>any: return acceleration domain names that match any query condition.</li>If left empty, the default value is all.
     */
    public $Match;

    /**
     * @param string $ZoneId <p>Zone ID of the acceleration domain name.</p>
     * @param integer $Offset <p>The offset of paginated query. Default value: 0.</p>
     * @param integer $Limit <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
     * @param array $Filters <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all domain information under the current zone-id is returned. The detailed filter criteria are as follows:</p><li>domain-name: Filter by acceleration domain name;</li><li>origin-type: Filter by origin server type;</li><li>origin: Filter by primary origin server address;</li><li>backup-origin: Filter by secondary origin server address;</li><li>domain-cname: Filter by CNAME;</li><li>share-cname: Filter by shared CNAME;</li>
     * @param string $Order <p>Sort returned results by this field. Valid values:</p><li>created_on: acceleration domain name creation time;</li><li>domain-name: acceleration domain name.</li>If left empty, returned results are sorted by domain-name by default.
     * @param string $Direction <p>Sorting order. If the field value is a number, sort by its size. If the field value is text, sort by ASCII code size. Valid values:</p><li>asc: ascending order;</li><li>desc: descending order.</li>Use default value asc if not specified.
     * @param string $Match <p>Match mode. Valid values:</p><li>all: return acceleration domain names that match all query conditions;</li><li>any: return acceleration domain names that match any query condition.</li>If left empty, the default value is all.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
