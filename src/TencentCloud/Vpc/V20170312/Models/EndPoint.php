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
 * Endpoint details
 *
 * @method string getEndPointId() Obtain Endpoint ID
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getEndPointOwner() Obtain APP ID
 * @method void setEndPointOwner(string $EndPointOwner) Set APP ID
 * @method string getEndPointName() Obtain Endpoint name
 * @method void setEndPointName(string $EndPointName) Set Endpoint name
 * @method string getServiceVpcId() Obtain Endpoint service VPC ID
 * @method void setServiceVpcId(string $ServiceVpcId) Set Endpoint service VPC ID
 * @method string getServiceVip() Obtain Endpoint service VIP
 * @method void setServiceVip(string $ServiceVip) Set Endpoint service VIP
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method string getEndPointVip() Obtain Endpoint VIP
 * @method void setEndPointVip(string $EndPointVip) Set Endpoint VIP
 * @method string getState() Obtain Endpoint status. Valid values: `ACTIVE` (available), `PENDING` (to be accepted), `ACCEPTING` (being accepted), `REJECTED` (rejected), and `FAILED` (failed).
 * @method void setState(string $State) Set Endpoint status. Valid values: `ACTIVE` (available), `PENDING` (to be accepted), `ACCEPTING` (being accepted), `REJECTED` (rejected), and `FAILED` (failed).
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method array getGroupSet() Obtain ID list of security group instances bound with endpoints
 * @method void setGroupSet(array $GroupSet) Set ID list of security group instances bound with endpoints
 * @method string getServiceName() Obtain Endpoint service name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Endpoint service name
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class EndPoint extends AbstractModel
{
    /**
     * @var string Endpoint ID
     */
    public $EndPointId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string APP ID
     */
    public $EndPointOwner;

    /**
     * @var string Endpoint name
     */
    public $EndPointName;

    /**
     * @var string Endpoint service VPC ID
     */
    public $ServiceVpcId;

    /**
     * @var string Endpoint service VIP
     */
    public $ServiceVip;

    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @var string Endpoint VIP
     */
    public $EndPointVip;

    /**
     * @var string Endpoint status. Valid values: `ACTIVE` (available), `PENDING` (to be accepted), `ACCEPTING` (being accepted), `REJECTED` (rejected), and `FAILED` (failed).
     */
    public $State;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var array ID list of security group instances bound with endpoints
     */
    public $GroupSet;

    /**
     * @var string Endpoint service name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @param string $EndPointId Endpoint ID
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $EndPointOwner APP ID
     * @param string $EndPointName Endpoint name
     * @param string $ServiceVpcId Endpoint service VPC ID
     * @param string $ServiceVip Endpoint service VIP
     * @param string $EndPointServiceId Endpoint service ID
     * @param string $EndPointVip Endpoint VIP
     * @param string $State Endpoint status. Valid values: `ACTIVE` (available), `PENDING` (to be accepted), `ACCEPTING` (being accepted), `REJECTED` (rejected), and `FAILED` (failed).
     * @param string $CreateTime Creation time
     * @param array $GroupSet ID list of security group instances bound with endpoints
     * @param string $ServiceName Endpoint service name
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EndPointOwner",$param) and $param["EndPointOwner"] !== null) {
            $this->EndPointOwner = $param["EndPointOwner"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("ServiceVpcId",$param) and $param["ServiceVpcId"] !== null) {
            $this->ServiceVpcId = $param["ServiceVpcId"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = $param["GroupSet"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
