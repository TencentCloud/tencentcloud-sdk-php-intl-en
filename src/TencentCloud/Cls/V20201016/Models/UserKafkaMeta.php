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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User kafka extended information
 *
 * @method string getKafkaVersion() Obtain User kafka version
Support the following versions:
  - 0.10.2.0
  - 1.0.0
  - 2.0.0
  - 2.2.0
  - 2.4.0
  - 2.6.0
  - 2.7.0
  - 2.8.0
  - 3.0.0
  - 3.2.0
 * @method void setKafkaVersion(string $KafkaVersion) Set User kafka version
Support the following versions:
  - 0.10.2.0
  - 1.0.0
  - 2.0.0
  - 2.2.0
  - 2.4.0
  - 2.6.0
  - 2.7.0
  - 2.8.0
  - 3.0.0
  - 3.2.0
 */
class UserKafkaMeta extends AbstractModel
{
    /**
     * @var string User kafka version
Support the following versions:
  - 0.10.2.0
  - 1.0.0
  - 2.0.0
  - 2.2.0
  - 2.4.0
  - 2.6.0
  - 2.7.0
  - 2.8.0
  - 3.0.0
  - 3.2.0
     */
    public $KafkaVersion;

    /**
     * @param string $KafkaVersion User kafka version
Support the following versions:
  - 0.10.2.0
  - 1.0.0
  - 2.0.0
  - 2.2.0
  - 2.4.0
  - 2.6.0
  - 2.7.0
  - 2.8.0
  - 3.0.0
  - 3.2.0
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
        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }
    }
}
