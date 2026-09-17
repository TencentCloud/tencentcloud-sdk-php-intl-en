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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection of AZs for the NAT gateway.
 *
 * @method string getZone() Obtain AZ name.
 * @method void setZone(string $Zone) Set AZ name.
 * @method integer getZoneId() Obtain AZ ID.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
 */
class NatZoneInfo extends AbstractModel
{
    /**
     * @var string AZ name.
     */
    public $Zone;

    /**
     * @var integer AZ ID.
     */
    public $ZoneId;

    /**
     * @param string $Zone AZ name.
     * @param integer $ZoneId AZ ID.
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
