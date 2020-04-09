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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagsOfInstanceIds request structure.
 *
 * @method array getInstanceIds() Obtain List of instances.
 * @method void setInstanceIds(array $InstanceIds) Set List of instances.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 */
class DescribeTagsOfInstanceIdsRequest extends AbstractModel
{
    /**
     * @var array List of instances.
     */
    public $InstanceIds;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @param array $InstanceIds List of instances.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of entries per page.
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
