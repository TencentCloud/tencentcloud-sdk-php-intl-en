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
 * Add log-in audit allowlist entity
 *
 * @method array getPlaces() Obtain <p>Add a region to the allowlist</p>
 * @method void setPlaces(array $Places) Set <p>Add a region to the allowlist</p>
 * @method string getSrcIp() Obtain <p>Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.</p>
 * @method void setSrcIp(string $SrcIp) Set <p>Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.</p>
 * @method string getUserName() Obtain <p>Allowlisted username separated by commas</p>
 * @method void setUserName(string $UserName) Set <p>Allowlisted username separated by commas</p>
 * @method integer getIsGlobal() Obtain <p>Whether it is effective globally. 1: all hosts; 0: only a single host&#39;</p>
 * @method void setIsGlobal(integer $IsGlobal) Set <p>Whether it is effective globally. 1: all hosts; 0: only a single host&#39;</p>
 * @method array getHostInfos() Obtain <p>Machine information list with allowlist effective</p>
 * @method void setHostInfos(array $HostInfos) Set <p>Machine information list with allowlist effective</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time.</p>
 */
class HostLoginWhiteObj extends AbstractModel
{
    /**
     * @var array <p>Add a region to the allowlist</p>
     */
    public $Places;

    /**
     * @var string <p>Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.</p>
     */
    public $SrcIp;

    /**
     * @var string <p>Allowlisted username separated by commas</p>
     */
    public $UserName;

    /**
     * @var integer <p>Whether it is effective globally. 1: all hosts; 0: only a single host&#39;</p>
     */
    public $IsGlobal;

    /**
     * @var array <p>Machine information list with allowlist effective</p>
     */
    public $HostInfos;

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
     * @param array $Places <p>Add a region to the allowlist</p>
     * @param string $SrcIp <p>Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.</p>
     * @param string $UserName <p>Allowlisted username separated by commas</p>
     * @param integer $IsGlobal <p>Whether it is effective globally. 1: all hosts; 0: only a single host&#39;</p>
     * @param array $HostInfos <p>Machine information list with allowlist effective</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime <p>End time.</p>
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

        if (array_key_exists("HostInfos",$param) and $param["HostInfos"] !== null) {
            $this->HostInfos = [];
            foreach ($param["HostInfos"] as $key => $value){
                $obj = new HostInfo();
                $obj->deserialize($value);
                array_push($this->HostInfos, $obj);
            }
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
    }
}
