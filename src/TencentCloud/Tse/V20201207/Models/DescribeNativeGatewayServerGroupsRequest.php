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
 * DescribeNativeGatewayServerGroups request structure.
 *
 * @method string getGatewayId() Obtain Cloud native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud native API gateway instance ID.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results, defaults to 20.
 * @method void setLimit(integer $Limit) Set Number of returned results, defaults to 20.
 * @method array getFilters() Obtain Filter parameters, based on group name and group ID (Name, GroupId) for filter criteria.
 * @method void setFilters(array $Filters) Set Filter parameters, based on group name and group ID (Name, GroupId) for filter criteria.
 */
class DescribeNativeGatewayServerGroupsRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results, defaults to 20.
     */
    public $Limit;

    /**
     * @var array Filter parameters, based on group name and group ID (Name, GroupId) for filter criteria.
     */
    public $Filters;

    /**
     * @param string $GatewayId Cloud native API gateway instance ID.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results, defaults to 20.
     * @param array $Filters Filter parameters, based on group name and group ID (Name, GroupId) for filter criteria.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
