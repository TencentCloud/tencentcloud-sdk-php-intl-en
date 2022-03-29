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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoModerationTask request structure.
 *
 * @method string getType() Obtain This parameter is used to pass in the task type of a moderation task. Valid values: **VIDEO** (video on demand), **LIVE_VIDEO** (video live streaming).
 * @method void setType(string $Type) Set This parameter is used to pass in the task type of a moderation task. Valid values: **VIDEO** (video on demand), **LIVE_VIDEO** (video live streaming).
 * @method array getTasks() Obtain This field indicates the input video moderation task information. For the specific input content, see the detailed description of the `TaskInput` data structure.<br>Note: you can create up to **10 tasks** at a time.
 * @method void setTasks(array $Tasks) Set This field indicates the input video moderation task information. For the specific input content, see the detailed description of the `TaskInput` data structure.<br>Note: you can create up to **10 tasks** at a time.
 * @method string getBizType() Obtain This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3–32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
 * @method void setBizType(string $BizType) Set This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3–32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
 * @method string getSeed() Obtain This field is optional and indicates the key information of the callback signature, which is used to ensure the data security. The signature algorithm is to add the `X-Signature` field to the returned HTTP header, whose value is the SHA256-encoded hex string of `seed` + `body` . After receiving the callback data, you can calculate `X-Signature` by using **sha256(seed + body)** based on the returned `body` for verification.<br>For specific use cases, see [Signature Algorithm v3](https://intl.cloud.tencent.com/document/product/1265/51885?from_cn_redirect=1).
 * @method void setSeed(string $Seed) Set This field is optional and indicates the key information of the callback signature, which is used to ensure the data security. The signature algorithm is to add the `X-Signature` field to the returned HTTP header, whose value is the SHA256-encoded hex string of `seed` + `body` . After receiving the callback data, you can calculate `X-Signature` by using **sha256(seed + body)** based on the returned `body` for verification.<br>For specific use cases, see [Signature Algorithm v3](https://intl.cloud.tencent.com/document/product/1265/51885?from_cn_redirect=1).
 * @method string getCallbackUrl() Obtain This field is optional and indicates the address for receiving the moderation information callback in the default format of URL. After it is configured successfully, the non-compliant audio/video segments generated during moderation will be sent through this API. For the format of the returned callback content, see [Sample Callback Signature](https://intl.cloud.tencent.com/document/product/1265/51879?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.9B.9E.E8.B0.83.E7.AD.BE.E5.90.8D.E7.A4.BA.E4.BE.8B) <br>Note: by default, audio segments are captured at intervals of **15 seconds**, and video frames are captured at intervals of **5 seconds**. If you configure the capturing interval, segments will be returned according to the configuration.
 * @method void setCallbackUrl(string $CallbackUrl) Set This field is optional and indicates the address for receiving the moderation information callback in the default format of URL. After it is configured successfully, the non-compliant audio/video segments generated during moderation will be sent through this API. For the format of the returned callback content, see [Sample Callback Signature](https://intl.cloud.tencent.com/document/product/1265/51879?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.9B.9E.E8.B0.83.E7.AD.BE.E5.90.8D.E7.A4.BA.E4.BE.8B) <br>Note: by default, audio segments are captured at intervals of **15 seconds**, and video frames are captured at intervals of **5 seconds**. If you configure the capturing interval, segments will be returned according to the configuration.
 * @method integer getPriority() Obtain This parameter is optional and used to pass in the priority of a moderation task. When you have multiple tasks in the queue, you can use this parameter to control their priorities for processing the queue jumping logic. **Default value: 0**.
 * @method void setPriority(integer $Priority) Set This parameter is optional and used to pass in the priority of a moderation task. When you have multiple tasks in the queue, you can use this parameter to control their priorities for processing the queue jumping logic. **Default value: 0**.
 */
class CreateVideoModerationTaskRequest extends AbstractModel
{
    /**
     * @var string This parameter is used to pass in the task type of a moderation task. Valid values: **VIDEO** (video on demand), **LIVE_VIDEO** (video live streaming).
     */
    public $Type;

    /**
     * @var array This field indicates the input video moderation task information. For the specific input content, see the detailed description of the `TaskInput` data structure.<br>Note: you can create up to **10 tasks** at a time.
     */
    public $Tasks;

    /**
     * @var string This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3–32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
     */
    public $BizType;

    /**
     * @var string This field is optional and indicates the key information of the callback signature, which is used to ensure the data security. The signature algorithm is to add the `X-Signature` field to the returned HTTP header, whose value is the SHA256-encoded hex string of `seed` + `body` . After receiving the callback data, you can calculate `X-Signature` by using **sha256(seed + body)** based on the returned `body` for verification.<br>For specific use cases, see [Signature Algorithm v3](https://intl.cloud.tencent.com/document/product/1265/51885?from_cn_redirect=1).
     */
    public $Seed;

    /**
     * @var string This field is optional and indicates the address for receiving the moderation information callback in the default format of URL. After it is configured successfully, the non-compliant audio/video segments generated during moderation will be sent through this API. For the format of the returned callback content, see [Sample Callback Signature](https://intl.cloud.tencent.com/document/product/1265/51879?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.9B.9E.E8.B0.83.E7.AD.BE.E5.90.8D.E7.A4.BA.E4.BE.8B) <br>Note: by default, audio segments are captured at intervals of **15 seconds**, and video frames are captured at intervals of **5 seconds**. If you configure the capturing interval, segments will be returned according to the configuration.
     */
    public $CallbackUrl;

    /**
     * @var integer This parameter is optional and used to pass in the priority of a moderation task. When you have multiple tasks in the queue, you can use this parameter to control their priorities for processing the queue jumping logic. **Default value: 0**.
     */
    public $Priority;

    /**
     * @param string $Type This parameter is used to pass in the task type of a moderation task. Valid values: **VIDEO** (video on demand), **LIVE_VIDEO** (video live streaming).
     * @param array $Tasks This field indicates the input video moderation task information. For the specific input content, see the detailed description of the `TaskInput` data structure.<br>Note: you can create up to **10 tasks** at a time.
     * @param string $BizType This field indicates the specific number of the policy, which is used for API scheduling and can be configured in the CMS console. If the `Biztype` parameter is passed in, a moderation policy will be used based on the business scenario; otherwise, the default moderation policy will be used.<br>Note: `Biztype` can contain 3–32 digits, letters, and underscores; different `Biztype` values are associated with different business scenarios and moderation policies, so you need to verify the `Biztype` before calling this API.
     * @param string $Seed This field is optional and indicates the key information of the callback signature, which is used to ensure the data security. The signature algorithm is to add the `X-Signature` field to the returned HTTP header, whose value is the SHA256-encoded hex string of `seed` + `body` . After receiving the callback data, you can calculate `X-Signature` by using **sha256(seed + body)** based on the returned `body` for verification.<br>For specific use cases, see [Signature Algorithm v3](https://intl.cloud.tencent.com/document/product/1265/51885?from_cn_redirect=1).
     * @param string $CallbackUrl This field is optional and indicates the address for receiving the moderation information callback in the default format of URL. After it is configured successfully, the non-compliant audio/video segments generated during moderation will be sent through this API. For the format of the returned callback content, see [Sample Callback Signature](https://intl.cloud.tencent.com/document/product/1265/51879?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.9B.9E.E8.B0.83.E7.AD.BE.E5.90.8D.E7.A4.BA.E4.BE.8B) <br>Note: by default, audio segments are captured at intervals of **15 seconds**, and video frames are captured at intervals of **5 seconds**. If you configure the capturing interval, segments will be returned according to the configuration.
     * @param integer $Priority This parameter is optional and used to pass in the priority of a moderation task. When you have multiple tasks in the queue, you can use this parameter to control their priorities for processing the queue jumping logic. **Default value: 0**.
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

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
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
