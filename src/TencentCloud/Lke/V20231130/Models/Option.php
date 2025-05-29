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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dropdown options.
 *
 * @method string getText() Obtain Text.
 * @method void setText(string $Text) Set Text.
 * @method string getValue() Obtain Value.
 * @method void setValue(string $Value) Set Value.
 * @method string getCharSize() Obtain Number of characters in a file.
 * @method void setCharSize(string $CharSize) Set Number of characters in a file.
 * @method string getFileType() Obtain File type.
 * @method void setFileType(string $FileType) Set File type.
 */
class Option extends AbstractModel
{
    /**
     * @var string Text.
     */
    public $Text;

    /**
     * @var string Value.
     */
    public $Value;

    /**
     * @var string Number of characters in a file.
     */
    public $CharSize;

    /**
     * @var string File type.
     */
    public $FileType;

    /**
     * @param string $Text Text.
     * @param string $Value Value.
     * @param string $CharSize Number of characters in a file.
     * @param string $FileType File type.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("CharSize",$param) and $param["CharSize"] !== null) {
            $this->CharSize = $param["CharSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
