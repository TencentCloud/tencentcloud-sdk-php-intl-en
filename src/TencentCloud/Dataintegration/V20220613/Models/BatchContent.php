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
namespace TencentCloud\Dataintegration\V20220613\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A batch of messages
 *
 * @method string getBody() Obtain Message body
 * @method void setBody(string $Body) Set Message body
 * @method string getKey() Obtain Key of a message
 * @method void setKey(string $Key) Set Key of a message
 */
class BatchContent extends AbstractModel
{
    /**
     * @var string Message body
     */
    public $Body;

    /**
     * @var string Key of a message
     */
    public $Key;

    /**
     * @param string $Body Message body
     * @param string $Key Key of a message
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
