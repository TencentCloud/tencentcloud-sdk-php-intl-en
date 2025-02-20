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
 * Site configuration information.
 *
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method ZoneConfig getZoneConfig() Obtain Site configuration information.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setZoneConfig(ZoneConfig $ZoneConfig) Set Site configuration information.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class ZoneConfigParameters extends AbstractModel
{
    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var ZoneConfig Site configuration information.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ZoneConfig;

    /**
     * @param string $ZoneName The site name.
     * @param ZoneConfig $ZoneConfig Site configuration information.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneConfig",$param) and $param["ZoneConfig"] !== null) {
            $this->ZoneConfig = new ZoneConfig();
            $this->ZoneConfig->deserialize($param["ZoneConfig"]);
        }
    }
}
