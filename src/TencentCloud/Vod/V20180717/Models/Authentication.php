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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection configuration
 *
 * @method string getSwitch() Obtain Anti-hotlink configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Anti-hotlink configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method AuthenticationTypeA getTypeA() Obtain Timestamp hotlink protection mode A configuration
 * @method void setTypeA(AuthenticationTypeA $TypeA) Set Timestamp hotlink protection mode A configuration
 * @method AuthenticationTypeB getTypeB() Obtain Timestamp hotlink protection mode B configuration
 * @method void setTypeB(AuthenticationTypeB $TypeB) Set Timestamp hotlink protection mode B configuration
 * @method AuthenticationTypeC getTypeC() Obtain Timestamp hotlink protection mode C configuration
 * @method void setTypeC(AuthenticationTypeC $TypeC) Set Timestamp hotlink protection mode C configuration
 * @method AuthenticationTypeD getTypeD() Obtain Timestamp hotlink protection mode D configuration
 * @method void setTypeD(AuthenticationTypeD $TypeD) Set Timestamp hotlink protection mode D configuration
 */
class Authentication extends AbstractModel
{
    /**
     * @var string Anti-hotlink configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var AuthenticationTypeA Timestamp hotlink protection mode A configuration
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB Timestamp hotlink protection mode B configuration
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC Timestamp hotlink protection mode C configuration
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD Timestamp hotlink protection mode D configuration
     */
    public $TypeD;

    /**
     * @param string $Switch Anti-hotlink configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     * @param AuthenticationTypeA $TypeA Timestamp hotlink protection mode A configuration
     * @param AuthenticationTypeB $TypeB Timestamp hotlink protection mode B configuration
     * @param AuthenticationTypeC $TypeC Timestamp hotlink protection mode C configuration
     * @param AuthenticationTypeD $TypeD Timestamp hotlink protection mode D configuration
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
