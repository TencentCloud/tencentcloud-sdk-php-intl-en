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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * // InstanceInfo instance details result
type InstanceInfo struct {
	AppID        string `json:"AppId" gorm:"column:appid"`
	Region       string `json:"Region" gorm:"column:region"`
	VPCID        string `json:"VpcId" gorm:"column:vpc_id"`
	SubNetID     string `json:"SubnetId" gorm:"column:subnet_id"`
	InstanceID   string `json:"InstanceId" gorm:"column:instance_id"`
	InstanceName string `json:"InstanceName" gorm:"column:instance_name"`
	//InsType common.CVM 3 is CVM instance, 4 is CLB instance, 5 is ENI instance, 6 is MySQL, 7 is Redis, 8 is NAT, 9 is VPN, 10 is ES, 11 is MariaDB, and 12 is Kafka
	InsType   int    `json:"InsType" gorm:"column:instance_type"`
	PublicIP  string `json:"PublicIp" gorm:"column:public_ip"`
	PrivateIP string `json:"PrivateIp" gorm:"column:ip"`

	// It is not required for rule publishing and is used for frontend display
	PortNum          string `json:"PortNum" gorm:"column:port_num"`
	LeakNum          string `json:"LeakNum" gorm:"column:leak_num"`
	ResourceGroupNum int    `json:"ResourceGroupNum"`
	VPCName          string `json:"VPCName" gorm:"column:VPCName"`
}

 *
 * @method string getAppId() Obtain App ID
 * @method void setAppId(string $AppId) Set App ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getVPCName() Obtain VPC name
 * @method void setVPCName(string $VPCName) Set VPC name
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getInstanceId() Obtain Asset ID
 * @method void setInstanceId(string $InstanceId) Set Asset ID
 * @method string getInstanceName() Obtain Asset name
 * @method void setInstanceName(string $InstanceName) Set Asset name
 * @method integer getInsType() Obtain Asset type
 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: MySQL; 7: Redis; 8: NAT; 9: VPN; 10: ES; 11: MariaDB; 12: Kafka; 13: NATFW
 * @method void setInsType(integer $InsType) Set Asset type
 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: MySQL; 7: Redis; 8: NAT; 9: VPN; 10: ES; 11: MariaDB; 12: Kafka; 13: NATFW
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getPrivateIp() Obtain Private IP
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
 * @method string getPortNum() Obtain Number of ports
 * @method void setPortNum(string $PortNum) Set Number of ports
 * @method string getLeakNum() Obtain Number of vulnerabilities
 * @method void setLeakNum(string $LeakNum) Set Number of vulnerabilities
 * @method string getInsSource() Obtain 1: public network; 2: private network
 * @method void setInsSource(string $InsSource) Set 1: public network; 2: private network
 * @method array getResourcePath() Obtain [a,b]
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setResourcePath(array $ResourcePath) Set [a,b]
Note: This field may return `null`, indicating that no valid value was found.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string App ID
     */
    public $AppId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VPCName;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Asset ID
     */
    public $InstanceId;

    /**
     * @var string Asset name
     */
    public $InstanceName;

    /**
     * @var integer Asset type
 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: MySQL; 7: Redis; 8: NAT; 9: VPN; 10: ES; 11: MariaDB; 12: Kafka; 13: NATFW
     */
    public $InsType;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Private IP
     */
    public $PrivateIp;

    /**
     * @var string Number of ports
     */
    public $PortNum;

    /**
     * @var string Number of vulnerabilities
     */
    public $LeakNum;

    /**
     * @var string 1: public network; 2: private network
     */
    public $InsSource;

    /**
     * @var array [a,b]
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ResourcePath;

    /**
     * @param string $AppId App ID
     * @param string $Region Region
     * @param string $VpcId VPC ID
     * @param string $VPCName VPC name
     * @param string $SubnetId Subnet ID
     * @param string $InstanceId Asset ID
     * @param string $InstanceName Asset name
     * @param integer $InsType Asset type
 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: MySQL; 7: Redis; 8: NAT; 9: VPN; 10: ES; 11: MariaDB; 12: Kafka; 13: NATFW
     * @param string $PublicIp Public IP
     * @param string $PrivateIp Private IP
     * @param string $PortNum Number of ports
     * @param string $LeakNum Number of vulnerabilities
     * @param string $InsSource 1: public network; 2: private network
     * @param array $ResourcePath [a,b]
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VPCName",$param) and $param["VPCName"] !== null) {
            $this->VPCName = $param["VPCName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("LeakNum",$param) and $param["LeakNum"] !== null) {
            $this->LeakNum = $param["LeakNum"];
        }

        if (array_key_exists("InsSource",$param) and $param["InsSource"] !== null) {
            $this->InsSource = $param["InsSource"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }
    }
}
