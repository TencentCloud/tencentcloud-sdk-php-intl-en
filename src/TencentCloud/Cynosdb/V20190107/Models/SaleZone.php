<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Information of a purchasable AZ
 *
 * @method string getZone() Obtain AZ name
 * @method void setZone(string $Zone) Set AZ name
 * @method integer getZoneId() Obtain Numeric ID of an AZ
 * @method void setZoneId(integer $ZoneId) Set Numeric ID of an AZ
 * @method string getZoneZh() Obtain AZ name
 * @method void setZoneZh(string $ZoneZh) Set AZ name
 * @method integer getIsSupportServerless() Obtain Whether serverless cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
 * @method void setIsSupportServerless(integer $IsSupportServerless) Set Whether serverless cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
 * @method integer getIsSupportNormal() Obtain Whether standard cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
 * @method void setIsSupportNormal(integer $IsSupportNormal) Set Whether standard cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
 * @method string getPhysicalZone() Obtain Physical zone
 * @method void setPhysicalZone(string $PhysicalZone) Set Physical zone
 * @method boolean getHasPermission() Obtain Whether the user has AZ permission.
 * @method void setHasPermission(boolean $HasPermission) Set Whether the user has AZ permission.
 * @method string getIsWholeRdmaZone() Obtain Whether it is a full-linkage RDMA AZ.
 * @method void setIsWholeRdmaZone(string $IsWholeRdmaZone) Set Whether it is a full-linkage RDMA AZ.
 * @method integer getIsSupportCreateCluster() Obtain Specifies whether a newly purchased cluster is allowed in the current availability zone. valid values: 1 (allowed), 0 (not allowed).
 * @method void setIsSupportCreateCluster(integer $IsSupportCreateCluster) Set Specifies whether a newly purchased cluster is allowed in the current availability zone. valid values: 1 (allowed), 0 (not allowed).
 */
class SaleZone extends AbstractModel
{
    /**
     * @var string AZ name
     */
    public $Zone;

    /**
     * @var integer Numeric ID of an AZ
     */
    public $ZoneId;

    /**
     * @var string AZ name
     */
    public $ZoneZh;

    /**
     * @var integer Whether serverless cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
     */
    public $IsSupportServerless;

    /**
     * @var integer Whether standard cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
     */
    public $IsSupportNormal;

    /**
     * @var string Physical zone
     */
    public $PhysicalZone;

    /**
     * @var boolean Whether the user has AZ permission.
     */
    public $HasPermission;

    /**
     * @var string Whether it is a full-linkage RDMA AZ.
     */
    public $IsWholeRdmaZone;

    /**
     * @var integer Specifies whether a newly purchased cluster is allowed in the current availability zone. valid values: 1 (allowed), 0 (not allowed).
     */
    public $IsSupportCreateCluster;

    /**
     * @param string $Zone AZ name
     * @param integer $ZoneId Numeric ID of an AZ
     * @param string $ZoneZh AZ name
     * @param integer $IsSupportServerless Whether serverless cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
     * @param integer $IsSupportNormal Whether standard cluster is supported. Valid values: <br>
`0`: No<br>
`1`: Yes
     * @param string $PhysicalZone Physical zone
     * @param boolean $HasPermission Whether the user has AZ permission.
     * @param string $IsWholeRdmaZone Whether it is a full-linkage RDMA AZ.
     * @param integer $IsSupportCreateCluster Specifies whether a newly purchased cluster is allowed in the current availability zone. valid values: 1 (allowed), 0 (not allowed).
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
