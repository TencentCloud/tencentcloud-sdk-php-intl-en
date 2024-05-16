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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyWebVerificationToken request structure.
 *
 * @method string getRedirectUrl() Obtain The web redirect URL after the verification is completed.
 * @method void setRedirectUrl(string $RedirectUrl) Set The web redirect URL after the verification is completed.
 * @method string getCompareImageUrl() Obtain The COS URL of the image for face comparison, which can be obtained with one of the following methods:
1. Call the `CreateUploadUrl` API to generate a URL and call it again after the image is successfully uploaded.
2. Use an existing COS URL. For a private bucket, grant the download permission with a pre-signed URL. The corresponding COS bucket must be in the same region as the input parameter `Region`.
 * @method void setCompareImageUrl(string $CompareImageUrl) Set The COS URL of the image for face comparison, which can be obtained with one of the following methods:
1. Call the `CreateUploadUrl` API to generate a URL and call it again after the image is successfully uploaded.
2. Use an existing COS URL. For a private bucket, grant the download permission with a pre-signed URL. The corresponding COS bucket must be in the same region as the input parameter `Region`.
 * @method string getCompareImageMd5() Obtain The MD5 hash values of the image for face comparison (CompareImageUrl).
 * @method void setCompareImageMd5(string $CompareImageMd5) Set The MD5 hash values of the image for face comparison (CompareImageUrl).
 */
class ApplyWebVerificationTokenRequest extends AbstractModel
{
    /**
     * @var string The web redirect URL after the verification is completed.
     */
    public $RedirectUrl;

    /**
     * @var string The COS URL of the image for face comparison, which can be obtained with one of the following methods:
1. Call the `CreateUploadUrl` API to generate a URL and call it again after the image is successfully uploaded.
2. Use an existing COS URL. For a private bucket, grant the download permission with a pre-signed URL. The corresponding COS bucket must be in the same region as the input parameter `Region`.
     */
    public $CompareImageUrl;

    /**
     * @var string The MD5 hash values of the image for face comparison (CompareImageUrl).
     */
    public $CompareImageMd5;

    /**
     * @param string $RedirectUrl The web redirect URL after the verification is completed.
     * @param string $CompareImageUrl The COS URL of the image for face comparison, which can be obtained with one of the following methods:
1. Call the `CreateUploadUrl` API to generate a URL and call it again after the image is successfully uploaded.
2. Use an existing COS URL. For a private bucket, grant the download permission with a pre-signed URL. The corresponding COS bucket must be in the same region as the input parameter `Region`.
     * @param string $CompareImageMd5 The MD5 hash values of the image for face comparison (CompareImageUrl).
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
        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("CompareImageUrl",$param) and $param["CompareImageUrl"] !== null) {
            $this->CompareImageUrl = $param["CompareImageUrl"];
        }

        if (array_key_exists("CompareImageMd5",$param) and $param["CompareImageMd5"] !== null) {
            $this->CompareImageMd5 = $param["CompareImageMd5"];
        }
    }
}
