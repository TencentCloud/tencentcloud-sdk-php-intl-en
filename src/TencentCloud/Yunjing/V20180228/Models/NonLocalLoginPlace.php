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
 * Unusual login location
 *
 * @method integer getId() Obtain Event ID.
 * @method void setId(integer $Id) Set Event ID.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getStatus() Obtain Login status
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>NORMAL_LOGIN: intended login</li>
 * @method void setStatus(string $Status) Set Login status
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>NORMAL_LOGIN: intended login</li>
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method integer getCity() Obtain City ID.
 * @method void setCity(integer $City) Set City ID.
 * @method integer getCountry() Obtain Country/Region ID.
 * @method void setCountry(integer $Country) Set Country/Region ID.
 * @method integer getProvince() Obtain Province/State ID.
 * @method void setProvince(integer $Province) Set Province/State ID.
 * @method string getSrcIp() Obtain Login IP.
 * @method void setSrcIp(string $SrcIp) Set Login IP.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getLoginTime() Obtain Login time.
 * @method void setLoginTime(string $LoginTime) Set Login time.
 * @method string getUuid() Obtain CWP agent `Uuid`.
 * @method void setUuid(string $Uuid) Set CWP agent `Uuid`.
 */
class NonLocalLoginPlace extends AbstractModel
{
    /**
     * @var integer Event ID.
     */
    public $Id;

    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var string Login status
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>NORMAL_LOGIN: intended login</li>
     */
    public $Status;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var integer City ID.
     */
    public $City;

    /**
     * @var integer Country/Region ID.
     */
    public $Country;

    /**
     * @var integer Province/State ID.
     */
    public $Province;

    /**
     * @var string Login IP.
     */
    public $SrcIp;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Login time.
     */
    public $LoginTime;

    /**
     * @var string CWP agent `Uuid`.
     */
    public $Uuid;

    /**
     * @param integer $Id Event ID.
     * @param string $MachineIp Server IP.
     * @param string $Status Login status
<li>NON_LOCAL_LOGIN: unusual login location</li>
<li>NORMAL_LOGIN: intended login</li>
     * @param string $UserName Username.
     * @param integer $City City ID.
     * @param integer $Country Country/Region ID.
     * @param integer $Province Province/State ID.
     * @param string $SrcIp Login IP.
     * @param string $MachineName Server name.
     * @param string $LoginTime Login time.
     * @param string $Uuid CWP agent `Uuid`.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
