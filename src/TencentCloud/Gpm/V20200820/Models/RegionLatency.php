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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The network delay time for players to reach different regions.
 *
 * @method string getRegion() Obtain Region
ap-beijing          North China (Beijing)
ap-chengdu          Southwest China (Chengdu)
ap-guangzhou           South China (Guangzhou)
ap-hongkong           Hong Kong/Macao/Taiwan (Hong Kong, China)
ap-seoul          Asia Pacific (Seoul)
ap-shanghai          East China (Shanghai)
ap-singapore          Southeast Asia (Singapore)
eu-frankfurt          Europe (Frankfurt)
na-siliconvalley          Western US (Silicon Valley)
na-toronto           North America (Toronto)
ap-mumbai           Asia Pacific (Mumbai)
na-ashburn          Eastern US (Virginia)
ap-bangkok           Asia Pacific (Bangkok)
eu-moscow           Europe (Moscow)
ap-tokyo           Asia Pacific (Tokyo)
 * @method void setRegion(string $Region) Set Region
ap-beijing          North China (Beijing)
ap-chengdu          Southwest China (Chengdu)
ap-guangzhou           South China (Guangzhou)
ap-hongkong           Hong Kong/Macao/Taiwan (Hong Kong, China)
ap-seoul          Asia Pacific (Seoul)
ap-shanghai          East China (Shanghai)
ap-singapore          Southeast Asia (Singapore)
eu-frankfurt          Europe (Frankfurt)
na-siliconvalley          Western US (Silicon Valley)
na-toronto           North America (Toronto)
ap-mumbai           Asia Pacific (Mumbai)
na-ashburn          Eastern US (Virginia)
ap-bangkok           Asia Pacific (Bangkok)
eu-moscow           Europe (Moscow)
ap-tokyo           Asia Pacific (Tokyo)
 * @method integer getLatency() Obtain Delay time in ms. Value range: 0 - 999999
 * @method void setLatency(integer $Latency) Set Delay time in ms. Value range: 0 - 999999
 */
class RegionLatency extends AbstractModel
{
    /**
     * @var string Region
ap-beijing          North China (Beijing)
ap-chengdu          Southwest China (Chengdu)
ap-guangzhou           South China (Guangzhou)
ap-hongkong           Hong Kong/Macao/Taiwan (Hong Kong, China)
ap-seoul          Asia Pacific (Seoul)
ap-shanghai          East China (Shanghai)
ap-singapore          Southeast Asia (Singapore)
eu-frankfurt          Europe (Frankfurt)
na-siliconvalley          Western US (Silicon Valley)
na-toronto           North America (Toronto)
ap-mumbai           Asia Pacific (Mumbai)
na-ashburn          Eastern US (Virginia)
ap-bangkok           Asia Pacific (Bangkok)
eu-moscow           Europe (Moscow)
ap-tokyo           Asia Pacific (Tokyo)
     */
    public $Region;

    /**
     * @var integer Delay time in ms. Value range: 0 - 999999
     */
    public $Latency;

    /**
     * @param string $Region Region
ap-beijing          North China (Beijing)
ap-chengdu          Southwest China (Chengdu)
ap-guangzhou           South China (Guangzhou)
ap-hongkong           Hong Kong/Macao/Taiwan (Hong Kong, China)
ap-seoul          Asia Pacific (Seoul)
ap-shanghai          East China (Shanghai)
ap-singapore          Southeast Asia (Singapore)
eu-frankfurt          Europe (Frankfurt)
na-siliconvalley          Western US (Silicon Valley)
na-toronto           North America (Toronto)
ap-mumbai           Asia Pacific (Mumbai)
na-ashburn          Eastern US (Virginia)
ap-bangkok           Asia Pacific (Bangkok)
eu-moscow           Europe (Moscow)
ap-tokyo           Asia Pacific (Tokyo)
     * @param integer $Latency Delay time in ms. Value range: 0 - 999999
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

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }
    }
}
