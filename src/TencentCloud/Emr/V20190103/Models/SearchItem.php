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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search field
 *
 * @method string getSearchType() Obtain Searchable type.
 * @method void setSearchType(string $SearchType) Set Searchable type.
 * @method string getSearchValue() Obtain Searchable value.
 * @method void setSearchValue(string $SearchValue) Set Searchable value.
 */
class SearchItem extends AbstractModel
{
    /**
     * @var string Searchable type.
     */
    public $SearchType;

    /**
     * @var string Searchable value.
     */
    public $SearchValue;

    /**
     * @param string $SearchType Searchable type.
     * @param string $SearchValue Searchable value.
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
        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}
