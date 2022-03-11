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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EIP information
 *
 * @method string getAddressId() Obtain Unique EIP ID.
 * @method void setAddressId(string $AddressId) Set Unique EIP ID.
 * @method string getAddressName() Obtain EIP name.
 * @method void setAddressName(string $AddressName) Set EIP name.
 * @method string getAddressStatus() Obtain EIP status, including 'CREATING' (creating), 'BINDING' (binding), 'BIND' (bound), 'UNBINDING' (unbinding), 'UNBIND' (unbound), 'OFFLINING' (releasing), and 'BIND_ENI' (binding dangling ENI)
 * @method void setAddressStatus(string $AddressStatus) Set EIP status, including 'CREATING' (creating), 'BINDING' (binding), 'BIND' (bound), 'UNBINDING' (unbinding), 'UNBIND' (unbound), 'OFFLINING' (releasing), and 'BIND_ENI' (binding dangling ENI)
 * @method string getAddressIp() Obtain Public IP address
 * @method void setAddressIp(string $AddressIp) Set Public IP address
 * @method string getInstanceId() Obtain ID of the bound resource instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set ID of the bound resource instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in ISO 8601 format (YYYY-MM-DDTHH:mm:ss.sssZ)
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in ISO 8601 format (YYYY-MM-DDTHH:mm:ss.sssZ)
 * @method string getNetworkInterfaceId() Obtain ID of the bound ENI
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ID of the bound ENI
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateAddressIp() Obtain Private IP of the bound resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateAddressIp(string $PrivateAddressIp) Set Private IP of the bound resource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsArrears() Obtain Isolation status of the resource. true: isolated; false: not isolated.
 * @method void setIsArrears(boolean $IsArrears) Set Isolation status of the resource. true: isolated; false: not isolated.
 * @method boolean getIsBlocked() Obtain Blockage status of the EIP resource. true: blocked; false: not blocked
 * @method void setIsBlocked(boolean $IsBlocked) Set Blockage status of the EIP resource. true: blocked; false: not blocked
 * @method boolean getIsEipDirectConnection() Obtain Whether the EIP supports direct access mode. true: yes; false: no.
 * @method void setIsEipDirectConnection(boolean $IsEipDirectConnection) Set Whether the EIP supports direct access mode. true: yes; false: no.
 * @method string getAddressType() Obtain Resource type of the EIP, including `CalcIP` (device IP), `WanIP` (general public IP), `EIP` (elastic IP), and `AnycastEip` (accelerated EIP).
 * @method void setAddressType(string $AddressType) Set Resource type of the EIP, including `CalcIP` (device IP), `WanIP` (general public IP), `EIP` (elastic IP), and `AnycastEip` (accelerated EIP).
 * @method boolean getCascadeRelease() Obtain Whether the EIP is automatically released after being unbound. true: yes; false: no
 * @method void setCascadeRelease(boolean $CascadeRelease) Set Whether the EIP is automatically released after being unbound. true: yes; false: no
 * @method string getInternetServiceProvider() Obtain ISP. CTCC: China Telecom; CUCC: China Unicom; CMCC: China Mobile
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set ISP. CTCC: China Telecom; CUCC: China Unicom; CMCC: China Mobile
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidth() Obtain Bandwidth cap
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth cap
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Address extends AbstractModel
{
    /**
     * @var string Unique EIP ID.
     */
    public $AddressId;

    /**
     * @var string EIP name.
     */
    public $AddressName;

    /**
     * @var string EIP status, including 'CREATING' (creating), 'BINDING' (binding), 'BIND' (bound), 'UNBINDING' (unbinding), 'UNBIND' (unbound), 'OFFLINING' (releasing), and 'BIND_ENI' (binding dangling ENI)
     */
    public $AddressStatus;

    /**
     * @var string Public IP address
     */
    public $AddressIp;

    /**
     * @var string ID of the bound resource instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Creation time in ISO 8601 format (YYYY-MM-DDTHH:mm:ss.sssZ)
     */
    public $CreatedTime;

    /**
     * @var string ID of the bound ENI
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkInterfaceId;

    /**
     * @var string Private IP of the bound resource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateAddressIp;

    /**
     * @var boolean Isolation status of the resource. true: isolated; false: not isolated.
     */
    public $IsArrears;

    /**
     * @var boolean Blockage status of the EIP resource. true: blocked; false: not blocked
     */
    public $IsBlocked;

    /**
     * @var boolean Whether the EIP supports direct access mode. true: yes; false: no.
     */
    public $IsEipDirectConnection;

    /**
     * @var string Resource type of the EIP, including `CalcIP` (device IP), `WanIP` (general public IP), `EIP` (elastic IP), and `AnycastEip` (accelerated EIP).
     */
    public $AddressType;

    /**
     * @var boolean Whether the EIP is automatically released after being unbound. true: yes; false: no
     */
    public $CascadeRelease;

    /**
     * @var string ISP. CTCC: China Telecom; CUCC: China Unicom; CMCC: China Mobile
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InternetServiceProvider;

    /**
     * @var integer Bandwidth cap
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bandwidth;

    /**
     * @var string Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @param string $AddressId Unique EIP ID.
     * @param string $AddressName EIP name.
     * @param string $AddressStatus EIP status, including 'CREATING' (creating), 'BINDING' (binding), 'BIND' (bound), 'UNBINDING' (unbinding), 'UNBIND' (unbound), 'OFFLINING' (releasing), and 'BIND_ENI' (binding dangling ENI)
     * @param string $AddressIp Public IP address
     * @param string $InstanceId ID of the bound resource instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in ISO 8601 format (YYYY-MM-DDTHH:mm:ss.sssZ)
     * @param string $NetworkInterfaceId ID of the bound ENI
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateAddressIp Private IP of the bound resource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsArrears Isolation status of the resource. true: isolated; false: not isolated.
     * @param boolean $IsBlocked Blockage status of the EIP resource. true: blocked; false: not blocked
     * @param boolean $IsEipDirectConnection Whether the EIP supports direct access mode. true: yes; false: no.
     * @param string $AddressType Resource type of the EIP, including `CalcIP` (device IP), `WanIP` (general public IP), `EIP` (elastic IP), and `AnycastEip` (accelerated EIP).
     * @param boolean $CascadeRelease Whether the EIP is automatically released after being unbound. true: yes; false: no
     * @param string $InternetServiceProvider ISP. CTCC: China Telecom; CUCC: China Unicom; CMCC: China Mobile
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bandwidth Bandwidth cap
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
