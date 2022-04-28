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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit rule filters
 *
 * @method string getType() Obtain Filter parameter names. Valid values:
SrcIp: Client IP;
User: Database account;
DB: Database name.
 * @method void setType(string $Type) Set Filter parameter names. Valid values:
SrcIp: Client IP;
User: Database account;
DB: Database name.
 * @method string getCompare() Obtain Filter match type. Valid value:
`INC`: Include;
`EXC`: Exclude;
`EQ`: Equal to;
`NEQ`: Not equal to.
 * @method void setCompare(string $Compare) Set Filter match type. Valid value:
`INC`: Include;
`EXC`: Exclude;
`EQ`: Equal to;
`NEQ`: Not equal to.
 * @method string getValue() Obtain Filter match value
 * @method void setValue(string $Value) Set Filter match value
 */
class AuditFilter extends AbstractModel
{
    /**
     * @var string Filter parameter names. Valid values:
SrcIp: Client IP;
User: Database account;
DB: Database name.
     */
    public $Type;

    /**
     * @var string Filter match type. Valid value:
`INC`: Include;
`EXC`: Exclude;
`EQ`: Equal to;
`NEQ`: Not equal to.
     */
    public $Compare;

    /**
     * @var string Filter match value
     */
    public $Value;

    /**
     * @param string $Type Filter parameter names. Valid values:
SrcIp: Client IP;
User: Database account;
DB: Database name.
     * @param string $Compare Filter match type. Valid value:
`INC`: Include;
`EXC`: Exclude;
`EQ`: Equal to;
`NEQ`: Not equal to.
     * @param string $Value Filter match value
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

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
