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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Most frequent attacker statistics
 
 *
 * @method integer getNum() Obtain Number
 * @method void setNum(integer $Num) Set Number
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method string getIp() Obtain IP
 * @method void setIp(string $Ip) Set IP
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method string getInsID() Obtain Asset ID
 * @method void setInsID(string $InsID) Set Asset ID
 * @method string getInsName() Obtain Asset name
 * @method void setInsName(string $InsName) Set Asset name
 */
class StaticInfo extends AbstractModel
{
    /**
     * @var integer Number
     */
    public $Num;

    /**
     * @var string Port
     */
    public $Port;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var string Asset ID
     */
    public $InsID;

    /**
     * @var string Asset name
     */
    public $InsName;

    /**
     * @param integer $Num Number
     * @param string $Port Port
     * @param string $Ip IP
     * @param string $Address Address
     * @param string $InsID Asset ID
     * @param string $InsName Asset name
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("InsID",$param) and $param["InsID"] !== null) {
            $this->InsID = $param["InsID"];
        }

        if (array_key_exists("InsName",$param) and $param["InsName"] !== null) {
            $this->InsName = $param["InsName"];
        }
    }
}
