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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesDetail request structure.
 *
 * @method string getInstanceId() Obtain (Filter) filter by instance ID
 * @method void setInstanceId(string $InstanceId) Set (Filter) filter by instance ID
 * @method string getSearchWord() Obtain Filter by instance name, instance ID, AZ, VPC ID, or subnet ID. Fuzzy query is supported.
 * @method void setSearchWord(string $SearchWord) Set Filter by instance name, instance ID, AZ, VPC ID, or subnet ID. Fuzzy query is supported.
 * @method array getStatus() Obtain (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
 * @method void setStatus(array $Status) Set (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, `0` will be used by default.
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, `0` will be used by default.
 * @method integer getLimit() Obtain Number of returned results. If this parameter is left empty, `10` will be used by default. The maximum value is `20`.
 * @method void setLimit(integer $Limit) Set Number of returned results. If this parameter is left empty, `10` will be used by default. The maximum value is `20`.
 * @method string getTagKey() Obtain Tag key match.
 * @method void setTagKey(string $TagKey) Set Tag key match.
 * @method array getFilters() Obtain Filter. Valid values of `filter.Name` include `Ip`, `VpcId`, `SubNetId`, `InstanceType`, and `InstanceId`. Up to 10 values can be passed for `filter.Values`.
 * @method void setFilters(array $Filters) Set Filter. Valid values of `filter.Name` include `Ip`, `VpcId`, `SubNetId`, `InstanceType`, and `InstanceId`. Up to 10 values can be passed for `filter.Values`.
 * @method string getInstanceIds() Obtain This parameter has been deprecated and replaced with `InstanceIdList`.
 * @method void setInstanceIds(string $InstanceIds) Set This parameter has been deprecated and replaced with `InstanceIdList`.
 * @method array getInstanceIdList() Obtain Filter by instance ID.
 * @method void setInstanceIdList(array $InstanceIdList) Set Filter by instance ID.
 * @method array getTagList() Obtain Filter instances by a set of tags
 * @method void setTagList(array $TagList) Set Filter instances by a set of tags
 */
class DescribeInstancesDetailRequest extends AbstractModel
{
    /**
     * @var string (Filter) filter by instance ID
     */
    public $InstanceId;

    /**
     * @var string Filter by instance name, instance ID, AZ, VPC ID, or subnet ID. Fuzzy query is supported.
     */
    public $SearchWord;

    /**
     * @var array (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
     */
    public $Status;

    /**
     * @var integer Offset. If this parameter is left empty, `0` will be used by default.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. If this parameter is left empty, `10` will be used by default. The maximum value is `20`.
     */
    public $Limit;

    /**
     * @var string Tag key match.
     */
    public $TagKey;

    /**
     * @var array Filter. Valid values of `filter.Name` include `Ip`, `VpcId`, `SubNetId`, `InstanceType`, and `InstanceId`. Up to 10 values can be passed for `filter.Values`.
     */
    public $Filters;

    /**
     * @var string This parameter has been deprecated and replaced with `InstanceIdList`.
     */
    public $InstanceIds;

    /**
     * @var array Filter by instance ID.
     */
    public $InstanceIdList;

    /**
     * @var array Filter instances by a set of tags
     */
    public $TagList;

    /**
     * @param string $InstanceId (Filter) filter by instance ID
     * @param string $SearchWord Filter by instance name, instance ID, AZ, VPC ID, or subnet ID. Fuzzy query is supported.
     * @param array $Status (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
     * @param integer $Offset Offset. If this parameter is left empty, `0` will be used by default.
     * @param integer $Limit Number of returned results. If this parameter is left empty, `10` will be used by default. The maximum value is `20`.
     * @param string $TagKey Tag key match.
     * @param array $Filters Filter. Valid values of `filter.Name` include `Ip`, `VpcId`, `SubNetId`, `InstanceType`, and `InstanceId`. Up to 10 values can be passed for `filter.Values`.
     * @param string $InstanceIds This parameter has been deprecated and replaced with `InstanceIdList`.
     * @param array $InstanceIdList Filter by instance ID.
     * @param array $TagList Filter instances by a set of tags
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
