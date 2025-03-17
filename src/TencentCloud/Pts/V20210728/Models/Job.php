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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Performance test job.
 *
 * @method string getJobId() Obtain Job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobId(string $JobId) Set Job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getScenarioId() Obtain Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method Load getLoad() Obtain Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLoad(Load $Load) Set Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method array getConfigs() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setConfigs(array $Configs) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method array getDatasets() Obtain Test datasets.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDatasets(array $Datasets) Set Test datasets.

Note: This field may return null, indicating that no valid value is found.
 * @method array getExtensions() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setExtensions(array $Extensions) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain Job status, values including:
JobUnknown: 0, JobCreated: 1, JobPending: 2, JobPreparing: 3, JobSelectClustering: 4, JobCreateTasking: 5, JobSyncTasking: 6,
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(integer $Status) Set Job status, values including:
JobUnknown: 0, JobCreated: 1, JobPending: 2, JobPreparing: 3, JobSelectClustering: 4, JobCreateTasking: 5, JobSyncTasking: 6,
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21

Note: This field may return null, indicating that no valid value is found.
 * @method string getStartTime() Obtain Start time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStartTime(string $StartTime) Set Start time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getEndTime() Obtain End time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setEndTime(string $EndTime) Set End time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getMaxVirtualUserCount() Obtain Maximum VU.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMaxVirtualUserCount(integer $MaxVirtualUserCount) Set Maximum VU.

Note: This field may return null, indicating that no valid value is found.
 * @method string getNote() Obtain Note.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNote(string $Note) Set Note.

Note: This field may return null, indicating that no valid value is found.
 * @method float getErrorRate() Obtain Error rate percentage.

Note: This field may return null, indicating that no valid value is found.
 * @method void setErrorRate(float $ErrorRate) Set Error rate percentage.

Note: This field may return null, indicating that no valid value is found.
 * @method string getJobOwner() Obtain Job owner.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobOwner(string $JobOwner) Set Job owner.

Note: This field may return null, indicating that no valid value is found.
 * @method LoadSource getLoadSources() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLoadSources(LoadSource $LoadSources) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getDuration() Obtain Job duration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDuration(integer $Duration) Set Job duration.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getMaxRequestsPerSecond() Obtain Maximum requests per second.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) Set Maximum requests per second.

Note: This field may return null, indicating that no valid value is found.
 * @method float getRequestTotal() Obtain Total number of requests.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequestTotal(float $RequestTotal) Set Total number of requests.

Note: This field may return null, indicating that no valid value is found.
 * @method float getRequestsPerSecond() Obtain Average requests per second.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequestsPerSecond(float $RequestsPerSecond) Set Average requests per second.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeAverage() Obtain Average response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeAverage(float $ResponseTimeAverage) Set Average response time.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeP99() Obtain 99th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeP99(float $ResponseTimeP99) Set 99th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeP95() Obtain 95th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeP95(float $ResponseTimeP95) Set 95th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeP90() Obtain 90th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeP90(float $ResponseTimeP90) Set 90th percentile response time.

Note: This field may return null, indicating that no valid value is found.
 * @method array getScripts() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScripts(array $Scripts) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeMax() Obtain Maximum response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeMax(float $ResponseTimeMax) Set Maximum response time.

Note: This field may return null, indicating that no valid value is found.
 * @method float getResponseTimeMin() Obtain Minimum response time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResponseTimeMin(float $ResponseTimeMin) Set Minimum response time.

Note: This field may return null, indicating that no valid value is found.
 * @method array getLoadSourceInfos() Obtain Stress machine information.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLoadSourceInfos(array $LoadSourceInfos) Set Stress machine information.

Note: This field may return null, indicating that no valid value is found.
 * @method array getTestScripts() Obtain Test script information.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTestScripts(array $TestScripts) Set Test script information.

Note: This field may return null, indicating that no valid value is found.
 * @method array getProtocols() Obtain Protocol file information.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProtocols(array $Protocols) Set Protocol file information.

Note: This field may return null, indicating that no valid value is found.
 * @method array getRequestFiles() Obtain Request file information.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequestFiles(array $RequestFiles) Set Request file information.

Note: This field may return null, indicating that no valid value is found.
 * @method array getPlugins() Obtain Extension file information.

Note: This field may return null, indicating that no valid value is found.
 * @method void setPlugins(array $Plugins) Set Extension file information.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCronId() Obtain Cron job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCronId(string $CronId) Set Cron job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getType() Obtain Scenario type.

Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set Scenario type.

Note: This field may return null, indicating that no valid value is found.
 * @method DomainNameConfig getDomainNameConfig() Obtain Domain binding configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) Set Domain binding configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method boolean getDebug() Obtain Whether the job is a debug job.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDebug(boolean $Debug) Set Whether the job is a debug job.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAbortReason() Obtain Abort reason.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAbortReason(integer $AbortReason) Set Abort reason.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create Time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCreatedAt(string $CreatedAt) Set Create Time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method array getNotificationHooks() Obtain Notification event callback.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNotificationHooks(array $NotificationHooks) Set Notification event callback.

