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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetRocketMQConsumerOffSet request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getNamespaceId() Obtain Namespace name.
 * @method void setNamespaceId(string $NamespaceId) Set Namespace name.
 * @method string getGroupId() Obtain Consumer group name.
 * @method void setGroupId(string $GroupId) Set Consumer group name.
 * @method string getTopic() Obtain Topic name.
 * @method void setTopic(string $Topic) Set Topic name.
 * @method integer getType() Obtain Reset method. 0: Start from the latest offset; 1: Start from specified time point.
 * @method void setType(integer $Type) Set Reset method. 0: Start from the latest offset; 1: Start from specified time point.
 * @method integer getResetTimestamp() Obtain The specified timestamp that has been reset, in milliseconds. This parameter only takes effect when the value of `Type` is `1`.
 * @method void setResetTimestamp(integer $ResetTimestamp) Set The specified timestamp that has been reset, in milliseconds. This parameter only takes effect when the value of `Type` is `1`.
 */
class ResetRocketMQConsumerOffSetRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Namespace name.
     */
    public $NamespaceId;

    /**
     * @var string Consumer group name.
     */
    public $GroupId;

    /**
     * @var string Topic name.
     */
    public $Topic;

    /**
     * @var integer Reset method. 0: Start from the latest offset; 1: Start from specified time point.
     */
    public $Type;

    /**
     * @var integer The specified timestamp that has been reset, in milliseconds. This parameter only takes effect when the value of `Type` is `1`.
     */
    public $ResetTimestamp;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $NamespaceId Namespace name.
     * @param string $GroupId Consumer group name.
     * @param string $Topic Topic name.
     * @param integer $Type Reset method. 0: Start from the latest offset; 1: Start from specified time point.
     * @param integer $ResetTimestamp The specified timestamp that has been reset, in milliseconds. This parameter only takes effect when the value of `Type` is `1`.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResetTimestamp",$param) and $param["ResetTimestamp"] !== null) {
            $this->ResetTimestamp = $param["ResetTimestamp"];
        }
    }
}
