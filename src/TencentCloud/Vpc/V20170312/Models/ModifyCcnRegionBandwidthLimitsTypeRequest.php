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
 * ModifyCcnRegionBandwidthLimitsType request structure.
 *
 * @method string getCcnId() Obtain CCN instance ID.
 * @method void setCcnId(string $CcnId) Set CCN instance ID.
 * @method string getBandwidthLimitType() Obtain CCN bandwidth limit type. INTER_REGION_LIMIT: limit between regions. OUTER_REGION_LIMIT: region egress limit.
 * @method void setBandwidthLimitType(string $BandwidthLimitType) Set CCN bandwidth limit type. INTER_REGION_LIMIT: limit between regions. OUTER_REGION_LIMIT: region egress limit.
 */
class ModifyCcnRegionBandwidthLimitsTypeRequest extends AbstractModel
{
    /**
     * @var string CCN instance ID.
     */
    public $CcnId;

    /**
     * @var string CCN bandwidth limit type. INTER_REGION_LIMIT: limit between regions. OUTER_REGION_LIMIT: region egress limit.
     */
    public $BandwidthLimitType;

    /**
     * @param string $CcnId CCN instance ID.
     * @param string $BandwidthLimitType CCN bandwidth limit type. INTER_REGION_LIMIT: limit between regions. OUTER_REGION_LIMIT: region egress limit.
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

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }
    }
}
