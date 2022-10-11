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
 * Connection group details list
 *
 * @method string getGroupId() Obtain Connection group ID
 * @method void setGroupId(string $GroupId) Set Connection group ID
 * @method string getDomain() Obtain Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain Connection group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Connection group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method RegionDetail getRealServerRegionInfo() Obtain Target region
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) Set Target region
 * @method string getStatus() Obtain Connection group status.
Where:
`RUNNING`: Running
`CREATING`: Creating
`DESTROYING`: Terminating
`MOVING`: Migrating
`CHANGING`: Deploying
 * @method void setStatus(string $Status) Set Connection group status.
Where:
`RUNNING`: Running
`CREATING`: Creating
`DESTROYING`: Terminating
`MOVING`: Migrating
`CHANGING`: Deploying
 * @method array getTagSet() Obtain Tag list.
 * @method void setTagSet(array $TagSet) Set Tag list.
 * @method string getVersion() Obtain Connection group version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Connection group version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProxyType() Obtain Whether the connection group contains a Microsoft connection
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProxyType(integer $ProxyType) Set Whether the connection group contains a Microsoft connection
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHttp3Supported() Obtain Specifies whether to enable HTTP3. Valid values:
`0`: Disable
`1`: Enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttp3Supported(integer $Http3Supported) Set Specifies whether to enable HTTP3. Valid values:
`0`: Disable
`1`: Enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFeatureBitmap() Obtain Feature bitmap. Valid values:
`0`: Feature not supported
`1`: Feature supported
Each bit in the bitmap represents a feature:
1st bit: Layer-4 acceleration;
2nd bit: Layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: Dedicated BGP access;
6th bit: Non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFeatureBitmap(integer $FeatureBitmap) Set Feature bitmap. Valid values:
`0`: Feature not supported
`1`: Feature supported
Each bit in the bitmap represents a feature:
1st bit: Layer-4 acceleration;
2nd bit: Layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: Dedicated BGP access;
6th bit: Non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @var string Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Connection group name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var RegionDetail Target region
     */
    public $RealServerRegionInfo;

    /**
     * @var string Connection group status.
Where:
`RUNNING`: Running
`CREATING`: Creating
`DESTROYING`: Terminating
`MOVING`: Migrating
`CHANGING`: Deploying
     */
    public $Status;

    /**
     * @var array Tag list.
     */
    public $TagSet;

    /**
     * @var string Connection group version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var integer Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Whether the connection group contains a Microsoft connection
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyType;

    /**
     * @var integer Specifies whether to enable HTTP3. Valid values:
`0`: Disable
`1`: Enable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Http3Supported;

    /**
     * @var integer Feature bitmap. Valid values:
`0`: Feature not supported
`1`: Feature supported
Each bit in the bitmap represents a feature:
1st bit: Layer-4 acceleration;
2nd bit: Layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: Dedicated BGP access;
6th bit: Non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FeatureBitmap;

    /**
     * @param string $GroupId Connection group ID
     * @param string $Domain Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName Connection group name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
     * @param RegionDetail $RealServerRegionInfo Target region
     * @param string $Status Connection group status.
Where:
`RUNNING`: Running
`CREATING`: Creating
`DESTROYING`: Terminating
`MOVING`: Migrating
`CHANGING`: Deploying
     * @param array $TagSet Tag list.
     * @param string $Version Connection group version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProxyType Whether the connection group contains a Microsoft connection
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Http3Supported Specifies whether to enable HTTP3. Valid values:
`0`: Disable
`1`: Enable
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FeatureBitmap Feature bitmap. Valid values:
`0`: Feature not supported
`1`: Feature supported
Each bit in the bitmap represents a feature:
1st bit: Layer-4 acceleration;
2nd bit: Layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: Dedicated BGP access;
6th bit: Non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }

        if (array_key_exists("FeatureBitmap",$param) and $param["FeatureBitmap"] !== null) {
            $this->FeatureBitmap = $param["FeatureBitmap"];
        }
    }
}
