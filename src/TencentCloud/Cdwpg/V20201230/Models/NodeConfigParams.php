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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node parameter
 *
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method array getConfigParams() Obtain Parameter.
 * @method void setConfigParams(array $ConfigParams) Set Parameter.
 */
class NodeConfigParams extends AbstractModel
{
    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var array Parameter.
     */
    public $ConfigParams;

    /**
     * @param string $NodeType Node type.
     * @param array $ConfigParams Parameter.
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

        if (array_key_exists("ConfigParams",$param) and $param["ConfigParams"] !== null) {
            $this->ConfigParams = [];
            foreach ($param["ConfigParams"] as $key => $value){
                $obj = new ConfigParams();
                $obj->deserialize($value);
                array_push($this->ConfigParams, $obj);
            }
        }
    }
}
