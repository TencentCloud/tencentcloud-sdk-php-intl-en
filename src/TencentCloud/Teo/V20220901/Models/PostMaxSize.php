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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Maximum size of the file uploaded for streaming via a POST request
 *
 * @method string getSwitch() Obtain Whether to enable POST upload limit (default limit: 32 MB). Valid values: 
<li>`on`: Enable;</li>
<li>`off`: Disable.</li>
 * @method void setSwitch(string $Switch) Set Whether to enable POST upload limit (default limit: 32 MB). Valid values: 
<li>`on`: Enable;</li>
<li>`off`: Disable.</li>
 * @method integer getMaxSize() Obtain Maximum size. Value range: 1-500 MB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxSize(integer $MaxSize) Set Maximum size. Value range: 1-500 MB.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PostMaxSize extends AbstractModel
{
    /**
     * @var string Whether to enable POST upload limit (default limit: 32 MB). Valid values: 
<li>`on`: Enable;</li>
<li>`off`: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Maximum size. Value range: 1-500 MB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxSize;

    /**
     * @param string $Switch Whether to enable POST upload limit (default limit: 32 MB). Valid values: 
<li>`on`: Enable;</li>
<li>`off`: Disable.</li>
     * @param integer $MaxSize Maximum size. Value range: 1-500 MB.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
