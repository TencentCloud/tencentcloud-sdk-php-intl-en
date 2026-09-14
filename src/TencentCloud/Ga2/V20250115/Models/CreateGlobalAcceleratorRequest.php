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
 * CreateGlobalAccelerator request structure.
 *
 * @method string getName() Obtain <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method string getInstanceChargeType() Obtain <p>Billing mode. PREPAID: prepaid mode, i.e., Monthly Subscription. POSTPAID: postpaid, i.e., pay-as-you-go. Default: POSTPAID. Currently, only pay-as-you-go is supported.</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Billing mode. PREPAID: prepaid mode, i.e., Monthly Subscription. POSTPAID: postpaid, i.e., pay-as-you-go. Default: POSTPAID. Currently, only pay-as-you-go is supported.</p>
 * @method string getDescription() Obtain <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
 * @method string getCrossBorderType() Obtain <p>Cross-border type; HighQuality: dedicated BGP-IP cross-border; Unicom: China Unicom Direct Connect cross-border.</p>
 * @method void setCrossBorderType(string $CrossBorderType) Set <p>Cross-border type; HighQuality: dedicated BGP-IP cross-border; Unicom: China Unicom Direct Connect cross-border.</p>
 * @method boolean getCrossBorderPromiseFlag() Obtain <p>This Flag represents signing the cross-border service commitment. When using cross-border service, this field is required. True: represents signed.</p>
 * @method void setCrossBorderPromiseFlag(boolean $CrossBorderPromiseFlag) Set <p>This Flag represents signing the cross-border service commitment. When using cross-border service, this field is required. True: represents signed.</p>
 * @method array getTags() Obtain <p>Tag information.</p>
 * @method void setTags(array $Tags) Set <p>Tag information.</p>
 */
class CreateGlobalAcceleratorRequest extends AbstractModel
{
    /**
     * @var string <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var string <p>Billing mode. PREPAID: prepaid mode, i.e., Monthly Subscription. POSTPAID: postpaid, i.e., pay-as-you-go. Default: POSTPAID. Currently, only pay-as-you-go is supported.</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
     */
    public $Description;

    /**
     * @var string <p>Cross-border type; HighQuality: dedicated BGP-IP cross-border; Unicom: China Unicom Direct Connect cross-border.</p>
     */
    public $CrossBorderType;

    /**
     * @var boolean <p>This Flag represents signing the cross-border service commitment. When using cross-border service, this field is required. True: represents signed.</p>
     */
    public $CrossBorderPromiseFlag;

    /**
     * @var array <p>Tag information.</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param string $InstanceChargeType <p>Billing mode. PREPAID: prepaid mode, i.e., Monthly Subscription. POSTPAID: postpaid, i.e., pay-as-you-go. Default: POSTPAID. Currently, only pay-as-you-go is supported.</p>
     * @param string $Description <p>Description.</p><p>Parameter format: should not exceed 100 characters.</p>
     * @param string $CrossBorderType <p>Cross-border type; HighQuality: dedicated BGP-IP cross-border; Unicom: China Unicom Direct Connect cross-border.</p>
     * @param boolean $CrossBorderPromiseFlag <p>This Flag represents signing the cross-border service commitment. When using cross-border service, this field is required. True: represents signed.</p>
     * @param array $Tags <p>Tag information.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
