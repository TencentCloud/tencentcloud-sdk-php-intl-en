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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB-WAF Regional Information
 *
 * @method string getId() Obtain Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getText() Obtain Regional Chinese Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set Regional Chinese Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Full English Name of the Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Full English Name of the Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCode() Obtain Region encoding

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCode(string $Code) Set Region encoding

Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClbWafRegionItem extends AbstractModel
{
    /**
     * @var string Region ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Regional Chinese Description

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var string Full English Name of the Region

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var string Region encoding

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Code;

    /**
     * @param string $Id Region ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Text Regional Chinese Description

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Full English Name of the Region

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Code Region encoding

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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