Note: This field may return null, indicating that no valid value is found.
 * @method float getNetworkReceiveRate() Obtain Bytes received per second.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNetworkReceiveRate(float $NetworkReceiveRate) Set Bytes received per second.

Note: This field may return null, indicating that no valid value is found.
 * @method float getNetworkSendRate() Obtain Bytes sent per second.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNetworkSendRate(float $NetworkSendRate) Set Bytes sent per second.

Note: This field may return null, indicating that no valid value is found.
 * @method string getMessage() Obtain Job status description.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMessage(string $Message) Set Job status description.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectName() Obtain Project name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectName(string $ProjectName) Set Project name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getScenarioName() Obtain Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioName(string $ScenarioName) Set Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getPayMode() Obtain Billing type.

Note: This field may return null, indicating that no valid value is found.
 * @method void setPayMode(integer $PayMode) Set Billing type.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getUsage() Obtain Job VUM usage.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUsage(integer $Usage) Set Job VUM usage.

Note: This field may return null, indicating that no valid value is found.
 */
class Job extends AbstractModel
{
    /**
     * @var string Job ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobId;

    /**
     * @var string Scenario ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioId;

    /**
     * @var Load Load configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Load;

    /**
     * @var array Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Configs;

    /**
     * @var array Test datasets.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Datasets;

    /**
     * @var array Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Extensions;

    /**
     * @var integer Job status, values including:
JobUnknown: 0, JobCreated: 1, JobPending: 2, JobPreparing: 3, JobSelectClustering: 4, JobCreateTasking: 5, JobSyncTasking: 6,
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Start time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $StartTime;

    /**
     * @var string End time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $EndTime;

    /**
     * @var integer Maximum VU.

Note: This field may return null, indicating that no valid value is found.
     */
    public $MaxVirtualUserCount;

    /**
     * @var string Note.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Note;

    /**
     * @var float Error rate percentage.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ErrorRate;

    /**
     * @var string Job owner.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobOwner;

    /**
     * @var LoadSource Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LoadSources;

    /**
     * @var integer Job duration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Duration;

    /**
     * @var integer Maximum requests per second.

Note: This field may return null, indicating that no valid value is found.
     */
    public $MaxRequestsPerSecond;

    /**
     * @var float Total number of requests.

Note: This field may return null, indicating that no valid value is found.
     */
    public $RequestTotal;

    /**
     * @var float Average requests per second.

Note: This field may return null, indicating that no valid value is found.
     */
    public $RequestsPerSecond;

    /**
     * @var float Average response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeAverage;

    /**
     * @var float 99th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeP99;

    /**
     * @var float 95th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeP95;

    /**
     * @var float 90th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeP90;

    /**
     * @var array Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Scripts;

    /**
     * @var float Maximum response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeMax;

    /**
     * @var float Minimum response time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResponseTimeMin;

    /**
     * @var array Stress machine information.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LoadSourceInfos;

    /**
     * @var array Test script information.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TestScripts;

    /**
     * @var array Protocol file information.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Protocols;

    /**
     * @var array Request file information.

Note: This field may return null, indicating that no valid value is found.
     */
    public $RequestFiles;

    /**
     * @var array Extension file information.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Plugins;

    /**
     * @var string Cron job ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CronId;

    /**
     * @var string Scenario type.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var DomainNameConfig Domain binding configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $DomainNameConfig;

    /**
     * @var boolean Whether the job is a debug job.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Debug;

    /**
     * @var integer Abort reason.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AbortReason;

    /**
     * @var string Create Time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CreatedAt;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectId;

    /**
     * @var array Notification event callback.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NotificationHooks;

    /**
     * @var float Bytes received per second.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NetworkReceiveRate;

    /**
     * @var float Bytes sent per second.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NetworkSendRate;

    /**
     * @var string Job status description.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Message;

    /**
     * @var string Project name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectName;

    /**
     * @var string Scenario name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioName;

    /**
     * @var integer Billing type.

Note: This field may return null, indicating that no valid value is found.
     */
    public $PayMode;

