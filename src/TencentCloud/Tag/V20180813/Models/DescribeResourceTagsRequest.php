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
 * DescribeResourceTags request structure.
 *
 * @method integer getCreateUin() Obtain Creator `uin`
 * @method void setCreateUin(integer $CreateUin) Set Creator `uin`
 * @method string getResourceRegion() Obtain Resource region.
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region.
 * @method string getServiceType() Obtain Service type.
 * @method void setServiceType(string $ServiceType) Set Service type.
 * @method string getResourcePrefix() Obtain Resource prefix
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix
 * @method string getResourceId() Obtain Unique resource ID. Queries with `ResourceId` only may be slow or fail to return results. We recommend you also enter `ServiceType`, `ResourcePrefix`, and `ResourceRegion` (which can be ignored for resources that don't have the region attribute) when entering `ResourceId`.
 * @method void setResourceId(string $ResourceId) Set Unique resource ID. Queries with `ResourceId` only may be slow or fail to return results. We recommend you also enter `ServiceType`, `ResourcePrefix`, and `ResourceRegion` (which can be ignored for resources that don't have the region attribute) when entering `ResourceId`.
 * @method integer getOffset() Obtain Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method integer getLimit() Obtain Number of entries per page. Default value: 15
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 15
 * @method integer getCosResourceId() Obtain Whether it is a COS resource (0 or 1). This parameter is required when the entered `ResourceId` is a COS resource.
 * @method void setCosResourceId(integer $CosResourceId) Set Whether it is a COS resource (0 or 1). This parameter is required when the entered `ResourceId` is a COS resource.
 */
class DescribeResourceTagsRequest extends AbstractModel
{
    /**
     * @var integer Creator `uin`
     */
    public $CreateUin;

    /**
     * @var string Resource region.
     */
    public $ResourceRegion;

    /**
     * @var string Service type.
     */
    public $ServiceType;

    /**
     * @var string Resource prefix
     */
    public $ResourcePrefix;

    /**
     * @var string Unique resource ID. Queries with `ResourceId` only may be slow or fail to return results. We recommend you also enter `ServiceType`, `ResourcePrefix`, and `ResourceRegion` (which can be ignored for resources that don't have the region attribute) when entering `ResourceId`.
     */
    public $ResourceId;

    /**
     * @var integer Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 15
     */
    public $Limit;

    /**
     * @var integer Whether it is a COS resource (0 or 1). This parameter is required when the entered `ResourceId` is a COS resource.
     */
    public $CosResourceId;

    /**
     * @param integer $CreateUin Creator `uin`
     * @param string $ResourceRegion Resource region.
     * @param string $ServiceType Service type.
     * @param string $ResourcePrefix Resource prefix
     * @param string $ResourceId Unique resource ID. Queries with `ResourceId` only may be slow or fail to return results. We recommend you also enter `ServiceType`, `ResourcePrefix`, and `ResourceRegion` (which can be ignored for resources that don't have the region attribute) when entering `ResourceId`.
     * @param integer $Offset Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     * @param integer $Limit Number of entries per page. Default value: 15
     * @param integer $CosResourceId Whether it is a COS resource (0 or 1). This parameter is required when the entered `ResourceId` is a COS resource.
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
        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CosResourceId",$param) and $param["CosResourceId"] !== null) {
            $this->CosResourceId = $param["CosResourceId"];
        }
    }
}
