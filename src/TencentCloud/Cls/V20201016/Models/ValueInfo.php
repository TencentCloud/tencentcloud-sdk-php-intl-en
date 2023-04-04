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
 * Index description information of the field for which key-value index needs to be enabled
 *
 * @method string getType() Obtain Field type. Valid values: `long`, `text`, `double`
 * @method void setType(string $Type) Set Field type. Valid values: `long`, `text`, `double`
 * @method string getTokenizer() Obtain Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method void setTokenizer(string $Tokenizer) Set Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method boolean getSqlFlag() Obtain Whether the analysis feature is enabled for the field
 * @method void setSqlFlag(boolean $SqlFlag) Set Whether the analysis feature is enabled for the field
 * @method boolean getContainZH() Obtain Whether Chinese characters are contained. For `long` and `double` fields, set them to `false`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainZH(boolean $ContainZH) Set Whether Chinese characters are contained. For `long` and `double` fields, set them to `false`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string Field type. Valid values: `long`, `text`, `double`
     */
    public $Type;

    /**
     * @var string Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     */
    public $Tokenizer;

    /**
     * @var boolean Whether the analysis feature is enabled for the field
     */
    public $SqlFlag;

    /**
     * @var boolean Whether Chinese characters are contained. For `long` and `double` fields, set them to `false`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainZH;

    /**
     * @param string $Type Field type. Valid values: `long`, `text`, `double`
     * @param string $Tokenizer Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     * @param boolean $SqlFlag Whether the analysis feature is enabled for the field
     * @param boolean $ContainZH Whether Chinese characters are contained. For `long` and `double` fields, set them to `false`.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
