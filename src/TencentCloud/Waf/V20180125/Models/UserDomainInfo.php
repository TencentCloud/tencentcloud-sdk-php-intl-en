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
 * SaaS and CLB information
 *
 * @method integer getAppid() Obtain User ID
 * @method void setAppid(integer $Appid) Set User ID
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Domain ID
 * @method void setDomainId(string $DomainId) Set Domain ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getEdition() Obtain WAF type
 * @method void setEdition(string $Edition) Set WAF type
 * @method string getLevel() Obtain Version

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Version

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWriteConfig() Obtain Switch for Specified Domain Access Log Fields

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWriteConfig(string $WriteConfig) Set Switch for Specified Domain Access Log Fields

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCls() Obtain Whether to Write the CLS Switch for the Specified Domain 1: Yes, 0: No

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCls(integer $Cls) Set Whether to Write the CLS Switch for the Specified Domain 1: Yes, 0: No

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloudType() Obtain Marks if it is hybrid cloud access. Hybrid indicates a hybrid cloud access domain

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudType(string $CloudType) Set Marks if it is hybrid cloud access. Hybrid indicates a hybrid cloud access domain

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlbType() Obtain CLB WAF type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlbType(string $AlbType) Set CLB WAF type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBotStatus() Obtain Bot detection enabling status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotStatus(integer $BotStatus) Set Bot detection enabling status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApiStatus() Obtain API enabling status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiStatus(integer $ApiStatus) Set API enabling status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserDomainInfo extends AbstractModel
{
    /**
     * @var integer User ID
     */
    public $Appid;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Domain ID
     */
    public $DomainId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string WAF type
     */
    public $Edition;

    /**
     * @var string Version

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Switch for Specified Domain Access Log Fields

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WriteConfig;

    /**
     * @var integer Whether to Write the CLS Switch for the Specified Domain 1: Yes, 0: No

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cls;

    /**
     * @var string Marks if it is hybrid cloud access. Hybrid indicates a hybrid cloud access domain

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudType;

    /**
     * @var string CLB WAF type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlbType;

    /**
     * @var integer Bot detection enabling status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotStatus;

    /**
     * @var integer API enabling status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiStatus;

    /**
     * @param integer $Appid User ID
     * @param string $Domain Domain name
     * @param string $DomainId Domain ID
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Edition WAF type
     * @param string $Level Version

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WriteConfig Switch for Specified Domain Access Log Fields

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cls Whether to Write the CLS Switch for the Specified Domain 1: Yes, 0: No

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloudType Marks if it is hybrid cloud access. Hybrid indicates a hybrid cloud access domain

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlbType CLB WAF type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BotStatus Bot detection enabling status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApiStatus API enabling status
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WriteConfig",$param) and $param["WriteConfig"] !== null) {
            $this->WriteConfig = $param["WriteConfig"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }
    }
}
