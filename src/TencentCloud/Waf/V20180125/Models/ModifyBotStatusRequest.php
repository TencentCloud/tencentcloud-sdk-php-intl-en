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
 * ModifyBotStatus request structure.
 *
 * @method string getCategory() Obtain Category
 * @method void setCategory(string $Category) Set Category
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method boolean getIsVersionFour() Obtain Whether it is the bot 4.0 version
 * @method void setIsVersionFour(boolean $IsVersionFour) Set Whether it is the bot 4.0 version
 * @method string getBotVersion() Obtain Enter the bot version number, scenario-based version: 4.1.0
 * @method void setBotVersion(string $BotVersion) Set Enter the bot version number, scenario-based version: 4.1.0
 * @method array getDomainList() Obtain List of domain names on which bot detection is to be enabled or disabled in batch
 * @method void setDomainList(array $DomainList) Set List of domain names on which bot detection is to be enabled or disabled in batch
 */
class ModifyBotStatusRequest extends AbstractModel
{
    /**
     * @var string Category
     */
    public $Category;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var boolean Whether it is the bot 4.0 version
     */
    public $IsVersionFour;

    /**
     * @var string Enter the bot version number, scenario-based version: 4.1.0
     */
    public $BotVersion;

    /**
     * @var array List of domain names on which bot detection is to be enabled or disabled in batch
     */
    public $DomainList;

    /**
     * @param string $Category Category
     * @param string $Status Status
     * @param string $Domain Domain name
     * @param string $InstanceID Instance ID
     * @param boolean $IsVersionFour Whether it is the bot 4.0 version
     * @param string $BotVersion Enter the bot version number, scenario-based version: 4.1.0
     * @param array $DomainList List of domain names on which bot detection is to be enabled or disabled in batch
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("IsVersionFour",$param) and $param["IsVersionFour"] !== null) {
            $this->IsVersionFour = $param["IsVersionFour"];
        }

        if (array_key_exists("BotVersion",$param) and $param["BotVersion"] !== null) {
            $this->BotVersion = $param["BotVersion"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}
