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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information referenced by the component, used to show the binding relationship between the component and resources such as edge functions. When an edge function needs to access a component (for example KV namespace), a reference relationship is created. This struct can be used to view the instance detail of the referenced resource and its associated site information.
 *
 * @method string getReferenceType() Obtain Refer to the instance type. Valid values:
<li>edge-function: Edge function.</li>
 * @method void setReferenceType(string $ReferenceType) Set Refer to the instance type. Valid values:
<li>edge-function: Edge function.</li>
 * @method string getReferenceId() Obtain Referenced instance ID. According to the value of ReferenceType, return the corresponding instance ID.
<li>When ReferenceType is edge-function: Return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

 * @method void setReferenceId(string $ReferenceId) Set Referenced instance ID. According to the value of ReferenceType, return the corresponding instance ID.
<li>When ReferenceType is edge-function: Return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

 * @method string getReferenceName() Obtain Referenced instance name. According to the value of ReferenceType, return the corresponding instance name.
<li>When ReferenceType is edge-function: Returns the edge function name.</li>

 * @method void setReferenceName(string $ReferenceName) Set Referenced instance name. According to the value of ReferenceType, return the corresponding instance name.
<li>When ReferenceType is edge-function: Returns the edge function name.</li>

 * @method string getZoneId() Obtain Site ID. Site identifier of the instance ownership that refers to the namespace.
 * @method void setZoneId(string $ZoneId) Set Site ID. Site identifier of the instance ownership that refers to the namespace.
 * @method string getZoneName() Obtain Site name. Refer to the site name of the instance ownership in namespace.
 * @method void setZoneName(string $ZoneName) Set Site name. Refer to the site name of the instance ownership in namespace.
 * @method string getAliasZoneName() Obtain Refer to the site alias of the namespace instance. If the site alias is not set, return an empty string.
 * @method void setAliasZoneName(string $AliasZoneName) Set Refer to the site alias of the namespace instance. If the site alias is not set, return an empty string.
 */
class ComponentReference extends AbstractModel
{
    /**
     * @var string Refer to the instance type. Valid values:
<li>edge-function: Edge function.</li>
     */
    public $ReferenceType;

    /**
     * @var string Referenced instance ID. According to the value of ReferenceType, return the corresponding instance ID.
<li>When ReferenceType is edge-function: Return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

     */
    public $ReferenceId;

    /**
     * @var string Referenced instance name. According to the value of ReferenceType, return the corresponding instance name.
<li>When ReferenceType is edge-function: Returns the edge function name.</li>

     */
    public $ReferenceName;

    /**
     * @var string Site ID. Site identifier of the instance ownership that refers to the namespace.
     */
    public $ZoneId;

    /**
     * @var string Site name. Refer to the site name of the instance ownership in namespace.
     */
    public $ZoneName;

    /**
     * @var string Refer to the site alias of the namespace instance. If the site alias is not set, return an empty string.
     */
    public $AliasZoneName;

    /**
     * @param string $ReferenceType Refer to the instance type. Valid values:
<li>edge-function: Edge function.</li>
     * @param string $ReferenceId Referenced instance ID. According to the value of ReferenceType, return the corresponding instance ID.
<li>When ReferenceType is edge-function: Return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

     * @param string $ReferenceName Referenced instance name. According to the value of ReferenceType, return the corresponding instance name.
<li>When ReferenceType is edge-function: Returns the edge function name.</li>

     * @param string $ZoneId Site ID. Site identifier of the instance ownership that refers to the namespace.
     * @param string $ZoneName Site name. Refer to the site name of the instance ownership in namespace.
     * @param string $AliasZoneName Refer to the site alias of the namespace instance. If the site alias is not set, return an empty string.
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
        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ReferenceId",$param) and $param["ReferenceId"] !== null) {
            $this->ReferenceId = $param["ReferenceId"];
        }

        if (array_key_exists("ReferenceName",$param) and $param["ReferenceName"] !== null) {
            $this->ReferenceName = $param["ReferenceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }
    }
}
