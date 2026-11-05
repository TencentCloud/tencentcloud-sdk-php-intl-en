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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document task status information
 *
 * @method array getCompletedTaskTypeList() Obtain <p>List of completed historical task types</p>
 * @method void setCompletedTaskTypeList(array $CompletedTaskTypeList) Set <p>List of completed historical task types</p>
 * @method array getOngoingTaskTypeList() Obtain <p>List of supported task types in progress</p>
 * @method void setOngoingTaskTypeList(array $OngoingTaskTypeList) Set <p>List of supported task types in progress</p>
 */
class DocTaskStatus extends AbstractModel
{
    /**
     * @var array <p>List of completed historical task types</p>
     */
    public $CompletedTaskTypeList;

    /**
     * @var array <p>List of supported task types in progress</p>
     */
    public $OngoingTaskTypeList;

    /**
     * @param array $CompletedTaskTypeList <p>List of completed historical task types</p>
     * @param array $OngoingTaskTypeList <p>List of supported task types in progress</p>
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
        if (array_key_exists("CompletedTaskTypeList",$param) and $param["CompletedTaskTypeList"] !== null) {
            $this->CompletedTaskTypeList = $param["CompletedTaskTypeList"];
        }

        if (array_key_exists("OngoingTaskTypeList",$param) and $param["OngoingTaskTypeList"] !== null) {
            $this->OngoingTaskTypeList = $param["OngoingTaskTypeList"];
        }
    }
}
