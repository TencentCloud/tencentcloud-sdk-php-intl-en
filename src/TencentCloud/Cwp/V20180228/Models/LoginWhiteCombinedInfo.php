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
 * Merge cross-region log-in allowlists
 *
 * @method array getPlaces() Obtain Allowlist region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlaces(array $Places) Set Allowlist region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Allowlisted users (Multiple users are separated by commas.)
 * @method void setUserName(string $UserName) Set Allowlisted users (Multiple users are separated by commas.)
 * @method string getSrcIp() Obtain Allowlisted IPs (Multiple IPs are separated by commas.)
 * @method void setSrcIp(string $SrcIp) Set Allowlisted IPs (Multiple IPs are separated by commas.)
 * @method string getLocale() Obtain Region string
 * @method void setLocale(string $Locale) Set Region string
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getIsGlobal() Obtain Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list.
 * @method string getName() Obtain Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.
 * @method void setName(string $Name) Set Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.
 * @method string getDesc() Obtain Return the server name when the allowlist applies to only one server.
 * @method void setDesc(string $Desc) Set Return the server name when the allowlist applies to only one server.
 * @method integer getId() Obtain Allowlist ID
 * @method void setId(integer $Id) Set Allowlist ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Last modification time
 * @method void setModifyTime(string $ModifyTime) Set Last modification time
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getLocations() Obtain Login Location
 * @method void setLocations(string $Locations) Set Login Location
 */
class LoginWhiteCombinedInfo extends AbstractModel
{
    /**
     * @var array Allowlist region
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Region string
     */
    public $Locale;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list.
     */
    public $IsGlobal;

    /**
     * @var string Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.
     */
    public $Name;

    /**
     * @var string Return the server name when the allowlist applies to only one server.
     */
    public $Desc;

    /**
     * @var integer Allowlist ID
     */
    public $Id;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Last modification time
     */
    public $ModifyTime;

    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Login Location
     */
    public $Locations;

    /**
     * @param array $Places Allowlist region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Allowlisted users (Multiple users are separated by commas.)
     * @param string $SrcIp Allowlisted IPs (Multiple IPs are separated by commas.)
     * @param string $Locale Region string
     * @param string $Remark Remarks
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $IsGlobal Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list.
     * @param string $Name Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.
     * @param string $Desc Return the server name when the allowlist applies to only one server.
     * @param integer $Id Allowlist ID
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Last modification time
     * @param string $Uuid Server UUID
     * @param string $Locations Login Location
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

        if (array_key_exists("Locale",$param) and $param["Locale"] !== null) {
            $this->Locale = $param["Locale"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = $param["Locations"];
        }
    }
}
