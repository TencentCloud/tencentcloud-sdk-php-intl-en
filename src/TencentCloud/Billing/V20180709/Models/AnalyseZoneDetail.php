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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis availability zone complex type
 *
 * @method string getZoneId() Obtain Availability zone IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set Availability zone IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneName() Obtain Availability zone nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) Set Availability zone nameNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseZoneDetail extends AbstractModel
{
    /**
     * @var string Availability zone IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Availability zone nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;

    /**
     * @param string $ZoneId Availability zone IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneName Availability zone nameNote: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
