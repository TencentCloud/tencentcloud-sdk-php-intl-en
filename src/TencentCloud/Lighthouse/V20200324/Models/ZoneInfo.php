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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ details
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getZoneName() Obtain Chinese name of AZ
 * @method void setZoneName(string $ZoneName) Set Chinese name of AZ
 * @method string getInstanceDisplayLabel() Obtain AZ tags on instance purchase page
 * @method void setInstanceDisplayLabel(string $InstanceDisplayLabel) Set AZ tags on instance purchase page
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Chinese name of AZ
     */
    public $ZoneName;

    /**
     * @var string AZ tags on instance purchase page
     */
    public $InstanceDisplayLabel;

    /**
     * @param string $Zone AZ
     * @param string $ZoneName Chinese name of AZ
     * @param string $InstanceDisplayLabel AZ tags on instance purchase page
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

        if (array_key_exists("InstanceDisplayLabel",$param) and $param["InstanceDisplayLabel"] !== null) {
            $this->InstanceDisplayLabel = $param["InstanceDisplayLabel"];
        }
    }
}
