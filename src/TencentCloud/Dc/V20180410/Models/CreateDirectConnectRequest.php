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
 * CreateDirectConnect request structure.
 *
 * @method string getDirectConnectName() Obtain Connection name.
 * @method void setDirectConnectName(string $DirectConnectName) Set Connection name.
 * @method string getAccessPointId() Obtain Access point of connection.
You can call `DescribeAccessPoints` to get the region ID. The selected access point must exist and be available.
 * @method void setAccessPointId(string $AccessPointId) Set Access point of connection.
You can call `DescribeAccessPoints` to get the region ID. The selected access point must exist and be available.
 * @method string getLineOperator() Obtain ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
 * @method void setLineOperator(string $LineOperator) Set ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
 * @method string getPortType() Obtain Port type of connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface), 1000Base-LX (1-Gigabit single-module optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-module optical Ethernet interface; 10 KM). Default value: 1000Base-LX.
 * @method void setPortType(string $PortType) Set Port type of connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface), 1000Base-LX (1-Gigabit single-module optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-module optical Ethernet interface; 10 KM). Default value: 1000Base-LX.
 * @method string getCircuitCode() Obtain Circuit code of a connection, which is provided by the ISP or connection provider.
 * @method void setCircuitCode(string $CircuitCode) Set Circuit code of a connection, which is provided by the ISP or connection provider.
 * @method string getLocation() Obtain Local IDC location.
 * @method void setLocation(string $Location) Set Local IDC location.
 * @method integer getBandwidth() Obtain Connection port bandwidth in Mbps. Value range: [2,10240]. Default value: 1000.
 * @method void setBandwidth(integer $Bandwidth) Set Connection port bandwidth in Mbps. Value range: [2,10240]. Default value: 1000.
 * @method string getRedundantDirectConnectId() Obtain ID of redundant connection.
 * @method void setRedundantDirectConnectId(string $RedundantDirectConnectId) Set ID of redundant connection.
 * @method integer getVlan() Obtain VLAN for connection debugging, which is enabled and automatically assigned by default.
 * @method void setVlan(integer $Vlan) Set VLAN for connection debugging, which is enabled and automatically assigned by default.
 * @method string getTencentAddress() Obtain Tencent-side IP address for connection debugging, which is automatically assigned by default.
 * @method void setTencentAddress(string $TencentAddress) Set Tencent-side IP address for connection debugging, which is automatically assigned by default.
 * @method string getCustomerAddress() Obtain User-side IP address for connection debugging, which is automatically assigned by default.
 * @method void setCustomerAddress(string $CustomerAddress) Set User-side IP address for connection debugging, which is automatically assigned by default.
 * @method string getCustomerName() Obtain Name of connection applicant, which is obtained from the account system by default.
 * @method void setCustomerName(string $CustomerName) Set Name of connection applicant, which is obtained from the account system by default.
 * @method string getCustomerContactMail() Obtain Email address of connection applicant, which is obtained from the account system by default.
 * @method void setCustomerContactMail(string $CustomerContactMail) Set Email address of connection applicant, which is obtained from the account system by default.
 * @method string getCustomerContactNumber() Obtain Contact number of connection applicant, which is obtained from the account system by default.
 * @method void setCustomerContactNumber(string $CustomerContactNumber) Set Contact number of connection applicant, which is obtained from the account system by default.
 * @method string getFaultReportContactPerson() Obtain Fault reporting contact person.
 * @method void setFaultReportContactPerson(string $FaultReportContactPerson) Set Fault reporting contact person.
 * @method string getFaultReportContactNumber() Obtain Fault reporting contact number.
 * @method void setFaultReportContactNumber(string $FaultReportContactNumber) Set Fault reporting contact number.
 * @method boolean getSignLaw() Obtain Whether the connection applicant has signed the service agreement. Default value: true.
 * @method void setSignLaw(boolean $SignLaw) Set Whether the connection applicant has signed the service agreement. Default value: true.
 */
class CreateDirectConnectRequest extends AbstractModel
{
    /**
     * @var string Connection name.
     */
    public $DirectConnectName;

    /**
     * @var string Access point of connection.
You can call `DescribeAccessPoints` to get the region ID. The selected access point must exist and be available.
     */
    public $AccessPointId;

