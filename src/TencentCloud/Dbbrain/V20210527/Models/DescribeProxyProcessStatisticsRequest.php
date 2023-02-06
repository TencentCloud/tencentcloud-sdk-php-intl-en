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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxyProcessStatistics request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceProxyId() Obtain The proxy ID you want to query under the instance
 * @method void setInstanceProxyId(string $InstanceProxyId) Set The proxy ID you want to query under the instance
 * @method integer getLimit() Obtain Number of returned results.
 * @method void setLimit(integer $Limit) Set Number of returned results.
 * @method string getProduct() Obtain Service type. Valid value: `redis` (TencentDB for Redis).
 * @method void setProduct(string $Product) Set Service type. Valid value: `redis` (TencentDB for Redis).
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method string getSortBy() Obtain Sort by field. Valid values: `AllConn`, `ActiveConn`, `Ip`.
 * @method void setSortBy(string $SortBy) Set Sort by field. Valid values: `AllConn`, `ActiveConn`, `Ip`.
 * @method string getOrderDirection() Obtain Sorting order. Valid values: `DESC`, `ASC`.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: `DESC`, `ASC`.
 */
class DescribeProxyProcessStatisticsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string The proxy ID you want to query under the instance
     */
    public $InstanceProxyId;

    /**
     * @var integer Number of returned results.
     */
    public $Limit;

    /**
     * @var string Service type. Valid value: `redis` (TencentDB for Redis).
     */
    public $Product;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Sort by field. Valid values: `AllConn`, `ActiveConn`, `Ip`.
     */
    public $SortBy;

    /**
     * @var string Sorting order. Valid values: `DESC`, `ASC`.
     */
    public $OrderDirection;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceProxyId The proxy ID you want to query under the instance
     * @param integer $Limit Number of returned results.
     * @param string $Product Service type. Valid value: `redis` (TencentDB for Redis).
     * @param integer $Offset Offset. Default value: `0`.
     * @param string $SortBy Sort by field. Valid values: `AllConn`, `ActiveConn`, `Ip`.
     * @param string $OrderDirection Sorting order. Valid values: `DESC`, `ASC`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
