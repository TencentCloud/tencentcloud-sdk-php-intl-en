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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubtitleEmbedTemplates request structure.
 *
 * @method array getDefinitions() Obtain <p>Unique identifiers of intelligent caption templates for filtering. The array can contain up to 100 unique identifiers.</p>
 * @method void setDefinitions(array $Definitions) Set <p>Unique identifiers of intelligent caption templates for filtering. The array can contain up to 100 unique identifiers.</p>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method string getType() Obtain <p>Filtering condition for the template type. Leave it blank to return all. Valid values:</p><ul><li>Preset: system preset template;</li><li>Custom: user-defined template.</li></ul>
 * @method void setType(string $Type) Set <p>Filtering condition for the template type. Leave it blank to return all. Valid values:</p><ul><li>Preset: system preset template;</li><li>Custom: user-defined template.</li></ul>
 * @method string getName() Obtain <p>Condition for filtering subtitle suppression templates by ID. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Condition for filtering subtitle suppression templates by ID. Length limit: 64 characters.</p>
 */
class DescribeSubtitleEmbedTemplatesRequest extends AbstractModel
{
    /**
     * @var array <p>Unique identifiers of intelligent caption templates for filtering. The array can contain up to 100 unique identifiers.</p>
     */
    public $Definitions;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var string <p>Filtering condition for the template type. Leave it blank to return all. Valid values:</p><ul><li>Preset: system preset template;</li><li>Custom: user-defined template.</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Condition for filtering subtitle suppression templates by ID. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @param array $Definitions <p>Unique identifiers of intelligent caption templates for filtering. The array can contain up to 100 unique identifiers.</p>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     * @param string $Type <p>Filtering condition for the template type. Leave it blank to return all. Valid values:</p><ul><li>Preset: system preset template;</li><li>Custom: user-defined template.</li></ul>
     * @param string $Name <p>Condition for filtering subtitle suppression templates by ID. Length limit: 64 characters.</p>
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
