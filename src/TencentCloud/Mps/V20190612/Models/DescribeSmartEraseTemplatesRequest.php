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
 * DescribeSmartEraseTemplates request structure.
 *
 * @method array getDefinitions() Obtain Filtering condition for the unique identifier of the smart erasing template. Length limit of the array: 100.
 * @method void setDefinitions(array $Definitions) Set Filtering condition for the unique identifier of the smart erasing template. Length limit of the array: 100.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getType() Obtain Filtering conditions for template type. If this parameter is not specified, all templates are returned. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
 * @method void setType(string $Type) Set Filtering conditions for template type. If this parameter is not specified, all templates are returned. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
 * @method string getEraseType() Obtain Erasing type filtering conditions for the smart erasing template.
- subtitle: subtitle removal.
- watermark: watermark removal.
- privacy: privacy protection.
 * @method void setEraseType(string $EraseType) Set Erasing type filtering conditions for the smart erasing template.
- subtitle: subtitle removal.
- watermark: watermark removal.
- privacy: privacy protection.
 * @method string getName() Obtain Filtering condition for the smart erasing template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Filtering condition for the smart erasing template name. Length limit: 64 characters.
 */
class DescribeSmartEraseTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filtering condition for the unique identifier of the smart erasing template. Length limit of the array: 100.
     */
    public $Definitions;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Filtering conditions for template type. If this parameter is not specified, all templates are returned. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
     */
    public $Type;

    /**
     * @var string Erasing type filtering conditions for the smart erasing template.
- subtitle: subtitle removal.
- watermark: watermark removal.
- privacy: privacy protection.
     */
    public $EraseType;

    /**
     * @var string Filtering condition for the smart erasing template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @param array $Definitions Filtering condition for the unique identifier of the smart erasing template. Length limit of the array: 100.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $Type Filtering conditions for template type. If this parameter is not specified, all templates are returned. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
     * @param string $EraseType Erasing type filtering conditions for the smart erasing template.
- subtitle: subtitle removal.
- watermark: watermark removal.
- privacy: privacy protection.
     * @param string $Name Filtering condition for the smart erasing template name. Length limit: 64 characters.
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

        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
