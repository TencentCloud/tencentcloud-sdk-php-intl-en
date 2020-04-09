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
 * Unusual login location data in weekly CWP Pro report
 *
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getSrcIp() Obtain Source IP.
 * @method void setSrcIp(string $SrcIp) Set Source IP.
 * @method integer getCountry() Obtain Country/Region ID.
 * @method void setCountry(integer $Country) Set Country/Region ID.
 * @method integer getProvince() Obtain Province/State ID.
 * @method void setProvince(integer $Province) Set Province/State ID.
 * @method integer getCity() Obtain City ID.
 * @method void setCity(integer $City) Set City ID.
 * @method string getLoginTime() Obtain Login time.
 * @method void setLoginTime(string $LoginTime) Set Login time.
 */
class WeeklyReportNonlocalLoginPlace extends AbstractModel
{
    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var string Source IP.
     */
    public $SrcIp;

    /**
     * @var integer Country/Region ID.
     */
    public $Country;

    /**
     * @var integer Province/State ID.
     */
    public $Province;

    /**
     * @var integer City ID.
     */
    public $City;

    /**
     * @var string Login time.
     */
    public $LoginTime;

    /**
     * @param string $MachineIp Server IP.
     * @param string $Username Username.
     * @param string $SrcIp Source IP.
     * @param integer $Country Country/Region ID.
     * @param integer $Province Province/State ID.
     * @param integer $City City ID.
     * @param string $LoginTime Login time.
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }
    }
}
