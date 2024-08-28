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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious request policy
 *
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method integer getPolicyType() Obtain Policy type [0: system; 1: user]
 * @method void setPolicyType(integer $PolicyType) Set Policy type [0: system; 1: user]
 * @method integer getPolicyAction() Obtain Policy action [0: alarm; 1: allow; 2:intercept + alarm]
 * @method void setPolicyAction(integer $PolicyAction) Set Policy action [0: alarm; 1: allow; 2:intercept + alarm]
 * @method integer getHostScope() Obtain Host range [1: all Professional + Ultimate Editions|2: all Ultimate Editions|0: partial hosts]
 * @method void setHostScope(integer $HostScope) Set Host range [1: all Professional + Ultimate Editions|2: all Ultimate Editions|0: partial hosts]
 * @method array getHostIds() Obtain Host ID
 * @method void setHostIds(array $HostIds) Set Host ID
 * @method array getDomains() Obtain Domain name (when used as an input parameter, it needs base64 encode.)
 * @method void setDomains(array $Domains) Set Domain name (when used as an input parameter, it needs base64 encode.)
 * @method integer getIsEnabled() Obtain Whether effective [0: effective,1: not effective]
 * @method void setIsEnabled(integer $IsEnabled) Set Whether effective [0: effective,1: not effective]
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyDesc() Obtain Policy description
 * @method void setPolicyDesc(string $PolicyDesc) Set Policy description
 * @method integer getIsDealOldEvent() Obtain Whether to process previous events [0: no|1: yes]
 * @method void setIsDealOldEvent(integer $IsDealOldEvent) Set Whether to process previous events [0: no|1: yes]
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 */
class RiskDnsPolicy extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var integer Policy type [0: system; 1: user]
     */
    public $PolicyType;

    /**
     * @var integer Policy action [0: alarm; 1: allow; 2:intercept + alarm]
     */
    public $PolicyAction;

    /**
     * @var integer Host range [1: all Professional + Ultimate Editions|2: all Ultimate Editions|0: partial hosts]
     */
    public $HostScope;

    /**
     * @var array Host ID
     */
    public $HostIds;

    /**
     * @var array Domain name (when used as an input parameter, it needs base64 encode.)
     */
    public $Domains;

    /**
     * @var integer Whether effective [0: effective,1: not effective]
     */
    public $IsEnabled;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy description
     */
    public $PolicyDesc;

    /**
     * @var integer Whether to process previous events [0: no|1: yes]
     */
    public $IsDealOldEvent;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @param string $PolicyName Policy name
     * @param integer $PolicyType Policy type [0: system; 1: user]
     * @param integer $PolicyAction Policy action [0: alarm; 1: allow; 2:intercept + alarm]
     * @param integer $HostScope Host range [1: all Professional + Ultimate Editions|2: all Ultimate Editions|0: partial hosts]
     * @param array $HostIds Host ID
     * @param array $Domains Domain name (when used as an input parameter, it needs base64 encode.)
     * @param integer $IsEnabled Whether effective [0: effective,1: not effective]
     * @param integer $PolicyId Policy ID
     * @param string $PolicyDesc Policy description
     * @param integer $IsDealOldEvent Whether to process previous events [0: no|1: yes]
     * @param string $UpdateTime Update time
     * @param integer $EventId Event ID
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("HostScope",$param) and $param["HostScope"] !== null) {
            $this->HostScope = $param["HostScope"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyDesc",$param) and $param["PolicyDesc"] !== null) {
            $this->PolicyDesc = $param["PolicyDesc"];
        }

        if (array_key_exists("IsDealOldEvent",$param) and $param["IsDealOldEvent"] !== null) {
            $this->IsDealOldEvent = $param["IsDealOldEvent"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
