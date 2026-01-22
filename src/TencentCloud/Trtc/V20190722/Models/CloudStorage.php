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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The cloud storage information.
 *
 * @method integer getVendor() Obtain The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
 * @method void setVendor(integer $Vendor) Set The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
 * @method string getRegion() Obtain [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of tencent cloud object storage.
Example value: cn-shanghai-1.

[Region information](https://docs.AWS.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
 * @method void setRegion(string $Region) Set [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of tencent cloud object storage.
Example value: cn-shanghai-1.

[Region information](https://docs.AWS.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
 * @method string getBucket() Obtain The storage bucket.
 * @method void setBucket(string $Bucket) Set The storage bucket.
 * @method string getAccessKey() Obtain access_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
 * @method void setAccessKey(string $AccessKey) Set access_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
 * @method string getSecretKey() Obtain secret_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
 * @method void setSecretKey(string $SecretKey) Set secret_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
 * @method array getFileNamePrefix() Obtain The specified position of the cloud storage bucket consists of an array of strings. valid values: az, az, 0-9, '_', and '-'. for example, the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8 under the function of ["prefix1", "prefix2"].
 * @method void setFileNamePrefix(array $FileNamePrefix) Set The specified position of the cloud storage bucket consists of an array of strings. valid values: az, az, 0-9, '_', and '-'. for example, the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8 under the function of ["prefix1", "prefix2"].
 */
class CloudStorage extends AbstractModel
{
    /**
     * @var integer The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
     */
    public $Vendor;

    /**
     * @var string [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of tencent cloud object storage.
Example value: cn-shanghai-1.

[Region information](https://docs.AWS.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
     */
    public $Region;

    /**
     * @var string The storage bucket.
     */
    public $Bucket;

    /**
     * @var string access_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
     */
    public $AccessKey;

    /**
     * @var string secret_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
     */
    public $SecretKey;

    /**
     * @var array The specified position of the cloud storage bucket consists of an array of strings. valid values: az, az, 0-9, '_', and '-'. for example, the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8 under the function of ["prefix1", "prefix2"].
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor The cloud storage provider.
`0`: Tencent Cloud COS; `1`: AWS storage. Other vendors are not supported currently.
     * @param string $Region [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of tencent cloud object storage.
Example value: cn-shanghai-1.

[Region information](https://docs.AWS.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
     * @param string $Bucket The storage bucket.
     * @param string $AccessKey access_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
     * @param string $SecretKey secret_key account information of the cloud storage.
To store files to tencent cloud object storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
     * @param array $FileNamePrefix The specified position of the cloud storage bucket consists of an array of strings. valid values: az, az, 0-9, '_', and '-'. for example, the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8 under the function of ["prefix1", "prefix2"].
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
