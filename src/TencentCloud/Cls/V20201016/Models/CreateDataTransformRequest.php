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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTransform request structure.
 *
 * @method integer getFuncType() Obtain Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
 * @method void setFuncType(integer $FuncType) Set Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
 * @method string getSrcTopicId() Obtain Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setSrcTopicId(string $SrcTopicId) Set Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getName() Obtain Processing task name
Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Longest 128 characters
 * @method void setName(string $Name) Set Processing task name
Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Longest 128 characters
 * @method string getEtlContent() Obtain Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
 * @method void setEtlContent(string $EtlContent) Set Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
 * @method integer getTaskType() Obtain Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
 * @method void setTaskType(integer $TaskType) Set Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
 * @method array getDstResources() Obtain Target topic_id and alias of the processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
Target topic_id. Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
Alias limitation: 1. Cannot be an empty string. 2. Cannot contain the character '|'.

 * @method void setDstResources(array $DstResources) Set Target topic_id and alias of the processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
Target topic_id. Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
Alias limitation: 1. Cannot be an empty string. 2. Cannot contain the character '|'.

 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method array getPreviewLogStatistics() Obtain Test data for preview processing results
Obtain the target log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setPreviewLogStatistics(array $PreviewLogStatistics) Set Test data for preview processing results
Obtain the target log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method boolean getBackupGiveUpData() Obtain When FuncType is 2, whether to discard data if the count of dynamically created logsets and log topics exceeds product specification limits, default false.

false: Create a fallback logset and log topic and write to fallback topic.
true: Discard log data.
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) Set When FuncType is 2, whether to discard data if the count of dynamically created logsets and log topics exceeds product specification limits, default false.

false: Create a fallback logset and log topic and write to fallback topic.
true: Discard log data.
 * @method integer getHasServicesLog() Obtain Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method integer getDataTransformType() Obtain Data processing type. Valid values: 0: standard processing task; 1: pre-processing task. A pre-processing task can process the collected logs and then write them into a log topic.
 * @method void setDataTransformType(integer $DataTransformType) Set Data processing type. Valid values: 0: standard processing task; 1: pre-processing task. A pre-processing task can process the collected logs and then write them into a log topic.
 * @method integer getKeepFailureLog() Obtain Log status of failed jobs, 1: not retain (default), 2: retain.
 * @method void setKeepFailureLog(integer $KeepFailureLog) Set Log status of failed jobs, 1: not retain (default), 2: retain.
 * @method string getFailureLogKey() Obtain Field name of a failed log.
 * @method void setFailureLogKey(string $FailureLogKey) Set Field name of a failed log.
 * @method integer getProcessFromTimestamp() Obtain Specify the start time of data processing, a Unix second-level timestamp.
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
 * @method void setProcessFromTimestamp(integer $ProcessFromTimestamp) Set Specify the start time of data processing, a Unix second-level timestamp.
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
 * @method integer getProcessToTimestamp() Obtain Specify the end time of data processing, a Unix second-level timestamp.

-Cannot specify a future time
-Leave blank to run constantly
 * @method void setProcessToTimestamp(integer $ProcessToTimestamp) Set Specify the end time of data processing, a Unix second-level timestamp.

-Cannot specify a future time
-Leave blank to run constantly
 * @method string getTaskId() Obtain Preview a task (TaskType is 1 or 2) that is already created and used the capacity to associate with external data. This parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
 * @method void setTaskId(string $TaskId) Set Preview a task (TaskType is 1 or 2) that is already created and used the capacity to associate with external data. This parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
 * @method array getDataTransformSqlDataSources() Obtain Associated data source information
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) Set Associated data source information
 * @method array getEnvInfos() Obtain Set environment variable
 * @method void setEnvInfos(array $EnvInfos) Set Set environment variable
 */
class CreateDataTransformRequest extends AbstractModel
{
    /**
     * @var integer Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
     */
    public $FuncType;

    /**
     * @var string Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $SrcTopicId;

    /**
     * @var string Processing task name
Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Longest 128 characters
     */
    public $Name;

    /**
     * @var string Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
     */
    public $EtlContent;

    /**
     * @var integer Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
     */
    public $TaskType;

    /**
     * @var array Target topic_id and alias of the processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
Target topic_id. Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
Alias limitation: 1. Cannot be an empty string. 2. Cannot contain the character '|'.

     */
    public $DstResources;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var array Test data for preview processing results
Obtain the target log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $PreviewLogStatistics;

