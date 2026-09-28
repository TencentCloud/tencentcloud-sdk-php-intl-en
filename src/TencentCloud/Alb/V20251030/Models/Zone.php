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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Availability zone information
 *
 * @method string getLocalName() Obtain AZ name.
 * @method void setLocalName(string $LocalName) Set AZ name.
 * @method string getZoneId() Obtain AZ ID.
 * @method void setZoneId(string $ZoneId) Set AZ ID.
 * @method string getZoneStatus() Obtain Availability zone status
 * @method void setZoneStatus(string $ZoneStatus) Set Availability zone status
 */
class Zone extends AbstractModel
{
    /**
     * @var string AZ name.
     */
    public $LocalName;

    /**
     * @var string AZ ID.
     */
    public $ZoneId;

    /**
     * @var string Availability zone status
     */
    public $ZoneStatus;

    /**
     * @param string $LocalName AZ name.
     * @param string $ZoneId AZ ID.
     * @param string $ZoneStatus Availability zone status
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
        if (array_key_exists("LocalName",$param) and $param["LocalName"] !== null) {
            $this->LocalName = $param["LocalName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }
    }
}
