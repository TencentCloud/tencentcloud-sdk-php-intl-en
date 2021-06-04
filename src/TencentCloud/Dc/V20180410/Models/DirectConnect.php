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
 * Connection information list.
 *
 * @method string getDirectConnectId() Obtain Connection ID.
 * @method void setDirectConnectId(string $DirectConnectId) Set Connection ID.
 * @method string getDirectConnectName() Obtain Connection name.
 * @method void setDirectConnectName(string $DirectConnectName) Set Connection name.
 * @method string getAccessPointId() Obtain Access point ID of a connection.
 * @method void setAccessPointId(string $AccessPointId) Set Access point ID of a connection.
 * @method string getState() Obtain Connection status.
PENDING: Applying. 
REJECTED: Application rejected.   
TOPAY: Payment pending. 
PAID: Paid. 
ALLOCATED: Constructing.   
AVAILABLE: Available.  
DELETING: Deleting.
DELETED: Deleted.
 * @method void setState(string $State) Set Connection status.
PENDING: Applying. 
REJECTED: Application rejected.   
TOPAY: Payment pending. 
PAID: Paid. 
ALLOCATED: Constructing.   
AVAILABLE: Available.  
DELETING: Deleting.
DELETED: Deleted.
 * @method string getCreatedTime() Obtain Connection creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Connection creation time.
 * @method string getEnabledTime() Obtain Connection activation time.
 * @method void setEnabledTime(string $EnabledTime) Set Connection activation time.
 * @method string getLineOperator() Obtain ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
 * @method void setLineOperator(string $LineOperator) Set ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
 * @method string getLocation() Obtain Location of a local IDC.
 * @method void setLocation(string $Location) Set Location of a local IDC.
 * @method integer getBandwidth() Obtain Connection port bandwidth in Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Connection port bandwidth in Mbps.
 * @method string getPortType() Obtain User-side port type of a connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface; it is the default value), 1000Base-LX (1-Gigabit single-mode optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-mode optical Ethernet interface; 10 KM).
 * @method void setPortType(string $PortType) Set User-side port type of a connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface; it is the default value), 1000Base-LX (1-Gigabit single-mode optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-mode optical Ethernet interface; 10 KM).
 * @method string getCircuitCode() Obtain Circuit code of a connection, which is provided by the ISP or service provider.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCircuitCode(string $CircuitCode) Set Circuit code of a connection, which is provided by the ISP or service provider.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRedundantDirectConnectId() Obtain ID of a redundant connection.
 * @method void setRedundantDirectConnectId(string $RedundantDirectConnectId) Set ID of a redundant connection.
 * @method integer getVlan() Obtain VLAN for connection debugging, which is enabled and automatically assigned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVlan(integer $Vlan) Set VLAN for connection debugging, which is enabled and automatically assigned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTencentAddress() Obtain Tencent-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTencentAddress(string $TencentAddress) Set Tencent-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCustomerAddress() Obtain User-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerAddress(string $CustomerAddress) Set User-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCustomerName() Obtain Name of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerName(string $CustomerName) Set Name of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCustomerContactMail() Obtain Email address of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerContactMail(string $CustomerContactMail) Set Email address of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCustomerContactNumber() Obtain Contact number of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerContactNumber(string $CustomerContactNumber) Set Contact number of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpiredTime() Obtain Connection expiration time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set Connection expiration time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Connection billing mode. NON_RECURRING_CHARGE: One-time charge for accessing service
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Connection billing mode. NON_RECURRING_CHARGE: One-time charge for accessing service
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFaultReportContactPerson() Obtain Fault reporting contact person.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaultReportContactPerson(string $FaultReportContactPerson) Set Fault reporting contact person.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFaultReportContactNumber() Obtain Fault reporting contact number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaultReportContactNumber(string $FaultReportContactNumber) Set Fault reporting contact number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagSet() Obtain Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAccessPointType() Obtain Access point type of a connection.
 * @method void setAccessPointType(string $AccessPointType) Set Access point type of a connection.
 * @method string getIdcCity() Obtain IDC city.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIdcCity(string $IdcCity) Set IDC city.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getChargeState() Obtain Billing status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChargeState(string $ChargeState) Set Billing status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Connection activation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Connection activation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getSignLaw() Obtain Whether the connection has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setSignLaw(boolean $SignLaw) Set Whether the connection has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method boolean getLocalZone() Obtain Whether the connection is an edge zone.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLocalZone(boolean $LocalZone) Set Whether the connection is an edge zone.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getVlanZeroDirectConnectTunnelCount() Obtain Number of dedicated tunnels with disabled VLAN in the connection
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setVlanZeroDirectConnectTunnelCount(integer $VlanZeroDirectConnectTunnelCount) Set Number of dedicated tunnels with disabled VLAN in the connection
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getOtherVlanDirectConnectTunnelCount() Obtain Number of dedicated tunnels with enabled VLAN in the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOtherVlanDirectConnectTunnelCount(integer $OtherVlanDirectConnectTunnelCount) Set Number of dedicated tunnels with enabled VLAN in the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMinBandwidth() Obtain Minimum bandwidth of the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMinBandwidth(integer $MinBandwidth) Set Minimum bandwidth of the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DirectConnect extends AbstractModel
{
    /**
     * @var string Connection ID.
     */
    public $DirectConnectId;

    /**
     * @var string Connection name.
     */
    public $DirectConnectName;

    /**
     * @var string Access point ID of a connection.
     */
    public $AccessPointId;

    /**
     * @var string Connection status.
PENDING: Applying. 
REJECTED: Application rejected.   
TOPAY: Payment pending. 
PAID: Paid. 
ALLOCATED: Constructing.   
AVAILABLE: Available.  
DELETING: Deleting.
DELETED: Deleted.
     */
    public $State;

    /**
     * @var string Connection creation time.
     */
    public $CreatedTime;

    /**
     * @var string Connection activation time.
     */
    public $EnabledTime;

    /**
     * @var string ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
     */
    public $LineOperator;

    /**
     * @var string Location of a local IDC.
     */
    public $Location;

    /**
     * @var integer Connection port bandwidth in Mbps.
     */
    public $Bandwidth;

    /**
     * @var string User-side port type of a connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface; it is the default value), 1000Base-LX (1-Gigabit single-mode optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-mode optical Ethernet interface; 10 KM).
     */
    public $PortType;

    /**
     * @var string Circuit code of a connection, which is provided by the ISP or service provider.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CircuitCode;

    /**
     * @var string ID of a redundant connection.
     */
    public $RedundantDirectConnectId;

    /**
     * @var integer VLAN for connection debugging, which is enabled and automatically assigned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Vlan;

    /**
     * @var string Tencent-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TencentAddress;

    /**
     * @var string User-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerAddress;

    /**
     * @var string Name of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerName;

    /**
     * @var string Email address of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerContactMail;

    /**
     * @var string Contact number of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerContactNumber;

    /**
     * @var string Connection expiration time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiredTime;

    /**
     * @var string Connection billing mode. NON_RECURRING_CHARGE: One-time charge for accessing service
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Fault reporting contact person.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaultReportContactPerson;

    /**
     * @var string Fault reporting contact number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaultReportContactNumber;

    /**
     * @var array Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Access point type of a connection.
     */
    public $AccessPointType;

    /**
     * @var string IDC city.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IdcCity;

    /**
     * @var string Billing status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeState;

    /**
     * @var string Connection activation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var boolean Whether the connection has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $SignLaw;

    /**
     * @var boolean Whether the connection is an edge zone.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LocalZone;

    /**
     * @var integer Number of dedicated tunnels with disabled VLAN in the connection
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $VlanZeroDirectConnectTunnelCount;

    /**
     * @var integer Number of dedicated tunnels with enabled VLAN in the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OtherVlanDirectConnectTunnelCount;

    /**
     * @var integer Minimum bandwidth of the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MinBandwidth;

    /**
     * @param string $DirectConnectId Connection ID.
     * @param string $DirectConnectName Connection name.
     * @param string $AccessPointId Access point ID of a connection.
     * @param string $State Connection status.
PENDING: Applying. 
REJECTED: Application rejected.   
TOPAY: Payment pending. 
PAID: Paid. 
ALLOCATED: Constructing.   
AVAILABLE: Available.  
DELETING: Deleting.
DELETED: Deleted.
     * @param string $CreatedTime Connection creation time.
     * @param string $EnabledTime Connection activation time.
     * @param string $LineOperator ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
     * @param string $Location Location of a local IDC.
     * @param integer $Bandwidth Connection port bandwidth in Mbps.
     * @param string $PortType User-side port type of a connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface; it is the default value), 1000Base-LX (1-Gigabit single-mode optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-mode optical Ethernet interface; 10 KM).
     * @param string $CircuitCode Circuit code of a connection, which is provided by the ISP or service provider.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RedundantDirectConnectId ID of a redundant connection.
     * @param integer $Vlan VLAN for connection debugging, which is enabled and automatically assigned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TencentAddress Tencent-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CustomerAddress User-side IP address for connection debugging.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CustomerName Name of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CustomerContactMail Email address of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CustomerContactNumber Contact number of the connection applicant, which is obtained from the account system by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpiredTime Connection expiration time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Connection billing mode. NON_RECURRING_CHARGE: One-time charge for accessing service
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FaultReportContactPerson Fault reporting contact person.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FaultReportContactNumber Fault reporting contact number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagSet Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AccessPointType Access point type of a connection.
     * @param string $IdcCity IDC city.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeState Billing status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Connection activation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $SignLaw Whether the connection has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param boolean $LocalZone Whether the connection is an edge zone.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $VlanZeroDirectConnectTunnelCount Number of dedicated tunnels with disabled VLAN in the connection
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $OtherVlanDirectConnectTunnelCount Number of dedicated tunnels with enabled VLAN in the connection
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MinBandwidth Minimum bandwidth of the connection
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EnabledTime",$param) and $param["EnabledTime"] !== null) {
            $this->EnabledTime = $param["EnabledTime"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
        }

        if (array_key_exists("RedundantDirectConnectId",$param) and $param["RedundantDirectConnectId"] !== null) {
            $this->RedundantDirectConnectId = $param["RedundantDirectConnectId"];
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("CustomerContactMail",$param) and $param["CustomerContactMail"] !== null) {
            $this->CustomerContactMail = $param["CustomerContactMail"];
        }

        if (array_key_exists("CustomerContactNumber",$param) and $param["CustomerContactNumber"] !== null) {
            $this->CustomerContactNumber = $param["CustomerContactNumber"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("FaultReportContactPerson",$param) and $param["FaultReportContactPerson"] !== null) {
            $this->FaultReportContactPerson = $param["FaultReportContactPerson"];
        }

        if (array_key_exists("FaultReportContactNumber",$param) and $param["FaultReportContactNumber"] !== null) {
            $this->FaultReportContactNumber = $param["FaultReportContactNumber"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AccessPointType",$param) and $param["AccessPointType"] !== null) {
            $this->AccessPointType = $param["AccessPointType"];
        }

        if (array_key_exists("IdcCity",$param) and $param["IdcCity"] !== null) {
            $this->IdcCity = $param["IdcCity"];
        }

        if (array_key_exists("ChargeState",$param) and $param["ChargeState"] !== null) {
            $this->ChargeState = $param["ChargeState"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("VlanZeroDirectConnectTunnelCount",$param) and $param["VlanZeroDirectConnectTunnelCount"] !== null) {
            $this->VlanZeroDirectConnectTunnelCount = $param["VlanZeroDirectConnectTunnelCount"];
        }

        if (array_key_exists("OtherVlanDirectConnectTunnelCount",$param) and $param["OtherVlanDirectConnectTunnelCount"] !== null) {
            $this->OtherVlanDirectConnectTunnelCount = $param["OtherVlanDirectConnectTunnelCount"];
        }

        if (array_key_exists("MinBandwidth",$param) and $param["MinBandwidth"] !== null) {
            $this->MinBandwidth = $param["MinBandwidth"];
        }
    }
}
