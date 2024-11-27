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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQualityControlTemplates request structure.
 *
 * @method array getDefinitions() Obtain Filter condition for media quality inspection template unique identifiers, with an array length limit of 100.
 * @method void setDefinitions(array $Definitions) Set Filter condition for media quality inspection template unique identifiers, with an array length limit of 100.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries.

<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 * @method void setLimit(integer $Limit) Set Number of returned entries.

<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
 * @method string getType() Obtain "Preset": preset template, "Custom": custom template
 * @method void setType(string $Type) Set "Preset": preset template, "Custom": custom template
 * @method string getName() Obtain Filter condition for media quality inspection template identifiers, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Filter condition for media quality inspection template identifiers, with a length limit of 64 characters.
 */
class DescribeQualityControlTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filter condition for media quality inspection template unique identifiers, with an array length limit of 100.
     */
    public $Definitions;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries.

<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
     */
    public $Limit;

    /**
     * @var string "Preset": preset template, "Custom": custom template
     */
    public $Type;

    /**
     * @var string Filter condition for media quality inspection template identifiers, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @param array $Definitions Filter condition for media quality inspection template unique identifiers, with an array length limit of 100.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries.

<li>Default value: 10.</li>
<li>Maximum value: 100.</li>
     * @param string $Type "Preset": preset template, "Custom": custom template
     * @param string $Name Filter condition for media quality inspection template identifiers, with a length limit of 64 characters.
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
        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}