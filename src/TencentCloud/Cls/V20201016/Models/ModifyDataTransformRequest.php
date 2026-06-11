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
 * ModifyDataTransform request structure.
 *
 * @method string getTaskId() Obtain Data processing task ID
-Get the data processing task Id by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).
 * @method void setTaskId(string $TaskId) Set Data processing task ID
-Get the data processing task Id by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).
 * @method string getName() Obtain Processing task name
-Get the name of a data processing task by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).

Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Up to 255 characters
 * @method void setName(string $Name) Set Processing task name
-Get the name of a data processing task by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).

Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Up to 255 characters
 * @method string getEtlContent() Obtain Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents:

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
 * @method void setEtlContent(string $EtlContent) Set Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents:

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method array getDstResources() Obtain Destination topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Destination topic ID and alias of the data processing task
 * @method boolean getBackupGiveUpData() Obtain Whether to discard log data after the limit is exceeded
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) Set Whether to discard log data after the limit is exceeded
 * @method integer getHasServicesLog() Obtain Whether to enable delivery service log. 1 for disabled, 2 for enabled
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable delivery service log. 1 for disabled, 2 for enabled
 * @method integer getKeepFailureLog() Obtain Whether to keep the failure log status. Valid values: 1: no; 2: yes.
 * @method void setKeepFailureLog(integer $KeepFailureLog) Set Whether to keep the failure log status. Valid values: 1: no; 2: yes.
 * @method string getFailureLogKey() Obtain Field name of a failed log.
 * @method void setFailureLogKey(string $FailureLogKey) Set Field name of a failed log.
 * @method array getDataTransformSqlDataSources() Obtain External data source information
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) Set External data source information
 * @method array getEnvInfos() Obtain Set environment variable
 * @method void setEnvInfos(array $EnvInfos) Set Set environment variable
 */
class ModifyDataTransformRequest extends AbstractModel
{
    /**
     * @var string Data processing task ID
-Get the data processing task Id by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).
     */
    public $TaskId;

    /**
     * @var string Processing task name
-Get the name of a data processing task by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).

Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Up to 255 characters
     */
    public $Name;

    /**
     * @var string Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents:

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
     */
    public $EtlContent;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var array Destination topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var boolean Whether to discard log data after the limit is exceeded
     */
    public $BackupGiveUpData;

    /**
     * @var integer Whether to enable delivery service log. 1 for disabled, 2 for enabled
     */
    public $HasServicesLog;

    /**
     * @var integer Whether to keep the failure log status. Valid values: 1: no; 2: yes.
     */
    public $KeepFailureLog;

    /**
     * @var string Field name of a failed log.
     */
    public $FailureLogKey;

    /**
     * @var array External data source information
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array Set environment variable
     */
    public $EnvInfos;

    /**
     * @param string $TaskId Data processing task ID
-Get the data processing task Id by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).
     * @param string $Name Processing task name
-Get the name of a data processing task by [searching data processing task list basic information](https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1).

Name limit
-Cannot be an empty string
-Cannot contain character '|'
-Up to 255 characters
     * @param string $EtlContent Processing statement. When FuncType is 2, EtlContent must use [log_auto_output](https://www.tencentcloud.com/document/product/614/70733?from_cn_redirect=1#b3c58797-4825-4807-bef4-68106e25024f). 

Other reference documents:

-[Create a processing task](https://www.tencentcloud.com/document/product/614/63940?from_cn_redirect=1) 
-[Function overview](https://www.tencentcloud.com/document/product/614/70395?from_cn_redirect=1)
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param array $DstResources Destination topic ID and alias of the data processing task
     * @param boolean $BackupGiveUpData Whether to discard log data after the limit is exceeded
     * @param integer $HasServicesLog Whether to enable delivery service log. 1 for disabled, 2 for enabled
     * @param integer $KeepFailureLog Whether to keep the failure log status. Valid values: 1: no; 2: yes.
     * @param string $FailureLogKey Field name of a failed log.
     * @param array $DataTransformSqlDataSources External data source information
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
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
