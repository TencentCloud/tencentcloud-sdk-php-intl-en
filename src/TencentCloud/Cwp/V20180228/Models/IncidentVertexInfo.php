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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event point information
 *
 * @method string getIncidentId() Obtain Event ID
 * @method void setIncidentId(string $IncidentId) Set Event ID
 * @method string getTableName() Obtain The name of the table where the event occurred
 * @method void setTableName(string $TableName) Set The name of the table where the event occurred
 * @method array getVertex() Obtain Node information list, in an array including detailed node information.
 * @method void setVertex(array $Vertex) Set Node information list, in an array including detailed node information.
 * @method integer getVertexCount() Obtain Total number of nodes.
 * @method void setVertexCount(integer $VertexCount) Set Total number of nodes.
 */
class IncidentVertexInfo extends AbstractModel
{
    /**
     * @var string Event ID
     */
    public $IncidentId;

    /**
     * @var string The name of the table where the event occurred
     */
    public $TableName;

    /**
     * @var array Node information list, in an array including detailed node information.
     */
    public $Vertex;

    /**
     * @var integer Total number of nodes.
     */
    public $VertexCount;

    /**
     * @param string $IncidentId Event ID
     * @param string $TableName The name of the table where the event occurred
     * @param array $Vertex Node information list, in an array including detailed node information.
     * @param integer $VertexCount Total number of nodes.
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
