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
 * @method integer getVendor() Obtain <p>Information about Tencent Cloud object storage COS and third-party cloud storage accounts<br>0: Tencent Cloud object storage COS<br>1: AWS<br>[Note] Currently, only AWS is supported for third-party cloud storage. More third-party cloud storage options are being added.</p>
 * @method void setVendor(integer $Vendor) Set <p>Information about Tencent Cloud object storage COS and third-party cloud storage accounts<br>0: Tencent Cloud object storage COS<br>1: AWS<br>[Note] Currently, only AWS is supported for third-party cloud storage. More third-party cloud storage options are being added.</p>
 * @method string getRegion() Obtain <p>[Region information](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent Cloud object storage.<br>Example value: cn-shanghai-1</p><p>[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3</p>
 * @method void setRegion(string $Region) Set <p>[Region information](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent Cloud object storage.<br>Example value: cn-shanghai-1</p><p>[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3</p>
 * @method string getBucket() Obtain <p>Cloud bucket name.</p>
 * @method void setBucket(string $Bucket) Set <p>Cloud bucket name.</p>
 * @method string getAccessKey() Obtain <p>access key account information for cloud storage.<br>To store files to tencent cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key field in the link.</p>
 * @method void setAccessKey(string $AccessKey) Set <p>access key account information for cloud storage.<br>To store files to tencent cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key field in the link.</p>
 * @method string getSecretKey() Obtain <p>The secret_key account information for cloud storage.<br>To store files to Tencent Cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.</p>
 * @method void setSecretKey(string $SecretKey) Set <p>The secret_key account information for cloud storage.<br>To store files to Tencent Cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.</p>
 * @method array getFileNamePrefix() Obtain <p>The user-specified location in the cloud storage bucket consists of an array of strings. Valid string range: az, az, 0-9, '_' and '-'. For example, with ["prefix1", "prefix2"], the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8.</p>
 * @method void setFileNamePrefix(array $FileNamePrefix) Set <p>The user-specified location in the cloud storage bucket consists of an array of strings. Valid string range: az, az, 0-9, '_' and '-'. For example, with ["prefix1", "prefix2"], the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8.</p>
 * @method string getEndpointUrl() Obtain <p>When this parameter is set up for an S3-compatible endpoint override (for example, Cloudflare R2), the client will use this endpoint rather than the default AWS S3 endpoint. Example: "account_id.R2.cloudflarestorage.com"</p>
 * @method void setEndpointUrl(string $EndpointUrl) Set <p>When this parameter is set up for an S3-compatible endpoint override (for example, Cloudflare R2), the client will use this endpoint rather than the default AWS S3 endpoint. Example: "account_id.R2.cloudflarestorage.com"</p>
 */
class CloudStorage extends AbstractModel
{
    /**
     * @var integer <p>Information about Tencent Cloud object storage COS and third-party cloud storage accounts<br>0: Tencent Cloud object storage COS<br>1: AWS<br>[Note] Currently, only AWS is supported for third-party cloud storage. More third-party cloud storage options are being added.</p>
     */
    public $Vendor;

    /**
     * @var string <p>[Region information](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent Cloud object storage.<br>Example value: cn-shanghai-1</p><p>[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3</p>
     */
    public $Region;

    /**
     * @var string <p>Cloud bucket name.</p>
     */
    public $Bucket;

    /**
     * @var string <p>access key account information for cloud storage.<br>To store files to tencent cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key field in the link.</p>
     */
    public $AccessKey;

    /**
     * @var string <p>The secret_key account information for cloud storage.<br>To store files to Tencent Cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.</p>
     */
    public $SecretKey;

    /**
     * @var array <p>The user-specified location in the cloud storage bucket consists of an array of strings. Valid string range: az, az, 0-9, '_' and '-'. For example, with ["prefix1", "prefix2"], the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8.</p>
     */
    public $FileNamePrefix;

    /**
     * @var string <p>When this parameter is set up for an S3-compatible endpoint override (for example, Cloudflare R2), the client will use this endpoint rather than the default AWS S3 endpoint. Example: "account_id.R2.cloudflarestorage.com"</p>
     */
    public $EndpointUrl;

    /**
     * @param integer $Vendor <p>Information about Tencent Cloud object storage COS and third-party cloud storage accounts<br>0: Tencent Cloud object storage COS<br>1: AWS<br>[Note] Currently, only AWS is supported for third-party cloud storage. More third-party cloud storage options are being added.</p>
     * @param string $Region <p>[Region information](https://www.tencentcloud.com/document/product/436/6224?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F) of Tencent Cloud object storage.<br>Example value: cn-shanghai-1</p><p>[Region information](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions) of AWS S3</p>
     * @param string $Bucket <p>Cloud bucket name.</p>
     * @param string $AccessKey <p>access key account information for cloud storage.<br>To store files to tencent cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretId value corresponding to the key field in the link.</p>
     * @param string $SecretKey <p>The secret_key account information for cloud storage.<br>To store files to Tencent Cloud Object Storage (COS), visit https://console.cloud.tencent.com/cam/capi to view or create the SecretKey value corresponding to the key fields in the link.</p>
     * @param array $FileNamePrefix <p>The user-specified location in the cloud storage bucket consists of an array of strings. Valid string range: az, az, 0-9, '_' and '-'. For example, with ["prefix1", "prefix2"], the recording file xxx.m3u8 becomes prefix1/prefix2/TaskId/xxx.m3u8.</p>
     * @param string $EndpointUrl <p>When this parameter is set up for an S3-compatible endpoint override (for example, Cloudflare R2), the client will use this endpoint rather than the default AWS S3 endpoint. Example: "account_id.R2.cloudflarestorage.com"</p>
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

        if (array_key_exists("EndpointUrl",$param) and $param["EndpointUrl"] !== null) {
            $this->EndpointUrl = $param["EndpointUrl"];
        }
    }
}
