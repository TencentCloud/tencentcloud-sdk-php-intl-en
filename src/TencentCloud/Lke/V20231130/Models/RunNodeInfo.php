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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information
 *
 * @method integer getNodeType() Obtain Node type, 0: unspecified; 1: start node; 2: api node; 3: inquiry node; 4: answer node.
 * @method void setNodeType(integer $NodeType) Set Node type, 0: unspecified; 1: start node; 2: api node; 3: inquiry node; 4: answer node.
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method InvokeAPI getInvokeApi() Obtain Requested API.
 * @method void setInvokeApi(InvokeAPI $InvokeApi) Set Requested API.
 * @method array getSlotValues() Obtain Values of all slots of the current node, key: SlotID. Return an Null even if there is no value.
 * @method void setSlotValues(array $SlotValues) Set Values of all slots of the current node, key: SlotID. Return an Null even if there is no value.
 */
class RunNodeInfo extends AbstractModel
{
    /**
     * @var integer Node type, 0: unspecified; 1: start node; 2: api node; 3: inquiry node; 4: answer node.
     */
    public $NodeType;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var InvokeAPI Requested API.
     */
    public $InvokeApi;

    /**
     * @var array Values of all slots of the current node, key: SlotID. Return an Null even if there is no value.
     */
    public $SlotValues;

    /**
     * @param integer $NodeType Node type, 0: unspecified; 1: start node; 2: api node; 3: inquiry node; 4: answer node.
     * @param string $NodeId Node ID.
     * @param string $NodeName Node name.
     * @param InvokeAPI $InvokeApi Requested API.
     * @param array $SlotValues Values of all slots of the current node, key: SlotID. Return an Null even if there is no value.
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

        if (array_key_exists("InvokeApi",$param) and $param["InvokeApi"] !== null) {
            $this->InvokeApi = new InvokeAPI();
            $this->InvokeApi->deserialize($param["InvokeApi"]);
        }

        if (array_key_exists("SlotValues",$param) and $param["SlotValues"] !== null) {
            $this->SlotValues = [];
            foreach ($param["SlotValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->SlotValues, $obj);
            }
        }
    }
}
