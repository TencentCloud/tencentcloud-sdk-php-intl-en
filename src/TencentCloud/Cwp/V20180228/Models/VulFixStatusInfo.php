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
 * View vulnerability fixing details
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method integer getProgress() Obtain Vulnerability fixing progress: 1-100;
 * @method void setProgress(integer $Progress) Set Vulnerability fixing progress: 1-100;
 * @method array getHostList() Obtain Vulnerability fixing status for corresponding hosts
 * @method void setHostList(array $HostList) Set Vulnerability fixing status for corresponding hosts
 * @method integer getFailCnt() Obtain Number of hosts with failed vulnerability fixing
 * @method void setFailCnt(integer $FailCnt) Set Number of hosts with failed vulnerability fixing
 * @method integer getFixSuccessCnt() Obtain Number of successful repairs
 * @method void setFixSuccessCnt(integer $FixSuccessCnt) Set Number of successful repairs
 * @method integer getFixMethod() Obtain Repair method. 0: Update components or install patches. 1: Disable service.
 * @method void setFixMethod(integer $FixMethod) Set Repair method. 0: Update components or install patches. 1: Disable service.
 * @method integer getKbId() Obtain kb ID
 * @method void setKbId(integer $KbId) Set kb ID
 * @method string getKbNumber() Obtain kb number
 * @method void setKbNumber(string $KbNumber) Set kb number
 * @method string getKbName() Obtain kb name
 * @method void setKbName(string $KbName) Set kb name
 * @method array getPreKbList() Obtain Pre kb list
 * @method void setPreKbList(array $PreKbList) Set Pre kb list
 */
class VulFixStatusInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var integer Vulnerability fixing progress: 1-100;
     */
    public $Progress;

    /**
     * @var array Vulnerability fixing status for corresponding hosts
     */
    public $HostList;

    /**
     * @var integer Number of hosts with failed vulnerability fixing
     */
    public $FailCnt;

    /**
     * @var integer Number of successful repairs
     */
    public $FixSuccessCnt;

    /**
     * @var integer Repair method. 0: Update components or install patches. 1: Disable service.
     */
    public $FixMethod;

    /**
     * @var integer kb ID
     */
    public $KbId;

    /**
     * @var string kb number
     */
    public $KbNumber;

    /**
     * @var string kb name
     */
    public $KbName;

    /**
     * @var array Pre kb list
     */
    public $PreKbList;

    /**
     * @param integer $VulId Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param integer $Progress Vulnerability fixing progress: 1-100;
     * @param array $HostList Vulnerability fixing status for corresponding hosts
     * @param integer $FailCnt Number of hosts with failed vulnerability fixing
     * @param integer $FixSuccessCnt Number of successful repairs
     * @param integer $FixMethod Repair method. 0: Update components or install patches. 1: Disable service.
     * @param integer $KbId kb ID
     * @param string $KbNumber kb number
     * @param string $KbName kb name
     * @param array $PreKbList Pre kb list
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = [];
            foreach ($param["HostList"] as $key => $value){
                $obj = new VulFixStatusHostInfo();
                $obj->deserialize($value);
                array_push($this->HostList, $obj);
            }
        }

        if (array_key_exists("FailCnt",$param) and $param["FailCnt"] !== null) {
            $this->FailCnt = $param["FailCnt"];
        }

        if (array_key_exists("FixSuccessCnt",$param) and $param["FixSuccessCnt"] !== null) {
            $this->FixSuccessCnt = $param["FixSuccessCnt"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbNumber",$param) and $param["KbNumber"] !== null) {
            $this->KbNumber = $param["KbNumber"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }

        if (array_key_exists("PreKbList",$param) and $param["PreKbList"] !== null) {
            $this->PreKbList = $param["PreKbList"];
        }
    }
}
