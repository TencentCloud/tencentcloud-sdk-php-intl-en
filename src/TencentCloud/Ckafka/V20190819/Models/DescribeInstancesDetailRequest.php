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
 * DescribeInstancesDetail request structure.
 *
 * @method string getInstanceId() Obtain <p>(Filtering Conditions) Filter by instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>(Filtering Conditions) Filter by instance ID</p>
 * @method string getSearchWord() Obtain <p>(Filtering Conditions) Filter by instance name, instance Id, availability zone, VPC Id, or subnet Id. Fuzzy query is supported.</p>
 * @method void setSearchWord(string $SearchWord) Set <p>(Filtering Conditions) Filter by instance name, instance Id, availability zone, VPC Id, or subnet Id. Fuzzy query is supported.</p>
 * @method array getStatus() Obtain <p>(Filtering Conditions) Instance status. Return all by default if left blank.</p><p>Enumeration values:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
 * @method void setStatus(array $Status) Set <p>(Filtering Conditions) Instance status. Return all by default if left blank.</p><p>Enumeration values:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
 * @method integer getOffset() Obtain <p>Offset, which is 0 by default.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset, which is 0 by default.</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default value: 10. Maximum value: 20.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default value: 10. Maximum value: 20.</p>
 * @method string getTagKey() Obtain <p>Match the tag key.</p>
 * @method void setTagKey(string $TagKey) Set <p>Match the tag key.</p>
 * @method array getFilters() Obtain <p>Filter. filter.Name supports ('Ip', 'VpcId', 'SubNetId', 'InstanceType', 'InstanceId'). filter.Values can transmit up to 10 values.</p>
 * @method void setFilters(array $Filters) Set <p>Filter. filter.Name supports ('Ip', 'VpcId', 'SubNetId', 'InstanceType', 'InstanceId'). filter.Values can transmit up to 10 values.</p>
 * @method string getInstanceIds() Obtain <p>Deprecated. Use InstanceIdList.</p>
 * @method void setInstanceIds(string $InstanceIds) Set <p>Deprecated. Use InstanceIdList.</p>
 * @method array getInstanceIdList() Obtain <p>Filter by instance ID</p>
 * @method void setInstanceIdList(array $InstanceIdList) Set <p>Filter by instance ID</p>
 * @method array getTagList() Obtain <p>Filter instances based on tag list (take the intersection)</p>
 * @method void setTagList(array $TagList) Set <p>Filter instances based on tag list (take the intersection)</p>
 */
class DescribeInstancesDetailRequest extends AbstractModel
{
    /**
     * @var string <p>(Filtering Conditions) Filter by instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>(Filtering Conditions) Filter by instance name, instance Id, availability zone, VPC Id, or subnet Id. Fuzzy query is supported.</p>
     */
    public $SearchWord;

    /**
     * @var array <p>(Filtering Conditions) Instance status. Return all by default if left blank.</p><p>Enumeration values:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Offset, which is 0 by default.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default value: 10. Maximum value: 20.</p>
     */
    public $Limit;

    /**
     * @var string <p>Match the tag key.</p>
     */
    public $TagKey;

    /**
     * @var array <p>Filter. filter.Name supports ('Ip', 'VpcId', 'SubNetId', 'InstanceType', 'InstanceId'). filter.Values can transmit up to 10 values.</p>
     */
    public $Filters;

    /**
     * @var string <p>Deprecated. Use InstanceIdList.</p>
     * @deprecated
     */
    public $InstanceIds;

    /**
     * @var array <p>Filter by instance ID</p>
     */
    public $InstanceIdList;

    /**
     * @var array <p>Filter instances based on tag list (take the intersection)</p>
     */
    public $TagList;

    /**
     * @param string $InstanceId <p>(Filtering Conditions) Filter by instance ID</p>
     * @param string $SearchWord <p>(Filtering Conditions) Filter by instance name, instance Id, availability zone, VPC Id, or subnet Id. Fuzzy query is supported.</p>
     * @param array $Status <p>(Filtering Conditions) Instance status. Return all by default if left blank.</p><p>Enumeration values:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
     * @param integer $Offset <p>Offset, which is 0 by default.</p>
     * @param integer $Limit <p>Number of returned results. Default value: 10. Maximum value: 20.</p>
     * @param string $TagKey <p>Match the tag key.</p>
     * @param array $Filters <p>Filter. filter.Name supports ('Ip', 'VpcId', 'SubNetId', 'InstanceType', 'InstanceId'). filter.Values can transmit up to 10 values.</p>
     * @param string $InstanceIds <p>Deprecated. Use InstanceIdList.</p>
     * @param array $InstanceIdList <p>Filter by instance ID</p>
     * @param array $TagList <p>Filter instances based on tag list (take the intersection)</p>
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
