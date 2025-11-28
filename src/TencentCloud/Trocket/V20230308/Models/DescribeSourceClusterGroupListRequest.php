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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSourceClusterGroupList request structure.
 *
 * @method string getTaskId() Obtain Specifies the task ID. it can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the api [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method void setTaskId(string $TaskId) Set Specifies the task ID. it can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the api [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method integer getLimit() Obtain Maximum number of queried results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of queried results. Default value: 20.
 * @method integer getOffset() Obtain Starting position of the query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting position of the query. Default value: 0.
 * @method array getFilters() Obtain Filtering condition list. See the description of the API using this parameter for the usage method.
 * @method void setFilters(array $Filters) Set Filtering condition list. See the description of the API using this parameter for the usage method.
 */
class DescribeSourceClusterGroupListRequest extends AbstractModel
{
    /**
     * @var string Specifies the task ID. it can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the api [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

     */
    public $TaskId;

    /**
     * @var integer Maximum number of queried results. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Starting position of the query. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filtering condition list. See the description of the API using this parameter for the usage method.
     */
    public $Filters;

    /**
     * @param string $TaskId Specifies the task ID. it can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the api [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

     * @param integer $Limit Maximum number of queried results. Default value: 20.
     * @param integer $Offset Starting position of the query. Default value: 0.
     * @param array $Filters Filtering condition list. See the description of the API using this parameter for the usage method.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
