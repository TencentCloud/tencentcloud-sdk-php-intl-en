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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanResultList request structure.
 *
 * @method integer getBizId() Obtain Application ID, which is obtained when you create an application in the [GME console](https://console.cloud.tencent.com/gamegme).
 * @method void setBizId(integer $BizId) Set Application ID, which is obtained when you create an application in the [GME console](https://console.cloud.tencent.com/gamegme).
 * @method array getTaskIdList() Obtain List of IDs of the tasks to be queried. Up to 100 entries can be added in the ID list.
 * @method void setTaskIdList(array $TaskIdList) Set List of IDs of the tasks to be queried. Up to 100 entries can be added in the ID list.
 * @method integer getLimit() Obtain Number of task results to be returned. Default value: 10. Maximum value: 500. This parameter will be ignored for large file tasks where all results will be returned.
 * @method void setLimit(integer $Limit) Set Number of task results to be returned. Default value: 10. Maximum value: 500. This parameter will be ignored for large file tasks where all results will be returned.
 */
class DescribeScanResultListRequest extends AbstractModel
{
    /**
     * @var integer Application ID, which is obtained when you create an application in the [GME console](https://console.cloud.tencent.com/gamegme).
     */
    public $BizId;

    /**
     * @var array List of IDs of the tasks to be queried. Up to 100 entries can be added in the ID list.
     */
    public $TaskIdList;

    /**
     * @var integer Number of task results to be returned. Default value: 10. Maximum value: 500. This parameter will be ignored for large file tasks where all results will be returned.
     */
    public $Limit;

    /**
     * @param integer $BizId Application ID, which is obtained when you create an application in the [GME console](https://console.cloud.tencent.com/gamegme).
     * @param array $TaskIdList List of IDs of the tasks to be queried. Up to 100 entries can be added in the ID list.
     * @param integer $Limit Number of task results to be returned. Default value: 10. Maximum value: 500. This parameter will be ignored for large file tasks where all results will be returned.
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
