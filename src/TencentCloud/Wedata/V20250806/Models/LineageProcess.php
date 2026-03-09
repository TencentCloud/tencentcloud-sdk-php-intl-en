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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LineageProcess lineage generation process.
 *
 * @method string getProcessId() Obtain Original unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessId(string $ProcessId) Set Original unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessType() Obtain Task type
Schedule task execution.
    SCHEDULE_TASK,
Integration task.
    INTEGRATION_TASK,
Third-Party reporting.
    THIRD_REPORT,
Data modeling.
    TABLE_MODEL,
Create metrics for the model.
    MODEL_METRIC,
Create a derived metric from atomic metrics.
    METRIC_METRIC,
Data service.
    DATA_SERVICE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessType(string $ProcessType) Set Task type
Schedule task execution.
    SCHEDULE_TASK,
Integration task.
    INTEGRATION_TASK,
Third-Party reporting.
    THIRD_REPORT,
Data modeling.
    TABLE_MODEL,
Create metrics for the model.
    MODEL_METRIC,
Create a derived metric from atomic metrics.
    METRIC_METRIC,
Data service.
    DATA_SERVICE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPlatform() Obtain WEDATA, THIRD;
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlatform(string $Platform) Set WEDATA, THIRD;
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessSubType() Obtain Task Subtype
 SQL_TASK,
Integrate real-time tasks lineage.
    INTEGRATED_STREAM,
Integration of offline tasks lineage.
    INTEGRATED_OFFLINE;
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessSubType(string $ProcessSubType) Set Task Subtype
 SQL_TASK,
Integrate real-time tasks lineage.
    INTEGRATED_STREAM,
Integration of offline tasks lineage.
    INTEGRATED_OFFLINE;
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProcessProperties() Obtain Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessProperties(array $ProcessProperties) Set Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineageNodeId() Obtain Unique node ID of the lineage task.
 * @method void setLineageNodeId(string $LineageNodeId) Set Unique node ID of the lineage task.
 */
class LineageProcess extends AbstractModel
{
    /**
     * @var string Original unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessId;

    /**
     * @var string Task type
Schedule task execution.
    SCHEDULE_TASK,
Integration task.
    INTEGRATION_TASK,
Third-Party reporting.
    THIRD_REPORT,
Data modeling.
    TABLE_MODEL,
Create metrics for the model.
    MODEL_METRIC,
Create a derived metric from atomic metrics.
    METRIC_METRIC,
Data service.
    DATA_SERVICE
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessType;

    /**
     * @var string WEDATA, THIRD;
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Platform;

    /**
     * @var string Task Subtype
 SQL_TASK,
Integrate real-time tasks lineage.
    INTEGRATED_STREAM,
Integration of offline tasks lineage.
    INTEGRATED_OFFLINE;
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessSubType;

    /**
     * @var array Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessProperties;

    /**
     * @var string Unique node ID of the lineage task.
     */
    public $LineageNodeId;

    /**
     * @param string $ProcessId Original unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessType Task type
Schedule task execution.
    SCHEDULE_TASK,
Integration task.
    INTEGRATION_TASK,
Third-Party reporting.
    THIRD_REPORT,
Data modeling.
    TABLE_MODEL,
Create metrics for the model.
    MODEL_METRIC,
Create a derived metric from atomic metrics.
    METRIC_METRIC,
Data service.
    DATA_SERVICE
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Platform WEDATA, THIRD;
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessSubType Task Subtype
 SQL_TASK,
Integrate real-time tasks lineage.
    INTEGRATED_STREAM,
Integration of offline tasks lineage.
    INTEGRATED_OFFLINE;
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProcessProperties Additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineageNodeId Unique node ID of the lineage task.
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
        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProcessSubType",$param) and $param["ProcessSubType"] !== null) {
            $this->ProcessSubType = $param["ProcessSubType"];
        }

        if (array_key_exists("ProcessProperties",$param) and $param["ProcessProperties"] !== null) {
            $this->ProcessProperties = [];
            foreach ($param["ProcessProperties"] as $key => $value){
                $obj = new LineageProperty();
                $obj->deserialize($value);
                array_push($this->ProcessProperties, $obj);
            }
        }

        if (array_key_exists("LineageNodeId",$param) and $param["LineageNodeId"] !== null) {
            $this->LineageNodeId = $param["LineageNodeId"];
        }
    }
}
