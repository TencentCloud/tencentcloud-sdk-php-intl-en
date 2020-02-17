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
 * @method string getSwitch() Obtain Hotlink protection configuration switch
on: enabled
off: disabled
When it is enabled, only one mode needs to be configured. Other modes need to be set to null.
 * @method void setSwitch(string $Switch) Set Hotlink protection configuration switch
on: enabled
off: disabled
When it is enabled, only one mode needs to be configured. Other modes need to be set to null.
 * @method AuthenticationTypeA getTypeA() Obtain Timestamp hotlink protection mode A configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTypeA(AuthenticationTypeA $TypeA) Set Timestamp hotlink protection mode A configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AuthenticationTypeB getTypeB() Obtain Timestamp hotlink protection mode B configuration (the mode B backend is being upgraded and the configuration is currently not supported)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTypeB(AuthenticationTypeB $TypeB) Set Timestamp hotlink protection mode B configuration (the mode B backend is being upgraded and the configuration is currently not supported)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AuthenticationTypeC getTypeC() Obtain Timestamp hotlink protection mode C configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTypeC(AuthenticationTypeC $TypeC) Set Timestamp hotlink protection mode C configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AuthenticationTypeD getTypeD() Obtain Timestamp hotlink protection mode D configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTypeD(AuthenticationTypeD $TypeD) Set Timestamp hotlink protection mode D configuration
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Timestamp hotlink protection configuration
 */
class Authentication extends AbstractModel
{
    /**
     * @var string Hotlink protection configuration switch
on: enabled
off: disabled
When it is enabled, only one mode needs to be configured. Other modes need to be set to null.
     */
    public $Switch;

    /**
     * @var AuthenticationTypeA Timestamp hotlink protection mode A configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB Timestamp hotlink protection mode B configuration (the mode B backend is being upgraded and the configuration is currently not supported)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC Timestamp hotlink protection mode C configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD Timestamp hotlink protection mode D configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TypeD;
    /**
     * @param string $Switch Hotlink protection configuration switch
on: enabled
off: disabled
When it is enabled, only one mode needs to be configured. Other modes need to be set to null.
     * @param AuthenticationTypeA $TypeA Timestamp hotlink protection mode A configuration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AuthenticationTypeB $TypeB Timestamp hotlink protection mode B configuration (the mode B backend is being upgraded and the configuration is currently not supported)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AuthenticationTypeC $TypeC Timestamp hotlink protection mode C configuration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AuthenticationTypeD $TypeD Timestamp hotlink protection mode D configuration
Note: this field may return null, indicating that no valid values can be obtained.
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
