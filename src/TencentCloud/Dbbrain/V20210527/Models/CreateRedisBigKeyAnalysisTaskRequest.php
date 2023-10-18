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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRedisBigKeyAnalysisTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getProduct() Obtain Service type. Valid value: `redis` (TencentDB for Redis).
 * @method void setProduct(string $Product) Set Service type. Valid value: `redis` (TencentDB for Redis).
 * @method array getShardIds() Obtain The list of the serial numbers of shard nodes. When the list is empty, all shard nodes will be selected.
 * @method void setShardIds(array $ShardIds) Set The list of the serial numbers of shard nodes. When the list is empty, all shard nodes will be selected.
 * @method array getKeyDelimiterList() Obtain The list of separators of top key prefixes.
Currently, the following separators are supported: ",", ";", ":", "_", "-", "+", "@", "=", "|", "#", ".". When the list is empty, all separators will be selected by default.
 * @method void setKeyDelimiterList(array $KeyDelimiterList) Set The list of separators of top key prefixes.
Currently, the following separators are supported: ",", ";", ":", "_", "-", "+", "@", "=", "|", "#", ".". When the list is empty, all separators will be selected by default.
 */
class CreateRedisBigKeyAnalysisTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Service type. Valid value: `redis` (TencentDB for Redis).
     */
    public $Product;

    /**
     * @var array The list of the serial numbers of shard nodes. When the list is empty, all shard nodes will be selected.
     */
    public $ShardIds;

    /**
     * @var array The list of separators of top key prefixes.
Currently, the following separators are supported: ",", ";", ":", "_", "-", "+", "@", "=", "|", "#", ".". When the list is empty, all separators will be selected by default.
     */
    public $KeyDelimiterList;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Product Service type. Valid value: `redis` (TencentDB for Redis).
     * @param array $ShardIds The list of the serial numbers of shard nodes. When the list is empty, all shard nodes will be selected.
     * @param array $KeyDelimiterList The list of separators of top key prefixes.
Currently, the following separators are supported: ",", ";", ":", "_", "-", "+", "@", "=", "|", "#", ".". When the list is empty, all separators will be selected by default.
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }

        if (array_key_exists("KeyDelimiterList",$param) and $param["KeyDelimiterList"] !== null) {
            $this->KeyDelimiterList = $param["KeyDelimiterList"];
        }
    }
}
