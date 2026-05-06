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
 * DescribeCloudNativeAPIGatewayServices request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method integer getLimit() Obtain Number of tables in the list
 * @method void setLimit(integer $Limit) Set Number of tables in the list
 * @method integer getOffset() Obtain List offset
 * @method void setOffset(integer $Offset) Set List offset
 * @method array getFilters() Obtain Filter criteria. Multiple filter conditions are in an AND relationship with each other. Support name and upstreamType.
 * @method void setFilters(array $Filters) Set Filter criteria. Multiple filter conditions are in an AND relationship with each other. Support name and upstreamType.
 */
class DescribeCloudNativeAPIGatewayServicesRequest extends AbstractModel
{
    /**
     * @var string gateway ID
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
     * @var array Filter criteria. Multiple filter conditions are in an AND relationship with each other. Support name and upstreamType.
     */
    public $Filters;

    /**
     * @param string $GatewayId gateway ID
     * @param integer $Limit Number of tables in the list
     * @param integer $Offset List offset
     * @param array $Filters Filter criteria. Multiple filter conditions are in an AND relationship with each other. Support name and upstreamType.
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
