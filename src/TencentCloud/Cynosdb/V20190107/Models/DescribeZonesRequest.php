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
 * DescribeZones request structure.
 *
 * @method boolean getIncludeVirtualZones() Obtain Whether the virtual zone is contained
 * @method void setIncludeVirtualZones(boolean $IncludeVirtualZones) Set Whether the virtual zone is contained
 * @method boolean getShowPermission() Obtain Whether to display all AZs in the region and show user permissions for each availability zone
 * @method void setShowPermission(boolean $ShowPermission) Set Whether to display all AZs in the region and show user permissions for each availability zone
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var boolean Whether the virtual zone is contained
     */
    public $IncludeVirtualZones;

    /**
     * @var boolean Whether to display all AZs in the region and show user permissions for each availability zone
     */
    public $ShowPermission;

    /**
     * @param boolean $IncludeVirtualZones Whether the virtual zone is contained
     * @param boolean $ShowPermission Whether to display all AZs in the region and show user permissions for each availability zone
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
        if (array_key_exists("IncludeVirtualZones",$param) and $param["IncludeVirtualZones"] !== null) {
            $this->IncludeVirtualZones = $param["IncludeVirtualZones"];
        }

        if (array_key_exists("ShowPermission",$param) and $param["ShowPermission"] !== null) {
            $this->ShowPermission = $param["ShowPermission"];
        }
    }
}
