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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadHelmChart response structure.
 *
 * @method string getTmpToken() Obtain Temporary token
 * @method void setTmpToken(string $TmpToken) Set Temporary token
 * @method string getTmpSecretId() Obtain Temporary `secretId`
 * @method void setTmpSecretId(string $TmpSecretId) Set Temporary `secretId`
 * @method string getTmpSecretKey() Obtain Temporary `secretKey`
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Temporary `secretKey`
 * @method string getBucket() Obtain Bucket information
 * @method void setBucket(string $Bucket) Set Bucket information
 * @method string getRegion() Obtain Instance ID
 * @method void setRegion(string $Region) Set Instance ID
 * @method string getPath() Obtain Chart information
 * @method void setPath(string $Path) Set Chart information
 * @method integer getStartTime() Obtain Start timestamp
 * @method void setStartTime(integer $StartTime) Set Start timestamp
 * @method integer getExpiredTime() Obtain Token expiration timestamp
 * @method void setExpiredTime(integer $ExpiredTime) Set Token expiration timestamp
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DownloadHelmChartResponse extends AbstractModel
{
    /**
     * @var string Temporary token
     */
    public $TmpToken;

    /**
     * @var string Temporary `secretId`
     */
    public $TmpSecretId;

    /**
     * @var string Temporary `secretKey`
     */
    public $TmpSecretKey;

    /**
     * @var string Bucket information
     */
    public $Bucket;

    /**
     * @var string Instance ID
     */
    public $Region;

    /**
     * @var string Chart information
     */
    public $Path;

    /**
     * @var integer Start timestamp
     */
    public $StartTime;

    /**
     * @var integer Token expiration timestamp
     */
    public $ExpiredTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TmpToken Temporary token
     * @param string $TmpSecretId Temporary `secretId`
     * @param string $TmpSecretKey Temporary `secretKey`
     * @param string $Bucket Bucket information
     * @param string $Region Instance ID
     * @param string $Path Chart information
     * @param integer $StartTime Start timestamp
     * @param integer $ExpiredTime Token expiration timestamp
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
        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
