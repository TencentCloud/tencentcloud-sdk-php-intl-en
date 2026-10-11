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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ### In `TaskTypePropertyList`, `TaskTypeProperty` requires filling in different keys and values for different task types;

### 1. NOTEBOOK task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required |
| ------------ | ----------------- | ---------------------------------- | ----------------------- |
| Source | Source | Supports only 2 or 5. Source 2: GIT, 5: workspace | Yes |
| NotebookPath | Notebook relative path | If Source is 5, obtain it from ListFiles | Required if Source is 2 or 5 |

### 2. DATA_INTEGRATION task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required |
| --------------------- | -------------------- | --------------------------------------- | -------- |
| Source | Source | Required: 4. Indicates the source is COS. | Yes |
| TemplatePath          | Data access task configuration path | Obtain through the ListBatchIngestionTasks API | Yes       |
| DataIntegrationTaskId | Data access task ID | Obtain through the ListBatchIngestionTasks API | Yes |

### 3. RUN_WORKFLOW task type

#### Attribute configuration

| Attribute Key | Attribute Name | Description | Required |
| ---------- | ---------- | ----------------------------- | -------- |
| WorkflowId | Select workflow | Obtain through the API (ListWorkflows) | Yes |

### 4. SQL task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required or not |
| --------------- | ----------- | --------------------------------------------- | -------------------- |
| Source | Source | Supports only 2 or 5. Source 2: GIT, 5: workspace | Yes |
| SqlPath | SQL script path | SQL script path | Required when Source is 2 |
| CodeFileName | File name | When Source is 5, obtain through the ListReleasedQueries API | No |
| CodeFileId | File ID | When Source is 5, obtain through the ListReleasedQueries API | Required when Source is 5 |
| CodeFileVersion | File version | When Source is 5, obtain through the ListReleasedQueries API | No |

### 5. PYTHON task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required or not |
| ---------- | -------------- | -------------------------------------- | -------- |
| Source | Source | Supports only 2 or 5. Source 2: GIT, 5: workspace | Yes |
| SourcePath | Python script path | When Source is 5, obtain through the ListFiles API | Yes |

### 6. DATA_QUALITY (quality monitoring) task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required |
| -------------- | ---------------- | --------------------------------------------- | -------- |
| Source         | Source             | Required: 4. Indicates the source is COS. | Yes       |
| TemplatePath | Quality monitoring configuration path | Must be obtained through the ListDataQualityTaskSummaries API | Yes |
| SourceUniqueId | Quality monitoring ID | It needs to be obtained through the ListDataQualityTaskSummaries API. | Yes |
| ExecutionType | Execution type | Required: SQL | Yes |
| AfterAspect | Post-aspect of quality task | Obtain through the ListDataQualityTaskSummaries API | No |
| BeforeAspect | Front aspect of the quality task | Obtain through the ListDataQualityTaskSummaries API | No |

### 7. IF_ELSE task type

#### Attribute configuration

| Attribute Key | Attribute Name | Description | Required |
| ---------- | -------- | --------------- | -------- |
| Conditions | Condition list | IF-ELSE conditional configuration | Yes |

### 8. FOR_EACH task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required |
| -------------- | ------------ | ---------------------------------- | -------- |
| MaxConcurrency | Maximum concurrency number | Maximum concurrency number, default value: 1 | Yes |
| MaxIterations | Maximum number of iterations | Maximum number of iterations. Default value: 1000. | Yes |
| LoopDataArray | Loop parameter | Array in JSON format, or variable wrapped in {{}} | Yes |

### 9. RAY_JOB (Ray job) task type

#### Attribute configuration

