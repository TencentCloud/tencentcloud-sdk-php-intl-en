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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB type protection object
 *
 * @method string getObjectId() Obtain Object ID
 * @method void setObjectId(string $ObjectId) Set Object ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method array getPreciseDomains() Obtain Precise Domain List
 * @method void setPreciseDomains(array $PreciseDomains) Set Precise Domain List
 * @method integer getStatus() Obtain WAF Feature Switch Status, 0 Off 1 On
 * @method void setStatus(integer $Status) Set WAF Feature Switch Status, 0 Off 1 On
 * @method integer getClsStatus() Obtain WAF Log Switch Status, 0 Off 1 On
 * @method void setClsStatus(integer $ClsStatus) Set WAF Log Switch Status, 0 Off 1 On
 * @method string getVirtualDomain() Obtain Virtual Domain Name Corresponding to CLB Object
 * @method void setVirtualDomain(string $VirtualDomain) Set Virtual Domain Name Corresponding to CLB Object
 * @method string getObjectName() Obtain Object name
 * @method void setObjectName(string $ObjectName) Set Object name
 * @method array getPublicIp() Obtain Public network address
 * @method void setPublicIp(array $PublicIp) Set Public network address
 * @method array getPrivateIp() Obtain Private network address
 * @method void setPrivateIp(array $PrivateIp) Set Private network address
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method string getVpc() Obtain VPC ID
 * @method void setVpc(string $Vpc) Set VPC ID
 * @method integer getInstanceLevel() Obtain WAF instance level, if no instance is bound, it is 0
 * @method void setInstanceLevel(integer $InstanceLevel) Set WAF instance level, if no instance is bound, it is 0
 * @method integer getPostCLSStatus() Obtain CLB Shipping Switch
 * @method void setPostCLSStatus(integer $PostCLSStatus) Set CLB Shipping Switch
 * @method integer getPostCKafkaStatus() Obtain Kafka Shipping Switch
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) Set Kafka Shipping Switch
 * @method string getType() Obtain Object type: CLB: Load Balancer, TSE: Cloud-native Gateway

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Object type: CLB: Load Balancer, TSE: Cloud-native Gateway

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Object Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Object Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProxy() Obtain Proxy status. 0: disabled; 1: Use the first IP address in XFF as the client IP address; 2: Use remote_addr as the client IP address; 3: Obtain the client IP address from the specified header field. The field is given by the IpHeaders field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxy(integer $Proxy) Set Proxy status. 0: disabled; 1: Use the first IP address in XFF as the client IP address; 2: Use remote_addr as the client IP address; 3: Obtain the client IP address from the specified header field. The field is given by the IpHeaders field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpHeaders() Obtain List of header fields for obtaining the client IP. This parameter is effective when IsCdn is 3.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpHeaders(array $IpHeaders) Set List of header fields for obtaining the client IP. This parameter is effective when IsCdn is 3.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBotStatus() Obtain Bot protection switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotStatus(integer $BotStatus) Set Bot protection switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApiStatus() Obtain API protection switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiStatus(integer $ApiStatus) Set API protection switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getObjectFlowMode() Obtain Object access mode. 0: image mode; 1: cleaning mode; 2: examination mode. By default, the cleaning mode is used.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectFlowMode(integer $ObjectFlowMode) Set Object access mode. 0: image mode; 1: cleaning mode; 2: examination mode. By default, the cleaning mode is used.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNumericalVpcId() Obtain VPC ID in numerical format

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set VPC ID in numerical format

Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClbObject extends AbstractModel
{
    /**
     * @var string Object ID
     */
    public $ObjectId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var array Precise Domain List
     */
    public $PreciseDomains;

    /**
     * @var integer WAF Feature Switch Status, 0 Off 1 On
     */
    public $Status;

    /**
     * @var integer WAF Log Switch Status, 0 Off 1 On
     */
    public $ClsStatus;

    /**
     * @var string Virtual Domain Name Corresponding to CLB Object
     */
    public $VirtualDomain;

    /**
     * @var string Object name
     */
    public $ObjectName;

    /**
     * @var array Public network address
     */
    public $PublicIp;

    /**
     * @var array Private network address
     */
    public $PrivateIp;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var string VPC ID
     */
    public $Vpc;

    /**
     * @var integer WAF instance level, if no instance is bound, it is 0
     */
    public $InstanceLevel;

    /**
     * @var integer CLB Shipping Switch
     */
    public $PostCLSStatus;

    /**
     * @var integer Kafka Shipping Switch
     */
    public $PostCKafkaStatus;

    /**
     * @var string Object type: CLB: Load Balancer, TSE: Cloud-native Gateway

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Object Region

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Proxy status. 0: disabled; 1: Use the first IP address in XFF as the client IP address; 2: Use remote_addr as the client IP address; 3: Obtain the client IP address from the specified header field. The field is given by the IpHeaders field.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Proxy;

    /**
     * @var array List of header fields for obtaining the client IP. This parameter is effective when IsCdn is 3.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpHeaders;

    /**
     * @var integer Bot protection switch
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotStatus;

    /**
     * @var integer API protection switch
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiStatus;

    /**
     * @var integer Object access mode. 0: image mode; 1: cleaning mode; 2: examination mode. By default, the cleaning mode is used.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectFlowMode;

    /**
     * @var integer VPC ID in numerical format

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @param string $ObjectId Object ID
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param array $PreciseDomains Precise Domain List
     * @param integer $Status WAF Feature Switch Status, 0 Off 1 On
     * @param integer $ClsStatus WAF Log Switch Status, 0 Off 1 On
     * @param string $VirtualDomain Virtual Domain Name Corresponding to CLB Object
     * @param string $ObjectName Object name
     * @param array $PublicIp Public network address
     * @param array $PrivateIp Private network address
     * @param string $VpcName VPC name
     * @param string $Vpc VPC ID
     * @param integer $InstanceLevel WAF instance level, if no instance is bound, it is 0
     * @param integer $PostCLSStatus CLB Shipping Switch
     * @param integer $PostCKafkaStatus Kafka Shipping Switch
     * @param string $Type Object type: CLB: Load Balancer, TSE: Cloud-native Gateway

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Object Region

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Proxy Proxy status. 0: disabled; 1: Use the first IP address in XFF as the client IP address; 2: Use remote_addr as the client IP address; 3: Obtain the client IP address from the specified header field. The field is given by the IpHeaders field.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpHeaders List of header fields for obtaining the client IP. This parameter is effective when IsCdn is 3.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BotStatus Bot protection switch
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApiStatus API protection switch
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ObjectFlowMode Object access mode. 0: image mode; 1: cleaning mode; 2: examination mode. By default, the cleaning mode is used.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NumericalVpcId VPC ID in numerical format

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PreciseDomains",$param) and $param["PreciseDomains"] !== null) {
            $this->PreciseDomains = $param["PreciseDomains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("VirtualDomain",$param) and $param["VirtualDomain"] !== null) {
            $this->VirtualDomain = $param["VirtualDomain"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("InstanceLevel",$param) and $param["InstanceLevel"] !== null) {
            $this->InstanceLevel = $param["InstanceLevel"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("ObjectFlowMode",$param) and $param["ObjectFlowMode"] !== null) {
            $this->ObjectFlowMode = $param["ObjectFlowMode"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }
    }
}
