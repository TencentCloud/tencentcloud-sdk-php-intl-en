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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImagesToShare request structure.
 *
 * @method array getImageIds() Obtain List of CVM image IDs, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
 * @method void setImageIds(array $ImageIds) Set List of CVM image IDs, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
 * @method integer getOffset() Obtain Offset. The default value is 0. For more information on `Offset`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0. For more information on `Offset`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. The default value is 20, and the maximum value is 100. For more information on `Limit`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. The default value is 20, and the maximum value is 100. For more information on `Limit`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
 * @method array getFilters() Obtain Filter list.
<li>image-id</li>: filter by [CVM image ID].
Type: string.
Required: no.
<li>image-name</li>: filter by [CVM image name].
Type: string.
Required: no.

<li>image-type</li>: filter by [CVM image type].
Type: string.
Required: no.
Valid values:
PRIVATE_IMAGE: private image (image created by the account).
PUBLIC_IMAGE: public image (Tencent Cloud official image).
SHARED_IMAGE: shared image (image shared by other accounts to this account).

The maximum number of Filters per request is 10, and the maximum number of Filter.Values per request is 5.
ImageIds and Filters cannot be specified simultaneously for parameters.
 * @method void setFilters(array $Filters) Set Filter list.
<li>image-id</li>: filter by [CVM image ID].
Type: string.
Required: no.
<li>image-name</li>: filter by [CVM image name].
Type: string.
Required: no.

<li>image-type</li>: filter by [CVM image type].
Type: string.
Required: no.
Valid values:
PRIVATE_IMAGE: private image (image created by the account).
PUBLIC_IMAGE: public image (Tencent Cloud official image).
SHARED_IMAGE: shared image (image shared by other accounts to this account).

The maximum number of Filters per request is 10, and the maximum number of Filter.Values per request is 5.
ImageIds and Filters cannot be specified simultaneously for parameters.
 */
class DescribeImagesToShareRequest extends AbstractModel
{
    /**
     * @var array List of CVM image IDs, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
     */
    public $ImageIds;

    /**
     * @var integer Offset. The default value is 0. For more information on `Offset`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. The default value is 20, and the maximum value is 100. For more information on `Limit`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array Filter list.
<li>image-id</li>: filter by [CVM image ID].
Type: string.
Required: no.
<li>image-name</li>: filter by [CVM image name].
Type: string.
Required: no.

<li>image-type</li>: filter by [CVM image type].
Type: string.
Required: no.
Valid values:
PRIVATE_IMAGE: private image (image created by the account).
PUBLIC_IMAGE: public image (Tencent Cloud official image).
SHARED_IMAGE: shared image (image shared by other accounts to this account).

The maximum number of Filters per request is 10, and the maximum number of Filter.Values per request is 5.
ImageIds and Filters cannot be specified simultaneously for parameters.
     */
    public $Filters;

    /**
     * @param array $ImageIds List of CVM image IDs, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
     * @param integer $Offset Offset. The default value is 0. For more information on `Offset`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. The default value is 20, and the maximum value is 100. For more information on `Limit`, see the relevant section in API [Introduction](https://www.tencentcloud.com/document/product/1207/47578?from_cn_redirect=1).
     * @param array $Filters Filter list.
<li>image-id</li>: filter by [CVM image ID].
Type: string.
Required: no.
<li>image-name</li>: filter by [CVM image name].
Type: string.
Required: no.

<li>image-type</li>: filter by [CVM image type].
Type: string.
Required: no.
Valid values:
PRIVATE_IMAGE: private image (image created by the account).
PUBLIC_IMAGE: public image (Tencent Cloud official image).
SHARED_IMAGE: shared image (image shared by other accounts to this account).

The maximum number of Filters per request is 10, and the maximum number of Filter.Values per request is 5.
ImageIds and Filters cannot be specified simultaneously for parameters.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
