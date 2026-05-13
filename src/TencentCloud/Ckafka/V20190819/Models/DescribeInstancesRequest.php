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
 * DescribeInstances request structure.
 *
 * @method string getInstanceId() Obtain <p>(Query Conditions) Filter by cluster instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>(Query Conditions) Filter by cluster instance Id</p>
 * @method string getSearchWord() Obtain <p>Search term  ex: (Query condition) Filter by instance name. Fuzzy query is supported.</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Search term  ex: (Query condition) Filter by instance name. Fuzzy query is supported.</p>
 * @method array getStatus() Obtain <p>(Query condition) Instance status. Returns all by default if left blank.</p><p>Enumeration value:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
 * @method void setStatus(array $Status) Set <p>(Query condition) Instance status. Returns all by default if left blank.</p><p>Enumeration value:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
 * @method integer getOffset() Obtain <p>Offset, which is 0 by default</p>
 * @method void setOffset(integer $Offset) Set <p>Offset, which is 0 by default</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default value: 10. Maximum value: 100.</p>
 * @method string getTagKey() Obtain <p>Abandoned. Match the tag key.</p>
 * @method void setTagKey(string $TagKey) Set <p>Abandoned. Match the tag key.</p>
 * @method string getVpcId() Obtain <p>(Query condition) VPC Id</p>
 * @method void setVpcId(string $VpcId) Set <p>(Query condition) VPC Id</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>(Query Conditions) Filter by cluster instance Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Search term  ex: (Query condition) Filter by instance name. Fuzzy query is supported.</p>
     */
    public $SearchWord;

    /**
     * @var array <p>(Query condition) Instance status. Returns all by default if left blank.</p><p>Enumeration value:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Offset, which is 0 by default</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var string <p>Abandoned. Match the tag key.</p>
     * @deprecated
     */
    public $TagKey;

    /**
     * @var string <p>(Query condition) VPC Id</p>
     */
    public $VpcId;

    /**
     * @param string $InstanceId <p>(Query Conditions) Filter by cluster instance Id</p>
     * @param string $SearchWord <p>Search term  ex: (Query condition) Filter by instance name. Fuzzy query is supported.</p>
     * @param array $Status <p>(Query condition) Instance status. Returns all by default if left blank.</p><p>Enumeration value:</p><ul><li>-1: Creation failed</li><li>0:Creating</li><li>1:Running</li><li>2:Deleting</li><li>3:Deleted</li><li>4:Deletion failure</li><li>5:Isolated</li><li>7:Upgrading</li></ul>
     * @param integer $Offset <p>Offset, which is 0 by default</p>
     * @param integer $Limit <p>Number of returned results. Default value: 10. Maximum value: 100.</p>
     * @param string $TagKey <p>Abandoned. Match the tag key.</p>
     * @param string $VpcId <p>(Query condition) VPC Id</p>
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
