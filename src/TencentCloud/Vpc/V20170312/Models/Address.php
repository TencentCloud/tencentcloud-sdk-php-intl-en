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
 * @method string getAddressType() Obtain The resource type of the EIP. This includes `CalcIP`, `WanIP`, `EIP`, and `AnycastEIP`. Among these, `CalcIP` indicates the device IP, `WanIP` indicates the common public IP, `EIP` indicates Elastic IP, and `AnycastEip` indicates accelerated EIP.
 * @method void setAddressType(string $AddressType) Set The resource type of the EIP. This includes `CalcIP`, `WanIP`, `EIP`, and `AnycastEIP`. Among these, `CalcIP` indicates the device IP, `WanIP` indicates the common public IP, `EIP` indicates Elastic IP, and `AnycastEip` indicates accelerated EIP.
 * @method boolean getCascadeRelease() Obtain Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
 * @method void setCascadeRelease(boolean $CascadeRelease) Set Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
 * @method AlgType getEipAlgType() Obtain Type of the protocol used in EIP ALG
 * @method void setEipAlgType(AlgType $EipAlgType) Set Type of the protocol used in EIP ALG
 * @method string getInternetServiceProvider() Obtain The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
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
     * @var string The resource type of the EIP. This includes `CalcIP`, `WanIP`, `EIP`, and `AnycastEIP`. Among these, `CalcIP` indicates the device IP, `WanIP` indicates the common public IP, `EIP` indicates Elastic IP, and `AnycastEip` indicates accelerated EIP.
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
     * @param string $AddressType The resource type of the EIP. This includes `CalcIP`, `WanIP`, `EIP`, and `AnycastEIP`. Among these, `CalcIP` indicates the device IP, `WanIP` indicates the common public IP, `EIP` indicates Elastic IP, and `AnycastEip` indicates accelerated EIP.
     * @param boolean $CascadeRelease Whether the EIP is automatically released after being unbound. `True` indicates the EIP will be automatically released after being unbound. `False` indicates the EIP will not be automatically released after being unbound.
     * @param AlgType $EipAlgType Type of the protocol used in EIP ALG
     * @param string $InternetServiceProvider The ISP of an EIP/Elastic IP, with possible return values currently including "CMCC", "CTCC", "CUCC" and "BGP"
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
    }
}
