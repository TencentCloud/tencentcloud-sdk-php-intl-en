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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model-generated tool call
 *
 * @method string getId() Obtain <p>Tool call id</p>
 * @method void setId(string $Id) Set <p>Tool call id</p>
 * @method string getType() Obtain <p>Invocation type of the tool, currently only support function</p>
 * @method void setType(string $Type) Set <p>Invocation type of the tool, currently only support function</p>
 * @method ToolCallFunction getFunction() Obtain <p>Specific function call</p>
 * @method void setFunction(ToolCallFunction $Function) Set <p>Specific function call</p>
 * @method integer getIndex() Obtain <p>Index value</p>
 * @method void setIndex(integer $Index) Set <p>Index value</p>
 */
class ToolCall extends AbstractModel
{
    /**
     * @var string <p>Tool call id</p>
     */
    public $Id;

    /**
     * @var string <p>Invocation type of the tool, currently only support function</p>
     */
    public $Type;

    /**
     * @var ToolCallFunction <p>Specific function call</p>
     */
    public $Function;

    /**
     * @var integer <p>Index value</p>
     */
    public $Index;

    /**
     * @param string $Id <p>Tool call id</p>
     * @param string $Type <p>Invocation type of the tool, currently only support function</p>
     * @param ToolCallFunction $Function <p>Specific function call</p>
     * @param integer $Index <p>Index value</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = new ToolCallFunction();
            $this->Function->deserialize($param["Function"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
