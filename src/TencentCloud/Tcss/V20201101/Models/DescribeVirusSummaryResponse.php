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
 * DescribeVirusSummary response structure.
 *
 * @method string getTaskId() Obtain ID of the last scan task
 * @method void setTaskId(string $TaskId) Set ID of the last scan task
 * @method integer getRiskContainerCnt() Obtain Number of containers affected by the trojan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) Set Number of containers affected by the trojan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskCnt() Obtain Number of pending risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskCnt(integer $RiskCnt) Set Number of pending risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirusDataBaseModifyTime() Obtain Update time of the virus library
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusDataBaseModifyTime(string $VirusDataBaseModifyTime) Set Update time of the virus library
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskContainerIncrease() Obtain Increase in the number of containers affected by trojans from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskContainerIncrease(integer $RiskContainerIncrease) Set Increase in the number of containers affected by trojans from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskIncrease() Obtain Increase in the number of pending risks from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskIncrease(integer $RiskIncrease) Set Increase in the number of pending risks from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolateIncrease() Obtain Increase in the number of isolated events from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateIncrease(integer $IsolateIncrease) Set Increase in the number of isolated events from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolateCnt() Obtain Total number of isolated events
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateCnt(integer $IsolateCnt) Set Total number of isolated events
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVirusSummaryResponse extends AbstractModel
{
    /**
     * @var string ID of the last scan task
     */
    public $TaskId;

    /**
     * @var integer Number of containers affected by the trojan
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskContainerCnt;

    /**
     * @var integer Number of pending risks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskCnt;

    /**
     * @var string Update time of the virus library
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusDataBaseModifyTime;

    /**
     * @var integer Increase in the number of containers affected by trojans from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskContainerIncrease;

    /**
     * @var integer Increase in the number of pending risks from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskIncrease;

    /**
     * @var integer Increase in the number of isolated events from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateIncrease;

    /**
     * @var integer Total number of isolated events
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskId ID of the last scan task
     * @param integer $RiskContainerCnt Number of containers affected by the trojan
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskCnt Number of pending risks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusDataBaseModifyTime Update time of the virus library
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskContainerIncrease Increase in the number of containers affected by trojans from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskIncrease Increase in the number of pending risks from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsolateIncrease Increase in the number of isolated events from yesterday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsolateCnt Total number of isolated events
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("VirusDataBaseModifyTime",$param) and $param["VirusDataBaseModifyTime"] !== null) {
            $this->VirusDataBaseModifyTime = $param["VirusDataBaseModifyTime"];
        }

        if (array_key_exists("RiskContainerIncrease",$param) and $param["RiskContainerIncrease"] !== null) {
            $this->RiskContainerIncrease = $param["RiskContainerIncrease"];
        }

        if (array_key_exists("RiskIncrease",$param) and $param["RiskIncrease"] !== null) {
            $this->RiskIncrease = $param["RiskIncrease"];
        }

        if (array_key_exists("IsolateIncrease",$param) and $param["IsolateIncrease"] !== null) {
            $this->IsolateIncrease = $param["IsolateIncrease"];
        }

        if (array_key_exists("IsolateCnt",$param) and $param["IsolateCnt"] !== null) {
            $this->IsolateCnt = $param["IsolateCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
