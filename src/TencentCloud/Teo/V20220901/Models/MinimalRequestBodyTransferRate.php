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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Minimum minimum body transfer rate threshold configuration. ```.
 *
 * @method string getMinimalAvgTransferRateThreshold() Obtain Minimum body transfer rate threshold, the measurement unit is only supported in bps.
 * @method void setMinimalAvgTransferRateThreshold(string $MinimalAvgTransferRateThreshold) Set Minimum body transfer rate threshold, the measurement unit is only supported in bps.
 * @method string getCountingPeriod() Obtain Minimum body transfer rate statistical time range, valid values: <li>10s: 10 seconds;</li> <li>30s: 30 seconds;</li> <li>60s: 60 seconds;</li> <li>120s: 120 seconds.</li>.
 * @method void setCountingPeriod(string $CountingPeriod) Set Minimum body transfer rate statistical time range, valid values: <li>10s: 10 seconds;</li> <li>30s: 30 seconds;</li> <li>60s: 60 seconds;</li> <li>120s: 120 seconds.</li>.
 * @method string getEnabled() Obtain Specifies whether the minimum body transfer rate threshold is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
 * @method void setEnabled(string $Enabled) Set Specifies whether the minimum body transfer rate threshold is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
 */
class MinimalRequestBodyTransferRate extends AbstractModel
{
    /**
     * @var string Minimum body transfer rate threshold, the measurement unit is only supported in bps.
     */
    public $MinimalAvgTransferRateThreshold;

    /**
     * @var string Minimum body transfer rate statistical time range, valid values: <li>10s: 10 seconds;</li> <li>30s: 30 seconds;</li> <li>60s: 60 seconds;</li> <li>120s: 120 seconds.</li>.
     */
    public $CountingPeriod;

    /**
     * @var string Specifies whether the minimum body transfer rate threshold is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
     */
    public $Enabled;

    /**
     * @param string $MinimalAvgTransferRateThreshold Minimum body transfer rate threshold, the measurement unit is only supported in bps.
     * @param string $CountingPeriod Minimum body transfer rate statistical time range, valid values: <li>10s: 10 seconds;</li> <li>30s: 30 seconds;</li> <li>60s: 60 seconds;</li> <li>120s: 120 seconds.</li>.
     * @param string $Enabled Specifies whether the minimum body transfer rate threshold is enabled. valid values: <li>on: enable;</li> <li>off: disable.</li>.
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
        if (array_key_exists("MinimalAvgTransferRateThreshold",$param) and $param["MinimalAvgTransferRateThreshold"] !== null) {
            $this->MinimalAvgTransferRateThreshold = $param["MinimalAvgTransferRateThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
