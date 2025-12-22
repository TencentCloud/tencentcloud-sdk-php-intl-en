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
 * @method string getNetworkInterfaceId() Obtain Specifies the bound elastic network interface ID. null means no elastic network interface is bound.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set Specifies the bound elastic network interface ID. null means no elastic network interface is bound.
 * @method string getPrivateAddressIp() Obtain Bound resource internal ip. null means no bound resource internal ip.
 * @method void setPrivateAddressIp(string $PrivateAddressIp) Set Bound resource internal ip. null means no bound resource internal ip.
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
 * @method string getInternetServiceProvider() Obtain EIP ISP information. currently may return values including "CMCC" (mobile), "CTCC" (telecom), "CUCC" (china unicom), "BGP" (standard BGP).
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set EIP ISP information. currently may return values including "CMCC" (mobile), "CTCC" (telecom), "CUCC" (china unicom), "BGP" (standard BGP).
 * @method boolean getLocalBgp() Obtain Specifies whether the EIP is a local bandwidth EIP. valid values:.
<li>true: EIP with local bandwidth.</li>.
<li>false: not a local bandwidth EIP.</li>.
 * @method void setLocalBgp(boolean $LocalBgp) Set Specifies whether the EIP is a local bandwidth EIP. valid values:.
<li>true: EIP with local bandwidth.</li>.
<li>false: not a local bandwidth EIP.</li>.
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
 * @method array getTagSet() Obtain Specifies the Tag list associated with the elastic IP.
 * @method void setTagSet(array $TagSet) Set Specifies the Tag list associated with the elastic IP.
 * @method string getDeadlineDate() Obtain Prepaid monthly subscription bandwidth IP expiration time.
Specifies the time format in YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeadlineDate(string $DeadlineDate) Set Prepaid monthly subscription bandwidth IP expiration time.
Specifies the time format in YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceType() Obtain Instance type to which the EIP is bound. valid values:.
<Li>CVM: indicates cloud virtual machine.</li>.
<li>Specifies the NAT gateway.</li>.
<Li>HAVIP: high availability virtual ip.</li>.
<Li>ENI: specifies the elastic network interface.</li>.
<Li>CLB: specifies a private network clb.</li>.
<Li>DHCPIP: elastic private ip address</li>.


Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceType(string $InstanceType) Set Instance type to which the EIP is bound. valid values:.
<Li>CVM: indicates cloud virtual machine.</li>.
<li>Specifies the NAT gateway.</li>.
<Li>HAVIP: high availability virtual ip.</li>.
<Li>ENI: specifies the elastic network interface.</li>.
<Li>CLB: specifies a private network clb.</li>.
<Li>DHCPIP: elastic private ip address</li>.


