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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the current node information of the real-time task instance
 *
 * @method string getNodeType() Obtain Read from node SOURCE Write to node SINK
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeType(string $NodeType) Set Read from node SOURCE Write to node SINK
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeId() Obtain Node IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeId(string $NodeId) Set Node IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeName() Obtain Node nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeName(string $NodeName) Set Node nameNote: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceNodeInfo extends AbstractModel
{
    /**
     * @var string Read from node SOURCE Write to node SINK
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeType;

    /**
     * @var string Node IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeId;

    /**
     * @var string Node nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeName;

    /**
     * @param string $NodeType Read from node SOURCE Write to node SINK
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeId Node IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeName Node nameNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
