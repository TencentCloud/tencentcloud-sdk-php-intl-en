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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of acceleration regions in a connection group, including acceleration regions and their bandwidth and concurrence configuration.
 *
 * @method string getAccessRegion() Obtain Acceleration region.
 * @method void setAccessRegion(string $AccessRegion) Set Acceleration region.
 * @method integer getBandwidth() Obtain Connection bandwidth cap. Unit: Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Connection bandwidth cap. Unit: Mbps.
 * @method integer getConcurrent() Obtain Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method void setConcurrent(integer $Concurrent) Set Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method string getNetworkType() Obtain Network type. Valid values: `normal` (default), `cn2`
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: `normal` (default), `cn2`
 */
class AccessConfiguration extends AbstractModel
{
    /**
     * @var string Acceleration region.
     */
    public $AccessRegion;

    /**
     * @var integer Connection bandwidth cap. Unit: Mbps.
     */
    public $Bandwidth;

    /**
     * @var integer Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     */
    public $Concurrent;

    /**
     * @var string Network type. Valid values: `normal` (default), `cn2`
     */
    public $NetworkType;

    /**
     * @param string $AccessRegion Acceleration region.
     * @param integer $Bandwidth Connection bandwidth cap. Unit: Mbps.
     * @param integer $Concurrent Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     * @param string $NetworkType Network type. Valid values: `normal` (default), `cn2`
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
        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }
    }
}
