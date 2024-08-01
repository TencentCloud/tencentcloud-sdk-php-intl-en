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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataEngine details
 *
 * @method string getDataEngineName() Obtain DataEngine name
 * @method void setDataEngineName(string $DataEngineName) Set DataEngine name
 * @method string getEngineType() Obtain Engine type: spark/presto
 * @method void setEngineType(string $EngineType) Set Engine type: spark/presto
 * @method string getClusterType() Obtain Cluster resource type spark_private/presto_private/presto_cu/spark_cu
 * @method void setClusterType(string $ClusterType) Set Cluster resource type spark_private/presto_private/presto_cu/spark_cu
 * @method string getQuotaId() Obtain Quota ID
 * @method void setQuotaId(string $QuotaId) Set Quota ID
 * @method integer getState() Obtain Data engine status -2 deleted, -1 failed, 0 initializing, 1 suspended, 2 running, 3 ready to delete, and 4 deleting
 * @method void setState(integer $State) Set Data engine status -2 deleted, -1 failed, 0 initializing, 1 suspended, 2 running, 3 ready to delete, and 4 deleting
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getUpdateTime() Obtain Update time
 * @method void setUpdateTime(integer $UpdateTime) Set Update time
 * @method integer getSize() Obtain Cluster specifications
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setSize(integer $Size) Set Cluster specifications
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getMode() Obtain Billing mode: 0 shared mode, 1 pay-as-you-go, and 2 monthly subscription
 * @method void setMode(integer $Mode) Set Billing mode: 0 shared mode, 1 pay-as-you-go, and 2 monthly subscription
 * @method integer getMinClusters() Obtain Minimum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMinClusters(integer $MinClusters) Set Minimum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getMaxClusters() Obtain Maximum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMaxClusters(integer $MaxClusters) Set Maximum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getAutoResume() Obtain Whether to recover automatically
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setAutoResume(boolean $AutoResume) Set Whether to recover automatically
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getSpendAfter() Obtain Automatic recovery time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setSpendAfter(integer $SpendAfter) Set Automatic recovery time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getCidrBlock() Obtain Cluster IP range
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCidrBlock(string $CidrBlock) Set Cluster IP range
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getDefaultDataEngine() Obtain Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDefaultDataEngine(boolean $DefaultDataEngine) Set Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getMessage() Obtain Returned Message
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMessage(string $Message) Set Returned Message
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getDataEngineId() Obtain Engine ID
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
 * @method string getSubAccountUin() Obtain Operator
 * @method void setSubAccountUin(string $SubAccountUin) Set Operator
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method string getIsolatedTime() Obtain Isolation time
 * @method void setIsolatedTime(string $IsolatedTime) Set Isolation time
 * @method string getReversalTime() Obtain Rectification time
 * @method void setReversalTime(string $ReversalTime) Set Rectification time
 * @method string getUserAlias() Obtain Username
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setUserAlias(string $UserAlias) Set Username
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method array getTagList() Obtain Key-value pair collection
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTagList(array $TagList) Set Key-value pair collection
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method array getPermissions() Obtain Permissions owned by the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setPermissions(array $Permissions) Set Permissions owned by the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getAutoSuspend() Obtain Whether to automatically suspend the cluster: False (by default) means that the cluster is not automatically suspended; true means that the cluster is automatically suspended.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setAutoSuspend(boolean $AutoSuspend) Set Whether to automatically suspend the cluster: False (by default) means that the cluster is not automatically suspended; true means that the cluster is automatically suspended.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getCrontabResumeSuspend() Obtain Scheduling policy of starting and ending the cluster: 0 (by default) indicates turning off the scheduling policy; 1 indicates turning on the scheduling policy. (Note: The scheduling policy of starting and ending the cluster and the automatic suspension policy are mutually exclusive.)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) Set Scheduling policy of starting and ending the cluster: 0 (by default) indicates turning off the scheduling policy; 1 indicates turning on the scheduling policy. (Note: The scheduling policy of starting and ending the cluster and the automatic suspension policy are mutually exclusive.)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() Obtain Scheduled start and end policy. Complex type: Include start and end time and the cluster suspension strategy.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) Set Scheduled start and end policy. Complex type: Include start and end time and the cluster suspension strategy.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getEngineExecType() Obtain Type of the task executed by the engine. Valid value: SQL/BATCH
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineExecType(string $EngineExecType) Set Type of the task executed by the engine. Valid value: SQL/BATCH
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getRenewFlag() Obtain Automatic renewal flag: 0 means the initial state and there is no automatic renewal by default. If the user has the privilege to retain services with advanced payment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Automatic renewal flag: 0 means the initial state and there is no automatic renewal by default. If the user has the privilege to retain services with advanced payment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getAutoSuspendTime() Obtain Cluster automatic suspension time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) Set Cluster automatic suspension time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method array getNetworkConnectionSet() Obtain Network connection configuration
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setNetworkConnectionSet(array $NetworkConnectionSet) Set Network connection configuration
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getUiURL() Obtain Jump address of ui
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setUiURL(string $UiURL) Set Jump address of ui
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getResourceType() Obtain Type of the engine resource
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setResourceType(string $ResourceType) Set Type of the engine resource
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getImageVersionId() Obtain Cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setImageVersionId(string $ImageVersionId) Set Cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getChildImageVersionId() Obtain Minor cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setChildImageVersionId(string $ChildImageVersionId) Set Minor cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getImageVersionName() Obtain Cluster image version name
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setImageVersionName(string $ImageVersionName) Set Cluster image version name
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getStartStandbyCluster() Obtain Whether to enable the standby cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setStartStandbyCluster(boolean $StartStandbyCluster) Set Whether to enable the standby cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getElasticSwitch() Obtain Whether the elastic scaling of the spark jar monthly subscription cluster is enabled
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setElasticSwitch(boolean $ElasticSwitch) Set Whether the elastic scaling of the spark jar monthly subscription cluster is enabled
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getElasticLimit() Obtain Upper limit of the spark jar's monthly subscribed cluster elasticity
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setElasticLimit(integer $ElasticLimit) Set Upper limit of the spark jar's monthly subscribed cluster elasticity
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getDefaultHouse() Obtain Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDefaultHouse(boolean $DefaultHouse) Set Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getMaxConcurrency() Obtain Maximum concurrency number of a single cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set Maximum concurrency number of a single cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getTolerableQueueTime() Obtain Maximum time for the task to queue
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) Set Maximum time for the task to queue
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getUserAppId() Obtain User AppID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setUserAppId(integer $UserAppId) Set User AppID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getUserUin() Obtain User uin
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setUserUin(string $UserUin) Set User uin
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method SessionResourceTemplate getSessionResourceTemplate() Obtain SessionResourceTemplate
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) Set SessionResourceTemplate
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method boolean getAutoAuthorization() Obtain Automatic authorization switch
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setAutoAuthorization(boolean $AutoAuthorization) Set Automatic authorization switch
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getEngineGeneration() Obtain Engine version, supporting Native/SuperSQL
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineGeneration(string $EngineGeneration) Set Engine version, supporting Native/SuperSQL
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getEngineTypeDetail() Obtain Detailed engine type, supporting SparkSQL/SparkBatch/PrestoSQL/Kyuubi
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineTypeDetail(string $EngineTypeDetail) Set Detailed engine type, supporting SparkSQL/SparkBatch/PrestoSQL/Kyuubi
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getEngineNetworkId() Obtain Engine network ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineNetworkId(string $EngineNetworkId) Set Engine network ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getEngineResourceGroupCount() Obtain Number of resource groups associated with the standard engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineResourceGroupCount(integer $EngineResourceGroupCount) Set Number of resource groups associated with the standard engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getEngineResourceUsedCU() Obtain Current usage of the engine (Cu)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineResourceUsedCU(integer $EngineResourceUsedCU) Set Current usage of the engine (Cu)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method array getAccessInfos() Obtain Access information of the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setAccessInfos(array $AccessInfos) Set Access information of the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getEngineNetworkName() Obtain Name of the network where the engine is located
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setEngineNetworkName(string $EngineNetworkName) Set Name of the network where the engine is located
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class DataEngineInfo extends AbstractModel
{
    /**
     * @var string DataEngine name
     */
    public $DataEngineName;

    /**
     * @var string Engine type: spark/presto
     */
    public $EngineType;

    /**
     * @var string Cluster resource type spark_private/presto_private/presto_cu/spark_cu
     */
    public $ClusterType;

    /**
     * @var string Quota ID
     */
    public $QuotaId;

    /**
     * @var integer Data engine status -2 deleted, -1 failed, 0 initializing, 1 suspended, 2 running, 3 ready to delete, and 4 deleting
     */
    public $State;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Update time
     */
    public $UpdateTime;

    /**
     * @var integer Cluster specifications
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Size;

    /**
     * @var integer Billing mode: 0 shared mode, 1 pay-as-you-go, and 2 monthly subscription
     */
    public $Mode;

    /**
     * @var integer Minimum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $MinClusters;

    /**
     * @var integer Maximum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $MaxClusters;

    /**
     * @var boolean Whether to recover automatically
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $AutoResume;

    /**
     * @var integer Automatic recovery time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $SpendAfter;

    /**
     * @var string Cluster IP range
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $CidrBlock;

    /**
     * @var boolean Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $DefaultDataEngine;

    /**
     * @var string Returned Message
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Message;

    /**
     * @var string Engine ID
     */
    public $DataEngineId;

    /**
     * @var string Operator
     */
    public $SubAccountUin;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var string Isolation time
     */
    public $IsolatedTime;

    /**
     * @var string Rectification time
     */
    public $ReversalTime;

    /**
     * @var string Username
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $UserAlias;

    /**
     * @var array Key-value pair collection
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $TagList;

    /**
     * @var array Permissions owned by the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Permissions;

    /**
     * @var boolean Whether to automatically suspend the cluster: False (by default) means that the cluster is not automatically suspended; true means that the cluster is automatically suspended.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $AutoSuspend;

    /**
     * @var integer Scheduling policy of starting and ending the cluster: 0 (by default) indicates turning off the scheduling policy; 1 indicates turning on the scheduling policy. (Note: The scheduling policy of starting and ending the cluster and the automatic suspension policy are mutually exclusive.)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $CrontabResumeSuspend;

    /**
     * @var CrontabResumeSuspendStrategy Scheduled start and end policy. Complex type: Include start and end time and the cluster suspension strategy.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $CrontabResumeSuspendStrategy;

    /**
     * @var string Type of the task executed by the engine. Valid value: SQL/BATCH
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineExecType;

    /**
     * @var integer Automatic renewal flag: 0 means the initial state and there is no automatic renewal by default. If the user has the privilege to retain services with advanced payment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $RenewFlag;

    /**
     * @var integer Cluster automatic suspension time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $AutoSuspendTime;

    /**
     * @var array Network connection configuration
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $NetworkConnectionSet;

    /**
     * @var string Jump address of ui
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $UiURL;

    /**
     * @var string Type of the engine resource
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ResourceType;

    /**
     * @var string Cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ImageVersionId;

    /**
     * @var string Minor cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ChildImageVersionId;

    /**
     * @var string Cluster image version name
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ImageVersionName;

    /**
     * @var boolean Whether to enable the standby cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $StartStandbyCluster;

    /**
     * @var boolean Whether the elastic scaling of the spark jar monthly subscription cluster is enabled
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ElasticSwitch;

    /**
     * @var integer Upper limit of the spark jar's monthly subscribed cluster elasticity
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ElasticLimit;

    /**
     * @var boolean Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $DefaultHouse;

    /**
     * @var integer Maximum concurrency number of a single cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $MaxConcurrency;

    /**
     * @var integer Maximum time for the task to queue
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $TolerableQueueTime;

    /**
     * @var integer User AppID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $UserAppId;

    /**
     * @var string User uin
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $UserUin;

    /**
     * @var SessionResourceTemplate SessionResourceTemplate
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $SessionResourceTemplate;

    /**
     * @var boolean Automatic authorization switch
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $AutoAuthorization;

    /**
     * @var string Engine version, supporting Native/SuperSQL
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineGeneration;

    /**
     * @var string Detailed engine type, supporting SparkSQL/SparkBatch/PrestoSQL/Kyuubi
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineTypeDetail;

    /**
     * @var string Engine network ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineNetworkId;

    /**
     * @var integer Number of resource groups associated with the standard engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineResourceGroupCount;

    /**
     * @var integer Current usage of the engine (Cu)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineResourceUsedCU;

    /**
     * @var array Access information of the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $AccessInfos;

    /**
     * @var string Name of the network where the engine is located
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $EngineNetworkName;

    /**
     * @param string $DataEngineName DataEngine name
     * @param string $EngineType Engine type: spark/presto
     * @param string $ClusterType Cluster resource type spark_private/presto_private/presto_cu/spark_cu
     * @param string $QuotaId Quota ID
     * @param integer $State Data engine status -2 deleted, -1 failed, 0 initializing, 1 suspended, 2 running, 3 ready to delete, and 4 deleting
     * @param integer $CreateTime Creation time
     * @param integer $UpdateTime Update time
     * @param integer $Size Cluster specifications
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $Mode Billing mode: 0 shared mode, 1 pay-as-you-go, and 2 monthly subscription
     * @param integer $MinClusters Minimum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $MaxClusters Maximum number of clusters
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $AutoResume Whether to recover automatically
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $SpendAfter Automatic recovery time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $CidrBlock Cluster IP range
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $DefaultDataEngine Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $Message Returned Message
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $DataEngineId Engine ID
     * @param string $SubAccountUin Operator
     * @param string $ExpireTime Expiration time
     * @param string $IsolatedTime Isolation time
     * @param string $ReversalTime Rectification time
     * @param string $UserAlias Username
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param array $TagList Key-value pair collection
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param array $Permissions Permissions owned by the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $AutoSuspend Whether to automatically suspend the cluster: False (by default) means that the cluster is not automatically suspended; true means that the cluster is automatically suspended.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $CrontabResumeSuspend Scheduling policy of starting and ending the cluster: 0 (by default) indicates turning off the scheduling policy; 1 indicates turning on the scheduling policy. (Note: The scheduling policy of starting and ending the cluster and the automatic suspension policy are mutually exclusive.)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy Scheduled start and end policy. Complex type: Include start and end time and the cluster suspension strategy.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $EngineExecType Type of the task executed by the engine. Valid value: SQL/BATCH
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $RenewFlag Automatic renewal flag: 0 means the initial state and there is no automatic renewal by default. If the user has the privilege to retain services with advanced payment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal.
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $AutoSuspendTime Cluster automatic suspension time
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param array $NetworkConnectionSet Network connection configuration
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $UiURL Jump address of ui
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $ResourceType Type of the engine resource
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $ImageVersionId Cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $ChildImageVersionId Minor cluster image version ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $ImageVersionName Cluster image version name
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $StartStandbyCluster Whether to enable the standby cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $ElasticSwitch Whether the elastic scaling of the spark jar monthly subscription cluster is enabled
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $ElasticLimit Upper limit of the spark jar's monthly subscribed cluster elasticity
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $DefaultHouse Whether it is the default engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $MaxConcurrency Maximum concurrency number of a single cluster
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $TolerableQueueTime Maximum time for the task to queue
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $UserAppId User AppID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $UserUin User uin
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param SessionResourceTemplate $SessionResourceTemplate SessionResourceTemplate
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param boolean $AutoAuthorization Automatic authorization switch
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $EngineGeneration Engine version, supporting Native/SuperSQL
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $EngineTypeDetail Detailed engine type, supporting SparkSQL/SparkBatch/PrestoSQL/Kyuubi
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $EngineNetworkId Engine network ID
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $EngineResourceGroupCount Number of resource groups associated with the standard engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $EngineResourceUsedCU Current usage of the engine (Cu)
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param array $AccessInfos Access information of the engine
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $EngineNetworkName Name of the network where the engine is located
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("AutoResume",$param) and $param["AutoResume"] !== null) {
            $this->AutoResume = $param["AutoResume"];
        }

        if (array_key_exists("SpendAfter",$param) and $param["SpendAfter"] !== null) {
            $this->SpendAfter = $param["SpendAfter"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("DefaultDataEngine",$param) and $param["DefaultDataEngine"] !== null) {
            $this->DefaultDataEngine = $param["DefaultDataEngine"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ReversalTime",$param) and $param["ReversalTime"] !== null) {
            $this->ReversalTime = $param["ReversalTime"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("AutoSuspend",$param) and $param["AutoSuspend"] !== null) {
            $this->AutoSuspend = $param["AutoSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspend",$param) and $param["CrontabResumeSuspend"] !== null) {
            $this->CrontabResumeSuspend = $param["CrontabResumeSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspendStrategy",$param) and $param["CrontabResumeSuspendStrategy"] !== null) {
            $this->CrontabResumeSuspendStrategy = new CrontabResumeSuspendStrategy();
            $this->CrontabResumeSuspendStrategy->deserialize($param["CrontabResumeSuspendStrategy"]);
        }

        if (array_key_exists("EngineExecType",$param) and $param["EngineExecType"] !== null) {
            $this->EngineExecType = $param["EngineExecType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
        }

        if (array_key_exists("NetworkConnectionSet",$param) and $param["NetworkConnectionSet"] !== null) {
            $this->NetworkConnectionSet = [];
            foreach ($param["NetworkConnectionSet"] as $key => $value){
                $obj = new NetworkConnection();
                $obj->deserialize($value);
                array_push($this->NetworkConnectionSet, $obj);
            }
        }

        if (array_key_exists("UiURL",$param) and $param["UiURL"] !== null) {
            $this->UiURL = $param["UiURL"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }

        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("ImageVersionName",$param) and $param["ImageVersionName"] !== null) {
            $this->ImageVersionName = $param["ImageVersionName"];
        }

        if (array_key_exists("StartStandbyCluster",$param) and $param["StartStandbyCluster"] !== null) {
            $this->StartStandbyCluster = $param["StartStandbyCluster"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }

        if (array_key_exists("DefaultHouse",$param) and $param["DefaultHouse"] !== null) {
            $this->DefaultHouse = $param["DefaultHouse"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("UserAppId",$param) and $param["UserAppId"] !== null) {
            $this->UserAppId = $param["UserAppId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("SessionResourceTemplate",$param) and $param["SessionResourceTemplate"] !== null) {
            $this->SessionResourceTemplate = new SessionResourceTemplate();
            $this->SessionResourceTemplate->deserialize($param["SessionResourceTemplate"]);
        }

        if (array_key_exists("AutoAuthorization",$param) and $param["AutoAuthorization"] !== null) {
            $this->AutoAuthorization = $param["AutoAuthorization"];
        }

        if (array_key_exists("EngineGeneration",$param) and $param["EngineGeneration"] !== null) {
            $this->EngineGeneration = $param["EngineGeneration"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }

        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("EngineResourceGroupCount",$param) and $param["EngineResourceGroupCount"] !== null) {
            $this->EngineResourceGroupCount = $param["EngineResourceGroupCount"];
        }

        if (array_key_exists("EngineResourceUsedCU",$param) and $param["EngineResourceUsedCU"] !== null) {
            $this->EngineResourceUsedCU = $param["EngineResourceUsedCU"];
        }

        if (array_key_exists("AccessInfos",$param) and $param["AccessInfos"] !== null) {
            $this->AccessInfos = [];
            foreach ($param["AccessInfos"] as $key => $value){
                $obj = new AccessInfo();
                $obj->deserialize($value);
                array_push($this->AccessInfos, $obj);
            }
        }

        if (array_key_exists("EngineNetworkName",$param) and $param["EngineNetworkName"] !== null) {
            $this->EngineNetworkName = $param["EngineNetworkName"];
        }
    }
}
