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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trend of pending abnormal process events
 *
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method integer getProxyToolEventCount() Obtain Number of pending proxy events
 * @method void setProxyToolEventCount(integer $ProxyToolEventCount) Set Number of pending proxy events
 * @method integer getTransferControlEventCount() Obtain Number of pending lateral movement events
 * @method void setTransferControlEventCount(integer $TransferControlEventCount) Set Number of pending lateral movement events
 * @method integer getAttackCmdEventCount() Obtain Number of pending malicious command events
 * @method void setAttackCmdEventCount(integer $AttackCmdEventCount) Set Number of pending malicious command events
 * @method integer getReverseShellEventCount() Obtain Number of pending reverse shell events
 * @method void setReverseShellEventCount(integer $ReverseShellEventCount) Set Number of pending reverse shell events
 * @method integer getFilelessEventCount() Obtain Number of pending fileless execution events
 * @method void setFilelessEventCount(integer $FilelessEventCount) Set Number of pending fileless execution events
 * @method integer getRiskCmdEventCount() Obtain Number of pending high-risk command events
 * @method void setRiskCmdEventCount(integer $RiskCmdEventCount) Set Number of pending high-risk command events
 * @method integer getAbnormalChildProcessEventCount() Obtain Number of pending events of unusual startups found in the child process of the sensitive service
 * @method void setAbnormalChildProcessEventCount(integer $AbnormalChildProcessEventCount) Set Number of pending events of unusual startups found in the child process of the sensitive service
 * @method integer getUserDefinedRuleEventCount() Obtain Number of pending custom rule events
 * @method void setUserDefinedRuleEventCount(integer $UserDefinedRuleEventCount) Set Number of pending custom rule events
 */
class AbnormalProcessEventTendencyInfo extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var integer Number of pending proxy events
     */
    public $ProxyToolEventCount;

    /**
     * @var integer Number of pending lateral movement events
     */
    public $TransferControlEventCount;

    /**
     * @var integer Number of pending malicious command events
     */
    public $AttackCmdEventCount;

    /**
     * @var integer Number of pending reverse shell events
     */
    public $ReverseShellEventCount;

    /**
     * @var integer Number of pending fileless execution events
     */
    public $FilelessEventCount;

    /**
     * @var integer Number of pending high-risk command events
     */
    public $RiskCmdEventCount;

    /**
     * @var integer Number of pending events of unusual startups found in the child process of the sensitive service
     */
    public $AbnormalChildProcessEventCount;

    /**
     * @var integer Number of pending custom rule events
     */
    public $UserDefinedRuleEventCount;

    /**
     * @param string $Date Date
     * @param integer $ProxyToolEventCount Number of pending proxy events
     * @param integer $TransferControlEventCount Number of pending lateral movement events
     * @param integer $AttackCmdEventCount Number of pending malicious command events
     * @param integer $ReverseShellEventCount Number of pending reverse shell events
     * @param integer $FilelessEventCount Number of pending fileless execution events
     * @param integer $RiskCmdEventCount Number of pending high-risk command events
     * @param integer $AbnormalChildProcessEventCount Number of pending events of unusual startups found in the child process of the sensitive service
     * @param integer $UserDefinedRuleEventCount Number of pending custom rule events
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ProxyToolEventCount",$param) and $param["ProxyToolEventCount"] !== null) {
            $this->ProxyToolEventCount = $param["ProxyToolEventCount"];
        }

        if (array_key_exists("TransferControlEventCount",$param) and $param["TransferControlEventCount"] !== null) {
            $this->TransferControlEventCount = $param["TransferControlEventCount"];
        }

        if (array_key_exists("AttackCmdEventCount",$param) and $param["AttackCmdEventCount"] !== null) {
            $this->AttackCmdEventCount = $param["AttackCmdEventCount"];
        }

        if (array_key_exists("ReverseShellEventCount",$param) and $param["ReverseShellEventCount"] !== null) {
            $this->ReverseShellEventCount = $param["ReverseShellEventCount"];
        }

        if (array_key_exists("FilelessEventCount",$param) and $param["FilelessEventCount"] !== null) {
            $this->FilelessEventCount = $param["FilelessEventCount"];
        }

        if (array_key_exists("RiskCmdEventCount",$param) and $param["RiskCmdEventCount"] !== null) {
            $this->RiskCmdEventCount = $param["RiskCmdEventCount"];
        }

        if (array_key_exists("AbnormalChildProcessEventCount",$param) and $param["AbnormalChildProcessEventCount"] !== null) {
            $this->AbnormalChildProcessEventCount = $param["AbnormalChildProcessEventCount"];
        }

        if (array_key_exists("UserDefinedRuleEventCount",$param) and $param["UserDefinedRuleEventCount"] !== null) {
            $this->UserDefinedRuleEventCount = $param["UserDefinedRuleEventCount"];
        }
    }
}
