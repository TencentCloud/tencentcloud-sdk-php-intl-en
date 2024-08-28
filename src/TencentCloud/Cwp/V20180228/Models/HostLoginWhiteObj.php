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
 * Add log-in audit allowlist entity
 *
 * @method array getPlaces() Obtain Allowlisted region
 * @method void setPlaces(array $Places) Set Allowlisted region
 * @method string getSrcIp() Obtain Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.
 * @method void setSrcIp(string $SrcIp) Set Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.
 * @method string getUserName() Obtain Allowlisted username separated by commas
 * @method void setUserName(string $UserName) Set Allowlisted username separated by commas
 * @method integer getIsGlobal() Obtain Whether the allowlist is effective globally. 1: all hosts; 0: only a single host.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the allowlist is effective globally. 1: all hosts; 0: only a single host.
 * @method array getHostInfos() Obtain List of information on machines where the allowlist is effective
 * @method void setHostInfos(array $HostInfos) Set List of information on machines where the allowlist is effective
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class HostLoginWhiteObj extends AbstractModel
{
    /**
     * @var array Allowlisted region
     */
    public $Places;

    /**
     * @var string Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.
     */
    public $SrcIp;

    /**
     * @var string Allowlisted username separated by commas
     */
    public $UserName;

    /**
     * @var integer Whether the allowlist is effective globally. 1: all hosts; 0: only a single host.
     */
    public $IsGlobal;

    /**
     * @var array List of information on machines where the allowlist is effective
     */
    public $HostInfos;

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
     * @param array $Places Allowlisted region
     * @param string $SrcIp Allowlisted source IP address. IP ranges are supported. Multiple IPs are separated by commas.
     * @param string $UserName Allowlisted username separated by commas
     * @param integer $IsGlobal Whether the allowlist is effective globally. 1: all hosts; 0: only a single host.
     * @param array $HostInfos List of information on machines where the allowlist is effective
     * @param string $Remark Remarks
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
