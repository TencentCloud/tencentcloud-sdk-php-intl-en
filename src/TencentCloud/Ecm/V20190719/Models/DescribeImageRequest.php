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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImage request structure.
 *
 * @method array getFilters() Obtain Filter. Each request can contain up to 10 `Filters`. The detailed filters are as follows:
image-id - String - Required: no - (Filter) Filter by image ID.
image-type - String - Required: no - (Filter) Filter by image type. Valid values:
PRIVATE_IMAGE: private image created by the current account 
PUBLIC_IMAGE: public image created by Tencent Cloud
instance-type -String - Required: no - (Filter) Filter supported images by model.
image-name - String - Required: no - (Filter) Fuzzy match by image name. You can provide only one value.
image-os - String - Required: no - (Filter) Fuzzy match by image system name. You can provide only one value.
 * @method void setFilters(array $Filters) Set Filter. Each request can contain up to 10 `Filters`. The detailed filters are as follows:
image-id - String - Required: no - (Filter) Filter by image ID.
image-type - String - Required: no - (Filter) Filter by image type. Valid values:
PRIVATE_IMAGE: private image created by the current account 
PUBLIC_IMAGE: public image created by Tencent Cloud
instance-type -String - Required: no - (Filter) Filter supported images by model.
image-name - String - Required: no - (Filter) Fuzzy match by image name. You can provide only one value.
image-os - String - Required: no - (Filter) Fuzzy match by image system name. You can provide only one value.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
 */
class DescribeImageRequest extends AbstractModel
{
    /**
     * @var array Filter. Each request can contain up to 10 `Filters`. The detailed filters are as follows:
image-id - String - Required: no - (Filter) Filter by image ID.
image-type - String - Required: no - (Filter) Filter by image type. Valid values:
PRIVATE_IMAGE: private image created by the current account 
PUBLIC_IMAGE: public image created by Tencent Cloud
instance-type -String - Required: no - (Filter) Filter supported images by model.
image-name - String - Required: no - (Filter) Fuzzy match by image name. You can provide only one value.
image-os - String - Required: no - (Filter) Fuzzy match by image system name. You can provide only one value.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
     */
    public $Limit;

    /**
     * @param array $Filters Filter. Each request can contain up to 10 `Filters`. The detailed filters are as follows:
image-id - String - Required: no - (Filter) Filter by image ID.
image-type - String - Required: no - (Filter) Filter by image type. Valid values:
PRIVATE_IMAGE: private image created by the current account 
PUBLIC_IMAGE: public image created by Tencent Cloud
instance-type -String - Required: no - (Filter) Filter supported images by model.
image-name - String - Required: no - (Filter) Fuzzy match by image name. You can provide only one value.
image-os - String - Required: no - (Filter) Fuzzy match by image system name. You can provide only one value.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
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
    }
}
