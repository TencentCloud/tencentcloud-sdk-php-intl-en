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
 * DescribeNewestVul response structure.
 *
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getSubmitTime() Obtain Disclosure time
 * @method void setSubmitTime(string $SubmitTime) Set Disclosure time
 * @method string getStatus() Obtain Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned).
 * @method void setStatus(string $Status) Set Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned).
 * @method string getCVEID() Obtain Vulnerability CVE ID
 * @method void setCVEID(string $CVEID) Set Vulnerability CVE ID
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNewestVulResponse extends AbstractModel
{
    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Disclosure time
     */
    public $SubmitTime;

    /**
     * @var string Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned).
     */
    public $Status;

    /**
     * @var string Vulnerability CVE ID
     */
    public $CVEID;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PocID POC ID
     * @param string $VulName Vulnerability name
     * @param string $SubmitTime Disclosure time
     * @param string $Status Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned).
     * @param string $CVEID Vulnerability CVE ID
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
