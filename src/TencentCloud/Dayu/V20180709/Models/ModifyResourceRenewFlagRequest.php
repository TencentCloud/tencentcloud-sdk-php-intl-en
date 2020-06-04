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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceRenewFlag request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `shield`: Chess Shield, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `insurance`: guarantee package, `staticpack`: non-BGP package
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `shield`: Chess Shield, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `insurance`: guarantee package, `staticpack`: non-BGP package
 * @method string getId() Obtain Resource ID
 * @method void setId(string $Id) Set Resource ID
 * @method integer getRenewFlag() Obtain Auto-renewal flag (0: manual renewal, 1: auto-renewal, 2: no renewal upon expiration)
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal flag (0: manual renewal, 1: auto-renewal, 2: no renewal upon expiration)
 */
class ModifyResourceRenewFlagRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `shield`: Chess Shield, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `insurance`: guarantee package, `staticpack`: non-BGP package
     */
    public $Business;

    /**
     * @var string Resource ID
     */
    public $Id;

    /**
     * @var integer Auto-renewal flag (0: manual renewal, 1: auto-renewal, 2: no renewal upon expiration)
     */
    public $RenewFlag;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `shield`: Chess Shield, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `insurance`: guarantee package, `staticpack`: non-BGP package
     * @param string $Id Resource ID
     * @param integer $RenewFlag Auto-renewal flag (0: manual renewal, 1: auto-renewal, 2: no renewal upon expiration)
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
