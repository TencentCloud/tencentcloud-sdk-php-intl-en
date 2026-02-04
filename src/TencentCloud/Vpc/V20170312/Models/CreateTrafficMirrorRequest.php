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
 * CreateTrafficMirror request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getTrafficMirrorName() Obtain Traffic mirroring name.
 * @method void setTrafficMirrorName(string $TrafficMirrorName) Set Traffic mirroring name.
 * @method string getTrafficMirrorDescribe() Obtain Traffic mirroring description.
 * @method void setTrafficMirrorDescribe(string $TrafficMirrorDescribe) Set Traffic mirroring description.
 * @method string getState() Obtain Traffic mirroring status. Valid values: RUNNING/STOPED (VPC) and RUNNING (public IP address). It is required when VPC traffic mirroring is collected.
 * @method void setState(string $State) Set Traffic mirroring status. Valid values: RUNNING/STOPED (VPC) and RUNNING (public IP address). It is required when VPC traffic mirroring is collected.
 * @method string getDirection() Obtain Traffic mirroring collection direction. Valid values: EGRESS/INGRESS/ALL (VPC) and ALL (public IP address).
 * @method void setDirection(string $Direction) Set Traffic mirroring collection direction. Valid values: EGRESS/INGRESS/ALL (VPC) and ALL (public IP address).
 * @method array getCollectorSrcs() Obtain Traffic mirroring collection object.
 * @method void setCollectorSrcs(array $CollectorSrcs) Set Traffic mirroring collection object.
 * @method string getNatId() Obtain NAT gateway instance filtered by traffic mirroring.
 * @method void setNatId(string $NatId) Set NAT gateway instance filtered by traffic mirroring.
 * @method array getCollectorNormalFilters() Obtain Five tuple rule to be filtered.
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) Set Five tuple rule to be filtered.
 * @method TrafficMirrorTarget getCollectorTarget() Obtain Traffic mirroring destination address.
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) Set Traffic mirroring destination address.
 * @method string getSubnetId() Obtain Subnet ID of the sender of the traffic mirroring collection traffic.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the sender of the traffic mirroring collection traffic.
 * @method string getType() Obtain Created traffic mirroring type. Valid values: VPC and PUBLICIP. Default value: VPC.
 * @method void setType(string $Type) Set Created traffic mirroring type. Valid values: VPC and PUBLICIP. Default value: VPC.
 * @method array getTags() Obtain Specifies the list of bound tags. For example, [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Specifies the list of bound tags. For example, [{"Key": "city", "Value": "shanghai"}].
 */
class CreateTrafficMirrorRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Traffic mirroring name.
     */
    public $TrafficMirrorName;

    /**
     * @var string Traffic mirroring description.
     */
    public $TrafficMirrorDescribe;

    /**
     * @var string Traffic mirroring status. Valid values: RUNNING/STOPED (VPC) and RUNNING (public IP address). It is required when VPC traffic mirroring is collected.
     */
    public $State;

    /**
     * @var string Traffic mirroring collection direction. Valid values: EGRESS/INGRESS/ALL (VPC) and ALL (public IP address).
     */
    public $Direction;

    /**
     * @var array Traffic mirroring collection object.
     */
    public $CollectorSrcs;

    /**
     * @var string NAT gateway instance filtered by traffic mirroring.
     */
    public $NatId;

    /**
     * @var array Five tuple rule to be filtered.
     */
    public $CollectorNormalFilters;

    /**
     * @var TrafficMirrorTarget Traffic mirroring destination address.
     */
    public $CollectorTarget;

    /**
     * @var string Subnet ID of the sender of the traffic mirroring collection traffic.
     */
    public $SubnetId;

    /**
     * @var string Created traffic mirroring type. Valid values: VPC and PUBLICIP. Default value: VPC.
     */
    public $Type;

    /**
     * @var array Specifies the list of bound tags. For example, [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId VPC instance ID.
     * @param string $TrafficMirrorName Traffic mirroring name.
     * @param string $TrafficMirrorDescribe Traffic mirroring description.
     * @param string $State Traffic mirroring status. Valid values: RUNNING/STOPED (VPC) and RUNNING (public IP address). It is required when VPC traffic mirroring is collected.
     * @param string $Direction Traffic mirroring collection direction. Valid values: EGRESS/INGRESS/ALL (VPC) and ALL (public IP address).
     * @param array $CollectorSrcs Traffic mirroring collection object.
     * @param string $NatId NAT gateway instance filtered by traffic mirroring.
     * @param array $CollectorNormalFilters Five tuple rule to be filtered.
     * @param TrafficMirrorTarget $CollectorTarget Traffic mirroring destination address.
     * @param string $SubnetId Subnet ID of the sender of the traffic mirroring collection traffic.
     * @param string $Type Created traffic mirroring type. Valid values: VPC and PUBLICIP. Default value: VPC.
     * @param array $Tags Specifies the list of bound tags. For example, [{"Key": "city", "Value": "shanghai"}].
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