    /**
     * @var boolean When FuncType is 2, whether to discard data if the count of dynamically created logsets and log topics exceeds product specification limits, default false.

false: Create a fallback logset and log topic and write to fallback topic.
true: Discard log data.
     */
    public $BackupGiveUpData;

    /**
     * @var integer Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     */
    public $HasServicesLog;

    /**
     * @var integer Data processing type. Valid values: 0: standard processing task; 1: pre-processing task. A pre-processing task can process the collected logs and then write them into a log topic.
     */
    public $DataTransformType;

    /**
     * @var integer Log status of failed jobs, 1: not retain (default), 2: retain.
     */
    public $KeepFailureLog;

    /**
     * @var string Field name of a failed log.
     */
    public $FailureLogKey;

    /**
     * @var integer Specify the start time of data processing, a Unix second-level timestamp.
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
     */
    public $ProcessFromTimestamp;

    /**
     * @var integer Specify the end time of data processing, a Unix second-level timestamp.

-Cannot specify a future time
-Leave blank to run constantly
     */
    public $ProcessToTimestamp;

    /**
     * @var string Preview a task (TaskType is 1 or 2) that is already created and used the capacity to associate with external data. This parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
     */
    public $TaskId;

    /**
     * @var array Associated data source information
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array Set environment variable
     */
    public $EnvInfos;

    /**
     * @param integer $FuncType Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
     * @param string $SrcTopicId Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $Name Processing task name
Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Longest 128 characters
     * @param string $EtlContent Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
     * @param integer $TaskType Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
     * @param array $DstResources Target topic_id and alias of the processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
Target topic_id. Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
Alias limitation: 1. Cannot be an empty string. 2. Cannot contain the character '|'.

     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param array $PreviewLogStatistics Test data for preview processing results
Obtain the target log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param boolean $BackupGiveUpData When FuncType is 2, whether to discard data if the count of dynamically created logsets and log topics exceeds product specification limits, default false.

false: Create a fallback logset and log topic and write to fallback topic.
true: Discard log data.
     * @param integer $HasServicesLog Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     * @param integer $DataTransformType Data processing type. Valid values: 0: standard processing task; 1: pre-processing task. A pre-processing task can process the collected logs and then write them into a log topic.
     * @param integer $KeepFailureLog Log status of failed jobs, 1: not retain (default), 2: retain.
     * @param string $FailureLogKey Field name of a failed log.
     * @param integer $ProcessFromTimestamp Specify the start time of data processing, a Unix second-level timestamp.
-For any time range within the log topic lifecycle, if it exceeds the lifecycle, only process the part with data within the lifecycle.
     * @param integer $ProcessToTimestamp Specify the end time of data processing, a Unix second-level timestamp.

-Cannot specify a future time
-Leave blank to run constantly
     * @param string $TaskId Preview a task (TaskType is 1 or 2) that is already created and used the capacity to associate with external data. This parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
     * @param array $DataTransformSqlDataSources Associated data source information
     * @param array $EnvInfos Set environment variable
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
        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("PreviewLogStatistics",$param) and $param["PreviewLogStatistics"] !== null) {
            $this->PreviewLogStatistics = [];
            foreach ($param["PreviewLogStatistics"] as $key => $value){
                $obj = new PreviewLogStatistic();
                $obj->deserialize($value);
                array_push($this->PreviewLogStatistics, $obj);
            }
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("DataTransformType",$param) and $param["DataTransformType"] !== null) {
            $this->DataTransformType = $param["DataTransformType"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
        }

        if (array_key_exists("ProcessFromTimestamp",$param) and $param["ProcessFromTimestamp"] !== null) {
            $this->ProcessFromTimestamp = $param["ProcessFromTimestamp"];
        }

        if (array_key_exists("ProcessToTimestamp",$param) and $param["ProcessToTimestamp"] !== null) {
            $this->ProcessToTimestamp = $param["ProcessToTimestamp"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataTransformSqlDataSources",$param) and $param["DataTransformSqlDataSources"] !== null) {
            $this->DataTransformSqlDataSources = [];
            foreach ($param["DataTransformSqlDataSources"] as $key => $value){
                $obj = new DataTransformSqlDataSource();
                $obj->deserialize($value);
                array_push($this->DataTransformSqlDataSources, $obj);
            }
        }

        if (array_key_exists("EnvInfos",$param) and $param["EnvInfos"] !== null) {
            $this->EnvInfos = [];
            foreach ($param["EnvInfos"] as $key => $value){
                $obj = new EnvInfo();
                $obj->deserialize($value);
                array_push($this->EnvInfos, $obj);
            }
        }
    }
}
