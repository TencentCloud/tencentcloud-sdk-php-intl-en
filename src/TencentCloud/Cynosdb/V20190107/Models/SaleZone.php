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
 * Information on AZs for sale.
 *
 * @method string getZone() Obtain Availability zone name
 * @method void setZone(string $Zone) Set Availability zone name
 * @method integer getZoneId() Obtain Availability zone numeric ID
 * @method void setZoneId(integer $ZoneId) Set Availability zone numeric ID
 * @method string getZoneZh() Obtain AZ Chinese name
 * @method void setZoneZh(string $ZoneZh) Set AZ Chinese name
 * @method integer getIsSupportServerless() Obtain Whether serverless cluster is supported<br>
0: not supported
1: Support
 * @method void setIsSupportServerless(integer $IsSupportServerless) Set Whether serverless cluster is supported<br>
0: not supported
1: Support
 * @method integer getIsSupportNormal() Obtain Whether a general cluster is supported
0: not supported
1: Support
 * @method void setIsSupportNormal(integer $IsSupportNormal) Set Whether a general cluster is supported
0: not supported
1: Support
 * @method string getPhysicalZone() Obtain Physical zone
 * @method void setPhysicalZone(string $PhysicalZone) Set Physical zone
 * @method boolean getHasPermission() Obtain Whether the user has AZ permissions
 * @method void setHasPermission(boolean $HasPermission) Set Whether the user has AZ permissions
 * @method string getIsWholeRdmaZone() Obtain Whether it is an all-link RDMA availability zone
 * @method void setIsWholeRdmaZone(string $IsWholeRdmaZone) Set Whether it is an all-link RDMA availability zone
 * @method integer getIsSupportCreateCluster() Obtain Whether new cluster purchase is allowed in the current AZ. 1: allowed, 0: not allowed
 * @method void setIsSupportCreateCluster(integer $IsSupportCreateCluster) Set Whether new cluster purchase is allowed in the current AZ. 1: allowed, 0: not allowed
 */
class SaleZone extends AbstractModel
{
    /**
     * @var string Availability zone name
     */
    public $Zone;

    /**
     * @var integer Availability zone numeric ID
     */
    public $ZoneId;

    /**
     * @var string AZ Chinese name
     */
    public $ZoneZh;

    /**
     * @var integer Whether serverless cluster is supported<br>
0: not supported
1: Support
     */
    public $IsSupportServerless;

    /**
     * @var integer Whether a general cluster is supported
0: not supported
1: Support
     */
    public $IsSupportNormal;

    /**
     * @var string Physical zone
     */
    public $PhysicalZone;

    /**
     * @var boolean Whether the user has AZ permissions
     */
    public $HasPermission;

    /**
     * @var string Whether it is an all-link RDMA availability zone
     */
    public $IsWholeRdmaZone;

    /**
     * @var integer Whether new cluster purchase is allowed in the current AZ. 1: allowed, 0: not allowed
     */
    public $IsSupportCreateCluster;

    /**
     * @param string $Zone Availability zone name
     * @param integer $ZoneId Availability zone numeric ID
     * @param string $ZoneZh AZ Chinese name
     * @param integer $IsSupportServerless Whether serverless cluster is supported<br>
0: not supported
1: Support
     * @param integer $IsSupportNormal Whether a general cluster is supported
0: not supported
1: Support
     * @param string $PhysicalZone Physical zone
     * @param boolean $HasPermission Whether the user has AZ permissions
     * @param string $IsWholeRdmaZone Whether it is an all-link RDMA availability zone
     * @param integer $IsSupportCreateCluster Whether new cluster purchase is allowed in the current AZ. 1: allowed, 0: not allowed
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }

        if (array_key_exists("IsSupportNormal",$param) and $param["IsSupportNormal"] !== null) {
            $this->IsSupportNormal = $param["IsSupportNormal"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }

        if (array_key_exists("IsWholeRdmaZone",$param) and $param["IsWholeRdmaZone"] !== null) {
            $this->IsWholeRdmaZone = $param["IsWholeRdmaZone"];
        }

        if (array_key_exists("IsSupportCreateCluster",$param) and $param["IsSupportCreateCluster"] !== null) {
            $this->IsSupportCreateCluster = $param["IsSupportCreateCluster"];
        }
    }
}
