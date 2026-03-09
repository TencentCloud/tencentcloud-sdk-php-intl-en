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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewReplacedCommandContent request structure.
 *
 * @method string getParameters() Obtain The preview uses custom parameters. field type is json encoded string, for example: {"varA": "222"}.
This parameter can be set only when the EnableParameter of the command is true. you can obtain the EnableParameter settings through the [DescribeCommands (detailed command information)](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api.
If DefaultParameters or DefaultParameterConfs has set, it will overlay with Parameters and prioritize the value of Parameters.

key specifies the custom parameter name, and value specifies the parameter. both kv are string-type.
Custom parameters are limited to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
If the previewed CommandId has DefaultParameters set, this parameter can be empty.
 * @method void setParameters(string $Parameters) Set The preview uses custom parameters. field type is json encoded string, for example: {"varA": "222"}.
This parameter can be set only when the EnableParameter of the command is true. you can obtain the EnableParameter settings through the [DescribeCommands (detailed command information)](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api.
If DefaultParameters or DefaultParameterConfs has set, it will overlay with Parameters and prioritize the value of Parameters.

key specifies the custom parameter name, and value specifies the parameter. both kv are string-type.
Custom parameters are limited to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
If the previewed CommandId has DefaultParameters set, this parameter can be empty.
 * @method string getCommandId() Obtain Perform the replace preview command.
Call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
CommandId and Content, you must provide one and can only provide one.
 * @method void setCommandId(string $CommandId) Set Perform the replace preview command.
Call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
CommandId and Content, you must provide one and can only provide one.
 * @method string getContent() Obtain Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
 * @method void setContent(string $Content) Set Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
 */
class PreviewReplacedCommandContentRequest extends AbstractModel
{
    /**
     * @var string The preview uses custom parameters. field type is json encoded string, for example: {"varA": "222"}.
This parameter can be set only when the EnableParameter of the command is true. you can obtain the EnableParameter settings through the [DescribeCommands (detailed command information)](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api.
If DefaultParameters or DefaultParameterConfs has set, it will overlay with Parameters and prioritize the value of Parameters.

key specifies the custom parameter name, and value specifies the parameter. both kv are string-type.
Custom parameters are limited to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
If the previewed CommandId has DefaultParameters set, this parameter can be empty.
     */
    public $Parameters;

    /**
     * @var string Perform the replace preview command.
Call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
CommandId and Content, you must provide one and can only provide one.
     */
    public $CommandId;

    /**
     * @var string Base64-encoded command to be previewed. The maximum length is 64 KB.
CommandId or Content must be specified.
     */
    public $Content;

    /**
     * @param string $Parameters The preview uses custom parameters. field type is json encoded string, for example: {"varA": "222"}.
This parameter can be set only when the EnableParameter of the command is true. you can obtain the EnableParameter settings through the [DescribeCommands (detailed command information)](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api.
If DefaultParameters or DefaultParameterConfs has set, it will overlay with Parameters and prioritize the value of Parameters.

key specifies the custom parameter name, and value specifies the parameter. both kv are string-type.
Custom parameters are limited to 20.
The custom parameter name must meet the following standard: the number of characters has a cap of 64, and the optional range is [a-zA-Z0-9-_].
If the previewed CommandId has DefaultParameters set, this parameter can be empty.
     * @param string $CommandId Perform the replace preview command.
Call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
CommandId and Content, you must provide one and can only provide one.
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
