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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modifies the data type of a node weight
 *
 * @method string getListenerId() Obtain CLB listener ID.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
 * @method array getTargets() Obtain List of real servers whose weights to modify.
 * @method void setTargets(array $Targets) Set List of real servers whose weights to modify.
 * @method string getLocationId() Obtain Forwarding rule ID, which is required only for layer-7 rules.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID, which is required only for layer-7 rules.
 * @method string getDomain() Obtain Target rule domain name. This parameter does not take effect if LocationId is specified
 * @method void setDomain(string $Domain) Set Target rule domain name. This parameter does not take effect if LocationId is specified
 * @method string getUrl() Obtain Target rule URL. This parameter does not take effect if LocationId is specified
 * @method void setUrl(string $Url) Set Target rule URL. This parameter does not take effect if LocationId is specified
 * @method integer getWeight() Obtain The new forwarding weight of the real server. Value range: [0, 100]. This parameter takes lower precedence than `Weight` in [`Targets`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target), which means that this parameter only takes effect when the `Weight` in `RsWeightRule` is left empty.
 * @method void setWeight(integer $Weight) Set The new forwarding weight of the real server. Value range: [0, 100]. This parameter takes lower precedence than `Weight` in [`Targets`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target), which means that this parameter only takes effect when the `Weight` in `RsWeightRule` is left empty.
 */
class RsWeightRule extends AbstractModel
{
    /**
     * @var string CLB listener ID.
     */
    public $ListenerId;

    /**
     * @var array List of real servers whose weights to modify.
     */
    public $Targets;

    /**
     * @var string Forwarding rule ID, which is required only for layer-7 rules.
     */
    public $LocationId;

    /**
     * @var string Target rule domain name. This parameter does not take effect if LocationId is specified
     */
    public $Domain;

    /**
     * @var string Target rule URL. This parameter does not take effect if LocationId is specified
     */
    public $Url;

    /**
     * @var integer The new forwarding weight of the real server. Value range: [0, 100]. This parameter takes lower precedence than `Weight` in [`Targets`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target), which means that this parameter only takes effect when the `Weight` in `RsWeightRule` is left empty.
     */
    public $Weight;

    /**
     * @param string $ListenerId CLB listener ID.
     * @param array $Targets List of real servers whose weights to modify.
     * @param string $LocationId Forwarding rule ID, which is required only for layer-7 rules.
     * @param string $Domain Target rule domain name. This parameter does not take effect if LocationId is specified
     * @param string $Url Target rule URL. This parameter does not take effect if LocationId is specified
     * @param integer $Weight The new forwarding weight of the real server. Value range: [0, 100]. This parameter takes lower precedence than `Weight` in [`Targets`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#Target), which means that this parameter only takes effect when the `Weight` in `RsWeightRule` is left empty.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
