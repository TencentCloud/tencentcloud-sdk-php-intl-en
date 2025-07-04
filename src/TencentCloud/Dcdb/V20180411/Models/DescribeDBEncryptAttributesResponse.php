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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBEncryptAttributes response structure.
 *
 * @method integer getEncryptStatus() Obtain Whether encryption is enabled. Valid values: `1` (enabled), `2` (disabled).
 * @method void setEncryptStatus(integer $EncryptStatus) Set Whether encryption is enabled. Valid values: `1` (enabled), `2` (disabled).
 * @method string getCipherText() Obtain DEK
 * @method void setCipherText(string $CipherText) Set DEK
 * @method string getExpireDate() Obtain DEK expiration date
 * @method void setExpireDate(string $ExpireDate) Set DEK expiration date
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDBEncryptAttributesResponse extends AbstractModel
{
    /**
     * @var integer Whether encryption is enabled. Valid values: `1` (enabled), `2` (disabled).
     */
    public $EncryptStatus;

    /**
     * @var string DEK
     */
    public $CipherText;

    /**
     * @var string DEK expiration date
     */
    public $ExpireDate;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $EncryptStatus Whether encryption is enabled. Valid values: `1` (enabled), `2` (disabled).
     * @param string $CipherText DEK
     * @param string $ExpireDate DEK expiration date
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
        if (array_key_exists("EncryptStatus",$param) and $param["EncryptStatus"] !== null) {
            $this->EncryptStatus = $param["EncryptStatus"];
        }

        if (array_key_exists("CipherText",$param) and $param["CipherText"] !== null) {
            $this->CipherText = $param["CipherText"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
