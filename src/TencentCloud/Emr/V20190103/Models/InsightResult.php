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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Insight result item.
 *
 * @method string getID() Obtain When Type is HIVE, the value is Hive query ID; when Type is MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
 * @method void setID(string $ID) Set When Type is HIVE, the value is Hive query ID; when Type is MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
 * @method string getType() Obtain Insight application type. Value values: HIVE, SPARK, MAPREDUCE, and TEZ.
 * @method void setType(string $Type) Set Insight application type. Value values: HIVE, SPARK, MAPREDUCE, and TEZ.
 * @method string getRuleID() Obtain Insight rule ID.
HIVE-ScanManyMeta: too much scanned metadata.
HIVE-ScanManyPartition: large table scanning.
HIVE-SlowCompile: compilation duration too long.
HIVE-UnSuitableConfig: improper parameter.
MAPREDUCE-MapperDataSkew: Map data skew.
MAPREDUCE-MapperMemWaste: MapMemory resource waste.
MAPREDUCE-MapperSlowTask: slow map task.
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded.
MAPREDUCE-ReducerDataSkew: Reduce data skew.
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste.
MAPREDUCE-ReducerSlowTask: slow reduce task.
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay.
SPARK-CpuWaste: CPU resource waste.
SPARK-DataSkew: data skew.
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded.
SPARK-MemWaste: Memory resource waste.
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew.
SPARK-SlowTask: slow task.
TEZ-DataSkew: data skew.
TEZ-MapperDataSkew: Map data skew.
TEZ-ReducerDataSkew: Reduce data skew.
TEZ-TezMemWaste: Memory resource waste.
TEZ-TezSlowTask: slow task.
TEZ-TezTaskGC:TasksGC
 * @method void setRuleID(string $RuleID) Set Insight rule ID.
