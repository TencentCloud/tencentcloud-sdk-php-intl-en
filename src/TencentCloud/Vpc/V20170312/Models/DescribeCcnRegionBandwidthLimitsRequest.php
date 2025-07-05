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
 * DescribeCcnRegionBandwidthLimits request structure.
 *
 * @method string getCcnId() Obtain The CCN instance ID in the format of `ccn-f49l6u0z`.
 * @method void setCcnId(string $CcnId) Set The CCN instance ID in the format of `ccn-f49l6u0z`.
 */
class DescribeCcnRegionBandwidthLimitsRequest extends AbstractModel
{
    /**
     * @var string The CCN instance ID in the format of `ccn-f49l6u0z`.
     */
    public $CcnId;

    /**
     * @param string $CcnId The CCN instance ID in the format of `ccn-f49l6u0z`.
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
    }
}
