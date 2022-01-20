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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessRegionsByDestRegion request structure.
 *
 * @method string getDestRegion() Obtain Origin server region: the DescribeDestRegions API returns the value of `RegionId` field of `DestRegionSet`.
 * @method void setDestRegion(string $DestRegion) Set Origin server region: the DescribeDestRegions API returns the value of `RegionId` field of `DestRegionSet`.
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method string getPackageType() Obtain Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 * @method void setPackageType(string $PackageType) Set Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 */
class DescribeAccessRegionsByDestRegionRequest extends AbstractModel
{
    /**
     * @var string Origin server region: the DescribeDestRegions API returns the value of `RegionId` field of `DestRegionSet`.
     */
    public $DestRegion;

    /**
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
     */
    public $IPAddressVersion;

    /**
     * @var string Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
     */
    public $PackageType;

    /**
     * @param string $DestRegion Origin server region: the DescribeDestRegions API returns the value of `RegionId` field of `DestRegionSet`.
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
     * @param string $PackageType Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
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
        if (array_key_exists("DestRegion",$param) and $param["DestRegion"] !== null) {
            $this->DestRegion = $param["DestRegion"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }
    }
}
