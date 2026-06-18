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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseGeneral response structure.
 *
 * @method integer getLicenseCnt() Obtain <p>Total number of licenses (including unavailable licenses such as isolated and expired ones)</p>
 * @method void setLicenseCnt(integer $LicenseCnt) Set <p>Total number of licenses (including unavailable licenses such as isolated and expired ones)</p>
 * @method integer getAvailableLicenseCnt() Obtain <p>Available licenses</p>
 * @method void setAvailableLicenseCnt(integer $AvailableLicenseCnt) Set <p>Available licenses</p>
 * @method integer getAvailableProVersionLicenseCnt() Obtain <p>Number of available Pro Edition licenses (including postpaid licenses)</p>
 * @method void setAvailableProVersionLicenseCnt(integer $AvailableProVersionLicenseCnt) Set <p>Number of available Pro Edition licenses (including postpaid licenses)</p>
 * @method integer getAvailableFlagshipVersionLicenseCnt() Obtain <p>Number of available Ultimate Edition licenses</p>
 * @method void setAvailableFlagshipVersionLicenseCnt(integer $AvailableFlagshipVersionLicenseCnt) Set <p>Number of available Ultimate Edition licenses</p>
 * @method integer getNearExpiryLicenseCnt() Obtain <p>Number of licenses expiring within 15 days</p>
 * @method void setNearExpiryLicenseCnt(integer $NearExpiryLicenseCnt) Set <p>Number of licenses expiring within 15 days</p>
 * @method integer getExpireLicenseCnt() Obtain <p>Number of expired licenses (excluding deleted records)</p>
 * @method void setExpireLicenseCnt(integer $ExpireLicenseCnt) Set <p>Number of expired licenses (excluding deleted records)</p>
 * @method boolean getAutoOpenStatus() Obtain <p>Automatic upgrade switch status. Default value: false. true: enabled; false: disabled.</p>
 * @method void setAutoOpenStatus(boolean $AutoOpenStatus) Set <p>Automatic upgrade switch status. Default value: false. true: enabled; false: disabled.</p>
 * @method string getProtectType() Obtain <p>PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro Edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.</p>
 * @method void setProtectType(string $ProtectType) Set <p>PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro Edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.</p>
 * @method boolean getIsOpenStatusHistory() Obtain <p>Whether automatic upgrade has been enabled before</p>
 * @method void setIsOpenStatusHistory(boolean $IsOpenStatusHistory) Set <p>Whether automatic upgrade has been enabled before</p>
 * @method integer getUsedLicenseCnt() Obtain <p>Number of used licenses</p>
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) Set <p>Number of used licenses</p>
 * @method integer getNotExpiredLicenseCnt() Obtain <p>Number of unexpired licenses</p>
 * @method void setNotExpiredLicenseCnt(integer $NotExpiredLicenseCnt) Set <p>Number of unexpired licenses</p>
 * @method integer getFlagshipVersionLicenseCnt() Obtain <p>Total number of Ultimate Edition licenses (valid orders)</p>
 * @method void setFlagshipVersionLicenseCnt(integer $FlagshipVersionLicenseCnt) Set <p>Total number of Ultimate Edition licenses (valid orders)</p>
 * @method integer getProVersionLicenseCnt() Obtain <p>Total number of Pro Edition licenses (valid orders)</p>
 * @method void setProVersionLicenseCnt(integer $ProVersionLicenseCnt) Set <p>Total number of Pro Edition licenses (valid orders)</p>
 * @method integer getCwpVersionLicenseCnt() Obtain <p>Lightweight edition total number of licenses (valid order licenses count)</p>
 * @method void setCwpVersionLicenseCnt(integer $CwpVersionLicenseCnt) Set <p>Lightweight edition total number of licenses (valid order licenses count)</p>
 * @method integer getAvailableLHLicenseCnt() Obtain <p>Number of available Lightweight Edition licenses</p>
 * @method void setAvailableLHLicenseCnt(integer $AvailableLHLicenseCnt) Set <p>Number of available Lightweight Edition licenses</p>
 * @method boolean getAutoRepurchaseSwitch() Obtain <p>Auto-purchase switch. true: enabled; false: disabled.</p>
 * @method void setAutoRepurchaseSwitch(boolean $AutoRepurchaseSwitch) Set <p>Auto-purchase switch. true: enabled; false: disabled.</p>
 * @method boolean getAutoRepurchaseRenewSwitch() Obtain <p>Whether auto-purchase orders are automatically renewed. true: enabled; false: disabled.</p>
 * @method void setAutoRepurchaseRenewSwitch(boolean $AutoRepurchaseRenewSwitch) Set <p>Whether auto-purchase orders are automatically renewed. true: enabled; false: disabled.</p>
 * @method integer getDestroyOrderNum() Obtain <p>Number of terminated orders</p>
 * @method void setDestroyOrderNum(integer $DestroyOrderNum) Set <p>Number of terminated orders</p>
 * @method boolean getRepurchaseRenewSwitch() Obtain <p>Auto-renewal switch for auto-purchase. true: enabled; false: disabled.</p>
 * @method void setRepurchaseRenewSwitch(boolean $RepurchaseRenewSwitch) Set <p>Auto-renewal switch for auto-purchase. true: enabled; false: disabled.</p>
 * @method boolean getAutoBindRaspSwitch() Obtain <p>Whether to automatically bind RASP protection to newly added machines. false: disabled; true: enabled.</p>
 * @method void setAutoBindRaspSwitch(boolean $AutoBindRaspSwitch) Set <p>Whether to automatically bind RASP protection to newly added machines. false: disabled; true: enabled.</p>
 * @method boolean getAutoOpenRaspSwitch() Obtain <p>Whether to automatically enable RASP protection for newly added machines. false: disabled; true: enabled.</p>
 * @method void setAutoOpenRaspSwitch(boolean $AutoOpenRaspSwitch) Set <p>Whether to automatically enable RASP protection for newly added machines. false: disabled; true: enabled.</p>
 * @method boolean getAutoDowngradeSwitch() Obtain <p>Whether the auto-downgrade switch is enabled</p>
 * @method void setAutoDowngradeSwitch(boolean $AutoDowngradeSwitch) Set <p>Whether the auto-downgrade switch is enabled</p>
 * @method integer getAvailableAISecurityLicenseCnt() Obtain <p>Number of available AI Protection Edition licenses</p>
 * @method void setAvailableAISecurityLicenseCnt(integer $AvailableAISecurityLicenseCnt) Set <p>Number of available AI Protection Edition licenses</p>
 * @method integer getAISecurityVersionLicenseCnt() Obtain <p>Total number of AI Protection Edition licenses</p>
 * @method void setAISecurityVersionLicenseCnt(integer $AISecurityVersionLicenseCnt) Set <p>Total number of AI Protection Edition licenses</p>
 * @method integer getApplicationAvailableLicenseCnt() Obtain <p>Number of available licenses after combining application protection licenses with Ultimate Edition licenses</p>
 * @method void setApplicationAvailableLicenseCnt(integer $ApplicationAvailableLicenseCnt) Set <p>Number of available licenses after combining application protection licenses with Ultimate Edition licenses</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeLicenseGeneralResponse extends AbstractModel
{
    /**
     * @var integer <p>Total number of licenses (including unavailable licenses such as isolated and expired ones)</p>
     */
    public $LicenseCnt;

    /**
     * @var integer <p>Available licenses</p>
     */
    public $AvailableLicenseCnt;

    /**
     * @var integer <p>Number of available Pro Edition licenses (including postpaid licenses)</p>
     */
    public $AvailableProVersionLicenseCnt;

    /**
     * @var integer <p>Number of available Ultimate Edition licenses</p>
     */
    public $AvailableFlagshipVersionLicenseCnt;

    /**
     * @var integer <p>Number of licenses expiring within 15 days</p>
     */
    public $NearExpiryLicenseCnt;

    /**
     * @var integer <p>Number of expired licenses (excluding deleted records)</p>
     */
    public $ExpireLicenseCnt;

    /**
     * @var boolean <p>Automatic upgrade switch status. Default value: false. true: enabled; false: disabled.</p>
     */
    public $AutoOpenStatus;

    /**
     * @var string <p>PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro Edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.</p>
     */
    public $ProtectType;

    /**
     * @var boolean <p>Whether automatic upgrade has been enabled before</p>
     */
    public $IsOpenStatusHistory;

    /**
     * @var integer <p>Number of used licenses</p>
     */
    public $UsedLicenseCnt;

    /**
     * @var integer <p>Number of unexpired licenses</p>
     */
    public $NotExpiredLicenseCnt;

    /**
     * @var integer <p>Total number of Ultimate Edition licenses (valid orders)</p>
     */
    public $FlagshipVersionLicenseCnt;

    /**
     * @var integer <p>Total number of Pro Edition licenses (valid orders)</p>
     */
    public $ProVersionLicenseCnt;

    /**
     * @var integer <p>Lightweight edition total number of licenses (valid order licenses count)</p>
     */
    public $CwpVersionLicenseCnt;

    /**
     * @var integer <p>Number of available Lightweight Edition licenses</p>
     */
    public $AvailableLHLicenseCnt;

    /**
     * @var boolean <p>Auto-purchase switch. true: enabled; false: disabled.</p>
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var boolean <p>Whether auto-purchase orders are automatically renewed. true: enabled; false: disabled.</p>
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer <p>Number of terminated orders</p>
     */
    public $DestroyOrderNum;

    /**
     * @var boolean <p>Auto-renewal switch for auto-purchase. true: enabled; false: disabled.</p>
     */
    public $RepurchaseRenewSwitch;

    /**
     * @var boolean <p>Whether to automatically bind RASP protection to newly added machines. false: disabled; true: enabled.</p>
     */
    public $AutoBindRaspSwitch;

    /**
     * @var boolean <p>Whether to automatically enable RASP protection for newly added machines. false: disabled; true: enabled.</p>
     */
    public $AutoOpenRaspSwitch;

    /**
     * @var boolean <p>Whether the auto-downgrade switch is enabled</p>
     */
    public $AutoDowngradeSwitch;

    /**
     * @var integer <p>Number of available AI Protection Edition licenses</p>
     */
    public $AvailableAISecurityLicenseCnt;

    /**
     * @var integer <p>Total number of AI Protection Edition licenses</p>
     */
    public $AISecurityVersionLicenseCnt;

    /**
     * @var integer <p>Number of available licenses after combining application protection licenses with Ultimate Edition licenses</p>
     */
    public $ApplicationAvailableLicenseCnt;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $LicenseCnt <p>Total number of licenses (including unavailable licenses such as isolated and expired ones)</p>
     * @param integer $AvailableLicenseCnt <p>Available licenses</p>
     * @param integer $AvailableProVersionLicenseCnt <p>Number of available Pro Edition licenses (including postpaid licenses)</p>
     * @param integer $AvailableFlagshipVersionLicenseCnt <p>Number of available Ultimate Edition licenses</p>
     * @param integer $NearExpiryLicenseCnt <p>Number of licenses expiring within 15 days</p>
     * @param integer $ExpireLicenseCnt <p>Number of expired licenses (excluding deleted records)</p>
     * @param boolean $AutoOpenStatus <p>Automatic upgrade switch status. Default value: false. true: enabled; false: disabled.</p>
     * @param string $ProtectType <p>PROVERSION_POSTPAY: Pro Edition - postpaid; PROVERSION_PREPAY: Pro Edition - prepaid; FLAGSHIP_PREPAY: Ultimate Edition - prepaid.</p>
     * @param boolean $IsOpenStatusHistory <p>Whether automatic upgrade has been enabled before</p>
     * @param integer $UsedLicenseCnt <p>Number of used licenses</p>
     * @param integer $NotExpiredLicenseCnt <p>Number of unexpired licenses</p>
     * @param integer $FlagshipVersionLicenseCnt <p>Total number of Ultimate Edition licenses (valid orders)</p>
     * @param integer $ProVersionLicenseCnt <p>Total number of Pro Edition licenses (valid orders)</p>
     * @param integer $CwpVersionLicenseCnt <p>Lightweight edition total number of licenses (valid order licenses count)</p>
     * @param integer $AvailableLHLicenseCnt <p>Number of available Lightweight Edition licenses</p>
     * @param boolean $AutoRepurchaseSwitch <p>Auto-purchase switch. true: enabled; false: disabled.</p>
     * @param boolean $AutoRepurchaseRenewSwitch <p>Whether auto-purchase orders are automatically renewed. true: enabled; false: disabled.</p>
     * @param integer $DestroyOrderNum <p>Number of terminated orders</p>
     * @param boolean $RepurchaseRenewSwitch <p>Auto-renewal switch for auto-purchase. true: enabled; false: disabled.</p>
     * @param boolean $AutoBindRaspSwitch <p>Whether to automatically bind RASP protection to newly added machines. false: disabled; true: enabled.</p>
     * @param boolean $AutoOpenRaspSwitch <p>Whether to automatically enable RASP protection for newly added machines. false: disabled; true: enabled.</p>
     * @param boolean $AutoDowngradeSwitch <p>Whether the auto-downgrade switch is enabled</p>
     * @param integer $AvailableAISecurityLicenseCnt <p>Number of available AI Protection Edition licenses</p>
     * @param integer $AISecurityVersionLicenseCnt <p>Total number of AI Protection Edition licenses</p>
     * @param integer $ApplicationAvailableLicenseCnt <p>Number of available licenses after combining application protection licenses with Ultimate Edition licenses</p>
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

        if (array_key_exists("AutoBindRaspSwitch",$param) and $param["AutoBindRaspSwitch"] !== null) {
            $this->AutoBindRaspSwitch = $param["AutoBindRaspSwitch"];
        }

        if (array_key_exists("AutoOpenRaspSwitch",$param) and $param["AutoOpenRaspSwitch"] !== null) {
            $this->AutoOpenRaspSwitch = $param["AutoOpenRaspSwitch"];
        }

        if (array_key_exists("AutoDowngradeSwitch",$param) and $param["AutoDowngradeSwitch"] !== null) {
            $this->AutoDowngradeSwitch = $param["AutoDowngradeSwitch"];
        }

        if (array_key_exists("AvailableAISecurityLicenseCnt",$param) and $param["AvailableAISecurityLicenseCnt"] !== null) {
            $this->AvailableAISecurityLicenseCnt = $param["AvailableAISecurityLicenseCnt"];
        }

        if (array_key_exists("AISecurityVersionLicenseCnt",$param) and $param["AISecurityVersionLicenseCnt"] !== null) {
            $this->AISecurityVersionLicenseCnt = $param["AISecurityVersionLicenseCnt"];
        }

        if (array_key_exists("ApplicationAvailableLicenseCnt",$param) and $param["ApplicationAvailableLicenseCnt"] !== null) {
            $this->ApplicationAvailableLicenseCnt = $param["ApplicationAvailableLicenseCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
