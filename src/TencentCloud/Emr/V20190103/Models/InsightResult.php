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
 * @method string getID() Obtain When Type is set to HIVE, the value is the Hive query ID; when Type is set to MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
 * @method void setID(string $ID) Set When Type is set to HIVE, the value is the Hive query ID; when Type is set to MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
 * @method string getType() Obtain Insight application type. Valid values: HIVE, SPARK, MAPREDUCE, and TEZ.
 * @method void setType(string $Type) Set Insight application type. Valid values: HIVE, SPARK, MAPREDUCE, and TEZ.
 * @method string getRuleID() Obtain Insight rule ID.
HIVE-ScanManyMeta: excessively large amount of scanned metadata
HIVE-ScanManyPartition: large table scan
HIVE-SlowCompile: excessively long compilation durationHIVE-UnSuitableConfig: improper parameter
MAPREDUCE-MapperDataSkew: Map data skew
MAPREDUCE-MapperMemWaste: MapMemory resource waste
MAPREDUCE-MapperSlowTask: Map slow task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded
MAPREDUCE-ReducerDataSkew: Reduce data skew
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste
MAPREDUCE-ReducerSlowTask: Reduce slow task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay
SPARK-CpuWaste: CPU resource waste
SPARK-DataSkew: data skew
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded
SPARK-MemWaste: Memory resource waste
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew
SPARK-SlowTask: slow task
TEZ-DataSkew: data skew
TEZ-MapperDataSkew: Map data skew
TEZ-ReducerDataSkew: Reduce data skew
TEZ-TezMemWaste: Memory resource waste
TEZ-TezSlowTask: slow task
TEZ-TezTaskGC:TasksGC
 * @method void setRuleID(string $RuleID) Set Insight rule ID.
HIVE-ScanManyMeta: excessively large amount of scanned metadata
HIVE-ScanManyPartition: large table scan
HIVE-SlowCompile: excessively long compilation durationHIVE-UnSuitableConfig: improper parameter
MAPREDUCE-MapperDataSkew: Map data skew
MAPREDUCE-MapperMemWaste: MapMemory resource waste
MAPREDUCE-MapperSlowTask: Map slow task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded
MAPREDUCE-ReducerDataSkew: Reduce data skew
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste
MAPREDUCE-ReducerSlowTask: Reduce slow task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay
SPARK-CpuWaste: CPU resource waste
SPARK-DataSkew: data skew
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded
SPARK-MemWaste: Memory resource waste
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew
SPARK-SlowTask: slow task
TEZ-DataSkew: data skew
TEZ-MapperDataSkew: Map data skew
TEZ-ReducerDataSkew: Reduce data skew
TEZ-TezMemWaste: Memory resource waste
TEZ-TezSlowTask: slow task
TEZ-TezTaskGC:TasksGC
 * @method string getRuleName() Obtain Insight rule name. Refer to the description of RuleID.
 * @method void setRuleName(string $RuleName) Set Insight rule name. Refer to the description of RuleID.
 * @method string getRuleExplain() Obtain Insight rule interpretation.
 * @method void setRuleExplain(string $RuleExplain) Set Insight rule interpretation.
 * @method string getDetail() Obtain Details.
 * @method void setDetail(string $Detail) Set Details.
 * @method string getSuggestion() Obtain Recommended message.
 * @method void setSuggestion(string $Suggestion) Set Recommended message.
 * @method integer getValue() Obtain Insight anomaly metric value. For insight items of the same type, a larger value indicates higher severity. Insight items of different types are not comparable.
 * @method void setValue(integer $Value) Set Insight anomaly metric value. For insight items of the same type, a larger value indicates higher severity. Insight items of different types are not comparable.
 * @method string getScheduleTaskExecID() Obtain Scheduling task execution ID.
 * @method void setScheduleTaskExecID(string $ScheduleTaskExecID) Set Scheduling task execution ID.
 * @method string getScheduleFlowName() Obtain Scheduling flow (DAG).
 * @method void setScheduleFlowName(string $ScheduleFlowName) Set Scheduling flow (DAG).
 * @method string getScheduleTaskName() Obtain Task node in the scheduling flow.
 * @method void setScheduleTaskName(string $ScheduleTaskName) Set Task node in the scheduling flow.
 * @method string getJobConf() Obtain Some core configurations of the YARN task.
 * @method void setJobConf(string $JobConf) Set Some core configurations of the YARN task.
 * @method string getContext() Obtain Insight into structured information.
 * @method void setContext(string $Context) Set Insight into structured information.
 */
