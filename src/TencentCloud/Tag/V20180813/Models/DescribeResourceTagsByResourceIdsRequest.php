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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTagsByResourceIds request structure.
 *
 * @method string getServiceType() Obtain Service type.
 * @method void setServiceType(string $ServiceType) Set Service type.
 * @method string getResourcePrefix() Obtain Resource prefix.
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix.
 * @method array getResourceIds() Obtain Array of resource IDs (up to 50)
 * @method void setResourceIds(array $ResourceIds) Set Array of resource IDs (up to 50)
 * @method string getResourceRegion() Obtain The resource's region.
 * @method void setResourceRegion(string $ResourceRegion) Set The resource's region.
 * @method integer getOffset() Obtain Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method integer getLimit() Obtain Page size. The default value is 0.
 * @method void setLimit(integer $Limit) Set Page size. The default value is 0.
 * @method string getCategory() Obtain Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 * @method void setCategory(string $Category) Set Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 */
class DescribeResourceTagsByResourceIdsRequest extends AbstractModel
{
    /**
     * @var string Service type.
     */
    public $ServiceType;

    /**
     * @var string Resource prefix.
     */
    public $ResourcePrefix;

    /**
     * @var array Array of resource IDs (up to 50)
     */
    public $ResourceIds;

    /**
     * @var string The resource's region.
     */
    public $ResourceRegion;

    /**
     * @var integer Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     */
    public $Offset;

    /**
     * @var integer Page size. The default value is 0.
     */
    public $Limit;

    /**
     * @var string Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
     */
    public $Category;

    /**
     * @param string $ServiceType Service type.
     * @param string $ResourcePrefix Resource prefix.
     * @param array $ResourceIds Array of resource IDs (up to 50)
     * @param string $ResourceRegion The resource's region.
     * @param integer $Offset Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     * @param integer $Limit Page size. The default value is 0.
     * @param string $Category Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
