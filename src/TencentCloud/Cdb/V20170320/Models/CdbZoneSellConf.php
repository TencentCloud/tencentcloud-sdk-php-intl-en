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
 * Purchasable specifications in an AZ
 *
 * @method integer getStatus() Obtain AZ status, which is used to indicate whether instances are purchasable. Valid values: `1` (purchasable), `3` (not purchasable), `4` (AZ not displayed)
 * @method void setStatus(integer $Status) Set AZ status, which is used to indicate whether instances are purchasable. Valid values: `1` (purchasable), `3` (not purchasable), `4` (AZ not displayed)
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
 * @method array getPayType() Obtain Supported billing method. Valid values: `0` (monthly subscribed), `1` (hourly billed), `2` (pay-as-you-go)
 * @method void setPayType(array $PayType) Set Supported billing method. Valid values: `0` (monthly subscribed), `1` (hourly billed), `2` (pay-as-you-go)
 * @method array getProtectMode() Obtain Data replication type. Valid values: `0` (async), `1` (semi-sync), `2` (strong sync)
 * @method void setProtectMode(array $ProtectMode) Set Data replication type. Valid values: `0` (async), `1` (semi-sync), `2` (strong sync)
 * @method string getZone() Obtain AZ name
 * @method void setZone(string $Zone) Set AZ name
 * @method ZoneConf getZoneConf() Obtain Multi-AZ information
 * @method void setZoneConf(ZoneConf $ZoneConf) Set Multi-AZ information
 * @method array getDrZone() Obtain Information of supported disaster recovery AZs
 * @method void setDrZone(array $DrZone) Set Information of supported disaster recovery AZs
 * @method boolean getIsSupportRemoteRo() Obtain Whether cross-AZ read-only access is supported
 * @method void setIsSupportRemoteRo(boolean $IsSupportRemoteRo) Set Whether cross-AZ read-only access is supported
 * @method array getRemoteRoZone() Obtain Information of supported cross-AZ read-only zone
 * @method void setRemoteRoZone(array $RemoteRoZone) Set Information of supported cross-AZ read-only zone
 * @method integer getExClusterStatus() Obtain AZ status, which is used to indicate whether dedicated instances are purchasable. Valid values: `1 (purchasable), `3` (not purchasable), `4` (AZ not displayed)
 * @method void setExClusterStatus(integer $ExClusterStatus) Set AZ status, which is used to indicate whether dedicated instances are purchasable. Valid values: `1 (purchasable), `3` (not purchasable), `4` (AZ not displayed)
 * @method array getExClusterRemoteRoZone() Obtain Information of cross-AZ read-only zones supported by a dedicated instance
 * @method void setExClusterRemoteRoZone(array $ExClusterRemoteRoZone) Set Information of cross-AZ read-only zones supported by a dedicated instance
 * @method ZoneConf getExClusterZoneConf() Obtain AZ information of a multi-AZ deployed dedicated instance.
 * @method void setExClusterZoneConf(ZoneConf $ExClusterZoneConf) Set AZ information of a multi-AZ deployed dedicated instance.
 * @method array getSellType() Obtain Array of purchasable instance types. The value of `configIds` and `configs` have a one-to-one correspondence.
 * @method void setSellType(array $SellType) Set Array of purchasable instance types. The value of `configIds` and `configs` have a one-to-one correspondence.
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method boolean getIsSupportIpv6() Obtain Whether IPv6 is supported
 * @method void setIsSupportIpv6(boolean $IsSupportIpv6) Set Whether IPv6 is supported
 * @method array getEngineType() Obtain Supported engine types for purchasable database
 * @method void setEngineType(array $EngineType) Set Supported engine types for purchasable database
 */
class CdbZoneSellConf extends AbstractModel
{
    /**
     * @var integer AZ status, which is used to indicate whether instances are purchasable. Valid values: `1` (purchasable), `3` (not purchasable), `4` (AZ not displayed)
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
     * @var array Supported billing method. Valid values: `0` (monthly subscribed), `1` (hourly billed), `2` (pay-as-you-go)
     */
    public $PayType;

    /**
     * @var array Data replication type. Valid values: `0` (async), `1` (semi-sync), `2` (strong sync)
     */
    public $ProtectMode;

    /**
     * @var string AZ name
     */
    public $Zone;

    /**
     * @var ZoneConf Multi-AZ information
     */
    public $ZoneConf;

    /**
     * @var array Information of supported disaster recovery AZs
     */
    public $DrZone;

    /**
     * @var boolean Whether cross-AZ read-only access is supported
     */
    public $IsSupportRemoteRo;

    /**
     * @var array Information of supported cross-AZ read-only zone
     */
    public $RemoteRoZone;

