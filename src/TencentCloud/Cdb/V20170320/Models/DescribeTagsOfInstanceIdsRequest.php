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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagsOfInstanceIds request structure.
 *
 * @method array getInstanceIds() Obtain Instance list. Instance ID can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API. The length of the array passed in is not limited.
 * @method void setInstanceIds(array $InstanceIds) Set Instance list. Instance ID can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API. The length of the array passed in is not limited.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Page size. Defaults to 15.
 * @method void setLimit(integer $Limit) Set Page size. Defaults to 15.
 */
class DescribeTagsOfInstanceIdsRequest extends AbstractModel
{
    /**
     * @var array Instance list. Instance ID can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API. The length of the array passed in is not limited.
     */
    public $InstanceIds;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Page size. Defaults to 15.
     */
    public $Limit;

    /**
     * @param array $InstanceIds Instance list. Instance ID can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API. The length of the array passed in is not limited.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Page size. Defaults to 15.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
