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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayRoutes request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method integer getLimit() Obtain Pagination query limit count [0,1000], default value 0
 * @method void setLimit(integer $Limit) Set Pagination query limit count [0,1000], default value 0
 * @method integer getOffset() Obtain Page offset amount for pagination. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset amount for pagination. Default value: 0
 * @method string getServiceName() Obtain Service name, exact match
 * @method void setServiceName(string $ServiceName) Set Service name, exact match
 * @method string getRouteName() Obtain Route name, exact match
 * @method void setRouteName(string $RouteName) Set Route name, exact match
 * @method array getFilters() Obtain Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting name, path, host, method, service, and protocol.
 * @method void setFilters(array $Filters) Set Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting name, path, host, method, service, and protocol.
 */
class DescribeCloudNativeAPIGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var integer Pagination query limit count [0,1000], default value 0
     */
    public $Limit;

    /**
     * @var integer Page offset amount for pagination. Default value: 0
     */
    public $Offset;

    /**
     * @var string Service name, exact match
     */
    public $ServiceName;

    /**
     * @var string Route name, exact match
     */
    public $RouteName;

    /**
     * @var array Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting name, path, host, method, service, and protocol.
     */
    public $Filters;

    /**
     * @param string $GatewayId Gateway ID
     * @param integer $Limit Pagination query limit count [0,1000], default value 0
     * @param integer $Offset Page offset amount for pagination. Default value: 0
     * @param string $ServiceName Service name, exact match
     * @param string $RouteName Route name, exact match
     * @param array $Filters Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting name, path, host, method, service, and protocol.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ListFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
