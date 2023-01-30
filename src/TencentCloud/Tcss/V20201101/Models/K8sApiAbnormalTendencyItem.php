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
 * Items in the list of K8sApi abnormal request trends
 *
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method integer getExceptionUARequestCount() Obtain The number of abnormal UA request events
 * @method void setExceptionUARequestCount(integer $ExceptionUARequestCount) Set The number of abnormal UA request events
 * @method integer getAnonymousUserRightCount() Obtain The number of anonymous user permission events
 * @method void setAnonymousUserRightCount(integer $AnonymousUserRightCount) Set The number of anonymous user permission events
 * @method integer getCredentialInformationObtainCount() Obtain The number of credential information acquisition events
 * @method void setCredentialInformationObtainCount(integer $CredentialInformationObtainCount) Set The number of credential information acquisition events
 * @method integer getSensitiveDataMountCount() Obtain The number of sensitive data mounting events
 * @method void setSensitiveDataMountCount(integer $SensitiveDataMountCount) Set The number of sensitive data mounting events
 * @method integer getCmdExecCount() Obtain The number of command execution events
 * @method void setCmdExecCount(integer $CmdExecCount) Set The number of command execution events
 * @method integer getAbnormalScheduledTaskCount() Obtain The number of abnormal scheduled task events
 * @method void setAbnormalScheduledTaskCount(integer $AbnormalScheduledTaskCount) Set The number of abnormal scheduled task events
 * @method integer getStaticsPodCreateCount() Obtain The number of static pods created
 * @method void setStaticsPodCreateCount(integer $StaticsPodCreateCount) Set The number of static pods created
 * @method integer getDoubtfulContainerCreateCount() Obtain The number of suspicious containers created
 * @method void setDoubtfulContainerCreateCount(integer $DoubtfulContainerCreateCount) Set The number of suspicious containers created
 * @method integer getUserDefinedRuleCount() Obtain The number of custom rule events
 * @method void setUserDefinedRuleCount(integer $UserDefinedRuleCount) Set The number of custom rule events
 * @method integer getAnonymousAccessCount() Obtain The number of anonymous access events
 * @method void setAnonymousAccessCount(integer $AnonymousAccessCount) Set The number of anonymous access events
 * @method integer getPrivilegeContainerCount() Obtain The number of privilege container events
 * @method void setPrivilegeContainerCount(integer $PrivilegeContainerCount) Set The number of privilege container events
 */
class K8sApiAbnormalTendencyItem extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var integer The number of abnormal UA request events
     */
    public $ExceptionUARequestCount;

    /**
     * @var integer The number of anonymous user permission events
     */
    public $AnonymousUserRightCount;

    /**
     * @var integer The number of credential information acquisition events
     */
    public $CredentialInformationObtainCount;

    /**
     * @var integer The number of sensitive data mounting events
     */
    public $SensitiveDataMountCount;

    /**
     * @var integer The number of command execution events
     */
    public $CmdExecCount;

    /**
     * @var integer The number of abnormal scheduled task events
     */
    public $AbnormalScheduledTaskCount;

    /**
     * @var integer The number of static pods created
     */
    public $StaticsPodCreateCount;

    /**
     * @var integer The number of suspicious containers created
     */
    public $DoubtfulContainerCreateCount;

    /**
     * @var integer The number of custom rule events
     */
    public $UserDefinedRuleCount;

    /**
     * @var integer The number of anonymous access events
     */
    public $AnonymousAccessCount;

    /**
     * @var integer The number of privilege container events
     */
    public $PrivilegeContainerCount;

    /**
     * @param string $Date Date
     * @param integer $ExceptionUARequestCount The number of abnormal UA request events
     * @param integer $AnonymousUserRightCount The number of anonymous user permission events
     * @param integer $CredentialInformationObtainCount The number of credential information acquisition events
     * @param integer $SensitiveDataMountCount The number of sensitive data mounting events
     * @param integer $CmdExecCount The number of command execution events
     * @param integer $AbnormalScheduledTaskCount The number of abnormal scheduled task events
     * @param integer $StaticsPodCreateCount The number of static pods created
     * @param integer $DoubtfulContainerCreateCount The number of suspicious containers created
     * @param integer $UserDefinedRuleCount The number of custom rule events
     * @param integer $AnonymousAccessCount The number of anonymous access events
     * @param integer $PrivilegeContainerCount The number of privilege container events
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
    }
}
