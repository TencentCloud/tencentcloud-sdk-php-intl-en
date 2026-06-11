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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter criteria for querying audit instances.
 *
 * @method string getName() Obtain Filter condition values. Supported values include: InstanceId - Instance ID, InstanceName - Instance name, ProjectId - Project ID, TagKey - Tag key, Tag - Tag (separated by vertical bar, e.g., TagKey|TagValue).
 * @method void setName(string $Name) Set Filter condition values. Supported values include: InstanceId - Instance ID, InstanceName - Instance name, ProjectId - Project ID, TagKey - Tag key, Tag - Tag (separated by vertical bar, e.g., TagKey|TagValue).
 * @method boolean getExactMatch() Obtain True indicates exact match, false indicates fuzzy match.
 * @method void setExactMatch(boolean $ExactMatch) Set True indicates exact match, false indicates fuzzy match.
 * @method array getValues() Obtain Filter value.
 * @method void setValues(array $Values) Set Filter value.
 */
class AuditInstanceFilters extends AbstractModel
{
    /**
     * @var string Filter condition values. Supported values include: InstanceId - Instance ID, InstanceName - Instance name, ProjectId - Project ID, TagKey - Tag key, Tag - Tag (separated by vertical bar, e.g., TagKey|TagValue).
     */
    public $Name;

    /**
     * @var boolean True indicates exact match, false indicates fuzzy match.
     */
    public $ExactMatch;

    /**
     * @var array Filter value.
     */
    public $Values;

    /**
     * @param string $Name Filter condition values. Supported values include: InstanceId - Instance ID, InstanceName - Instance name, ProjectId - Project ID, TagKey - Tag key, Tag - Tag (separated by vertical bar, e.g., TagKey|TagValue).
     * @param boolean $ExactMatch True indicates exact match, false indicates fuzzy match.
     * @param array $Values Filter value.
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

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
