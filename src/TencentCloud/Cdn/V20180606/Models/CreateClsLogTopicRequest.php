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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClsLogTopic request structure.
 *
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getChannel() Obtain Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
 * @method void setChannel(string $Channel) Set Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
 * @method array getDomainAreaConfigs() Obtain Domain name region information
 * @method void setDomainAreaConfigs(array $DomainAreaConfigs) Set Domain name region information
 */
class CreateClsLogTopicRequest extends AbstractModel
{
    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
     */
    public $Channel;

    /**
     * @var array Domain name region information
     */
    public $DomainAreaConfigs;

    /**
     * @param string $TopicName Log topic name
     * @param string $LogsetId Logset ID
     * @param string $Channel Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
     * @param array $DomainAreaConfigs Domain name region information
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("DomainAreaConfigs",$param) and $param["DomainAreaConfigs"] !== null) {
            $this->DomainAreaConfigs = [];
            foreach ($param["DomainAreaConfigs"] as $key => $value){
                $obj = new DomainAreaConfig();
                $obj->deserialize($value);
                array_push($this->DomainAreaConfigs, $obj);
            }
        }
    }
}
