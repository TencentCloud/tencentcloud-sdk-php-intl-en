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
 * ModifyAlarmDefaultThreshold request structure.
 *
 * @method string getServiceType() Obtain The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
 * @method void setServiceType(string $ServiceType) Set The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method integer getThreshold() Obtain The threshold in Mbps. Maximum value: 10.
 * @method void setThreshold(integer $Threshold) Set The threshold in Mbps. Maximum value: 10.
 * @method string getEntity() Obtain The protection entity, which is a proxy ID when layer-4 protection is enabled, or a site name when layer-7 protection is on.
 * @method void setEntity(string $Entity) Set The protection entity, which is a proxy ID when layer-4 protection is enabled, or a site name when layer-7 protection is on.
 */
class ModifyAlarmDefaultThresholdRequest extends AbstractModel
{
    /**
     * @var string The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
     */
    public $ServiceType;

    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var integer The threshold in Mbps. Maximum value: 10.
     */
    public $Threshold;

    /**
     * @var string The protection entity, which is a proxy ID when layer-4 protection is enabled, or a site name when layer-7 protection is on.
     */
    public $Entity;

    /**
     * @param string $ServiceType The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
     * @param string $ZoneId The site ID.
     * @param integer $Threshold The threshold in Mbps. Maximum value: 10.
     * @param string $Entity The protection entity, which is a proxy ID when layer-4 protection is enabled, or a site name when layer-7 protection is on.
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }
    }
}
