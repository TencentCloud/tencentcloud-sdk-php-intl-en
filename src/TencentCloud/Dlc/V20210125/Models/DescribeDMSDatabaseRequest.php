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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDMSDatabase request structure.
 *
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getSchemaName() Obtain Schema name
 * @method void setSchemaName(string $SchemaName) Set Schema name
 * @method string getPattern() Obtain Match rules
 * @method void setPattern(string $Pattern) Set Match rules
 */
class DescribeDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Schema name
     */
    public $SchemaName;

    /**
     * @var string Match rules
     */
    public $Pattern;

    /**
     * @param string $Name Database name
     * @param string $SchemaName Schema name
     * @param string $Pattern Match rules
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }
    }
}
