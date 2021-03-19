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
 * Configuration of target tracking scaling
 *
 * @method integer getTargetValue() Obtain Ratio of reserved server session resource 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetValue(integer $TargetValue) Set Ratio of reserved server session resource 
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TargetConfiguration extends AbstractModel
{
    /**
     * @var integer Ratio of reserved server session resource 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetValue;

    /**
     * @param integer $TargetValue Ratio of reserved server session resource 
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }
    }
}
