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
 * Configuration range of K8sApi abnormal event rules 
 *
 * @method string getScope() Obtain Range
System event:
ANONYMOUS_ACCESS: Anonymous access
ABNORMAL_UA_REQ: Abnormal UA request
ANONYMOUS_ABNORMAL_PERMISSION: Abnormal changes on permissions of an anonymous user
GET_CREDENTIALS: Credential information acquisition
MOUNT_SENSITIVE_PATH: Sensitive path mounting
COMMAND_RUN: Command execution
PRIVILEGE_CONTAINER: Privilege container
EXCEPTION_CRONTAB_TASK: Aabnormal scheduled task
STATICS_POD: Static pod creation
ABNORMAL_CREATE_POD: Abnormal pod creation
USER_DEFINED: User defined
 * @method void setScope(string $Scope) Set Range
System event:
ANONYMOUS_ACCESS: Anonymous access
ABNORMAL_UA_REQ: Abnormal UA request
ANONYMOUS_ABNORMAL_PERMISSION: Abnormal changes on permissions of an anonymous user
GET_CREDENTIALS: Credential information acquisition
MOUNT_SENSITIVE_PATH: Sensitive path mounting
COMMAND_RUN: Command execution
PRIVILEGE_CONTAINER: Privilege container
EXCEPTION_CRONTAB_TASK: Aabnormal scheduled task
STATICS_POD: Static pod creation
ABNORMAL_CREATE_POD: Abnormal pod creation
USER_DEFINED: User defined
 * @method string getAction() Obtain Action (RULE_MODE_ALERT: Alarm RULE_MODE_RELEASE: Release)
 * @method void setAction(string $Action) Set Action (RULE_MODE_ALERT: Alarm RULE_MODE_RELEASE: Release)
 * @method string getRiskLevel() Obtain Threat level: "HIGH": High-risk level; "MIDDLE": Middle-risk level; "LOW": Low-risk level; "NOTICE": Notice level
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRiskLevel(string $RiskLevel) Set Threat level: "HIGH": High-risk level; "MIDDLE": Middle-risk level; "LOW": Low-risk level; "NOTICE": Notice level
Note: This field may return `null`, indicating that no valid value was found.
 * @method boolean getStatus() Obtain Switch status (true: On; false: Off): applicable to system rules.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStatus(boolean $Status) Set Switch status (true: On; false: Off): applicable to system rules.
Note: This field may return `null`, indicating that no valid value was found.
 * @method boolean getIsDelete() Obtain Whether to delete: applicable to custom rule input parameters.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setIsDelete(boolean $IsDelete) Set Whether to delete: applicable to custom rule input parameters.
Note: This field may return `null`, indicating that no valid value was found.
 */
class K8sApiAbnormalRuleScopeInfo extends AbstractModel
{
    /**
     * @var string Range
System event:
ANONYMOUS_ACCESS: Anonymous access
ABNORMAL_UA_REQ: Abnormal UA request
ANONYMOUS_ABNORMAL_PERMISSION: Abnormal changes on permissions of an anonymous user
GET_CREDENTIALS: Credential information acquisition
MOUNT_SENSITIVE_PATH: Sensitive path mounting
COMMAND_RUN: Command execution
PRIVILEGE_CONTAINER: Privilege container
EXCEPTION_CRONTAB_TASK: Aabnormal scheduled task
STATICS_POD: Static pod creation
ABNORMAL_CREATE_POD: Abnormal pod creation
USER_DEFINED: User defined
     */
    public $Scope;

    /**
     * @var string Action (RULE_MODE_ALERT: Alarm RULE_MODE_RELEASE: Release)
     */
    public $Action;

    /**
     * @var string Threat level: "HIGH": High-risk level; "MIDDLE": Middle-risk level; "LOW": Low-risk level; "NOTICE": Notice level
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RiskLevel;

    /**
     * @var boolean Switch status (true: On; false: Off): applicable to system rules.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Status;

    /**
     * @var boolean Whether to delete: applicable to custom rule input parameters.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $IsDelete;

    /**
     * @param string $Scope Range
System event:
ANONYMOUS_ACCESS: Anonymous access
ABNORMAL_UA_REQ: Abnormal UA request
ANONYMOUS_ABNORMAL_PERMISSION: Abnormal changes on permissions of an anonymous user
GET_CREDENTIALS: Credential information acquisition
MOUNT_SENSITIVE_PATH: Sensitive path mounting
COMMAND_RUN: Command execution
PRIVILEGE_CONTAINER: Privilege container
EXCEPTION_CRONTAB_TASK: Aabnormal scheduled task
STATICS_POD: Static pod creation
ABNORMAL_CREATE_POD: Abnormal pod creation
USER_DEFINED: User defined
     * @param string $Action Action (RULE_MODE_ALERT: Alarm RULE_MODE_RELEASE: Release)
     * @param string $RiskLevel Threat level: "HIGH": High-risk level; "MIDDLE": Middle-risk level; "LOW": Low-risk level; "NOTICE": Notice level
Note: This field may return `null`, indicating that no valid value was found.
     * @param boolean $Status Switch status (true: On; false: Off): applicable to system rules.
Note: This field may return `null`, indicating that no valid value was found.
     * @param boolean $IsDelete Whether to delete: applicable to custom rule input parameters.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }
    }
}
