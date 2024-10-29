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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryRegistryList request structure.
 *
 * @method integer getLimit() Obtain Number to return, default is 10, maximum is 100
 * @method void setLimit(integer $Limit) Set Number to return, default is 10, maximum is 100
 * @method integer getOffset() Obtain Offset, the default is 0
 * @method void setOffset(integer $Offset) Set Offset, the default is 0
 * @method array getFilters() Obtain Filter field IsAuthorized Whether to authorize. The value can be all, 0 unauthorized, 1 authorized
 * @method void setFilters(array $Filters) Set Filter field IsAuthorized Whether to authorize. The value can be all, 0 unauthorized, 1 authorized
 * @method string getBy() Obtain Sort field
 * @method void setBy(string $By) Set Sort field
 * @method string getOrder() Obtain Sort by asc, desc
 * @method void setOrder(string $Order) Set Sort by asc, desc
 */
class DescribeAssetImageRegistryRegistryListRequest extends AbstractModel
{
    /**
     * @var integer Number to return, default is 10, maximum is 100
     */
    public $Limit;

    /**
     * @var integer Offset, the default is 0
     */
    public $Offset;

    /**
     * @var array Filter field IsAuthorized Whether to authorize. The value can be all, 0 unauthorized, 1 authorized
     */
    public $Filters;

    /**
     * @var string Sort field
     */
    public $By;

    /**
     * @var string Sort by asc, desc
     */
    public $Order;

    /**
     * @param integer $Limit Number to return, default is 10, maximum is 100
     * @param integer $Offset Offset, the default is 0
     * @param array $Filters Filter field IsAuthorized Whether to authorize. The value can be all, 0 unauthorized, 1 authorized
     * @param string $By Sort field
     * @param string $Order Sort by asc, desc
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
