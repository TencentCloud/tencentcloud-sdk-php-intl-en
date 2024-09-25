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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHostMode request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Domain ID
 * @method void setDomainId(string $DomainId) Set Domain ID
 * @method integer getMode() Obtain Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
 * @method void setMode(integer $Mode) Set Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
 * @method integer getType() Obtain 0: Change protection mode, 1: Modify AI
 * @method void setType(integer $Type) Set 0: Change protection mode, 1: Modify AI
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getEdition() Obtain Instance type
 * @method void setEdition(string $Edition) Set Instance type
 */
class ModifyHostModeRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Domain ID
     */
    public $DomainId;

    /**
     * @var integer Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
     */
    public $Mode;

    /**
     * @var integer 0: Change protection mode, 1: Modify AI
     */
    public $Type;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Instance type
     */
    public $Edition;

    /**
     * @param string $Domain Domain name
     * @param string $DomainId Domain ID
     * @param integer $Mode Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
     * @param integer $Type 0: Change protection mode, 1: Modify AI
     * @param string $InstanceID Instance ID
     * @param string $Edition Instance type
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }
    }
}
