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
 * Connection group details
 *
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getProxyNum() Obtain Number of connections in connection group
 * @method void setProxyNum(integer $ProxyNum) Set Number of connections in connection group
 * @method integer getStatus() Obtain Connection group status:
0: running normally;
1: creating;
4: terminating;
11: migrating;
 * @method void setStatus(integer $Status) Set Connection group status:
0: running normally;
1: creating;
4: terminating;
11: migrating;
 * @method string getOwnerUin() Obtain Owner UIN
 * @method void setOwnerUin(string $OwnerUin) Set Owner UIN
 * @method string getCreateUin() Obtain Creation UIN
 * @method void setCreateUin(string $CreateUin) Set Creation UIN
 * @method string getGroupName() Obtain Connection name
 * @method void setGroupName(string $GroupName) Set Connection name
 * @method string getDnsDefaultIp() Obtain Default IP of domain name resolution for connection groups
 * @method void setDnsDefaultIp(string $DnsDefaultIp) Set Default IP of domain name resolution for connection groups
 * @method string getDomain() Obtain Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RegionDetail getRealServerRegionInfo() Obtain Target region
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) Set Target region
 * @method boolean getIsOldGroup() Obtain Whether it is an old connection group, i.e., those created before August 3, 2018.
 * @method void setIsOldGroup(boolean $IsOldGroup) Set Whether it is an old connection group, i.e., those created before August 3, 2018.
 * @method string getGroupId() Obtain Connection group ID
 * @method void setGroupId(string $GroupId) Set Connection group ID
 * @method array getTagSet() Obtain Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyId() Obtain Security policy ID. This field exists if security policies are set.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPolicyId(string $PolicyId) Set Security policy ID. This field exists if security policies are set.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Connection group version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Connection group version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getClientIPMethod() Obtain Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClientIPMethod(array $ClientIPMethod) Set Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain Package type of connection groups. Valid values: `Thunder` (general connection group) and `Accelerator` (game accelerator connection group).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Package type of connection groups. Valid values: `Thunder` (general connection group) and `Accelerator` (game accelerator connection group).
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ProxyGroupDetail extends AbstractModel
{
    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Number of connections in connection group
     */
    public $ProxyNum;

    /**
     * @var integer Connection group status:
0: running normally;
1: creating;
4: terminating;
11: migrating;
     */
    public $Status;

    /**
     * @var string Owner UIN
     */
    public $OwnerUin;

    /**
     * @var string Creation UIN
     */
    public $CreateUin;

    /**
     * @var string Connection name
     */
    public $GroupName;

    /**
     * @var string Default IP of domain name resolution for connection groups
     */
    public $DnsDefaultIp;

    /**
     * @var string Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var RegionDetail Target region
     */
    public $RealServerRegionInfo;

    /**
     * @var boolean Whether it is an old connection group, i.e., those created before August 3, 2018.
     */
    public $IsOldGroup;

    /**
     * @var string Connection group ID
     */
    public $GroupId;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Security policy ID. This field exists if security policies are set.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Connection group version
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var array Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClientIPMethod;

    /**
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IPAddressVersion;

    /**
     * @var string Package type of connection groups. Valid values: `Thunder` (general connection group) and `Accelerator` (game accelerator connection group).
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @param integer $CreateTime Creation time
     * @param integer $ProjectId Project ID
     * @param integer $ProxyNum Number of connections in connection group
     * @param integer $Status Connection group status:
0: running normally;
1: creating;
4: terminating;
11: migrating;
     * @param string $OwnerUin Owner UIN
     * @param string $CreateUin Creation UIN
     * @param string $GroupName Connection name
     * @param string $DnsDefaultIp Default IP of domain name resolution for connection groups
     * @param string $Domain Connection group domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RegionDetail $RealServerRegionInfo Target region
     * @param boolean $IsOldGroup Whether it is an old connection group, i.e., those created before August 3, 2018.
     * @param string $GroupId Connection group ID
     * @param array $TagSet Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyId Security policy ID. This field exists if security policies are set.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Version Connection group version
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ClientIPMethod Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $PackageType Package type of connection groups. Valid values: `Thunder` (general connection group) and `Accelerator` (game accelerator connection group).
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyNum",$param) and $param["ProxyNum"] !== null) {
            $this->ProxyNum = $param["ProxyNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("DnsDefaultIp",$param) and $param["DnsDefaultIp"] !== null) {
            $this->DnsDefaultIp = $param["DnsDefaultIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("IsOldGroup",$param) and $param["IsOldGroup"] !== null) {
            $this->IsOldGroup = $param["IsOldGroup"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }
    }
}
