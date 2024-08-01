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
 * CreateDataEngine request structure.
 *
 * @method string getEngineType() Obtain The engine type. Valid values: `spark` and `presto`.
 * @method void setEngineType(string $EngineType) Set The engine type. Valid values: `spark` and `presto`.
 * @method string getDataEngineName() Obtain The name of the virtual cluster.
 * @method void setDataEngineName(string $DataEngineName) Set The name of the virtual cluster.
 * @method string getClusterType() Obtain The cluster type. Valid values: `spark_private`, `presto_private`, `presto_cu`, and `spark_cu`.
 * @method void setClusterType(string $ClusterType) Set The cluster type. Valid values: `spark_private`, `presto_private`, `presto_cu`, and `spark_cu`.
 * @method integer getMode() Obtain The billing mode. Valid values: `0` (shared engine), `1` (pay-as-you-go), and `2` (monthly subscription).
 * @method void setMode(integer $Mode) Set The billing mode. Valid values: `0` (shared engine), `1` (pay-as-you-go), and `2` (monthly subscription).
 * @method boolean getAutoResume() Obtain Whether to automatically start the clusters.
 * @method void setAutoResume(boolean $AutoResume) Set Whether to automatically start the clusters.
 * @method integer getMinClusters() Obtain The minimum number of clusters.
 * @method void setMinClusters(integer $MinClusters) Set The minimum number of clusters.
 * @method integer getMaxClusters() Obtain The maximum number of clusters.
 * @method void setMaxClusters(integer $MaxClusters) Set The maximum number of clusters.
 * @method boolean getDefaultDataEngine() Obtain Whether the cluster is the default one.
 * @method void setDefaultDataEngine(boolean $DefaultDataEngine) Set Whether the cluster is the default one.
 * @method string getCidrBlock() Obtain The VPC CIDR block.
 * @method void setCidrBlock(string $CidrBlock) Set The VPC CIDR block.
 * @method string getMessage() Obtain The description.
 * @method void setMessage(string $Message) Set The description.
 * @method integer getSize() Obtain The cluster size.
 * @method void setSize(integer $Size) Set The cluster size.
 * @method integer getPayMode() Obtain The pay mode. Valid value: `0` (postpaid, default) and `1` (prepaid) (currently not available).
 * @method void setPayMode(integer $PayMode) Set The pay mode. Valid value: `0` (postpaid, default) and `1` (prepaid) (currently not available).
 * @method integer getTimeSpan() Obtain The usage duration of the resource. Postpaid: Fill in 3,600 as a fixed figure; prepaid: fill in a figure equal to or bigger than 1 which means purchasing resources for one month. The maximum figure is not bigger than 120. The default value is 1.
 * @method void setTimeSpan(integer $TimeSpan) Set The usage duration of the resource. Postpaid: Fill in 3,600 as a fixed figure; prepaid: fill in a figure equal to or bigger than 1 which means purchasing resources for one month. The maximum figure is not bigger than 120. The default value is 1.
 * @method string getTimeUnit() Obtain The unit of the resource period. Valid values: `s` (default) for the postpaid mode and `m` for the prepaid mode.
 * @method void setTimeUnit(string $TimeUnit) Set The unit of the resource period. Valid values: `s` (default) for the postpaid mode and `m` for the prepaid mode.
 * @method integer getAutoRenew() Obtain The auto-renewal status of the resource. For the postpaid mode, no renewal is required, and the value is fixed to `0`. For the prepaid mode, valid values are `0` (manual), `1` (auto), and `2` (no renewal). If this parameter is set to `0` for a key account in the prepaid mode, auto-renewal applies. It defaults to `0`.
 * @method void setAutoRenew(integer $AutoRenew) Set The auto-renewal status of the resource. For the postpaid mode, no renewal is required, and the value is fixed to `0`. For the prepaid mode, valid values are `0` (manual), `1` (auto), and `2` (no renewal). If this parameter is set to `0` for a key account in the prepaid mode, auto-renewal applies. It defaults to `0`.
 * @method array getTags() Obtain The tags to be set for the resource being created.
 * @method void setTags(array $Tags) Set The tags to be set for the resource being created.
 * @method boolean getAutoSuspend() Obtain Whether to automatically suspend clusters. Valid values: `false` (default, no) and `true` (yes).
 * @method void setAutoSuspend(boolean $AutoSuspend) Set Whether to automatically suspend clusters. Valid values: `false` (default, no) and `true` (yes).
 * @method integer getCrontabResumeSuspend() Obtain Whether to enable scheduled start and suspension of clusters. Valid values: `0` (disable) and `1` (enable). Note: This policy and the auto-suspension policy are mutually exclusive.
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) Set Whether to enable scheduled start and suspension of clusters. Valid values: `0` (disable) and `1` (enable). Note: This policy and the auto-suspension policy are mutually exclusive.
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() Obtain The complex policy for scheduled start and suspension, including the start/suspension time and suspension policy.
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) Set The complex policy for scheduled start and suspension, including the start/suspension time and suspension policy.
 * @method string getEngineExecType() Obtain The type of tasks to be executed by the engine, which defaults to SQL. Valid values: `SQL` and `BATCH`.
 * @method void setEngineExecType(string $EngineExecType) Set The type of tasks to be executed by the engine, which defaults to SQL. Valid values: `SQL` and `BATCH`.
 * @method integer getMaxConcurrency() Obtain The max task concurrency of a cluster, which defaults to 5.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set The max task concurrency of a cluster, which defaults to 5.
 * @method integer getTolerableQueueTime() Obtain The task queue time limit, which defaults to 0. When the actual queue time exceeds the value set here, scale-out may be triggered. Setting this parameter to 0 represents that scale-out may be triggered immediately after a task queues up.
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) Set The task queue time limit, which defaults to 0. When the actual queue time exceeds the value set here, scale-out may be triggered. Setting this parameter to 0 represents that scale-out may be triggered immediately after a task queues up.
 * @method integer getAutoSuspendTime() Obtain The cluster auto-suspension time, which defaults to 10 min.
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) Set The cluster auto-suspension time, which defaults to 10 min.
 * @method string getResourceType() Obtain The resource type. Valid values: `Standard_CU` (standard) and `Memory_CU` (memory).
 * @method void setResourceType(string $ResourceType) Set The resource type. Valid values: `Standard_CU` (standard) and `Memory_CU` (memory).
 * @method array getDataEngineConfigPairs() Obtain The advanced configurations of clusters.
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) Set The advanced configurations of clusters.
 * @method string getImageVersionName() Obtain The version name of cluster image, such as SuperSQL-P 1.1 and SuperSQL-S 3.2. If no value is passed in, a cluster is created using the latest image version.
 * @method void setImageVersionName(string $ImageVersionName) Set The version name of cluster image, such as SuperSQL-P 1.1 and SuperSQL-S 3.2. If no value is passed in, a cluster is created using the latest image version.
 * @method string getMainClusterName() Obtain The primary cluster, which is specified when a failover cluster is created.
 * @method void setMainClusterName(string $MainClusterName) Set The primary cluster, which is specified when a failover cluster is created.
 * @method boolean getElasticSwitch() Obtain Whether to enable the scaling feature for a monthly subscribed Spark job cluster.
 * @method void setElasticSwitch(boolean $ElasticSwitch) Set Whether to enable the scaling feature for a monthly subscribed Spark job cluster.
 * @method integer getElasticLimit() Obtain The upper limit (in CUs) for scaling of the monthly subscribed Spark job cluster.
 * @method void setElasticLimit(integer $ElasticLimit) Set The upper limit (in CUs) for scaling of the monthly subscribed Spark job cluster.
 * @method SessionResourceTemplate getSessionResourceTemplate() Obtain The session resource configuration template for a Spark job cluster.
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) Set The session resource configuration template for a Spark job cluster.
 * @method boolean getAutoAuthorization() Obtain Automatically grant permissions
 * @method void setAutoAuthorization(boolean $AutoAuthorization) Set Automatically grant permissions
 * @method string getEngineNetworkId() Obtain Engine network ID
 * @method void setEngineNetworkId(string $EngineNetworkId) Set Engine network ID
 * @method string getEngineGeneration() Obtain Generation of the engine. SuperSQL means the supersql engine while Native means the standard engine. It is SuperSQL by default.
 * @method void setEngineGeneration(string $EngineGeneration) Set Generation of the engine. SuperSQL means the supersql engine while Native means the standard engine. It is SuperSQL by default.
 */
