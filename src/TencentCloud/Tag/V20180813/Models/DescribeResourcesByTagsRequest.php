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
 * DescribeResourcesByTags request structure.
 *
 * @method array getTagFilters() Obtain Tag filtering arrays.
 * @method void setTagFilters(array $TagFilters) Set Tag filtering arrays.
 * @method integer getCreateUin() Obtain Tag creator uin.
 * @method void setCreateUin(integer $CreateUin) Set Tag creator uin.
 * @method integer getOffset() Obtain Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method integer getLimit() Obtain Page size. The default value is 15.
 * @method void setLimit(integer $Limit) Set Page size. The default value is 15.
 * @method string getResourcePrefix() Obtain Resource prefix.
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix.
 * @method string getResourceId() Obtain Unique resource ID.
 * @method void setResourceId(string $ResourceId) Set Unique resource ID.
 * @method string getResourceRegion() Obtain The resource's region.
 * @method void setResourceRegion(string $ResourceRegion) Set The resource's region.
 * @method string getServiceType() Obtain Service type.
 * @method void setServiceType(string $ServiceType) Set Service type.
 */
class DescribeResourcesByTagsRequest extends AbstractModel
{
    /**
     * @var array Tag filtering arrays.
     */
    public $TagFilters;

    /**
     * @var integer Tag creator uin.
     */
    public $CreateUin;

    /**
     * @var integer Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     */
    public $Offset;

    /**
     * @var integer Page size. The default value is 15.
     */
    public $Limit;

    /**
     * @var string Resource prefix.
     */
    public $ResourcePrefix;

    /**
     * @var string Unique resource ID.
     */
    public $ResourceId;

    /**
     * @var string The resource's region.
     */
    public $ResourceRegion;

    /**
     * @var string Service type.
     */
    public $ServiceType;

    /**
     * @param array $TagFilters Tag filtering arrays.
     * @param integer $CreateUin Tag creator uin.
     * @param integer $Offset Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     * @param integer $Limit Page size. The default value is 15.
     * @param string $ResourcePrefix Resource prefix.
     * @param string $ResourceId Unique resource ID.
     * @param string $ResourceRegion The resource's region.
     * @param string $ServiceType Service type.
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
        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
