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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Items in the list of K8sApi abnormal request trends
 *
 * @method string getDate() Obtain <p>Date</p>
 * @method void setDate(string $Date) Set <p>Date</p>
 * @method integer getExceptionUARequestCount() Obtain <p>Number of abnormal UA request events.</p>
 * @method void setExceptionUARequestCount(integer $ExceptionUARequestCount) Set <p>Number of abnormal UA request events.</p>
 * @method integer getAnonymousUserRightCount() Obtain <p>Number of anonymous user permission events.</p>
 * @method void setAnonymousUserRightCount(integer $AnonymousUserRightCount) Set <p>Number of anonymous user permission events.</p>
 * @method integer getCredentialInformationObtainCount() Obtain <p>Number of credential information acquisition events.</p>
 * @method void setCredentialInformationObtainCount(integer $CredentialInformationObtainCount) Set <p>Number of credential information acquisition events.</p>
 * @method integer getSensitiveDataMountCount() Obtain <p>Number of sensitive data mount events.</p>
 * @method void setSensitiveDataMountCount(integer $SensitiveDataMountCount) Set <p>Number of sensitive data mount events.</p>
 * @method integer getCmdExecCount() Obtain <p>Number of command execution events.</p>
 * @method void setCmdExecCount(integer $CmdExecCount) Set <p>Number of command execution events.</p>
 * @method integer getAbnormalScheduledTaskCount() Obtain <p>Number of abnormal scheduled task events.</p>
 * @method void setAbnormalScheduledTaskCount(integer $AbnormalScheduledTaskCount) Set <p>Number of abnormal scheduled task events.</p>
 * @method integer getStaticsPodCreateCount() Obtain <p>Number of static Pod creations.</p>
 * @method void setStaticsPodCreateCount(integer $StaticsPodCreateCount) Set <p>Number of static Pod creations.</p>
 * @method integer getDoubtfulContainerCreateCount() Obtain <p>Number of suspicious container creations.</p>
 * @method void setDoubtfulContainerCreateCount(integer $DoubtfulContainerCreateCount) Set <p>Number of suspicious container creations.</p>
 * @method integer getUserDefinedRuleCount() Obtain <p>Number of custom rule events.</p>
 * @method void setUserDefinedRuleCount(integer $UserDefinedRuleCount) Set <p>Number of custom rule events.</p>
 * @method integer getAnonymousAccessCount() Obtain <p>Number of anonymous access events.</p>
 * @method void setAnonymousAccessCount(integer $AnonymousAccessCount) Set <p>Number of anonymous access events.</p>
 * @method integer getPrivilegeContainerCount() Obtain <p>Number of privileged container events.</p>
 * @method void setPrivilegeContainerCount(integer $PrivilegeContainerCount) Set <p>Number of privileged container events.</p>
 * @method array getRuleTypeCountSet() Obtain <p>Number of alarms corresponding to the rule type.</p>
 * @method void setRuleTypeCountSet(array $RuleTypeCountSet) Set <p>Number of alarms corresponding to the rule type.</p>
 */
class K8sApiAbnormalTendencyItem extends AbstractModel
{
    /**
     * @var string <p>Date</p>
     */
    public $Date;

    /**
     * @var integer <p>Number of abnormal UA request events.</p>
     */
    public $ExceptionUARequestCount;

    /**
     * @var integer <p>Number of anonymous user permission events.</p>
     */
    public $AnonymousUserRightCount;

    /**
     * @var integer <p>Number of credential information acquisition events.</p>
     */
    public $CredentialInformationObtainCount;

    /**
     * @var integer <p>Number of sensitive data mount events.</p>
     */
    public $SensitiveDataMountCount;

    /**
     * @var integer <p>Number of command execution events.</p>
     */
    public $CmdExecCount;

    /**
     * @var integer <p>Number of abnormal scheduled task events.</p>
     */
    public $AbnormalScheduledTaskCount;

    /**
     * @var integer <p>Number of static Pod creations.</p>
     */
    public $StaticsPodCreateCount;

    /**
     * @var integer <p>Number of suspicious container creations.</p>
     */
    public $DoubtfulContainerCreateCount;

    /**
     * @var integer <p>Number of custom rule events.</p>
     */
    public $UserDefinedRuleCount;

