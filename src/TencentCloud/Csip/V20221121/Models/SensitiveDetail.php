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
 * Sensitive field categorization and level description.
 *
 * @method string getCategoryRule() Obtain Field classification
 * @method void setCategoryRule(string $CategoryRule) Set Field classification
 * @method string getLevelRisk() Obtain Field classification
 * @method void setLevelRisk(string $LevelRisk) Set Field classification
 * @method integer getIsSensitive() Obtain 1: Sensitive information field.
0: Non-sensitive field
 * @method void setIsSensitive(integer $IsSensitive) Set 1: Sensitive information field.
0: Non-sensitive field
 */
class SensitiveDetail extends AbstractModel
{
    /**
     * @var string Field classification
     */
    public $CategoryRule;

    /**
     * @var string Field classification
     */
    public $LevelRisk;

    /**
     * @var integer 1: Sensitive information field.
0: Non-sensitive field
     */
    public $IsSensitive;

    /**
     * @param string $CategoryRule Field classification
     * @param string $LevelRisk Field classification
     * @param integer $IsSensitive 1: Sensitive information field.
0: Non-sensitive field
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
        if (array_key_exists("CategoryRule",$param) and $param["CategoryRule"] !== null) {
            $this->CategoryRule = $param["CategoryRule"];
        }

        if (array_key_exists("LevelRisk",$param) and $param["LevelRisk"] !== null) {
            $this->LevelRisk = $param["LevelRisk"];
        }

        if (array_key_exists("IsSensitive",$param) and $param["IsSensitive"] !== null) {
            $this->IsSensitive = $param["IsSensitive"];
        }
    }
}
