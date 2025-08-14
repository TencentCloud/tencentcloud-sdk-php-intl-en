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
 * Information about Tencent COS and third-party cloud storage accounts.
 *
 * @method integer getVendor() Obtain Information about Tencent COS and third-party cloud storage accounts.
0: Tencent COS.
1: AWS S3.
2: Alibaba Cloud OSS.
Example value: 0.
 * @method void setVendor(integer $Vendor) Set Information about Tencent COS and third-party cloud storage accounts.
0: Tencent COS.
1: AWS S3.
2: Alibaba Cloud OSS.
Example value: 0.
 * @method string getRegion() Obtain [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent COS.
Example value: cn-shanghai-1.

[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
Example value: ap-southeast-3.	
 * @method void setRegion(string $Region) Set [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent COS.
Example value: cn-shanghai-1.

[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
Example value: ap-southeast-3.	
 * @method string getBucket() Obtain Cloud bucket name.
 * @method void setBucket(string $Bucket) Set Cloud bucket name.
 * @method string getAccessKey() Obtain access_key account information of the cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
Example value: test-accesskey.
 * @method void setAccessKey(string $AccessKey) Set access_key account information of the cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
Example value: test-accesskey.
 * @method string getSecretKey() Obtain secret_key account information of cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
Example value: test-secretkey.
 * @method void setSecretKey(string $SecretKey) Set secret_key account information of cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
Example value: test-secretkey.
 * @method array getFileNamePrefix() Obtain Specified location of the cloud bucket, which consists of arrays of strings. Value range for the strings is lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (_-). For example, under the feature of ["prefix1", "prefix2"], the audio slicing file (xxx.mp3) is stored as prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC time}.ogg, while the video frame is stored as prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC time}.png.
 * @method void setFileNamePrefix(array $FileNamePrefix) Set Specified location of the cloud bucket, which consists of arrays of strings. Value range for the strings is lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (_-). For example, under the feature of ["prefix1", "prefix2"], the audio slicing file (xxx.mp3) is stored as prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC time}.ogg, while the video frame is stored as prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC time}.png.
 */
class CloudModerationStorage extends AbstractModel
{
    /**
     * @var integer Information about Tencent COS and third-party cloud storage accounts.
0: Tencent COS.
1: AWS S3.
2: Alibaba Cloud OSS.
Example value: 0.
     */
    public $Vendor;

    /**
     * @var string [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent COS.
Example value: cn-shanghai-1.

[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
Example value: ap-southeast-3.	
     */
    public $Region;

    /**
     * @var string Cloud bucket name.
     */
    public $Bucket;

    /**
     * @var string access_key account information of the cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
Example value: test-accesskey.
     */
    public $AccessKey;

    /**
     * @var string secret_key account information of cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
Example value: test-secretkey.
     */
    public $SecretKey;

    /**
     * @var array Specified location of the cloud bucket, which consists of arrays of strings. Value range for the strings is lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (_-). For example, under the feature of ["prefix1", "prefix2"], the audio slicing file (xxx.mp3) is stored as prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC time}.ogg, while the video frame is stored as prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC time}.png.
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor Information about Tencent COS and third-party cloud storage accounts.
0: Tencent COS.
1: AWS S3.
2: Alibaba Cloud OSS.
Example value: 0.
     * @param string $Region [Region information](https://www.tencentcloud.comom/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent COS.
Example value: cn-shanghai-1.

[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3.
Example value: ap-southeast-3.	
     * @param string $Bucket Cloud bucket name.
     * @param string $AccessKey access_key account information of the cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key fields in the link.
Example value: test-accesskey.
     * @param string $SecretKey secret_key account information of cloud storage.
To store files to Tencent COS, visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.
Example value: test-secretkey.
     * @param array $FileNamePrefix Specified location of the cloud bucket, which consists of arrays of strings. Value range for the strings is lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (_-). For example, under the feature of ["prefix1", "prefix2"], the audio slicing file (xxx.mp3) is stored as prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC time}.ogg, while the video frame is stored as prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC time}.png.
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
