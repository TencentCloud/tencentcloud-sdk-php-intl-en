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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event point information
 *
 * @method string getIncidentId() Obtain Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncidentId(string $IncidentId) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain The name of the table where the event occurred
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set The name of the table where the event occurred
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVertex() Obtain A list of node information, with array items containing detailed node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVertex(array $Vertex) Set A list of node information, with array items containing detailed node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVertexCount() Obtain Total number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVertexCount(integer $VertexCount) Set Total number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IncidentVertexInfo extends AbstractModel
{
    /**
     * @var string Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncidentId;

    /**
     * @var string The name of the table where the event occurred
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var array A list of node information, with array items containing detailed node information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vertex;

    /**
     * @var integer Total number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VertexCount;

    /**
     * @param string $IncidentId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableName The name of the table where the event occurred
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Vertex A list of node information, with array items containing detailed node information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VertexCount Total number of nodes
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
        if (array_key_exists("IncidentId",$param) and $param["IncidentId"] !== null) {
            $this->IncidentId = $param["IncidentId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Vertex",$param) and $param["Vertex"] !== null) {
            $this->Vertex = [];
            foreach ($param["Vertex"] as $key => $value){
                $obj = new VertexInfo();
                $obj->deserialize($value);
                array_push($this->Vertex, $obj);
            }
        }

        if (array_key_exists("VertexCount",$param) and $param["VertexCount"] !== null) {
            $this->VertexCount = $param["VertexCount"];
        }
    }
}
