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
 * ResetTrafficMirrorTarget request structure.
 *
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance ID.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance ID.
 * @method TrafficMirrorTarget getCollectorTarget() Obtain Traffic mirroring receiving destination information.
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) Set Traffic mirroring receiving destination information.
 * @method string getSubnetId() Obtain Subnet of the sender of the traffic mirroring collection traffic of the public IP address type.
 * @method void setSubnetId(string $SubnetId) Set Subnet of the sender of the traffic mirroring collection traffic of the public IP address type.
 */
class ResetTrafficMirrorTargetRequest extends AbstractModel
{
    /**
     * @var string Traffic mirroring instance ID.
     */
    public $TrafficMirrorId;

    /**
     * @var TrafficMirrorTarget Traffic mirroring receiving destination information.
     */
    public $CollectorTarget;

    /**
     * @var string Subnet of the sender of the traffic mirroring collection traffic of the public IP address type.
     */
    public $SubnetId;

    /**
     * @param string $TrafficMirrorId Traffic mirroring instance ID.
     * @param TrafficMirrorTarget $CollectorTarget Traffic mirroring receiving destination information.
     * @param string $SubnetId Subnet of the sender of the traffic mirroring collection traffic of the public IP address type.
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = new TrafficMirrorTarget();
            $this->CollectorTarget->deserialize($param["CollectorTarget"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
