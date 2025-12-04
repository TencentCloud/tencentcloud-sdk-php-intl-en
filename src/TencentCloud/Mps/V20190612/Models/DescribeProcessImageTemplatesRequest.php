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
 * DescribeProcessImageTemplates request structure.
 *
 * @method array getDefinitions() Obtain Filtering condition for the unique identifier of the image processing template. The array length cannot exceed 100.
 * @method void setDefinitions(array $Definitions) Set Filtering condition for the unique identifier of the image processing template. The array length cannot exceed 100.
 * @method integer getOffset() Obtain Pagination offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. The default value is 0.
 * @method integer getLimit() Obtain Number of returned entries. The default value is 10, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. The default value is 10, and the maximum value is 100.
 * @method string getName() Obtain Filtering condition for the identifier of the image processing template.
 * @method void setName(string $Name) Set Filtering condition for the identifier of the image processing template.
 * @method integer getOrderType() Obtain Sorting method. It is valid after OrderBy is set. Valid values: 0: ascending; 1: descending. The default value is 0.
 * @method void setOrderType(integer $OrderType) Set Sorting method. It is valid after OrderBy is set. Valid values: 0: ascending; 1: descending. The default value is 0.
 * @method string getOrderBy() Obtain Sorting field. Valid values:
Definition: unique identifier of the template.
Default value: creation time.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values:
Definition: unique identifier of the template.
Default value: creation time.
 * @method string getType() Obtain Filtering condition for the template type. Valid values: <li>Preset: system preset template;</li> <li>Custom: user-defined template.</li>
 * @method void setType(string $Type) Set Filtering condition for the template type. Valid values: <li>Preset: system preset template;</li> <li>Custom: user-defined template.</li>
 */
class DescribeProcessImageTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filtering condition for the unique identifier of the image processing template. The array length cannot exceed 100.
     */
    public $Definitions;

    /**
     * @var integer Pagination offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. The default value is 10, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Filtering condition for the identifier of the image processing template.
     */
    public $Name;

    /**
     * @var integer Sorting method. It is valid after OrderBy is set. Valid values: 0: ascending; 1: descending. The default value is 0.
     */
    public $OrderType;

    /**
     * @var string Sorting field. Valid values:
Definition: unique identifier of the template.
Default value: creation time.
     */
    public $OrderBy;

    /**
     * @var string Filtering condition for the template type. Valid values: <li>Preset: system preset template;</li> <li>Custom: user-defined template.</li>
     */
    public $Type;

    /**
     * @param array $Definitions Filtering condition for the unique identifier of the image processing template. The array length cannot exceed 100.
     * @param integer $Offset Pagination offset. The default value is 0.
     * @param integer $Limit Number of returned entries. The default value is 10, and the maximum value is 100.
     * @param string $Name Filtering condition for the identifier of the image processing template.
     * @param integer $OrderType Sorting method. It is valid after OrderBy is set. Valid values: 0: ascending; 1: descending. The default value is 0.
     * @param string $OrderBy Sorting field. Valid values:
Definition: unique identifier of the template.
Default value: creation time.
     * @param string $Type Filtering condition for the template type. Valid values: <li>Preset: system preset template;</li> <li>Custom: user-defined template.</li>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
