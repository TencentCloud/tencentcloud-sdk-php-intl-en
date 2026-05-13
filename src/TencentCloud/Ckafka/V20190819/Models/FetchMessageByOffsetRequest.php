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
 * FetchMessageByOffset request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method string getTopic() Obtain <p>Topic name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1">DescribeTopic</a> API</p>
 * @method void setTopic(string $Topic) Set <p>Topic name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1">DescribeTopic</a> API</p>
 * @method integer getPartition() Obtain <p>Partition id</p>
 * @method void setPartition(integer $Partition) Set <p>Partition id</p>
 * @method integer getOffset() Obtain <p>Location info</p>
 * @method void setOffset(integer $Offset) Set <p>Location info</p>
 */
class FetchMessageByOffsetRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Topic name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1">DescribeTopic</a> API</p>
     */
    public $Topic;

    /**
     * @var integer <p>Partition id</p>
     */
    public $Partition;

    /**
     * @var integer <p>Location info</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     * @param string $Topic <p>Topic name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1">DescribeTopic</a> API</p>
     * @param integer $Partition <p>Partition id</p>
     * @param integer $Offset <p>Location info</p>
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
