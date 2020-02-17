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
 * @method array getImageIds() Obtain List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/15688). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method void setImageIds(array $ImageIds) Set List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/15688). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method array getFilters() Obtain Filters. Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `ImageIds` and `Filters` at the same time. Specific filters:
<li>`image-id` - String - Optional - Filter results by image ID</li>
<li>`image-type` - String - Optional - Filter results by image type. Valid values:
    PRIVATE_IMAGE: private image created by the current account 
    PUBLIC_IMAGE: public image created by Tencent Cloud
   SHARED_IMAGE: image shared with the current account by another account.</li>
 * @method void setFilters(array $Filters) Set Filters. Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `ImageIds` and `Filters` at the same time. Specific filters:
<li>`image-id` - String - Optional - Filter results by image ID</li>
<li>`image-type` - String - Optional - Filter results by image type. Valid values:
    PRIVATE_IMAGE: private image created by the current account 
    PUBLIC_IMAGE: public image created by Tencent Cloud
   SHARED_IMAGE: image shared with the current account by another account.</li>
 * @method integer getOffset() Obtain Offset; default value: 0. For more information on `Offset`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method void setOffset(integer $Offset) Set Offset; default value: 0. For more information on `Offset`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
 * @method string getInstanceType() Obtain Instance type, e.g. `S1.SMALL1`
 * @method void setInstanceType(string $InstanceType) Set Instance type, e.g. `S1.SMALL1`
 */

/**
 *DescribeImages request structure.
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var array List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/15688). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     */
    public $ImageIds;

    /**
     * @var array Filters. Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `ImageIds` and `Filters` at the same time. Specific filters:
<li>`image-id` - String - Optional - Filter results by image ID</li>
<li>`image-type` - String - Optional - Filter results by image type. Valid values:
    PRIVATE_IMAGE: private image created by the current account 
    PUBLIC_IMAGE: public image created by Tencent Cloud
   SHARED_IMAGE: image shared with the current account by another account.</li>
     */
    public $Filters;

    /**
     * @var integer Offset; default value: 0. For more information on `Offset`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     */
    public $Limit;

    /**
     * @var string Instance type, e.g. `S1.SMALL1`
     */
    public $InstanceType;
    /**
     * @param array $ImageIds List of image IDs, such as `img-gvbnzy6f`. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/15688). You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>View the image IDs in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     * @param array $Filters Filters. Each request can have up to 10 `Filters` and 5 `Filters.Values`. You cannot specify `ImageIds` and `Filters` at the same time. Specific filters:
<li>`image-id` - String - Optional - Filter results by image ID</li>
<li>`image-type` - String - Optional - Filter results by image type. Valid values:
    PRIVATE_IMAGE: private image created by the current account 
    PUBLIC_IMAGE: public image created by Tencent Cloud
   SHARED_IMAGE: image shared with the current account by another account.</li>
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see [API Introduction](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89).
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
