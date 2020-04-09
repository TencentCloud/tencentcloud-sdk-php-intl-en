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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmAttribute request structure.
 *
 * @method string getAttribute() Obtain Alarm item.
<li>Offline: CWP is offline</li>
<li>Malware: trojan event</li>
<li>NonlocalLogin: unusual login location discovered</li>
<li>CrackSuccess: brute force attack succeeded</li>
 * @method void setAttribute(string $Attribute) Set Alarm item.
<li>Offline: CWP is offline</li>
<li>Malware: trojan event</li>
<li>NonlocalLogin: unusual login location discovered</li>
<li>CrackSuccess: brute force attack succeeded</li>
 * @method string getValue() Obtain Alarm item attributes.
<li>CLOSE: disabled</li>
<li>OPEN: enabled</li>
 * @method void setValue(string $Value) Set Alarm item attributes.
<li>CLOSE: disabled</li>
<li>OPEN: enabled</li>
 */
class ModifyAlarmAttributeRequest extends AbstractModel
{
    /**
     * @var string Alarm item.
<li>Offline: CWP is offline</li>
<li>Malware: trojan event</li>
<li>NonlocalLogin: unusual login location discovered</li>
<li>CrackSuccess: brute force attack succeeded</li>
     */
    public $Attribute;

    /**
     * @var string Alarm item attributes.
<li>CLOSE: disabled</li>
<li>OPEN: enabled</li>
     */
    public $Value;

    /**
     * @param string $Attribute Alarm item.
<li>Offline: CWP is offline</li>
<li>Malware: trojan event</li>
<li>NonlocalLogin: unusual login location discovered</li>
<li>CrackSuccess: brute force attack succeeded</li>
     * @param string $Value Alarm item attributes.
<li>CLOSE: disabled</li>
<li>OPEN: enabled</li>
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
        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
