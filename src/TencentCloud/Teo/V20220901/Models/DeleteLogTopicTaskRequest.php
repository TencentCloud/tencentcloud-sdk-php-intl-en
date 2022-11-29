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
 * DeleteLogTopicTask request structure.
 *
 * @method string getTopicId() Obtain ID of the shipping task to be deleted.
 * @method void setTopicId(string $TopicId) Set ID of the shipping task to be deleted.
 * @method string getLogSetRegion() Obtain Region of the logset to be shipped. This field is only required when you configure CLS shipping tasks.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset to be shipped. This field is only required when you configure CLS shipping tasks.
 */
class DeleteLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the shipping task to be deleted.
     */
    public $TopicId;

    /**
     * @var string Region of the logset to be shipped. This field is only required when you configure CLS shipping tasks.
     */
    public $LogSetRegion;

    /**
     * @param string $TopicId ID of the shipping task to be deleted.
     * @param string $LogSetRegion Region of the logset to be shipped. This field is only required when you configure CLS shipping tasks.
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

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }
    }
}
