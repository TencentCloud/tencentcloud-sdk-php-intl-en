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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web Application Task Detail
 *
 * @method string getNetworkAppId() Obtain Web application Id
 * @method void setNetworkAppId(string $NetworkAppId) Set Web application Id
 * @method string getName() Obtain network app name
 * @method void setName(string $Name) Set network app name
 * @method string getRegion() Obtain Region code
 * @method void setRegion(string $Region) Set Region code
 * @method string getTopicId() Obtain log topic id
 * @method void setTopicId(string $TopicId) Set log topic id
 * @method string getLogsetId() Obtain Logset id
 * @method void setLogsetId(string $LogsetId) Set Logset id
 * @method string getToken() Obtain Application token
 * @method void setToken(string $Token) Set Application token
 * @method integer getUin() Obtain Host Account ID
 * @method void setUin(integer $Uin) Set Host Account ID
 * @method integer getSubUin() Obtain Sub-account ID
 * @method void setSubUin(integer $SubUin) Set Sub-account ID
 * @method integer getCreateTime() Obtain Creation time (a second-level timestamp)
 * @method void setCreateTime(integer $CreateTime) Set Creation time (a second-level timestamp)
 * @method integer getUpdateTime() Obtain Update time (a second-level timestamp)
 * @method void setUpdateTime(integer $UpdateTime) Set Update time (a second-level timestamp)
 */
class NetworkApplicationDetail extends AbstractModel
{
    /**
     * @var string Web application Id
     */
    public $NetworkAppId;

    /**
     * @var string network app name
     */
    public $Name;

    /**
     * @var string Region code
     */
    public $Region;

    /**
     * @var string log topic id
     */
    public $TopicId;

    /**
     * @var string Logset id
     */
    public $LogsetId;

    /**
     * @var string Application token
     */
    public $Token;

    /**
     * @var integer Host Account ID
     */
    public $Uin;

    /**
     * @var integer Sub-account ID
     */
    public $SubUin;

    /**
     * @var integer Creation time (a second-level timestamp)
     */
    public $CreateTime;

    /**
     * @var integer Update time (a second-level timestamp)
     */
    public $UpdateTime;

    /**
     * @param string $NetworkAppId Web application Id
     * @param string $Name network app name
     * @param string $Region Region code
     * @param string $TopicId log topic id
     * @param string $LogsetId Logset id
     * @param string $Token Application token
     * @param integer $Uin Host Account ID
     * @param integer $SubUin Sub-account ID
     * @param integer $CreateTime Creation time (a second-level timestamp)
     * @param integer $UpdateTime Update time (a second-level timestamp)
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
        if (array_key_exists("NetworkAppId",$param) and $param["NetworkAppId"] !== null) {
            $this->NetworkAppId = $param["NetworkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
