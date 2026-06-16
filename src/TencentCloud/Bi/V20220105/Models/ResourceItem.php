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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * resource
 *
 * @method string getResourceName() Obtain Resource name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Resource name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getResourceValue() Obtain resource value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceValue(boolean $ResourceValue) Set resource value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCanChange() Obtain Changeable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanChange(boolean $CanChange) Set Changeable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTips() Obtain Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTips(string $Tips) Set Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceItem extends AbstractModel
{
    /**
     * @var string Resource name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceName;

    /**
     * @var boolean resource value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceValue;

    /**
     * @var boolean Changeable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanChange;

    /**
     * @var string Prompt message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tips;

    /**
     * @param string $ResourceName Resource name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ResourceValue resource value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CanChange Changeable
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tips Prompt message
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceValue",$param) and $param["ResourceValue"] !== null) {
            $this->ResourceValue = $param["ResourceValue"];
        }

        if (array_key_exists("CanChange",$param) and $param["CanChange"] !== null) {
            $this->CanChange = $param["CanChange"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
