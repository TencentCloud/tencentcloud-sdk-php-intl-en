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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter to search for certificates
 *
 * @method string getName() Obtain Filters by the field name. Values:
 - `host`: Domain name
 - `certId`: Certificate ID
 - `certAlias`: Certificate alias
 - `certType: default`: Default certificate; `upload`: External certificate; `managed`: Tencent Cloud certificate.
 * @method void setName(string $Name) Set Filters by the field name. Values:
 - `host`: Domain name
 - `certId`: Certificate ID
 - `certAlias`: Certificate alias
 - `certType: default`: Default certificate; `upload`: External certificate; `managed`: Tencent Cloud certificate.
 * @method array getValues() Obtain Filters by the field value
 * @method void setValues(array $Values) Set Filters by the field value
 * @method boolean getFuzzy() Obtain Specifies whether to enable fuzzy query, which only supports the `host` field.
If it is enabled, the length of `Value` must be 1.
 * @method void setFuzzy(boolean $Fuzzy) Set Specifies whether to enable fuzzy query, which only supports the `host` field.
If it is enabled, the length of `Value` must be 1.
 */
class CertFilter extends AbstractModel
{
    /**
     * @var string Filters by the field name. Values:
 - `host`: Domain name
 - `certId`: Certificate ID
 - `certAlias`: Certificate alias
 - `certType: default`: Default certificate; `upload`: External certificate; `managed`: Tencent Cloud certificate.
     */
    public $Name;

    /**
     * @var array Filters by the field value
     */
    public $Values;

    /**
     * @var boolean Specifies whether to enable fuzzy query, which only supports the `host` field.
If it is enabled, the length of `Value` must be 1.
     */
    public $Fuzzy;

    /**
     * @param string $Name Filters by the field name. Values:
 - `host`: Domain name
 - `certId`: Certificate ID
 - `certAlias`: Certificate alias
 - `certType: default`: Default certificate; `upload`: External certificate; `managed`: Tencent Cloud certificate.
     * @param array $Values Filters by the field value
     * @param boolean $Fuzzy Specifies whether to enable fuzzy query, which only supports the `host` field.
If it is enabled, the length of `Value` must be 1.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
