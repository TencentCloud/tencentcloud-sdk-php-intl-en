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
 * DeleteCommand request structure.
 *
 * @method string getCommandId() Obtain Command ID to be deleted. call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 * @method void setCommandId(string $CommandId) Set Command ID to be deleted. call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 */
class DeleteCommandRequest extends AbstractModel
{
    /**
     * @var string Command ID to be deleted. call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
     */
    public $CommandId;

    /**
     * @param string $CommandId Command ID to be deleted. call the [DescribeCommands](https://www.tencentcloud.comom/document/api/1340/52681?from_cn_redirect=1) api to query command details.
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }
    }
}
