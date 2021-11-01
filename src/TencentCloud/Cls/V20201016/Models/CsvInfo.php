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
 * CSV content description
 *
 * @method boolean getPrintKey() Obtain Whether to print `key` on the first row of the CSV file
 * @method void setPrintKey(boolean $PrintKey) Set Whether to print `key` on the first row of the CSV file
 * @method array getKeys() Obtain Names of keys
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set Names of keys
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDelimiter() Obtain Field delimiter
 * @method void setDelimiter(string $Delimiter) Set Field delimiter
 * @method string getEscapeChar() Obtain Escape character used to enclose any field delimiter in field content. You can enter only a single quotation mark, double quotation mark, or an empty string.
 * @method void setEscapeChar(string $EscapeChar) Set Escape character used to enclose any field delimiter in field content. You can enter only a single quotation mark, double quotation mark, or an empty string.
 * @method string getNonExistingField() Obtain Content used to populate non-existing fields
 * @method void setNonExistingField(string $NonExistingField) Set Content used to populate non-existing fields
 */
class CsvInfo extends AbstractModel
{
    /**
     * @var boolean Whether to print `key` on the first row of the CSV file
     */
    public $PrintKey;

    /**
     * @var array Names of keys
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var string Field delimiter
     */
    public $Delimiter;

    /**
     * @var string Escape character used to enclose any field delimiter in field content. You can enter only a single quotation mark, double quotation mark, or an empty string.
     */
    public $EscapeChar;

    /**
     * @var string Content used to populate non-existing fields
     */
    public $NonExistingField;

    /**
     * @param boolean $PrintKey Whether to print `key` on the first row of the CSV file
     * @param array $Keys Names of keys
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Delimiter Field delimiter
     * @param string $EscapeChar Escape character used to enclose any field delimiter in field content. You can enter only a single quotation mark, double quotation mark, or an empty string.
     * @param string $NonExistingField Content used to populate non-existing fields
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
        if (array_key_exists("PrintKey",$param) and $param["PrintKey"] !== null) {
            $this->PrintKey = $param["PrintKey"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("EscapeChar",$param) and $param["EscapeChar"] !== null) {
            $this->EscapeChar = $param["EscapeChar"];
        }

        if (array_key_exists("NonExistingField",$param) and $param["NonExistingField"] !== null) {
            $this->NonExistingField = $param["NonExistingField"];
        }
    }
}
