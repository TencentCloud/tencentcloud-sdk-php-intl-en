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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned data of the [recording recognition] (https://intl.cloud.tencent.com/document/product/1093/37823?from_cn_redirect=1#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0) or [asynchronous real-time audio recognition] (https://intl.cloud.tencent.com/document/product/1093/52061?from_cn_redirect=1#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0) request.
 *
 * @method integer getTaskId() Obtain Task ID. This ID can be used to obtain the recognition status and results through polling. The data type of TaskId is ** uint64 **.
** Note: The task ID is valid for 24 hours, and duplicate task IDs of different dates may exist. Do not use task ID as the unique ID in your business system. **
 * @method void setTaskId(integer $TaskId) Set Task ID. This ID can be used to obtain the recognition status and results through polling. The data type of TaskId is ** uint64 **.
** Note: The task ID is valid for 24 hours, and duplicate task IDs of different dates may exist. Do not use task ID as the unique ID in your business system. **
 */
class Task extends AbstractModel
{
    /**
     * @var integer Task ID. This ID can be used to obtain the recognition status and results through polling. The data type of TaskId is ** uint64 **.
** Note: The task ID is valid for 24 hours, and duplicate task IDs of different dates may exist. Do not use task ID as the unique ID in your business system. **
     */
    public $TaskId;

    /**
     * @param integer $TaskId Task ID. This ID can be used to obtain the recognition status and results through polling. The data type of TaskId is ** uint64 **.
** Note: The task ID is valid for 24 hours, and duplicate task IDs of different dates may exist. Do not use task ID as the unique ID in your business system. **
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
