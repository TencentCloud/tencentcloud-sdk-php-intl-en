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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function Tool configuration executed by the caller
 *
 * @method string getType() Obtain <p>Tool type</p><p>Input parameter limit: currently only support "function"</p>
 * @method void setType(string $Type) Set <p>Tool type</p><p>Input parameter limit: currently only support "function"</p>
 * @method string getName() Obtain <p>Tool name</p>
 * @method void setName(string $Name) Set <p>Tool name</p>
 * @method string getDescription() Obtain <p>Tool description</p>
 * @method void setDescription(string $Description) Set <p>Tool description</p>
 * @method array getParameters() Obtain <p>Tool input parameter definition</p>
 * @method void setParameters(array $Parameters) Set <p>Tool input parameter definition</p>
 */
class AgentExternalToolConfig extends AbstractModel
{
    /**
     * @var string <p>Tool type</p><p>Input parameter limit: currently only support "function"</p>
     */
    public $Type;

    /**
     * @var string <p>Tool name</p>
     */
    public $Name;

    /**
     * @var string <p>Tool description</p>
     */
    public $Description;

    /**
     * @var array <p>Tool input parameter definition</p>
     */
    public $Parameters;

    /**
     * @param string $Type <p>Tool type</p><p>Input parameter limit: currently only support "function"</p>
     * @param string $Name <p>Tool name</p>
     * @param string $Description <p>Tool description</p>
     * @param array $Parameters <p>Tool input parameter definition</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
