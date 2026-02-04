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
 * CheckTrafficMirror request structure.
 *
 * @method string getVpcId() Obtain Traffic mirroring VPC.
 * @method void setVpcId(string $VpcId) Set Traffic mirroring VPC.
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance ID.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance ID.
 * @method array getCollectorSources() Obtain Collector IP address list for traffic mirroring.
 * @method void setCollectorSources(array $CollectorSources) Set Collector IP address list for traffic mirroring.
 * @method string getSubnetId() Obtain Receiver subnet for traffic mirroring.
 * @method void setSubnetId(string $SubnetId) Set Receiver subnet for traffic mirroring.
 * @method array getCollectorTarget() Obtain Traffic mirroring collector.
 * @method void setCollectorTarget(array $CollectorTarget) Set Traffic mirroring collector.
 */
class CheckTrafficMirrorRequest extends AbstractModel
{
    /**
     * @var string Traffic mirroring VPC.
     */
    public $VpcId;

    /**
     * @var string Traffic mirroring instance ID.
     */
    public $TrafficMirrorId;

    /**
     * @var array Collector IP address list for traffic mirroring.
     */
    public $CollectorSources;

    /**
     * @var string Receiver subnet for traffic mirroring.
     */
    public $SubnetId;

    /**
     * @var array Traffic mirroring collector.
     */
    public $CollectorTarget;

    /**
     * @param string $VpcId Traffic mirroring VPC.
     * @param string $TrafficMirrorId Traffic mirroring instance ID.
     * @param array $CollectorSources Collector IP address list for traffic mirroring.
     * @param string $SubnetId Receiver subnet for traffic mirroring.
     * @param array $CollectorTarget Traffic mirroring collector.
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

        if (array_key_exists("CollectorSources",$param) and $param["CollectorSources"] !== null) {
            $this->CollectorSources = $param["CollectorSources"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = [];
            foreach ($param["CollectorTarget"] as $key => $value){
                $obj = new TrafficMirrorTarget();
                $obj->deserialize($value);
                array_push($this->CollectorTarget, $obj);
            }
        }
    }
}
