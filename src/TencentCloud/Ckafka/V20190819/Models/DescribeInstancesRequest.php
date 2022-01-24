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
 * DescribeInstances request structure.
 *
 * @method string getInstanceId() Obtain (Filter) filter by instance ID
 * @method void setInstanceId(string $InstanceId) Set (Filter) filter by instance ID
 * @method string getSearchWord() Obtain (Filter) filter by instance name. Fuzzy search is supported
 * @method void setSearchWord(string $SearchWord) Set (Filter) filter by instance name. Fuzzy search is supported
 * @method array getStatus() Obtain (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
 * @method void setStatus(array $Status) Set (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 100.
 * @method string getTagKey() Obtain Tag key value (this field has been deprecated).
 * @method void setTagKey(string $TagKey) Set Tag key value (this field has been deprecated).
 * @method string getVpcId() Obtain VPC ID.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string (Filter) filter by instance ID
     */
    public $InstanceId;

    /**
     * @var string (Filter) filter by instance name. Fuzzy search is supported
     */
    public $SearchWord;

    /**
     * @var array (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
     */
    public $Status;

    /**
     * @var integer Offset. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Tag key value (this field has been deprecated).
     */
    public $TagKey;

    /**
     * @var string VPC ID.
     */
    public $VpcId;

    /**
     * @param string $InstanceId (Filter) filter by instance ID
     * @param string $SearchWord (Filter) filter by instance name. Fuzzy search is supported
     * @param array $Status (Filter) instance status. 0: creating, 1: running, 2: deleting. If this parameter is left empty, all instances will be returned by default
     * @param integer $Offset Offset. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 100.
     * @param string $TagKey Tag key value (this field has been deprecated).
     * @param string $VpcId VPC ID.
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