    /**
     * @var integer Job VUM usage.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Usage;

    /**
     * @param string $JobId Job ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioId Scenario ID.

Note: This field may return null, indicating that no valid value is found.
     * @param Load $Load Load configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Configs Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Datasets Test datasets.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Extensions Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status Job status, values including:
JobUnknown: 0, JobCreated: 1, JobPending: 2, JobPreparing: 3, JobSelectClustering: 4, JobCreateTasking: 5, JobSyncTasking: 6,
JobRunning:11,JobFinished:12,JobPrepareException:13,JobFinishException:14,JobAborting:15,JobAborted:16,JobAbortException:17,JobDeleted:18,
JobSelectClusterException:19,JobCreateTaskException:20,JobSyncTaskException:21

Note: This field may return null, indicating that no valid value is found.
     * @param string $StartTime Start time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $EndTime End time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $MaxVirtualUserCount Maximum VU.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Note Note.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ErrorRate Error rate percentage.

Note: This field may return null, indicating that no valid value is found.
     * @param string $JobOwner Job owner.

Note: This field may return null, indicating that no valid value is found.
     * @param LoadSource $LoadSources Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Duration Job duration.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $MaxRequestsPerSecond Maximum requests per second.

Note: This field may return null, indicating that no valid value is found.
     * @param float $RequestTotal Total number of requests.

Note: This field may return null, indicating that no valid value is found.
     * @param float $RequestsPerSecond Average requests per second.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeAverage Average response time.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeP99 99th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeP95 95th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeP90 90th percentile response time.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Scripts Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeMax Maximum response time.

Note: This field may return null, indicating that no valid value is found.
     * @param float $ResponseTimeMin Minimum response time.

Note: This field may return null, indicating that no valid value is found.
     * @param array $LoadSourceInfos Stress machine information.

Note: This field may return null, indicating that no valid value is found.
     * @param array $TestScripts Test script information.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Protocols Protocol file information.

Note: This field may return null, indicating that no valid value is found.
     * @param array $RequestFiles Request file information.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Plugins Extension file information.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CronId Cron job ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Type Scenario type.

Note: This field may return null, indicating that no valid value is found.
     * @param DomainNameConfig $DomainNameConfig Domain binding configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Debug Whether the job is a debug job.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AbortReason Abort reason.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create Time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param array $NotificationHooks Notification event callback.

Note: This field may return null, indicating that no valid value is found.
     * @param float $NetworkReceiveRate Bytes received per second.

Note: This field may return null, indicating that no valid value is found.
     * @param float $NetworkSendRate Bytes sent per second.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Message Job status description.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectName Project name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioName Scenario name.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $PayMode Billing type.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Usage Job VUM usage.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxVirtualUserCount",$param) and $param["MaxVirtualUserCount"] !== null) {
            $this->MaxVirtualUserCount = $param["MaxVirtualUserCount"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("LoadSources",$param) and $param["LoadSources"] !== null) {
            $this->LoadSources = new LoadSource();
            $this->LoadSources->deserialize($param["LoadSources"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("RequestTotal",$param) and $param["RequestTotal"] !== null) {
            $this->RequestTotal = $param["RequestTotal"];
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = $param["RequestsPerSecond"];
        }

        if (array_key_exists("ResponseTimeAverage",$param) and $param["ResponseTimeAverage"] !== null) {
            $this->ResponseTimeAverage = $param["ResponseTimeAverage"];
        }

        if (array_key_exists("ResponseTimeP99",$param) and $param["ResponseTimeP99"] !== null) {
            $this->ResponseTimeP99 = $param["ResponseTimeP99"];
        }

        if (array_key_exists("ResponseTimeP95",$param) and $param["ResponseTimeP95"] !== null) {
            $this->ResponseTimeP95 = $param["ResponseTimeP95"];
        }

        if (array_key_exists("ResponseTimeP90",$param) and $param["ResponseTimeP90"] !== null) {
            $this->ResponseTimeP90 = $param["ResponseTimeP90"];
        }

        if (array_key_exists("Scripts",$param) and $param["Scripts"] !== null) {
            $this->Scripts = $param["Scripts"];
        }

        if (array_key_exists("ResponseTimeMax",$param) and $param["ResponseTimeMax"] !== null) {
            $this->ResponseTimeMax = $param["ResponseTimeMax"];
        }

        if (array_key_exists("ResponseTimeMin",$param) and $param["ResponseTimeMin"] !== null) {
            $this->ResponseTimeMin = $param["ResponseTimeMin"];
        }

        if (array_key_exists("LoadSourceInfos",$param) and $param["LoadSourceInfos"] !== null) {
            $this->LoadSourceInfos = [];
            foreach ($param["LoadSourceInfos"] as $key => $value){
                $obj = new LoadSource();
                $obj->deserialize($value);
                array_push($this->LoadSourceInfos, $obj);
            }
        }

        if (array_key_exists("TestScripts",$param) and $param["TestScripts"] !== null) {
            $this->TestScripts = [];
            foreach ($param["TestScripts"] as $key => $value){
                $obj = new ScriptInfo();
                $obj->deserialize($value);
                array_push($this->TestScripts, $obj);
            }
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new ProtocolInfo();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("RequestFiles",$param) and $param["RequestFiles"] !== null) {
            $this->RequestFiles = [];
            foreach ($param["RequestFiles"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->RequestFiles, $obj);
            }
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DomainNameConfig",$param) and $param["DomainNameConfig"] !== null) {
            $this->DomainNameConfig = new DomainNameConfig();
            $this->DomainNameConfig->deserialize($param["DomainNameConfig"]);
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("NotificationHooks",$param) and $param["NotificationHooks"] !== null) {
            $this->NotificationHooks = [];
            foreach ($param["NotificationHooks"] as $key => $value){
                $obj = new NotificationHook();
                $obj->deserialize($value);
                array_push($this->NotificationHooks, $obj);
            }
        }

        if (array_key_exists("NetworkReceiveRate",$param) and $param["NetworkReceiveRate"] !== null) {
            $this->NetworkReceiveRate = $param["NetworkReceiveRate"];
        }

        if (array_key_exists("NetworkSendRate",$param) and $param["NetworkSendRate"] !== null) {
            $this->NetworkSendRate = $param["NetworkSendRate"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
