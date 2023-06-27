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
 * The task instance.
 *
 * @method string getDatabaseName() Obtain Database name of the task
 * @method void setDatabaseName(string $DatabaseName) Set Database name of the task
 * @method integer getDataAmount() Obtain Data volume of the task
 * @method void setDataAmount(integer $DataAmount) Set Data volume of the task
 * @method string getId() Obtain Task ID
 * @method void setId(string $Id) Set Task ID
 * @method integer getUsedTime() Obtain The compute time in ms.
 * @method void setUsedTime(integer $UsedTime) Set The compute time in ms.
 * @method string getOutputPath() Obtain Task output path
 * @method void setOutputPath(string $OutputPath) Set Task output path
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method integer getState() Obtain Task status. Valid values: `0` (initial), `1` (executing), `2` (executed successfully), `-1` (failed to execute), `-3` (canceled).
 * @method void setState(integer $State) Set Task status. Valid values: `0` (initial), `1` (executing), `2` (executed successfully), `-1` (failed to execute), `-3` (canceled).
 * @method string getSQLType() Obtain SQL statement type of the task, such as DDL and DML.
 * @method void setSQLType(string $SQLType) Set SQL statement type of the task, such as DDL and DML.
 * @method string getSQL() Obtain SQL statement of the task
 * @method void setSQL(string $SQL) Set SQL statement of the task
 * @method boolean getResultExpired() Obtain Whether the result has expired
 * @method void setResultExpired(boolean $ResultExpired) Set Whether the result has expired
 * @method string getRowAffectInfo() Obtain Number of affected data rows
 * @method void setRowAffectInfo(string $RowAffectInfo) Set Number of affected data rows
 * @method string getDataSet() Obtain Dataset of task results
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSet(string $DataSet) Set Dataset of task results
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getError() Obtain Failure information, such as `errorMessage`. This field has been disused.
 * @method void setError(string $Error) Set Failure information, such as `errorMessage`. This field has been disused.
 * @method integer getPercentage() Obtain Task progress (%)
 * @method void setPercentage(integer $Percentage) Set Task progress (%)
 * @method string getOutputMessage() Obtain Output information of task execution
 * @method void setOutputMessage(string $OutputMessage) Set Output information of task execution
 * @method string getTaskType() Obtain Type of the engine executing the SQL statement
 * @method void setTaskType(string $TaskType) Set Type of the engine executing the SQL statement
 * @method string getProgressDetail() Obtain Task progress details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgressDetail(string $ProgressDetail) Set Task progress details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngineId() Obtain Compute resource ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineId(string $DataEngineId) Set Compute resource ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperateUin() Obtain Sub-UIN that executes the SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperateUin(string $OperateUin) Set Sub-UIN that executes the SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngineName() Obtain Compute resource name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineName(string $DataEngineName) Set Compute resource name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInputType() Obtain Whether the import type is local import or COS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputType(string $InputType) Set Whether the import type is local import or COS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInputConf() Obtain Import configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputConf(string $InputConf) Set Import configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataNumber() Obtain Number of data entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataNumber(integer $DataNumber) Set Number of data entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCanDownload() Obtain Whether the data can be downloaded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanDownload(boolean $CanDownload) Set Whether the data can be downloaded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAlias() Obtain User alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAlias(string $UserAlias) Set User alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSparkJobName() Obtain Spark application job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkJobName(string $SparkJobName) Set Spark application job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSparkJobId() Obtain Spark application job ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkJobId(string $SparkJobId) Set Spark application job ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSparkJobFile() Obtain JAR file of the Spark application entry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkJobFile(string $SparkJobFile) Set JAR file of the Spark application entry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUiUrl() Obtain Spark UI URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUiUrl(string $UiUrl) Set Spark UI URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalTime() Obtain The task time in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalTime(integer $TotalTime) Set The task time in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCmdArgs() Obtain The program entry parameter for running a task under a Spark job.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCmdArgs(string $CmdArgs) Set The program entry parameter for running a task under a Spark job.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageVersion() Obtain The image version of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageVersion(string $ImageVersion) Set The image version of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDriverSize() Obtain The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDriverSize(string $DriverSize) Set The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutorSize() Obtain The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorSize(string $ExecutorSize) Set The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecutorNums() Obtain The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorNums(integer $ExecutorNums) Set The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecutorMaxNumbers() Obtain The maximum executor count (in dynamic mode). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) Set The maximum executor count (in dynamic mode). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CommonMetrics getCommonMetrics() Obtain 
 * @method void setCommonMetrics(CommonMetrics $CommonMetrics) Set 
 * @method SparkMonitorMetrics getSparkMonitorMetrics() Obtain 
 * @method void setSparkMonitorMetrics(SparkMonitorMetrics $SparkMonitorMetrics) Set 
 * @method PrestoMonitorMetrics getPrestoMonitorMetrics() Obtain 
 * @method void setPrestoMonitorMetrics(PrestoMonitorMetrics $PrestoMonitorMetrics) Set 
 */
