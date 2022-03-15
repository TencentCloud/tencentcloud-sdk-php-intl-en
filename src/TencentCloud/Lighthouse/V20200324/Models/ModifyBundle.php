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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Changeable packages for the instance.
 *
 * @method Price getModifyPrice() Obtain Price difference that you need to pay for the new instance package after change.
 * @method void setModifyPrice(Price $ModifyPrice) Set Price difference that you need to pay for the new instance package after change.
 * @method string getModifyBundleState() Obtain Package change status. Valid values:
<li>SOLD_OUT: packages are sold out</li>
<li>AVAILABLE: packages can be changed</li>
<li>UNAVAILABLE: packages cannot be changed currently</li>
 * @method void setModifyBundleState(string $ModifyBundleState) Set Package change status. Valid values:
<li>SOLD_OUT: packages are sold out</li>
<li>AVAILABLE: packages can be changed</li>
<li>UNAVAILABLE: packages cannot be changed currently</li>
 * @method Bundle getBundle() Obtain Package information.
 * @method void setBundle(Bundle $Bundle) Set Package information.
 * @method string getNotSupportModifyMessage() Obtain The reason of package changing failure. It’s empty if the package change status is `AVAILABLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setNotSupportModifyMessage(string $NotSupportModifyMessage) Set The reason of package changing failure. It’s empty if the package change status is `AVAILABLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ModifyBundle extends AbstractModel
{
    /**
     * @var Price Price difference that you need to pay for the new instance package after change.
     */
    public $ModifyPrice;

    /**
     * @var string Package change status. Valid values:
<li>SOLD_OUT: packages are sold out</li>
<li>AVAILABLE: packages can be changed</li>
<li>UNAVAILABLE: packages cannot be changed currently</li>
     */
    public $ModifyBundleState;

    /**
     * @var Bundle Package information.
     */
    public $Bundle;

    /**
     * @var string The reason of package changing failure. It’s empty if the package change status is `AVAILABLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $NotSupportModifyMessage;

    /**
     * @param Price $ModifyPrice Price difference that you need to pay for the new instance package after change.
     * @param string $ModifyBundleState Package change status. Valid values:
<li>SOLD_OUT: packages are sold out</li>
<li>AVAILABLE: packages can be changed</li>
<li>UNAVAILABLE: packages cannot be changed currently</li>
     * @param Bundle $Bundle Package information.
     * @param string $NotSupportModifyMessage The reason of package changing failure. It’s empty if the package change status is `AVAILABLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ModifyPrice",$param) and $param["ModifyPrice"] !== null) {
            $this->ModifyPrice = new Price();
            $this->ModifyPrice->deserialize($param["ModifyPrice"]);
        }

        if (array_key_exists("ModifyBundleState",$param) and $param["ModifyBundleState"] !== null) {
            $this->ModifyBundleState = $param["ModifyBundleState"];
        }

        if (array_key_exists("Bundle",$param) and $param["Bundle"] !== null) {
            $this->Bundle = new Bundle();
            $this->Bundle->deserialize($param["Bundle"]);
        }

        if (array_key_exists("NotSupportModifyMessage",$param) and $param["NotSupportModifyMessage"] !== null) {
            $this->NotSupportModifyMessage = $param["NotSupportModifyMessage"];
        }
    }
}
