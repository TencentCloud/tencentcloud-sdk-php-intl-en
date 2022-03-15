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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes how to slice data
 *
 * @method string getSeparator() Obtain Comma, | , tab, space, line break, %, or #, which can contain only 1 character.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSeparator(string $Separator) Set Comma, | , tab, space, line break, %, or #, which can contain only 1 character.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegex() Obtain Entered regex (128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegex(string $Regex) Set Entered regex (128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TextParams extends AbstractModel
{
    /**
     * @var string Comma, | , tab, space, line break, %, or #, which can contain only 1 character.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Separator;

    /**
     * @var string Entered regex (128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Regex;

    /**
     * @param string $Separator Comma, | , tab, space, line break, %, or #, which can contain only 1 character.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Regex Entered regex (128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}
