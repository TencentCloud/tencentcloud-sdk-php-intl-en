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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on availability zones.
 *
 * @method string getZone() Obtain Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 (sold out)</li>
<li> ap-hongkong-2 </li>
<li> ap-hongkong-3 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 (sold out)</li>
<li> ap-guangzhou-1 (sold out)</li>
<li> ap-guangzhou-2 (sold out)</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-guangzhou-7 </li>
<li> ap-tokyo-1 </li>
<li> ap-tokyo-2 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-singapore-3 </li>
<li>ap-singapore-4 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-bangkok-2 </li>
<li> ap-shanghai-1 (sold out)</li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-shanghai-8 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 (sold out)</li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> ap-beijing-6 </li>
<li> ap-beijing-7 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> eu-frankfurt-2 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
<li> ap-nanjing-3 </li>
<li> sa-saopaulo-1</li>
<li> ap-jakarta-1 </li>
<li> ap-jakarta-2 </li>
 * @method void setZone(string $Zone) Set Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 (sold out)</li>
<li> ap-hongkong-2 </li>
<li> ap-hongkong-3 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 (sold out)</li>
<li> ap-guangzhou-1 (sold out)</li>
<li> ap-guangzhou-2 (sold out)</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-guangzhou-7 </li>
<li> ap-tokyo-1 </li>
<li> ap-tokyo-2 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-singapore-3 </li>
<li>ap-singapore-4 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-bangkok-2 </li>
<li> ap-shanghai-1 (sold out)</li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-shanghai-8 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 (sold out)</li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> ap-beijing-6 </li>
<li> ap-beijing-7 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> eu-frankfurt-2 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
<li> ap-nanjing-3 </li>
<li> sa-saopaulo-1</li>
<li> ap-jakarta-1 </li>
<li> ap-jakarta-2 </li>
 * @method string getZoneName() Obtain Availability zone description, such as Guangzhou Zone 3.
 * @method void setZoneName(string $ZoneName) Set Availability zone description, such as Guangzhou Zone 3.
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method string getZoneState() Obtain Availability zone status. Valid values: `AVAILABLE`: available; `UNAVAILABLE`: unavailable.
 * @method void setZoneState(string $ZoneState) Set Availability zone status. Valid values: `AVAILABLE`: available; `UNAVAILABLE`: unavailable.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 (sold out)</li>
<li> ap-hongkong-2 </li>
<li> ap-hongkong-3 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 (sold out)</li>
<li> ap-guangzhou-1 (sold out)</li>
<li> ap-guangzhou-2 (sold out)</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-guangzhou-7 </li>
<li> ap-tokyo-1 </li>
<li> ap-tokyo-2 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-singapore-3 </li>
<li>ap-singapore-4 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-bangkok-2 </li>
<li> ap-shanghai-1 (sold out)</li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-shanghai-8 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 (sold out)</li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> ap-beijing-6 </li>
<li> ap-beijing-7 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> eu-frankfurt-2 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
<li> ap-nanjing-3 </li>
<li> sa-saopaulo-1</li>
<li> ap-jakarta-1 </li>
<li> ap-jakarta-2 </li>
     */
    public $Zone;

    /**
     * @var string Availability zone description, such as Guangzhou Zone 3.
     */
    public $ZoneName;

    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string Availability zone status. Valid values: `AVAILABLE`: available; `UNAVAILABLE`: unavailable.
     */
    public $ZoneState;

    /**
     * @param string $Zone Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 (sold out)</li>
<li> ap-hongkong-2 </li>
<li> ap-hongkong-3 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 (sold out)</li>
<li> ap-guangzhou-1 (sold out)</li>
<li> ap-guangzhou-2 (sold out)</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-guangzhou-7 </li>
<li> ap-tokyo-1 </li>
<li> ap-tokyo-2 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-singapore-3 </li>
<li>ap-singapore-4 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-bangkok-2 </li>
<li> ap-shanghai-1 (sold out)</li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-shanghai-8 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 (sold out)</li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> ap-beijing-6 </li>
<li> ap-beijing-7 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> eu-frankfurt-2 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
<li> ap-nanjing-3 </li>
<li> sa-saopaulo-1</li>
<li> ap-jakarta-1 </li>
<li> ap-jakarta-2 </li>
     * @param string $ZoneName Availability zone description, such as Guangzhou Zone 3.
     * @param string $ZoneId Availability zone ID.
     * @param string $ZoneState Availability zone status. Valid values: `AVAILABLE`: available; `UNAVAILABLE`: unavailable.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }
    }
}
