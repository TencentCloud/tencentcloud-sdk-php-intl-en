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
 * Filter rule for shipped log
 *
 * @method string getKey() Obtain Filter rule key
 * @method void setKey(string $Key) Set Filter rule key
 * @method string getRegex() Obtain Filter rule
 * @method void setRegex(string $Regex) Set Filter rule
 * @method string getValue() Obtain Filter rule value
 * @method void setValue(string $Value) Set Filter rule value
 */
class FilterRuleInfo extends AbstractModel
{
    /**
     * @var string Filter rule key
     */
    public $Key;

    /**
     * @var string Filter rule
     */
    public $Regex;

    /**
     * @var string Filter rule value
     */
    public $Value;

    /**
     * @param string $Key Filter rule key
     * @param string $Regex Filter rule
     * @param string $Value Filter rule value
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
