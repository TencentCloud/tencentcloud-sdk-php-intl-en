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
 * DescribeAssetImageRegistryScanStatusOneKey response structure.
 *
 * @method integer getImageTotal() Obtain Number of images
 * @method void setImageTotal(integer $ImageTotal) Set Number of images
 * @method integer getImageScanCnt() Obtain Number of scanned images
 * @method void setImageScanCnt(integer $ImageScanCnt) Set Number of scanned images
 * @method array getImageStatus() Obtain Scanning progress list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageStatus(array $ImageStatus) Set Scanning progress list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSuccessCount() Obtain Number of successfully scanned images
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successfully scanned images
 * @method integer getRiskCount() Obtain Number of risks
 * @method void setRiskCount(integer $RiskCount) Set Number of risks
 * @method integer getSchedule() Obtain Scanning progress
 * @method void setSchedule(integer $Schedule) Set Scanning progress
 * @method string getStatus() Obtain Scanning status
 * @method void setStatus(string $Status) Set Scanning status
 * @method integer getScanRemainTime() Obtain Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRemainTime(integer $ScanRemainTime) Set Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetImageRegistryScanStatusOneKeyResponse extends AbstractModel
{
    /**
     * @var integer Number of images
     */
    public $ImageTotal;

    /**
     * @var integer Number of scanned images
     */
    public $ImageScanCnt;

    /**
     * @var array Scanning progress list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageStatus;

    /**
     * @var integer Number of successfully scanned images
     */
    public $SuccessCount;

    /**
     * @var integer Number of risks
     */
    public $RiskCount;

    /**
     * @var integer Scanning progress
     */
    public $Schedule;

    /**
     * @var string Scanning status
     */
    public $Status;

    /**
     * @var integer Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRemainTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ImageTotal Number of images
     * @param integer $ImageScanCnt Number of scanned images
     * @param array $ImageStatus Scanning progress list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SuccessCount Number of successfully scanned images
     * @param integer $RiskCount Number of risks
     * @param integer $Schedule Scanning progress
     * @param string $Status Scanning status
     * @param integer $ScanRemainTime Remaining scan time
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
        if (array_key_exists("ImageTotal",$param) and $param["ImageTotal"] !== null) {
            $this->ImageTotal = $param["ImageTotal"];
        }

        if (array_key_exists("ImageScanCnt",$param) and $param["ImageScanCnt"] !== null) {
            $this->ImageScanCnt = $param["ImageScanCnt"];
        }

        if (array_key_exists("ImageStatus",$param) and $param["ImageStatus"] !== null) {
            $this->ImageStatus = [];
            foreach ($param["ImageStatus"] as $key => $value){
                $obj = new ImageProgress();
                $obj->deserialize($value);
                array_push($this->ImageStatus, $obj);
            }
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScanRemainTime",$param) and $param["ScanRemainTime"] !== null) {
            $this->ScanRemainTime = $param["ScanRemainTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
