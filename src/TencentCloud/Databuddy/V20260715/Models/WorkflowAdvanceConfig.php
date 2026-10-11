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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow advanced setting.
 *
 * @method string getQueuingMode() Obtain Queue mode. ON (default) and OFF.
 * @method void setQueuingMode(string $QueuingMode) Set Queue mode. ON (default) and OFF.
 * @method integer getMaxConcurrentNum() Obtain 	
The default value is 1.

When QueuingMode is ON, the MaxConcurrentNum setting takes effect. Input only integers larger than 0. Invalid input is automatically converted to 1.
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) Set 	
The default value is 1.

When QueuingMode is ON, the MaxConcurrentNum setting takes effect. Input only integers larger than 0. Invalid input is automatically converted to 1.
 */
class WorkflowAdvanceConfig extends AbstractModel
{
    /**
     * @var string Queue mode. ON (default) and OFF.
     */
    public $QueuingMode;

    /**
     * @var integer 	
The default value is 1.

When QueuingMode is ON, the MaxConcurrentNum setting takes effect. Input only integers larger than 0. Invalid input is automatically converted to 1.
     */
    public $MaxConcurrentNum;

    /**
     * @param string $QueuingMode Queue mode. ON (default) and OFF.
     * @param integer $MaxConcurrentNum 	
The default value is 1.

When QueuingMode is ON, the MaxConcurrentNum setting takes effect. Input only integers larger than 0. Invalid input is automatically converted to 1.
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
        if (array_key_exists("QueuingMode",$param) and $param["QueuingMode"] !== null) {
            $this->QueuingMode = $param["QueuingMode"];
        }

        if (array_key_exists("MaxConcurrentNum",$param) and $param["MaxConcurrentNum"] !== null) {
            $this->MaxConcurrentNum = $param["MaxConcurrentNum"];
        }
    }
}
