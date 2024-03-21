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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration information of real-time log delivery to Tencent Cloud CLS
 *
 * @method string getLogSetId() Obtain The ID of the Tencent Cloud CLS log set.
 * @method void setLogSetId(string $LogSetId) Set The ID of the Tencent Cloud CLS log set.
 * @method string getTopicId() Obtain The ID of the Tencent Cloud CLS log topic.
 * @method void setTopicId(string $TopicId) Set The ID of the Tencent Cloud CLS log topic.
 * @method string getLogSetRegion() Obtain The region of the Tencent Cloud CLS log set.
 * @method void setLogSetRegion(string $LogSetRegion) Set The region of the Tencent Cloud CLS log set.
 */
class CLSTopic extends AbstractModel
{
    /**
     * @var string The ID of the Tencent Cloud CLS log set.
     */
    public $LogSetId;

    /**
     * @var string The ID of the Tencent Cloud CLS log topic.
     */
    public $TopicId;

    /**
     * @var string The region of the Tencent Cloud CLS log set.
     */
    public $LogSetRegion;

    /**
     * @param string $LogSetId The ID of the Tencent Cloud CLS log set.
     * @param string $TopicId The ID of the Tencent Cloud CLS log topic.
     * @param string $LogSetRegion The region of the Tencent Cloud CLS log set.
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }
    }
}
