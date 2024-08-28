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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseGeneral response structure.
 *
 * @method integer getLicenseCnt() Obtain Total number of authorizations (including those that are isolated, expired, and in other states)
 * @method void setLicenseCnt(integer $LicenseCnt) Set Total number of authorizations (including those that are isolated, expired, and in other states)
 * @method integer getAvailableLicenseCnt() Obtain Number of available authorizations
 * @method void setAvailableLicenseCnt(integer $AvailableLicenseCnt) Set Number of available authorizations
 * @method integer getAvailableProVersionLicenseCnt() Obtain Number of available Professional Edition authorizations (including those in postpaid mode)
 * @method void setAvailableProVersionLicenseCnt(integer $AvailableProVersionLicenseCnt) Set Number of available Professional Edition authorizations (including those in postpaid mode)
 * @method integer getAvailableFlagshipVersionLicenseCnt() Obtain Number of available Ultimate Edition authorizations
 * @method void setAvailableFlagshipVersionLicenseCnt(integer $AvailableFlagshipVersionLicenseCnt) Set Number of available Ultimate Edition authorizations
 * @method integer getNearExpiryLicenseCnt() Obtain Number of authorizations about to expire (no more than 15 days left)
 * @method void setNearExpiryLicenseCnt(integer $NearExpiryLicenseCnt) Set Number of authorizations about to expire (no more than 15 days left)
 * @method integer getExpireLicenseCnt() Obtain Number of expired authorizations (excluding deleted ones)
 * @method void setExpireLicenseCnt(integer $ExpireLicenseCnt) Set Number of expired authorizations (excluding deleted ones)
 * @method boolean getAutoOpenStatus() Obtain Automatic upgrade enabling status. True: enabled; false: disabled. Default value: false.
 * @method void setAutoOpenStatus(boolean $AutoOpenStatus) Set Automatic upgrade enabling status. True: enabled; false: disabled. Default value: false.
 * @method string getProtectType() Obtain PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.
 * @method void setProtectType(string $ProtectType) Set PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.
 * @method boolean getIsOpenStatusHistory() Obtain Whether automatic upgrade has been enabled before
 * @method void setIsOpenStatusHistory(boolean $IsOpenStatusHistory) Set Whether automatic upgrade has been enabled before
 * @method integer getUsedLicenseCnt() Obtain Number of used authorizations
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) Set Number of used authorizations
 * @method integer getNotExpiredLicenseCnt() Obtain Number of authorizations that have not expired
 * @method void setNotExpiredLicenseCnt(integer $NotExpiredLicenseCnt) Set Number of authorizations that have not expired
 * @method integer getFlagshipVersionLicenseCnt() Obtain Total number of Ultimate Edition authorizations (valid orders)
 * @method void setFlagshipVersionLicenseCnt(integer $FlagshipVersionLicenseCnt) Set Total number of Ultimate Edition authorizations (valid orders)
 * @method integer getProVersionLicenseCnt() Obtain Total number of Pro Edition authorizations (valid orders)
 * @method void setProVersionLicenseCnt(integer $ProVersionLicenseCnt) Set Total number of Pro Edition authorizations (valid orders)
 * @method integer getCwpVersionLicenseCnt() Obtain Total number of Inclusive Edition authorizations (those of valid orders)
 * @method void setCwpVersionLicenseCnt(integer $CwpVersionLicenseCnt) Set Total number of Inclusive Edition authorizations (those of valid orders)
 * @method integer getAvailableLHLicenseCnt() Obtain Number of available Inclusive Edition authorizations
 * @method void setAvailableLHLicenseCnt(integer $AvailableLHLicenseCnt) Set Number of available Inclusive Edition authorizations
 * @method boolean getAutoRepurchaseSwitch() Obtain Auto-purchase switch, true for ON, false for OFF
 * @method void setAutoRepurchaseSwitch(boolean $AutoRepurchaseSwitch) Set Auto-purchase switch, true for ON, false for OFF
 * @method boolean getAutoRepurchaseRenewSwitch() Obtain Is auto-renewal required for auto-purchase orders, true for ON, false for OFF
 * @method void setAutoRepurchaseRenewSwitch(boolean $AutoRepurchaseRenewSwitch) Set Is auto-renewal required for auto-purchase orders, true for ON, false for OFF
 * @method integer getDestroyOrderNum() Obtain Number of terminated orders
 * @method void setDestroyOrderNum(integer $DestroyOrderNum) Set Number of terminated orders
 * @method boolean getRepurchaseRenewSwitch() Obtain Whether automatic renewal is enabled. True: enabled; false: disabled.
 * @method void setRepurchaseRenewSwitch(boolean $RepurchaseRenewSwitch) Set Whether automatic renewal is enabled. True: enabled; false: disabled.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeLicenseGeneralResponse extends AbstractModel
{
    /**
     * @var integer Total number of authorizations (including those that are isolated, expired, and in other states)
     */
    public $LicenseCnt;

    /**
     * @var integer Number of available authorizations
     */
    public $AvailableLicenseCnt;

    /**
     * @var integer Number of available Professional Edition authorizations (including those in postpaid mode)
     */
    public $AvailableProVersionLicenseCnt;

    /**
     * @var integer Number of available Ultimate Edition authorizations
     */
    public $AvailableFlagshipVersionLicenseCnt;

    /**
     * @var integer Number of authorizations about to expire (no more than 15 days left)
     */
    public $NearExpiryLicenseCnt;

    /**
     * @var integer Number of expired authorizations (excluding deleted ones)
     */
    public $ExpireLicenseCnt;

    /**
     * @var boolean Automatic upgrade enabling status. True: enabled; false: disabled. Default value: false.
     */
    public $AutoOpenStatus;

    /**
     * @var string PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.
     */
    public $ProtectType;

    /**
     * @var boolean Whether automatic upgrade has been enabled before
     */
    public $IsOpenStatusHistory;

    /**
     * @var integer Number of used authorizations
     */
    public $UsedLicenseCnt;

    /**
     * @var integer Number of authorizations that have not expired
     */
    public $NotExpiredLicenseCnt;

    /**
     * @var integer Total number of Ultimate Edition authorizations (valid orders)
     */
    public $FlagshipVersionLicenseCnt;

    /**
     * @var integer Total number of Pro Edition authorizations (valid orders)
     */
    public $ProVersionLicenseCnt;

    /**
     * @var integer Total number of Inclusive Edition authorizations (those of valid orders)
     */
    public $CwpVersionLicenseCnt;

    /**
     * @var integer Number of available Inclusive Edition authorizations
     */
    public $AvailableLHLicenseCnt;

    /**
     * @var boolean Auto-purchase switch, true for ON, false for OFF
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var boolean Is auto-renewal required for auto-purchase orders, true for ON, false for OFF
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer Number of terminated orders
     */
    public $DestroyOrderNum;

    /**
     * @var boolean Whether automatic renewal is enabled. True: enabled; false: disabled.
     */
    public $RepurchaseRenewSwitch;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $LicenseCnt Total number of authorizations (including those that are isolated, expired, and in other states)
     * @param integer $AvailableLicenseCnt Number of available authorizations
     * @param integer $AvailableProVersionLicenseCnt Number of available Professional Edition authorizations (including those in postpaid mode)
     * @param integer $AvailableFlagshipVersionLicenseCnt Number of available Ultimate Edition authorizations
     * @param integer $NearExpiryLicenseCnt Number of authorizations about to expire (no more than 15 days left)
     * @param integer $ExpireLicenseCnt Number of expired authorizations (excluding deleted ones)
     * @param boolean $AutoOpenStatus Automatic upgrade enabling status. True: enabled; false: disabled. Default value: false.
     * @param string $ProtectType PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.
     * @param boolean $IsOpenStatusHistory Whether automatic upgrade has been enabled before
     * @param integer $UsedLicenseCnt Number of used authorizations
     * @param integer $NotExpiredLicenseCnt Number of authorizations that have not expired
     * @param integer $FlagshipVersionLicenseCnt Total number of Ultimate Edition authorizations (valid orders)
     * @param integer $ProVersionLicenseCnt Total number of Pro Edition authorizations (valid orders)
     * @param integer $CwpVersionLicenseCnt Total number of Inclusive Edition authorizations (those of valid orders)
     * @param integer $AvailableLHLicenseCnt Number of available Inclusive Edition authorizations
     * @param boolean $AutoRepurchaseSwitch Auto-purchase switch, true for ON, false for OFF
     * @param boolean $AutoRepurchaseRenewSwitch Is auto-renewal required for auto-purchase orders, true for ON, false for OFF
     * @param integer $DestroyOrderNum Number of terminated orders
     * @param boolean $RepurchaseRenewSwitch Whether automatic renewal is enabled. True: enabled; false: disabled.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }

        if (array_key_exists("AvailableLicenseCnt",$param) and $param["AvailableLicenseCnt"] !== null) {
            $this->AvailableLicenseCnt = $param["AvailableLicenseCnt"];
        }

        if (array_key_exists("AvailableProVersionLicenseCnt",$param) and $param["AvailableProVersionLicenseCnt"] !== null) {
            $this->AvailableProVersionLicenseCnt = $param["AvailableProVersionLicenseCnt"];
        }

        if (array_key_exists("AvailableFlagshipVersionLicenseCnt",$param) and $param["AvailableFlagshipVersionLicenseCnt"] !== null) {
            $this->AvailableFlagshipVersionLicenseCnt = $param["AvailableFlagshipVersionLicenseCnt"];
        }

        if (array_key_exists("NearExpiryLicenseCnt",$param) and $param["NearExpiryLicenseCnt"] !== null) {
            $this->NearExpiryLicenseCnt = $param["NearExpiryLicenseCnt"];
        }

        if (array_key_exists("ExpireLicenseCnt",$param) and $param["ExpireLicenseCnt"] !== null) {
            $this->ExpireLicenseCnt = $param["ExpireLicenseCnt"];
        }

        if (array_key_exists("AutoOpenStatus",$param) and $param["AutoOpenStatus"] !== null) {
            $this->AutoOpenStatus = $param["AutoOpenStatus"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("IsOpenStatusHistory",$param) and $param["IsOpenStatusHistory"] !== null) {
            $this->IsOpenStatusHistory = $param["IsOpenStatusHistory"];
        }

        if (array_key_exists("UsedLicenseCnt",$param) and $param["UsedLicenseCnt"] !== null) {
            $this->UsedLicenseCnt = $param["UsedLicenseCnt"];
        }

        if (array_key_exists("NotExpiredLicenseCnt",$param) and $param["NotExpiredLicenseCnt"] !== null) {
            $this->NotExpiredLicenseCnt = $param["NotExpiredLicenseCnt"];
        }

        if (array_key_exists("FlagshipVersionLicenseCnt",$param) and $param["FlagshipVersionLicenseCnt"] !== null) {
            $this->FlagshipVersionLicenseCnt = $param["FlagshipVersionLicenseCnt"];
        }

        if (array_key_exists("ProVersionLicenseCnt",$param) and $param["ProVersionLicenseCnt"] !== null) {
            $this->ProVersionLicenseCnt = $param["ProVersionLicenseCnt"];
        }

        if (array_key_exists("CwpVersionLicenseCnt",$param) and $param["CwpVersionLicenseCnt"] !== null) {
            $this->CwpVersionLicenseCnt = $param["CwpVersionLicenseCnt"];
        }

        if (array_key_exists("AvailableLHLicenseCnt",$param) and $param["AvailableLHLicenseCnt"] !== null) {
            $this->AvailableLHLicenseCnt = $param["AvailableLHLicenseCnt"];
        }

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("AutoRepurchaseRenewSwitch",$param) and $param["AutoRepurchaseRenewSwitch"] !== null) {
            $this->AutoRepurchaseRenewSwitch = $param["AutoRepurchaseRenewSwitch"];
        }

        if (array_key_exists("DestroyOrderNum",$param) and $param["DestroyOrderNum"] !== null) {
            $this->DestroyOrderNum = $param["DestroyOrderNum"];
        }

        if (array_key_exists("RepurchaseRenewSwitch",$param) and $param["RepurchaseRenewSwitch"] !== null) {
            $this->RepurchaseRenewSwitch = $param["RepurchaseRenewSwitch"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
