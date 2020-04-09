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
 * Object of route table conflict
 *
 * @method string getRouteTableType() Obtain Route table type.
 * @method void setRouteTableType(string $RouteTableType) Set Route table type.
 * @method string getRouteTableCidrBlock() Obtain Route table CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteTableCidrBlock(string $RouteTableCidrBlock) Set Route table CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRouteTableName() Obtain Route table name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRouteTableId() Obtain Route table ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteTableId(string $RouteTableId) Set Route table ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RouteTableConflict extends AbstractModel
{
    /**
     * @var string Route table type.
     */
    public $RouteTableType;

    /**
     * @var string Route table CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteTableCidrBlock;

    /**
     * @var string Route table name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteTableName;

    /**
     * @var string Route table ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteTableId;

    /**
     * @param string $RouteTableType Route table type.
     * @param string $RouteTableCidrBlock Route table CIDR.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RouteTableName Route table name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RouteTableId Route table ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RouteTableType",$param) and $param["RouteTableType"] !== null) {
            $this->RouteTableType = $param["RouteTableType"];
        }

        if (array_key_exists("RouteTableCidrBlock",$param) and $param["RouteTableCidrBlock"] !== null) {
            $this->RouteTableCidrBlock = $param["RouteTableCidrBlock"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
