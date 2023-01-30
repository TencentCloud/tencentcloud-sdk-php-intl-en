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
 * DescribeVulImageSummary response structure.
 *
 * @method integer getSeriousVulImageCount() Obtain Number of images affected by critical or high-risk vulnerabilities
 * @method void setSeriousVulImageCount(integer $SeriousVulImageCount) Set Number of images affected by critical or high-risk vulnerabilities
 * @method integer getScannedImageCount() Obtain Number of scanned images
 * @method void setScannedImageCount(integer $ScannedImageCount) Set Number of scanned images
 * @method integer getVulTotalCount() Obtain Total number of vulnerabilities
 * @method void setVulTotalCount(integer $VulTotalCount) Set Total number of vulnerabilities
 * @method integer getSysTemVulCount() Obtain Number of system vulnerabilities
 * @method void setSysTemVulCount(integer $SysTemVulCount) Set Number of system vulnerabilities
 * @method integer getWebVulCount() Obtain Number of web application vulnerabilities
 * @method void setWebVulCount(integer $WebVulCount) Set Number of web application vulnerabilities
 * @method integer getAllAuthorizedImageCount() Obtain Number of licensed images
 * @method void setAllAuthorizedImageCount(integer $AllAuthorizedImageCount) Set Number of licensed images
 * @method integer getEmergencyVulCount() Obtain Number of emergency vulnerabilities
 * @method void setEmergencyVulCount(integer $EmergencyVulCount) Set Number of emergency vulnerabilities
 * @method integer getSupportVulTotalCount() Obtain Total number of vulnerabilities that can be scanned for
 * @method void setSupportVulTotalCount(integer $SupportVulTotalCount) Set Total number of vulnerabilities that can be scanned for
 * @method string getVulLibraryUpdateTime() Obtain Vulnerability library update time
 * @method void setVulLibraryUpdateTime(string $VulLibraryUpdateTime) Set Vulnerability library update time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulImageSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of images affected by critical or high-risk vulnerabilities
     */
    public $SeriousVulImageCount;

    /**
     * @var integer Number of scanned images
     */
    public $ScannedImageCount;

    /**
     * @var integer Total number of vulnerabilities
     */
    public $VulTotalCount;

    /**
     * @var integer Number of system vulnerabilities
     */
    public $SysTemVulCount;

    /**
     * @var integer Number of web application vulnerabilities
     */
    public $WebVulCount;

    /**
     * @var integer Number of licensed images
     */
    public $AllAuthorizedImageCount;

    /**
     * @var integer Number of emergency vulnerabilities
     */
    public $EmergencyVulCount;

    /**
     * @var integer Total number of vulnerabilities that can be scanned for
     */
    public $SupportVulTotalCount;

    /**
     * @var string Vulnerability library update time
     */
    public $VulLibraryUpdateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SeriousVulImageCount Number of images affected by critical or high-risk vulnerabilities
     * @param integer $ScannedImageCount Number of scanned images
     * @param integer $VulTotalCount Total number of vulnerabilities
     * @param integer $SysTemVulCount Number of system vulnerabilities
     * @param integer $WebVulCount Number of web application vulnerabilities
     * @param integer $AllAuthorizedImageCount Number of licensed images
     * @param integer $EmergencyVulCount Number of emergency vulnerabilities
     * @param integer $SupportVulTotalCount Total number of vulnerabilities that can be scanned for
     * @param string $VulLibraryUpdateTime Vulnerability library update time
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
        if (array_key_exists("SeriousVulImageCount",$param) and $param["SeriousVulImageCount"] !== null) {
            $this->SeriousVulImageCount = $param["SeriousVulImageCount"];
        }

        if (array_key_exists("ScannedImageCount",$param) and $param["ScannedImageCount"] !== null) {
            $this->ScannedImageCount = $param["ScannedImageCount"];
        }

        if (array_key_exists("VulTotalCount",$param) and $param["VulTotalCount"] !== null) {
            $this->VulTotalCount = $param["VulTotalCount"];
        }

        if (array_key_exists("SysTemVulCount",$param) and $param["SysTemVulCount"] !== null) {
            $this->SysTemVulCount = $param["SysTemVulCount"];
        }

        if (array_key_exists("WebVulCount",$param) and $param["WebVulCount"] !== null) {
            $this->WebVulCount = $param["WebVulCount"];
        }

        if (array_key_exists("AllAuthorizedImageCount",$param) and $param["AllAuthorizedImageCount"] !== null) {
            $this->AllAuthorizedImageCount = $param["AllAuthorizedImageCount"];
        }

        if (array_key_exists("EmergencyVulCount",$param) and $param["EmergencyVulCount"] !== null) {
            $this->EmergencyVulCount = $param["EmergencyVulCount"];
        }

        if (array_key_exists("SupportVulTotalCount",$param) and $param["SupportVulTotalCount"] !== null) {
            $this->SupportVulTotalCount = $param["SupportVulTotalCount"];
        }

        if (array_key_exists("VulLibraryUpdateTime",$param) and $param["VulLibraryUpdateTime"] !== null) {
            $this->VulLibraryUpdateTime = $param["VulLibraryUpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
