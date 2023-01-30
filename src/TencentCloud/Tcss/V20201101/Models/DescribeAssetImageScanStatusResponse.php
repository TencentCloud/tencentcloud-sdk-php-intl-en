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
 * DescribeAssetImageScanStatus response structure.
 *
 * @method integer getImageTotal() Obtain Number of images
 * @method void setImageTotal(integer $ImageTotal) Set Number of images
 * @method integer getImageScanCnt() Obtain Number of scanned images
 * @method void setImageScanCnt(integer $ImageScanCnt) Set Number of scanned images
 * @method string getStatus() Obtain Scanning status
 * @method void setStatus(string $Status) Set Scanning status
 * @method integer getSchedule() Obtain Scanning progress, the value of which is calculated as `ImageScanCnt`/`ImageTotal` * 100.
 * @method void setSchedule(integer $Schedule) Set Scanning progress, the value of which is calculated as `ImageScanCnt`/`ImageTotal` * 100.
 * @method integer getSuccessCount() Obtain Number of successfully scanned images
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successfully scanned images
 * @method integer getRiskCount() Obtain Number of risks
 * @method void setRiskCount(integer $RiskCount) Set Number of risks
 * @method integer getLeftSeconds() Obtain Remaining scan time
 * @method void setLeftSeconds(integer $LeftSeconds) Set Remaining scan time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetImageScanStatusResponse extends AbstractModel
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
     * @var string Scanning status
     */
    public $Status;

    /**
     * @var integer Scanning progress, the value of which is calculated as `ImageScanCnt`/`ImageTotal` * 100.
     */
    public $Schedule;

    /**
     * @var integer Number of successfully scanned images
     */
    public $SuccessCount;

    /**
     * @var integer Number of risks
     */
    public $RiskCount;

    /**
     * @var integer Remaining scan time
     */
    public $LeftSeconds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ImageTotal Number of images
     * @param integer $ImageScanCnt Number of scanned images
     * @param string $Status Scanning status
     * @param integer $Schedule Scanning progress, the value of which is calculated as `ImageScanCnt`/`ImageTotal` * 100.
     * @param integer $SuccessCount Number of successfully scanned images
     * @param integer $RiskCount Number of risks
     * @param integer $LeftSeconds Remaining scan time
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("LeftSeconds",$param) and $param["LeftSeconds"] !== null) {
            $this->LeftSeconds = $param["LeftSeconds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
