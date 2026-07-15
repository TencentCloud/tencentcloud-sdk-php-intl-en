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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sender domain verification list structure
 *
 * @method string getIdentityName() Obtain <p>Sender domain name</p>
 * @method void setIdentityName(string $IdentityName) Set <p>Sender domain name</p>
 * @method string getIdentityType() Obtain <p>Validation type, fixed as DOMAIN</p>
 * @method void setIdentityType(string $IdentityType) Set <p>Validation type, fixed as DOMAIN</p>
 * @method boolean getSendingEnabled() Obtain <p>Whether verified</p>
 * @method void setSendingEnabled(boolean $SendingEnabled) Set <p>Whether verified</p>
 * @method integer getCurrentReputationLevel() Obtain <p>Current reputation level</p>
 * @method void setCurrentReputationLevel(integer $CurrentReputationLevel) Set <p>Current reputation level</p>
 * @method integer getDailyQuota() Obtain <p>Maximum message sending capacity of the current day</p>
 * @method void setDailyQuota(integer $DailyQuota) Set <p>Maximum message sending capacity of the current day</p>
 * @method array getSendIp() Obtain <p>Independent ip for domain configuration</p>
 * @method void setSendIp(array $SendIp) Set <p>Independent ip for domain configuration</p>
 * @method array getTagList() Obtain <p>tag</p>
 * @method void setTagList(array $TagList) Set <p>tag</p>
 * @method integer getDKIMOption() Obtain <p>dkim bit number</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul><p>Default value: 0</p>
 * @method void setDKIMOption(integer $DKIMOption) Set <p>dkim bit number</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul><p>Default value: 0</p>
 */
class EmailIdentity extends AbstractModel
{
    /**
     * @var string <p>Sender domain name</p>
     */
    public $IdentityName;

    /**
     * @var string <p>Validation type, fixed as DOMAIN</p>
     */
    public $IdentityType;

    /**
     * @var boolean <p>Whether verified</p>
     */
    public $SendingEnabled;

    /**
     * @var integer <p>Current reputation level</p>
     */
    public $CurrentReputationLevel;

    /**
     * @var integer <p>Maximum message sending capacity of the current day</p>
     */
    public $DailyQuota;

    /**
     * @var array <p>Independent ip for domain configuration</p>
     */
    public $SendIp;

    /**
     * @var array <p>tag</p>
     */
    public $TagList;

    /**
     * @var integer <p>dkim bit number</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul><p>Default value: 0</p>
     */
    public $DKIMOption;

    /**
     * @param string $IdentityName <p>Sender domain name</p>
     * @param string $IdentityType <p>Validation type, fixed as DOMAIN</p>
     * @param boolean $SendingEnabled <p>Whether verified</p>
     * @param integer $CurrentReputationLevel <p>Current reputation level</p>
     * @param integer $DailyQuota <p>Maximum message sending capacity of the current day</p>
     * @param array $SendIp <p>Independent ip for domain configuration</p>
     * @param array $TagList <p>tag</p>
     * @param integer $DKIMOption <p>dkim bit number</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul><p>Default value: 0</p>
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

        if (array_key_exists("SendIp",$param) and $param["SendIp"] !== null) {
            $this->SendIp = $param["SendIp"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }
    }
}