class TaskResponseInfo extends AbstractModel
{
    /**
     * @var string Database name of the task
     */
    public $DatabaseName;

    /**
     * @var integer Data volume of the task
     */
    public $DataAmount;

    /**
     * @var string Task ID
     */
    public $Id;

    /**
     * @var integer The compute time in ms.
     */
    public $UsedTime;

    /**
     * @var string Task output path
     */
    public $OutputPath;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var integer Task status. Valid values: `0` (initial), `1` (executing), `2` (executed successfully), `-1` (failed to execute), `-3` (canceled).
     */
    public $State;

    /**
     * @var string SQL statement type of the task, such as DDL and DML.
     */
    public $SQLType;

    /**
     * @var string SQL statement of the task
     */
    public $SQL;

    /**
     * @var boolean Whether the result has expired
     */
    public $ResultExpired;

    /**
     * @var string Number of affected data rows
     */
    public $RowAffectInfo;

    /**
     * @var string Dataset of task results
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSet;

    /**
     * @var string Failure information, such as `errorMessage`. This field has been disused.
     */
    public $Error;

    /**
     * @var integer Task progress (%)
     */
    public $Percentage;

    /**
     * @var string Output information of task execution
     */
    public $OutputMessage;

    /**
     * @var string Type of the engine executing the SQL statement
     */
    public $TaskType;

    /**
     * @var string Task progress details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProgressDetail;

    /**
     * @var string Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Compute resource ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineId;

    /**
     * @var string Sub-UIN that executes the SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperateUin;

    /**
     * @var string Compute resource name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineName;

    /**
     * @var string Whether the import type is local import or COS
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputType;

    /**
     * @var string Import configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputConf;

    /**
     * @var integer Number of data entries
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataNumber;

    /**
     * @var boolean Whether the data can be downloaded
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanDownload;

    /**
     * @var string User alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAlias;

    /**
     * @var string Spark application job name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkJobName;

    /**
     * @var string Spark application job ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkJobId;

    /**
     * @var string JAR file of the Spark application entry
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkJobFile;

    /**
     * @var string Spark UI URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UiUrl;

    /**
     * @var integer The task time in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalTime;

    /**
     * @var string The program entry parameter for running a task under a Spark job.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CmdArgs;

    /**
     * @var string The image version of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageVersion;

    /**
     * @var string The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DriverSize;

    /**
     * @var string The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutorSize;

    /**
     * @var integer The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutorNums;

    /**
     * @var integer The maximum executor count (in dynamic mode). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutorMaxNumbers;

    /**
     * @var CommonMetrics 
     */
    public $CommonMetrics;

    /**
     * @var SparkMonitorMetrics 
     */
    public $SparkMonitorMetrics;

    /**
     * @var PrestoMonitorMetrics 
     */
    public $PrestoMonitorMetrics;

