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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Zone information entity
 *
 * @method string getZoneId() Obtain <p>Availability zone</p>
 * @method void setZoneId(string $ZoneId) Set <p>Availability zone</p>
 * @method integer getIsInternalApp() Obtain <p>Whether the APP is internal</p><p>Enumeration value:</p><ul><li>0: Public</li><li>1: Internal</li></ul><p>Default value: 0</p>
 * @method void setIsInternalApp(integer $IsInternalApp) Set <p>Whether the APP is internal</p><p>Enumeration value:</p><ul><li>0: Public</li><li>1: Internal</li></ul><p>Default value: 0</p>
 * @method integer getAppId() Obtain <p>AppID</p>
 * @method void setAppId(integer $AppId) Set <p>AppID</p>
 * @method boolean getFlag() Obtain <p>Flag indicating whether the availability zone is sold out. true indicates sold out, false indicates not sold out.</p>
 * @method void setFlag(boolean $Flag) Set <p>Flag indicating whether the availability zone is sold out. true indicates sold out, false indicates not sold out.</p>
 * @method string getZoneName() Obtain <p>Availability zone name</p>
 * @method void setZoneName(string $ZoneName) Set <p>Availability zone name</p>
 * @method integer getZoneStatus() Obtain <p>Availability zone status</p><p>Enumeration value:</p><ul><li>3: Enable</li><li>4: Disable</li></ul><p>AZ status is subject to SoldOut</p>
 * @method void setZoneStatus(integer $ZoneStatus) Set <p>Availability zone status</p><p>Enumeration value:</p><ul><li>3: Enable</li><li>4: Disable</li></ul><p>AZ status is subject to SoldOut</p>
 * @method string getExflag() Obtain <p>Additional flag</p>
 * @method void setExflag(string $Exflag) Set <p>Additional flag</p>
 * @method string getSoldOut() Obtain <p>true indicates sold out, false indicates not sold out.</p>
 * @method void setSoldOut(string $SoldOut) Set <p>true indicates sold out, false indicates not sold out.</p>
 * @method array getSalesInfo() Obtain <p>Standard version sell-out information</p>
 * @method void setSalesInfo(array $SalesInfo) Set <p>Standard version sell-out information</p>
 * @method string getExtraFlag() Obtain <p>Additional flag</p>
 * @method void setExtraFlag(string $ExtraFlag) Set <p>Additional flag</p>
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string <p>Availability zone</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Whether the APP is internal</p><p>Enumeration value:</p><ul><li>0: Public</li><li>1: Internal</li></ul><p>Default value: 0</p>
     */
    public $IsInternalApp;

    /**
     * @var integer <p>AppID</p>
     */
    public $AppId;

    /**
     * @var boolean <p>Flag indicating whether the availability zone is sold out. true indicates sold out, false indicates not sold out.</p>
     */
    public $Flag;

    /**
     * @var string <p>Availability zone name</p>
     */
    public $ZoneName;

    /**
     * @var integer <p>Availability zone status</p><p>Enumeration value:</p><ul><li>3: Enable</li><li>4: Disable</li></ul><p>AZ status is subject to SoldOut</p>
     */
    public $ZoneStatus;

    /**
     * @var string <p>Additional flag</p>
     * @deprecated
     */
    public $Exflag;

    /**
     * @var string <p>true indicates sold out, false indicates not sold out.</p>
     */
    public $SoldOut;

    /**
     * @var array <p>Standard version sell-out information</p>
     */
    public $SalesInfo;

    /**
     * @var string <p>Additional flag</p>
     */
    public $ExtraFlag;

    /**
     * @param string $ZoneId <p>Availability zone</p>
     * @param integer $IsInternalApp <p>Whether the APP is internal</p><p>Enumeration value:</p><ul><li>0: Public</li><li>1: Internal</li></ul><p>Default value: 0</p>
     * @param integer $AppId <p>AppID</p>
     * @param boolean $Flag <p>Flag indicating whether the availability zone is sold out. true indicates sold out, false indicates not sold out.</p>
     * @param string $ZoneName <p>Availability zone name</p>
     * @param integer $ZoneStatus <p>Availability zone status</p><p>Enumeration value:</p><ul><li>3: Enable</li><li>4: Disable</li></ul><p>AZ status is subject to SoldOut</p>
     * @param string $Exflag <p>Additional flag</p>
     * @param string $SoldOut <p>true indicates sold out, false indicates not sold out.</p>
     * @param array $SalesInfo <p>Standard version sell-out information</p>
     * @param string $ExtraFlag <p>Additional flag</p>
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

        if (array_key_exists("IsInternalApp",$param) and $param["IsInternalApp"] !== null) {
            $this->IsInternalApp = $param["IsInternalApp"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }

        if (array_key_exists("Exflag",$param) and $param["Exflag"] !== null) {
            $this->Exflag = $param["Exflag"];
        }

        if (array_key_exists("SoldOut",$param) and $param["SoldOut"] !== null) {
            $this->SoldOut = $param["SoldOut"];
        }

        if (array_key_exists("SalesInfo",$param) and $param["SalesInfo"] !== null) {
            $this->SalesInfo = [];
            foreach ($param["SalesInfo"] as $key => $value){
                $obj = new SaleInfo();
                $obj->deserialize($value);
                array_push($this->SalesInfo, $obj);
            }
        }

        if (array_key_exists("ExtraFlag",$param) and $param["ExtraFlag"] !== null) {
            $this->ExtraFlag = $param["ExtraFlag"];
        }
    }
}
