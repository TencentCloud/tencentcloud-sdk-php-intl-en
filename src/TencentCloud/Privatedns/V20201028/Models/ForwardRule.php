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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding rule details.
 *
 * @method string getDomain() Obtain Private domain name.
 * @method void setDomain(string $Domain) Set Private domain name.
 * @method string getRuleName() Obtain Forwarding rule name.
 * @method void setRuleName(string $RuleName) Set Forwarding rule name.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getRuleType() Obtain Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
 * @method void setRuleType(string $RuleType) Set Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method string getUpdatedAt() Obtain Update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time
 * @method string getEndPointName() Obtain Endpoint name.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name.
 * @method string getEndPointId() Obtain Endpoint ID.
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID.
 * @method array getForwardAddress() Obtain Forwarding address.
 * @method void setForwardAddress(array $ForwardAddress) Set Forwarding address.
 * @method array getVpcSet() Obtain List of VPCs bound to the private domain.
 * @method void setVpcSet(array $VpcSet) Set List of VPCs bound to the private domain.
 * @method string getZoneId() Obtain ID of the bound private domain.
 * @method void setZoneId(string $ZoneId) Set ID of the bound private domain.
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 */
class ForwardRule extends AbstractModel
{
    /**
     * @var string Private domain name.
     */
    public $Domain;

    /**
     * @var string Forwarding rule name.
     */
    public $RuleName;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
     */
    public $RuleType;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var string Update time
     */
    public $UpdatedAt;

    /**
     * @var string Endpoint name.
     */
    public $EndPointName;

    /**
     * @var string Endpoint ID.
     */
    public $EndPointId;

    /**
     * @var array Forwarding address.
     */
    public $ForwardAddress;

    /**
     * @var array List of VPCs bound to the private domain.
     */
    public $VpcSet;

    /**
     * @var string ID of the bound private domain.
     */
    public $ZoneId;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @param string $Domain Private domain name.
     * @param string $RuleName Forwarding rule name.
     * @param string $RuleId Rule ID
     * @param string $RuleType Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
     * @param string $CreatedAt Creation time
     * @param string $UpdatedAt Update time
     * @param string $EndPointName Endpoint name.
     * @param string $EndPointId Endpoint ID.
     * @param array $ForwardAddress Forwarding address.
     * @param array $VpcSet List of VPCs bound to the private domain.
     * @param string $ZoneId ID of the bound private domain.
     * @param array $Tags Tag
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
