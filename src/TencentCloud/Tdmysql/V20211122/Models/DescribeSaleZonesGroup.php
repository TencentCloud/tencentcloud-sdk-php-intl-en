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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query sales regions and recommend availability zone combinations
 *
 * @method integer getZoneNum() Obtain <p>Number of availability zones</p>
 * @method void setZoneNum(integer $ZoneNum) Set <p>Number of availability zones</p>
 * @method array getZones() Obtain <p>Availability zone combination</p>
 * @method void setZones(array $Zones) Set <p>Availability zone combination</p>
 * @method array getSupportTypes() Obtain <p>Supported types</p>
 * @method void setSupportTypes(array $SupportTypes) Set <p>Supported types</p>
 * @method array getAvailableDiskTypes() Obtain <p>Supported disk</p><p>Enumeration value:</p><ul><li>CLOUD_TCS: Local disk</li><li>CLOUD_HSSD: Enhanced cloud disk</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableDiskTypes(array $AvailableDiskTypes) Set <p>Supported disk</p><p>Enumeration value:</p><ul><li>CLOUD_TCS: Local disk</li><li>CLOUD_HSSD: Enhanced cloud disk</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSupportServerless() Obtain <p>Whether serverless is supported</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) Set <p>Whether serverless is supported</p>
 */
class DescribeSaleZonesGroup extends AbstractModel
{
    /**
     * @var integer <p>Number of availability zones</p>
     */
    public $ZoneNum;

    /**
     * @var array <p>Availability zone combination</p>
     */
    public $Zones;

    /**
     * @var array <p>Supported types</p>
     */
    public $SupportTypes;

    /**
     * @var array <p>Supported disk</p><p>Enumeration value:</p><ul><li>CLOUD_TCS: Local disk</li><li>CLOUD_HSSD: Enhanced cloud disk</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableDiskTypes;

    /**
     * @var boolean <p>Whether serverless is supported</p>
     */
    public $IsSupportServerless;

    /**
     * @param integer $ZoneNum <p>Number of availability zones</p>
     * @param array $Zones <p>Availability zone combination</p>
     * @param array $SupportTypes <p>Supported types</p>
     * @param array $AvailableDiskTypes <p>Supported disk</p><p>Enumeration value:</p><ul><li>CLOUD_TCS: Local disk</li><li>CLOUD_HSSD: Enhanced cloud disk</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSupportServerless <p>Whether serverless is supported</p>
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
        if (array_key_exists("ZoneNum",$param) and $param["ZoneNum"] !== null) {
            $this->ZoneNum = $param["ZoneNum"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SupportTypes",$param) and $param["SupportTypes"] !== null) {
            $this->SupportTypes = $param["SupportTypes"];
        }

        if (array_key_exists("AvailableDiskTypes",$param) and $param["AvailableDiskTypes"] !== null) {
            $this->AvailableDiskTypes = $param["AvailableDiskTypes"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
