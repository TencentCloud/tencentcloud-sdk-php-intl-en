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
 * ModifyDirectConnectAttribute request structure.
 *
 * @method string getDirectConnectId() Obtain Connection ID.
 * @method void setDirectConnectId(string $DirectConnectId) Set Connection ID.
 * @method string getDirectConnectName() Obtain Connection name.
 * @method void setDirectConnectName(string $DirectConnectName) Set Connection name.
 * @method string getCircuitCode() Obtain Circuit code of a connection, which is provided by the ISP or connection provider.
 * @method void setCircuitCode(string $CircuitCode) Set Circuit code of a connection, which is provided by the ISP or connection provider.
 * @method integer getVlan() Obtain VLAN for connection debugging.
 * @method void setVlan(integer $Vlan) Set VLAN for connection debugging.
 * @method string getTencentAddress() Obtain Tencent-side IP address for connection debugging.
 * @method void setTencentAddress(string $TencentAddress) Set Tencent-side IP address for connection debugging.
 * @method string getCustomerAddress() Obtain User-side IP address for connection debugging.
 * @method void setCustomerAddress(string $CustomerAddress) Set User-side IP address for connection debugging.
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
 * @method boolean getSignLaw() Obtain Whether the connection applicant has signed the service agreement.
 * @method void setSignLaw(boolean $SignLaw) Set Whether the connection applicant has signed the service agreement.
 * @method integer getBandwidth() Obtain Connection’s bandwidth
 * @method void setBandwidth(integer $Bandwidth) Set Connection’s bandwidth
 */
class ModifyDirectConnectAttributeRequest extends AbstractModel
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
     * @var string Circuit code of a connection, which is provided by the ISP or connection provider.
     */
    public $CircuitCode;

    /**
     * @var integer VLAN for connection debugging.
     */
    public $Vlan;

    /**
     * @var string Tencent-side IP address for connection debugging.
     */
    public $TencentAddress;

    /**
     * @var string User-side IP address for connection debugging.
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
     * @var boolean Whether the connection applicant has signed the service agreement.
     */
    public $SignLaw;

    /**
     * @var integer Connection’s bandwidth
     */
    public $Bandwidth;

    /**
     * @param string $DirectConnectId Connection ID.
     * @param string $DirectConnectName Connection name.
     * @param string $CircuitCode Circuit code of a connection, which is provided by the ISP or connection provider.
     * @param integer $Vlan VLAN for connection debugging.
     * @param string $TencentAddress Tencent-side IP address for connection debugging.
     * @param string $CustomerAddress User-side IP address for connection debugging.
     * @param string $CustomerName Name of connection applicant, which is obtained from the account system by default.
     * @param string $CustomerContactMail Email address of connection applicant, which is obtained from the account system by default.
     * @param string $CustomerContactNumber Contact number of connection applicant, which is obtained from the account system by default.
     * @param string $FaultReportContactPerson Fault reporting contact person.
     * @param string $FaultReportContactNumber Fault reporting contact number.
     * @param boolean $SignLaw Whether the connection applicant has signed the service agreement.
     * @param integer $Bandwidth Connection’s bandwidth
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

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
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

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
