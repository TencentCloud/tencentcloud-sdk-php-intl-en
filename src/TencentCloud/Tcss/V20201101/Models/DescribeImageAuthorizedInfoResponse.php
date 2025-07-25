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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAuthorizedInfo response structure.
 *
 * @method integer getTotalAuthorizedCnt() Obtain Total number of valid image licenses
 * @method void setTotalAuthorizedCnt(integer $TotalAuthorizedCnt) Set Total number of valid image licenses
 * @method integer getUsedAuthorizedCnt() Obtain Number of used image licenses
 * @method void setUsedAuthorizedCnt(integer $UsedAuthorizedCnt) Set Number of used image licenses
 * @method integer getScannedImageCnt() Obtain Number of images with scan enabled
 * @method void setScannedImageCnt(integer $ScannedImageCnt) Set Number of images with scan enabled
 * @method integer getNotScannedImageCnt() Obtain Number of images with scan not enabled
 * @method void setNotScannedImageCnt(integer $NotScannedImageCnt) Set Number of images with scan not enabled
 * @method integer getNotScannedLocalImageCnt() Obtain Number of local images with scan not enabled
 * @method void setNotScannedLocalImageCnt(integer $NotScannedLocalImageCnt) Set Number of local images with scan not enabled
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeImageAuthorizedInfoResponse extends AbstractModel
{
    /**
     * @var integer Total number of valid image licenses
     */
    public $TotalAuthorizedCnt;

    /**
     * @var integer Number of used image licenses
     */
    public $UsedAuthorizedCnt;

    /**
     * @var integer Number of images with scan enabled
     */
    public $ScannedImageCnt;

    /**
     * @var integer Number of images with scan not enabled
     */
    public $NotScannedImageCnt;

    /**
     * @var integer Number of local images with scan not enabled
     */
    public $NotScannedLocalImageCnt;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalAuthorizedCnt Total number of valid image licenses
     * @param integer $UsedAuthorizedCnt Number of used image licenses
     * @param integer $ScannedImageCnt Number of images with scan enabled
     * @param integer $NotScannedImageCnt Number of images with scan not enabled
     * @param integer $NotScannedLocalImageCnt Number of local images with scan not enabled
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
        if (array_key_exists("TotalAuthorizedCnt",$param) and $param["TotalAuthorizedCnt"] !== null) {
            $this->TotalAuthorizedCnt = $param["TotalAuthorizedCnt"];
        }

        if (array_key_exists("UsedAuthorizedCnt",$param) and $param["UsedAuthorizedCnt"] !== null) {
            $this->UsedAuthorizedCnt = $param["UsedAuthorizedCnt"];
        }

        if (array_key_exists("ScannedImageCnt",$param) and $param["ScannedImageCnt"] !== null) {
            $this->ScannedImageCnt = $param["ScannedImageCnt"];
        }

        if (array_key_exists("NotScannedImageCnt",$param) and $param["NotScannedImageCnt"] !== null) {
            $this->NotScannedImageCnt = $param["NotScannedImageCnt"];
        }

        if (array_key_exists("NotScannedLocalImageCnt",$param) and $param["NotScannedLocalImageCnt"] !== null) {
            $this->NotScannedLocalImageCnt = $param["NotScannedLocalImageCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
