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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access log configuration.
 *
 * @method string getLogSetId() Obtain Log set ID of Cloud Log Service (CLS) for CLB
 * @method void setLogSetId(string $LogSetId) Set Log set ID of Cloud Log Service (CLS) for CLB
 * @method string getLogTopicId() Obtain Log topic ID of Cloud Log Service (CLS) for CLB
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID of Cloud Log Service (CLS) for CLB
 */
class AccessLogConfig extends AbstractModel
{
    /**
     * @var string Log set ID of Cloud Log Service (CLS) for CLB
     */
    public $LogSetId;

    /**
     * @var string Log topic ID of Cloud Log Service (CLS) for CLB
     */
    public $LogTopicId;

    /**
     * @param string $LogSetId Log set ID of Cloud Log Service (CLS) for CLB
     * @param string $LogTopicId Log topic ID of Cloud Log Service (CLS) for CLB
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
