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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLoadBalancerType() 获取CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() 获取CLB instance type. 1: generic CLB instance. Currently, only 1 can be passed in
 * @method void setForward(integer $Forward) 设置CLB instance type. 1: generic CLB instance. Currently, only 1 can be passed in
 * @method string getLoadBalancerName() 获取CLB instance name, which takes effect only when an instance is created. Rule: 1-50 letters, digits, dashes (-), or underscores (_).
Note: If this name is the same as the name of an existing CLB instance in the system, the system will automatically generate a name for this newly created instance.
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置CLB instance name, which takes effect only when an instance is created. Rule: 1-50 letters, digits, dashes (-), or underscores (_).
Note: If this name is the same as the name of an existing CLB instance in the system, the system will automatically generate a name for this newly created instance.
 * @method string getVpcId() 获取Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
 * @method void setVpcId(string $VpcId) 设置Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
 * @method string getSubnetId() 获取A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet. This parameter is not supported in other cases.
 * @method void setSubnetId(string $SubnetId) 设置A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet. This parameter is not supported in other cases.
 * @method integer getProjectId() 获取ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
 * @method void setProjectId(integer $ProjectId) 设置ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
 * @method string getAddressIPVersion() 获取IP version. Value range: IPv4, IPv6. Default value: IPv4. This parameter is applicable only to public network CLB.
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP version. Value range: IPv4, IPv6. Default value: IPv4. This parameter is applicable only to public network CLB.
 * @method integer getNumber() 获取Number of CLBs to be created. Default value: 1.
 * @method void setNumber(integer $Number) 设置Number of CLBs to be created. Default value: 1.
 * @method string getMasterZoneId() 获取Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
 * @method void setMasterZoneId(string $MasterZoneId) 设置Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
 * @method string getZoneId() 获取Specifies an AZ ID for creating a CLB instance, such as ap-guangzhou-1, which is applicable only to public network CLB.
 * @method void setZoneId(string $ZoneId) 设置Specifies an AZ ID for creating a CLB instance, such as ap-guangzhou-1, which is applicable only to public network CLB.
 * @method InternetAccessible getInternetAccessible() 获取CLB network billing method. This parameter is applicable only to public network CLB, and takes effect only for users whose bandwidth is managed in IP and CLB.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置CLB network billing method. This parameter is applicable only to public network CLB, and takes effect only for users whose bandwidth is managed in IP and CLB.
 * @method array getTags() 获取Tags a CLB instance when purchasing it
 * @method void setTags(array $Tags) 设置Tags a CLB instance when purchasing it
 */

/**
 *CreateLoadBalancer request structure.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string CLB instance network type:
OPEN: public network; INTERNAL: private network.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance type. 1: generic CLB instance. Currently, only 1 can be passed in
     */
    public $Forward;

    /**
     * @var string CLB instance name, which takes effect only when an instance is created. Rule: 1-50 letters, digits, dashes (-), or underscores (_).
Note: If this name is the same as the name of an existing CLB instance in the system, the system will automatically generate a name for this newly created instance.
     */
    public $LoadBalancerName;

    /**
     * @var string Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
     */
    public $VpcId;

    /**
     * @var string A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet. This parameter is not supported in other cases.
     */
    public $SubnetId;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string IP version. Value range: IPv4, IPv6. Default value: IPv4. This parameter is applicable only to public network CLB.
     */
    public $AddressIPVersion;

    /**
     * @var integer Number of CLBs to be created. Default value: 1.
     */
    public $Number;

    /**
     * @var string Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
     */
    public $MasterZoneId;

    /**
     * @var string Specifies an AZ ID for creating a CLB instance, such as ap-guangzhou-1, which is applicable only to public network CLB.
     */
    public $ZoneId;

    /**
     * @var InternetAccessible CLB network billing method. This parameter is applicable only to public network CLB, and takes effect only for users whose bandwidth is managed in IP and CLB.
     */
    public $InternetAccessible;

    /**
     * @var array Tags a CLB instance when purchasing it
     */
    public $Tags;
    /**
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB instance type. 1: generic CLB instance. Currently, only 1 can be passed in
     * @param string $LoadBalancerName CLB instance name, which takes effect only when an instance is created. Rule: 1-50 letters, digits, dashes (-), or underscores (_).
Note: If this name is the same as the name of an existing CLB instance in the system, the system will automatically generate a name for this newly created instance.
     * @param string $VpcId Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
     * @param string $SubnetId A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet. This parameter is not supported in other cases.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
     * @param string $AddressIPVersion IP version. Value range: IPv4, IPv6. Default value: IPv4. This parameter is applicable only to public network CLB.
     * @param integer $Number Number of CLBs to be created. Default value: 1.
     * @param string $MasterZoneId Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
     * @param string $ZoneId Specifies an AZ ID for creating a CLB instance, such as ap-guangzhou-1, which is applicable only to public network CLB.
     * @param InternetAccessible $InternetAccessible CLB network billing method. This parameter is applicable only to public network CLB, and takes effect only for users whose bandwidth is managed in IP and CLB.
     * @param array $Tags Tags a CLB instance when purchasing it
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
