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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitSqlTask request structure.
 *
 * @method string getDatabaseType() Obtain Database Type
 * @method void setDatabaseType(string $DatabaseType) Set Database Type
 * @method integer getDatasourceId() Obtain Data Source ID
 * @method void setDatasourceId(integer $DatasourceId) Set Data Source ID
 * @method string getGroupId() Obtain Resource Group ID
 * @method void setGroupId(string $GroupId) Set Resource Group ID
 * @method string getScriptId() Obtain Script File ID
 * @method void setScriptId(string $ScriptId) Set Script File ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getEngineId() Obtain Execution Engine Instance ID
 * @method void setEngineId(string $EngineId) Set Execution Engine Instance ID
 * @method string getScriptContent() Obtain Script Content
 * @method void setScriptContent(string $ScriptContent) Set Script Content
 * @method string getResourceQueue() Obtain Resource Queue
 * @method void setResourceQueue(string $ResourceQueue) Set Resource Queue
 * @method string getDatasourceType() Obtain Database Type
 * @method void setDatasourceType(string $DatasourceType) Set Database Type
 * @method string getComputeResource() Obtain Compute Resource Name
 * @method void setComputeResource(string $ComputeResource) Set Compute Resource Name
 * @method string getRunParams() Obtain Advanced Running Parameters
 * @method void setRunParams(string $RunParams) Set Advanced Running Parameters
 * @method string getConfParams() Obtain Advanced Settings
 * @method void setConfParams(string $ConfParams) Set Advanced Settings
 * @method boolean getScriptEncryption() Obtain Whether the script content is Base64 encrypted
 * @method void setScriptEncryption(boolean $ScriptEncryption) Set Whether the script content is Base64 encrypted
 */
class SubmitSqlTaskRequest extends AbstractModel
{
    /**
     * @var string Database Type
     */
    public $DatabaseType;

    /**
     * @var integer Data Source ID
     */
    public $DatasourceId;

    /**
     * @var string Resource Group ID
     */
    public $GroupId;

    /**
     * @var string Script File ID
     */
    public $ScriptId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Execution Engine Instance ID
     */
    public $EngineId;

    /**
     * @var string Script Content
     */
    public $ScriptContent;

    /**
     * @var string Resource Queue
     */
    public $ResourceQueue;

    /**
     * @var string Database Type
     */
    public $DatasourceType;

    /**
     * @var string Compute Resource Name
     */
    public $ComputeResource;

    /**
     * @var string Advanced Running Parameters
     */
    public $RunParams;

    /**
     * @var string Advanced Settings
     */
    public $ConfParams;

    /**
     * @var boolean Whether the script content is Base64 encrypted
     */
    public $ScriptEncryption;

    /**
     * @param string $DatabaseType Database Type
     * @param integer $DatasourceId Data Source ID
     * @param string $GroupId Resource Group ID
     * @param string $ScriptId Script File ID
     * @param string $ProjectId Project ID
     * @param string $DatabaseName Database name
     * @param string $EngineId Execution Engine Instance ID
     * @param string $ScriptContent Script Content
     * @param string $ResourceQueue Resource Queue
     * @param string $DatasourceType Database Type
     * @param string $ComputeResource Compute Resource Name
     * @param string $RunParams Advanced Running Parameters
     * @param string $ConfParams Advanced Settings
     * @param boolean $ScriptEncryption Whether the script content is Base64 encrypted
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("EngineId",$param) and $param["EngineId"] !== null) {
            $this->EngineId = $param["EngineId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("ResourceQueue",$param) and $param["ResourceQueue"] !== null) {
            $this->ResourceQueue = $param["ResourceQueue"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("ComputeResource",$param) and $param["ComputeResource"] !== null) {
            $this->ComputeResource = $param["ComputeResource"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("ConfParams",$param) and $param["ConfParams"] !== null) {
            $this->ConfParams = $param["ConfParams"];
        }

        if (array_key_exists("ScriptEncryption",$param) and $param["ScriptEncryption"] !== null) {
            $this->ScriptEncryption = $param["ScriptEncryption"];
        }
    }
}
