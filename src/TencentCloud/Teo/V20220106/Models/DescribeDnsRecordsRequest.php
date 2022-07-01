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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnsRecords request structure.
 *
 * @method array getFilters() Obtain Query filter
 * @method void setFilters(array $Filters) Set Query filter
 * @method string getOrder() Obtain Sorts the order
 * @method void setOrder(string $Order) Set Sorts the order
 * @method string getDirection() Obtain Valid values: `asc`, and `desc`.
 * @method void setDirection(string $Direction) Set Valid values: `asc`, and `desc`.
 * @method string getMatch() Obtain Valid values: `all`, and `any`.
 * @method void setMatch(string $Match) Set Valid values: `all`, and `any`.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 */
class DescribeDnsRecordsRequest extends AbstractModel
{
    /**
     * @var array Query filter
     */
    public $Filters;

    /**
     * @var string Sorts the order
     */
    public $Order;

    /**
     * @var string Valid values: `asc`, and `desc`.
     */
    public $Direction;

    /**
     * @var string Valid values: `all`, and `any`.
     */
    public $Match;

    /**
     * @var integer Limit on paginated queries. Default value: 100. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @param array $Filters Query filter
     * @param string $Order Sorts the order
     * @param string $Direction Valid values: `asc`, and `desc`.
     * @param string $Match Valid values: `all`, and `any`.
     * @param integer $Limit Limit on paginated queries. Default value: 100. Maximum value: 1000.
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param string $ZoneId Site ID
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
                $obj = new DnsRecordFilter();
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
