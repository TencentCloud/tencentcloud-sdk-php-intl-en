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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cross-region log-in allowlist
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getUuid() Obtain Yunjing client ID
 * @method void setUuid(string $Uuid) Set Yunjing client ID
 * @method array getPlaces() Obtain Allowlisted regions
 * @method void setPlaces(array $Places) Set Allowlisted regions
 * @method string getUserName() Obtain Allowlisted users (Multiple users are separated by commas.)
 * @method void setUserName(string $UserName) Set Allowlisted users (Multiple users are separated by commas.)
 * @method string getSrcIp() Obtain Allowlisted IPs (Multiple IPs are separated by commas.)
 * @method void setSrcIp(string $SrcIp) Set Allowlisted IPs (Multiple IPs are separated by commas.)
 * @method boolean getIsGlobal() Obtain Whether a global rule
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether a global rule
 * @method string getCreateTime() Obtain Time of creating the allowlist
 * @method void setCreateTime(string $CreateTime) Set Time of creating the allowlist
 * @method string getModifyTime() Obtain Time of modifying the allowlist
 * @method void setModifyTime(string $ModifyTime) Set Time of modifying the allowlist
 * @method string getMachineName() Obtain Machine name
 * @method void setMachineName(string $MachineName) Set Machine name
 * @method string getHostIp() Obtain Machine IP
 * @method void setHostIp(string $HostIp) Set Machine IP
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
     * @var string Yunjing client ID
     */
    public $Uuid;

    /**
     * @var array Allowlisted regions
     */
    public $Places;

    /**
     * @var string Allowlisted users (Multiple users are separated by commas.)
     */
    public $UserName;

    /**
     * @var string Allowlisted IPs (Multiple IPs are separated by commas.)
     */
    public $SrcIp;

    /**
     * @var boolean Whether a global rule
     */
    public $IsGlobal;

    /**
     * @var string Time of creating the allowlist
     */
    public $CreateTime;

    /**
     * @var string Time of modifying the allowlist
     */
    public $ModifyTime;

    /**
     * @var string Machine name
     */
    public $MachineName;

    /**
     * @var string Machine IP
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
     * @param string $Uuid Yunjing client ID
     * @param array $Places Allowlisted regions
     * @param string $UserName Allowlisted users (Multiple users are separated by commas.)
     * @param string $SrcIp Allowlisted IPs (Multiple IPs are separated by commas.)
     * @param boolean $IsGlobal Whether a global rule
     * @param string $CreateTime Time of creating the allowlist
     * @param string $ModifyTime Time of modifying the allowlist
     * @param string $MachineName Machine name
     * @param string $HostIp Machine IP
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
