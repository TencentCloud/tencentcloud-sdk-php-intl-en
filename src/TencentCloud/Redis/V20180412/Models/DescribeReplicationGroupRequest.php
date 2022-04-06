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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationGroup request structure.
 *
 * @method integer getLimit() Obtain Instance list size. Default value: 20
 * @method void setLimit(integer $Limit) Set Instance list size. Default value: 20
 * @method integer getOffset() Obtain Offset, which is an integral multiple of `Limit`
 * @method void setOffset(integer $Offset) Set Offset, which is an integral multiple of `Limit`
 * @method string getGroupId() Obtain Replication group ID
 * @method void setGroupId(string $GroupId) Set Replication group ID
 * @method string getSearchKey() Obtain Instance ID/name. Fuzzy query is supported.
 * @method void setSearchKey(string $SearchKey) Set Instance ID/name. Fuzzy query is supported.
 */
class DescribeReplicationGroupRequest extends AbstractModel
{
    /**
     * @var integer Instance list size. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`
     */
    public $Offset;

    /**
     * @var string Replication group ID
     */
    public $GroupId;

    /**
     * @var string Instance ID/name. Fuzzy query is supported.
     */
    public $SearchKey;

    /**
     * @param integer $Limit Instance list size. Default value: 20
     * @param integer $Offset Offset, which is an integral multiple of `Limit`
     * @param string $GroupId Replication group ID
     * @param string $SearchKey Instance ID/name. Fuzzy query is supported.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