| Attribute key | Attribute name | Description | Required |
| -------------- | -------------------- | ---------------------------------- | -------- |
| RunMode | Running mode | Running mode. Value: SERVERLESS (pull up a cluster as needed) / DEDICATED (submit to a specified cluster). Default: DEDICATED | Yes |
| Entrypoint | Entry command | Entry command | Yes |
| JobConfig | Task configuration | For example, storage configuration + computing environment. To pass the value, refer to the UpdateWorkflow API call when saving a Ray job task on the frontend page. For Image, call the DLC ListImages API and get the API Url field | Required when RunMode is SERVERLESS |
| ClusterId | Ray cluster | Select from the list of configured Ray clusters (engines) under the selected computational resource. Obtain through the computational resource API. | Required when RunMode is DEDICATED |
| Source | Task source | Task source. Value: 1 (local file) / 5 (workspace) | Yes |
| JobPackage | Task source file address | Task source path: if Source is 1, the COS address of the uploaded local file (supports .zip / .py files); if Source is 5, the path of the selected workspace file/folder | Yes |
| JobPackageName | Local file name of the task source | Local file name of the task source | Required when Source is 1 |
| CodeFileId | Code file ID | When Source is 5, get the ID of the selected file/folder from the workspace file selection component | Required when Source is 5 |
| WorkspaceEntryType | Workspace entry type | When Source is 5, the type of the selected workspace entry: FILE / FOLDER, auto-written by the frontend selector based on the selected target | Required when Source is 5 |

### RuntimePropertyList
<p>Task running parameter list, used to configure computing resources when the task is running. It is case-sensitive from TaskTypePropertyList (task extended attribute): TaskTypePropertyList carries the business configuration of the task itself (such as script source, path), while RuntimePropertyList carries the resource configuration when the task is running (such as resource mode, CU specification, number of Executors).</p>
<p>Mainly suitable for task types that require configuring computing resources (such as NOTEBOOK and PYTHON).</p>
<p>Specific fillable attribute keys are configured as standard based on the task type attribute configuration. You can obtain them through the ListWorkflowTaskTypeProperties API (attribute items with propertyType as RUNTIME). Common running parameter key descriptions:</p>

| Attribute key | Attribute name | Description | Required (when the linkage condition is met) | Default value |
| ---------- | -------------- | ---------------------------------- | -------- | -------- |
| ResourceMode | Resource mode | 1: distributed; 2: single-node | Yes | 1 |
| ConfigType | Configuration type | DEFAULT: default configuration; CUSTOM: custom configuration | Yes | DEFAULT |
| ExecutorAllocation | Executor allocation mode | DYNAMIC: dynamic allocation; FIXED: fixed allocation | Yes (when distributed and custom configuration is used) | DYNAMIC |
| ExecutorMinNum | Minimum number of executors | Positive integer | Yes (for dynamic allocation) | 1 |
| ExecutorMaxNum | Maximum number of executors | Positive integer | Yes (for dynamic allocation) | 1 |
| ExecutorFixedNum | Fixed number of executors | Positive integer | No (for fixed allocation) | - |
| ExecutorCU | Executor resource specification | small / medium / large / xlarge / 4xlarge | No (for distributed with custom configuration) | - |
| DriverCU | Driver resource specification | small / medium / large / xlarge / 4xlarge | No (for distributed with custom configuration or single-node) | - |
| ExecutorGPU | Number of Executor GPUs | 0 means non-use of GPUs | No (for distributed with custom configuration) | - |
| DriverGPU | Number of driver GPUs | 0 means non-use of GPUs | No (for distributed and custom configuration) | - |
| Style | Configuration style | UI / JSON | Yes (for custom configuration) | UI |

