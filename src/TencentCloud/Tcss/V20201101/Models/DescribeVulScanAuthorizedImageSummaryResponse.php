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
 * DescribeVulScanAuthorizedImageSummary response structure.
 *
 * @method integer getAllAuthorizedImageCount() Obtain Number of all licensed local images
 * @method void setAllAuthorizedImageCount(integer $AllAuthorizedImageCount) Set Number of all licensed local images
 * @method integer getUnScanAuthorizedImageCount() Obtain Number of licensed but not scanned local images
 * @method void setUnScanAuthorizedImageCount(integer $UnScanAuthorizedImageCount) Set Number of licensed but not scanned local images
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulScanAuthorizedImageSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of all licensed local images
     */
    public $AllAuthorizedImageCount;

    /**
     * @var integer Number of licensed but not scanned local images
     */
    public $UnScanAuthorizedImageCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AllAuthorizedImageCount Number of all licensed local images
     * @param integer $UnScanAuthorizedImageCount Number of licensed but not scanned local images
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
        if (array_key_exists("AllAuthorizedImageCount",$param) and $param["AllAuthorizedImageCount"] !== null) {
            $this->AllAuthorizedImageCount = $param["AllAuthorizedImageCount"];
        }

        if (array_key_exists("UnScanAuthorizedImageCount",$param) and $param["UnScanAuthorizedImageCount"] !== null) {
            $this->UnScanAuthorizedImageCount = $param["UnScanAuthorizedImageCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
