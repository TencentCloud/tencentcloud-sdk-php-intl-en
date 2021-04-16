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
 * DescribeCloneList request structure.
 *
 * @method string getInstanceId() Obtain ID of the original instance. This parameter is used to query the clone task list of a specific original instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the original instance. This parameter is used to query the clone task list of a specific original instance.
 * @method integer getOffset() Obtain Paginated query offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of results per page. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of results per page. Default value: `20`.
 */
class DescribeCloneListRequest extends AbstractModel
{
    /**
     * @var string ID of the original instance. This parameter is used to query the clone task list of a specific original instance.
     */
    public $InstanceId;

    /**
     * @var integer Paginated query offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of results per page. Default value: `20`.
     */
    public $Limit;

    /**
     * @param string $InstanceId ID of the original instance. This parameter is used to query the clone task list of a specific original instance.
     * @param integer $Offset Paginated query offset. Default value: `0`.
     * @param integer $Limit Number of results per page. Default value: `20`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