HIVE-ScanManyMeta: too much scanned metadata.
HIVE-ScanManyPartition: large table scanning.
HIVE-SlowCompile: compilation duration too long.
HIVE-UnSuitableConfig: improper parameter.
MAPREDUCE-MapperDataSkew: Map data skew.
MAPREDUCE-MapperMemWaste: MapMemory resource waste.
MAPREDUCE-MapperSlowTask: slow map task.
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded.
MAPREDUCE-ReducerDataSkew: Reduce data skew.
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste.
MAPREDUCE-ReducerSlowTask: slow reduce task.
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay.
SPARK-CpuWaste: CPU resource waste.
SPARK-DataSkew: data skew.
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded.
SPARK-MemWaste: Memory resource waste.
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew.
SPARK-SlowTask: slow task.
TEZ-DataSkew: data skew.
TEZ-MapperDataSkew: Map data skew.
TEZ-ReducerDataSkew: Reduce data skew.
TEZ-TezMemWaste: Memory resource waste.
TEZ-TezSlowTask: slow task.
TEZ-TezTaskGC:TasksGC
 * @method string getRuleName() Obtain Insight rule name. Refer to the description of RuleID.
 * @method void setRuleName(string $RuleName) Set Insight rule name. Refer to the description of RuleID.
 * @method string getRuleExplain() Obtain Insight rules interpretation.
 * @method void setRuleExplain(string $RuleExplain) Set Insight rules interpretation.
 * @method string getDetail() Obtain Details.
 * @method void setDetail(string $Detail) Set Details.
 * @method string getSuggestion() Obtain Recommended message.
 * @method void setSuggestion(string $Suggestion) Set Recommended message.
 * @method integer getValue() Obtain Anomaly metrics measure insight severity. Higher values indicate greater severity within the same insight category. Metrics across different insight types cannot be meaningfully compared.
 * @method void setValue(integer $Value) Set Anomaly metrics measure insight severity. Higher values indicate greater severity within the same insight category. Metrics across different insight types cannot be meaningfully compared.
 * @method string getScheduleTaskExecID() Obtain Scheduling task execution ID.
 * @method void setScheduleTaskExecID(string $ScheduleTaskExecID) Set Scheduling task execution ID.
 * @method string getScheduleFlowName() Obtain Scheduling flow, DAG.
 * @method void setScheduleFlowName(string $ScheduleFlowName) Set Scheduling flow, DAG.
 * @method string getScheduleTaskName() Obtain A Task node in the scheduling flow.
 * @method void setScheduleTaskName(string $ScheduleTaskName) Set A Task node in the scheduling flow.
 * @method string getJobConf() Obtain Core configurations for Yarn tasks.
 * @method void setJobConf(string $JobConf) Set Core configurations for Yarn tasks.
 * @method string getContext() Obtain Insight structure information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContext(string $Context) Set Insight structure information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InsightResult extends AbstractModel
{
    /**
     * @var string When Type is HIVE, the value is Hive query ID; when Type is MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
     */
    public $ID;

    /**
     * @var string Insight application type. Value values: HIVE, SPARK, MAPREDUCE, and TEZ.
     */
    public $Type;

    /**
     * @var string Insight rule ID.
HIVE-ScanManyMeta: too much scanned metadata.
HIVE-ScanManyPartition: large table scanning.
HIVE-SlowCompile: compilation duration too long.
HIVE-UnSuitableConfig: improper parameter.
MAPREDUCE-MapperDataSkew: Map data skew.
MAPREDUCE-MapperMemWaste: MapMemory resource waste.
MAPREDUCE-MapperSlowTask: slow map task.
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded.
MAPREDUCE-ReducerDataSkew: Reduce data skew.
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste.
MAPREDUCE-ReducerSlowTask: slow reduce task.
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay.
SPARK-CpuWaste: CPU resource waste.
SPARK-DataSkew: data skew.
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded.
SPARK-MemWaste: Memory resource waste.
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew.
SPARK-SlowTask: slow task.
TEZ-DataSkew: data skew.
TEZ-MapperDataSkew: Map data skew.
TEZ-ReducerDataSkew: Reduce data skew.
TEZ-TezMemWaste: Memory resource waste.
TEZ-TezSlowTask: slow task.
TEZ-TezTaskGC:TasksGC
     */
    public $RuleID;

    /**
     * @var string Insight rule name. Refer to the description of RuleID.
     */
    public $RuleName;

    /**
     * @var string Insight rules interpretation.
     */
    public $RuleExplain;

    /**
     * @var string Details.
     */
    public $Detail;

    /**
     * @var string Recommended message.
     */
    public $Suggestion;

    /**
     * @var integer Anomaly metrics measure insight severity. Higher values indicate greater severity within the same insight category. Metrics across different insight types cannot be meaningfully compared.
     */
    public $Value;

    /**
     * @var string Scheduling task execution ID.
     */
    public $ScheduleTaskExecID;

    /**
     * @var string Scheduling flow, DAG.
     */
    public $ScheduleFlowName;

    /**
     * @var string A Task node in the scheduling flow.
     */
    public $ScheduleTaskName;

    /**
     * @var string Core configurations for Yarn tasks.
     */
    public $JobConf;

    /**
     * @var string Insight structure information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Context;

    /**
     * @param string $ID When Type is HIVE, the value is Hive query ID; when Type is MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
     * @param string $Type Insight application type. Value values: HIVE, SPARK, MAPREDUCE, and TEZ.
     * @param string $RuleID Insight rule ID.
HIVE-ScanManyMeta: too much scanned metadata.
HIVE-ScanManyPartition: large table scanning.
HIVE-SlowCompile: compilation duration too long.
HIVE-UnSuitableConfig: improper parameter.
MAPREDUCE-MapperDataSkew: Map data skew.
MAPREDUCE-MapperMemWaste: MapMemory resource waste.
MAPREDUCE-MapperSlowTask: slow map task.
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded.
MAPREDUCE-ReducerDataSkew: Reduce data skew.
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste.
MAPREDUCE-ReducerSlowTask: slow reduce task.
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay.
SPARK-CpuWaste: CPU resource waste.
SPARK-DataSkew: data skew.
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded.
SPARK-MemWaste: Memory resource waste.
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew.
SPARK-SlowTask: slow task.
TEZ-DataSkew: data skew.
TEZ-MapperDataSkew: Map data skew.
TEZ-ReducerDataSkew: Reduce data skew.
TEZ-TezMemWaste: Memory resource waste.
TEZ-TezSlowTask: slow task.
TEZ-TezTaskGC:TasksGC
     * @param string $RuleName Insight rule name. Refer to the description of RuleID.
     * @param string $RuleExplain Insight rules interpretation.
     * @param string $Detail Details.
     * @param string $Suggestion Recommended message.
     * @param integer $Value Anomaly metrics measure insight severity. Higher values indicate greater severity within the same insight category. Metrics across different insight types cannot be meaningfully compared.
     * @param string $ScheduleTaskExecID Scheduling task execution ID.
     * @param string $ScheduleFlowName Scheduling flow, DAG.
     * @param string $ScheduleTaskName A Task node in the scheduling flow.
     * @param string $JobConf Core configurations for Yarn tasks.
     * @param string $Context Insight structure information.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleExplain",$param) and $param["RuleExplain"] !== null) {
            $this->RuleExplain = $param["RuleExplain"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ScheduleTaskExecID",$param) and $param["ScheduleTaskExecID"] !== null) {
            $this->ScheduleTaskExecID = $param["ScheduleTaskExecID"];
        }

        if (array_key_exists("ScheduleFlowName",$param) and $param["ScheduleFlowName"] !== null) {
            $this->ScheduleFlowName = $param["ScheduleFlowName"];
        }

        if (array_key_exists("ScheduleTaskName",$param) and $param["ScheduleTaskName"] !== null) {
            $this->ScheduleTaskName = $param["ScheduleTaskName"];
        }

        if (array_key_exists("JobConf",$param) and $param["JobConf"] !== null) {
            $this->JobConf = $param["JobConf"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
