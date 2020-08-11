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
 * CreateNewL7RulesUpload request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
 * @method array getIdList() Obtain Resource ID list.
 * @method void setIdList(array $IdList) Set Resource ID list.
 * @method array getVipList() Obtain Resource IP address list.
 * @method void setVipList(array $VipList) Set Resource IP address list.
 * @method array getRules() Obtain Rule list.
 * @method void setRules(array $Rules) Set Rule list.
 */
class CreateNewL7RulesUploadRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
     */
    public $Business;

    /**
     * @var array Resource ID list.
     */
    public $IdList;

    /**
     * @var array Resource IP address list.
     */
    public $VipList;

    /**
     * @var array Rule list.
     */
    public $Rules;

    /**
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
     * @param array $IdList Resource ID list.
     * @param array $VipList Resource IP address list.
     * @param array $Rules Rule list.
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

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = $param["VipList"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new L7RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
