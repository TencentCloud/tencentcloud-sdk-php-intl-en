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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability VPR tag
 *
 * @method string getName() Obtain <p>Tag name<br>Enumeration VALUE:<br>INTRUSION: Exploitation IN THE WILD<br>EXP: Has EXP<br>POC: Has POC<br>INTERNET_EXPOSED: Public network exposure<br>NO_RESTART: NO RESTART required<br>HIGH_VALUE_ASSET: Important ASSET<br>MALWARE_WEAPONIZED: Weaponization</p>
 * @method void setName(string $Name) Set <p>Tag name<br>Enumeration VALUE:<br>INTRUSION: Exploitation IN THE WILD<br>EXP: Has EXP<br>POC: Has POC<br>INTERNET_EXPOSED: Public network exposure<br>NO_RESTART: NO RESTART required<br>HIGH_VALUE_ASSET: Important ASSET<br>MALWARE_WEAPONIZED: Weaponization</p>
 * @method string getLevel() Obtain <p>Tag severity<br>Enumeration value:<br>HIGH: High<br>MEDIUM: Medium<br>LOW: Low</p>
 * @method void setLevel(string $Level) Set <p>Tag severity<br>Enumeration value:<br>HIGH: High<br>MEDIUM: Medium<br>LOW: Low</p>
 * @method string getRemark() Obtain <p>Tag description</p>
 * @method void setRemark(string $Remark) Set <p>Tag description</p>
 */
class VPRLabel extends AbstractModel
{
    /**
     * @var string <p>Tag name<br>Enumeration VALUE:<br>INTRUSION: Exploitation IN THE WILD<br>EXP: Has EXP<br>POC: Has POC<br>INTERNET_EXPOSED: Public network exposure<br>NO_RESTART: NO RESTART required<br>HIGH_VALUE_ASSET: Important ASSET<br>MALWARE_WEAPONIZED: Weaponization</p>
     */
    public $Name;

    /**
     * @var string <p>Tag severity<br>Enumeration value:<br>HIGH: High<br>MEDIUM: Medium<br>LOW: Low</p>
     */
    public $Level;

    /**
     * @var string <p>Tag description</p>
     */
    public $Remark;

    /**
     * @param string $Name <p>Tag name<br>Enumeration VALUE:<br>INTRUSION: Exploitation IN THE WILD<br>EXP: Has EXP<br>POC: Has POC<br>INTERNET_EXPOSED: Public network exposure<br>NO_RESTART: NO RESTART required<br>HIGH_VALUE_ASSET: Important ASSET<br>MALWARE_WEAPONIZED: Weaponization</p>
     * @param string $Level <p>Tag severity<br>Enumeration value:<br>HIGH: High<br>MEDIUM: Medium<br>LOW: Low</p>
     * @param string $Remark <p>Tag description</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
