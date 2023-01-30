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
 * DescribeVulLevelSummary response structure.
 *
 * @method integer getHighLevelVulCount() Obtain Number of high-risk vulnerabilities
 * @method void setHighLevelVulCount(integer $HighLevelVulCount) Set Number of high-risk vulnerabilities
 * @method integer getMediumLevelVulCount() Obtain Number of medium-risk vulnerabilities
 * @method void setMediumLevelVulCount(integer $MediumLevelVulCount) Set Number of medium-risk vulnerabilities
 * @method integer getLowLevelVulCount() Obtain Number of low-risk vulnerabilities
 * @method void setLowLevelVulCount(integer $LowLevelVulCount) Set Number of low-risk vulnerabilities
 * @method integer getCriticalLevelVulCount() Obtain Number of critical vulnerabilities
 * @method void setCriticalLevelVulCount(integer $CriticalLevelVulCount) Set Number of critical vulnerabilities
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulLevelSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of high-risk vulnerabilities
     */
    public $HighLevelVulCount;

    /**
     * @var integer Number of medium-risk vulnerabilities
     */
    public $MediumLevelVulCount;

    /**
     * @var integer Number of low-risk vulnerabilities
     */
    public $LowLevelVulCount;

    /**
     * @var integer Number of critical vulnerabilities
     */
    public $CriticalLevelVulCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $HighLevelVulCount Number of high-risk vulnerabilities
     * @param integer $MediumLevelVulCount Number of medium-risk vulnerabilities
     * @param integer $LowLevelVulCount Number of low-risk vulnerabilities
     * @param integer $CriticalLevelVulCount Number of critical vulnerabilities
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
        if (array_key_exists("HighLevelVulCount",$param) and $param["HighLevelVulCount"] !== null) {
            $this->HighLevelVulCount = $param["HighLevelVulCount"];
        }

        if (array_key_exists("MediumLevelVulCount",$param) and $param["MediumLevelVulCount"] !== null) {
            $this->MediumLevelVulCount = $param["MediumLevelVulCount"];
        }

        if (array_key_exists("LowLevelVulCount",$param) and $param["LowLevelVulCount"] !== null) {
            $this->LowLevelVulCount = $param["LowLevelVulCount"];
        }

        if (array_key_exists("CriticalLevelVulCount",$param) and $param["CriticalLevelVulCount"] !== null) {
            $this->CriticalLevelVulCount = $param["CriticalLevelVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
