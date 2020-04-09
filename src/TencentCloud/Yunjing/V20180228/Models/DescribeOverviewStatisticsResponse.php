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
 * DescribeOverviewStatistics response structure.
 *
 * @method integer getOnlineMachineNum() Obtain Number of online servers.
 * @method void setOnlineMachineNum(integer $OnlineMachineNum) Set Number of online servers.
 * @method integer getProVersionMachineNum() Obtain Number of servers activated CWP Pro.
 * @method void setProVersionMachineNum(integer $ProVersionMachineNum) Set Number of servers activated CWP Pro.
 * @method integer getMalwareNum() Obtain Number of trojan files.
 * @method void setMalwareNum(integer $MalwareNum) Set Number of trojan files.
 * @method integer getNonlocalLoginNum() Obtain Number of unusual login locations.
 * @method void setNonlocalLoginNum(integer $NonlocalLoginNum) Set Number of unusual login locations.
 * @method integer getBruteAttackSuccessNum() Obtain Number of successful brute force attacks.
 * @method void setBruteAttackSuccessNum(integer $BruteAttackSuccessNum) Set Number of successful brute force attacks.
 * @method integer getVulNum() Obtain Number of vulnerabilities.
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities.
 * @method integer getBaseLineNum() Obtain Security baseline number
 * @method void setBaseLineNum(integer $BaseLineNum) Set Security baseline number
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeOverviewStatisticsResponse extends AbstractModel
{
    /**
     * @var integer Number of online servers.
     */
    public $OnlineMachineNum;

    /**
     * @var integer Number of servers activated CWP Pro.
     */
    public $ProVersionMachineNum;

    /**
     * @var integer Number of trojan files.
     */
    public $MalwareNum;

    /**
     * @var integer Number of unusual login locations.
     */
    public $NonlocalLoginNum;

    /**
     * @var integer Number of successful brute force attacks.
     */
    public $BruteAttackSuccessNum;

    /**
     * @var integer Number of vulnerabilities.
     */
    public $VulNum;

    /**
     * @var integer Security baseline number
     */
    public $BaseLineNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $OnlineMachineNum Number of online servers.
     * @param integer $ProVersionMachineNum Number of servers activated CWP Pro.
     * @param integer $MalwareNum Number of trojan files.
     * @param integer $NonlocalLoginNum Number of unusual login locations.
     * @param integer $BruteAttackSuccessNum Number of successful brute force attacks.
     * @param integer $VulNum Number of vulnerabilities.
     * @param integer $BaseLineNum Security baseline number
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
        if (array_key_exists("OnlineMachineNum",$param) and $param["OnlineMachineNum"] !== null) {
            $this->OnlineMachineNum = $param["OnlineMachineNum"];
        }

        if (array_key_exists("ProVersionMachineNum",$param) and $param["ProVersionMachineNum"] !== null) {
            $this->ProVersionMachineNum = $param["ProVersionMachineNum"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("NonlocalLoginNum",$param) and $param["NonlocalLoginNum"] !== null) {
            $this->NonlocalLoginNum = $param["NonlocalLoginNum"];
        }

        if (array_key_exists("BruteAttackSuccessNum",$param) and $param["BruteAttackSuccessNum"] !== null) {
            $this->BruteAttackSuccessNum = $param["BruteAttackSuccessNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("BaseLineNum",$param) and $param["BaseLineNum"] !== null) {
            $this->BaseLineNum = $param["BaseLineNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
