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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot managed rules
 *
 * @method array getManagedIds() Obtain ID of the rule to be enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setManagedIds(array $ManagedIds) Set ID of the rule to be enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getRuleID() Obtain ID of the rule being applied
 * @method void setRuleID(integer $RuleID) Set ID of the rule being applied
 * @method string getAction() Obtain Action of the rule. Values: `drop`; `trans`; `monitor`; `alg`.
 * @method void setAction(string $Action) Set Action of the rule. Values: `drop`; `trans`; `monitor`; `alg`.
 * @method integer getPunishTime() Obtain The amount of time the IP is blocked
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPunishTime(integer $PunishTime) Set The amount of time the IP is blocked
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getPunishTimeUnit() Obtain Unit of IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set Unit of IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getName() Obtain Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPageId() Obtain ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPageId(integer $PageId) Set ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRedirectUrl() Obtain Redirection URL, which must be a subdomain name of your site encoded by URLEncode
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set Redirection URL, which must be a subdomain name of your site encoded by URLEncode
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getResponseCode() Obtain Response code returned after redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseCode(integer $ResponseCode) Set Response code returned after redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTransManagedIds() Obtain ID of the rule that is set to allow requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTransManagedIds(array $TransManagedIds) Set ID of the rule that is set to allow requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getAlgManagedIds() Obtain ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getCapManagedIds() Obtain ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCapManagedIds(array $CapManagedIds) Set ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getMonManagedIds() Obtain ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMonManagedIds(array $MonManagedIds) Set ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getDropManagedIds() Obtain ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDropManagedIds(array $DropManagedIds) Set ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class BotManagedRule extends AbstractModel
{
    /**
     * @var array ID of the rule to be enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ManagedIds;

    /**
     * @var integer ID of the rule being applied
     */
    public $RuleID;

    /**
     * @var string Action of the rule. Values: `drop`; `trans`; `monitor`; `alg`.
     */
    public $Action;

    /**
     * @var integer The amount of time the IP is blocked
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PunishTime;

    /**
     * @var string Unit of IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PunishTimeUnit;

    /**
     * @var string Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PageId;

    /**
     * @var string Redirection URL, which must be a subdomain name of your site encoded by URLEncode
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RedirectUrl;

    /**
     * @var integer Response code returned after redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseCode;

    /**
     * @var array ID of the rule that is set to allow requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TransManagedIds;

    /**
     * @var array ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AlgManagedIds;

    /**
     * @var array ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CapManagedIds;

    /**
     * @var array ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MonManagedIds;

    /**
     * @var array ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DropManagedIds;

    /**
     * @param array $ManagedIds ID of the rule to be enabled
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $RuleID ID of the rule being applied
     * @param string $Action Action of the rule. Values: `drop`; `trans`; `monitor`; `alg`.
     * @param integer $PunishTime The amount of time the IP is blocked
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $PunishTimeUnit Unit of IP blocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Name Name of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PageId ID of the custom block page
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RedirectUrl Redirection URL, which must be a subdomain name of your site encoded by URLEncode
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ResponseCode Response code returned after redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $TransManagedIds ID of the rule that is set to allow requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $AlgManagedIds ID of the rule that is set to verify requests by JavaScript challenge
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $CapManagedIds ID of the rule that is set to verify requests by CAPTCHA
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $MonManagedIds ID of the rule that is set to observe requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $DropManagedIds ID of the rule that is set to block requests
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ManagedIds",$param) and $param["ManagedIds"] !== null) {
            $this->ManagedIds = $param["ManagedIds"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("TransManagedIds",$param) and $param["TransManagedIds"] !== null) {
            $this->TransManagedIds = $param["TransManagedIds"];
        }

        if (array_key_exists("AlgManagedIds",$param) and $param["AlgManagedIds"] !== null) {
            $this->AlgManagedIds = $param["AlgManagedIds"];
        }

        if (array_key_exists("CapManagedIds",$param) and $param["CapManagedIds"] !== null) {
            $this->CapManagedIds = $param["CapManagedIds"];
        }

        if (array_key_exists("MonManagedIds",$param) and $param["MonManagedIds"] !== null) {
            $this->MonManagedIds = $param["MonManagedIds"];
        }

        if (array_key_exists("DropManagedIds",$param) and $param["DropManagedIds"] !== null) {
            $this->DropManagedIds = $param["DropManagedIds"];
        }
    }
}
