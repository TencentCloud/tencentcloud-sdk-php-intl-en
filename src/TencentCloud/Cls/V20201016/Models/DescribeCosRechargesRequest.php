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
 * DescribeCosRecharges request structure.
 *
 * @method string getTopicId() Obtain ID of the log topic.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
 * @method integer getStatus() Obtain Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
 * @method void setStatus(integer $Status) Set Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
 * @method integer getEnable() Obtain Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
 * @method void setEnable(integer $Enable) Set Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
 */
class DescribeCosRechargesRequest extends AbstractModel
{
    /**
     * @var string ID of the log topic.
     */
    public $TopicId;

    /**
     * @var integer Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
     */
    public $Status;

    /**
     * @var integer Whether the configuration is enabled. `0`: Not enabled, `1`: Enabled
     */
    public $Enable;

    /**
     * @param string $TopicId ID of the log topic.
     * @param integer $Status Status. `0`: Created, `1`: Running, `2`: Stopped, `3`: Completed, `4`: Run failed
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
