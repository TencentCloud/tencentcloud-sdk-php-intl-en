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
 * Message content that can be sent in batches
 *
 * @method string getBody() Obtain Message body that is sent.
 * @method void setBody(string $Body) Set Message body that is sent.
 * @method string getKey() Obtain Message sending key name.
 * @method void setKey(string $Key) Set Message sending key name.
 */
class BatchContent extends AbstractModel
{
    /**
     * @var string Message body that is sent.
     */
    public $Body;

    /**
     * @var string Message sending key name.
     */
    public $Key;

    /**
     * @param string $Body Message body that is sent.
     * @param string $Key Message sending key name.
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