    /**
     * @var string ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
     */
    public $LineOperator;

    /**
     * @var string Port type of connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface), 1000Base-LX (1-Gigabit single-module optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-module optical Ethernet interface; 10 KM). Default value: 1000Base-LX.
     */
    public $PortType;

    /**
     * @var string Circuit code of a connection, which is provided by the ISP or connection provider.
     */
    public $CircuitCode;

    /**
     * @var string Local IDC location.
     */
    public $Location;

    /**
     * @var integer Connection port bandwidth in Mbps. Value range: [2,10240]. Default value: 1000.
     */
    public $Bandwidth;

    /**
     * @var string ID of redundant connection.
     */
    public $RedundantDirectConnectId;

    /**
     * @var integer VLAN for connection debugging, which is enabled and automatically assigned by default.
     */
    public $Vlan;

    /**
     * @var string Tencent-side IP address for connection debugging, which is automatically assigned by default.
     */
    public $TencentAddress;

    /**
     * @var string User-side IP address for connection debugging, which is automatically assigned by default.
     */
    public $CustomerAddress;

    /**
     * @var string Name of connection applicant, which is obtained from the account system by default.
     */
    public $CustomerName;

    /**
     * @var string Email address of connection applicant, which is obtained from the account system by default.
     */
    public $CustomerContactMail;

    /**
     * @var string Contact number of connection applicant, which is obtained from the account system by default.
     */
    public $CustomerContactNumber;

    /**
     * @var string Fault reporting contact person.
     */
    public $FaultReportContactPerson;

    /**
     * @var string Fault reporting contact number.
     */
    public $FaultReportContactNumber;

    /**
     * @var boolean Whether the connection applicant has signed the service agreement. Default value: true.
     */
    public $SignLaw;

    /**
     * @param string $DirectConnectName Connection name.
     * @param string $AccessPointId Access point of connection.
You can call `DescribeAccessPoints` to get the region ID. The selected access point must exist and be available.
     * @param string $LineOperator ISP that provides connections. Valid values: ChinaTelecom (China Telecom), ChinaMobile (China Mobile), ChinaUnicom (China Unicom), In-houseWiring (in-house wiring), ChinaOther (other Chinese ISPs), InternationalOperator (international ISPs).
     * @param string $PortType Port type of connection. Valid values: 100Base-T (100-Megabit electrical Ethernet interface), 1000Base-T (1-Gigabit electrical Ethernet interface), 1000Base-LX (1-Gigabit single-module optical Ethernet interface; 10 KM), 10GBase-T (10-Gigabit electrical Ethernet interface), 10GBase-LR (10-Gigabit single-module optical Ethernet interface; 10 KM). Default value: 1000Base-LX.
     * @param string $CircuitCode Circuit code of a connection, which is provided by the ISP or connection provider.
     * @param string $Location Local IDC location.
     * @param integer $Bandwidth Connection port bandwidth in Mbps. Value range: [2,10240]. Default value: 1000.
     * @param string $RedundantDirectConnectId ID of redundant connection.
     * @param integer $Vlan VLAN for connection debugging, which is enabled and automatically assigned by default.
     * @param string $TencentAddress Tencent-side IP address for connection debugging, which is automatically assigned by default.
     * @param string $CustomerAddress User-side IP address for connection debugging, which is automatically assigned by default.
     * @param string $CustomerName Name of connection applicant, which is obtained from the account system by default.
     * @param string $CustomerContactMail Email address of connection applicant, which is obtained from the account system by default.
     * @param string $CustomerContactNumber Contact number of connection applicant, which is obtained from the account system by default.
     * @param string $FaultReportContactPerson Fault reporting contact person.
     * @param string $FaultReportContactNumber Fault reporting contact number.
     * @param boolean $SignLaw Whether the connection applicant has signed the service agreement. Default value: true.
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
        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
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

        if (array_key_exists("FaultReportContactPerson",$param) and $param["FaultReportContactPerson"] !== null) {
            $this->FaultReportContactPerson = $param["FaultReportContactPerson"];
        }

        if (array_key_exists("FaultReportContactNumber",$param) and $param["FaultReportContactNumber"] !== null) {
            $this->FaultReportContactNumber = $param["FaultReportContactNumber"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }
    }
}
