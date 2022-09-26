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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNewL7Rules request structure.
 *
 * @method array getRules() Obtain List of rules
 * @method void setRules(array $Rules) Set List of rules
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method array getIdList() Obtain List of resource IDs
 * @method void setIdList(array $IdList) Set List of resource IDs
 * @method array getVipList() Obtain List of resource IPs
 * @method void setVipList(array $VipList) Set List of resource IPs
 */
class CreateNewL7RulesRequest extends AbstractModel
{
    /**
     * @var array List of rules
     */
    public $Rules;

    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     */
    public $Business;

    /**
     * @var array List of resource IDs
     */
    public $IdList;

    /**
     * @var array List of resource IPs
     */
    public $VipList;

    /**
     * @param array $Rules List of rules
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     * @param array $IdList List of resource IDs
     * @param array $VipList List of resource IPs
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new L7RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = $param["VipList"];
        }
    }
}
