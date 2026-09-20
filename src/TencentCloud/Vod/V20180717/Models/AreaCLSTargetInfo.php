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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log push target.
 *
 * @method string getCLSRegion() Obtain Logset region:
<li>ap-guangzhou: Guangzhou;</li>
<li>ap-beijing: Beijing;</li>
<li>ap-chengdu: Chengdu;</li>
<li>ap-chongqing: Chongqing.</li>
<li>ap-nanjing: Nanjing;</li>
<li>ap-shanghai: Shanghai;</li>
<li>ap-singapore: Singapore.</li>
 * @method void setCLSRegion(string $CLSRegion) Set Logset region:
<li>ap-guangzhou: Guangzhou;</li>
<li>ap-beijing: Beijing;</li>
<li>ap-chengdu: Chengdu;</li>
<li>ap-chongqing: Chongqing.</li>
<li>ap-nanjing: Nanjing;</li>
<li>ap-shanghai: Shanghai;</li>
<li>ap-singapore: Singapore.</li>
 * @method string getTopicId() Obtain ID of the destination topic for delivery.
 * @method void setTopicId(string $TopicId) Set ID of the destination topic for delivery.
 * @method string getLogsetId() Obtain ID of the target set for submission.
 * @method void setLogsetId(string $LogsetId) Set ID of the target set for submission.
 * @method string getSwitch() Obtain Log delivery status.
ON: enabled.
OFF: disabled.
 * @method void setSwitch(string $Switch) Set Log delivery status.
ON: enabled.
OFF: disabled.
 */
class AreaCLSTargetInfo extends AbstractModel
{
    /**
     * @var string Logset region:
<li>ap-guangzhou: Guangzhou;</li>
<li>ap-beijing: Beijing;</li>
<li>ap-chengdu: Chengdu;</li>
<li>ap-chongqing: Chongqing.</li>
<li>ap-nanjing: Nanjing;</li>
<li>ap-shanghai: Shanghai;</li>
<li>ap-singapore: Singapore.</li>
     */
    public $CLSRegion;

    /**
     * @var string ID of the destination topic for delivery.
     */
    public $TopicId;

    /**
     * @var string ID of the target set for submission.
     */
    public $LogsetId;

    /**
     * @var string Log delivery status.
ON: enabled.
OFF: disabled.
     */
    public $Switch;

    /**
     * @param string $CLSRegion Logset region:
<li>ap-guangzhou: Guangzhou;</li>
<li>ap-beijing: Beijing;</li>
<li>ap-chengdu: Chengdu;</li>
<li>ap-chongqing: Chongqing.</li>
<li>ap-nanjing: Nanjing;</li>
<li>ap-shanghai: Shanghai;</li>
<li>ap-singapore: Singapore.</li>
     * @param string $TopicId ID of the destination topic for delivery.
     * @param string $LogsetId ID of the target set for submission.
     * @param string $Switch Log delivery status.
ON: enabled.
OFF: disabled.
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
