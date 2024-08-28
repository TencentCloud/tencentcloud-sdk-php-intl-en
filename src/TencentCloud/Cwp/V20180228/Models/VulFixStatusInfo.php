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
 * View vulnerability fixing details
 *
 * @method integer getVulId() Obtain Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulId(integer $VulId) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Vulnerability fixing progress: 1-100;
 * @method void setProgress(integer $Progress) Set Vulnerability fixing progress: 1-100;
 * @method array getHostList() Obtain Vulnerability fixing status for corresponding hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostList(array $HostList) Set Vulnerability fixing status for corresponding hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFailCnt() Obtain Number of hosts with failed vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailCnt(integer $FailCnt) Set Number of hosts with failed vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFixSuccessCnt() Obtain Number of hosts with successful vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixSuccessCnt(integer $FixSuccessCnt) Set Number of hosts with successful vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFixMethod() Obtain 
 * @method void setFixMethod(integer $FixMethod) Set 
 */
class VulFixStatusInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulId;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var integer Vulnerability fixing progress: 1-100;
     */
    public $Progress;

    /**
     * @var array Vulnerability fixing status for corresponding hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostList;

    /**
     * @var integer Number of hosts with failed vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailCnt;

    /**
     * @var integer Number of hosts with successful vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixSuccessCnt;

    /**
     * @var integer 
     */
    public $FixMethod;

    /**
     * @param integer $VulId Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Vulnerability fixing progress: 1-100;
     * @param array $HostList Vulnerability fixing status for corresponding hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FailCnt Number of hosts with failed vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FixSuccessCnt Number of hosts with successful vulnerability fixing
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FixMethod 
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
    }
}
