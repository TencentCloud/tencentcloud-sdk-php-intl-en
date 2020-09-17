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
 * Login allowlist
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getUuid() Obtain CWP agent ID
 * @method void setUuid(string $Uuid) Set CWP agent ID
 * @method array getPlaces() Obtain Whitelisted location
 * @method void setPlaces(array $Places) Set Whitelisted location
 * @method string getUserName() Obtain Whitelisted users (separated by commas)
 * @method void setUserName(string $UserName) Set Whitelisted users (separated by commas)
 * @method string getSrcIp() Obtain Whitelisted IPs (separated by commas)
 * @method void setSrcIp(string $SrcIp) Set Whitelisted IPs (separated by commas)
 * @method boolean getIsGlobal() Obtain Whether this rule is applied to all servers under the current account
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether this rule is applied to all servers under the current account
 * @method string getCreateTime() Obtain Whitelist creation time
 * @method void setCreateTime(string $CreateTime) Set Whitelist creation time
 * @method string getModifyTime() Obtain Whitelist modification time
 * @method void setModifyTime(string $ModifyTime) Set Whitelist modification time
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getHostIp() Obtain Server IP
 * @method void setHostIp(string $HostIp) Set Server IP
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class LoginWhiteLists extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $Id;

    /**
     * @var string CWP agent ID
     */
    public $Uuid;

    /**
     * @var array Whitelisted location
     */
    public $Places;

    /**
     * @var string Whitelisted users (separated by commas)
     */
    public $UserName;

    /**
     * @var string Whitelisted IPs (separated by commas)
     */
    public $SrcIp;

    /**
     * @var boolean Whether this rule is applied to all servers under the current account
     */
    public $IsGlobal;

    /**
     * @var string Whitelist creation time
     */
    public $CreateTime;

    /**
     * @var string Whitelist modification time
     */
    public $ModifyTime;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Server IP
     */
    public $HostIp;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param integer $Id Record ID
     * @param string $Uuid CWP agent ID
     * @param array $Places Whitelisted location
     * @param string $UserName Whitelisted users (separated by commas)
     * @param string $SrcIp Whitelisted IPs (separated by commas)
     * @param boolean $IsGlobal Whether this rule is applied to all servers under the current account
     * @param string $CreateTime Whitelist creation time
     * @param string $ModifyTime Whitelist modification time
     * @param string $MachineName Server name
     * @param string $HostIp Server IP
     * @param string $StartTime Start time
     * @param string $EndTime End time
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