    /**
     * @var integer <p>Number of anonymous access events.</p>
     */
    public $AnonymousAccessCount;

    /**
     * @var integer <p>Number of privileged container events.</p>
     */
    public $PrivilegeContainerCount;

    /**
     * @var array <p>Number of alarms corresponding to the rule type.</p>
     */
    public $RuleTypeCountSet;

    /**
     * @param string $Date <p>Date</p>
     * @param integer $ExceptionUARequestCount <p>Number of abnormal UA request events.</p>
     * @param integer $AnonymousUserRightCount <p>Number of anonymous user permission events.</p>
     * @param integer $CredentialInformationObtainCount <p>Number of credential information acquisition events.</p>
     * @param integer $SensitiveDataMountCount <p>Number of sensitive data mount events.</p>
     * @param integer $CmdExecCount <p>Number of command execution events.</p>
     * @param integer $AbnormalScheduledTaskCount <p>Number of abnormal scheduled task events.</p>
     * @param integer $StaticsPodCreateCount <p>Number of static Pod creations.</p>
     * @param integer $DoubtfulContainerCreateCount <p>Number of suspicious container creations.</p>
     * @param integer $UserDefinedRuleCount <p>Number of custom rule events.</p>
     * @param integer $AnonymousAccessCount <p>Number of anonymous access events.</p>
     * @param integer $PrivilegeContainerCount <p>Number of privileged container events.</p>
     * @param array $RuleTypeCountSet <p>Number of alarms corresponding to the rule type.</p>
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

        if (array_key_exists("ExceptionUARequestCount",$param) and $param["ExceptionUARequestCount"] !== null) {
            $this->ExceptionUARequestCount = $param["ExceptionUARequestCount"];
        }

        if (array_key_exists("AnonymousUserRightCount",$param) and $param["AnonymousUserRightCount"] !== null) {
            $this->AnonymousUserRightCount = $param["AnonymousUserRightCount"];
        }

        if (array_key_exists("CredentialInformationObtainCount",$param) and $param["CredentialInformationObtainCount"] !== null) {
            $this->CredentialInformationObtainCount = $param["CredentialInformationObtainCount"];
        }

        if (array_key_exists("SensitiveDataMountCount",$param) and $param["SensitiveDataMountCount"] !== null) {
            $this->SensitiveDataMountCount = $param["SensitiveDataMountCount"];
        }

        if (array_key_exists("CmdExecCount",$param) and $param["CmdExecCount"] !== null) {
            $this->CmdExecCount = $param["CmdExecCount"];
        }

        if (array_key_exists("AbnormalScheduledTaskCount",$param) and $param["AbnormalScheduledTaskCount"] !== null) {
            $this->AbnormalScheduledTaskCount = $param["AbnormalScheduledTaskCount"];
        }

        if (array_key_exists("StaticsPodCreateCount",$param) and $param["StaticsPodCreateCount"] !== null) {
            $this->StaticsPodCreateCount = $param["StaticsPodCreateCount"];
        }

        if (array_key_exists("DoubtfulContainerCreateCount",$param) and $param["DoubtfulContainerCreateCount"] !== null) {
            $this->DoubtfulContainerCreateCount = $param["DoubtfulContainerCreateCount"];
        }

        if (array_key_exists("UserDefinedRuleCount",$param) and $param["UserDefinedRuleCount"] !== null) {
            $this->UserDefinedRuleCount = $param["UserDefinedRuleCount"];
        }

        if (array_key_exists("AnonymousAccessCount",$param) and $param["AnonymousAccessCount"] !== null) {
            $this->AnonymousAccessCount = $param["AnonymousAccessCount"];
        }

        if (array_key_exists("PrivilegeContainerCount",$param) and $param["PrivilegeContainerCount"] !== null) {
            $this->PrivilegeContainerCount = $param["PrivilegeContainerCount"];
        }

        if (array_key_exists("RuleTypeCountSet",$param) and $param["RuleTypeCountSet"] !== null) {
            $this->RuleTypeCountSet = [];
            foreach ($param["RuleTypeCountSet"] as $key => $value){
                $obj = new K8SAPIRuleTypeCountItem();
                $obj->deserialize($value);
                array_push($this->RuleTypeCountSet, $obj);
            }
        }
    }
}
