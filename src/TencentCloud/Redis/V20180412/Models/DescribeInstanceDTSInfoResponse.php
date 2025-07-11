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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDTSInfo response structure.
 *
 * @method string getJobId() Obtain DTS task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set DTS task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobName() Obtain DTS task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobName(string $JobName) Set DTS task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Task status. Valid values: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task status. Valid values: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Sync latency in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Sync latency in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCutDownTime() Obtain Disconnection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCutDownTime(string $CutDownTime) Set Disconnection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeInstanceDTSInstanceInfo getSrcInfo() Obtain Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInfo(DescribeInstanceDTSInstanceInfo $SrcInfo) Set Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeInstanceDTSInstanceInfo getDstInfo() Obtain Target instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstInfo(DescribeInstanceDTSInstanceInfo $DstInfo) Set Target instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceDTSInfoResponse extends AbstractModel
{
    /**
     * @var string DTS task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string DTS task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobName;

    /**
     * @var integer Task status. Valid values: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Status description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var integer Sync latency in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @var string Disconnection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CutDownTime;

    /**
     * @var DescribeInstanceDTSInstanceInfo Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInfo;

    /**
     * @var DescribeInstanceDTSInstanceInfo Target instance information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobId DTS task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobName DTS task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Task status. Valid values: 1 (Creating), 3 (Checking), 4 (CheckPass), 5 (CheckNotPass), 7 (Running), 8 (ReadyComplete), 9 (Success), 10 (Failed), 11 (Stopping), 12 (Completing)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Status description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Offset Sync latency in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CutDownTime Disconnection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeInstanceDTSInstanceInfo $SrcInfo Source instance information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeInstanceDTSInstanceInfo $DstInfo Target instance information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CutDownTime",$param) and $param["CutDownTime"] !== null) {
            $this->CutDownTime = $param["CutDownTime"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DescribeInstanceDTSInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DescribeInstanceDTSInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
