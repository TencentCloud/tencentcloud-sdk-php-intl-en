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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Computing cluster configuration
 *
 * @method string getZone() Obtain Computing cluster availability zone
 * @method void setZone(string $Zone) Set Computing cluster availability zone
 * @method string getType() Obtain Computing cluster type. Valid values:
- KUBERNETES
 * @method void setType(string $Type) Set Computing cluster type. Valid values:
- KUBERNETES
 * @method string getServiceCidr() Obtain Computing cluster Service CIDR. It must not overlap with the VPC IP range.
 * @method void setServiceCidr(string $ServiceCidr) Set Computing cluster Service CIDR. It must not overlap with the VPC IP range.
 * @method ResourceQuota getResourceQuota() Obtain Resource quota
 * @method void setResourceQuota(ResourceQuota $ResourceQuota) Set Resource quota
 * @method LimitRange getLimitRange() Obtain Limit scope
 * @method void setLimitRange(LimitRange $LimitRange) Set Limit scope
 */
class ClusterOption extends AbstractModel
{
    /**
     * @var string Computing cluster availability zone
     */
    public $Zone;

    /**
     * @var string Computing cluster type. Valid values:
- KUBERNETES
     */
    public $Type;

    /**
     * @var string Computing cluster Service CIDR. It must not overlap with the VPC IP range.
     */
    public $ServiceCidr;

    /**
     * @var ResourceQuota Resource quota
     */
    public $ResourceQuota;

    /**
     * @var LimitRange Limit scope
     */
    public $LimitRange;

    /**
     * @param string $Zone Computing cluster availability zone
     * @param string $Type Computing cluster type. Valid values:
- KUBERNETES
     * @param string $ServiceCidr Computing cluster Service CIDR. It must not overlap with the VPC IP range.
     * @param ResourceQuota $ResourceQuota Resource quota
     * @param LimitRange $LimitRange Limit scope
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceCidr",$param) and $param["ServiceCidr"] !== null) {
            $this->ServiceCidr = $param["ServiceCidr"];
        }

        if (array_key_exists("ResourceQuota",$param) and $param["ResourceQuota"] !== null) {
            $this->ResourceQuota = new ResourceQuota();
            $this->ResourceQuota->deserialize($param["ResourceQuota"]);
        }

        if (array_key_exists("LimitRange",$param) and $param["LimitRange"] !== null) {
            $this->LimitRange = new LimitRange();
            $this->LimitRange->deserialize($param["LimitRange"]);
        }
    }
}
