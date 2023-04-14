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
 * @method integer getLimit() Obtain Number of instances returned per page. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of instances returned per page. Default value: `20`.
 * @method integer getOffset() Obtain Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
 * @method string getGroupId() Obtain Replication group ID
 * @method void setGroupId(string $GroupId) Set Replication group ID
 * @method string getSearchKey() Obtain Key words for fuzzy query, which can be set as the ID or name of a replication group.
 * @method void setSearchKey(string $SearchKey) Set Key words for fuzzy query, which can be set as the ID or name of a replication group.
 */
class DescribeReplicationGroupRequest extends AbstractModel
{
    /**
     * @var integer Number of instances returned per page. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
     */
    public $Offset;

    /**
     * @var string Replication group ID
     */
    public $GroupId;

    /**
     * @var string Key words for fuzzy query, which can be set as the ID or name of a replication group.
     */
    public $SearchKey;

    /**
     * @param integer $Limit Number of instances returned per page. Default value: `20`.
     * @param integer $Offset Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
     * @param string $GroupId Replication group ID
     * @param string $SearchKey Key words for fuzzy query, which can be set as the ID or name of a replication group.
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
