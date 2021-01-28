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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInternetAddressQuota response structure.
 *
 * @method integer getIpv6PrefixLen() Obtain Minimum prefix length allowed for a public IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpv6PrefixLen(integer $Ipv6PrefixLen) Set Minimum prefix length allowed for a public IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIpv4BgpQuota() Obtain Quota of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpv4BgpQuota(integer $Ipv4BgpQuota) Set Quota of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIpv4OtherQuota() Obtain Quota of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpv4OtherQuota(integer $Ipv4OtherQuota) Set Quota of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIpv4BgpNum() Obtain Used number of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpv4BgpNum(integer $Ipv4BgpNum) Set Used number of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIpv4OtherNum() Obtain Used number of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIpv4OtherNum(integer $Ipv4OtherNum) Set Used number of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInternetAddressQuotaResponse extends AbstractModel
{
    /**
     * @var integer Minimum prefix length allowed for a public IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ipv6PrefixLen;

    /**
     * @var integer Quota of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ipv4BgpQuota;

    /**
     * @var integer Quota of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ipv4OtherQuota;

    /**
     * @var integer Used number of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ipv4BgpNum;

    /**
     * @var integer Used number of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Ipv4OtherNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Ipv6PrefixLen Minimum prefix length allowed for a public IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Ipv4BgpQuota Quota of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Ipv4OtherQuota Quota of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Ipv4BgpNum Used number of BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Ipv4OtherNum Used number of non-BGP IPv4 addresses
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Ipv6PrefixLen",$param) and $param["Ipv6PrefixLen"] !== null) {
            $this->Ipv6PrefixLen = $param["Ipv6PrefixLen"];
        }

        if (array_key_exists("Ipv4BgpQuota",$param) and $param["Ipv4BgpQuota"] !== null) {
            $this->Ipv4BgpQuota = $param["Ipv4BgpQuota"];
        }

        if (array_key_exists("Ipv4OtherQuota",$param) and $param["Ipv4OtherQuota"] !== null) {
            $this->Ipv4OtherQuota = $param["Ipv4OtherQuota"];
        }

        if (array_key_exists("Ipv4BgpNum",$param) and $param["Ipv4BgpNum"] !== null) {
            $this->Ipv4BgpNum = $param["Ipv4BgpNum"];
        }

        if (array_key_exists("Ipv4OtherNum",$param) and $param["Ipv4OtherNum"] !== null) {
            $this->Ipv4OtherNum = $param["Ipv4OtherNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
