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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters used for stopping services.
 *
 * @method string getStopPolicy() Obtain Security mode: safe.
Default mode: default.
 * @method void setStopPolicy(string $StopPolicy) Set Security mode: safe.
Default mode: default.
 * @method integer getThreadCount() Obtain Thread Count
 * @method void setThreadCount(integer $ThreadCount) Set Thread Count
 */
class StopParams extends AbstractModel
{
    /**
     * @var string Security mode: safe.
Default mode: default.
     */
    public $StopPolicy;

    /**
     * @var integer Thread Count
     */
    public $ThreadCount;

    /**
     * @param string $StopPolicy Security mode: safe.
Default mode: default.
     * @param integer $ThreadCount Thread Count
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
        if (array_key_exists("StopPolicy",$param) and $param["StopPolicy"] !== null) {
            $this->StopPolicy = $param["StopPolicy"];
        }

        if (array_key_exists("ThreadCount",$param) and $param["ThreadCount"] !== null) {
            $this->ThreadCount = $param["ThreadCount"];
        }
    }
}
