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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetEnvList request structure.
 *
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method integer getType() Obtain This field has been deprecated and replaced with Filters.
 * @method void setType(integer $Type) Set This field has been deprecated and replaced with Filters.
 * @method array getFilters() Obtain Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Name - string - required: no - environment variable name</li>
<li>Type - int - required: no - type: 0: user variable; 1: system variable</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Name - string - required: no - environment variable name</li>
<li>Type - int - required: no - type: 0: user variable; 1: system variable</li>
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Sorting method: [FirstTime]
 * @method void setBy(string $By) Set Sorting method: [FirstTime]
 */
class DescribeAssetEnvListRequest extends AbstractModel
{
    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var integer This field has been deprecated and replaced with Filters.
     */
    public $Type;

    /**
     * @var array Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Name - string - required: no - environment variable name</li>
<li>Type - int - required: no - type: 0: user variable; 1: system variable</li>
     */
    public $Filters;

    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Sorting method: [FirstTime]
     */
    public $By;

    /**
     * @param string $Uuid Server UUID
     * @param string $Quuid Server QUUID
     * @param integer $Type This field has been deprecated and replaced with Filters.
     * @param array $Filters Filter criteria
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>Name - string - required: no - environment variable name</li>
<li>Type - int - required: no - type: 0: user variable; 1: system variable</li>
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Sorting method: [FirstTime]
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
