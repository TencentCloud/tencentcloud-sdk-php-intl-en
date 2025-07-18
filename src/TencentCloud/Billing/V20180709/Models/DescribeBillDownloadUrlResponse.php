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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDownloadUrl response structure.
 *
 * @method integer getReady() Obtain Indicates whether the bill file is ready. Valid values: `0` (the file is being generated), `1` (the file has been generated).
 * @method void setReady(integer $Ready) Set Indicates whether the bill file is ready. Valid values: `0` (the file is being generated), `1` (the file has been generated).
 * @method string getDownloadUrl() Obtain Billing file download link, valid for 1 day. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDownloadUrl(string $DownloadUrl) Set Billing file download link, valid for 1 day. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBillDownloadUrlResponse extends AbstractModel
{
    /**
     * @var integer Indicates whether the bill file is ready. Valid values: `0` (the file is being generated), `1` (the file has been generated).
     */
    public $Ready;

    /**
     * @var string Billing file download link, valid for 1 day. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DownloadUrl;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Ready Indicates whether the bill file is ready. Valid values: `0` (the file is being generated), `1` (the file has been generated).
     * @param string $DownloadUrl Billing file download link, valid for 1 day. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
