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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageRiskSummary response structure.
 *
 * @method array getVulnerabilityCnt() Obtain Vulnerability
 * @method void setVulnerabilityCnt(array $VulnerabilityCnt) Set Vulnerability
 * @method array getMalwareVirusCnt() Obtain Virus and trojan
 * @method void setMalwareVirusCnt(array $MalwareVirusCnt) Set Virus and trojan
 * @method array getRiskCnt() Obtain Sensitive data
 * @method void setRiskCnt(array $RiskCnt) Set Sensitive data
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImageRiskSummaryResponse extends AbstractModel
{
    /**
     * @var array Vulnerability
     */
    public $VulnerabilityCnt;

    /**
     * @var array Virus and trojan
     */
    public $MalwareVirusCnt;

    /**
     * @var array Sensitive data
     */
    public $RiskCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $VulnerabilityCnt Vulnerability
     * @param array $MalwareVirusCnt Virus and trojan
     * @param array $RiskCnt Sensitive data
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("VulnerabilityCnt",$param) and $param["VulnerabilityCnt"] !== null) {
            $this->VulnerabilityCnt = [];
            foreach ($param["VulnerabilityCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->VulnerabilityCnt, $obj);
            }
        }

        if (array_key_exists("MalwareVirusCnt",$param) and $param["MalwareVirusCnt"] !== null) {
            $this->MalwareVirusCnt = [];
            foreach ($param["MalwareVirusCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->MalwareVirusCnt, $obj);
            }
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = [];
            foreach ($param["RiskCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskCnt, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
