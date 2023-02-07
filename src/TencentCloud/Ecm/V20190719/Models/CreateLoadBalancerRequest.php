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
 * CreateLoadBalancer request structure.
 *
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method string getLoadBalancerType() Obtain Network type of the CLB instance. Currently, you can pass in only `OPEN`, which indicates public network.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the CLB instance. Currently, you can pass in only `OPEN`, which indicates public network.
 * @method string getVipIsp() Obtain CMCC: China Mobile; CTCC: China Telecom; CUCC: China Unicom.
 * @method void setVipIsp(string $VipIsp) Set CMCC: China Mobile; CTCC: China Telecom; CUCC: China Unicom.
 * @method string getLoadBalancerName() Obtain CLB instance name, which will take effect only when one instance is created. It can contain 1–50 letters, digits, hyphens, and underscores.
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name, which will take effect only when one instance is created. It can contain 1–50 letters, digits, hyphens, and underscores.
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method string getVpcId() Obtain Network ID of the target device on the CLB backend, such as `vpc-12345678`.
 * @method void setVpcId(string $VpcId) Set Network ID of the target device on the CLB backend, such as `vpc-12345678`.
 * @method integer getNumber() Obtain Number of CLB instances to be created. Default value: 1.
 * @method void setNumber(integer $Number) Set Number of CLB instances to be created. Default value: 1.
 * @method LoadBalancerInternetAccessible getInternetAccessible() Obtain CLB information such as bandwidth limit.
 * @method void setInternetAccessible(LoadBalancerInternetAccessible $InternetAccessible) Set CLB information such as bandwidth limit.
 * @method array getTags() Obtain Tags.
 * @method void setTags(array $Tags) Set Tags.
 * @method array getSecurityGroups() Obtain Security groups.
 * @method void setSecurityGroups(array $SecurityGroups) Set Security groups.
 * @method string getAddressIPVersion() Obtain IP version. Valid values: `IPV4` (default), `IPv6FullChain` (IPv6 version). This parameter is only for public network CLB instances.
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version. Valid values: `IPV4` (default), `IPv6FullChain` (IPv6 version). This parameter is only for public network CLB instances.
 * @method string getSubnetId() Obtain Subnet ID. This parameter is required for IPv6 CLB instances.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. This parameter is required for IPv6 CLB instances.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var string Network type of the CLB instance. Currently, you can pass in only `OPEN`, which indicates public network.
     */
    public $LoadBalancerType;

    /**
     * @var string CMCC: China Mobile; CTCC: China Telecom; CUCC: China Unicom.
     */
    public $VipIsp;

    /**
     * @var string CLB instance name, which will take effect only when one instance is created. It can contain 1–50 letters, digits, hyphens, and underscores.
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     */
    public $LoadBalancerName;

    /**
     * @var string Network ID of the target device on the CLB backend, such as `vpc-12345678`.
     */
    public $VpcId;

    /**
     * @var integer Number of CLB instances to be created. Default value: 1.
     */
    public $Number;

    /**
     * @var LoadBalancerInternetAccessible CLB information such as bandwidth limit.
     */
    public $InternetAccessible;

    /**
     * @var array Tags.
     */
    public $Tags;

    /**
     * @var array Security groups.
     */
    public $SecurityGroups;

    /**
     * @var string IP version. Valid values: `IPV4` (default), `IPv6FullChain` (IPv6 version). This parameter is only for public network CLB instances.
     */
    public $AddressIPVersion;

    /**
     * @var string Subnet ID. This parameter is required for IPv6 CLB instances.
     */
    public $SubnetId;

    /**
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param string $LoadBalancerType Network type of the CLB instance. Currently, you can pass in only `OPEN`, which indicates public network.
     * @param string $VipIsp CMCC: China Mobile; CTCC: China Telecom; CUCC: China Unicom.
     * @param string $LoadBalancerName CLB instance name, which will take effect only when one instance is created. It can contain 1–50 letters, digits, hyphens, and underscores.
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     * @param string $VpcId Network ID of the target device on the CLB backend, such as `vpc-12345678`.
     * @param integer $Number Number of CLB instances to be created. Default value: 1.
     * @param LoadBalancerInternetAccessible $InternetAccessible CLB information such as bandwidth limit.
     * @param array $Tags Tags.
     * @param array $SecurityGroups Security groups.
     * @param string $AddressIPVersion IP version. Valid values: `IPV4` (default), `IPv6FullChain` (IPv6 version). This parameter is only for public network CLB instances.
     * @param string $SubnetId Subnet ID. This parameter is required for IPv6 CLB instances.
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new LoadBalancerInternetAccessible();
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

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
