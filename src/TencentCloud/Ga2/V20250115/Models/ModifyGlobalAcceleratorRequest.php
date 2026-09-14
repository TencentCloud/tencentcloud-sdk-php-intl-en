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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGlobalAccelerator request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getName() Obtain <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method string getDescription() Obtain <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
 * @method string getCrossBorderType() Obtain <p>Cross-border type.</p><p>Enumeration values:</p><ul><li>HighQuality: high-quality cross-border.</li><li>Unicom: China Unicom cross-border.</li></ul>
 * @method void setCrossBorderType(string $CrossBorderType) Set <p>Cross-border type.</p><p>Enumeration values:</p><ul><li>HighQuality: high-quality cross-border.</li><li>Unicom: China Unicom cross-border.</li></ul>
 * @method boolean getCrossBorderPromiseFlag() Obtain <p>Indicates whether to complete the cross-border service commitment.</p><p>When CrossBorderType is passed in, this field must be set to true, indicating the cross-border commitment is completed.</p>
 * @method void setCrossBorderPromiseFlag(boolean $CrossBorderPromiseFlag) Set <p>Indicates whether to complete the cross-border service commitment.</p><p>When CrossBorderType is passed in, this field must be set to true, indicating the cross-border commitment is completed.</p>
 */
class ModifyGlobalAcceleratorRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var string <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
     */
    public $Description;

    /**
     * @var string <p>Cross-border type.</p><p>Enumeration values:</p><ul><li>HighQuality: high-quality cross-border.</li><li>Unicom: China Unicom cross-border.</li></ul>
     */
    public $CrossBorderType;

    /**
     * @var boolean <p>Indicates whether to complete the cross-border service commitment.</p><p>When CrossBorderType is passed in, this field must be set to true, indicating the cross-border commitment is completed.</p>
     */
    public $CrossBorderPromiseFlag;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $Name <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param string $Description <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
     * @param string $CrossBorderType <p>Cross-border type.</p><p>Enumeration values:</p><ul><li>HighQuality: high-quality cross-border.</li><li>Unicom: China Unicom cross-border.</li></ul>
     * @param boolean $CrossBorderPromiseFlag <p>Indicates whether to complete the cross-border service commitment.</p><p>When CrossBorderType is passed in, this field must be set to true, indicating the cross-border commitment is completed.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CrossBorderType",$param) and $param["CrossBorderType"] !== null) {
            $this->CrossBorderType = $param["CrossBorderType"];
        }

        if (array_key_exists("CrossBorderPromiseFlag",$param) and $param["CrossBorderPromiseFlag"] !== null) {
            $this->CrossBorderPromiseFlag = $param["CrossBorderPromiseFlag"];
        }
    }
}