class CreateDataEngineRequest extends AbstractModel
{
    /**
     * @var string The engine type. Valid values: `spark` and `presto`.
     */
    public $EngineType;

    /**
     * @var string The name of the virtual cluster.
     */
    public $DataEngineName;

    /**
     * @var string The cluster type. Valid values: `spark_private`, `presto_private`, `presto_cu`, and `spark_cu`.
     */
    public $ClusterType;

    /**
     * @var integer The billing mode. Valid values: `0` (shared engine), `1` (pay-as-you-go), and `2` (monthly subscription).
     */
    public $Mode;

    /**
     * @var boolean Whether to automatically start the clusters.
     */
    public $AutoResume;

    /**
     * @var integer The minimum number of clusters.
     */
    public $MinClusters;

    /**
     * @var integer The maximum number of clusters.
     */
    public $MaxClusters;

    /**
     * @var boolean Whether the cluster is the default one.
     * @deprecated
     */
    public $DefaultDataEngine;

    /**
     * @var string The VPC CIDR block.
     */
    public $CidrBlock;

    /**
     * @var string The description.
     */
    public $Message;

    /**
     * @var integer The cluster size.
     */
    public $Size;

    /**
     * @var integer The pay mode. Valid value: `0` (postpaid, default) and `1` (prepaid) (currently not available).
     */
    public $PayMode;