    /**
     * @param string $DatabaseName Database name of the task
     * @param integer $DataAmount Data volume of the task
     * @param string $Id Task ID
     * @param integer $UsedTime The compute time in ms.
     * @param string $OutputPath Task output path
     * @param string $CreateTime Task creation time
     * @param integer $State Task status. Valid values: `0` (initial), `1` (executing), `2` (executed successfully), `-1` (failed to execute), `-3` (canceled).
     * @param string $SQLType SQL statement type of the task, such as DDL and DML.
     * @param string $SQL SQL statement of the task
     * @param boolean $ResultExpired Whether the result has expired
     * @param string $RowAffectInfo Number of affected data rows
     * @param string $DataSet Dataset of task results
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Error Failure information, such as `errorMessage`. This field has been disused.
     * @param integer $Percentage Task progress (%)
     * @param string $OutputMessage Output information of task execution
     * @param string $TaskType Type of the engine executing the SQL statement
     * @param string $ProgressDetail Task progress details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngineId Compute resource ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperateUin Sub-UIN that executes the SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngineName Compute resource name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InputType Whether the import type is local import or COS
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InputConf Import configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataNumber Number of data entries
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CanDownload Whether the data can be downloaded
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAlias User alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SparkJobName Spark application job name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SparkJobId Spark application job ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SparkJobFile JAR file of the Spark application entry
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UiUrl Spark UI URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalTime The task time in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CmdArgs The program entry parameter for running a task under a Spark job.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageVersion The image version of the cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DriverSize The driver size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutorSize The executor size.
Valid values for the standard resource type: `small`, `medium`, `large`, and `xlarge`.
Valid values for the memory resource type: `m.small`, `m.medium`, `m.large`, and `m.xlarge`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecutorNums The executor count. The minimum value is 1 and the maximum value is less than the cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecutorMaxNumbers The maximum executor count (in dynamic mode). The minimum value is 1 and the maximum value is less than the cluster specification. If you set `ExecutorMaxNumbers` to a value smaller than that of `ExecutorNums`, the value of `ExecutorMaxNumbers` is automatically changed to that of `ExecutorNums`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CommonMetrics $CommonMetrics 
     * @param SparkMonitorMetrics $SparkMonitorMetrics 
     * @param PrestoMonitorMetrics $PrestoMonitorMetrics 
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("ResultExpired",$param) and $param["ResultExpired"] !== null) {
            $this->ResultExpired = $param["ResultExpired"];
        }

        if (array_key_exists("RowAffectInfo",$param) and $param["RowAffectInfo"] !== null) {
            $this->RowAffectInfo = $param["RowAffectInfo"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = $param["DataSet"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProgressDetail",$param) and $param["ProgressDetail"] !== null) {
            $this->ProgressDetail = $param["ProgressDetail"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputConf",$param) and $param["InputConf"] !== null) {
            $this->InputConf = $param["InputConf"];
        }

        if (array_key_exists("DataNumber",$param) and $param["DataNumber"] !== null) {
            $this->DataNumber = $param["DataNumber"];
        }

        if (array_key_exists("CanDownload",$param) and $param["CanDownload"] !== null) {
            $this->CanDownload = $param["CanDownload"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("SparkJobName",$param) and $param["SparkJobName"] !== null) {
            $this->SparkJobName = $param["SparkJobName"];
        }

        if (array_key_exists("SparkJobId",$param) and $param["SparkJobId"] !== null) {
            $this->SparkJobId = $param["SparkJobId"];
        }

        if (array_key_exists("SparkJobFile",$param) and $param["SparkJobFile"] !== null) {
            $this->SparkJobFile = $param["SparkJobFile"];
        }

        if (array_key_exists("UiUrl",$param) and $param["UiUrl"] !== null) {
            $this->UiUrl = $param["UiUrl"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNums",$param) and $param["ExecutorNums"] !== null) {
            $this->ExecutorNums = $param["ExecutorNums"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("CommonMetrics",$param) and $param["CommonMetrics"] !== null) {
            $this->CommonMetrics = new CommonMetrics();
            $this->CommonMetrics->deserialize($param["CommonMetrics"]);
        }

        if (array_key_exists("SparkMonitorMetrics",$param) and $param["SparkMonitorMetrics"] !== null) {
            $this->SparkMonitorMetrics = new SparkMonitorMetrics();
            $this->SparkMonitorMetrics->deserialize($param["SparkMonitorMetrics"]);
        }

        if (array_key_exists("PrestoMonitorMetrics",$param) and $param["PrestoMonitorMetrics"] !== null) {
            $this->PrestoMonitorMetrics = new PrestoMonitorMetrics();
            $this->PrestoMonitorMetrics->deserialize($param["PrestoMonitorMetrics"]);
        }
    }
}
