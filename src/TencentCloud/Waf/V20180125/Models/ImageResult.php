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
 * Detection result of the image to be detected by the llm
 *
 * @method string getCategory() Obtain <p>Hit category identifier</p>
 * @method void setCategory(string $Category) Set <p>Hit category identifier</p>
 * @method string getCategoryName() Obtain <p>Name of the category</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Name of the category</p>
 */
class ImageResult extends AbstractModel
{
    /**
     * @var string <p>Hit category identifier</p>
     */
    public $Category;

    /**
     * @var string <p>Name of the category</p>
     */
    public $CategoryName;

    /**
     * @param string $Category <p>Hit category identifier</p>
     * @param string $CategoryName <p>Name of the category</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }
    }
}