<p>Supplemental description:</p>
<p>1. "Required" refers to the required tag in property configuration. Required verification is triggered only when the property linkage conditions (for example, ResourceMode=1 and ConfigType=CUSTOM) are met;</p>
<p>2. When ConfigType is DEFAULT, call the ListComputeResourceOptions API to obtain the default specification value of the selected computational resource, and bind it to the running parameters (ExecutorCU, DriverCU, ExecutorMinNum, ExecutorMaxNum, etc.) before input. When ConfigType is CUSTOM, the running parameters are specified by the caller.</p>
 *
 * @method string getTaskTypeName() Obtain <p>Task type: SQL: for executing SQL queries and data processing operations; DATA_INTEGRATION: for offline data access operations; NOTEBOOK: used to run Notebook scripts; RUN_WORKFLOW: for executing nested workflows; PYTHON: used to run Python scripts; RAY_JOB: used to run Ray jobs; DATA_QUALITY: for data quality monitoring; IF_ELSE: for conditional branch judgment; FOR_EACH: for loop traversal execution;</p>
 * @method void setTaskTypeName(string $TaskTypeName) Set <p>Task type: SQL: for executing SQL queries and data processing operations; DATA_INTEGRATION: for offline data access operations; NOTEBOOK: used to run Notebook scripts; RUN_WORKFLOW: for executing nested workflows; PYTHON: used to run Python scripts; RAY_JOB: used to run Ray jobs; DATA_QUALITY: for data quality monitoring; IF_ELSE: for conditional branch judgment; FOR_EACH: for loop traversal execution;</p>
 * @method TaskTypeNotebookExt getNotebook() Obtain <p>Notebook type extended information</p>
 * @method void setNotebook(TaskTypeNotebookExt $Notebook) Set <p>Notebook type extended information</p>
 * @method array getTaskTypePropertyList() Obtain <p>List of task extended attributes. For details, see the description of TaskType.TaskPropertyList.</p>
 * @method void setTaskTypePropertyList(array $TaskTypePropertyList) Set <p>List of task extended attributes. For details, see the description of TaskType.TaskPropertyList.</p>
 * @method array getRuntimePropertyList() Obtain <p>Runtime attribute list. For specific values, fill in reference to the TaskType.RuntimePropertyList description</p>
 * @method void setRuntimePropertyList(array $RuntimePropertyList) Set <p>Runtime attribute list. For specific values, fill in reference to the TaskType.RuntimePropertyList description</p>
 */
class TaskType extends AbstractModel
{
    /**
     * @var string <p>Task type: SQL: for executing SQL queries and data processing operations; DATA_INTEGRATION: for offline data access operations; NOTEBOOK: used to run Notebook scripts; RUN_WORKFLOW: for executing nested workflows; PYTHON: used to run Python scripts; RAY_JOB: used to run Ray jobs; DATA_QUALITY: for data quality monitoring; IF_ELSE: for conditional branch judgment; FOR_EACH: for loop traversal execution;</p>
     */
    public $TaskTypeName;

    /**
     * @var TaskTypeNotebookExt <p>Notebook type extended information</p>
     * @deprecated
     */
    public $Notebook;

    /**
     * @var array <p>List of task extended attributes. For details, see the description of TaskType.TaskPropertyList.</p>
     */
    public $TaskTypePropertyList;

    /**
     * @var array <p>Runtime attribute list. For specific values, fill in reference to the TaskType.RuntimePropertyList description</p>
     */
    public $RuntimePropertyList;

    /**
     * @param string $TaskTypeName <p>Task type: SQL: for executing SQL queries and data processing operations; DATA_INTEGRATION: for offline data access operations; NOTEBOOK: used to run Notebook scripts; RUN_WORKFLOW: for executing nested workflows; PYTHON: used to run Python scripts; RAY_JOB: used to run Ray jobs; DATA_QUALITY: for data quality monitoring; IF_ELSE: for conditional branch judgment; FOR_EACH: for loop traversal execution;</p>
     * @param TaskTypeNotebookExt $Notebook <p>Notebook type extended information</p>
     * @param array $TaskTypePropertyList <p>List of task extended attributes. For details, see the description of TaskType.TaskPropertyList.</p>
     * @param array $RuntimePropertyList <p>Runtime attribute list. For specific values, fill in reference to the TaskType.RuntimePropertyList description</p>
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
        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("Notebook",$param) and $param["Notebook"] !== null) {
            $this->Notebook = new TaskTypeNotebookExt();
            $this->Notebook->deserialize($param["Notebook"]);
        }

        if (array_key_exists("TaskTypePropertyList",$param) and $param["TaskTypePropertyList"] !== null) {
            $this->TaskTypePropertyList = [];
            foreach ($param["TaskTypePropertyList"] as $key => $value){
                $obj = new TaskTypeProperty();
                $obj->deserialize($value);
                array_push($this->TaskTypePropertyList, $obj);
            }
        }

        if (array_key_exists("RuntimePropertyList",$param) and $param["RuntimePropertyList"] !== null) {
            $this->RuntimePropertyList = [];
            foreach ($param["RuntimePropertyList"] as $key => $value){
                $obj = new TaskTypeProperty();
                $obj->deserialize($value);
                array_push($this->RuntimePropertyList, $obj);
            }
        }
    }
}
