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
 * ResetTrafficMirrorFilter request structure.
 *
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance ID.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance ID.
 * @method string getNatId() Obtain NAT gateway instance ID to be filtered by traffic mirroring.
 * @method void setNatId(string $NatId) Set NAT gateway instance ID to be filtered by traffic mirroring.
 * @method array getCollectorNormalFilters() Obtain Five tuple rule to be filtered by traffic mirroring.
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) Set Five tuple rule to be filtered by traffic mirroring.
 */
class ResetTrafficMirrorFilterRequest extends AbstractModel
{
    /**
     * @var string Traffic mirroring instance ID.
     */
    public $TrafficMirrorId;

    /**
     * @var string NAT gateway instance ID to be filtered by traffic mirroring.
     */
    public $NatId;

    /**
     * @var array Five tuple rule to be filtered by traffic mirroring.
     */
    public $CollectorNormalFilters;

    /**
     * @param string $TrafficMirrorId Traffic mirroring instance ID.
     * @param string $NatId NAT gateway instance ID to be filtered by traffic mirroring.
     * @param array $CollectorNormalFilters Five tuple rule to be filtered by traffic mirroring.
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
    }
}
