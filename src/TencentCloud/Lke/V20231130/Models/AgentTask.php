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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent Agent task information
 *
 * @method integer getIndex() Obtain <p>Task serial number</p>
 * @method void setIndex(integer $Index) Set <p>Task serial number</p>
 * @method string getContent() Obtain <p>Task content</p>
 * @method void setContent(string $Content) Set <p>Task content</p>
 * @method string getStatus() Obtain <p>Task status.</p>
 * @method void setStatus(string $Status) Set <p>Task status.</p>
 */
class AgentTask extends AbstractModel
{
    /**
     * @var integer <p>Task serial number</p>
     */
    public $Index;

    /**
     * @var string <p>Task content</p>
     */
    public $Content;

    /**
     * @var string <p>Task status.</p>
     */
    public $Status;

    /**
     * @param integer $Index <p>Task serial number</p>
     * @param string $Content <p>Task content</p>
     * @param string $Status <p>Task status.</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
