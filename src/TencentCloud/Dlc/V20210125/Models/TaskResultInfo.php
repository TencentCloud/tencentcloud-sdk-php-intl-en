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
 * The task result information.
 *
 * @method string getTaskId() Obtain Unique task ID
 * @method void setTaskId(string $TaskId) Set Unique task ID
 * @method string getDatasourceConnectionName() Obtain Name of the default selected data source when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Name of the default selected data source when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Name of the default selected database when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Name of the default selected database when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSQL() Obtain The currently executed SQL statement. Each task contains one SQL statement.
 * @method void setSQL(string $SQL) Set The currently executed SQL statement. Each task contains one SQL statement.
 * @method string getSQLType() Obtain Type of the executed task. Valid values: `DDL`, `DML`, `DQL`.
 * @method void setSQLType(string $SQLType) Set Type of the executed task. Valid values: `DDL`, `DML`, `DQL`.
 * @method integer getState() Obtain u200cThe current task status. Valid values: `0` (initializing), `1` (executing), `2` (executed), `3` (writing data), `4` (queuing), u200c`-1` (failed), and `-3` (canceled). Only when the task is successfully executed, a task execution result will be returned.
 * @method void setState(integer $State) Set u200cThe current task status. Valid values: `0` (initializing), `1` (executing), `2` (executed), `3` (writing data), `4` (queuing), u200c`-1` (failed), and `-3` (canceled). Only when the task is successfully executed, a task execution result will be returned.
 * @method integer getDataAmount() Obtain Amount of the data scanned in bytes
 * @method void setDataAmount(integer $DataAmount) Set Amount of the data scanned in bytes
 * @method integer getUsedTime() Obtain The compute time in ms.
 * @method void setUsedTime(integer $UsedTime) Set The compute time in ms.
 * @method string getOutputPath() Obtain Address of the COS bucket for storing the task result
 * @method void setOutputPath(string $OutputPath) Set Address of the COS bucket for storing the task result
 * @method string getCreateTime() Obtain Task creation timestamp
 * @method void setCreateTime(string $CreateTime) Set Task creation timestamp
 * @method string getOutputMessage() Obtain Task execution information. `success` will be returned if the task succeeds; otherwise, the failure cause will be returned.
 * @method void setOutputMessage(string $OutputMessage) Set Task execution information. `success` will be returned if the task succeeds; otherwise, the failure cause will be returned.
 * @method string getRowAffectInfo() Obtain Number of affected rows
 * @method void setRowAffectInfo(string $RowAffectInfo) Set Number of affected rows
 * @method array getResultSchema() Obtain Schema information of the result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultSchema(array $ResultSchema) Set Schema information of the result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResultSet() Obtain Result information. After it is unescaped, each element of the outer array is a data row.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultSet(string $ResultSet) Set Result information. After it is unescaped, each element of the outer array is a data row.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNextToken() Obtain Pagination information. If there is no more result data, `nextToken` will be empty.
 * @method void setNextToken(string $NextToken) Set Pagination information. If there is no more result data, `nextToken` will be empty.
 * @method integer getPercentage() Obtain Task progress (%)
 * @method void setPercentage(integer $Percentage) Set Task progress (%)
 * @method string getProgressDetail() Obtain Task progress details
 * @method void setProgressDetail(string $ProgressDetail) Set Task progress details
 * @method string getDisplayFormat() Obtain Console display format. Valid values: `table`, `text`.
 * @method void setDisplayFormat(string $DisplayFormat) Set Console display format. Valid values: `table`, `text`.
 * @method integer getTotalTime() Obtain The task time in ms.
 * @method void setTotalTime(integer $TotalTime) Set The task time in ms.
 * @method float getQueryResultTime() Obtain Time consumed to get results
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueryResultTime(float $QueryResultTime) Set Time consumed to get results
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskResultInfo extends AbstractModel
{
    /**
     * @var string Unique task ID
     */
    public $TaskId;

    /**
     * @var string Name of the default selected data source when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionName;

    /**
     * @var string Name of the default selected database when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string The currently executed SQL statement. Each task contains one SQL statement.
     */
    public $SQL;

    /**
     * @var string Type of the executed task. Valid values: `DDL`, `DML`, `DQL`.
     */
    public $SQLType;

    /**
     * @var integer u200cThe current task status. Valid values: `0` (initializing), `1` (executing), `2` (executed), `3` (writing data), `4` (queuing), u200c`-1` (failed), and `-3` (canceled). Only when the task is successfully executed, a task execution result will be returned.
     */
    public $State;

    /**
     * @var integer Amount of the data scanned in bytes
     */
    public $DataAmount;

    /**
     * @var integer The compute time in ms.
     */
    public $UsedTime;

    /**
     * @var string Address of the COS bucket for storing the task result
     */
    public $OutputPath;

    /**
     * @var string Task creation timestamp
     */
    public $CreateTime;

    /**
     * @var string Task execution information. `success` will be returned if the task succeeds; otherwise, the failure cause will be returned.
     */
    public $OutputMessage;

    /**
     * @var string Number of affected rows
     */
    public $RowAffectInfo;

    /**
     * @var array Schema information of the result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultSchema;

    /**
     * @var string Result information. After it is unescaped, each element of the outer array is a data row.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultSet;

    /**
     * @var string Pagination information. If there is no more result data, `nextToken` will be empty.
     */
    public $NextToken;

    /**
     * @var integer Task progress (%)
     */
    public $Percentage;

    /**
     * @var string Task progress details
     */
    public $ProgressDetail;

    /**
     * @var string Console display format. Valid values: `table`, `text`.
     */
    public $DisplayFormat;

    /**
     * @var integer The task time in ms.
     */
    public $TotalTime;

    /**
     * @var float Time consumed to get results
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueryResultTime;

    /**
     * @param string $TaskId Unique task ID
     * @param string $DatasourceConnectionName Name of the default selected data source when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Name of the default selected database when the current job is executed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SQL The currently executed SQL statement. Each task contains one SQL statement.
     * @param string $SQLType Type of the executed task. Valid values: `DDL`, `DML`, `DQL`.
     * @param integer $State u200cThe current task status. Valid values: `0` (initializing), `1` (executing), `2` (executed), `3` (writing data), `4` (queuing), u200c`-1` (failed), and `-3` (canceled). Only when the task is successfully executed, a task execution result will be returned.
     * @param integer $DataAmount Amount of the data scanned in bytes
     * @param integer $UsedTime The compute time in ms.
     * @param string $OutputPath Address of the COS bucket for storing the task result
     * @param string $CreateTime Task creation timestamp
     * @param string $OutputMessage Task execution information. `success` will be returned if the task succeeds; otherwise, the failure cause will be returned.
     * @param string $RowAffectInfo Number of affected rows
     * @param array $ResultSchema Schema information of the result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResultSet Result information. After it is unescaped, each element of the outer array is a data row.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NextToken Pagination information. If there is no more result data, `nextToken` will be empty.
     * @param integer $Percentage Task progress (%)
     * @param string $ProgressDetail Task progress details
     * @param string $DisplayFormat Console display format. Valid values: `table`, `text`.
     * @param integer $TotalTime The task time in ms.
     * @param float $QueryResultTime Time consumed to get results
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
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

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("RowAffectInfo",$param) and $param["RowAffectInfo"] !== null) {
            $this->RowAffectInfo = $param["RowAffectInfo"];
        }

        if (array_key_exists("ResultSchema",$param) and $param["ResultSchema"] !== null) {
            $this->ResultSchema = [];
            foreach ($param["ResultSchema"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->ResultSchema, $obj);
            }
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = $param["ResultSet"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("ProgressDetail",$param) and $param["ProgressDetail"] !== null) {
            $this->ProgressDetail = $param["ProgressDetail"];
        }

        if (array_key_exists("DisplayFormat",$param) and $param["DisplayFormat"] !== null) {
            $this->DisplayFormat = $param["DisplayFormat"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("QueryResultTime",$param) and $param["QueryResultTime"] !== null) {
            $this->QueryResultTime = $param["QueryResultTime"];
        }
    }
}
