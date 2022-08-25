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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network ACL quintuple
 *
 * @method array getIngress() Obtain Network ACL quintuple inbound rule.
 * @method void setIngress(array $Ingress) Set Network ACL quintuple inbound rule.
 * @method array getEgress() Obtain Network ACL quintuple outbound rule.
 * @method void setEgress(array $Egress) Set Network ACL quintuple outbound rule.
 */
class NetworkAclQuintupleEntries extends AbstractModel
{
    /**
     * @var array Network ACL quintuple inbound rule.
     */
    public $Ingress;

    /**
     * @var array Network ACL quintuple outbound rule.
     */
    public $Egress;

    /**
     * @param array $Ingress Network ACL quintuple inbound rule.
     * @param array $Egress Network ACL quintuple outbound rule.
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
        if (array_key_exists("Ingress",$param) and $param["Ingress"] !== null) {
            $this->Ingress = [];
            foreach ($param["Ingress"] as $key => $value){
                $obj = new NetworkAclQuintupleEntry();
                $obj->deserialize($value);
                array_push($this->Ingress, $obj);
            }
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = [];
            foreach ($param["Egress"] as $key => $value){
                $obj = new NetworkAclQuintupleEntry();
                $obj->deserialize($value);
                array_push($this->Egress, $obj);
            }
        }
    }
}
