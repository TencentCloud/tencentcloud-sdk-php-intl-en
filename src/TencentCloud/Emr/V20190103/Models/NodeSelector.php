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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Selection criteria for forcibly scheduled Pod nodes.
 *
 * @method array getNodeSelectorTerms() Obtain Selection criteria for forcibly scheduled Pod nodes.
 * @method void setNodeSelectorTerms(array $NodeSelectorTerms) Set Selection criteria for forcibly scheduled Pod nodes.
 */
class NodeSelector extends AbstractModel
{
    /**
     * @var array Selection criteria for forcibly scheduled Pod nodes.
     */
    public $NodeSelectorTerms;

    /**
     * @param array $NodeSelectorTerms Selection criteria for forcibly scheduled Pod nodes.
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
        if (array_key_exists("NodeSelectorTerms",$param) and $param["NodeSelectorTerms"] !== null) {
            $this->NodeSelectorTerms = [];
            foreach ($param["NodeSelectorTerms"] as $key => $value){
                $obj = new NodeSelectorTerm();
                $obj->deserialize($value);
                array_push($this->NodeSelectorTerms, $obj);
            }
        }
    }
}
