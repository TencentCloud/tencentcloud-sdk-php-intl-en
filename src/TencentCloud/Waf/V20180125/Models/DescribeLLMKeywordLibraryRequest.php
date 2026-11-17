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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMKeywordLibrary request structure.
 *
 * @method string getType() Obtain Lexicon type filter.
Valid values:
custom: custom blacklist
builtin: built-in lexicon
all: all lexicons
white: custom whitelist
 * @method void setType(string $Type) Set Lexicon type filter.
Valid values:
custom: custom blacklist
builtin: built-in lexicon
all: all lexicons
white: custom whitelist
 * @method integer getOffset() Obtain Pagination offset
Value range: [0, +∞)
Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination offset
Value range: [0, +∞)
Default value: 0
 * @method integer getLimit() Obtain Number of entries returned per page
Value range: [1, 1000]
Default value: 10
 * @method void setLimit(integer $Limit) Set Number of entries returned per page
Value range: [1, 1000]
Default value: 10
 * @method string getBy() Obtain Sorting field
Valid values:
UpdateTime: sort by update time
CreateTime: sort by creation time
Name: sort by name
Default value: UpdateTime
 * @method void setBy(string $By) Set Sorting field
Valid values:
UpdateTime: sort by update time
CreateTime: sort by creation time
Name: sort by name
Default value: UpdateTime
 * @method string getOrder() Obtain Sorting order
Valid values:
ASC: ascending order
DESC: descending order
Default value: DESC
 * @method void setOrder(string $Order) Set Sorting order
Valid values:
ASC: ascending order
DESC: descending order
Default value: DESC
 */
class DescribeLLMKeywordLibraryRequest extends AbstractModel
{
    /**
     * @var string Lexicon type filter.
Valid values:
custom: custom blacklist
builtin: built-in lexicon
all: all lexicons
white: custom whitelist
     */
    public $Type;

    /**
     * @var integer Pagination offset
Value range: [0, +∞)
Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of entries returned per page
Value range: [1, 1000]
Default value: 10
     */
    public $Limit;

    /**
     * @var string Sorting field
Valid values:
UpdateTime: sort by update time
CreateTime: sort by creation time
Name: sort by name
Default value: UpdateTime
     */
    public $By;

    /**
     * @var string Sorting order
Valid values:
ASC: ascending order
DESC: descending order
Default value: DESC
     */
    public $Order;

    /**
     * @param string $Type Lexicon type filter.
Valid values:
custom: custom blacklist
builtin: built-in lexicon
all: all lexicons
white: custom whitelist
     * @param integer $Offset Pagination offset
Value range: [0, +∞)
Default value: 0
     * @param integer $Limit Number of entries returned per page
Value range: [1, 1000]
Default value: 10
     * @param string $By Sorting field
Valid values:
UpdateTime: sort by update time
CreateTime: sort by creation time
Name: sort by name
Default value: UpdateTime
     * @param string $Order Sorting order
Valid values:
ASC: ascending order
DESC: descending order
Default value: DESC
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
