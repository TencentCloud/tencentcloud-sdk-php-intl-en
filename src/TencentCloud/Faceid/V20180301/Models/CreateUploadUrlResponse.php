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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUploadUrl response structure.
 *
 * @method string getUploadUrl() Obtain The URL for uploading contents with the `HTTP PUT` method.
 * @method void setUploadUrl(string $UploadUrl) Set The URL for uploading contents with the `HTTP PUT` method.
 * @method string getResourceUrl() Obtain The resource URL obtained after this upload is completed and to be passed in where it is required later.
 * @method void setResourceUrl(string $ResourceUrl) Set The resource URL obtained after this upload is completed and to be passed in where it is required later.
 * @method integer getExpiredTimestamp() Obtain The point in time when the upload/download link expires, which is a 10-bit Unix timestamp.
 * @method void setExpiredTimestamp(integer $ExpiredTimestamp) Set The point in time when the upload/download link expires, which is a 10-bit Unix timestamp.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CreateUploadUrlResponse extends AbstractModel
{
    /**
     * @var string The URL for uploading contents with the `HTTP PUT` method.
     */
    public $UploadUrl;

    /**
     * @var string The resource URL obtained after this upload is completed and to be passed in where it is required later.
     */
    public $ResourceUrl;

    /**
     * @var integer The point in time when the upload/download link expires, which is a 10-bit Unix timestamp.
     */
    public $ExpiredTimestamp;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UploadUrl The URL for uploading contents with the `HTTP PUT` method.
     * @param string $ResourceUrl The resource URL obtained after this upload is completed and to be passed in where it is required later.
     * @param integer $ExpiredTimestamp The point in time when the upload/download link expires, which is a 10-bit Unix timestamp.
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
        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("ResourceUrl",$param) and $param["ResourceUrl"] !== null) {
            $this->ResourceUrl = $param["ResourceUrl"];
        }

        if (array_key_exists("ExpiredTimestamp",$param) and $param["ExpiredTimestamp"] !== null) {
            $this->ExpiredTimestamp = $param["ExpiredTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
