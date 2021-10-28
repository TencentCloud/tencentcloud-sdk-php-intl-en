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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Zone information entity
 *
 * @method string getZoneId() Obtain Zone ID
 * @method void setZoneId(string $ZoneId) Set Zone ID
 * @method integer getIsInternalApp() Obtain Whether it is an internal application.
 * @method void setIsInternalApp(integer $IsInternalApp) Set Whether it is an internal application.
 * @method integer getAppId() Obtain Application ID
 * @method void setAppId(integer $AppId) Set Application ID
 * @method boolean getFlag() Obtain Flag
 * @method void setFlag(boolean $Flag) Set Flag
 * @method string getZoneName() Obtain Zone name
 * @method void setZoneName(string $ZoneName) Set Zone name
 * @method integer getZoneStatus() Obtain Zone status
 * @method void setZoneStatus(integer $ZoneStatus) Set Zone status
 * @method string getExflag() Obtain Extra flag
 * @method void setExflag(string $Exflag) Set Extra flag
 * @method string getSoldOut() Obtain JSON object. The key is the model. The value `true` means “sold out”, and `false` means “not sold out”.
 * @method void setSoldOut(string $SoldOut) Set JSON object. The key is the model. The value `true` means “sold out”, and `false` means “not sold out”.
 * @method array getSalesInfo() Obtain Information on whether Standard Edition has been sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSalesInfo(array $SalesInfo) Set Information on whether Standard Edition has been sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string Zone ID
     */
    public $ZoneId;

    /**
     * @var integer Whether it is an internal application.
     */
    public $IsInternalApp;

    /**
     * @var integer Application ID
     */
    public $AppId;

    /**
     * @var boolean Flag
     */
    public $Flag;

    /**
     * @var string Zone name
     */
    public $ZoneName;

    /**
     * @var integer Zone status
     */
    public $ZoneStatus;

    /**
     * @var string Extra flag
     */
    public $Exflag;

    /**
     * @var string JSON object. The key is the model. The value `true` means “sold out”, and `false` means “not sold out”.
     */
    public $SoldOut;

    /**
     * @var array Information on whether Standard Edition has been sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SalesInfo;

    /**
     * @param string $ZoneId Zone ID
     * @param integer $IsInternalApp Whether it is an internal application.
     * @param integer $AppId Application ID
     * @param boolean $Flag Flag
     * @param string $ZoneName Zone name
     * @param integer $ZoneStatus Zone status
     * @param string $Exflag Extra flag
     * @param string $SoldOut JSON object. The key is the model. The value `true` means “sold out”, and `false` means “not sold out”.
     * @param array $SalesInfo Information on whether Standard Edition has been sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
    }
}
