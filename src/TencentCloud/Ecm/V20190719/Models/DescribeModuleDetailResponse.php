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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModuleDetail response structure.
 *
 * @method Module getModule() Obtain Module details. For more information, see `ModuleInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModule(Module $Module) Set Module details. For more information, see `ModuleInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ModuleCounter getModuleCounter() Obtain Module statistics. For more information, see `ModuleCounterInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModuleCounter(ModuleCounter $ModuleCounter) Set Module statistics. For more information, see `ModuleCounterInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeModuleDetailResponse extends AbstractModel
{
    /**
     * @var Module Module details. For more information, see `ModuleInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Module;

    /**
     * @var ModuleCounter Module statistics. For more information, see `ModuleCounterInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleCounter;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param Module $Module Module details. For more information, see `ModuleInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ModuleCounter $ModuleCounter Module statistics. For more information, see `ModuleCounterInfo` in the data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = new Module();
            $this->Module->deserialize($param["Module"]);
        }

        if (array_key_exists("ModuleCounter",$param) and $param["ModuleCounter"] !== null) {
            $this->ModuleCounter = new ModuleCounter();
            $this->ModuleCounter->deserialize($param["ModuleCounter"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
