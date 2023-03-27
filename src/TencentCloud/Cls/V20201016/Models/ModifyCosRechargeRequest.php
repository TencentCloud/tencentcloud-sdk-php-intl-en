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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosRecharge request structure.
 *
 * @method string getId() Obtain COS import configuration ID.
 * @method void setId(string $Id) Set COS import configuration ID.
 * @method string getTopicId() Obtain ID of the log topic.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
 * @method string getName() Obtain COS import task name.
 * @method void setName(string $Name) Set COS import task name.
 * @method integer getEnable() Obtain Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
 * @method void setEnable(integer $Enable) Set Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
 */
class ModifyCosRechargeRequest extends AbstractModel
{
    /**
     * @var string COS import configuration ID.
     */
    public $Id;

    /**
     * @var string ID of the log topic.
     */
    public $TopicId;

    /**
     * @var string COS import task name.
     */
    public $Name;

    /**
     * @var integer Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
     */
    public $Enable;

    /**
     * @param string $Id COS import configuration ID.
     * @param string $TopicId ID of the log topic.
     * @param string $Name COS import task name.
     * @param integer $Enable Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
