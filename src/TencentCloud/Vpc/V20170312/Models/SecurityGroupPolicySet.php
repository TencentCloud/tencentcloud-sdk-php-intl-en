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
 * Security group policy set
 *
 * @method string getVersion() Obtain The version of the security group policy. The version number is automatically increased by one each time users update the security policy, to prevent the expiration of updated routing policies. Conflict is ignored if it is left empty.
 * @method void setVersion(string $Version) Set The version of the security group policy. The version number is automatically increased by one each time users update the security policy, to prevent the expiration of updated routing policies. Conflict is ignored if it is left empty.
 * @method array getEgress() Obtain Outbound policy.
 * @method void setEgress(array $Egress) Set Outbound policy.
 * @method array getIngress() Obtain Inbound policy.
 * @method void setIngress(array $Ingress) Set Inbound policy.
 */
class SecurityGroupPolicySet extends AbstractModel
{
    /**
     * @var string The version of the security group policy. The version number is automatically increased by one each time users update the security policy, to prevent the expiration of updated routing policies. Conflict is ignored if it is left empty.
     */
    public $Version;

    /**
     * @var array Outbound policy.
     */
    public $Egress;

    /**
     * @var array Inbound policy.
     */
    public $Ingress;

    /**
     * @param string $Version The version of the security group policy. The version number is automatically increased by one each time users update the security policy, to prevent the expiration of updated routing policies. Conflict is ignored if it is left empty.
     * @param array $Egress Outbound policy.
     * @param array $Ingress Inbound policy.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = [];
            foreach ($param["Egress"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->Egress, $obj);
            }
        }

        if (array_key_exists("Ingress",$param) and $param["Ingress"] !== null) {
            $this->Ingress = [];
            foreach ($param["Ingress"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->Ingress, $obj);
            }
        }
    }
}
