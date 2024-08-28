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
 * Attack backtracking
 *
 * @method array getNodes() Obtain Attack backtracking node description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodes(array $Nodes) Set Attack backtracking node description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEdges() Obtain Attack backtracking node path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEdges(array $Edges) Set Attack backtracking node path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventInfoParam() Obtain Parameters for requesting details on node-related events
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventInfoParam(string $EventInfoParam) Set Parameters for requesting details on node-related events
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AttackSource extends AbstractModel
{
    /**
     * @var array Attack backtracking node description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nodes;

    /**
     * @var array Attack backtracking node path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Edges;

    /**
     * @var string Parameters for requesting details on node-related events
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventInfoParam;

    /**
     * @param array $Nodes Attack backtracking node description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Edges Attack backtracking node path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventInfoParam Parameters for requesting details on node-related events
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
        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new AttackSourceNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("Edges",$param) and $param["Edges"] !== null) {
            $this->Edges = [];
            foreach ($param["Edges"] as $key => $value){
                $obj = new AttackSourceEdge();
                $obj->deserialize($value);
                array_push($this->Edges, $obj);
            }
        }

        if (array_key_exists("EventInfoParam",$param) and $param["EventInfoParam"] !== null) {
            $this->EventInfoParam = $param["EventInfoParam"];
        }
    }
}
