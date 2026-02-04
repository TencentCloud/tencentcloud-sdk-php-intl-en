<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Traffic mirroring instance.
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance.
 * @method string getTrafficMirrorName() Obtain Traffic mirroring name.
 * @method void setTrafficMirrorName(string $TrafficMirrorName) Set Traffic mirroring name.
 * @method string getTrafficMirrorDescribe() Obtain Traffic mirroring description.
 * @method void setTrafficMirrorDescribe(string $TrafficMirrorDescribe) Set Traffic mirroring description.
 * @method string getState() Obtain Traffic mirroring status.
 * @method void setState(string $State) Set Traffic mirroring status.
 * @method string getDirection() Obtain Traffic mirroring collection direction.
 * @method void setDirection(string $Direction) Set Traffic mirroring collection direction.
 * @method array getCollectorSrcs() Obtain Traffic mirroring collection object.
 * @method void setCollectorSrcs(array $CollectorSrcs) Set Traffic mirroring collection object.
 * @method string getNatId() Obtain NAT gateway instance ID filtered by traffic mirroring.
 * @method void setNatId(string $NatId) Set NAT gateway instance ID filtered by traffic mirroring.
 * @method array getCollectorNormalFilters() Obtain Five tuple rule filtered by traffic mirroring.
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) Set Five tuple rule filtered by traffic mirroring.
 * @method TrafficMirrorTarget getCollectorTarget() Obtain Traffic mirroring receiving target.
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) Set Traffic mirroring receiving target.
 * @method string getCreateTime() Obtain Traffic mirroring creation time.
 * @method void setCreateTime(string $CreateTime) Set Traffic mirroring creation time.
 * @method string getType() Obtain Traffic mirroring type.
 * @method void setType(string $Type) Set Traffic mirroring type.
 * @method string getSubnetId() Obtain Traffic mirroring subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Traffic mirroring subnet ID.
 * @method array getTargetInfo() Obtain Resource information of the traffic mirroring receiving target, returned when the receiving target is ENI or CLB.
 * @method void setTargetInfo(array $TargetInfo) Set Resource information of the traffic mirroring receiving target, returned when the receiving target is ENI or CLB.
 */
class TrafficMirror extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Traffic mirroring instance.
     */
    public $TrafficMirrorId;

    /**
     * @var string Traffic mirroring name.
     */
    public $TrafficMirrorName;

    /**
     * @var string Traffic mirroring description.
     */
    public $TrafficMirrorDescribe;

    /**
     * @var string Traffic mirroring status.
     */
    public $State;

    /**
     * @var string Traffic mirroring collection direction.
     */
    public $Direction;

    /**
     * @var array Traffic mirroring collection object.
     */
    public $CollectorSrcs;

    /**
     * @var string NAT gateway instance ID filtered by traffic mirroring.
     */
    public $NatId;

    /**
     * @var array Five tuple rule filtered by traffic mirroring.
     */
    public $CollectorNormalFilters;

    /**
     * @var TrafficMirrorTarget Traffic mirroring receiving target.
     */
    public $CollectorTarget;

    /**
     * @var string Traffic mirroring creation time.
     */
    public $CreateTime;

    /**
     * @var string Traffic mirroring type.
     */
    public $Type;

    /**
     * @var string Traffic mirroring subnet ID.
     */
    public $SubnetId;

    /**
     * @var array Resource information of the traffic mirroring receiving target, returned when the receiving target is ENI or CLB.
     */
    public $TargetInfo;

    /**
     * @param string $VpcId VPC instance ID.
     * @param string $TrafficMirrorId Traffic mirroring instance.
     * @param string $TrafficMirrorName Traffic mirroring name.
     * @param string $TrafficMirrorDescribe Traffic mirroring description.
     * @param string $State Traffic mirroring status.
     * @param string $Direction Traffic mirroring collection direction.
     * @param array $CollectorSrcs Traffic mirroring collection object.
     * @param string $NatId NAT gateway instance ID filtered by traffic mirroring.
     * @param array $CollectorNormalFilters Five tuple rule filtered by traffic mirroring.
     * @param TrafficMirrorTarget $CollectorTarget Traffic mirroring receiving target.
     * @param string $CreateTime Traffic mirroring creation time.
     * @param string $Type Traffic mirroring type.
     * @param string $SubnetId Traffic mirroring subnet ID.
     * @param array $TargetInfo Resource information of the traffic mirroring receiving target, returned when the receiving target is ENI or CLB.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("TrafficMirrorName",$param) and $param["TrafficMirrorName"] !== null) {
            $this->TrafficMirrorName = $param["TrafficMirrorName"];
        }

        if (array_key_exists("TrafficMirrorDescribe",$param) and $param["TrafficMirrorDescribe"] !== null) {
            $this->TrafficMirrorDescribe = $param["TrafficMirrorDescribe"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("CollectorSrcs",$param) and $param["CollectorSrcs"] !== null) {
            $this->CollectorSrcs = $param["CollectorSrcs"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("CollectorNormalFilters",$param) and $param["CollectorNormalFilters"] !== null) {
            $this->CollectorNormalFilters = [];
            foreach ($param["CollectorNormalFilters"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->CollectorNormalFilters, $obj);
            }
        }

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = new TrafficMirrorTarget();
            $this->CollectorTarget->deserialize($param["CollectorTarget"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = [];
            foreach ($param["TargetInfo"] as $key => $value){
                $obj = new TrafficMirrorTargetResourceInfo();
                $obj->deserialize($value);
                array_push($this->TargetInfo, $obj);
            }
        }
    }
}
