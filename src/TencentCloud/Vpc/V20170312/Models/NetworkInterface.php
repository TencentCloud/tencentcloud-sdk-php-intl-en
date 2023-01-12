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
 * ENI
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-f1xjkw1b`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-f1xjkw1b`.
 * @method string getNetworkInterfaceName() Obtain ENI Name
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set ENI Name
 * @method string getNetworkInterfaceDescription() Obtain ENI description.
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) Set ENI description.
 * @method string getSubnetId() Obtain Subnet instance ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method array getGroupSet() Obtain Bound security group.
 * @method void setGroupSet(array $GroupSet) Set Bound security group.
 * @method boolean getPrimary() Obtain Whether it is the primary ENI.
 * @method void setPrimary(boolean $Primary) Set Whether it is the primary ENI.
 * @method string getMacAddress() Obtain MAC address
 * @method void setMacAddress(string $MacAddress) Set MAC address
 * @method string getState() Obtain ENI status:
<li>`PENDING`: Creating</li>
<li>`AVAILABLE`: Available</li>
<li>`ATTACHING`: Binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DELETING`: Deleting</li>
 * @method void setState(string $State) Set ENI status:
<li>`PENDING`: Creating</li>
<li>`AVAILABLE`: Available</li>
<li>`ATTACHING`: Binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DELETING`: Deleting</li>
 * @method array getPrivateIpAddressSet() Obtain Private IP information.
 * @method void setPrivateIpAddressSet(array $PrivateIpAddressSet) Set Private IP information.
 * @method NetworkInterfaceAttachment getAttachment() Obtain Bound CVM object.
Note: This field may return null, indicating no valid value.
 * @method void setAttachment(NetworkInterfaceAttachment $Attachment) Set Bound CVM object.