    /**
     * @var integer AZ status, which is used to indicate whether dedicated instances are purchasable. Valid values: `1 (purchasable), `3` (not purchasable), `4` (AZ not displayed)
     */
    public $ExClusterStatus;

    /**
     * @var array Information of cross-AZ read-only zones supported by a dedicated instance
     */
    public $ExClusterRemoteRoZone;

    /**
     * @var ZoneConf AZ information of a multi-AZ deployed dedicated instance.
     */
    public $ExClusterZoneConf;

    /**
     * @var array Array of purchasable instance types. The value of `configIds` and `configs` have a one-to-one correspondence.
     */
    public $SellType;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var boolean Whether IPv6 is supported
     */
    public $IsSupportIpv6;

    /**
     * @var array Supported engine types for purchasable database
     */
    public $EngineType;

    /**
     * @param integer $Status AZ status, which is used to indicate whether instances are purchasable. Valid values: `1` (purchasable), `3` (not purchasable), `4` (AZ not displayed)
     * @param string $ZoneName AZ name
     * @param boolean $IsCustom Whether it is a custom instance type
     * @param boolean $IsSupportDr Whether disaster recovery is supported
     * @param boolean $IsSupportVpc Whether VPC is supported
     * @param integer $HourInstanceSaleMaxNum Maximum purchasable quantity of hourly billed instances
     * @param boolean $IsDefaultZone Whether it is a default AZ
     * @param boolean $IsBm Whether it is a BM zone
     * @param array $PayType Supported billing method. Valid values: `0` (monthly subscribed), `1` (hourly billed), `2` (pay-as-you-go)
     * @param array $ProtectMode Data replication type. Valid values: `0` (async), `1` (semi-sync), `2` (strong sync)
     * @param string $Zone AZ name
     * @param ZoneConf $ZoneConf Multi-AZ information
     * @param array $DrZone Information of supported disaster recovery AZs
     * @param boolean $IsSupportRemoteRo Whether cross-AZ read-only access is supported
     * @param array $RemoteRoZone Information of supported cross-AZ read-only zone
     * @param integer $ExClusterStatus AZ status, which is used to indicate whether dedicated instances are purchasable. Valid values: `1 (purchasable), `3` (not purchasable), `4` (AZ not displayed)
     * @param array $ExClusterRemoteRoZone Information of cross-AZ read-only zones supported by a dedicated instance
     * @param ZoneConf $ExClusterZoneConf AZ information of a multi-AZ deployed dedicated instance.
     * @param array $SellType Array of purchasable instance types. The value of `configIds` and `configs` have a one-to-one correspondence.
     * @param integer $ZoneId AZ ID
     * @param boolean $IsSupportIpv6 Whether IPv6 is supported
     * @param array $EngineType Supported engine types for purchasable database
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

        if (array_key_exists("ZoneConf",$param) and $param["ZoneConf"] !== null) {
            $this->ZoneConf = new ZoneConf();
            $this->ZoneConf->deserialize($param["ZoneConf"]);
        }

        if (array_key_exists("DrZone",$param) and $param["DrZone"] !== null) {
            $this->DrZone = $param["DrZone"];
        }

        if (array_key_exists("IsSupportRemoteRo",$param) and $param["IsSupportRemoteRo"] !== null) {
            $this->IsSupportRemoteRo = $param["IsSupportRemoteRo"];
        }

        if (array_key_exists("RemoteRoZone",$param) and $param["RemoteRoZone"] !== null) {
            $this->RemoteRoZone = $param["RemoteRoZone"];
        }

        if (array_key_exists("ExClusterStatus",$param) and $param["ExClusterStatus"] !== null) {
            $this->ExClusterStatus = $param["ExClusterStatus"];
        }

        if (array_key_exists("ExClusterRemoteRoZone",$param) and $param["ExClusterRemoteRoZone"] !== null) {
            $this->ExClusterRemoteRoZone = $param["ExClusterRemoteRoZone"];
        }

        if (array_key_exists("ExClusterZoneConf",$param) and $param["ExClusterZoneConf"] !== null) {
            $this->ExClusterZoneConf = new ZoneConf();
            $this->ExClusterZoneConf->deserialize($param["ExClusterZoneConf"]);
        }

        if (array_key_exists("SellType",$param) and $param["SellType"] !== null) {
            $this->SellType = [];
            foreach ($param["SellType"] as $key => $value){
                $obj = new CdbSellType();
                $obj->deserialize($value);
                array_push($this->SellType, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("IsSupportIpv6",$param) and $param["IsSupportIpv6"] !== null) {
            $this->IsSupportIpv6 = $param["IsSupportIpv6"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
