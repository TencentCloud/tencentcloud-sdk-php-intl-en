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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of task IDs in the report
 *
 * @method array getTaskIdList() Obtain List of task IDs
 * @method void setTaskIdList(array $TaskIdList) Set List of task IDs
 * @method string getAppId() Obtain User AppId
 * @method void setAppId(string $AppId) Set User AppId
 */
class ReportTaskIdList extends AbstractModel
{
    /**
     * @var array List of task IDs
     */
    public $TaskIdList;

    /**
     * @var string User AppId
     */
    public $AppId;

    /**
     * @param array $TaskIdList List of task IDs
     * @param string $AppId User AppId
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
