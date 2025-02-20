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
 * ModifyL7AccSetting request structure.
 *
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method ZoneConfig getZoneConfig() Obtain Site acceleration global configuration. the settings in this parameter will apply to all domain names under the site. you only need to modify the required settings directly, and other settings not passed in will remain unchanged.


 * @method void setZoneConfig(ZoneConfig $ZoneConfig) Set Site acceleration global configuration. the settings in this parameter will apply to all domain names under the site. you only need to modify the required settings directly, and other settings not passed in will remain unchanged.
 */
class ModifyL7AccSettingRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var ZoneConfig Site acceleration global configuration. the settings in this parameter will apply to all domain names under the site. you only need to modify the required settings directly, and other settings not passed in will remain unchanged.


     */
    public $ZoneConfig;

    /**
     * @param string $ZoneId Zone id.
     * @param ZoneConfig $ZoneConfig Site acceleration global configuration. the settings in this parameter will apply to all domain names under the site. you only need to modify the required settings directly, and other settings not passed in will remain unchanged.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneConfig",$param) and $param["ZoneConfig"] !== null) {
            $this->ZoneConfig = new ZoneConfig();
            $this->ZoneConfig->deserialize($param["ZoneConfig"]);
        }
    }
}
