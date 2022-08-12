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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sender domain verification list structure
 *
 * @method string getIdentityName() Obtain Sender domain.
 * @method void setIdentityName(string $IdentityName) Set Sender domain.
 * @method string getIdentityType() Obtain Verification type. The value is fixed to `DOMAIN`.
 * @method void setIdentityType(string $IdentityType) Set Verification type. The value is fixed to `DOMAIN`.
 * @method boolean getSendingEnabled() Obtain Verification passed or not.
 * @method void setSendingEnabled(boolean $SendingEnabled) Set Verification passed or not.
 * @method integer getCurrentReputationLevel() Obtain Current reputation level
 * @method void setCurrentReputationLevel(integer $CurrentReputationLevel) Set Current reputation level
 * @method integer getDailyQuota() Obtain Maximum number of messages sent per day
 * @method void setDailyQuota(integer $DailyQuota) Set Maximum number of messages sent per day
 */
class EmailIdentity extends AbstractModel
{
    /**
     * @var string Sender domain.
     */
    public $IdentityName;

    /**
     * @var string Verification type. The value is fixed to `DOMAIN`.
     */
    public $IdentityType;

    /**
     * @var boolean Verification passed or not.
     */
    public $SendingEnabled;

    /**
     * @var integer Current reputation level
     */
    public $CurrentReputationLevel;

    /**
     * @var integer Maximum number of messages sent per day
     */
    public $DailyQuota;

    /**
     * @param string $IdentityName Sender domain.
     * @param string $IdentityType Verification type. The value is fixed to `DOMAIN`.
     * @param boolean $SendingEnabled Verification passed or not.
     * @param integer $CurrentReputationLevel Current reputation level
     * @param integer $DailyQuota Maximum number of messages sent per day
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
        if (array_key_exists("IdentityName",$param) and $param["IdentityName"] !== null) {
            $this->IdentityName = $param["IdentityName"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("SendingEnabled",$param) and $param["SendingEnabled"] !== null) {
            $this->SendingEnabled = $param["SendingEnabled"];
        }

        if (array_key_exists("CurrentReputationLevel",$param) and $param["CurrentReputationLevel"] !== null) {
            $this->CurrentReputationLevel = $param["CurrentReputationLevel"];
        }

        if (array_key_exists("DailyQuota",$param) and $param["DailyQuota"] !== null) {
            $this->DailyQuota = $param["DailyQuota"];
        }
    }
}
