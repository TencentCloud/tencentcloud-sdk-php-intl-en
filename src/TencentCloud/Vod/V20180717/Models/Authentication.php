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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection configuration
 *
 * @method string getSwitch() Obtain Hotlink protection configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>

 * @method void setSwitch(string $Switch) Set Hotlink protection configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>

 * @method AuthenticationTypeA getTypeA() Obtain Timestamp hotlink protection mode A configuration.
 * @method void setTypeA(AuthenticationTypeA $TypeA) Set Timestamp hotlink protection mode A configuration.
 * @method AuthenticationTypeB getTypeB() Obtain Configuration of timestamp hotlink protection mode B.
 * @method void setTypeB(AuthenticationTypeB $TypeB) Set Configuration of timestamp hotlink protection mode B.
 * @method AuthenticationTypeC getTypeC() Obtain Configuration of timestamp hotlink protection mode C.
 * @method void setTypeC(AuthenticationTypeC $TypeC) Set Configuration of timestamp hotlink protection mode C.
 * @method AuthenticationTypeD getTypeD() Obtain Configuration of timestamp hotlink protection mode D.
 * @method void setTypeD(AuthenticationTypeD $TypeD) Set Configuration of timestamp hotlink protection mode D.
 */
class Authentication extends AbstractModel
{
    /**
     * @var string Hotlink protection configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>

     */
    public $Switch;

    /**
     * @var AuthenticationTypeA Timestamp hotlink protection mode A configuration.
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB Configuration of timestamp hotlink protection mode B.
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC Configuration of timestamp hotlink protection mode C.
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD Configuration of timestamp hotlink protection mode D.
     */
    public $TypeD;

    /**
     * @param string $Switch Hotlink protection configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>

     * @param AuthenticationTypeA $TypeA Timestamp hotlink protection mode A configuration.
     * @param AuthenticationTypeB $TypeB Configuration of timestamp hotlink protection mode B.
     * @param AuthenticationTypeC $TypeC Configuration of timestamp hotlink protection mode C.
     * @param AuthenticationTypeD $TypeD Configuration of timestamp hotlink protection mode D.
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