    /**
     * @var integer The usage duration of the resource. Postpaid: Fill in 3,600 as a fixed figure; prepaid: fill in a figure equal to or bigger than 1 which means purchasing resources for one month. The maximum figure is not bigger than 120. The default value is 1.
     */
    public $TimeSpan;

    /**
     * @var string The unit of the resource period. Valid values: `s` (default) for the postpaid mode and `m` for the prepaid mode.
     */
    public $TimeUnit;

    /**
     * @var integer The auto-renewal status of the resource. For the postpaid mode, no renewal is required, and the value is fixed to `0`. For the prepaid mode, valid values are `0` (manual), `1` (auto), and `2` (no renewal). If this parameter is set to `0` for a key account in the prepaid mode, auto-renewal applies. It defaults to `0`.
     */
    public $AutoRenew;

    /**
     * @var array The tags to be set for the resource being created.
     */
    public $Tags;

    /**
     * @var boolean Whether to automatically suspend clusters. Valid values: `false` (default, no) and `true` (yes).
     */
    public $AutoSuspend;

    /**
     * @var integer Whether to enable scheduled start and suspension of clusters. Valid values: `0` (disable) and `1` (enable). Note: This policy and the auto-suspension policy are mutually exclusive.
     */
    public $CrontabResumeSuspend;

    /**
     * @var CrontabResumeSuspendStrategy The complex policy for scheduled start and suspension, including the start/suspension time and suspension policy.
     */
    public $CrontabResumeSuspendStrategy;

    /**
     * @var string The type of tasks to be executed by the engine, which defaults to SQL. Valid values: `SQL` and `BATCH`.
     */
    public $EngineExecType;

    /**
     * @var integer The max task concurrency of a cluster, which defaults to 5.
     */
    public $MaxConcurrency;

    /**
     * @var integer The task queue time limit, which defaults to 0. When the actual queue time exceeds the value set here, scale-out may be triggered. Setting this parameter to 0 represents that scale-out may be triggered immediately after a task queues up.
     */
    public $TolerableQueueTime;

    /**
     * @var integer The cluster auto-suspension time, which defaults to 10 min.
     */
    public $AutoSuspendTime;

    /**
     * @var string The resource type. Valid values: `Standard_CU` (standard) and `Memory_CU` (memory).
     */
    public $ResourceType;

    /**
     * @var array The advanced configurations of clusters.
     */
    public $DataEngineConfigPairs;

    /**
     * @var string The version name of cluster image, such as SuperSQL-P 1.1 and SuperSQL-S 3.2. If no value is passed in, a cluster is created using the latest image version.
     */
    public $ImageVersionName;

    /**
     * @var string The primary cluster, which is specified when a failover cluster is created.
     */
    public $MainClusterName;

    /**
     * @var boolean Whether to enable the scaling feature for a monthly subscribed Spark job cluster.
     */
    public $ElasticSwitch;

    /**
     * @var integer The upper limit (in CUs) for scaling of the monthly subscribed Spark job cluster.
     */
    public $ElasticLimit;

    /**
     * @var SessionResourceTemplate The session resource configuration template for a Spark job cluster.
     */
    public $SessionResourceTemplate;

    /**
     * @var boolean Automatically grant permissions
     */
    public $AutoAuthorization;

    /**
     * @var string Engine network ID
     */
    public $EngineNetworkId;

    /**
     * @var string Generation of the engine. SuperSQL means the supersql engine while Native means the standard engine. It is SuperSQL by default.
     */
    public $EngineGeneration;

