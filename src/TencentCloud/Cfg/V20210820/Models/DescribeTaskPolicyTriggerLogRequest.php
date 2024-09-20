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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskPolicyTriggerLog request structure.
 *
 * @method integer getTaskId() Obtain Experiment ID
 * @method void setTaskId(integer $TaskId) Set Experiment ID
 * @method integer getPage() Obtain Page number
 * @method void setPage(integer $Page) Set Page number
 * @method integer getPageSize() Obtain Number of entries per page
 * @method void setPageSize(integer $PageSize) Set Number of entries per page
 */
class DescribeTaskPolicyTriggerLogRequest extends AbstractModel
{
    /**
     * @var integer Experiment ID
     */
    public $TaskId;

    /**
     * @var integer Page number
     */
    public $Page;

    /**
     * @var integer Number of entries per page
     */
    public $PageSize;

    /**
     * @param integer $TaskId Experiment ID
     * @param integer $Page Page number
     * @param integer $PageSize Number of entries per page
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
