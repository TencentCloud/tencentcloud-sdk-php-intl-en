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
 * Connection information
 *
 * @method string getInstanceId() Obtain Connection instance ID; It's an old parameter, please switch to ProxyId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Connection instance ID; It's an old parameter, please switch to ProxyId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
 * @method void setCreateTime(integer $CreateTime) Set Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getProxyName() Obtain Connection name.
 * @method void setProxyName(string $ProxyName) Set Connection name.
 * @method string getAccessRegion() Obtain Access region.
 * @method void setAccessRegion(string $AccessRegion) Set Access region.
 * @method string getRealServerRegion() Obtain Origin server region.
 * @method void setRealServerRegion(string $RealServerRegion) Set Origin server region.
 * @method integer getBandwidth() Obtain Bandwidth. Unit: Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth. Unit: Mbps.
 * @method integer getConcurrent() Obtain Concurrence. Unit: requests/second.
 * @method void setConcurrent(integer $Concurrent) Set Concurrence. Unit: requests/second.
 * @method string getStatus() Obtain Connection status:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating (it's triggered when the account is in arrears);
ISOLATED: isolated (it's triggered when the account is in arrears);
UNKNOWN: unknown status.
 * @method void setStatus(string $Status) Set Connection status:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating (it's triggered when the account is in arrears);
ISOLATED: isolated (it's triggered when the account is in arrears);
UNKNOWN: unknown status.
 * @method string getDomain() Obtain Accessed domain name.
 * @method void setDomain(string $Domain) Set Accessed domain name.
 * @method string getIP() Obtain Accessed IP.
 * @method void setIP(string $IP) Set Accessed IP.
 * @method string getVersion() Obtain Connection versions: 1.0, 2.0, 3.0.
 * @method void setVersion(string $Version) Set Connection versions: 1.0, 2.0, 3.0.
 * @method string getProxyId() Obtain Connection instance ID; It's a new parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection instance ID; It's a new parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScalarable() Obtain 1: this connection is expandable; 0: this connection is not expandable.
 * @method void setScalarable(integer $Scalarable) Set 1: this connection is expandable; 0: this connection is not expandable.
 * @method array getSupportProtocols() Obtain Supported protocol types.
 * @method void setSupportProtocols(array $SupportProtocols) Set Supported protocol types.
 * @method string getGroupId() Obtain Connection group ID. This field exists if a connection belongs to a connection group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set Connection group ID. This field exists if a connection belongs to a connection group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyId() Obtain Security policy ID. This field exists if security policies are configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(string $PolicyId) Set Security policy ID. This field exists if security policies are configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RegionDetail getAccessRegionInfo() Obtain Access region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessRegionInfo(RegionDetail $AccessRegionInfo) Set Access region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RegionDetail getRealServerRegionInfo() Obtain Origin server region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) Set Origin server region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getForwardIP() Obtain Forwarding IP of the connection
 * @method void setForwardIP(string $ForwardIP) Set Forwarding IP of the connection
 * @method array getTagSet() Obtain Tag list. This field is an empty list if no tags exist.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag list. This field is an empty list if no tags exist.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSupportSecurity() Obtain Whether security groups are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportSecurity(integer $SupportSecurity) Set Whether security groups are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBillingType() Obtain Billing mode. 0: bill-by-bandwidth; 1: bill-by-traffic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBillingType(integer $BillingType) Set Billing mode. 0: bill-by-bandwidth; 1: bill-by-traffic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRelatedGlobalDomains() Obtain List of domain names associated with resolution record
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelatedGlobalDomains(array $RelatedGlobalDomains) Set List of domain names associated with resolution record
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getModifyConfigTime() Obtain Configuration change time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifyConfigTime(integer $ModifyConfigTime) Set Configuration change time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProxyType() Obtain Connection type. 104: SILVER connection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProxyType(integer $ProxyType) Set Connection type. 104: SILVER connection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getClientIPMethod() Obtain Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClientIPMethod(array $ClientIPMethod) Set Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4`, `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4`, `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ProxyInfo extends AbstractModel
{
    /**
     * @var string Connection instance ID; It's an old parameter, please switch to ProxyId.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
     */
    public $CreateTime;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Connection name.
     */
    public $ProxyName;

    /**
     * @var string Access region.
     */
    public $AccessRegion;

    /**
     * @var string Origin server region.
     */
    public $RealServerRegion;

    /**
     * @var integer Bandwidth. Unit: Mbps.
     */
    public $Bandwidth;

    /**
     * @var integer Concurrence. Unit: requests/second.
     */
    public $Concurrent;

    /**
     * @var string Connection status:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating (it's triggered when the account is in arrears);
ISOLATED: isolated (it's triggered when the account is in arrears);
UNKNOWN: unknown status.
     */
    public $Status;

    /**
     * @var string Accessed domain name.
     */
    public $Domain;

    /**
     * @var string Accessed IP.
     */
    public $IP;

    /**
     * @var string Connection versions: 1.0, 2.0, 3.0.
     */
    public $Version;

    /**
     * @var string Connection instance ID; It's a new parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var integer 1: this connection is expandable; 0: this connection is not expandable.
     */
    public $Scalarable;

    /**
     * @var array Supported protocol types.
     */
    public $SupportProtocols;

    /**
     * @var string Connection group ID. This field exists if a connection belongs to a connection group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var string Security policy ID. This field exists if security policies are configured.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var RegionDetail Access region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessRegionInfo;

    /**
     * @var RegionDetail Origin server region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerRegionInfo;

    /**
     * @var string Forwarding IP of the connection
     */
    public $ForwardIP;

    /**
     * @var array Tag list. This field is an empty list if no tags exist.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var integer Whether security groups are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportSecurity;

    /**
     * @var integer Billing mode. 0: bill-by-bandwidth; 1: bill-by-traffic.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BillingType;

    /**
     * @var array List of domain names associated with resolution record
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RelatedGlobalDomains;

    /**
     * @var integer Configuration change time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyConfigTime;

    /**
     * @var integer Connection type. 104: SILVER connection.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProxyType;

    /**
     * @var array Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClientIPMethod;

    /**
     * @var string IP version. Valid values: `IPv4`, `IPv6`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IPAddressVersion;

    /**
     * @param string $InstanceId Connection instance ID; It's an old parameter, please switch to ProxyId.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
     * @param integer $ProjectId Project ID.
     * @param string $ProxyName Connection name.
     * @param string $AccessRegion Access region.
     * @param string $RealServerRegion Origin server region.
     * @param integer $Bandwidth Bandwidth. Unit: Mbps.
     * @param integer $Concurrent Concurrence. Unit: requests/second.
     * @param string $Status Connection status:
RUNNING: running;
CREATING: creating;
DESTROYING: terminating;
OPENING: enabling;
CLOSING: disabling;
CLOSED: disabled;
ADJUSTING: adjusting configuration
ISOLATING: isolating (it's triggered when the account is in arrears);
ISOLATED: isolated (it's triggered when the account is in arrears);
UNKNOWN: unknown status.
     * @param string $Domain Accessed domain name.
     * @param string $IP Accessed IP.
     * @param string $Version Connection versions: 1.0, 2.0, 3.0.
     * @param string $ProxyId Connection instance ID; It's a new parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Scalarable 1: this connection is expandable; 0: this connection is not expandable.
     * @param array $SupportProtocols Supported protocol types.
     * @param string $GroupId Connection group ID. This field exists if a connection belongs to a connection group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyId Security policy ID. This field exists if security policies are configured.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RegionDetail $AccessRegionInfo Access region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RegionDetail $RealServerRegionInfo Origin server region details, including region ID and region name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ForwardIP Forwarding IP of the connection
     * @param array $TagSet Tag list. This field is an empty list if no tags exist.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SupportSecurity Whether security groups are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BillingType Billing mode. 0: bill-by-bandwidth; 1: bill-by-traffic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RelatedGlobalDomains List of domain names associated with resolution record
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ModifyConfigTime Configuration change time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProxyType Connection type. 104: SILVER connection.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ClientIPMethod Describes how the connection obtains client IPs. 0: TOA; 1: Proxy Protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $IPAddressVersion IP version. Valid values: `IPv4`, `IPv6`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Scalarable",$param) and $param["Scalarable"] !== null) {
            $this->Scalarable = $param["Scalarable"];
        }

        if (array_key_exists("SupportProtocols",$param) and $param["SupportProtocols"] !== null) {
            $this->SupportProtocols = $param["SupportProtocols"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AccessRegionInfo",$param) and $param["AccessRegionInfo"] !== null) {
            $this->AccessRegionInfo = new RegionDetail();
            $this->AccessRegionInfo->deserialize($param["AccessRegionInfo"]);
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("ForwardIP",$param) and $param["ForwardIP"] !== null) {
            $this->ForwardIP = $param["ForwardIP"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("SupportSecurity",$param) and $param["SupportSecurity"] !== null) {
            $this->SupportSecurity = $param["SupportSecurity"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("RelatedGlobalDomains",$param) and $param["RelatedGlobalDomains"] !== null) {
            $this->RelatedGlobalDomains = $param["RelatedGlobalDomains"];
        }

        if (array_key_exists("ModifyConfigTime",$param) and $param["ModifyConfigTime"] !== null) {
            $this->ModifyConfigTime = $param["ModifyConfigTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }
    }
}
