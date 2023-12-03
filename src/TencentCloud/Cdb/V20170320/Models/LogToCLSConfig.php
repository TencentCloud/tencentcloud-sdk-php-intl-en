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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configurations of sending slow and error logs of a CDB instance to CLS.
 *
 * @method string getStatus() Obtain Enabling status of the feature.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setStatus(string $Status) Set Enabling status of the feature.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method string getLogSetId() Obtain CLS log set ID.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setLogSetId(string $LogSetId) Set CLS log set ID.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method string getLogTopicId() Obtain Log topic ID.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID.
Note: The return value may be null, indicating that no valid data can be obtained.
 */
class LogToCLSConfig extends AbstractModel
{
    /**
     * @var string Enabling status of the feature.
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $Status;

    /**
     * @var string CLS log set ID.
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $LogSetId;

    /**
     * @var string Log topic ID.
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $LogTopicId;

    /**
     * @param string $Status Enabling status of the feature.
Note: The return value may be null, indicating that no valid data can be obtained.
     * @param string $LogSetId CLS log set ID.
Note: The return value may be null, indicating that no valid data can be obtained.
     * @param string $LogTopicId Log topic ID.
Note: The return value may be null, indicating that no valid data can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
