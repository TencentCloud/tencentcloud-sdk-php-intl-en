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
 * @method string getZoneId() Obtain Availability zone
 * @method void setZoneId(string $ZoneId) Set Availability zone
 * @method integer getIsInternalApp() Obtain Whether it is an internal application.
 * @method void setIsInternalApp(integer $IsInternalApp) Set Whether it is an internal application.
 * @method integer getAppId() Obtain Application identifier
 * @method void setAppId(integer $AppId) Set Application identifier
 * @method boolean getFlag() Obtain Indicates whether the AZ is sold out. true indicates sold out. false indicates not sold out.
 * @method void setFlag(boolean $Flag) Set Indicates whether the AZ is sold out. true indicates sold out. false indicates not sold out.
 * @method string getZoneName() Obtain Availability zone name.
 * @method void setZoneName(string $ZoneName) Set Availability zone name.
 * @method integer getZoneStatus() Obtain Availability zone status. enumerates example: 3: enable, 4: disable. availability zone status is subject to SoldOut.
 * @method void setZoneStatus(integer $ZoneStatus) Set Availability zone status. enumerates example: 3: enable, 4: disable. availability zone status is subject to SoldOut.
 * @method string getExflag() Obtain Extra flag
 * @method void setExflag(string $Exflag) Set Extra flag
 * @method string getSoldOut() Obtain Specifies whether the item is sold-out. valid values: true (sold-out), false (not sold out).
 * @method void setSoldOut(string $SoldOut) Set Specifies whether the item is sold-out. valid values: true (sold-out), false (not sold out).
 * @method array getSalesInfo() Obtain Specifies the sell-out information of the standard version.
 * @method void setSalesInfo(array $SalesInfo) Set Specifies the sell-out information of the standard version.
 * @method string getExtraFlag() Obtain Additional flag.
 * @method void setExtraFlag(string $ExtraFlag) Set Additional flag.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $ZoneId;

    /**
     * @var integer Whether it is an internal application.
     */
    public $IsInternalApp;

    /**
     * @var integer Application identifier
     */
    public $AppId;

    /**
     * @var boolean Indicates whether the AZ is sold out. true indicates sold out. false indicates not sold out.
     */
    public $Flag;

    /**
     * @var string Availability zone name.
     */
    public $ZoneName;

    /**
     * @var integer Availability zone status. enumerates example: 3: enable, 4: disable. availability zone status is subject to SoldOut.
     */
    public $ZoneStatus;

    /**
     * @var string Extra flag
     * @deprecated
     */
    public $Exflag;

    /**
     * @var string Specifies whether the item is sold-out. valid values: true (sold-out), false (not sold out).
     */
    public $SoldOut;

    /**
     * @var array Specifies the sell-out information of the standard version.
     */
    public $SalesInfo;

    /**
     * @var string Additional flag.
     */
    public $ExtraFlag;

    /**
     * @param string $ZoneId Availability zone
     * @param integer $IsInternalApp Whether it is an internal application.
     * @param integer $AppId Application identifier
     * @param boolean $Flag Indicates whether the AZ is sold out. true indicates sold out. false indicates not sold out.
     * @param string $ZoneName Availability zone name.
     * @param integer $ZoneStatus Availability zone status. enumerates example: 3: enable, 4: disable. availability zone status is subject to SoldOut.
     * @param string $Exflag Extra flag
     * @param string $SoldOut Specifies whether the item is sold-out. valid values: true (sold-out), false (not sold out).
     * @param array $SalesInfo Specifies the sell-out information of the standard version.
     * @param string $ExtraFlag Additional flag.
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
