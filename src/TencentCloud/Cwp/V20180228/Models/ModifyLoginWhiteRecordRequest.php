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
 * ModifyLoginWhiteRecord request structure.
 *
 * @method string getUserName() Obtain Allowlisted users (Multiple users are separated by commas.)
 * @method void setUserName(string $UserName) Set Allowlisted users (Multiple users are separated by commas.)
 * @method string getSrcIp() Obtain Allowlisted dimension information recorded after the update
 * @method void setSrcIp(string $SrcIp) Set Allowlisted dimension information recorded after the update
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getIsGlobal() Obtain Whether it applies to all servers: 0: no; 1: yes
 * @method void setIsGlobal(integer $IsGlobal) Set Whether it applies to all servers: 0: no; 1: yes
 * @method integer getId() Obtain Allowlist ID
 * @method void setId(integer $Id) Set Allowlist ID
 * @method array getHosts() Obtain Server list
 * @method void setHosts(array $Hosts) Set Server list
 * @method array getPlaces() Obtain Region list
 * @method void setPlaces(array $Places) Set Region list
 */
class ModifyLoginWhiteRecordRequest extends AbstractModel
{
    /**
     * @var string Allowlisted users (Multiple users are separated by commas.)
     */
    public $UserName;

    /**
     * @var string Allowlisted dimension information recorded after the update
     */
    public $SrcIp;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Whether it applies to all servers: 0: no; 1: yes
     */
    public $IsGlobal;

    /**
     * @var integer Allowlist ID
     */
    public $Id;

    /**
     * @var array Server list
     */
    public $Hosts;

    /**
     * @var array Region list
     */
    public $Places;

    /**
     * @param string $UserName Allowlisted users (Multiple users are separated by commas.)
     * @param string $SrcIp Allowlisted dimension information recorded after the update
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $Remark Remarks
     * @param integer $IsGlobal Whether it applies to all servers: 0: no; 1: yes
     * @param integer $Id Allowlist ID
     * @param array $Hosts Server list
     * @param array $Places Region list
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
