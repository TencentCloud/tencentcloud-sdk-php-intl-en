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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed EIP information
 *
 * @method string getAddressId() Obtain `EIP` `ID`, the unique ID of the `EIP`.
 * @method void setAddressId(string $AddressId) Set `EIP` `ID`, the unique ID of the `EIP`.
 * @method string getAddressName() Obtain The `EIP` name.
 * @method void setAddressName(string $AddressName) Set The `EIP` name.
 * @method string getAddressStatus() Obtain Possible `EIP` states are 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.
 * @method void setAddressStatus(string $AddressStatus) Set Possible `EIP` states are 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.
 * @method string getAddressIp() Obtain The public IP address
 * @method void setAddressIp(string $AddressIp) Set The public IP address
 * @method string getInstanceId() Obtain The ID of the bound resource instance. This can be a `CVM` or `NAT`.
 * @method void setInstanceId(string $InstanceId) Set The ID of the bound resource instance. This can be a `CVM` or `NAT`.
 * @method string getCreatedTime() Obtain The creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method string getNetworkInterfaceId() Obtain The ID of the bound ENI
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the bound ENI
 * @method string getPrivateAddressIp() Obtain The private IP of the bound resources
 * @method void setPrivateAddressIp(string $PrivateAddressIp) Set The private IP of the bound resources
 * @method boolean getIsArrears() Obtain The isolation status of the resource. `True` indicates the EIP is isolated. `False` indicates that the resource is not isolated.
 * @method void setIsArrears(boolean $IsArrears) Set The isolation status of the resource. `True` indicates the EIP is isolated. `False` indicates that the resource is not isolated.
 * @method boolean getIsBlocked() Obtain The block status of the resource. `True` indicates the EIP is blocked. `False` indicates that the EIP is not blocked.
 * @method void setIsBlocked(boolean $IsBlocked) Set The block status of the resource. `True` indicates the EIP is blocked. `False` indicates that the EIP is not blocked.
 * @method boolean getIsEipDirectConnection() Obtain Whether the EIP supports direct connection mode. `True` indicates the EIP supports direct connection. `False` indicates that the resource does not support direct connection.
 * @method void setIsEipDirectConnection(boolean $IsEipDirectConnection) Set Whether the EIP supports direct connection mode. `True` indicates the EIP supports direct connection. `False` indicates that the resource does not support direct connection.
 * @method string getAddressType() Obtain EIP resource type. Valid values: `CalcIP` (device IP), `WanIP` (public IP), `EIP` (elastic IP), `AnycastEIP` (accelerated EIP), and `AntiDDoSEIP` (anti-DDoS EIP).
 * @method void setAddressType(string $AddressType) Set EIP resource type. Valid values: `CalcIP` (device IP), `WanIP` (public IP), `EIP` (elastic IP), `AnycastEIP` (accelerated EIP), and `AntiDDoSEIP` (anti-DDoS EIP).
 * @method boolean getCascadeRelease() Obtain Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
 * @method void setCascadeRelease(boolean $CascadeRelease) Set Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
 * @method AlgType getEipAlgType() Obtain Type of the protocol used in EIP ALG
 * @method void setEipAlgType(AlgType $EipAlgType) Set Type of the protocol used in EIP ALG
 * @method string getInternetServiceProvider() Obtain The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
 * @method boolean getLocalBgp() Obtain Whether the EIP is in a local BGP.
 * @method void setLocalBgp(boolean $LocalBgp) Set Whether the EIP is in a local BGP.
 * @method integer getBandwidth() Obtain Bandwidth value of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth value of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getInternetChargeType() Obtain Network billing mode of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
Including:
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">Prepaid by monthly-subscribed bandwidth.</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly traffic.</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly bandwidth.</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">Bandwidth package.</p>
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing mode of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
Including:
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">Prepaid by monthly-subscribed bandwidth.</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly traffic.</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly bandwidth.</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">Bandwidth package.</p>
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getTagSet() Obtain List of tags associated with the EIP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set List of tags associated with the EIP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeadlineDate() Obtain The expiration time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeadlineDate(string $DeadlineDate) Set The expiration time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain The type of instance bound with the EIP
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setInstanceType(string $InstanceType) Set The type of instance bound with the EIP
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getEgress() Obtain Static single-line IP network egress
Note: This field may return null, indicating that no valid value was found.
 * @method void setEgress(string $Egress) Set Static single-line IP network egress
Note: This field may return null, indicating that no valid value was found.
 * @method string getAntiDDoSPackageId() Obtain ID of the Anti-DDoS service package. It is returned if the EIP is an Anti-DDoS EIP. 
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) Set ID of the Anti-DDoS service package. It is returned if the EIP is an Anti-DDoS EIP. 
 * @method string getRenewFlag() Obtain Indicates whether the current EIP is auto-renewed. This field is displayed only for EIPs with monthly prepaid bandwidth. Valid values are as follows:
