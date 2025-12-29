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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Component log collection configuration.
 *
 * @method string getName() Obtain Component name
 * @method void setName(string $Name) Set Component name
 * @method integer getLogLevel() Obtain Log level. for components that support dynamic adjustment, you can specify this parameter when enabling logs.
 * @method void setLogLevel(integer $LogLevel) Set Log level. for components that support dynamic adjustment, you can specify this parameter when enabling logs.
 * @method string getLogSetId() Obtain Logset ID. if not specified, auto-create.
 * @method void setLogSetId(string $LogSetId) Set Logset ID. if not specified, auto-create.
 * @method string getTopicId() Obtain Log topic ID. if not specified, auto-create.
 * @method void setTopicId(string $TopicId) Set Log topic ID. if not specified, auto-create.
 * @method string getTopicRegion() Obtain topic region. this parameter enables cross-region shipping of logs.
 * @method void setTopicRegion(string $TopicRegion) Set topic region. this parameter enables cross-region shipping of logs.
 */
class ComponentLogConfig extends AbstractModel
{
    /**
     * @var string Component name
     */
    public $Name;

    /**
     * @var integer Log level. for components that support dynamic adjustment, you can specify this parameter when enabling logs.
     */
    public $LogLevel;

    /**
     * @var string Logset ID. if not specified, auto-create.
     */
    public $LogSetId;

    /**
     * @var string Log topic ID. if not specified, auto-create.
     */
    public $TopicId;

    /**
     * @var string topic region. this parameter enables cross-region shipping of logs.
     */
    public $TopicRegion;

    /**
     * @param string $Name Component name
     * @param integer $LogLevel Log level. for components that support dynamic adjustment, you can specify this parameter when enabling logs.
     * @param string $LogSetId Logset ID. if not specified, auto-create.
     * @param string $TopicId Log topic ID. if not specified, auto-create.
     * @param string $TopicRegion topic region. this parameter enables cross-region shipping of logs.
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

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }
    }
}
