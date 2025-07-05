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
 * DescribeBandwidthPackageBillUsage request structure.
 *
 * @method string getBandwidthPackageId() Obtain Unique ID of the pay-as-you-go bandwidth package.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Unique ID of the pay-as-you-go bandwidth package.
 */
class DescribeBandwidthPackageBillUsageRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the pay-as-you-go bandwidth package.
     */
    public $BandwidthPackageId;

    /**
     * @param string $BandwidthPackageId Unique ID of the pay-as-you-go bandwidth package.
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
