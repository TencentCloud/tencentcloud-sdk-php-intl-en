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
 * DescribeCloudNativeAPIGatewayNodes request structure.
 *
 * @method string getGatewayId() Obtain Cloud Native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API gateway instance ID.
 * @method string getGroupId() Obtain Instance Group ID
 * @method void setGroupId(string $GroupId) Set Instance Group ID
 * @method integer getLimit() Obtain Number of paginated items
 * @method void setLimit(integer $Limit) Set Number of paginated items
 * @method integer getOffset() Obtain Start acquisition from page number
 * @method void setOffset(integer $Offset) Set Start acquisition from page number
 */
class DescribeCloudNativeAPIGatewayNodesRequest extends AbstractModel
{
    /**
     * @var string Cloud Native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string Instance Group ID
     */
    public $GroupId;

    /**
     * @var integer Number of paginated items
     */
    public $Limit;

    /**
     * @var integer Start acquisition from page number
     */
    public $Offset;

    /**
     * @param string $GatewayId Cloud Native API gateway instance ID.
     * @param string $GroupId Instance Group ID
     * @param integer $Limit Number of paginated items
     * @param integer $Offset Start acquisition from page number
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
