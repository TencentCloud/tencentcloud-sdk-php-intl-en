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
 * UpdateDataEngine request structure.
 *
 * @method integer getSize() Obtain Resource size
 * @method void setSize(integer $Size) Set Resource size
 * @method integer getMinClusters() Obtain Minimum CU resource
 * @method void setMinClusters(integer $MinClusters) Set Minimum CU resource
 * @method integer getMaxClusters() Obtain Maximum CU resource
 * @method void setMaxClusters(integer $MaxClusters) Set Maximum CU resource
 * @method boolean getAutoResume() Obtain Enable the auto-refresh. True means that it is enabled while false means that it is disabled (by default).
 * @method void setAutoResume(boolean $AutoResume) Set Enable the auto-refresh. True means that it is enabled while false means that it is disabled (by default).
 * @method string getDataEngineName() Obtain Data engine name
 * @method void setDataEngineName(string $DataEngineName) Set Data engine name
 * @method string getMessage() Obtain Related information
 * @method void setMessage(string $Message) Set Related information
 * @method boolean getAutoSuspend() Obtain Whether to automatically suspend the cluster. False means no (by default) while true means yes.
 * @method void setAutoSuspend(boolean $AutoSuspend) Set Whether to automatically suspend the cluster. False means no (by default) while true means yes.
 * @method integer getCrontabResumeSuspend() Obtain Scheduling policy of starting and ending the cluster: 0 (by default) indicates disabling the scheduling policy; 1 indicates enabling the scheduling policy. (Note: The scheduling policy and the automatic suspension policy are mutually exclusive.)
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) Set Scheduling policy of starting and ending the cluster: 0 (by default) indicates disabling the scheduling policy; 1 indicates enabling the scheduling policy. (Note: The scheduling policy and the automatic suspension policy are mutually exclusive.)
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() Obtain Scheduling policy for the start and end; the complex type includes start and end time and the cluster suspension policy.
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) Set Scheduling policy for the start and end; the complex type includes start and end time and the cluster suspension policy.
 * @method integer getMaxConcurrency() Obtain The maximum number of concurrent tasks for a single cluster, which is 5 by default.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set The maximum number of concurrent tasks for a single cluster, which is 5 by default.
 * @method integer getTolerableQueueTime() Obtain Tolerable queuing time, and it is 0 by default. When the queuing time for tasks exceeds the tolerable time, it may trigger scale-out. If this parameter is 0, it means that scale-out may be triggered immediately once tasks start queuing.
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) Set Tolerable queuing time, and it is 0 by default. When the queuing time for tasks exceeds the tolerable time, it may trigger scale-out. If this parameter is 0, it means that scale-out may be triggered immediately once tasks start queuing.
 * @method integer getAutoSuspendTime() Obtain Cluster automatic suspension time
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) Set Cluster automatic suspension time
 * @method boolean getElasticSwitch() Obtain Whether the AS of the spark jar monthly subscription cluster is enabled
 * @method void setElasticSwitch(boolean $ElasticSwitch) Set Whether the AS of the spark jar monthly subscription cluster is enabled
 * @method integer getElasticLimit() Obtain Upper limit of the spark jar monthly subscription cluster elastic scaling
 * @method void setElasticLimit(integer $ElasticLimit) Set Upper limit of the spark jar monthly subscription cluster elastic scaling
 * @method SessionResourceTemplate getSessionResourceTemplate() Obtain Session resource configuration template of Spark batch job clusters
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) Set Session resource configuration template of Spark batch job clusters
 */
class UpdateDataEngineRequest extends AbstractModel
{
    /**
     * @var integer Resource size
     */
    public $Size;

    /**
     * @var integer Minimum CU resource
     */
    public $MinClusters;

    /**
     * @var integer Maximum CU resource
     */
    public $MaxClusters;

    /**
     * @var boolean Enable the auto-refresh. True means that it is enabled while false means that it is disabled (by default).
     */
    public $AutoResume;

    /**
     * @var string Data engine name
     */
    public $DataEngineName;

    /**
     * @var string Related information
     */
    public $Message;

    /**
     * @var boolean Whether to automatically suspend the cluster. False means no (by default) while true means yes.
     */
    public $AutoSuspend;

    /**
     * @var integer Scheduling policy of starting and ending the cluster: 0 (by default) indicates disabling the scheduling policy; 1 indicates enabling the scheduling policy. (Note: The scheduling policy and the automatic suspension policy are mutually exclusive.)
     */
    public $CrontabResumeSuspend;

    /**
     * @var CrontabResumeSuspendStrategy Scheduling policy for the start and end; the complex type includes start and end time and the cluster suspension policy.
     */
    public $CrontabResumeSuspendStrategy;

    /**
     * @var integer The maximum number of concurrent tasks for a single cluster, which is 5 by default.
     */
    public $MaxConcurrency;

    /**
     * @var integer Tolerable queuing time, and it is 0 by default. When the queuing time for tasks exceeds the tolerable time, it may trigger scale-out. If this parameter is 0, it means that scale-out may be triggered immediately once tasks start queuing.
     */
    public $TolerableQueueTime;

    /**
     * @var integer Cluster automatic suspension time
     */
    public $AutoSuspendTime;

    /**
     * @var boolean Whether the AS of the spark jar monthly subscription cluster is enabled
     */
    public $ElasticSwitch;

    /**
     * @var integer Upper limit of the spark jar monthly subscription cluster elastic scaling
     */
    public $ElasticLimit;

    /**
     * @var SessionResourceTemplate Session resource configuration template of Spark batch job clusters
     */
    public $SessionResourceTemplate;

    /**
     * @param integer $Size Resource size
     * @param integer $MinClusters Minimum CU resource
     * @param integer $MaxClusters Maximum CU resource
     * @param boolean $AutoResume Enable the auto-refresh. True means that it is enabled while false means that it is disabled (by default).
     * @param string $DataEngineName Data engine name
     * @param string $Message Related information
     * @param boolean $AutoSuspend Whether to automatically suspend the cluster. False means no (by default) while true means yes.
     * @param integer $CrontabResumeSuspend Scheduling policy of starting and ending the cluster: 0 (by default) indicates disabling the scheduling policy; 1 indicates enabling the scheduling policy. (Note: The scheduling policy and the automatic suspension policy are mutually exclusive.)
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy Scheduling policy for the start and end; the complex type includes start and end time and the cluster suspension policy.
     * @param integer $MaxConcurrency The maximum number of concurrent tasks for a single cluster, which is 5 by default.
     * @param integer $TolerableQueueTime Tolerable queuing time, and it is 0 by default. When the queuing time for tasks exceeds the tolerable time, it may trigger scale-out. If this parameter is 0, it means that scale-out may be triggered immediately once tasks start queuing.
     * @param integer $AutoSuspendTime Cluster automatic suspension time
     * @param boolean $ElasticSwitch Whether the AS of the spark jar monthly subscription cluster is enabled
     * @param integer $ElasticLimit Upper limit of the spark jar monthly subscription cluster elastic scaling
     * @param SessionResourceTemplate $SessionResourceTemplate Session resource configuration template of Spark batch job clusters
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
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

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
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

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
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
    }
}
