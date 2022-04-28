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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImages request structure.
 *
 * @method array getImageIds() Obtain List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method void setImageIds(array $ImageIds) Set List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method array getFilters() Obtain Filters. Each request can have up to 10 `Filters`, and 5 `Filters.Values` for each filter. `ImageIds` and `Filters` cannot be specified at the same time. See details:

<li><strong>image-id</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image ID</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>image-type</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image type</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p><p style="padding-left: 30px;">Options:</p><p style="padding-left: 30px;">`PRIVATE_IMAGE`: Private images (images created by this account)</p><p style="padding-left: 30px;">`PUBLIC_IMAGE`: Public images (Tencent Cloud official images)</p><p style="padding-left: 30px;">`SHARED_IMAGE`: Shared images (images shared by other accounts to this account)</p>
<li><strong>image-name</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image name</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>platform</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image operating system</strong>, such as `CentOS`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-value</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag value</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag:tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key-value pair</strong>. Replace “tag-key” with the actual value. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
 * @method void setFilters(array $Filters) Set Filters. Each request can have up to 10 `Filters`, and 5 `Filters.Values` for each filter. `ImageIds` and `Filters` cannot be specified at the same time. See details:

<li><strong>image-id</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image ID</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>image-type</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image type</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p><p style="padding-left: 30px;">Options:</p><p style="padding-left: 30px;">`PRIVATE_IMAGE`: Private images (images created by this account)</p><p style="padding-left: 30px;">`PUBLIC_IMAGE`: Public images (Tencent Cloud official images)</p><p style="padding-left: 30px;">`SHARED_IMAGE`: Shared images (images shared by other accounts to this account)</p>
<li><strong>image-name</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image name</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>platform</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image operating system</strong>, such as `CentOS`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-value</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag value</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag:tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key-value pair</strong>. Replace “tag-key” with the actual value. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
 * @method integer getOffset() Obtain Offset; default value: 0. For more information on `Offset`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method void setOffset(integer $Offset) Set Offset; default value: 0. For more information on `Offset`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method string getInstanceType() Obtain Instance type, e.g. `S1.SMALL1`
 * @method void setInstanceType(string $InstanceType) Set Instance type, e.g. `S1.SMALL1`
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var array List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     */
    public $ImageIds;

    /**
     * @var array Filters. Each request can have up to 10 `Filters`, and 5 `Filters.Values` for each filter. `ImageIds` and `Filters` cannot be specified at the same time. See details:

<li><strong>image-id</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image ID</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>image-type</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image type</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p><p style="padding-left: 30px;">Options:</p><p style="padding-left: 30px;">`PRIVATE_IMAGE`: Private images (images created by this account)</p><p style="padding-left: 30px;">`PUBLIC_IMAGE`: Public images (Tencent Cloud official images)</p><p style="padding-left: 30px;">`SHARED_IMAGE`: Shared images (images shared by other accounts to this account)</p>
<li><strong>image-name</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image name</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>platform</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image operating system</strong>, such as `CentOS`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-value</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag value</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag:tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key-value pair</strong>. Replace “tag-key” with the actual value. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
     */
    public $Filters;

    /**
     * @var integer Offset; default value: 0. For more information on `Offset`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     */
    public $Limit;

    /**
     * @var string Instance type, e.g. `S1.SMALL1`
     */
    public $InstanceType;

    /**
     * @param array $ImageIds List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     * @param array $Filters Filters. Each request can have up to 10 `Filters`, and 5 `Filters.Values` for each filter. `ImageIds` and `Filters` cannot be specified at the same time. See details:

<li><strong>image-id</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image ID</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>image-type</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image type</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p><p style="padding-left: 30px;">Options:</p><p style="padding-left: 30px;">`PRIVATE_IMAGE`: Private images (images created by this account)</p><p style="padding-left: 30px;">`PUBLIC_IMAGE`: Public images (Tencent Cloud official images)</p><p style="padding-left: 30px;">`SHARED_IMAGE`: Shared images (images shared by other accounts to this account)</p>
<li><strong>image-name</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image name</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>platform</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>image operating system</strong>, such as `CentOS`.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag-value</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag value</strong>.</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
<li><strong>tag:tag-key</strong></li>
<p style="padding-left: 30px;">Filter by the <strong>tag key-value pair</strong>. Replace “tag-key” with the actual value. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Optional</p>
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](https://intl.cloud.tencent.com/document/api/213/568?from_cn_redirect=1#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     * @param string $InstanceType Instance type, e.g. `S1.SMALL1`
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
