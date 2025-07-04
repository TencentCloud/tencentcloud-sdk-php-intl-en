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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUploadBackupInfo response structure.
 *
 * @method string getBucketName() Obtain Bucket name
 * @method void setBucketName(string $BucketName) Set Bucket name
 * @method string getRegion() Obtain Bucket location information
 * @method void setRegion(string $Region) Set Bucket location information
 * @method string getPath() Obtain Storage path
 * @method void setPath(string $Path) Set Storage path
 * @method string getTmpSecretId() Obtain Temporary key ID
 * @method void setTmpSecretId(string $TmpSecretId) Set Temporary key ID
 * @method string getTmpSecretKey() Obtain Temporary key (Key)
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Temporary key (Key)
 * @method string getXCosSecurityToken() Obtain Temporary key (Token)
 * @method void setXCosSecurityToken(string $XCosSecurityToken) Set Temporary key (Token)
 * @method string getStartTime() Obtain Temporary key start time
 * @method void setStartTime(string $StartTime) Set Temporary key start time
 * @method string getExpiredTime() Obtain Temporary key expiration time
 * @method void setExpiredTime(string $ExpiredTime) Set Temporary key expiration time
 * @method string getCosSecurityToken() Obtain 
 * @method void setCosSecurityToken(string $CosSecurityToken) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeUploadBackupInfoResponse extends AbstractModel
{
    /**
     * @var string Bucket name
     */
    public $BucketName;

    /**
     * @var string Bucket location information
     */
    public $Region;

    /**
     * @var string Storage path
     */
    public $Path;

    /**
     * @var string Temporary key ID
     */
    public $TmpSecretId;

    /**
     * @var string Temporary key (Key)
     */
    public $TmpSecretKey;

    /**
     * @var string Temporary key (Token)
     * @deprecated
     */
    public $XCosSecurityToken;

    /**
     * @var string Temporary key start time
     */
    public $StartTime;

    /**
     * @var string Temporary key expiration time
     */
    public $ExpiredTime;

    /**
     * @var string 
     */
    public $CosSecurityToken;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BucketName Bucket name
     * @param string $Region Bucket location information
     * @param string $Path Storage path
     * @param string $TmpSecretId Temporary key ID
     * @param string $TmpSecretKey Temporary key (Key)
     * @param string $XCosSecurityToken Temporary key (Token)
     * @param string $StartTime Temporary key start time
     * @param string $ExpiredTime Temporary key expiration time
     * @param string $CosSecurityToken 
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("XCosSecurityToken",$param) and $param["XCosSecurityToken"] !== null) {
            $this->XCosSecurityToken = $param["XCosSecurityToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CosSecurityToken",$param) and $param["CosSecurityToken"] !== null) {
            $this->CosSecurityToken = $param["CosSecurityToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
