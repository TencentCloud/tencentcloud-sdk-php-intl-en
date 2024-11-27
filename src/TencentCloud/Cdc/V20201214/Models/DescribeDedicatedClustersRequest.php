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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusters request structure.
 *
 * @method array getDedicatedClusterIds() Obtain Query by one or more instance IDs. Example of instance ID: cluster-xxxxxxxx
 * @method void setDedicatedClusterIds(array $DedicatedClusterIds) Set Query by one or more instance IDs. Example of instance ID: cluster-xxxxxxxx
 * @method array getZones() Obtain Filter by AZ name.
 * @method void setZones(array $Zones) Set Filter by AZ name.
 * @method array getSiteIds() Obtain Filter by site id.
 * @method void setSiteIds(array $SiteIds) Set Filter by site id.
 * @method array getLifecycleStatuses() Obtain Filter by CDC life cycle.
 * @method void setLifecycleStatuses(array $LifecycleStatuses) Set Filter by CDC life cycle.
 * @method string getName() Obtain Name of fuzzy matching CDC
 * @method void setName(string $Name) Set Name of fuzzy matching CDC
 * @method integer getOffset() Obtain Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeDedicatedClustersRequest extends AbstractModel
{
    /**
     * @var array Query by one or more instance IDs. Example of instance ID: cluster-xxxxxxxx
     */
    public $DedicatedClusterIds;

    /**
     * @var array Filter by AZ name.
     */
    public $Zones;

    /**
     * @var array Filter by site id.
     */
    public $SiteIds;

    /**
     * @var array Filter by CDC life cycle.
     */
    public $LifecycleStatuses;

    /**
     * @var string Name of fuzzy matching CDC
     */
    public $Name;

    /**
     * @var integer Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $DedicatedClusterIds Query by one or more instance IDs. Example of instance ID: cluster-xxxxxxxx
     * @param array $Zones Filter by AZ name.
     * @param array $SiteIds Filter by site id.
     * @param array $LifecycleStatuses Filter by CDC life cycle.
     * @param string $Name Name of fuzzy matching CDC
     * @param integer $Offset Offset, 0 by default For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned pieces, 20 by default and can be up to 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("DedicatedClusterIds",$param) and $param["DedicatedClusterIds"] !== null) {
            $this->DedicatedClusterIds = $param["DedicatedClusterIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SiteIds",$param) and $param["SiteIds"] !== null) {
            $this->SiteIds = $param["SiteIds"];
        }

        if (array_key_exists("LifecycleStatuses",$param) and $param["LifecycleStatuses"] !== null) {
            $this->LifecycleStatuses = $param["LifecycleStatuses"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