<li>NOTIFY_AND_MANUAL_RENEW: Normal renewal</li><li>NOTIFY_AND_AUTO_RENEW: Automatic renewal</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: No renewal upon expiration</li>

 * @method void setRenewFlag(string $RenewFlag) Set Indicates whether the current EIP is auto-renewed. This field is displayed only for EIPs with monthly prepaid bandwidth. Valid values are as follows:
<li>NOTIFY_AND_MANUAL_RENEW: Normal renewal</li><li>NOTIFY_AND_AUTO_RENEW: Automatic renewal</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: No renewal upon expiration</li>

 * @method string getBandwidthPackageId() Obtain Indicates the ID of the Bandwidth Package associated with the current public IP. If the public IP is not billed by Bandwidth Package, this field is empty.
Note: This field may return null, indicating that no valid value was found.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Indicates the ID of the Bandwidth Package associated with the current public IP. If the public IP is not billed by Bandwidth Package, this field is empty.
Note: This field may return null, indicating that no valid value was found.
 * @method string getUnVpcId() Obtain Indicates the unique ID of the VPC to which the traditional EIPv6 belongs.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnVpcId(string $UnVpcId) Set Indicates the unique ID of the VPC to which the traditional EIPv6 belongs.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDedicatedClusterId() Obtain Indicates the unique ID of the CDC.
Note: This field may return 'null', indicating that no valid value was found.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Indicates the unique ID of the CDC.
Note: This field may return 'null', indicating that no valid value was found.
 */
class Address extends AbstractModel
{
    /**
     * @var string `EIP` `ID`, the unique ID of the `EIP`.
     */
    public $AddressId;

    /**
     * @var string The `EIP` name.
     */
    public $AddressName;

    /**
     * @var string Possible `EIP` states are 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.
     */
    public $AddressStatus;

    /**
     * @var string The public IP address
     */
    public $AddressIp;

    /**
     * @var string The ID of the bound resource instance. This can be a `CVM` or `NAT`.
     */
    public $InstanceId;

    /**
     * @var string The creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $CreatedTime;

    /**
     * @var string The ID of the bound ENI
     */
    public $NetworkInterfaceId;

    /**
     * @var string The private IP of the bound resources
     */
    public $PrivateAddressIp;

    /**
     * @var boolean The isolation status of the resource. `True` indicates the EIP is isolated. `False` indicates that the resource is not isolated.
     */
    public $IsArrears;

    /**
     * @var boolean The block status of the resource. `True` indicates the EIP is blocked. `False` indicates that the EIP is not blocked.
     */
    public $IsBlocked;

    /**
     * @var boolean Whether the EIP supports direct connection mode. `True` indicates the EIP supports direct connection. `False` indicates that the resource does not support direct connection.
     */
    public $IsEipDirectConnection;

    /**
     * @var string EIP resource type. Valid values: `CalcIP` (device IP), `WanIP` (public IP), `EIP` (elastic IP), `AnycastEIP` (accelerated EIP), and `AntiDDoSEIP` (anti-DDoS EIP).
     */
    public $AddressType;

    /**
     * @var boolean Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
     */
    public $CascadeRelease;

    /**
     * @var AlgType Type of the protocol used in EIP ALG
     */
    public $EipAlgType;

    /**
     * @var string The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
     */
    public $InternetServiceProvider;

    /**
     * @var boolean Whether the EIP is in a local BGP.
     */
    public $LocalBgp;

    /**
     * @var integer Bandwidth value of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $Bandwidth;

    /**
     * @var string Network billing mode of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
Including:
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">Prepaid by monthly-subscribed bandwidth.</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly traffic.</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly bandwidth.</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">Bandwidth package.</p>
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $InternetChargeType;

    /**
     * @var array List of tags associated with the EIP
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string The expiration time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeadlineDate;

    /**
     * @var string The type of instance bound with the EIP
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $InstanceType;

    /**
     * @var string Static single-line IP network egress
Note: This field may return null, indicating that no valid value was found.
     */
    public $Egress;

    /**
     * @var string ID of the Anti-DDoS service package. It is returned if the EIP is an Anti-DDoS EIP. 
     */
    public $AntiDDoSPackageId;

    /**
     * @var string Indicates whether the current EIP is auto-renewed. This field is displayed only for EIPs with monthly prepaid bandwidth. Valid values are as follows:
<li>NOTIFY_AND_MANUAL_RENEW: Normal renewal</li><li>NOTIFY_AND_AUTO_RENEW: Automatic renewal</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: No renewal upon expiration</li>

     */
    public $RenewFlag;

    /**
     * @var string Indicates the ID of the Bandwidth Package associated with the current public IP. If the public IP is not billed by Bandwidth Package, this field is empty.
Note: This field may return null, indicating that no valid value was found.
     */
    public $BandwidthPackageId;