Note: This field may return null, indicating no valid value.
 * @method string getZone() Obtain Availability Zone.
 * @method void setZone(string $Zone) Set Availability Zone.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getIpv6AddressSet() Obtain The `IPv6` address list.
 * @method void setIpv6AddressSet(array $Ipv6AddressSet) Set The `IPv6` address list.
 * @method array getTagSet() Obtain Tag key-value pair.
 * @method void setTagSet(array $TagSet) Set Tag key-value pair.
 * @method integer getEniType() Obtain The ENI type. 0: ENI. 1: EVM ENI.
 * @method void setEniType(integer $EniType) Set The ENI type. 0: ENI. 1: EVM ENI.
 * @method string getBusiness() Obtain Type of the resource bound with an ENI. Valid values: cvm, eks.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBusiness(string $Business) Set Type of the resource bound with an ENI. Valid values: cvm, eks.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCdcId() Obtain ID of the CDC instance associated with the ENI
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCdcId(string $CdcId) Set ID of the CDC instance associated with the ENI
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAttachType() Obtain ENI type. Valid values: `0` (standard); `1` (extension). Default value: `0`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAttachType(integer $AttachType) Set ENI type. Valid values: `0` (standard); `1` (extension). Default value: `0`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getResourceId() Obtain The ID of resource to retain the ENI primary IP. It’s used as the request parameters for deleting an ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set The ID of resource to retain the ENI primary IP. It’s used as the request parameters for deleting an ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getQosLevel() Obtain Service level
<li>`DEFAULT`: Default level</lil>
<li>`PT`: Gold</li>
<li>`AU`: Silver</li>
<li>`AG`: Bronze</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQosLevel(string $QosLevel) Set Service level
<li>`DEFAULT`: Default level</lil>
<li>`PT`: Gold</li>
<li>`AU`: Silver</li>
<li>`AG`: Bronze</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class NetworkInterface extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-f1xjkw1b`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string ENI Name
     */
    public $NetworkInterfaceName;

    /**
     * @var string ENI description.
     */
    public $NetworkInterfaceDescription;

    /**
     * @var string Subnet instance ID.
     */
    public $SubnetId;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var array Bound security group.
     */
    public $GroupSet;

    /**
     * @var boolean Whether it is the primary ENI.
     */
    public $Primary;

    /**
     * @var string MAC address
     */
    public $MacAddress;

    /**
     * @var string ENI status:
<li>`PENDING`: Creating</li>
<li>`AVAILABLE`: Available</li>
<li>`ATTACHING`: Binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DELETING`: Deleting</li>
     */
    public $State;

    /**
     * @var array Private IP information.
     */
    public $PrivateIpAddressSet;

    /**
     * @var NetworkInterfaceAttachment Bound CVM object.
Note: This field may return null, indicating no valid value.
     */
    public $Attachment;

    /**
     * @var string Availability Zone.
     */
    public $Zone;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array The `IPv6` address list.
     */
    public $Ipv6AddressSet;

    /**
     * @var array Tag key-value pair.
     */
    public $TagSet;

    /**
     * @var integer The ENI type. 0: ENI. 1: EVM ENI.
     */
    public $EniType;

    /**
     * @var string Type of the resource bound with an ENI. Valid values: cvm, eks.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @var string ID of the CDC instance associated with the ENI
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CdcId;

    /**
     * @var integer ENI type. Valid values: `0` (standard); `1` (extension). Default value: `0`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AttachType;

    /**
     * @var string The ID of resource to retain the ENI primary IP. It’s used as the request parameters for deleting an ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Service level
<li>`DEFAULT`: Default level</lil>
<li>`PT`: Gold</li>
<li>`AU`: Silver</li>
<li>`AG`: Bronze</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QosLevel;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-f1xjkw1b`.
     * @param string $NetworkInterfaceName ENI Name
     * @param string $NetworkInterfaceDescription ENI description.
     * @param string $SubnetId Subnet instance ID.
     * @param string $VpcId VPC instance ID.
     * @param array $GroupSet Bound security group.
     * @param boolean $Primary Whether it is the primary ENI.
     * @param string $MacAddress MAC address
     * @param string $State ENI status:
<li>`PENDING`: Creating</li>
<li>`AVAILABLE`: Available</li>
<li>`ATTACHING`: Binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DELETING`: Deleting</li>
     * @param array $PrivateIpAddressSet Private IP information.
     * @param NetworkInterfaceAttachment $Attachment Bound CVM object.
Note: This field may return null, indicating no valid value.
     * @param string $Zone Availability Zone.
     * @param string $CreatedTime Creation Time.
     * @param array $Ipv6AddressSet The `IPv6` address list.
     * @param array $TagSet Tag key-value pair.
     * @param integer $EniType The ENI type. 0: ENI. 1: EVM ENI.
     * @param string $Business Type of the resource bound with an ENI. Valid values: cvm, eks.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CdcId ID of the CDC instance associated with the ENI
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AttachType ENI type. Valid values: `0` (standard); `1` (extension). Default value: `0`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ResourceId The ID of resource to retain the ENI primary IP. It’s used as the request parameters for deleting an ENI.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $QosLevel Service level
<li>`DEFAULT`: Default level</lil>
<li>`PT`: Gold</li>
<li>`AU`: Silver</li>
<li>`AG`: Bronze</li>
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = $param["GroupSet"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PrivateIpAddressSet",$param) and $param["PrivateIpAddressSet"] !== null) {
            $this->PrivateIpAddressSet = [];
            foreach ($param["PrivateIpAddressSet"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddressSet, $obj);
            }
        }

        if (array_key_exists("Attachment",$param) and $param["Attachment"] !== null) {
            $this->Attachment = new NetworkInterfaceAttachment();
            $this->Attachment->deserialize($param["Attachment"]);
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Ipv6AddressSet",$param) and $param["Ipv6AddressSet"] !== null) {
            $this->Ipv6AddressSet = [];
            foreach ($param["Ipv6AddressSet"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6AddressSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("EniType",$param) and $param["EniType"] !== null) {
            $this->EniType = $param["EniType"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }
    }
}
