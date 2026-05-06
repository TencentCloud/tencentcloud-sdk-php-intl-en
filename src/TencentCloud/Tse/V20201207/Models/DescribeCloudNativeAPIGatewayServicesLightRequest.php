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
 * DescribeCloudNativeAPIGatewayServicesLight request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method integer getLimit() Obtain Number of tables in the list
 * @method void setLimit(integer $Limit) Set Number of tables in the list
 * @method integer getOffset() Obtain List offset
 * @method void setOffset(integer $Offset) Set List offset
 * @method array getFilters() Obtain Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting id, name, and upstreamType.
 * @method void setFilters(array $Filters) Set Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting id, name, and upstreamType.
 */
class DescribeCloudNativeAPIGatewayServicesLightRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var integer Number of tables in the list
     */
    public $Limit;

    /**
     * @var integer List offset
     */
    public $Offset;

    /**
     * @var array Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting id, name, and upstreamType.
     */
    public $Filters;

    /**
     * @param string $GatewayId Gateway ID
     * @param integer $Limit Number of tables in the list
     * @param integer $Offset List offset
     * @param array $Filters Filter conditions. Multiple filter conditions have an AND relationship with each other, supporting id, name, and upstreamType.
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
