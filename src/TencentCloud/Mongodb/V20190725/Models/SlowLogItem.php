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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log details.
 *
 * @method string getLog() Obtain Slow log details.
 * @method void setLog(string $Log) Set Slow log details.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getQueryHash() Obtain Queries the hash value.
 * @method void setQueryHash(string $QueryHash) Set Queries the hash value.
 */
class SlowLogItem extends AbstractModel
{
    /**
     * @var string Slow log details.
     */
    public $Log;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Queries the hash value.
     */
    public $QueryHash;

    /**
     * @param string $Log Slow log details.
     * @param string $NodeName Node name.
     * @param string $QueryHash Queries the hash value.
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
        }
    }
}
