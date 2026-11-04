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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SkillCategory classification information.
 *
 * @method string getCategoryKey() Obtain Category identifier
 * @method void setCategoryKey(string $CategoryKey) Set Category identifier
 * @method string getCategoryName() Obtain Category name
 * @method void setCategoryName(string $CategoryName) Set Category name
 */
class SkillCategory extends AbstractModel
{
    /**
     * @var string Category identifier
     */
    public $CategoryKey;

    /**
     * @var string Category name
     */
    public $CategoryName;

    /**
     * @param string $CategoryKey Category identifier
     * @param string $CategoryName Category name
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
        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }
    }
}
