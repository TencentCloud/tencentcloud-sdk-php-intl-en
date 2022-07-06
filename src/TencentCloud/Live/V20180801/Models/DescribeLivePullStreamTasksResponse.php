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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePullStreamTasks response structure.
 *
 * @method array getTaskInfos() Obtain The information of stream pulling tasks.
 * @method void setTaskInfos(array $TaskInfos) Set The information of stream pulling tasks.
 * @method integer getPageNum() Obtain The page number.
 * @method void setPageNum(integer $PageNum) Set The page number.
 * @method integer getPageSize() Obtain The number of records per page.
 * @method void setPageSize(integer $PageSize) Set The number of records per page.
 * @method integer getTotalNum() Obtain The total number of records.
 * @method void setTotalNum(integer $TotalNum) Set The total number of records.
 * @method integer getTotalPage() Obtain The total number of pages.
 * @method void setTotalPage(integer $TotalPage) Set The total number of pages.
 * @method integer getLimitTaskNum() Obtain The maximum number of tasks allowed.
 * @method void setLimitTaskNum(integer $LimitTaskNum) Set The maximum number of tasks allowed.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLivePullStreamTasksResponse extends AbstractModel
{
    /**
     * @var array The information of stream pulling tasks.
     */
    public $TaskInfos;

    /**
     * @var integer The page number.
     */
    public $PageNum;

    /**
     * @var integer The number of records per page.
     */
    public $PageSize;

    /**
     * @var integer The total number of records.
     */
    public $TotalNum;

    /**
     * @var integer The total number of pages.
     */
    public $TotalPage;

    /**
     * @var integer The maximum number of tasks allowed.
     */
    public $LimitTaskNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TaskInfos The information of stream pulling tasks.
     * @param integer $PageNum The page number.
     * @param integer $PageSize The number of records per page.
     * @param integer $TotalNum The total number of records.
     * @param integer $TotalPage The total number of pages.
     * @param integer $LimitTaskNum The maximum number of tasks allowed.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TaskInfos",$param) and $param["TaskInfos"] !== null) {
            $this->TaskInfos = [];
            foreach ($param["TaskInfos"] as $key => $value){
                $obj = new PullStreamTaskInfo();
                $obj->deserialize($value);
                array_push($this->TaskInfos, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("LimitTaskNum",$param) and $param["LimitTaskNum"] !== null) {
            $this->LimitTaskNum = $param["LimitTaskNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