    /**
     * @param string $EngineType The engine type. Valid values: `spark` and `presto`.
     * @param string $DataEngineName The name of the virtual cluster.
     * @param string $ClusterType The cluster type. Valid values: `spark_private`, `presto_private`, `presto_cu`, and `spark_cu`.
     * @param integer $Mode The billing mode. Valid values: `0` (shared engine), `1` (pay-as-you-go), and `2` (monthly subscription).
     * @param boolean $AutoResume Whether to automatically start the clusters.
     * @param integer $MinClusters The minimum number of clusters.
     * @param integer $MaxClusters The maximum number of clusters.
     * @param boolean $DefaultDataEngine Whether the cluster is the default one.
     * @param string $CidrBlock The VPC CIDR block.
     * @param string $Message The description.
     * @param integer $Size The cluster size.
     * @param integer $PayMode The pay mode. Valid value: `0` (postpaid, default) and `1` (prepaid) (currently not available).
     * @param integer $TimeSpan The usage duration of the resource. Postpaid: Fill in 3,600 as a fixed figure; prepaid: fill in a figure equal to or bigger than 1 which means purchasing resources for one month. The maximum figure is not bigger than 120. The default value is 1.
     * @param string $TimeUnit The unit of the resource period. Valid values: `s` (default) for the postpaid mode and `m` for the prepaid mode.
     * @param integer $AutoRenew The auto-renewal status of the resource. For the postpaid mode, no renewal is required, and the value is fixed to `0`. For the prepaid mode, valid values are `0` (manual), `1` (auto), and `2` (no renewal). If this parameter is set to `0` for a key account in the prepaid mode, auto-renewal applies. It defaults to `0`.
     * @param array $Tags The tags to be set for the resource being created.
     * @param boolean $AutoSuspend Whether to automatically suspend clusters. Valid values: `false` (default, no) and `true` (yes).
     * @param integer $CrontabResumeSuspend Whether to enable scheduled start and suspension of clusters. Valid values: `0` (disable) and `1` (enable). Note: This policy and the auto-suspension policy are mutually exclusive.
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy The complex policy for scheduled start and suspension, including the start/suspension time and suspension policy.
     * @param string $EngineExecType The type of tasks to be executed by the engine, which defaults to SQL. Valid values: `SQL` and `BATCH`.
     * @param integer $MaxConcurrency The max task concurrency of a cluster, which defaults to 5.
     * @param integer $TolerableQueueTime The task queue time limit, which defaults to 0. When the actual queue time exceeds the value set here, scale-out may be triggered. Setting this parameter to 0 represents that scale-out may be triggered immediately after a task queues up.
     * @param integer $AutoSuspendTime The cluster auto-suspension time, which defaults to 10 min.
     * @param string $ResourceType The resource type. Valid values: `Standard_CU` (standard) and `Memory_CU` (memory).
     * @param array $DataEngineConfigPairs The advanced configurations of clusters.
     * @param string $ImageVersionName The version name of cluster image, such as SuperSQL-P 1.1 and SuperSQL-S 3.2. If no value is passed in, a cluster is created using the latest image version.
     * @param string $MainClusterName The primary cluster, which is specified when a failover cluster is created.
     * @param boolean $ElasticSwitch Whether to enable the scaling feature for a monthly subscribed Spark job cluster.
     * @param integer $ElasticLimit The upper limit (in CUs) for scaling of the monthly subscribed Spark job cluster.
     * @param SessionResourceTemplate $SessionResourceTemplate The session resource configuration template for a Spark job cluster.
     * @param boolean $AutoAuthorization Automatically grant permissions
     * @param string $EngineNetworkId Engine network ID
     * @param string $EngineGeneration Generation of the engine. SuperSQL means the supersql engine while Native means the standard engine. It is SuperSQL by default.
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("AutoResume",$param) and $param["AutoResume"] !== null) {
            $this->AutoResume = $param["AutoResume"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("DefaultDataEngine",$param) and $param["DefaultDataEngine"] !== null) {
            $this->DefaultDataEngine = $param["DefaultDataEngine"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("ImageVersionName",$param) and $param["ImageVersionName"] !== null) {
            $this->ImageVersionName = $param["ImageVersionName"];
        }

        if (array_key_exists("MainClusterName",$param) and $param["MainClusterName"] !== null) {
            $this->MainClusterName = $param["MainClusterName"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }

        if (array_key_exists("SessionResourceTemplate",$param) and $param["SessionResourceTemplate"] !== null) {
            $this->SessionResourceTemplate = new SessionResourceTemplate();
            $this->SessionResourceTemplate->deserialize($param["SessionResourceTemplate"]);
        }

        if (array_key_exists("AutoAuthorization",$param) and $param["AutoAuthorization"] !== null) {
            $this->AutoAuthorization = $param["AutoAuthorization"];
        }

        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("EngineGeneration",$param) and $param["EngineGeneration"] !== null) {
            $this->EngineGeneration = $param["EngineGeneration"];
        }
    }
}
