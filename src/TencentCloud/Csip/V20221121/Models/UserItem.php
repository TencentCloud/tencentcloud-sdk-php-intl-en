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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User information.
 *
 * @method integer getAppID() Obtain <p>Login user appid</p>
 * @method void setAppID(integer $AppID) Set <p>Login user appid</p>
 * @method integer getAccountType() Obtain <p>Type of user</p>
 * @method void setAccountType(integer $AccountType) Set <p>Type of user</p>
 * @method integer getPayType() Obtain <p>User payment mode</p>
 * @method void setPayType(integer $PayType) Set <p>User payment mode</p>
 * @method integer getTotalQuota() Obtain <p>Total quota count</p>
 * @method void setTotalQuota(integer $TotalQuota) Set <p>Total quota count</p>
 * @method integer getCostQuota() Obtain <p>Consumed quota count</p>
 * @method void setCostQuota(integer $CostQuota) Set <p>Consumed quota count</p>
 * @method array getProviders() Obtain <p>Cloud vendor information</p>
 * @method void setProviders(array $Providers) Set <p>Cloud vendor information</p>
 * @method string getQuotaFlushType() Obtain <p>refresh: update next time; expire: no longer update next time</p>
 * @method void setQuotaFlushType(string $QuotaFlushType) Set <p>refresh: update next time; expire: no longer update next time</p>
 * @method string getQuotaFlushTime() Obtain <p>Next quota refresh time</p>
 * @method void setQuotaFlushTime(string $QuotaFlushTime) Set <p>Next quota refresh time</p>
 * @method integer getQuotaSource() Obtain <p>Purchase type</p>
 * @method void setQuotaSource(integer $QuotaSource) Set <p>Purchase type</p>
 * @method integer getShareFromAppID() Obtain <p>The appid of the sharing party when shared, or 0 when purchased or out of quota</p>
 * @method void setShareFromAppID(integer $ShareFromAppID) Set <p>The appid of the sharing party when shared, or 0 when purchased or out of quota</p>
 * @method string getShareFromUser() Obtain <p>Quota sharing party account</p>
 * @method void setShareFromUser(string $ShareFromUser) Set <p>Quota sharing party account</p>
 */
class UserItem extends AbstractModel
{
    /**
     * @var integer <p>Login user appid</p>
     */
    public $AppID;

    /**
     * @var integer <p>Type of user</p>
     */
    public $AccountType;

    /**
     * @var integer <p>User payment mode</p>
     */
    public $PayType;

    /**
     * @var integer <p>Total quota count</p>
     */
    public $TotalQuota;

    /**
     * @var integer <p>Consumed quota count</p>
     */
    public $CostQuota;

    /**
     * @var array <p>Cloud vendor information</p>
     */
    public $Providers;

    /**
     * @var string <p>refresh: update next time; expire: no longer update next time</p>
     */
    public $QuotaFlushType;

    /**
     * @var string <p>Next quota refresh time</p>
     */
    public $QuotaFlushTime;

    /**
     * @var integer <p>Purchase type</p>
     */
    public $QuotaSource;

    /**
     * @var integer <p>The appid of the sharing party when shared, or 0 when purchased or out of quota</p>
     */
    public $ShareFromAppID;

    /**
     * @var string <p>Quota sharing party account</p>
     */
    public $ShareFromUser;

    /**
     * @param integer $AppID <p>Login user appid</p>
     * @param integer $AccountType <p>Type of user</p>
     * @param integer $PayType <p>User payment mode</p>
     * @param integer $TotalQuota <p>Total quota count</p>
     * @param integer $CostQuota <p>Consumed quota count</p>
     * @param array $Providers <p>Cloud vendor information</p>
     * @param string $QuotaFlushType <p>refresh: update next time; expire: no longer update next time</p>
     * @param string $QuotaFlushTime <p>Next quota refresh time</p>
     * @param integer $QuotaSource <p>Purchase type</p>
     * @param integer $ShareFromAppID <p>The appid of the sharing party when shared, or 0 when purchased or out of quota</p>
     * @param string $ShareFromUser <p>Quota sharing party account</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("CostQuota",$param) and $param["CostQuota"] !== null) {
            $this->CostQuota = $param["CostQuota"];
        }

        if (array_key_exists("Providers",$param) and $param["Providers"] !== null) {
            $this->Providers = $param["Providers"];
        }

        if (array_key_exists("QuotaFlushType",$param) and $param["QuotaFlushType"] !== null) {
            $this->QuotaFlushType = $param["QuotaFlushType"];
        }

        if (array_key_exists("QuotaFlushTime",$param) and $param["QuotaFlushTime"] !== null) {
            $this->QuotaFlushTime = $param["QuotaFlushTime"];
        }

        if (array_key_exists("QuotaSource",$param) and $param["QuotaSource"] !== null) {
            $this->QuotaSource = $param["QuotaSource"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("ShareFromUser",$param) and $param["ShareFromUser"] !== null) {
            $this->ShareFromUser = $param["ShareFromUser"];
        }
    }
}
