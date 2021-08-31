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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic package usage
 *
 * @method string getFlowType() Obtain Traffic package type, Valid values: ZONE (private domain); TRAFFIC (DNS traffic package)
 * @method void setFlowType(string $FlowType) Set Traffic package type, Valid values: ZONE (private domain); TRAFFIC (DNS traffic package)
 * @method integer getTotalQuantity() Obtain Traffic package quota
 * @method void setTotalQuantity(integer $TotalQuantity) Set Traffic package quota
 * @method integer getAvailableQuantity() Obtain Available quota of traffic package
 * @method void setAvailableQuantity(integer $AvailableQuantity) Set Available quota of traffic package
 */
class FlowUsage extends AbstractModel
{
    /**
     * @var string Traffic package type, Valid values: ZONE (private domain); TRAFFIC (DNS traffic package)
     */
    public $FlowType;

    /**
     * @var integer Traffic package quota
     */
    public $TotalQuantity;

    /**
     * @var integer Available quota of traffic package
     */
    public $AvailableQuantity;

    /**
     * @param string $FlowType Traffic package type, Valid values: ZONE (private domain); TRAFFIC (DNS traffic package)
     * @param integer $TotalQuantity Traffic package quota
     * @param integer $AvailableQuantity Available quota of traffic package
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
        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("TotalQuantity",$param) and $param["TotalQuantity"] !== null) {
            $this->TotalQuantity = $param["TotalQuantity"];
        }

        if (array_key_exists("AvailableQuantity",$param) and $param["AvailableQuantity"] !== null) {
            $this->AvailableQuantity = $param["AvailableQuantity"];
        }
    }
}
