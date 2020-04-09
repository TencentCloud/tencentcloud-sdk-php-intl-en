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
 * Brute force attack list
 *
 * @method integer getId() Obtain Event ID.
 * @method void setId(integer $Id) Set Event ID.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getStatus() Obtain Brute force attack event status
<li>BRUTEATTACK_FAIL_ACCOUNT: brute force attack event - failure (the account exists)</li>
<li>BRUTEATTACK_FAIL_NOACCOUNT: brute force attack event - failure (the account does not exist)</li>
<li>BRUTEATTACK_SUCCESS: brute force attack event - success </li>
 * @method void setStatus(string $Status) Set Brute force attack event status
<li>BRUTEATTACK_FAIL_ACCOUNT: brute force attack event - failure (the account exists)</li>
<li>BRUTEATTACK_FAIL_NOACCOUNT: brute force attack event - failure (the account does not exist)</li>
<li>BRUTEATTACK_SUCCESS: brute force attack event - success </li>
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method integer getCity() Obtain City ID.
 * @method void setCity(integer $City) Set City ID.
 * @method integer getCountry() Obtain Country/Region ID.
 * @method void setCountry(integer $Country) Set Country/Region ID.
 * @method integer getProvince() Obtain Province/State ID.
 * @method void setProvince(integer $Province) Set Province/State ID.
 * @method string getSrcIp() Obtain Source IP.
 * @method void setSrcIp(string $SrcIp) Set Source IP.
 * @method integer getCount() Obtain Number of attempts.
 * @method void setCount(integer $Count) Set Number of attempts.
 * @method string getCreateTime() Obtain Occurrence time.
 * @method void setCreateTime(string $CreateTime) Set Occurrence time.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method boolean getIsProVersion() Obtain Whether the server enables CWP Pro.
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether the server enables CWP Pro.
 * @method string getBanStatus() Obtain Whether the server is banned.
 * @method void setBanStatus(string $BanStatus) Set Whether the server is banned.
 * @method string getQuuid() Obtain Server `UUID`
 * @method void setQuuid(string $Quuid) Set Server `UUID`
 */
class BruteAttack extends AbstractModel
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
     * @var string Brute force attack event status
<li>BRUTEATTACK_FAIL_ACCOUNT: brute force attack event - failure (the account exists)</li>
<li>BRUTEATTACK_FAIL_NOACCOUNT: brute force attack event - failure (the account does not exist)</li>
<li>BRUTEATTACK_SUCCESS: brute force attack event - success </li>
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
     * @var string Source IP.
     */
    public $SrcIp;

    /**
     * @var integer Number of attempts.
     */
    public $Count;

    /**
     * @var string Occurrence time.
     */
    public $CreateTime;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string CWP agent `UUID`.
     */
    public $Uuid;

    /**
     * @var boolean Whether the server enables CWP Pro.
     */
    public $IsProVersion;

    /**
     * @var string Whether the server is banned.
     */
    public $BanStatus;

    /**
     * @var string Server `UUID`
     */
    public $Quuid;

    /**
     * @param integer $Id Event ID.
     * @param string $MachineIp Server IP.
     * @param string $Status Brute force attack event status
<li>BRUTEATTACK_FAIL_ACCOUNT: brute force attack event - failure (the account exists)</li>
<li>BRUTEATTACK_FAIL_NOACCOUNT: brute force attack event - failure (the account does not exist)</li>
<li>BRUTEATTACK_SUCCESS: brute force attack event - success </li>
     * @param string $UserName Username.
     * @param integer $City City ID.
     * @param integer $Country Country/Region ID.
     * @param integer $Province Province/State ID.
     * @param string $SrcIp Source IP.
     * @param integer $Count Number of attempts.
     * @param string $CreateTime Occurrence time.
     * @param string $MachineName Server name.
     * @param string $Uuid CWP agent `UUID`.
     * @param boolean $IsProVersion Whether the server enables CWP Pro.
     * @param string $BanStatus Whether the server is banned.
     * @param string $Quuid Server `UUID`
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
