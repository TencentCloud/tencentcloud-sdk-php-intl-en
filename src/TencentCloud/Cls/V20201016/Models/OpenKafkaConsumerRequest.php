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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenKafkaConsumer request structure.
 *
 * @method string getFromTopicId() Obtain `TopicId` created by the CLS console
 * @method void setFromTopicId(string $FromTopicId) Set `TopicId` created by the CLS console
 * @method integer getCompression() Obtain Compression mode. Valid values: `0` (no compression); `2` (snappy); `3` (LZ4)
 * @method void setCompression(integer $Compression) Set Compression mode. Valid values: `0` (no compression); `2` (snappy); `3` (LZ4)
 */
class OpenKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string `TopicId` created by the CLS console
     */
    public $FromTopicId;

    /**
     * @var integer Compression mode. Valid values: `0` (no compression); `2` (snappy); `3` (LZ4)
     */
    public $Compression;

    /**
     * @param string $FromTopicId `TopicId` created by the CLS console
     * @param integer $Compression Compression mode. Valid values: `0` (no compression); `2` (snappy); `3` (LZ4)
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
        if (array_key_exists("FromTopicId",$param) and $param["FromTopicId"] !== null) {
            $this->FromTopicId = $param["FromTopicId"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }
    }
}
