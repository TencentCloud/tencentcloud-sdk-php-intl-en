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
 * Traffic mirroring collection target type.
 *
 * @method array getTargetIps() Obtain Receiving IP address for traffic mirroring.
 * @method void setTargetIps(array $TargetIps) Set Receiving IP address for traffic mirroring.
 * @method string getAlgHash() Obtain Receiving IP address group for traffic mirroring. Load balancing rule. Valid values: ENI/FIVE_TUPLE_FLOW (VPC) and FIVE_TUPLE_FLOW (public IP address).
 * @method void setAlgHash(string $AlgHash) Set Receiving IP address group for traffic mirroring. Load balancing rule. Valid values: ENI/FIVE_TUPLE_FLOW (VPC) and FIVE_TUPLE_FLOW (public IP address).
 * @method array getTargetEndPoints() Obtain Receiving endpoint for traffic mirroring (public IP address).
 * @method void setTargetEndPoints(array $TargetEndPoints) Set Receiving endpoint for traffic mirroring (public IP address).
 * @method string getTargetType() Obtain Receiving type for traffic mirroring. Valid values: IP, ENI, and CLB.
 * @method void setTargetType(string $TargetType) Set Receiving type for traffic mirroring. Valid values: IP, ENI, and CLB.
 */
class TrafficMirrorTarget extends AbstractModel
{
    /**
     * @var array Receiving IP address for traffic mirroring.
     */
    public $TargetIps;

    /**
     * @var string Receiving IP address group for traffic mirroring. Load balancing rule. Valid values: ENI/FIVE_TUPLE_FLOW (VPC) and FIVE_TUPLE_FLOW (public IP address).
     */
    public $AlgHash;

    /**
     * @var array Receiving endpoint for traffic mirroring (public IP address).
     */
    public $TargetEndPoints;

    /**
     * @var string Receiving type for traffic mirroring. Valid values: IP, ENI, and CLB.
     */
    public $TargetType;

    /**
     * @param array $TargetIps Receiving IP address for traffic mirroring.
     * @param string $AlgHash Receiving IP address group for traffic mirroring. Load balancing rule. Valid values: ENI/FIVE_TUPLE_FLOW (VPC) and FIVE_TUPLE_FLOW (public IP address).
     * @param array $TargetEndPoints Receiving endpoint for traffic mirroring (public IP address).
     * @param string $TargetType Receiving type for traffic mirroring. Valid values: IP, ENI, and CLB.
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
        if (array_key_exists("TargetIps",$param) and $param["TargetIps"] !== null) {
            $this->TargetIps = $param["TargetIps"];
        }

        if (array_key_exists("AlgHash",$param) and $param["AlgHash"] !== null) {
            $this->AlgHash = $param["AlgHash"];
        }

        if (array_key_exists("TargetEndPoints",$param) and $param["TargetEndPoints"] !== null) {
            $this->TargetEndPoints = $param["TargetEndPoints"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
