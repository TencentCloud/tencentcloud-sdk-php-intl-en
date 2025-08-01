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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group policy set
 *
 * @method string getVersion() Obtain The version number of the security group policy, which will automatically increase by one each time you update the security group policy, so as to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set The version number of the security group policy, which will automatically increase by one each time you update the security group policy, so as to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method array getEgress() Obtain Outbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setEgress(array $Egress) Set Outbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method array getIngress() Obtain Inbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setIngress(array $Ingress) Set Inbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
 */
class SecurityGroupPolicySet extends AbstractModel
{
    /**
     * @var string The version number of the security group policy, which will automatically increase by one each time you update the security group policy, so as to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored. 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var array Outbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Egress;

    /**
     * @var array Inbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Ingress;

    /**
     * @param string $Version The version number of the security group policy, which will automatically increase by one each time you update the security group policy, so as to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored. 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param array $Egress Outbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param array $Ingress Inbound rule. 
Note: This parameter may return null, indicating that no valid values can be obtained.
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
