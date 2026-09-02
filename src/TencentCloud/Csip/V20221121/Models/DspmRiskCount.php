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
 * Dspm risk statistics count
 *
 * @method integer getUnprocessedRisk() Obtain Number of Pending Risks
 * @method void setUnprocessedRisk(integer $UnprocessedRisk) Set Number of Pending Risks
 * @method integer getConfigurationRisk() Obtain Configuration risk count
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risk count
 * @method integer getBaselineDeviation() Obtain Baseline risk count
 * @method void setBaselineDeviation(integer $BaselineDeviation) Set Baseline risk count
 * @method integer getLeakDetection() Obtain Number of leakage risks
 * @method void setLeakDetection(integer $LeakDetection) Set Number of leakage risks
 * @method integer getSQLBehaviorAnomaly() Obtain Number of SQL abnormal behavior risks
 * @method void setSQLBehaviorAnomaly(integer $SQLBehaviorAnomaly) Set Number of SQL abnormal behavior risks
 * @method integer getPermissionAnomaly() Obtain Number of permission exception risks
 * @method void setPermissionAnomaly(integer $PermissionAnomaly) Set Number of permission exception risks
 * @method integer getLoginBehaviorAnomaly() Obtain Number of login behavior anomaly risks
 * @method void setLoginBehaviorAnomaly(integer $LoginBehaviorAnomaly) Set Number of login behavior anomaly risks
 * @method integer getAttackSurfaceRisk() Obtain Number of attack surface risks
 * @method void setAttackSurfaceRisk(integer $AttackSurfaceRisk) Set Number of attack surface risks
 * @method integer getAccountSensitiveOperation() Obtain Number of sensitive operations on the account
 * @method void setAccountSensitiveOperation(integer $AccountSensitiveOperation) Set Number of sensitive operations on the account
 * @method integer getUnprocessedAlarm() Obtain Pending alarm count
 * @method void setUnprocessedAlarm(integer $UnprocessedAlarm) Set Pending alarm count
 * @method integer getNumOfNewAlarmEvent() Obtain Newly-added event alarm
 * @method void setNumOfNewAlarmEvent(integer $NumOfNewAlarmEvent) Set Newly-added event alarm
 * @method integer getNumOfNewConfigRisk() Obtain Newly-added configuration risk
 * @method void setNumOfNewConfigRisk(integer $NumOfNewConfigRisk) Set Newly-added configuration risk
 */
class DspmRiskCount extends AbstractModel
{
    /**
     * @var integer Number of Pending Risks
     */
    public $UnprocessedRisk;

    /**
     * @var integer Configuration risk count
     * @deprecated
     */
    public $ConfigurationRisk;

    /**
     * @var integer Baseline risk count
     * @deprecated
     */
    public $BaselineDeviation;

    /**
     * @var integer Number of leakage risks
     * @deprecated
     */
    public $LeakDetection;

    /**
     * @var integer Number of SQL abnormal behavior risks
     */
    public $SQLBehaviorAnomaly;

    /**
     * @var integer Number of permission exception risks
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
     * @var integer Number of sensitive operations on the account
     */
    public $AccountSensitiveOperation;

    /**
     * @var integer Pending alarm count
     */
    public $UnprocessedAlarm;

    /**
     * @var integer Newly-added event alarm
     */
    public $NumOfNewAlarmEvent;

    /**
     * @var integer Newly-added configuration risk
     */
    public $NumOfNewConfigRisk;

    /**
     * @param integer $UnprocessedRisk Number of Pending Risks
     * @param integer $ConfigurationRisk Configuration risk count
     * @param integer $BaselineDeviation Baseline risk count
     * @param integer $LeakDetection Number of leakage risks
     * @param integer $SQLBehaviorAnomaly Number of SQL abnormal behavior risks
     * @param integer $PermissionAnomaly Number of permission exception risks
     * @param integer $LoginBehaviorAnomaly Number of login behavior anomaly risks
     * @param integer $AttackSurfaceRisk Number of attack surface risks
     * @param integer $AccountSensitiveOperation Number of sensitive operations on the account
     * @param integer $UnprocessedAlarm Pending alarm count
     * @param integer $NumOfNewAlarmEvent Newly-added event alarm
     * @param integer $NumOfNewConfigRisk Newly-added configuration risk
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
        if (array_key_exists("UnprocessedRisk",$param) and $param["UnprocessedRisk"] !== null) {
            $this->UnprocessedRisk = $param["UnprocessedRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("BaselineDeviation",$param) and $param["BaselineDeviation"] !== null) {
            $this->BaselineDeviation = $param["BaselineDeviation"];
        }

        if (array_key_exists("LeakDetection",$param) and $param["LeakDetection"] !== null) {
            $this->LeakDetection = $param["LeakDetection"];
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

        if (array_key_exists("UnprocessedAlarm",$param) and $param["UnprocessedAlarm"] !== null) {
            $this->UnprocessedAlarm = $param["UnprocessedAlarm"];
        }

        if (array_key_exists("NumOfNewAlarmEvent",$param) and $param["NumOfNewAlarmEvent"] !== null) {
            $this->NumOfNewAlarmEvent = $param["NumOfNewAlarmEvent"];
        }

        if (array_key_exists("NumOfNewConfigRisk",$param) and $param["NumOfNewConfigRisk"] !== null) {
            $this->NumOfNewConfigRisk = $param["NumOfNewConfigRisk"];
        }
    }
}
