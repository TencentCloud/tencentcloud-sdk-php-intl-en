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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log configurations.
 *
 * @method string getLogsetId() Obtain Logs should be shipped to a Cloud Log Service (CLS) log set.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogsetId(string $LogsetId) Set Logs should be shipped to a Cloud Log Service (CLS) log set.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain Logs should be shipped to a CLS topic.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Logs should be shipped to a CLS topic.Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogConfig extends AbstractModel
{
    /**
     * @var string Logs should be shipped to a Cloud Log Service (CLS) log set.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogsetId;

    /**
     * @var string Logs should be shipped to a CLS topic.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @param string $LogsetId Logs should be shipped to a Cloud Log Service (CLS) log set.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicId Logs should be shipped to a CLS topic.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
