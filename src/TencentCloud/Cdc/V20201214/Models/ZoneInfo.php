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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ information
 *
 * @method string getZone() Obtain AZ name
 * @method void setZone(string $Zone) Set AZ name
 * @method string getZoneName() Obtain AZ description
 * @method void setZoneName(string $ZoneName) Set AZ description
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getZoneState() Obtain AZ status: AVAILABLE or UNAVAILABLE AVAILABLE means the AZ is available while UNAVAILABLE means the AZ is unavailable.
 * @method void setZoneState(string $ZoneState) Set AZ status: AVAILABLE or UNAVAILABLE AVAILABLE means the AZ is available while UNAVAILABLE means the AZ is unavailable.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string AZ name
     */
    public $Zone;

    /**
     * @var string AZ description
     */
    public $ZoneName;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string AZ status: AVAILABLE or UNAVAILABLE AVAILABLE means the AZ is available while UNAVAILABLE means the AZ is unavailable.
     */
    public $ZoneState;

    /**
     * @param string $Zone AZ name
     * @param string $ZoneName AZ description
     * @param integer $ZoneId AZ ID
     * @param string $ZoneState AZ status: AVAILABLE or UNAVAILABLE AVAILABLE means the AZ is available while UNAVAILABLE means the AZ is unavailable.
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
