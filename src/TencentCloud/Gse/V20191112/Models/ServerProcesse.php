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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Game service process
 *
 * @method integer getConcurrentExecutions() Obtain Number of concurrent processes. Value range of total concurrent processes: 1-50.
 * @method void setConcurrentExecutions(integer $ConcurrentExecutions) Set Number of concurrent processes. Value range of total concurrent processes: 1-50.
 * @method string getLaunchPath() Obtain Launch Path. Linux: /local/game/ or Windows: C:\game\. The path length is 1-1024.
 * @method void setLaunchPath(string $LaunchPath) Set Launch Path. Linux: /local/game/ or Windows: C:\game\. The path length is 1-1024.
 * @method string getParameters() Obtain Launch parameter. The length is 0-1024.
 * @method void setParameters(string $Parameters) Set Launch parameter. The length is 0-1024.
 */
class ServerProcesse extends AbstractModel
{
    /**
     * @var integer Number of concurrent processes. Value range of total concurrent processes: 1-50.
     */
    public $ConcurrentExecutions;

    /**
     * @var string Launch Path. Linux: /local/game/ or Windows: C:\game\. The path length is 1-1024.
     */
    public $LaunchPath;

    /**
     * @var string Launch parameter. The length is 0-1024.
     */
    public $Parameters;

    /**
     * @param integer $ConcurrentExecutions Number of concurrent processes. Value range of total concurrent processes: 1-50.
     * @param string $LaunchPath Launch Path. Linux: /local/game/ or Windows: C:\game\. The path length is 1-1024.
     * @param string $Parameters Launch parameter. The length is 0-1024.
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
        if (array_key_exists("ConcurrentExecutions",$param) and $param["ConcurrentExecutions"] !== null) {
            $this->ConcurrentExecutions = $param["ConcurrentExecutions"];
        }

        if (array_key_exists("LaunchPath",$param) and $param["LaunchPath"] !== null) {
            $this->LaunchPath = $param["LaunchPath"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }
    }
}
