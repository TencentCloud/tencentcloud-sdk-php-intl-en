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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of filter parameters
 *
 * @method string getFilterKey() Obtain The key of the filter parameter.
 * @method void setFilterKey(string $FilterKey) Set The key of the filter parameter.
 * @method string getFilterValue() Obtain The value of the filter parameter.
 * @method void setFilterValue(string $FilterValue) Set The value of the filter parameter.
 */
class Filter extends AbstractModel
{
    /**
     * @var string The key of the filter parameter.
     */
    public $FilterKey;

    /**
     * @var string The value of the filter parameter.
     */
    public $FilterValue;

    /**
     * @param string $FilterKey The key of the filter parameter.
     * @param string $FilterValue The value of the filter parameter.
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
        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }
    }
}
