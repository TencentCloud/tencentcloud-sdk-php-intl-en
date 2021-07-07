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
 * SetCcnRegionBandwidthLimits request structure.
 *
 * @method string getCcnId() Obtain The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method void setCcnId(string $CcnId) Set The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method array getCcnRegionBandwidthLimits() Obtain The outbound bandwidth cap of each CCN region.
 * @method void setCcnRegionBandwidthLimits(array $CcnRegionBandwidthLimits) Set The outbound bandwidth cap of each CCN region.
 * @method boolean getSetDefaultLimitFlag() Obtain Whether to restore the region outbound bandwidth limit or inter-region bandwidth limit to default 1 Gbps. Valid values: `false` (no); `true` (yes). Default value: `false`. When the parameter is set to `true`, the CCN instance created will not be displayed in the console.
 * @method void setSetDefaultLimitFlag(boolean $SetDefaultLimitFlag) Set Whether to restore the region outbound bandwidth limit or inter-region bandwidth limit to default 1 Gbps. Valid values: `false` (no); `true` (yes). Default value: `false`. When the parameter is set to `true`, the CCN instance created will not be displayed in the console.
 */
class SetCcnRegionBandwidthLimitsRequest extends AbstractModel
{
    /**
     * @var string The CCN instance ID, such as `ccn-f49l6u0z`.
     */
    public $CcnId;

    /**
     * @var array The outbound bandwidth cap of each CCN region.
     */
    public $CcnRegionBandwidthLimits;

    /**
     * @var boolean Whether to restore the region outbound bandwidth limit or inter-region bandwidth limit to default 1 Gbps. Valid values: `false` (no); `true` (yes). Default value: `false`. When the parameter is set to `true`, the CCN instance created will not be displayed in the console.
     */
    public $SetDefaultLimitFlag;

    /**
     * @param string $CcnId The CCN instance ID, such as `ccn-f49l6u0z`.
     * @param array $CcnRegionBandwidthLimits The outbound bandwidth cap of each CCN region.
     * @param boolean $SetDefaultLimitFlag Whether to restore the region outbound bandwidth limit or inter-region bandwidth limit to default 1 Gbps. Valid values: `false` (no); `true` (yes). Default value: `false`. When the parameter is set to `true`, the CCN instance created will not be displayed in the console.
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnRegionBandwidthLimits",$param) and $param["CcnRegionBandwidthLimits"] !== null) {
            $this->CcnRegionBandwidthLimits = [];
            foreach ($param["CcnRegionBandwidthLimits"] as $key => $value){
                $obj = new CcnRegionBandwidthLimit();
                $obj->deserialize($value);
                array_push($this->CcnRegionBandwidthLimits, $obj);
            }
        }

        if (array_key_exists("SetDefaultLimitFlag",$param) and $param["SetDefaultLimitFlag"] !== null) {
            $this->SetDefaultLimitFlag = $param["SetDefaultLimitFlag"];
        }
    }
}