class InsightResult extends AbstractModel
{
    /**
     * @var string When Type is set to HIVE, the value is the Hive query ID; when Type is set to MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
     */
    public $ID;

    /**
     * @var string Insight application type. Valid values: HIVE, SPARK, MAPREDUCE, and TEZ.
     */
    public $Type;

    /**
     * @var string Insight rule ID.
HIVE-ScanManyMeta: excessively large amount of scanned metadata
HIVE-ScanManyPartition: large table scan
HIVE-SlowCompile: excessively long compilation durationHIVE-UnSuitableConfig: improper parameter
MAPREDUCE-MapperDataSkew: Map data skew
MAPREDUCE-MapperMemWaste: MapMemory resource waste
MAPREDUCE-MapperSlowTask: Map slow task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded
MAPREDUCE-ReducerDataSkew: Reduce data skew
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste
MAPREDUCE-ReducerSlowTask: Reduce slow task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay
SPARK-CpuWaste: CPU resource waste
SPARK-DataSkew: data skew
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded
SPARK-MemWaste: Memory resource waste
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew
SPARK-SlowTask: slow task
TEZ-DataSkew: data skew
TEZ-MapperDataSkew: Map data skew
TEZ-ReducerDataSkew: Reduce data skew
TEZ-TezMemWaste: Memory resource waste
TEZ-TezSlowTask: slow task
TEZ-TezTaskGC:TasksGC
     */
    public $RuleID;

    /**
     * @var string Insight rule name. Refer to the description of RuleID.
     */
    public $RuleName;

    /**
     * @var string Insight rule interpretation.
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
     * @var integer Insight anomaly metric value. For insight items of the same type, a larger value indicates higher severity. Insight items of different types are not comparable.
     */
    public $Value;

    /**
     * @var string Scheduling task execution ID.
     */
    public $ScheduleTaskExecID;

    /**
     * @var string Scheduling flow (DAG).
     */
    public $ScheduleFlowName;

    /**
     * @var string Task node in the scheduling flow.
     */
    public $ScheduleTaskName;

    /**
     * @var string Some core configurations of the YARN task.
     */
    public $JobConf;

    /**
     * @var string Insight into structured information.
     */
    public $Context;

    /**
     * @param string $ID When Type is set to HIVE, the value is the Hive query ID; when Type is set to MAPREDUCE, SPARK or TEZ, the value is YarnAppID.
     * @param string $Type Insight application type. Valid values: HIVE, SPARK, MAPREDUCE, and TEZ.
     * @param string $RuleID Insight rule ID.
HIVE-ScanManyMeta: excessively large amount of scanned metadata
HIVE-ScanManyPartition: large table scan
HIVE-SlowCompile: excessively long compilation durationHIVE-UnSuitableConfig: improper parameter
MAPREDUCE-MapperDataSkew: Map data skew
MAPREDUCE-MapperMemWaste: MapMemory resource waste
MAPREDUCE-MapperSlowTask: Map slow task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded: peak memory exceeded
MAPREDUCE-ReducerDataSkew: Reduce data skew
MAPREDUCE-ReducerMemWaste: ReduceMemory resource waste
MAPREDUCE-ReducerSlowTask: Reduce slow task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay: scheduling delay
SPARK-CpuWaste: CPU resource waste
SPARK-DataSkew: data skew
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded: peak memory exceeded
SPARK-MemWaste: Memory resource waste
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew: scheduling skew
SPARK-SlowTask: slow task
TEZ-DataSkew: data skew
TEZ-MapperDataSkew: Map data skew
TEZ-ReducerDataSkew: Reduce data skew
TEZ-TezMemWaste: Memory resource waste
TEZ-TezSlowTask: slow task
TEZ-TezTaskGC:TasksGC
     * @param string $RuleName Insight rule name. Refer to the description of RuleID.
     * @param string $RuleExplain Insight rule interpretation.
     * @param string $Detail Details.
     * @param string $Suggestion Recommended message.
     * @param integer $Value Insight anomaly metric value. For insight items of the same type, a larger value indicates higher severity. Insight items of different types are not comparable.
     * @param string $ScheduleTaskExecID Scheduling task execution ID.
     * @param string $ScheduleFlowName Scheduling flow (DAG).
     * @param string $ScheduleTaskName Task node in the scheduling flow.
     * @param string $JobConf Some core configurations of the YARN task.
     * @param string $Context Insight into structured information.
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
