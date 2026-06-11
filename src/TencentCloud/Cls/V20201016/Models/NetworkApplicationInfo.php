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
 * Network application task info
 *
 * @method string getNetworkAppId() Obtain Web application Id
 * @method void setNetworkAppId(string $NetworkAppId) Set Web application Id
 * @method string getName() Obtain Network app name
 * @method void setName(string $Name) Set Network app name
 * @method string getRegion() Obtain Region code
 * @method void setRegion(string $Region) Set Region code
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method string getLogsetId() Obtain log set id
 * @method void setLogsetId(string $LogsetId) Set log set id
 * @method integer getUin() Obtain Host Account ID
 * @method void setUin(integer $Uin) Set Host Account ID
 * @method integer getSubUin() Obtain Sub-account ID
 * @method void setSubUin(integer $SubUin) Set Sub-account ID
 * @method integer getCreateTime() Obtain Creation time, timestamp in seconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time, timestamp in seconds
 * @method integer getUpdateTime() Obtain Update time (second-level timestamp)
 * @method void setUpdateTime(integer $UpdateTime) Set Update time (second-level timestamp)
 */
class NetworkApplicationInfo extends AbstractModel
{
    /**
     * @var string Web application Id
     */
    public $NetworkAppId;

    /**
     * @var string Network app name
     */
    public $Name;

    /**
     * @var string Region code
     */
    public $Region;

    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var string log set id
     */
    public $LogsetId;

    /**
     * @var integer Host Account ID
     */
    public $Uin;

    /**
     * @var integer Sub-account ID
     */
    public $SubUin;

    /**
     * @var integer Creation time, timestamp in seconds
     */
    public $CreateTime;

    /**
     * @var integer Update time (second-level timestamp)
     */
    public $UpdateTime;

    /**
     * @param string $NetworkAppId Web application Id
     * @param string $Name Network app name
     * @param string $Region Region code
     * @param string $TopicId Log topic id
     * @param string $LogsetId log set id
     * @param integer $Uin Host Account ID
     * @param integer $SubUin Sub-account ID
     * @param integer $CreateTime Creation time, timestamp in seconds
     * @param integer $UpdateTime Update time (second-level timestamp)
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
