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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicIps request structure.
 *
 * @method array getNetworkInstanceId() Obtain Filter by public network instance ID (substring match, union of multiple values)
 * @method void setNetworkInstanceId(array $NetworkInstanceId) Set Filter by public network instance ID (substring match, union of multiple values)
 * @method string getZoneId() Obtain Filter by availability zone/IDC
 * @method void setZoneId(string $ZoneId) Set Filter by availability zone/IDC
 * @method array getIp() Obtain Filter by IP (substring match, union of multiple values)
 * @method void setIp(array $Ip) Set Filter by IP (substring match, union of multiple values)
 * @method array getState() Obtain Filter by status, available values: `InUse`, `Unbound` (multiple values are combined with OR)
 * @method void setState(array $State) Set Filter by status, available values: `InUse`, `Unbound` (multiple values are combined with OR)
 * @method array getType() Obtain Filter by IP version. Available values: `Ipv4`, `Ipv6` (multiple values are combined).
 * @method void setType(array $Type) Set Filter by IP version. Available values: `Ipv4`, `Ipv6` (multiple values are combined).
 * @method string getOrderByCreateTime() Obtain Sort by creation time, available values: `asc`, `desc` (default `desc`)
 * @method void setOrderByCreateTime(string $OrderByCreateTime) Set Sort by creation time, available values: `asc`, `desc` (default `desc`)
 * @method string getOrderByUpdateTime() Obtain Sort by update time, available values: `asc`, `desc` (priority is higher than sort by creation time)
 * @method void setOrderByUpdateTime(string $OrderByUpdateTime) Set Sort by update time, available values: `asc`, `desc` (priority is higher than sort by creation time)
 * @method integer getOffset() Obtain Pagination offset, default 0
 * @method void setOffset(integer $Offset) Set Pagination offset, default 0
 * @method integer getLimit() Obtain Number of items per page. Default 20. Maximum 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. Default 20. Maximum 100.
 */
class DescribePublicIpsRequest extends AbstractModel
{
    /**
     * @var array Filter by public network instance ID (substring match, union of multiple values)
     */
    public $NetworkInstanceId;

    /**
     * @var string Filter by availability zone/IDC
     */
    public $ZoneId;

    /**
     * @var array Filter by IP (substring match, union of multiple values)
     */
    public $Ip;

    /**
     * @var array Filter by status, available values: `InUse`, `Unbound` (multiple values are combined with OR)
     */
    public $State;

    /**
     * @var array Filter by IP version. Available values: `Ipv4`, `Ipv6` (multiple values are combined).
     */
    public $Type;

    /**
     * @var string Sort by creation time, available values: `asc`, `desc` (default `desc`)
     */
    public $OrderByCreateTime;

    /**
     * @var string Sort by update time, available values: `asc`, `desc` (priority is higher than sort by creation time)
     */
    public $OrderByUpdateTime;

    /**
     * @var integer Pagination offset, default 0
     */
    public $Offset;

    /**
     * @var integer Number of items per page. Default 20. Maximum 100.
     */
    public $Limit;

    /**
     * @param array $NetworkInstanceId Filter by public network instance ID (substring match, union of multiple values)
     * @param string $ZoneId Filter by availability zone/IDC
     * @param array $Ip Filter by IP (substring match, union of multiple values)
     * @param array $State Filter by status, available values: `InUse`, `Unbound` (multiple values are combined with OR)
     * @param array $Type Filter by IP version. Available values: `Ipv4`, `Ipv6` (multiple values are combined).
     * @param string $OrderByCreateTime Sort by creation time, available values: `asc`, `desc` (default `desc`)
     * @param string $OrderByUpdateTime Sort by update time, available values: `asc`, `desc` (priority is higher than sort by creation time)
     * @param integer $Offset Pagination offset, default 0
     * @param integer $Limit Number of items per page. Default 20. Maximum 100.
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OrderByCreateTime",$param) and $param["OrderByCreateTime"] !== null) {
            $this->OrderByCreateTime = $param["OrderByCreateTime"];
        }

        if (array_key_exists("OrderByUpdateTime",$param) and $param["OrderByUpdateTime"] !== null) {
            $this->OrderByUpdateTime = $param["OrderByUpdateTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
