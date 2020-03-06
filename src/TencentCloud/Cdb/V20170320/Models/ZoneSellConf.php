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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getStatus() Obtain AZ status. Value range: 0 (not available), 1 (available), 2 (purchasable), 3 (not purchasable), 4 (not displayed)
 * @method void setStatus(integer $Status) Set AZ status. Value range: 0 (not available), 1 (available), 2 (purchasable), 3 (not purchasable), 4 (not displayed)
 * @method string getZoneName() Obtain AZ name
 * @method void setZoneName(string $ZoneName) Set AZ name
 * @method boolean getIsCustom() Obtain Whether it is a custom instance type
 * @method void setIsCustom(boolean $IsCustom) Set Whether it is a custom instance type
 * @method boolean getIsSupportDr() Obtain Whether disaster recovery is supported
 * @method void setIsSupportDr(boolean $IsSupportDr) Set Whether disaster recovery is supported
 * @method boolean getIsSupportVpc() Obtain Whether VPC is supported
 * @method void setIsSupportVpc(boolean $IsSupportVpc) Set Whether VPC is supported
 * @method integer getHourInstanceSaleMaxNum() Obtain Maximum purchasable quantity of hourly billed instances
 * @method void setHourInstanceSaleMaxNum(integer $HourInstanceSaleMaxNum) Set Maximum purchasable quantity of hourly billed instances
 * @method boolean getIsDefaultZone() Obtain Whether it is a default AZ
 * @method void setIsDefaultZone(boolean $IsDefaultZone) Set Whether it is a default AZ
 * @method boolean getIsBm() Obtain Whether it is a BM zone
 * @method void setIsBm(boolean $IsBm) Set Whether it is a BM zone
 * @method array getPayType() Obtain Supported billing method. Value range: 0 (monthly subscribed), 1 (hourly), 2 (postpaid)
 * @method void setPayType(array $PayType) Set Supported billing method. Value range: 0 (monthly subscribed), 1 (hourly), 2 (postpaid)
 * @method array getProtectMode() Obtain Data replication type. Value range: 0 (async), 1 (semi-sync), 2 (strong sync)
 * @method void setProtectMode(array $ProtectMode) Set Data replication type. Value range: 0 (async), 1 (semi-sync), 2 (strong sync)
 * @method string getZone() Obtain AZ name
 * @method void setZone(string $Zone) Set AZ name
 * @method array getSellType() Obtain Array of purchasable instance types
 * @method void setSellType(array $SellType) Set Array of purchasable instance types
 * @method ZoneConf getZoneConf() Obtain Multi-AZ information
 * @method void setZoneConf(ZoneConf $ZoneConf) Set Multi-AZ information
 * @method array getDrZone() Obtain Information of the supported disaster recovery AZ
 * @method void setDrZone(array $DrZone) Set Information of the supported disaster recovery AZ
 */

/**
 *AZ sale configurations
 */
class ZoneSellConf extends AbstractModel
{
    /**
     * @var integer AZ status. Value range: 0 (not available), 1 (available), 2 (purchasable), 3 (not purchasable), 4 (not displayed)
     */
    public $Status;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @var boolean Whether it is a custom instance type
     */
    public $IsCustom;

    /**
     * @var boolean Whether disaster recovery is supported
     */
    public $IsSupportDr;

    /**
     * @var boolean Whether VPC is supported
     */
    public $IsSupportVpc;

    /**
     * @var integer Maximum purchasable quantity of hourly billed instances
     */
    public $HourInstanceSaleMaxNum;

    /**
     * @var boolean Whether it is a default AZ
     */
    public $IsDefaultZone;

    /**
     * @var boolean Whether it is a BM zone
     */
    public $IsBm;

    /**
     * @var array Supported billing method. Value range: 0 (monthly subscribed), 1 (hourly), 2 (postpaid)
     */
    public $PayType;

    /**
     * @var array Data replication type. Value range: 0 (async), 1 (semi-sync), 2 (strong sync)
     */
    public $ProtectMode;

    /**
     * @var string AZ name
     */
    public $Zone;

    /**
     * @var array Array of purchasable instance types
     */
    public $SellType;

    /**
     * @var ZoneConf Multi-AZ information
     */
    public $ZoneConf;

    /**
     * @var array Information of the supported disaster recovery AZ
     */
    public $DrZone;
    /**
     * @param integer $Status AZ status. Value range: 0 (not available), 1 (available), 2 (purchasable), 3 (not purchasable), 4 (not displayed)
     * @param string $ZoneName AZ name
     * @param boolean $IsCustom Whether it is a custom instance type
     * @param boolean $IsSupportDr Whether disaster recovery is supported
     * @param boolean $IsSupportVpc Whether VPC is supported
     * @param integer $HourInstanceSaleMaxNum Maximum purchasable quantity of hourly billed instances
     * @param boolean $IsDefaultZone Whether it is a default AZ
     * @param boolean $IsBm Whether it is a BM zone
     * @param array $PayType Supported billing method. Value range: 0 (monthly subscribed), 1 (hourly), 2 (postpaid)
     * @param array $ProtectMode Data replication type. Value range: 0 (async), 1 (semi-sync), 2 (strong sync)
     * @param string $Zone AZ name
     * @param array $SellType Array of purchasable instance types
     * @param ZoneConf $ZoneConf Multi-AZ information
     * @param array $DrZone Information of the supported disaster recovery AZ
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }

        if (array_key_exists("IsSupportDr",$param) and $param["IsSupportDr"] !== null) {
            $this->IsSupportDr = $param["IsSupportDr"];
        }

        if (array_key_exists("IsSupportVpc",$param) and $param["IsSupportVpc"] !== null) {
            $this->IsSupportVpc = $param["IsSupportVpc"];
        }

        if (array_key_exists("HourInstanceSaleMaxNum",$param) and $param["HourInstanceSaleMaxNum"] !== null) {
            $this->HourInstanceSaleMaxNum = $param["HourInstanceSaleMaxNum"];
        }

        if (array_key_exists("IsDefaultZone",$param) and $param["IsDefaultZone"] !== null) {
            $this->IsDefaultZone = $param["IsDefaultZone"];
        }

        if (array_key_exists("IsBm",$param) and $param["IsBm"] !== null) {
            $this->IsBm = $param["IsBm"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SellType",$param) and $param["SellType"] !== null) {
            $this->SellType = [];
            foreach ($param["SellType"] as $key => $value){
                $obj = new SellType();
                $obj->deserialize($value);
                array_push($this->SellType, $obj);
            }
        }

        if (array_key_exists("ZoneConf",$param) and $param["ZoneConf"] !== null) {
            $this->ZoneConf = new ZoneConf();
            $this->ZoneConf->deserialize($param["ZoneConf"]);
        }

        if (array_key_exists("DrZone",$param) and $param["DrZone"] !== null) {
            $this->DrZone = $param["DrZone"];
        }
    }
}
