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
 * UploadLog request structure.
 *
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method string getHashKey() Obtain Topic partition where data will be written into by `HashKey` 
 * @method void setHashKey(string $HashKey) Set Topic partition where data will be written into by `HashKey` 
 * @method string getCompressType() Obtain Compression type
 * @method void setCompressType(string $CompressType) Set Compression type
 */
class UploadLogRequest extends AbstractModel
{
    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var string Topic partition where data will be written into by `HashKey` 
     */
    public $HashKey;

    /**
     * @var string Compression type
     */
    public $CompressType;

    /**
     * @param string $TopicId Topic ID
     * @param string $HashKey Topic partition where data will be written into by `HashKey` 
     * @param string $CompressType Compression type
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("HashKey",$param) and $param["HashKey"] !== null) {
            $this->HashKey = $param["HashKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
