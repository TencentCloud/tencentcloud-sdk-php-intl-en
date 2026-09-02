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
 * Dspm risk trend.
 *
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method integer getUncontrolledAccount() Obtain Number of unmanaged accounts
 * @method void setUncontrolledAccount(integer $UncontrolledAccount) Set Number of unmanaged accounts
 * @method integer getConfigurationRisk() Obtain Number of configuration risks
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Number of configuration risks
 * @method integer getBaselineRisk() Obtain Baseline risk count
 * @method void setBaselineRisk(integer $BaselineRisk) Set Baseline risk count
 * @method integer getLeakDetectionRisk() Obtain Number of leakage risks
 * @method void setLeakDetectionRisk(integer $LeakDetectionRisk) Set Number of leakage risks
 * @method integer getSQLBehaviorAnomaly() Obtain Number of SQL behavior anomaly risks
 * @method void setSQLBehaviorAnomaly(integer $SQLBehaviorAnomaly) Set Number of SQL behavior anomaly risks
 * @method integer getPermissionAnomaly() Obtain Number of permission abnormal risks
 * @method void setPermissionAnomaly(integer $PermissionAnomaly) Set Number of permission abnormal risks
 * @method integer getLoginBehaviorAnomaly() Obtain Number of login behavior anomaly risks
 * @method void setLoginBehaviorAnomaly(integer $LoginBehaviorAnomaly) Set Number of login behavior anomaly risks
 * @method integer getAttackSurfaceRisk() Obtain Number of attack surface risks
 * @method void setAttackSurfaceRisk(integer $AttackSurfaceRisk) Set Number of attack surface risks
 * @method integer getAccountSensitiveOperation() Obtain Number of sensitive operations for the account
 * @method void setAccountSensitiveOperation(integer $AccountSensitiveOperation) Set Number of sensitive operations for the account
 */
class DspmRiskTendency extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var integer Number of unmanaged accounts
     */
    public $UncontrolledAccount;

    /**
     * @var integer Number of configuration risks
     * @deprecated
     */
    public $ConfigurationRisk;

    /**
     * @var integer Baseline risk count
     * @deprecated
     */
    public $BaselineRisk;

    /**
     * @var integer Number of leakage risks
     * @deprecated
     */
    public $LeakDetectionRisk;

    /**
     * @var integer Number of SQL behavior anomaly risks
     */
    public $SQLBehaviorAnomaly;

    /**
     * @var integer Number of permission abnormal risks
     */
    public $PermissionAnomaly;

    /**
     * @var integer Number of login behavior anomaly risks
     */
    public $LoginBehaviorAnomaly;

    /**
     * @var integer Number of attack surface risks
     */
    public $AttackSurfaceRisk;

    /**
     * @var integer Number of sensitive operations for the account
     */
    public $AccountSensitiveOperation;

    /**
     * @param string $Date Date
     * @param integer $UncontrolledAccount Number of unmanaged accounts
     * @param integer $ConfigurationRisk Number of configuration risks
     * @param integer $BaselineRisk Baseline risk count
     * @param integer $LeakDetectionRisk Number of leakage risks
     * @param integer $SQLBehaviorAnomaly Number of SQL behavior anomaly risks
     * @param integer $PermissionAnomaly Number of permission abnormal risks
     * @param integer $LoginBehaviorAnomaly Number of login behavior anomaly risks
     * @param integer $AttackSurfaceRisk Number of attack surface risks
     * @param integer $AccountSensitiveOperation Number of sensitive operations for the account
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

        if (array_key_exists("UncontrolledAccount",$param) and $param["UncontrolledAccount"] !== null) {
            $this->UncontrolledAccount = $param["UncontrolledAccount"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("BaselineRisk",$param) and $param["BaselineRisk"] !== null) {
            $this->BaselineRisk = $param["BaselineRisk"];
        }

        if (array_key_exists("LeakDetectionRisk",$param) and $param["LeakDetectionRisk"] !== null) {
            $this->LeakDetectionRisk = $param["LeakDetectionRisk"];
        }

        if (array_key_exists("SQLBehaviorAnomaly",$param) and $param["SQLBehaviorAnomaly"] !== null) {
            $this->SQLBehaviorAnomaly = $param["SQLBehaviorAnomaly"];
        }

        if (array_key_exists("PermissionAnomaly",$param) and $param["PermissionAnomaly"] !== null) {
            $this->PermissionAnomaly = $param["PermissionAnomaly"];
        }

        if (array_key_exists("LoginBehaviorAnomaly",$param) and $param["LoginBehaviorAnomaly"] !== null) {
            $this->LoginBehaviorAnomaly = $param["LoginBehaviorAnomaly"];
        }

        if (array_key_exists("AttackSurfaceRisk",$param) and $param["AttackSurfaceRisk"] !== null) {
            $this->AttackSurfaceRisk = $param["AttackSurfaceRisk"];
        }

        if (array_key_exists("AccountSensitiveOperation",$param) and $param["AccountSensitiveOperation"] !== null) {
            $this->AccountSensitiveOperation = $param["AccountSensitiveOperation"];
        }
    }
}
