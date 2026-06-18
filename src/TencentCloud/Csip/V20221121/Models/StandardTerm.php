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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CSPM clause
 *
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 * @method array getTerms() Obtain Clause
 * @method void setTerms(array $Terms) Set Clause
 */
class StandardTerm extends AbstractModel
{
    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @var array Clause
     */
    public $Terms;

    /**
     * @param string $Tag Tag.
     * @param array $Terms Clause
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Terms",$param) and $param["Terms"] !== null) {
            $this->Terms = $param["Terms"];
        }
    }
}
