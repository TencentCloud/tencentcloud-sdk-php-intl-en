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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health status of origin servers in each health check region.
 *
 * @method string getRegion() Obtain Health check region, which is a two-letter code according to ISO-3166-1.
 * @method void setRegion(string $Region) Set Health check region, which is a two-letter code according to ISO-3166-1.
 * @method string getHealthy() Obtain Health status of origin servers in a single health check region. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>Note: If all origin servers in a single health check region are healthy, the status is healthy; otherwise, it is unhealthy.
 * @method void setHealthy(string $Healthy) Set Health status of origin servers in a single health check region. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>Note: If all origin servers in a single health check region are healthy, the status is healthy; otherwise, it is unhealthy.
 * @method array getOriginHealthStatus() Obtain Origin server health status.
 * @method void setOriginHealthStatus(array $OriginHealthStatus) Set Origin server health status.
 */
class CheckRegionHealthStatus extends AbstractModel
{
    /**
     * @var string Health check region, which is a two-letter code according to ISO-3166-1.
     */
    public $Region;

    /**
     * @var string Health status of origin servers in a single health check region. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>Note: If all origin servers in a single health check region are healthy, the status is healthy; otherwise, it is unhealthy.
     */
    public $Healthy;

    /**
     * @var array Origin server health status.
     */
    public $OriginHealthStatus;

    /**
     * @param string $Region Health check region, which is a two-letter code according to ISO-3166-1.
     * @param string $Healthy Health status of origin servers in a single health check region. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>Note: If all origin servers in a single health check region are healthy, the status is healthy; otherwise, it is unhealthy.
     * @param array $OriginHealthStatus Origin server health status.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }
    }
}
