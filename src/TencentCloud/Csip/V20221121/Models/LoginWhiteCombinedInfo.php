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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Merge cross-region log-in allowlists
 *
 * @method array getPlaces() Obtain <p>Allowlist region</p>
 * @method void setPlaces(array $Places) Set <p>Allowlist region</p>
 * @method string getUserName() Obtain <p>allowlisted users (multiple users separated by commas)</p>
 * @method void setUserName(string $UserName) Set <p>allowlisted users (multiple users separated by commas)</p>
 * @method string getSrcIp() Obtain <p>Allowlisted IPs (multiple IPs separated by commas)</p>
 * @method void setSrcIp(string $SrcIp) Set <p>Allowlisted IPs (multiple IPs separated by commas)</p>
 * @method string getLocale() Obtain <p>Region string</p>
 * @method void setLocale(string $Locale) Set <p>Region string</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 * @method integer getIsGlobal() Obtain <p>Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list'</p>
 * @method void setIsGlobal(integer $IsGlobal) Set <p>Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list'</p>
 * @method string getName() Obtain <p>Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.</p>
 * @method void setName(string $Name) Set <p>Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.</p>
 * @method string getDesc() Obtain <p>Return the server name when the allowlist applies to only one server.</p>
 * @method void setDesc(string $Desc) Set <p>Return the server name when the allowlist applies to only one server.</p>
 * @method integer getId() Obtain <p>Allowlist ID</p>
 * @method void setId(integer $Id) Set <p>Allowlist ID</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getModifyTime() Obtain <p>Last modification time</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last modification time</p>
 * @method string getUuid() Obtain <p>Server Uuid</p>
 * @method void setUuid(string $Uuid) Set <p>Server Uuid</p>
 * @method string getLocations() Obtain <p>Login location</p>
 * @method void setLocations(string $Locations) Set <p>Login location</p>
 */
class LoginWhiteCombinedInfo extends AbstractModel
{
    /**
     * @var array <p>Allowlist region</p>
     */
    public $Places;

    /**
     * @var string <p>allowlisted users (multiple users separated by commas)</p>
     */
    public $UserName;

    /**
     * @var string <p>Allowlisted IPs (multiple IPs separated by commas)</p>
     */
    public $SrcIp;

    /**
     * @var string <p>Region string</p>
     */
    public $Locale;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list'</p>
     */
    public $IsGlobal;

    /**
     * @var string <p>Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.</p>
     */
    public $Name;

    /**
     * @var string <p>Return the server name when the allowlist applies to only one server.</p>
     */
    public $Desc;

    /**
     * @var integer <p>Allowlist ID</p>
     */
    public $Id;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modification time</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>Server Uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>Login location</p>
     */
    public $Locations;

    /**
     * @param array $Places <p>Allowlist region</p>
     * @param string $UserName <p>allowlisted users (multiple users separated by commas)</p>
     * @param string $SrcIp <p>Allowlisted IPs (multiple IPs separated by commas)</p>
     * @param string $Locale <p>Region string</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime <p>End time.</p>
     * @param integer $IsGlobal <p>Whether the settings take effect globally. 1: take effect globally; 0: take effect on the specified host list'</p>
     * @param string $Name <p>Allowlist name. If IsLocal is set to 1, the name is fixed as All servers. If the allowlist applies to only a single server, the name is the server's private IP Address. If the allowlist applies to multiple servers, the name is the number of servers, such as 11.</p>
     * @param string $Desc <p>Return the server name when the allowlist applies to only one server.</p>
     * @param integer $Id <p>Allowlist ID</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ModifyTime <p>Last modification time</p>
     * @param string $Uuid <p>Server Uuid</p>
     * @param string $Locations <p>Login location</p>
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
