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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method HttpCallbackConfig getInterfaceConfig() Obtain 
 * @method void setInterfaceConfig(HttpCallbackConfig $InterfaceConfig) Set 
 * @method array getHangupTypes() Obtain 
 * @method void setHangupTypes(array $HangupTypes) Set 
 * @method array getCallTags() Obtain 
 * @method void setCallTags(array $CallTags) Set 
 * @method string getTriggerMode() Obtain 
 * @method void setTriggerMode(string $TriggerMode) Set 
 */
class TriggerStrategyItem extends AbstractModel
{
    /**
     * @var HttpCallbackConfig 
     */
    public $InterfaceConfig;

    /**
     * @var array 
     */
    public $HangupTypes;

    /**
     * @var array 
     */
    public $CallTags;

    /**
     * @var string 
     */
    public $TriggerMode;

    /**
     * @param HttpCallbackConfig $InterfaceConfig 
     * @param array $HangupTypes 
     * @param array $CallTags 
     * @param string $TriggerMode 
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
        if (array_key_exists("InterfaceConfig",$param) and $param["InterfaceConfig"] !== null) {
            $this->InterfaceConfig = new HttpCallbackConfig();
            $this->InterfaceConfig->deserialize($param["InterfaceConfig"]);
        }

        if (array_key_exists("HangupTypes",$param) and $param["HangupTypes"] !== null) {
            $this->HangupTypes = $param["HangupTypes"];
        }

        if (array_key_exists("CallTags",$param) and $param["CallTags"] !== null) {
            $this->CallTags = [];
            foreach ($param["CallTags"] as $key => $value){
                $obj = new RetryTagItem();
                $obj->deserialize($value);
                array_push($this->CallTags, $obj);
            }
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }
    }
}