    /**
     * @var string Indicates the unique ID of the VPC to which the traditional EIPv6 belongs.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnVpcId;

    /**
     * @var string Indicates the unique ID of the CDC.
Note: This field may return 'null', indicating that no valid value was found.
     */
    public $DedicatedClusterId;

    /**
     * @param string $AddressId `EIP` `ID`, the unique ID of the `EIP`.
     * @param string $AddressName The `EIP` name.
     * @param string $AddressStatus Possible `EIP` states are 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.
     * @param string $AddressIp The public IP address
     * @param string $InstanceId The ID of the bound resource instance. This can be a `CVM` or `NAT`.
     * @param string $CreatedTime The creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $NetworkInterfaceId The ID of the bound ENI
     * @param string $PrivateAddressIp The private IP of the bound resources
     * @param boolean $IsArrears The isolation status of the resource. `True` indicates the EIP is isolated. `False` indicates that the resource is not isolated.
     * @param boolean $IsBlocked The block status of the resource. `True` indicates the EIP is blocked. `False` indicates that the EIP is not blocked.
     * @param boolean $IsEipDirectConnection Whether the EIP supports direct connection mode. `True` indicates the EIP supports direct connection. `False` indicates that the resource does not support direct connection.
     * @param string $AddressType EIP resource type. Valid values: `CalcIP` (device IP), `WanIP` (public IP), `EIP` (elastic IP), `AnycastEIP` (accelerated EIP), and `AntiDDoSEIP` (anti-DDoS EIP).
     * @param boolean $CascadeRelease Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
     * @param AlgType $EipAlgType Type of the protocol used in EIP ALG
     * @param string $InternetServiceProvider The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
     * @param boolean $LocalBgp Whether the EIP is in a local BGP.
     * @param integer $Bandwidth Bandwidth value of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $InternetChargeType Network billing mode of EIP. The EIP for the bill-by-CVM account will return `null`.
Note: this field may return `null`, indicating that no valid value was found.
Including:
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">Prepaid by monthly-subscribed bandwidth.</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly traffic.</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">Pay-as-you-go billing by hourly bandwidth.</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">Bandwidth package.</p>
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $TagSet List of tags associated with the EIP
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeadlineDate The expiration time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceType The type of instance bound with the EIP
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $Egress Static single-line IP network egress
Note: This field may return null, indicating that no valid value was found.
     * @param string $AntiDDoSPackageId ID of the Anti-DDoS service package. It is returned if the EIP is an Anti-DDoS EIP. 
     * @param string $RenewFlag Indicates whether the current EIP is auto-renewed. This field is displayed only for EIPs with monthly prepaid bandwidth. Valid values are as follows:
<li>NOTIFY_AND_MANUAL_RENEW: Normal renewal</li><li>NOTIFY_AND_AUTO_RENEW: Automatic renewal</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: No renewal upon expiration</li>

     * @param string $BandwidthPackageId Indicates the ID of the Bandwidth Package associated with the current public IP. If the public IP is not billed by Bandwidth Package, this field is empty.
Note: This field may return null, indicating that no valid value was found.
     * @param string $UnVpcId Indicates the unique ID of the VPC to which the traditional EIPv6 belongs.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DedicatedClusterId Indicates the unique ID of the CDC.
Note: This field may return 'null', indicating that no valid value was found.
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressStatus",$param) and $param["AddressStatus"] !== null) {
            $this->AddressStatus = $param["AddressStatus"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateAddressIp",$param) and $param["PrivateAddressIp"] !== null) {
            $this->PrivateAddressIp = $param["PrivateAddressIp"];
        }

        if (array_key_exists("IsArrears",$param) and $param["IsArrears"] !== null) {
            $this->IsArrears = $param["IsArrears"];
        }

        if (array_key_exists("IsBlocked",$param) and $param["IsBlocked"] !== null) {
            $this->IsBlocked = $param["IsBlocked"];
        }

        if (array_key_exists("IsEipDirectConnection",$param) and $param["IsEipDirectConnection"] !== null) {
            $this->IsEipDirectConnection = $param["IsEipDirectConnection"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CascadeRelease",$param) and $param["CascadeRelease"] !== null) {
            $this->CascadeRelease = $param["CascadeRelease"];
        }

        if (array_key_exists("EipAlgType",$param) and $param["EipAlgType"] !== null) {
            $this->EipAlgType = new AlgType();
            $this->EipAlgType->deserialize($param["EipAlgType"]);
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("LocalBgp",$param) and $param["LocalBgp"] !== null) {
            $this->LocalBgp = $param["LocalBgp"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DeadlineDate",$param) and $param["DeadlineDate"] !== null) {
            $this->DeadlineDate = $param["DeadlineDate"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("UnVpcId",$param) and $param["UnVpcId"] !== null) {
            $this->UnVpcId = $param["UnVpcId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
