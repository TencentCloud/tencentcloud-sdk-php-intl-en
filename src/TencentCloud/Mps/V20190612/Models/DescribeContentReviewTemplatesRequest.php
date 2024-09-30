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
 * DescribeContentReviewTemplates request structure.
 *
 * @method array getDefinitions() Obtain The IDs of the content moderation templates to query. Array length limit: 50.
 * @method void setDefinitions(array $Definitions) Set The IDs of the content moderation templates to query. Array length limit: 50.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 50.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 50.
 * @method string getType() Obtain The filter for querying templates. If this parameter is left empty, both preset and custom templates are returned. Valid values:
* Preset
* Custom
 * @method void setType(string $Type) Set The filter for querying templates. If this parameter is left empty, both preset and custom templates are returned. Valid values:
* Preset
* Custom
 * @method string getName() Obtain Filter condition for intelligent auditing template identifiers, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Filter condition for intelligent auditing template identifiers, with a length limit of 64 characters.
 */
class DescribeContentReviewTemplatesRequest extends AbstractModel
{
    /**
     * @var array The IDs of the content moderation templates to query. Array length limit: 50.
     */
    public $Definitions;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 50.
     */
    public $Limit;

    /**
     * @var string The filter for querying templates. If this parameter is left empty, both preset and custom templates are returned. Valid values:
* Preset
* Custom
     */
    public $Type;

    /**
     * @var string Filter condition for intelligent auditing template identifiers, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @param array $Definitions The IDs of the content moderation templates to query. Array length limit: 50.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 50.
     * @param string $Type The filter for querying templates. If this parameter is left empty, both preset and custom templates are returned. Valid values:
* Preset
* Custom
     * @param string $Name Filter condition for intelligent auditing template identifiers, with a length limit of 64 characters.
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
