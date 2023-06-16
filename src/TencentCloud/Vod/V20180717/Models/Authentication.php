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
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method AuthenticationTypeA getTypeA() Obtain 
 * @method void setTypeA(AuthenticationTypeA $TypeA) Set 
 * @method AuthenticationTypeB getTypeB() Obtain 
 * @method void setTypeB(AuthenticationTypeB $TypeB) Set 
 * @method AuthenticationTypeC getTypeC() Obtain 
 * @method void setTypeC(AuthenticationTypeC $TypeC) Set 
 * @method AuthenticationTypeD getTypeD() Obtain 
 * @method void setTypeD(AuthenticationTypeD $TypeD) Set 
 */
class Authentication extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var AuthenticationTypeA 
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB 
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC 
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD 
     */
    public $TypeD;

    /**
     * @param string $Switch 
     * @param AuthenticationTypeA $TypeA 
     * @param AuthenticationTypeB $TypeB 
     * @param AuthenticationTypeC $TypeC 
     * @param AuthenticationTypeD $TypeD 
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
