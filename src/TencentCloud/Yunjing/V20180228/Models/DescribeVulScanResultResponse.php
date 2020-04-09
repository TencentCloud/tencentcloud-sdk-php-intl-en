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
 * DescribeVulScanResult response structure.
 *
 * @method integer getVulNum() Obtain Number of vulnerabilities.
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities.
 * @method integer getProVersionNum() Obtain Number of servers activated CWP Pro
 * @method void setProVersionNum(integer $ProVersionNum) Set Number of servers activated CWP Pro
 * @method integer getImpactedHostNum() Obtain Number of affected activated CWP Pro.
 * @method void setImpactedHostNum(integer $ImpactedHostNum) Set Number of affected activated CWP Pro.
 * @method integer getHostNum() Obtain Total number of servers.
 * @method void setHostNum(integer $HostNum) Set Total number of servers.
 * @method integer getBasicVersionNum() Obtain Number of servers on CWP Basic.
 * @method void setBasicVersionNum(integer $BasicVersionNum) Set Number of servers on CWP Basic.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulScanResultResponse extends AbstractModel
{
    /**
     * @var integer Number of vulnerabilities.
     */
    public $VulNum;

    /**
     * @var integer Number of servers activated CWP Pro
     */
    public $ProVersionNum;

    /**
     * @var integer Number of affected activated CWP Pro.
     */
    public $ImpactedHostNum;

    /**
     * @var integer Total number of servers.
     */
    public $HostNum;

    /**
     * @var integer Number of servers on CWP Basic.
     */
    public $BasicVersionNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $VulNum Number of vulnerabilities.
     * @param integer $ProVersionNum Number of servers activated CWP Pro
     * @param integer $ImpactedHostNum Number of affected activated CWP Pro.
     * @param integer $HostNum Total number of servers.
     * @param integer $BasicVersionNum Number of servers on CWP Basic.
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
        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("ProVersionNum",$param) and $param["ProVersionNum"] !== null) {
            $this->ProVersionNum = $param["ProVersionNum"];
        }

        if (array_key_exists("ImpactedHostNum",$param) and $param["ImpactedHostNum"] !== null) {
            $this->ImpactedHostNum = $param["ImpactedHostNum"];
        }

        if (array_key_exists("HostNum",$param) and $param["HostNum"] !== null) {
            $this->HostNum = $param["HostNum"];
        }

        if (array_key_exists("BasicVersionNum",$param) and $param["BasicVersionNum"] !== null) {
            $this->BasicVersionNum = $param["BasicVersionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
