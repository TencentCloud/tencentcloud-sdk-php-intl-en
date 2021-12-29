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
 * DescribeACL request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getResourceType() Obtain ACL resource type (`2`: TOPIC, `3`: GROUP, `4`: CLUSTER).
 * @method void setResourceType(integer $ResourceType) Set ACL resource type (`2`: TOPIC, `3`: GROUP, `4`: CLUSTER).
 * @method string getResourceName() Obtain Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name; if `resourceType` is `CLUSTER`, this field can be left empty.
 * @method void setResourceName(string $ResourceName) Set Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name; if `resourceType` is `CLUSTER`, this field can be left empty.
 * @method integer getOffset() Obtain Offset position
 * @method void setOffset(integer $Offset) Set Offset position
 * @method integer getLimit() Obtain Quantity limit
 * @method void setLimit(integer $Limit) Set Quantity limit
 * @method string getSearchWord() Obtain Keyword match
 * @method void setSearchWord(string $SearchWord) Set Keyword match
 */
class DescribeACLRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer ACL resource type (`2`: TOPIC, `3`: GROUP, `4`: CLUSTER).
     */
    public $ResourceType;

    /**
     * @var string Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name; if `resourceType` is `CLUSTER`, this field can be left empty.
     */
    public $ResourceName;

    /**
     * @var integer Offset position
     */
    public $Offset;

    /**
     * @var integer Quantity limit
     */
    public $Limit;

    /**
     * @var string Keyword match
     */
    public $SearchWord;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $ResourceType ACL resource type (`2`: TOPIC, `3`: GROUP, `4`: CLUSTER).
     * @param string $ResourceName Resource name, which is related to `resourceType`. For example, if `resourceType` is `TOPIC`, this field indicates the topic name; if `resourceType` is `GROUP`, this field indicates the group name; if `resourceType` is `CLUSTER`, this field can be left empty.
     * @param integer $Offset Offset position
     * @param integer $Limit Quantity limit
     * @param string $SearchWord Keyword match
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
