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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The cloud storage information.
 *
 * @method integer getVendor() Obtain The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
 * @method void setVendor(integer $Vendor) Set The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
 * @method string getRegion() Obtain The region of cloud storage.
 * @method void setRegion(string $Region) Set The region of cloud storage.
 * @method string getBucket() Obtain The storage bucket.
 * @method void setBucket(string $Bucket) Set The storage bucket.
 * @method string getAccessKey() Obtain The access_key of the cloud storage account.
 * @method void setAccessKey(string $AccessKey) Set The access_key of the cloud storage account.
 * @method string getSecretKey() Obtain The secret_key of the cloud storage account.
 * @method void setSecretKey(string $SecretKey) Set The secret_key of the cloud storage account.
 * @method array getFileNamePrefix() Obtain The bucket to save data, which is an array of strings that can contain letters (a-z and A-Z), numbers (0-9), underscores (_), and hyphens (-). For example, if the value of this parameter is `["prefix1", "prefix2"]`, the recording file `xxx.m3u8` will be saved as `prefix1/prefix2/TaskId/xxx.m3u8`.
 * @method void setFileNamePrefix(array $FileNamePrefix) Set The bucket to save data, which is an array of strings that can contain letters (a-z and A-Z), numbers (0-9), underscores (_), and hyphens (-). For example, if the value of this parameter is `["prefix1", "prefix2"]`, the recording file `xxx.m3u8` will be saved as `prefix1/prefix2/TaskId/xxx.m3u8`.
 */
class CloudStorage extends AbstractModel
{
    /**
     * @var integer The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
     */
    public $Vendor;

    /**
     * @var string The region of cloud storage.
     */
    public $Region;

    /**
     * @var string The storage bucket.
     */
    public $Bucket;

    /**
     * @var string The access_key of the cloud storage account.
     */
    public $AccessKey;

    /**
     * @var string The secret_key of the cloud storage account.
     */
    public $SecretKey;

    /**
     * @var array The bucket to save data, which is an array of strings that can contain letters (a-z and A-Z), numbers (0-9), underscores (_), and hyphens (-). For example, if the value of this parameter is `["prefix1", "prefix2"]`, the recording file `xxx.m3u8` will be saved as `prefix1/prefix2/TaskId/xxx.m3u8`.
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
     * @param string $Region The region of cloud storage.
     * @param string $Bucket The storage bucket.
     * @param string $AccessKey The access_key of the cloud storage account.
     * @param string $SecretKey The secret_key of the cloud storage account.
     * @param array $FileNamePrefix The bucket to save data, which is an array of strings that can contain letters (a-z and A-Z), numbers (0-9), underscores (_), and hyphens (-). For example, if the value of this parameter is `["prefix1", "prefix2"]`, the recording file `xxx.m3u8` will be saved as `prefix1/prefix2/TaskId/xxx.m3u8`.
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("FileNamePrefix",$param) and $param["FileNamePrefix"] !== null) {
            $this->FileNamePrefix = $param["FileNamePrefix"];
        }
    }
}