Note: This field may return null, indicating that no valid value was found.
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
 * @method string getUnVpcId() Obtain Specifies the unique ID of the vpc to which the traditional elastic IPv6 belongs.
 * @method void setUnVpcId(string $UnVpcId) Set Specifies the unique ID of the vpc to which the traditional elastic IPv6 belongs.
 * @method string getDedicatedClusterId() Obtain Specifies the unique ID of the CDC.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Specifies the unique ID of the CDC.
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
     * @var string Specifies the bound elastic network interface ID. null means no elastic network interface is bound.
     */
    public $NetworkInterfaceId;

    /**
     * @var string Bound resource internal ip. null means no bound resource internal ip.
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
     * @var string EIP ISP information. currently may return values including "CMCC" (mobile), "CTCC" (telecom), "CUCC" (china unicom), "BGP" (standard BGP).
     */
    public $InternetServiceProvider;

    /**
     * @var boolean Specifies whether the EIP is a local bandwidth EIP. valid values:.
<li>true: EIP with local bandwidth.</li>.
<li>false: not a local bandwidth EIP.</li>.
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
     * @var array Specifies the Tag list associated with the elastic IP.
     */
    public $TagSet;

    /**
     * @var string Prepaid monthly subscription bandwidth IP expiration time.
Specifies the time format in YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeadlineDate;

    /**
     * @var string Instance type to which the EIP is bound. valid values:.
<Li>CVM: indicates cloud virtual machine.</li>.
<li>Specifies the NAT gateway.</li>.
<Li>HAVIP: high availability virtual ip.</li>.
<Li>ENI: specifies the elastic network interface.</li>.
<Li>CLB: specifies a private network clb.</li>.
<Li>DHCPIP: elastic private ip address</li>.


Note: This field may return null, indicating that no valid value was found.
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
     * @var string Specifies the unique ID of the vpc to which the traditional elastic IPv6 belongs.
     */
    public $UnVpcId;

    /**
     * @var string Specifies the unique ID of the CDC.
     */
    public $DedicatedClusterId;

    /**
     * @param string $AddressId `EIP` `ID`, the unique ID of the `EIP`.
     * @param string $AddressName The `EIP` name.
     * @param string $AddressStatus Possible `EIP` states are 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.
     * @param string $AddressIp The public IP address
     * @param string $InstanceId The ID of the bound resource instance. This can be a `CVM` or `NAT`.
     * @param string $CreatedTime The creation time, which follows the `ISO8601` standard and uses `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $NetworkInterfaceId Specifies the bound elastic network interface ID. null means no elastic network interface is bound.
     * @param string $PrivateAddressIp Bound resource internal ip. null means no bound resource internal ip.
     * @param boolean $IsArrears The isolation status of the resource. `True` indicates the EIP is isolated. `False` indicates that the resource is not isolated.
     * @param boolean $IsBlocked The block status of the resource. `True` indicates the EIP is blocked. `False` indicates that the EIP is not blocked.
     * @param boolean $IsEipDirectConnection Whether the EIP supports direct connection mode. `True` indicates the EIP supports direct connection. `False` indicates that the resource does not support direct connection.
     * @param string $AddressType EIP resource type. Valid values: `CalcIP` (device IP), `WanIP` (public IP), `EIP` (elastic IP), `AnycastEIP` (accelerated EIP), and `AntiDDoSEIP` (anti-DDoS EIP).
     * @param boolean $CascadeRelease Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
     * @param AlgType $EipAlgType Type of the protocol used in EIP ALG
     * @param string $InternetServiceProvider EIP ISP information. currently may return values including "CMCC" (mobile), "CTCC" (telecom), "CUCC" (china unicom), "BGP" (standard BGP).
     * @param boolean $LocalBgp Specifies whether the EIP is a local bandwidth EIP. valid values:.
<li>true: EIP with local bandwidth.</li>.
<li>false: not a local bandwidth EIP.</li>.
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
     * @param array $TagSet Specifies the Tag list associated with the elastic IP.
     * @param string $DeadlineDate Prepaid monthly subscription bandwidth IP expiration time.
Specifies the time format in YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceType Instance type to which the EIP is bound. valid values:.
<Li>CVM: indicates cloud virtual machine.</li>.
<li>Specifies the NAT gateway.</li>.
<Li>HAVIP: high availability virtual ip.</li>.
<Li>ENI: specifies the elastic network interface.</li>.
<Li>CLB: specifies a private network clb.</li>.
<Li>DHCPIP: elastic private ip address</li>.


Note: This field may return null, indicating that no valid value was found.
     * @param string $Egress Static single-line IP network egress
Note: This field may return null, indicating that no valid value was found.
     * @param string $AntiDDoSPackageId ID of the Anti-DDoS service package. It is returned if the EIP is an Anti-DDoS EIP. 
     * @param string $RenewFlag Indicates whether the current EIP is auto-renewed. This field is displayed only for EIPs with monthly prepaid bandwidth. Valid values are as follows:
<li>NOTIFY_AND_MANUAL_RENEW: Normal renewal</li><li>NOTIFY_AND_AUTO_RENEW: Automatic renewal</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: No renewal upon expiration</li>

     * @param string $BandwidthPackageId Indicates the ID of the Bandwidth Package associated with the current public IP. If the public IP is not billed by Bandwidth Package, this field is empty.
Note: This field may return null, indicating that no valid value was found.
     * @param string $UnVpcId Specifies the unique ID of the vpc to which the traditional elastic IPv6 belongs.
     * @param string $DedicatedClusterId Specifies the unique ID of the CDC.
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
