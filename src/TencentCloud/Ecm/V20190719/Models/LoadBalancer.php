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
 * CLB instance information
 *
 * @method string getRegion() Obtain Region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Position getPosition() Obtain Location information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(Position $Position) Set Location information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerId() Obtain CLB instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerName() Obtain CLB instance name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerType() Obtain Network type of the CLB instance. Valid values: OPEN: public network
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the CLB instance. Valid values: OPEN: public network
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLoadBalancerVips() Obtain List of VIPs of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerVips(array $LoadBalancerVips) Set List of VIPs of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain CLB instance status. Valid values:
 0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set CLB instance status. Valid values:
 0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusTime() Obtain Last status change time of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusTime(string $StatusTime) Set Last status change time of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVipIsp() Obtain ISP of the CLB IP address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVipIsp(string $VipIsp) Set ISP of the CLB IP address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method LoadBalancerInternetAccessible getNetworkAttributes() Obtain Network attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAttributes(LoadBalancerInternetAccessible $NetworkAttributes) Set Network attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSecureGroups() Obtain Security group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecureGroups(array $SecureGroups) Set Security group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getLoadBalancerPassToTarget() Obtain Whether the real server opens the traffic from ELB to the internet.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Whether the real server opens the traffic from ELB to the internet.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddressIPv6() Obtain IPv6 address of a CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddressIPv6(string $AddressIPv6) Set IPv6 address of a CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string Region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var Position Location information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var string CLB instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerName;

    /**
     * @var string Network type of the CLB instance. Valid values: OPEN: public network
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var array List of VIPs of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerVips;

    /**
     * @var integer CLB instance status. Valid values:
 0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last status change time of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusTime;

    /**
     * @var string VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var array CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string ISP of the CLB IP address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VipIsp;

    /**
     * @var LoadBalancerInternetAccessible Network attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkAttributes;

    /**
     * @var array Security group.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecureGroups;

    /**
     * @var boolean Whether the real server opens the traffic from ELB to the internet.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var string IPv6 address of a CLB instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AddressIPv6;

    /**
     * @param string $Region Region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Position $Position Location information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerId CLB instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerName CLB instance name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerType Network type of the CLB instance. Valid values: OPEN: public network
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $LoadBalancerVips List of VIPs of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status CLB instance status. Valid values:
 0: creating; 1: running.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime CLB instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusTime Last status change time of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags CLB instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VipIsp ISP of the CLB IP address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param LoadBalancerInternetAccessible $NetworkAttributes Network attribute of the CLB instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SecureGroups Security group.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $LoadBalancerPassToTarget Whether the real server opens the traffic from ELB to the internet.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddressIPv6 IPv6 address of a CLB instance
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new LoadBalancerInternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("SecureGroups",$param) and $param["SecureGroups"] !== null) {
            $this->SecureGroups = $param["SecureGroups"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }
    }
}
