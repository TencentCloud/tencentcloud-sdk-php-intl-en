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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineSnapshot request structure.
 *
 * @method array getQuuids() Obtain CVM ID collection
 * @method void setQuuids(array $Quuids) Set CVM ID collection
 * @method integer getType() Obtain Inquiry snapshot type: 0 - latest one; 1 - all
 * @method void setType(integer $Type) Set Inquiry snapshot type: 0 - latest one; 1 - all
 * @method integer getLimit() Obtain Number of Pagination
 * @method void setLimit(integer $Limit) Set Number of Pagination
 * @method integer getOffset() Obtain Pagination step size
 * @method void setOffset(integer $Offset) Set Pagination step size
 */
class DescribeMachineSnapshotRequest extends AbstractModel
{
    /**
     * @var array CVM ID collection
     */
    public $Quuids;

    /**
     * @var integer Inquiry snapshot type: 0 - latest one; 1 - all
     */
    public $Type;

    /**
     * @var integer Number of Pagination
     */
    public $Limit;

    /**
     * @var integer Pagination step size
     */
    public $Offset;

    /**
     * @param array $Quuids CVM ID collection
     * @param integer $Type Inquiry snapshot type: 0 - latest one; 1 - all
     * @param integer $Limit Number of Pagination
     * @param integer $Offset Pagination step size
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
        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
