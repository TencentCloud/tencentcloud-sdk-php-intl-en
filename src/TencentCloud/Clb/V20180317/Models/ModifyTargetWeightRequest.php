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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetWeight request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getLocationId() Obtain Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
 * @method string getDomain() Obtain Target rule domain name. This parameter does not take effect if LocationId is specified.
 * @method void setDomain(string $Domain) Set Target rule domain name. This parameter does not take effect if LocationId is specified.
 * @method string getUrl() Obtain Target rule URL. This parameter does not take effect if LocationId is specified.
 * @method void setUrl(string $Url) Set Target rule URL. This parameter does not take effect if LocationId is specified.
 * @method array getTargets() Obtain List of real servers for which to modify the weights
 * @method void setTargets(array $Targets) Set List of real servers for which to modify the weights
 * @method integer getWeight() Obtain New forwarding weight of a real server. Value range: 0-100. Default value: 10. If the Targets.Weight parameter is set, this parameter will not take effect.
 * @method void setWeight(integer $Weight) Set New forwarding weight of a real server. Value range: 0-100. Default value: 10. If the Targets.Weight parameter is set, this parameter will not take effect.
 */
class ModifyTargetWeightRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB listener ID
     */
    public $ListenerId;

    /**
     * @var string Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
     */
    public $LocationId;

    /**
     * @var string Target rule domain name. This parameter does not take effect if LocationId is specified.
     */
    public $Domain;

    /**
     * @var string Target rule URL. This parameter does not take effect if LocationId is specified.
     */
    public $Url;

    /**
     * @var array List of real servers for which to modify the weights
     */
    public $Targets;

    /**
     * @var integer New forwarding weight of a real server. Value range: 0-100. Default value: 10. If the Targets.Weight parameter is set, this parameter will not take effect.
     */
    public $Weight;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param string $LocationId Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
     * @param string $Domain Target rule domain name. This parameter does not take effect if LocationId is specified.
     * @param string $Url Target rule URL. This parameter does not take effect if LocationId is specified.
     * @param array $Targets List of real servers for which to modify the weights
     * @param integer $Weight New forwarding weight of a real server. Value range: 0-100. Default value: 10. If the Targets.Weight parameter is set, this parameter will not take effect.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
