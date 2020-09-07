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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterRoutes request structure.
 *
 * @method string getRouteTableName() Obtain Route table name.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name.
 * @method array getFilters() Obtain Filtering conditions, which are optional. Currently, only filtering by GatewayIP is supported.
 * @method void setFilters(array $Filters) Set Filtering conditions, which are optional. Currently, only filtering by GatewayIP is supported.
 */
class DescribeClusterRoutesRequest extends AbstractModel
{
    /**
     * @var string Route table name.
     */
    public $RouteTableName;

    /**
     * @var array Filtering conditions, which are optional. Currently, only filtering by GatewayIP is supported.
     */
    public $Filters;

    /**
     * @param string $RouteTableName Route table name.
     * @param array $Filters Filtering conditions, which are optional. Currently, only filtering by GatewayIP is supported.
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
