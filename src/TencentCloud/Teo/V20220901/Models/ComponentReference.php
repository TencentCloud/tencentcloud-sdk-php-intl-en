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
 * Instance information referenced by the component, used to show the binding relationship between the component and resources such as edge functions. When an edge function needs to access a component (such as a KV namespace), a reference relationship is created. This struct allows you to view the specific instance details and associated site information.
 *
 * @method string getReferenceType() Obtain Instance type to refer. Valid values:
<li>edge-function: edge function.</li>
 * @method void setReferenceType(string $ReferenceType) Set Instance type to refer. Valid values:
<li>edge-function: edge function.</li>
 * @method string getReferenceId() Obtain ID of the referenced instance. Based on the value of ReferenceType, return the corresponding instance ID:
<li>When ReferenceType is edge-function: return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

 * @method void setReferenceId(string $ReferenceId) Set ID of the referenced instance. Based on the value of ReferenceType, return the corresponding instance ID:
<li>When ReferenceType is edge-function: return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

 * @method string getReferenceName() Obtain Name of the referenced instance. Based on the value of ReferenceType, the corresponding instance name is returned:
<li>When ReferenceType is edge-function: return the edge function name.</li>

 * @method void setReferenceName(string $ReferenceName) Set Name of the referenced instance. Based on the value of ReferenceType, the corresponding instance name is returned:
<li>When ReferenceType is edge-function: return the edge function name.</li>

 * @method string getZoneId() Obtain Zone ID. Site identifier of the instance that references the namespace.
 * @method void setZoneId(string $ZoneId) Set Zone ID. Site identifier of the instance that references the namespace.
 * @method string getZoneName() Obtain Site name. The name of the site to which the instances in this namespace belong.
 * @method void setZoneName(string $ZoneName) Set Site name. The name of the site to which the instances in this namespace belong.
 * @method string getAliasZoneName() Obtain Alias of the site that the instance in the namespace belongs to. If no site alias is set, an empty string is returned.
 * @method void setAliasZoneName(string $AliasZoneName) Set Alias of the site that the instance in the namespace belongs to. If no site alias is set, an empty string is returned.
 */
class ComponentReference extends AbstractModel
{
    /**
     * @var string Instance type to refer. Valid values:
<li>edge-function: edge function.</li>
     */
    public $ReferenceType;

    /**
     * @var string ID of the referenced instance. Based on the value of ReferenceType, return the corresponding instance ID:
<li>When ReferenceType is edge-function: return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

     */
    public $ReferenceId;

    /**
     * @var string Name of the referenced instance. Based on the value of ReferenceType, the corresponding instance name is returned:
<li>When ReferenceType is edge-function: return the edge function name.</li>

     */
    public $ReferenceName;

    /**
     * @var string Zone ID. Site identifier of the instance that references the namespace.
     */
    public $ZoneId;

    /**
     * @var string Site name. The name of the site to which the instances in this namespace belong.
     */
    public $ZoneName;

    /**
     * @var string Alias of the site that the instance in the namespace belongs to. If no site alias is set, an empty string is returned.
     */
    public $AliasZoneName;

    /**
     * @param string $ReferenceType Instance type to refer. Valid values:
<li>edge-function: edge function.</li>
     * @param string $ReferenceId ID of the referenced instance. Based on the value of ReferenceType, return the corresponding instance ID:
<li>When ReferenceType is edge-function: return the edge function ID in the format of ef-2vc5oe9mzqhm.</li>

     * @param string $ReferenceName Name of the referenced instance. Based on the value of ReferenceType, the corresponding instance name is returned:
<li>When ReferenceType is edge-function: return the edge function name.</li>

     * @param string $ZoneId Zone ID. Site identifier of the instance that references the namespace.
     * @param string $ZoneName Site name. The name of the site to which the instances in this namespace belong.
     * @param string $AliasZoneName Alias of the site that the instance in the namespace belongs to. If no site alias is set, an empty string is returned.
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
