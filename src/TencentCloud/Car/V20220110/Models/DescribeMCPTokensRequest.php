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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMCPTokens request structure.
 *
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method integer getLimit() Obtain <p>Number of items per page</p><p>Value range: [0, 200]</p><p>Default value: 20</p><p>If 0 is passed in, the default value is used.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page</p><p>Value range: [0, 200]</p><p>Default value: 20</p><p>If 0 is passed in, the default value is used.</p>
 * @method array getFilters() Obtain <p>Filter list</p><p>Only filtering by TokenId and TokenName is supported. The number of Filters cannot exceed 10, the number of Values in each Filter cannot exceed 20, the length of a single Value cannot exceed 64 characters, and duplicate Filter names are not allowed.</p>
 * @method void setFilters(array $Filters) Set <p>Filter list</p><p>Only filtering by TokenId and TokenName is supported. The number of Filters cannot exceed 10, the number of Values in each Filter cannot exceed 20, the length of a single Value cannot exceed 64 characters, and duplicate Filter names are not allowed.</p>
 */
class DescribeMCPTokensRequest extends AbstractModel
{
    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page</p><p>Value range: [0, 200]</p><p>Default value: 20</p><p>If 0 is passed in, the default value is used.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter list</p><p>Only filtering by TokenId and TokenName is supported. The number of Filters cannot exceed 10, the number of Values in each Filter cannot exceed 20, the length of a single Value cannot exceed 64 characters, and duplicate Filter names are not allowed.</p>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>Offset.</p>
     * @param integer $Limit <p>Number of items per page</p><p>Value range: [0, 200]</p><p>Default value: 20</p><p>If 0 is passed in, the default value is used.</p>
     * @param array $Filters <p>Filter list</p><p>Only filtering by TokenId and TokenName is supported. The number of Filters cannot exceed 10, the number of Values in each Filter cannot exceed 20, the length of a single Value cannot exceed 64 characters, and duplicate Filter names are not allowed.</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
