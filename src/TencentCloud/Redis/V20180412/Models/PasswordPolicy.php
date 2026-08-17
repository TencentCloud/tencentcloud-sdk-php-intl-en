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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Password complexity of a Redis instance
 *
 * @method boolean getEnabled() Obtain <p>Whether to enable the instance-level password complexity policy.</p><ul><li>true: Enable. ALL password changes (create/reset) must pass the complexity verification defined below.</li><li>false: Disable. No complexity filtering is performed.</li></ul><p>Default value: false</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable the instance-level password complexity policy.</p><ul><li>true: Enable. ALL password changes (create/reset) must pass the complexity verification defined below.</li><li>false: Disable. No complexity filtering is performed.</li></ul><p>Default value: false</p>
 * @method integer getMinLetterCount() Obtain <p>Minimum number of uppercase and lowercase letters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method void setMinLetterCount(integer $MinLetterCount) Set <p>Minimum number of uppercase and lowercase letters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method integer getMinDigitCount() Obtain <p>Minimum number of numeric characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method void setMinDigitCount(integer $MinDigitCount) Set <p>Minimum number of numeric characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method integer getMinSpecialCount() Obtain <p>Minimum number of special characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method void setMinSpecialCount(integer $MinSpecialCount) Set <p>Minimum number of special characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
 * @method integer getMinLength() Obtain <p>Minimum total length of the password (number of characters).</p><ul><li>Value ranges from 8 to 64.</li><li>Default value: 8.</li><li>Constraints and limitations: The minimum total length of the password must be at least the sum of three parameters: MinLetterCount, MinDigitCount, and MinSpecialCount.</li></ul>
 * @method void setMinLength(integer $MinLength) Set <p>Minimum total length of the password (number of characters).</p><ul><li>Value ranges from 8 to 64.</li><li>Default value: 8.</li><li>Constraints and limitations: The minimum total length of the password must be at least the sum of three parameters: MinLetterCount, MinDigitCount, and MinSpecialCount.</li></ul>
 */
class PasswordPolicy extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable the instance-level password complexity policy.</p><ul><li>true: Enable. ALL password changes (create/reset) must pass the complexity verification defined below.</li><li>false: Disable. No complexity filtering is performed.</li></ul><p>Default value: false</p>
     */
    public $Enabled;

    /**
     * @var integer <p>Minimum number of uppercase and lowercase letters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     */
    public $MinLetterCount;

    /**
     * @var integer <p>Minimum number of numeric characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     */
    public $MinDigitCount;

    /**
     * @var integer <p>Minimum number of special characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     */
    public $MinSpecialCount;

    /**
     * @var integer <p>Minimum total length of the password (number of characters).</p><ul><li>Value ranges from 8 to 64.</li><li>Default value: 8.</li><li>Constraints and limitations: The minimum total length of the password must be at least the sum of three parameters: MinLetterCount, MinDigitCount, and MinSpecialCount.</li></ul>
     */
    public $MinLength;

    /**
     * @param boolean $Enabled <p>Whether to enable the instance-level password complexity policy.</p><ul><li>true: Enable. ALL password changes (create/reset) must pass the complexity verification defined below.</li><li>false: Disable. No complexity filtering is performed.</li></ul><p>Default value: false</p>
     * @param integer $MinLetterCount <p>Minimum number of uppercase and lowercase letters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     * @param integer $MinDigitCount <p>Minimum number of numeric characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     * @param integer $MinSpecialCount <p>Minimum number of special characters.</p><ul><li>Value ranges from 1 to 16.</li><li>Default value: 1.</li></ul>
     * @param integer $MinLength <p>Minimum total length of the password (number of characters).</p><ul><li>Value ranges from 8 to 64.</li><li>Default value: 8.</li><li>Constraints and limitations: The minimum total length of the password must be at least the sum of three parameters: MinLetterCount, MinDigitCount, and MinSpecialCount.</li></ul>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("MinLetterCount",$param) and $param["MinLetterCount"] !== null) {
            $this->MinLetterCount = $param["MinLetterCount"];
        }

        if (array_key_exists("MinDigitCount",$param) and $param["MinDigitCount"] !== null) {
            $this->MinDigitCount = $param["MinDigitCount"];
        }

        if (array_key_exists("MinSpecialCount",$param) and $param["MinSpecialCount"] !== null) {
            $this->MinSpecialCount = $param["MinSpecialCount"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }
    }
}
