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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Quality Rule Group
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceType() Obtain Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceType(integer $DatasourceType) Set Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonitorType() Obtain Monitoring Type: 1. Not Configured, 2. Associate Production Scheduling, 3. Offline Period Detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorType(integer $MonitorType) Set Monitoring Type: 1. Not Configured, 2. Associate Production Scheduling, 3. Offline Period Detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Associated Data Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Associated Data Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Associated Data Table Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Associated Data Table Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerName() Obtain Associated Data Table Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerName(string $TableOwnerName) Set Associated Data Table Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RuleGroupExecStrategy getExecStrategy() Obtain Execution policyNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecStrategy(RuleGroupExecStrategy $ExecStrategy) Set Execution policyNote: This field may return null, indicating that no valid value can be obtained.
 * @method RuleGroupSubscribe getSubscription() Obtain Execution policyNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubscription(RuleGroupSubscribe $Subscription) Set Execution policyNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getPermission() Obtain Permission Granted
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPermission(boolean $Permission) Set Permission Granted
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleCount() Obtain Number of Rules Configured
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleCount(integer $RuleCount) Set Number of Rules Configured
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getMonitorStatus() Obtain Monitoring Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorStatus(boolean $MonitorStatus) Set Monitoring Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTableOwnerUserId() Obtain Table Leader UserId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) Set Table Leader UserId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getStrategyConfig() Obtain Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStrategyConfig(boolean $StrategyConfig) Set Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSubscribeConfig() Obtain Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubscribeConfig(boolean $SubscribeConfig) Set Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDsEnvType() Obtain Data Source Environment: 0 or not returned. Undefined, 1. Production, 2. Development
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDsEnvType(integer $DsEnvType) Set Data Source Environment: 0 or not returned. Undefined, 1. Production, 2. Development
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroup extends AbstractModel
{
    /**
     * @var integer Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var string Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var integer Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceType;

    /**
     * @var integer Monitoring Type: 1. Not Configured, 2. Associate Production Scheduling, 3. Offline Period Detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorType;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Associated Data Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Associated Data Table Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Associated Data Table Owner
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerName;

    /**
     * @var RuleGroupExecStrategy Execution policyNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecStrategy;

    /**
     * @var RuleGroupSubscribe Execution policyNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Subscription;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var boolean Permission Granted
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Permission;

    /**
     * @var integer Number of Rules Configured
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleCount;

    /**
     * @var boolean Monitoring Status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorStatus;

    /**
     * @var integer Table Leader UserId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerUserId;

    /**
     * @var string Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StrategyConfig;

    /**
     * @var boolean Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubscribeConfig;

    /**
     * @var integer Data Source Environment: 0 or not returned. Undefined, 1. Production, 2. Development
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DsEnvType;

    /**
     * @param integer $RuleGroupId Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceType Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonitorType Monitoring Type: 1. Not Configured, 2. Associate Production Scheduling, 3. Offline Period Detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Associated Data Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Associated Data Table Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerName Associated Data Table Owner
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RuleGroupExecStrategy $ExecStrategy Execution policyNote: This field may return null, indicating that no valid value can be obtained.
     * @param RuleGroupSubscribe $Subscription Execution policyNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Permission Permission Granted
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleCount Number of Rules Configured
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $MonitorStatus Monitoring Status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TableOwnerUserId Table Leader UserId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $StrategyConfig Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $SubscribeConfig Execution Strategy Configured?
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DsEnvType Data Source Environment: 0 or not returned. Undefined, 1. Production, 2. Development
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("ExecStrategy",$param) and $param["ExecStrategy"] !== null) {
            $this->ExecStrategy = new RuleGroupExecStrategy();
            $this->ExecStrategy->deserialize($param["ExecStrategy"]);
        }

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = new RuleGroupSubscribe();
            $this->Subscription->deserialize($param["Subscription"]);
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("TableOwnerUserId",$param) and $param["TableOwnerUserId"] !== null) {
            $this->TableOwnerUserId = $param["TableOwnerUserId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StrategyConfig",$param) and $param["StrategyConfig"] !== null) {
            $this->StrategyConfig = $param["StrategyConfig"];
        }

        if (array_key_exists("SubscribeConfig",$param) and $param["SubscribeConfig"] !== null) {
            $this->SubscribeConfig = $param["SubscribeConfig"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }
    }
}
