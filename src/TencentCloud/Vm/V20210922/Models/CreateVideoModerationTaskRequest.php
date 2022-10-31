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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoModerationTask request structure.
 *
 * @method string getBizType() Obtain Business type, which is used to define a template policy.
 * @method void setBizType(string $BizType) Set Business type, which is used to define a template policy.
 * @method string getType() Obtain Task type. Values: `VIDEO` (video on demand), `LIVE_VIDEO` (live video).
 * @method void setType(string $Type) Set Task type. Values: `VIDEO` (video on demand), `LIVE_VIDEO` (live video).
 * @method array getTasks() Obtain Task information. You can create up to 10 tasks at a time.
 * @method void setTasks(array $Tasks) Set Task information. You can create up to 10 tasks at a time.
 * @method string getSeed() Obtain Key of the callback signature. For more details, see the signature documentation.
 * @method void setSeed(string $Seed) Set Key of the callback signature. For more details, see the signature documentation.
 * @method string getCallbackUrl() Obtain Callback URL that will receive moderation information. After it is configured, the non-compliant audio segments detected in moderation will be sent through this API.
 * @method void setCallbackUrl(string $CallbackUrl) Set Callback URL that will receive moderation information. After it is configured, the non-compliant audio segments detected in moderation will be sent through this API.
 * @method integer getPriority() Obtain Priority, which determines the execution order of your moderation tasks. The default value is 0.
 * @method void setPriority(integer $Priority) Set Priority, which determines the execution order of your moderation tasks. The default value is 0.
 */
class CreateVideoModerationTaskRequest extends AbstractModel
{
    /**
     * @var string Business type, which is used to define a template policy.
     */
    public $BizType;

    /**
     * @var string Task type. Values: `VIDEO` (video on demand), `LIVE_VIDEO` (live video).
     */
    public $Type;

    /**
     * @var array Task information. You can create up to 10 tasks at a time.
     */
    public $Tasks;

    /**
     * @var string Key of the callback signature. For more details, see the signature documentation.
     */
    public $Seed;

    /**
     * @var string Callback URL that will receive moderation information. After it is configured, the non-compliant audio segments detected in moderation will be sent through this API.
     */
    public $CallbackUrl;

    /**
     * @var integer Priority, which determines the execution order of your moderation tasks. The default value is 0.
     */
    public $Priority;

    /**
     * @param string $BizType Business type, which is used to define a template policy.
     * @param string $Type Task type. Values: `VIDEO` (video on demand), `LIVE_VIDEO` (live video).
     * @param array $Tasks Task information. You can create up to 10 tasks at a time.
     * @param string $Seed Key of the callback signature. For more details, see the signature documentation.
     * @param string $CallbackUrl Callback URL that will receive moderation information. After it is configured, the non-compliant audio segments detected in moderation will be sent through this API.
     * @param integer $Priority Priority, which determines the execution order of your moderation tasks. The default value is 0.
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskInput();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
