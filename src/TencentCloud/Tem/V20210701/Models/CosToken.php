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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos token
 *
 * @method string getRequestId() Obtain Unique request ID
 * @method void setRequestId(string $RequestId) Set Unique request ID
 * @method string getBucket() Obtain Bucket name
 * @method void setBucket(string $Bucket) Set Bucket name
 * @method string getRegion() Obtain Bucket region
 * @method void setRegion(string $Region) Set Bucket region
 * @method string getTmpSecretId() Obtain Temporary key SecretId
 * @method void setTmpSecretId(string $TmpSecretId) Set Temporary key SecretId
 * @method string getTmpSecretKey() Obtain Temporary key SecretKey
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Temporary key SecretKey
 * @method string getSessionToken() Obtain `sessionToken` of temporary key
 * @method void setSessionToken(string $SessionToken) Set `sessionToken` of temporary key
 * @method string getStartTime() Obtain Start time of temporary key acquisition
 * @method void setStartTime(string $StartTime) Set Start time of temporary key acquisition
 * @method string getExpiredTime() Obtain `ExpiredTime` of temporary key
 * @method void setExpiredTime(string $ExpiredTime) Set `ExpiredTime` of temporary key
 * @method string getFullPath() Obtain Full package path
 * @method void setFullPath(string $FullPath) Set Full package path
 */
class CosToken extends AbstractModel
{
    /**
     * @var string Unique request ID
     */
    public $RequestId;

    /**
     * @var string Bucket name
     */
    public $Bucket;

    /**
     * @var string Bucket region
     */
    public $Region;

    /**
     * @var string Temporary key SecretId
     */
    public $TmpSecretId;

    /**
     * @var string Temporary key SecretKey
     */
    public $TmpSecretKey;

    /**
     * @var string `sessionToken` of temporary key
     */
    public $SessionToken;

    /**
     * @var string Start time of temporary key acquisition
     */
    public $StartTime;

    /**
     * @var string `ExpiredTime` of temporary key
     */
    public $ExpiredTime;

    /**
     * @var string Full package path
     */
    public $FullPath;

    /**
     * @param string $RequestId Unique request ID
     * @param string $Bucket Bucket name
     * @param string $Region Bucket region
     * @param string $TmpSecretId Temporary key SecretId
     * @param string $TmpSecretKey Temporary key SecretKey
     * @param string $SessionToken `sessionToken` of temporary key
     * @param string $StartTime Start time of temporary key acquisition
     * @param string $ExpiredTime `ExpiredTime` of temporary key
     * @param string $FullPath Full package path
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
        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }
    }
}
