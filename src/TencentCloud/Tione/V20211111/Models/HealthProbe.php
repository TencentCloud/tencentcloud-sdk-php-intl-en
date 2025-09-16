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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health probe.
 *
 * @method Probe getLivenessProbe() Obtain Liveness probe.
 * @method void setLivenessProbe(Probe $LivenessProbe) Set Liveness probe.
 * @method Probe getReadinessProbe() Obtain Readiness probe.
 * @method void setReadinessProbe(Probe $ReadinessProbe) Set Readiness probe.
 * @method Probe getStartupProbe() Obtain Startup probe.
 * @method void setStartupProbe(Probe $StartupProbe) Set Startup probe.
 */
class HealthProbe extends AbstractModel
{
    /**
     * @var Probe Liveness probe.
     */
    public $LivenessProbe;

    /**
     * @var Probe Readiness probe.
     */
    public $ReadinessProbe;

    /**
     * @var Probe Startup probe.
     */
    public $StartupProbe;

    /**
     * @param Probe $LivenessProbe Liveness probe.
     * @param Probe $ReadinessProbe Readiness probe.
     * @param Probe $StartupProbe Startup probe.
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
        if (array_key_exists("LivenessProbe",$param) and $param["LivenessProbe"] !== null) {
            $this->LivenessProbe = new Probe();
            $this->LivenessProbe->deserialize($param["LivenessProbe"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new Probe();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }

        if (array_key_exists("StartupProbe",$param) and $param["StartupProbe"] !== null) {
            $this->StartupProbe = new Probe();
            $this->StartupProbe->deserialize($param["StartupProbe"]);
        }
    }
}
