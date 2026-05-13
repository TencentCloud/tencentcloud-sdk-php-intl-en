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
 * DescribeTopicSyncReplica request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getTopicName() Obtain <p>Topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
 * @method void setTopicName(string $TopicName) Set <p>Topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
 * @method integer getOffset() Obtain <p>Offset, which is 0 by default</p>
 * @method void setOffset(integer $Offset) Set <p>Offset, which is 0 by default</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default value: 20. Must be greater than 0.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default value: 20. Must be greater than 0.</p>
 * @method boolean getOutOfSyncReplicaOnly() Obtain <p>Only filter unsynced replicas</p>
 * @method void setOutOfSyncReplicaOnly(boolean $OutOfSyncReplicaOnly) Set <p>Only filter unsynced replicas</p>
 */
class DescribeTopicSyncReplicaRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
     */
    public $TopicName;

    /**
     * @var integer <p>Offset, which is 0 by default</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default value: 20. Must be greater than 0.</p>
     */
    public $Limit;

    /**
     * @var boolean <p>Only filter unsynced replicas</p>
     */
    public $OutOfSyncReplicaOnly;

    /**
     * @param string $InstanceId <p>Instance ID</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $TopicName <p>Topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
     * @param integer $Offset <p>Offset, which is 0 by default</p>
     * @param integer $Limit <p>Number of returned results. Default value: 20. Must be greater than 0.</p>
     * @param boolean $OutOfSyncReplicaOnly <p>Only filter unsynced replicas</p>
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OutOfSyncReplicaOnly",$param) and $param["OutOfSyncReplicaOnly"] !== null) {
            $this->OutOfSyncReplicaOnly = $param["OutOfSyncReplicaOnly"];
        }
    }
}
