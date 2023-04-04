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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Full-Text index configuration
 *
 * @method boolean getCaseSensitive() Obtain Case sensitivity
 * @method void setCaseSensitive(boolean $CaseSensitive) Set Case sensitivity
 * @method string getTokenizer() Obtain Separator of the full-text index. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method void setTokenizer(string $Tokenizer) Set Separator of the full-text index. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method boolean getContainZH() Obtain Whether Chinese characters are contained
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setContainZH(boolean $ContainZH) Set Whether Chinese characters are contained
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class FullTextInfo extends AbstractModel
{
    /**
     * @var boolean Case sensitivity
     */
    public $CaseSensitive;

    /**
     * @var string Separator of the full-text index. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     */
    public $Tokenizer;

    /**
     * @var boolean Whether Chinese characters are contained
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ContainZH;

    /**
     * @param boolean $CaseSensitive Case sensitivity
     * @param string $Tokenizer Separator of the full-text index. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     * @param boolean $ContainZH Whether Chinese characters are contained
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
