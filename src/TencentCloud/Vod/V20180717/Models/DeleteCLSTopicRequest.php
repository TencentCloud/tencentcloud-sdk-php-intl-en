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
 * DeleteCLSTopic request structure.
 *
 * @method string getCLSRegion() Obtain The region to which the log set belongs, the values are: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> < li>ap-chongqing: Chongqing; </li> <li>ap-nanjing: Nanjing; </li> <li>ap-shanghai: Shanghai; </li> <li>ap-singapore: Singapore. </li>
 * @method void setCLSRegion(string $CLSRegion) Set The region to which the log set belongs, the values are: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> < li>ap-chongqing: Chongqing; </li> <li>ap-nanjing: Nanjing; </li> <li>ap-shanghai: Shanghai; </li> <li>ap-singapore: Singapore. </li>
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 */
class DeleteCLSTopicRequest extends AbstractModel
{
    /**
     * @var string The region to which the log set belongs, the values are: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> < li>ap-chongqing: Chongqing; </li> <li>ap-nanjing: Nanjing; </li> <li>ap-shanghai: Shanghai; </li> <li>ap-singapore: Singapore. </li>
     */
    public $CLSRegion;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @param string $CLSRegion The region to which the log set belongs, the values are: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> < li>ap-chongqing: Chongqing; </li> <li>ap-nanjing: Nanjing; </li> <li>ap-shanghai: Shanghai; </li> <li>ap-singapore: Singapore. </li>
     * @param string $TopicId Log topic ID.
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
    }
}
