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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFirewallRules request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getFirewallRules() Obtain Firewall rule list.
 * @method void setFirewallRules(array $FirewallRules) Set Firewall rule list.
 * @method integer getFirewallVersion() Obtain Current firewall version number. Every time you update the firewall rule version, it will be automatically increased by 1 to prevent the rule from expiring. If it is left empty, conflicts will not be considered.
 * @method void setFirewallVersion(integer $FirewallVersion) Set Current firewall version number. Every time you update the firewall rule version, it will be automatically increased by 1 to prevent the rule from expiring. If it is left empty, conflicts will not be considered.
 */
class DeleteFirewallRulesRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Firewall rule list.
     */
    public $FirewallRules;

    /**
     * @var integer Current firewall version number. Every time you update the firewall rule version, it will be automatically increased by 1 to prevent the rule from expiring. If it is left empty, conflicts will not be considered.
     */
    public $FirewallVersion;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $FirewallRules Firewall rule list.
     * @param integer $FirewallVersion Current firewall version number. Every time you update the firewall rule version, it will be automatically increased by 1 to prevent the rule from expiring. If it is left empty, conflicts will not be considered.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FirewallRules",$param) and $param["FirewallRules"] !== null) {
            $this->FirewallRules = [];
            foreach ($param["FirewallRules"] as $key => $value){
                $obj = new FirewallRule();
                $obj->deserialize($value);
                array_push($this->FirewallRules, $obj);
            }
        }

        if (array_key_exists("FirewallVersion",$param) and $param["FirewallVersion"] !== null) {
            $this->FirewallVersion = $param["FirewallVersion"];
        }
    }
}
