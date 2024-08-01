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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SmartOptimizerPolicy
 *
 * @method string getInherit() Obtain Whether to inherit it
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInherit(string $Inherit) Set Whether to inherit it
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResources() Obtain ResourceInfo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResources(array $Resources) Set ResourceInfo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartOptimizerWrittenPolicy getWritten() Obtain SmartOptimizerWrittenPolicy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWritten(SmartOptimizerWrittenPolicy $Written) Set SmartOptimizerWrittenPolicy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartOptimizerLifecyclePolicy getLifecycle() Obtain SmartOptimizerLifecyclePolicy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifecycle(SmartOptimizerLifecyclePolicy $Lifecycle) Set SmartOptimizerLifecyclePolicy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartOptimizerIndexPolicy getIndex() Obtain SmartOptimizerIndexPolicy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndex(SmartOptimizerIndexPolicy $Index) Set SmartOptimizerIndexPolicy
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmartOptimizerPolicy extends AbstractModel
{
    /**
     * @var string Whether to inherit it
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Inherit;

    /**
     * @var array ResourceInfo
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resources;

    /**
     * @var SmartOptimizerWrittenPolicy SmartOptimizerWrittenPolicy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Written;

    /**
     * @var SmartOptimizerLifecyclePolicy SmartOptimizerLifecyclePolicy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Lifecycle;

    /**
     * @var SmartOptimizerIndexPolicy SmartOptimizerIndexPolicy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Index;

    /**
     * @param string $Inherit Whether to inherit it
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Resources ResourceInfo
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartOptimizerWrittenPolicy $Written SmartOptimizerWrittenPolicy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartOptimizerLifecyclePolicy $Lifecycle SmartOptimizerLifecyclePolicy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartOptimizerIndexPolicy $Index SmartOptimizerIndexPolicy
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
        if (array_key_exists("Inherit",$param) and $param["Inherit"] !== null) {
            $this->Inherit = $param["Inherit"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Written",$param) and $param["Written"] !== null) {
            $this->Written = new SmartOptimizerWrittenPolicy();
            $this->Written->deserialize($param["Written"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new SmartOptimizerLifecyclePolicy();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = new SmartOptimizerIndexPolicy();
            $this->Index->deserialize($param["Index"]);
        }
    }
}
