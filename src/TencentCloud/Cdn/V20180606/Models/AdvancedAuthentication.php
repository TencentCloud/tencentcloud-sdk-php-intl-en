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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection advanced configuration (allowlist feature)
 *
 * @method string getSwitch() Obtain Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
 * @method void setSwitch(string $Switch) Set Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
 * @method AdvancedAuthenticationTypeA getTypeA() Obtain Timestamp hotlink protection advanced configuration mode A
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeA(AdvancedAuthenticationTypeA $TypeA) Set Timestamp hotlink protection advanced configuration mode A
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedAuthenticationTypeB getTypeB() Obtain Timestamp hotlink protection advanced configuration mode B
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeB(AdvancedAuthenticationTypeB $TypeB) Set Timestamp hotlink protection advanced configuration mode B
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedAuthenticationTypeC getTypeC() Obtain Timestamp hotlink protection advanced configuration mode C
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeC(AdvancedAuthenticationTypeC $TypeC) Set Timestamp hotlink protection advanced configuration mode C
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedAuthenticationTypeD getTypeD() Obtain Timestamp hotlink protection advanced configuration mode D
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeD(AdvancedAuthenticationTypeD $TypeD) Set Timestamp hotlink protection advanced configuration mode D
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedAuthenticationTypeE getTypeE() Obtain Timestamp hotlink protection advanced configuration mode E
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeE(AdvancedAuthenticationTypeE $TypeE) Set Timestamp hotlink protection advanced configuration mode E
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedAuthenticationTypeF getTypeF() Obtain Timestamp hotlink protection advanced configuration mode F
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTypeF(AdvancedAuthenticationTypeF $TypeF) Set Timestamp hotlink protection advanced configuration mode F
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AdvancedAuthentication extends AbstractModel
{
    /**
     * @var string Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
     */
    public $Switch;

    /**
     * @var AdvancedAuthenticationTypeA Timestamp hotlink protection advanced configuration mode A
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeA;

    /**
     * @var AdvancedAuthenticationTypeB Timestamp hotlink protection advanced configuration mode B
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeB;

    /**
     * @var AdvancedAuthenticationTypeC Timestamp hotlink protection advanced configuration mode C
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeC;

    /**
     * @var AdvancedAuthenticationTypeD Timestamp hotlink protection advanced configuration mode D
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeD;

    /**
     * @var AdvancedAuthenticationTypeE Timestamp hotlink protection advanced configuration mode E
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeE;

    /**
     * @var AdvancedAuthenticationTypeF Timestamp hotlink protection advanced configuration mode F
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TypeF;

    /**
     * @param string $Switch Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
     * @param AdvancedAuthenticationTypeA $TypeA Timestamp hotlink protection advanced configuration mode A
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedAuthenticationTypeB $TypeB Timestamp hotlink protection advanced configuration mode B
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedAuthenticationTypeC $TypeC Timestamp hotlink protection advanced configuration mode C
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedAuthenticationTypeD $TypeD Timestamp hotlink protection advanced configuration mode D
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedAuthenticationTypeE $TypeE Timestamp hotlink protection advanced configuration mode E
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedAuthenticationTypeF $TypeF Timestamp hotlink protection advanced configuration mode F
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("TypeA",$param) and $param["TypeA"] !== null) {
            $this->TypeA = new AdvancedAuthenticationTypeA();
            $this->TypeA->deserialize($param["TypeA"]);
        }

        if (array_key_exists("TypeB",$param) and $param["TypeB"] !== null) {
            $this->TypeB = new AdvancedAuthenticationTypeB();
            $this->TypeB->deserialize($param["TypeB"]);
        }

        if (array_key_exists("TypeC",$param) and $param["TypeC"] !== null) {
            $this->TypeC = new AdvancedAuthenticationTypeC();
            $this->TypeC->deserialize($param["TypeC"]);
        }

        if (array_key_exists("TypeD",$param) and $param["TypeD"] !== null) {
            $this->TypeD = new AdvancedAuthenticationTypeD();
            $this->TypeD->deserialize($param["TypeD"]);
        }

        if (array_key_exists("TypeE",$param) and $param["TypeE"] !== null) {
            $this->TypeE = new AdvancedAuthenticationTypeE();
            $this->TypeE->deserialize($param["TypeE"]);
        }

        if (array_key_exists("TypeF",$param) and $param["TypeF"] !== null) {
            $this->TypeF = new AdvancedAuthenticationTypeF();
            $this->TypeF->deserialize($param["TypeF"]);
        }
    }
}
