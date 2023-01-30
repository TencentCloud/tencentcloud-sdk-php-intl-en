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
 * DescribeContainerSecEventSummary response structure.
 *
 * @method integer getUnhandledEscapeCnt() Obtain Pending escape event
 * @method void setUnhandledEscapeCnt(integer $UnhandledEscapeCnt) Set Pending escape event
 * @method integer getUnhandledReverseShellCnt() Obtain Pending reverse shell event
 * @method void setUnhandledReverseShellCnt(integer $UnhandledReverseShellCnt) Set Pending reverse shell event
 * @method integer getUnhandledRiskSyscallCnt() Obtain Pending high-risk syscall
 * @method void setUnhandledRiskSyscallCnt(integer $UnhandledRiskSyscallCnt) Set Pending high-risk syscall
 * @method integer getUnhandledAbnormalProcessCnt() Obtain Pending abnormal process
 * @method void setUnhandledAbnormalProcessCnt(integer $UnhandledAbnormalProcessCnt) Set Pending abnormal process
 * @method integer getUnhandledFileCnt() Obtain Pending file tampering event
 * @method void setUnhandledFileCnt(integer $UnhandledFileCnt) Set Pending file tampering event
 * @method integer getUnhandledVirusEventCnt() Obtain Pending trojan event
 * @method void setUnhandledVirusEventCnt(integer $UnhandledVirusEventCnt) Set Pending trojan event
 * @method integer getUnhandledMaliciousConnectionEventCnt() Obtain Unhandled malicious outgoing connections
 * @method void setUnhandledMaliciousConnectionEventCnt(integer $UnhandledMaliciousConnectionEventCnt) Set Unhandled malicious outgoing connections
 * @method integer getUnhandledK8sApiEventCnt() Obtain Unhandled K8sApi events
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUnhandledK8sApiEventCnt(integer $UnhandledK8sApiEventCnt) Set Unhandled K8sApi events
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeContainerSecEventSummaryResponse extends AbstractModel
{
    /**
     * @var integer Pending escape event
     */
    public $UnhandledEscapeCnt;

    /**
     * @var integer Pending reverse shell event
     */
    public $UnhandledReverseShellCnt;

    /**
     * @var integer Pending high-risk syscall
     */
    public $UnhandledRiskSyscallCnt;

    /**
     * @var integer Pending abnormal process
     */
    public $UnhandledAbnormalProcessCnt;

    /**
     * @var integer Pending file tampering event
     */
    public $UnhandledFileCnt;

    /**
     * @var integer Pending trojan event
     */
    public $UnhandledVirusEventCnt;

    /**
     * @var integer Unhandled malicious outgoing connections
     */
    public $UnhandledMaliciousConnectionEventCnt;

    /**
     * @var integer Unhandled K8sApi events
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UnhandledK8sApiEventCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $UnhandledEscapeCnt Pending escape event
     * @param integer $UnhandledReverseShellCnt Pending reverse shell event
     * @param integer $UnhandledRiskSyscallCnt Pending high-risk syscall
     * @param integer $UnhandledAbnormalProcessCnt Pending abnormal process
     * @param integer $UnhandledFileCnt Pending file tampering event
     * @param integer $UnhandledVirusEventCnt Pending trojan event
     * @param integer $UnhandledMaliciousConnectionEventCnt Unhandled malicious outgoing connections
     * @param integer $UnhandledK8sApiEventCnt Unhandled K8sApi events
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("UnhandledEscapeCnt",$param) and $param["UnhandledEscapeCnt"] !== null) {
            $this->UnhandledEscapeCnt = $param["UnhandledEscapeCnt"];
        }

        if (array_key_exists("UnhandledReverseShellCnt",$param) and $param["UnhandledReverseShellCnt"] !== null) {
            $this->UnhandledReverseShellCnt = $param["UnhandledReverseShellCnt"];
        }

        if (array_key_exists("UnhandledRiskSyscallCnt",$param) and $param["UnhandledRiskSyscallCnt"] !== null) {
            $this->UnhandledRiskSyscallCnt = $param["UnhandledRiskSyscallCnt"];
        }

        if (array_key_exists("UnhandledAbnormalProcessCnt",$param) and $param["UnhandledAbnormalProcessCnt"] !== null) {
            $this->UnhandledAbnormalProcessCnt = $param["UnhandledAbnormalProcessCnt"];
        }

        if (array_key_exists("UnhandledFileCnt",$param) and $param["UnhandledFileCnt"] !== null) {
            $this->UnhandledFileCnt = $param["UnhandledFileCnt"];
        }

        if (array_key_exists("UnhandledVirusEventCnt",$param) and $param["UnhandledVirusEventCnt"] !== null) {
            $this->UnhandledVirusEventCnt = $param["UnhandledVirusEventCnt"];
        }

        if (array_key_exists("UnhandledMaliciousConnectionEventCnt",$param) and $param["UnhandledMaliciousConnectionEventCnt"] !== null) {
            $this->UnhandledMaliciousConnectionEventCnt = $param["UnhandledMaliciousConnectionEventCnt"];
        }

        if (array_key_exists("UnhandledK8sApiEventCnt",$param) and $param["UnhandledK8sApiEventCnt"] !== null) {
            $this->UnhandledK8sApiEventCnt = $param["UnhandledK8sApiEventCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
