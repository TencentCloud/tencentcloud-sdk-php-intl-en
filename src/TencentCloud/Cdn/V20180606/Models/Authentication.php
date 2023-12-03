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
 * Timestamp hotlink protection configuration
 *
 * @method string getSwitch() Obtain Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
 * @method void setSwitch(string $Switch) Set Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
 * @method string getAuthAlgorithm() Obtain Authentication algorithm. Values:
`md5`: Calculate the hash using MD5.
`sha256`: Calculate the hash using SHA-256.
Default value: `md5`.
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setAuthAlgorithm(string $AuthAlgorithm) Set Authentication algorithm. Values:
`md5`: Calculate the hash using MD5.
`sha256`: Calculate the hash using SHA-256.
Default value: `md5`.
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method AuthenticationTypeA getTypeA() Obtain Timestamp hotlink protection mode A configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTypeA(AuthenticationTypeA $TypeA) Set Timestamp hotlink protection mode A configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AuthenticationTypeB getTypeB() Obtain Timestamp hotlink protection mode B configuration (mode B is being upgraded and is currently not supported)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTypeB(AuthenticationTypeB $TypeB) Set Timestamp hotlink protection mode B configuration (mode B is being upgraded and is currently not supported)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AuthenticationTypeC getTypeC() Obtain Timestamp hotlink protection mode C configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTypeC(AuthenticationTypeC $TypeC) Set Timestamp hotlink protection mode C configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AuthenticationTypeD getTypeD() Obtain Timestamp hotlink protection mode D configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTypeD(AuthenticationTypeD $TypeD) Set Timestamp hotlink protection mode D configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Authentication extends AbstractModel
{
    /**
     * @var string Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
     */
    public $Switch;

    /**
     * @var string Authentication algorithm. Values:
`md5`: Calculate the hash using MD5.
`sha256`: Calculate the hash using SHA-256.
Default value: `md5`.
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $AuthAlgorithm;

    /**
     * @var AuthenticationTypeA Timestamp hotlink protection mode A configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB Timestamp hotlink protection mode B configuration (mode B is being upgraded and is currently not supported)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC Timestamp hotlink protection mode C configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD Timestamp hotlink protection mode D configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TypeD;

    /**
     * @param string $Switch Whether to enable hot linking protection. Values:
`on`: Enable
`off`: Disable
Only one advanced configuration can be enabled. Set the rests to `null`.
     * @param string $AuthAlgorithm Authentication algorithm. Values:
`md5`: Calculate the hash using MD5.
`sha256`: Calculate the hash using SHA-256.
Default value: `md5`.
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param AuthenticationTypeA $TypeA Timestamp hotlink protection mode A configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AuthenticationTypeB $TypeB Timestamp hotlink protection mode B configuration (mode B is being upgraded and is currently not supported)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AuthenticationTypeC $TypeC Timestamp hotlink protection mode C configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AuthenticationTypeD $TypeD Timestamp hotlink protection mode D configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("AuthAlgorithm",$param) and $param["AuthAlgorithm"] !== null) {
            $this->AuthAlgorithm = $param["AuthAlgorithm"];
        }

        if (array_key_exists("TypeA",$param) and $param["TypeA"] !== null) {
            $this->TypeA = new AuthenticationTypeA();
            $this->TypeA->deserialize($param["TypeA"]);
        }

        if (array_key_exists("TypeB",$param) and $param["TypeB"] !== null) {
            $this->TypeB = new AuthenticationTypeB();
            $this->TypeB->deserialize($param["TypeB"]);
        }

        if (array_key_exists("TypeC",$param) and $param["TypeC"] !== null) {
            $this->TypeC = new AuthenticationTypeC();
            $this->TypeC->deserialize($param["TypeC"]);
        }

        if (array_key_exists("TypeD",$param) and $param["TypeD"] !== null) {
            $this->TypeD = new AuthenticationTypeD();
            $this->TypeD->deserialize($param["TypeD"]);
        }
    }
}
