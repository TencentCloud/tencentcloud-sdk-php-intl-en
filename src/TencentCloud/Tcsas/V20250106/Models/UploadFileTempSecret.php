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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temporary credentials for file upload.
 *
 * @method string getBucket() Obtain Storage bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set Storage bucket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Upload path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Upload path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTempSecretId() Obtain Temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTempSecretId(string $TempSecretId) Set Temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTempSecretKey() Obtain Temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTempSecretKey(string $TempSecretKey) Set Temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getToken() Obtain Token credential. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setToken(string $Token) Set Token credential. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccelerateEnable() Obtain Whether global acceleration is enabled. Valid values: 0: No; 1: Yes.
 * @method void setAccelerateEnable(integer $AccelerateEnable) Set Whether global acceleration is enabled. Valid values: 0: No; 1: Yes.
 */
class UploadFileTempSecret extends AbstractModel
{
    /**
     * @var string Storage bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Upload path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TempSecretId;

    /**
     * @var string Temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TempSecretKey;

    /**
     * @var string Token credential. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Token;

    /**
     * @var integer Whether global acceleration is enabled. Valid values: 0: No; 1: Yes.
     */
    public $AccelerateEnable;

    /**
     * @param string $Bucket Storage bucket.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Upload path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TempSecretId Temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TempSecretKey Temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Token Token credential. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccelerateEnable Whether global acceleration is enabled. Valid values: 0: No; 1: Yes.
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("TempSecretId",$param) and $param["TempSecretId"] !== null) {
            $this->TempSecretId = $param["TempSecretId"];
        }

        if (array_key_exists("TempSecretKey",$param) and $param["TempSecretKey"] !== null) {
            $this->TempSecretKey = $param["TempSecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("AccelerateEnable",$param) and $param["AccelerateEnable"] !== null) {
            $this->AccelerateEnable = $param["AccelerateEnable"];
        }
    }
}
