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
 * CreateProxyGroup request structure.
 *
 * @method integer getProjectId() Obtain Project ID of connection group
 * @method void setProjectId(integer $ProjectId) Set Project ID of connection group
 * @method string getGroupName() Obtain Alias of connection group
 * @method void setGroupName(string $GroupName) Set Alias of connection group
 * @method string getRealServerRegion() Obtain Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
 * @method void setRealServerRegion(string $RealServerRegion) Set Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
 * @method array getTagSet() Obtain List of tags
 * @method void setTagSet(array $TagSet) Set List of tags
 * @method array getAccessRegionSet() Obtain List of acceleration regions, including their names, bandwidth, and concurrence configuration.
 * @method void setAccessRegionSet(array $AccessRegionSet) Set List of acceleration regions, including their names, bandwidth, and concurrence configuration.
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method string getPackageType() Obtain Package type of connection group. Valid values: `Thunder` (default) and `Accelerator`.
 * @method void setPackageType(string $PackageType) Set Package type of connection group. Valid values: `Thunder` (default) and `Accelerator`.
 * @method integer getHttp3Supported() Obtain (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 * @method void setHttp3Supported(integer $Http3Supported) Set (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 */
class CreateProxyGroupRequest extends AbstractModel
{
    /**
     * @var integer Project ID of connection group
     */
    public $ProjectId;

    /**
     * @var string Alias of connection group
     */
    public $GroupName;

    /**
     * @var string Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
     */
    public $RealServerRegion;

    /**
     * @var array List of tags
     */
    public $TagSet;

    /**
     * @var array List of acceleration regions, including their names, bandwidth, and concurrence configuration.
     */
    public $AccessRegionSet;

    /**
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
     */
    public $IPAddressVersion;

    /**
     * @var string Package type of connection group. Valid values: `Thunder` (default) and `Accelerator`.
     */
    public $PackageType;

    /**
     * @var integer (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
     */
    public $Http3Supported;

    /**
     * @param integer $ProjectId Project ID of connection group
     * @param string $GroupName Alias of connection group
     * @param string $RealServerRegion Origin server region; Reference API: DescribeDestRegions; It returnes the `RegionId` of the parameter `RegionDetail`.
     * @param array $TagSet List of tags
     * @param array $AccessRegionSet List of acceleration regions, including their names, bandwidth, and concurrence configuration.
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
     * @param string $PackageType Package type of connection group. Valid values: `Thunder` (default) and `Accelerator`.
     * @param integer $Http3Supported (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AccessRegionSet",$param) and $param["AccessRegionSet"] !== null) {
            $this->AccessRegionSet = [];
            foreach ($param["AccessRegionSet"] as $key => $value){
                $obj = new AccessConfiguration();
                $obj->deserialize($value);
                array_push($this->AccessRegionSet, $obj);
            }
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
