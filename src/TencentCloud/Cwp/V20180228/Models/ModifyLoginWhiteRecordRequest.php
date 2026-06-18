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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoginWhiteRecord request structure.
 *
 * @method string getUserName() Obtain <p>Allowlisted users (multiple users separated by commas)</p>
 * @method void setUserName(string $UserName) Set <p>Allowlisted users (multiple users separated by commas)</p>
 * @method string getSrcIp() Obtain <p>Allowlisted dimension information recorded after the update</p>
 * @method void setSrcIp(string $SrcIp) Set <p>Allowlisted dimension information recorded after the update</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 * @method string getRemark() Obtain <p>Remark</p>
 * @method void setRemark(string $Remark) Set <p>Remark</p>
 * @method integer getIsGlobal() Obtain <p>Whether it applies to all servers: 0 - no; 1 - yes</p>
 * @method void setIsGlobal(integer $IsGlobal) Set <p>Whether it applies to all servers: 0 - no; 1 - yes</p>
 * @method integer getId() Obtain <p>Allowlist ID</p>
 * @method void setId(integer $Id) Set <p>Allowlist ID</p>
 * @method array getHosts() Obtain <p>Server list</p>
 * @method void setHosts(array $Hosts) Set <p>Server list</p>
 * @method array getPlaces() Obtain <p>Region list</p>
 * @method void setPlaces(array $Places) Set <p>Region list</p>
 */
class ModifyLoginWhiteRecordRequest extends AbstractModel
{
    /**
     * @var string <p>Allowlisted users (multiple users separated by commas)</p>
     */
    public $UserName;

    /**
     * @var string <p>Allowlisted dimension information recorded after the update</p>
     */
    public $SrcIp;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Remark</p>
     */
    public $Remark;

    /**
     * @var integer <p>Whether it applies to all servers: 0 - no; 1 - yes</p>
     */
    public $IsGlobal;

    /**
     * @var integer <p>Allowlist ID</p>
     */
    public $Id;

    /**
     * @var array <p>Server list</p>
     */
    public $Hosts;

    /**
     * @var array <p>Region list</p>
     */
    public $Places;

    /**
     * @param string $UserName <p>Allowlisted users (multiple users separated by commas)</p>
     * @param string $SrcIp <p>Allowlisted dimension information recorded after the update</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime <p>End time.</p>
     * @param string $Remark <p>Remark</p>
     * @param integer $IsGlobal <p>Whether it applies to all servers: 0 - no; 1 - yes</p>
     * @param integer $Id <p>Allowlist ID</p>
     * @param array $Hosts <p>Server list</p>
     * @param array $Places <p>Region list</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = [];
            foreach ($param["Hosts"] as $key => $value){
                $obj = new HostInfo();
                $obj->deserialize($value);
                array_push($this->Hosts, $obj);
            }
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }
    }
}
