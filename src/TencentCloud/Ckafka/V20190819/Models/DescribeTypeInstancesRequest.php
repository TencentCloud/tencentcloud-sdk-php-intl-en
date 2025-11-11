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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTypeInstances request structure.
 *
 * @method string getInstanceId() Obtain (Filter condition) filter by instance ID.
 * @method void setInstanceId(string $InstanceId) Set (Filter condition) filter by instance ID.
 * @method string getSearchWord() Obtain (Filter condition) filter by instance name. fuzzy query is supported.
 * @method void setSearchWord(string $SearchWord) Set (Filter condition) filter by instance name. fuzzy query is supported.
 * @method array getStatus() Obtain Instance status (filter condition). valid values: 0: creating, 1: running, 2: deleting. default return: all.
 * @method void setStatus(array $Status) Set Instance status (filter condition). valid values: 0: creating, 1: running, 2: deleting. default return: all.
 * @method integer getOffset() Obtain Offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. default value: 0.
 * @method integer getLimit() Obtain Number of returned results. default: 10. maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. default: 10. maximum value: 100.
 * @method string getTagKey() Obtain Matches the Tag key.
 * @method void setTagKey(string $TagKey) Set Matches the Tag key.
 */
class DescribeTypeInstancesRequest extends AbstractModel
{
    /**
     * @var string (Filter condition) filter by instance ID.
     */
    public $InstanceId;

    /**
     * @var string (Filter condition) filter by instance name. fuzzy query is supported.
     */
    public $SearchWord;

    /**
     * @var array Instance status (filter condition). valid values: 0: creating, 1: running, 2: deleting. default return: all.
     */
    public $Status;

    /**
     * @var integer Offset. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. default: 10. maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Matches the Tag key.
     */
    public $TagKey;

    /**
     * @param string $InstanceId (Filter condition) filter by instance ID.
     * @param string $SearchWord (Filter condition) filter by instance name. fuzzy query is supported.
     * @param array $Status Instance status (filter condition). valid values: 0: creating, 1: running, 2: deleting. default return: all.
     * @param integer $Offset Offset. default value: 0.
     * @param integer $Limit Number of returned results. default: 10. maximum value: 100.
     * @param string $TagKey Matches the Tag key.
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
