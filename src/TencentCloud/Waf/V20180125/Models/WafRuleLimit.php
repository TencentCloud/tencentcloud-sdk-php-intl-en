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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WAF module specifications
 *
 * @method integer getCC() Obtain Specifications of Custom CC
 * @method void setCC(integer $CC) Set Specifications of Custom CC
 * @method integer getCustomRule() Obtain Specifications for Custom Policy
 * @method void setCustomRule(integer $CustomRule) Set Specifications for Custom Policy
 * @method integer getIPControl() Obtain Specifications for Blocklist/Allowlist
 * @method void setIPControl(integer $IPControl) Set Specifications for Blocklist/Allowlist
 * @method integer getAntiLeak() Obtain Specifications for Information Leakage Prevention
 * @method void setAntiLeak(integer $AntiLeak) Set Specifications for Information Leakage Prevention
 * @method integer getAntiTamper() Obtain Tamper-proof Specifications
 * @method void setAntiTamper(integer $AntiTamper) Set Tamper-proof Specifications
 * @method integer getAutoCC() Obtain Specifications for Urgent CC
 * @method void setAutoCC(integer $AutoCC) Set Specifications for Urgent CC
 * @method integer getAreaBan() Obtain Specifications for Region Banning
 * @method void setAreaBan(integer $AreaBan) Set Specifications for Region Banning
 * @method integer getCCSession() Obtain Configure Session in Custom CC
 * @method void setCCSession(integer $CCSession) Set Configure Session in Custom CC
 * @method integer getAI() Obtain AI Specifications
 * @method void setAI(integer $AI) Set AI Specifications
 * @method integer getCustomWhite() Obtain Specifications of Precision Allowlist
 * @method void setCustomWhite(integer $CustomWhite) Set Specifications of Precision Allowlist
 * @method integer getApiSecurity() Obtain API Security Specification
 * @method void setApiSecurity(integer $ApiSecurity) Set API Security Specification
 * @method integer getClientMsg() Obtain Specifications for client traffic flag
 * @method void setClientMsg(integer $ClientMsg) Set Specifications for client traffic flag
 * @method integer getTrafficMarking() Obtain Specifications for Traffic Tagging
 * @method void setTrafficMarking(integer $TrafficMarking) Set Specifications for Traffic Tagging
 */
class WafRuleLimit extends AbstractModel
{
    /**
     * @var integer Specifications of Custom CC
     */
    public $CC;

    /**
     * @var integer Specifications for Custom Policy
     */
    public $CustomRule;

    /**
     * @var integer Specifications for Blocklist/Allowlist
     */
    public $IPControl;

    /**
     * @var integer Specifications for Information Leakage Prevention
     */
    public $AntiLeak;

    /**
     * @var integer Tamper-proof Specifications
     */
    public $AntiTamper;

    /**
     * @var integer Specifications for Urgent CC
     */
    public $AutoCC;

    /**
     * @var integer Specifications for Region Banning
     */
    public $AreaBan;

    /**
     * @var integer Configure Session in Custom CC
     */
    public $CCSession;

    /**
     * @var integer AI Specifications
     */
    public $AI;

    /**
     * @var integer Specifications of Precision Allowlist
     */
    public $CustomWhite;

    /**
     * @var integer API Security Specification
     */
    public $ApiSecurity;

    /**
     * @var integer Specifications for client traffic flag
     */
    public $ClientMsg;

    /**
     * @var integer Specifications for Traffic Tagging
     */
    public $TrafficMarking;

    /**
     * @param integer $CC Specifications of Custom CC
     * @param integer $CustomRule Specifications for Custom Policy
     * @param integer $IPControl Specifications for Blocklist/Allowlist
     * @param integer $AntiLeak Specifications for Information Leakage Prevention
     * @param integer $AntiTamper Tamper-proof Specifications
     * @param integer $AutoCC Specifications for Urgent CC
     * @param integer $AreaBan Specifications for Region Banning
     * @param integer $CCSession Configure Session in Custom CC
     * @param integer $AI AI Specifications
     * @param integer $CustomWhite Specifications of Precision Allowlist
     * @param integer $ApiSecurity API Security Specification
     * @param integer $ClientMsg Specifications for client traffic flag
     * @param integer $TrafficMarking Specifications for Traffic Tagging
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
        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = $param["CC"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = $param["CustomRule"];
        }

        if (array_key_exists("IPControl",$param) and $param["IPControl"] !== null) {
            $this->IPControl = $param["IPControl"];
        }

        if (array_key_exists("AntiLeak",$param) and $param["AntiLeak"] !== null) {
            $this->AntiLeak = $param["AntiLeak"];
        }

        if (array_key_exists("AntiTamper",$param) and $param["AntiTamper"] !== null) {
            $this->AntiTamper = $param["AntiTamper"];
        }

        if (array_key_exists("AutoCC",$param) and $param["AutoCC"] !== null) {
            $this->AutoCC = $param["AutoCC"];
        }

        if (array_key_exists("AreaBan",$param) and $param["AreaBan"] !== null) {
            $this->AreaBan = $param["AreaBan"];
        }

        if (array_key_exists("CCSession",$param) and $param["CCSession"] !== null) {
            $this->CCSession = $param["CCSession"];
        }

        if (array_key_exists("AI",$param) and $param["AI"] !== null) {
            $this->AI = $param["AI"];
        }

        if (array_key_exists("CustomWhite",$param) and $param["CustomWhite"] !== null) {
            $this->CustomWhite = $param["CustomWhite"];
        }

        if (array_key_exists("ApiSecurity",$param) and $param["ApiSecurity"] !== null) {
            $this->ApiSecurity = $param["ApiSecurity"];
        }

        if (array_key_exists("ClientMsg",$param) and $param["ClientMsg"] !== null) {
            $this->ClientMsg = $param["ClientMsg"];
        }

        if (array_key_exists("TrafficMarking",$param) and $param["TrafficMarking"] !== null) {
            $this->TrafficMarking = $param["TrafficMarking"];
        }
    }
}
