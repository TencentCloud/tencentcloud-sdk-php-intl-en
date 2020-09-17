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
 * Whitelist rule
 *
 * @method array getPlaces() Obtain Whitelisted location
 * @method void setPlaces(array $Places) Set Whitelisted location
 * @method string getSrcIp() Obtain Whitelisted IPs (separated by commas). This parameter can be an IP range.
 * @method void setSrcIp(string $SrcIp) Set Whitelisted IPs (separated by commas). This parameter can be an IP range.
 * @method string getUserName() Obtain Whitelisted usernames (separated by commas)
 * @method void setUserName(string $UserName) Set Whitelisted usernames (separated by commas)
 * @method boolean getIsGlobal() Obtain Whether this rule is applied to all servers under the current account
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether this rule is applied to all servers under the current account
 * @method string getHostIp() Obtain Server for which the allowlist takes effect
 * @method void setHostIp(string $HostIp) Set Server for which the allowlist takes effect
 * @method integer getId() Obtain Rule ID, used for rule updating
 * @method void setId(integer $Id) Set Rule ID, used for rule updating
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class LoginWhiteListsRule extends AbstractModel
{
    /**
     * @var array Whitelisted location
     */
    public $Places;

    /**
     * @var string Whitelisted IPs (separated by commas). This parameter can be an IP range.
     */
    public $SrcIp;

    /**
     * @var string Whitelisted usernames (separated by commas)
     */
    public $UserName;

    /**
     * @var boolean Whether this rule is applied to all servers under the current account
     */
    public $IsGlobal;

    /**
     * @var string Server for which the allowlist takes effect
     */
    public $HostIp;

    /**
     * @var integer Rule ID, used for rule updating
     */
    public $Id;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param array $Places Whitelisted location
     * @param string $SrcIp Whitelisted IPs (separated by commas). This parameter can be an IP range.
     * @param string $UserName Whitelisted usernames (separated by commas)
     * @param boolean $IsGlobal Whether this rule is applied to all servers under the current account
     * @param string $HostIp Server for which the allowlist takes effect
     * @param integer $Id Rule ID, used for rule updating
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
        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
