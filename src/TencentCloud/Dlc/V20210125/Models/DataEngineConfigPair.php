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
 * Engine configurations
 *
 * @method string getConfigItem() Obtain Configuration items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigItem(string $ConfigItem) Set Configuration items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigValue() Obtain Configuration values
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigValue(string $ConfigValue) Set Configuration values
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataEngineConfigPair extends AbstractModel
{
    /**
     * @var string Configuration items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigItem;

    /**
     * @var string Configuration values
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigValue;

    /**
     * @param string $ConfigItem Configuration items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigValue Configuration values
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
        if (array_key_exists("ConfigItem",$param) and $param["ConfigItem"] !== null) {
            $this->ConfigItem = $param["ConfigItem"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }
    }
}
