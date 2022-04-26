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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewReplacedCommandContent request structure.
 *
 * @method string getParameters() Obtain Custom parameters for the preview. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and "value" is its specified value. Both "key" and "value" are strings.
At most 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can only contain [a-z], [A-Z], [0-9], [-_].
This parameter can be left empty if DefaultParameters is set for the previewed CommandId.
 * @method void setParameters(string $Parameters) Set Custom parameters for the preview. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and "value" is its specified value. Both "key" and "value" are strings.
At most 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can only contain [a-z], [A-Z], [0-9], [-_].
This parameter can be left empty if DefaultParameters is set for the previewed CommandId.
 * @method string getCommandId() Obtain The command to be previewed. If DefaultParameters is set, it is combined with Parameters and Parameters takes priority.
`CommandId` or `Content` must be specified.
 * @method void setCommandId(string $CommandId) Set The command to be previewed. If DefaultParameters is set, it is combined with Parameters and Parameters takes priority.
`CommandId` or `Content` must be specified.
 * @method string getContent() Obtain Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
 * @method void setContent(string $Content) Set Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
 */
class PreviewReplacedCommandContentRequest extends AbstractModel
{
    /**
     * @var string Custom parameters for the preview. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and "value" is its specified value. Both "key" and "value" are strings.
At most 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can only contain [a-z], [A-Z], [0-9], [-_].
This parameter can be left empty if DefaultParameters is set for the previewed CommandId.
     */
    public $Parameters;

    /**
     * @var string The command to be previewed. If DefaultParameters is set, it is combined with Parameters and Parameters takes priority.
`CommandId` or `Content` must be specified.
     */
    public $CommandId;

    /**
     * @var string Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
     */
    public $Content;

    /**
     * @param string $Parameters Custom parameters for the preview. The field type is JSON encoded string. For example, {\"varA\": \"222\"}.
`key` is the name of the custom parameter and "value" is its specified value. Both "key" and "value" are strings.
At most 20 custom parameters are supported.
The name of the custom parameter cannot exceed 64 characters and can only contain [a-z], [A-Z], [0-9], [-_].
This parameter can be left empty if DefaultParameters is set for the previewed CommandId.
     * @param string $CommandId The command to be previewed. If DefaultParameters is set, it is combined with Parameters and Parameters takes priority.
`CommandId` or `Content` must be specified.
     * @param string $Content Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
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
        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
