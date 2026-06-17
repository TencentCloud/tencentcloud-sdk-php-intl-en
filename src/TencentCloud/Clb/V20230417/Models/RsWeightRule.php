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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify the data type of a node weight
 *
 * @method string getListenerId() Obtain CLB listener ID.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
 * @method array getTargets() Obtain List of real servers for which weights are to be modified.
 * @method void setTargets(array $Targets) Set List of real servers for which weights are to be modified.
 * @method string getLocationId() Obtain Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
 * @method string getDomain() Obtain Domain name of the target rule. This parameter will not take effect when LocationId parameter is provided.
 * @method void setDomain(string $Domain) Set Domain name of the target rule. This parameter will not take effect when LocationId parameter is provided.
 * @method string getUrl() Obtain URL of the target rule. This parameter will not take effect when the LocationId parameter is provided.
 * @method void setUrl(string $Url) Set URL of the target rule. This parameter will not take effect when the LocationId parameter is provided.
 * @method integer getWeight() Obtain The forwarding weight of the backend service after modification, value ranges from 0 to 100. This parameter has a lower priority than the Weight parameter in the Target (https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target). The final weight value is determined by the Weight parameter in the Target, and only when the Weight parameter in the Target is empty, the Weight parameter in the RsWeightRule takes effect.
 * @method void setWeight(integer $Weight) Set The forwarding weight of the backend service after modification, value ranges from 0 to 100. This parameter has a lower priority than the Weight parameter in the Target (https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target). The final weight value is determined by the Weight parameter in the Target, and only when the Weight parameter in the Target is empty, the Weight parameter in the RsWeightRule takes effect.
 */
class RsWeightRule extends AbstractModel
{
    /**
     * @var string CLB listener ID.
     */
    public $ListenerId;

    /**
     * @var array List of real servers for which weights are to be modified.
     */
    public $Targets;

    /**
     * @var string Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
     */
    public $LocationId;

    /**
     * @var string Domain name of the target rule. This parameter will not take effect when LocationId parameter is provided.
     */
    public $Domain;

    /**
     * @var string URL of the target rule. This parameter will not take effect when the LocationId parameter is provided.
     */
    public $Url;

    /**
     * @var integer The forwarding weight of the backend service after modification, value ranges from 0 to 100. This parameter has a lower priority than the Weight parameter in the Target (https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target). The final weight value is determined by the Weight parameter in the Target, and only when the Weight parameter in the Target is empty, the Weight parameter in the RsWeightRule takes effect.
     */
    public $Weight;

    /**
     * @param string $ListenerId CLB listener ID.
     * @param array $Targets List of real servers for which weights are to be modified.
     * @param string $LocationId Forwarding rule ID, which is required only for Layer-7 rules but not for Layer-4 rules.
     * @param string $Domain Domain name of the target rule. This parameter will not take effect when LocationId parameter is provided.
     * @param string $Url URL of the target rule. This parameter will not take effect when the LocationId parameter is provided.
     * @param integer $Weight The forwarding weight of the backend service after modification, value ranges from 0 to 100. This parameter has a lower priority than the Weight parameter in the Target (https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#Target). The final weight value is determined by the Weight parameter in the Target, and only when the Weight parameter in the Target is empty, the Weight parameter in the RsWeightRule takes effect.
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
