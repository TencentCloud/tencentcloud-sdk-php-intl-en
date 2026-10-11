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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOrderAttribute request structure.
 *
 * @method integer getLicenseType() Obtain Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
 * @method void setLicenseType(integer $LicenseType) Set Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getAttrName() Obtain Editable attribute name. Currently supported values: 
Resource alias
projectId Project ID
 * @method void setAttrName(string $AttrName) Set Editable attribute name. Currently supported values: 
Resource alias
projectId Project ID
 * @method string getAttrValue() Obtain Attribute value
When AttrName is alias, any string with a maximum length of 15 characters.
When AttrName is projectId, the project ID must actually exist.
 * @method void setAttrValue(string $AttrValue) Set Attribute value
When AttrName is alias, any string with a maximum length of 15 characters.
When AttrName is projectId, the project ID must actually exist.
 */
class ModifyOrderAttributeRequest extends AbstractModel
{
    /**
     * @var integer Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
     */
    public $LicenseType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Editable attribute name. Currently supported values: 
Resource alias
projectId Project ID
     */
    public $AttrName;

    /**
     * @var string Attribute value
When AttrName is alias, any string with a maximum length of 15 characters.
When AttrName is projectId, the project ID must actually exist.
     */
    public $AttrValue;

    /**
     * @param integer $LicenseType Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
     * @param string $ResourceId Resource ID
     * @param string $AttrName Editable attribute name. Currently supported values: 
Resource alias
projectId Project ID
     * @param string $AttrValue Attribute value
When AttrName is alias, any string with a maximum length of 15 characters.
When AttrName is projectId, the project ID must actually exist.
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
        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("AttrValue",$param) and $param["AttrValue"] !== null) {
            $this->AttrValue = $param["AttrValue"];
        }
    }
}
