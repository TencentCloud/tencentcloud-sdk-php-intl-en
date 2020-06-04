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
 * Custom CC protection rule
 *
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method string getSmode() Obtain Matching mode. Valid values: [matching (matching mode), speedlimit (speed limiting mode)]
 * @method void setSmode(string $Smode) Set Matching mode. Valid values: [matching (matching mode), speedlimit (speed limiting mode)]
 * @method string getSetId() Obtain Policy ID
 * @method void setSetId(string $SetId) Set Policy ID
 * @method integer getFrequency() Obtain Number of requests allowed per minute
 * @method void setFrequency(integer $Frequency) Set Number of requests allowed per minute
 * @method string getExeMode() Obtain Executed policy mode. Valid values: [alg (verification code), drop (blocking)]
 * @method void setExeMode(string $ExeMode) Set Executed policy mode. Valid values: [alg (verification code), drop (blocking)]
 * @method integer getSwitch() Obtain Specifies whether the policy is activated
 * @method void setSwitch(integer $Switch) Set Specifies whether the policy is activated
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method array getRuleList() Obtain Rule list
 * @method void setRuleList(array $RuleList) Set Rule list
 * @method array getIpList() Obtain IP list. If this field is to be left empty, please pass in an empty instead of null;
 * @method void setIpList(array $IpList) Set IP list. If this field is to be left empty, please pass in an empty instead of null;
 * @method string getProtocol() Obtain CC protection type. Valid values: [http, https]
 * @method void setProtocol(string $Protocol) Set CC protection type. Valid values: [http, https]
 * @method string getRuleId() Obtain ID of the forwarding rule corresponding to the HTTPS CC protection domain name
 * @method void setRuleId(string $RuleId) Set ID of the forwarding rule corresponding to the HTTPS CC protection domain name
 * @method string getDomain() Obtain HTTPS CC protection domain name
 * @method void setDomain(string $Domain) Set HTTPS CC protection domain name
 */
class CCPolicy extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var string Matching mode. Valid values: [matching (matching mode), speedlimit (speed limiting mode)]
     */
    public $Smode;

    /**
     * @var string Policy ID
     */
    public $SetId;

    /**
     * @var integer Number of requests allowed per minute
     */
    public $Frequency;

    /**
     * @var string Executed policy mode. Valid values: [alg (verification code), drop (blocking)]
     */
    public $ExeMode;

    /**
     * @var integer Specifies whether the policy is activated
     */
    public $Switch;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var array Rule list
     */
    public $RuleList;

    /**
     * @var array IP list. If this field is to be left empty, please pass in an empty instead of null;
     */
    public $IpList;

    /**
     * @var string CC protection type. Valid values: [http, https]
     */
    public $Protocol;

    /**
     * @var string ID of the forwarding rule corresponding to the HTTPS CC protection domain name
     */
    public $RuleId;

    /**
     * @var string HTTPS CC protection domain name
     */
    public $Domain;

    /**
     * @param string $Name Policy name
     * @param string $Smode Matching mode. Valid values: [matching (matching mode), speedlimit (speed limiting mode)]
     * @param string $SetId Policy ID
     * @param integer $Frequency Number of requests allowed per minute
     * @param string $ExeMode Executed policy mode. Valid values: [alg (verification code), drop (blocking)]
     * @param integer $Switch Specifies whether the policy is activated
     * @param string $CreateTime Creation time
     * @param array $RuleList Rule list
     * @param array $IpList IP list. If this field is to be left empty, please pass in an empty instead of null;
     * @param string $Protocol CC protection type. Valid values: [http, https]
     * @param string $RuleId ID of the forwarding rule corresponding to the HTTPS CC protection domain name
     * @param string $Domain HTTPS CC protection domain name
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Smode",$param) and $param["Smode"] !== null) {
            $this->Smode = $param["Smode"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("ExeMode",$param) and $param["ExeMode"] !== null) {
            $this->ExeMode = $param["ExeMode"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new CCRule();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
