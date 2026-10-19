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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource list filtering.
 *
 * @method string getName() Obtain Query field name. Valid values: resourceName (resource name), resourceId (resource ID), resourceType (resource type), resourceRegion (resource region), resourceDelete (deletion status; 0 indicates not deleted and 1 indicates deleted), and resourceRegionAndZone (region and availability zone).
 * @method void setName(string $Name) Set Query field name. Valid values: resourceName (resource name), resourceId (resource ID), resourceType (resource type), resourceRegion (resource region), resourceDelete (deletion status; 0 indicates not deleted and 1 indicates deleted), and resourceRegionAndZone (region and availability zone).
 * @method array getValues() Obtain Queried field values.
 * @method void setValues(array $Values) Set Queried field values.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Query field name. Valid values: resourceName (resource name), resourceId (resource ID), resourceType (resource type), resourceRegion (resource region), resourceDelete (deletion status; 0 indicates not deleted and 1 indicates deleted), and resourceRegionAndZone (region and availability zone).
     */
    public $Name;

    /**
     * @var array Queried field values.
     */
    public $Values;

    /**
     * @param string $Name Query field name. Valid values: resourceName (resource name), resourceId (resource ID), resourceType (resource type), resourceRegion (resource region), resourceDelete (deletion status; 0 indicates not deleted and 1 indicates deleted), and resourceRegionAndZone (region and availability zone).
     * @param array $Values Queried field values.
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
    }
}
