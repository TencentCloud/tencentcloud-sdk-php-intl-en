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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Icon erasing configuration.
 *
 * @method string getSwitch() Obtain Capability configuration enabling status. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set Capability configuration enabling status. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getImageAreaBoxes() Obtain Multiple box selection areas to be erased. Note: The value array of this parameter can contain up to 2 values.
Note: This field may return null, indicating that no valid value can be obtained.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setImageAreaBoxes(array $ImageAreaBoxes) Set Multiple box selection areas to be erased. Note: The value array of this parameter can contain up to 2 values.
Note: This field may return null, indicating that no valid value can be obtained.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class ImageEraseLogoConfig extends AbstractModel
{
    /**
     * @var string Capability configuration enabling status. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var array Multiple box selection areas to be erased. Note: The value array of this parameter can contain up to 2 values.
Note: This field may return null, indicating that no valid value can be obtained.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ImageAreaBoxes;

    /**
     * @param string $Switch Capability configuration enabling status. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ImageAreaBoxes Multiple box selection areas to be erased. Note: The value array of this parameter can contain up to 2 values.
Note: This field may return null, indicating that no valid value can be obtained.

Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("ImageAreaBoxes",$param) and $param["ImageAreaBoxes"] !== null) {
            $this->ImageAreaBoxes = [];
            foreach ($param["ImageAreaBoxes"] as $key => $value){
                $obj = new ImageAreaBoxInfo();
                $obj->deserialize($value);
                array_push($this->ImageAreaBoxes, $obj);
            }
        }
    }
}
