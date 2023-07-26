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
 * DescribeRecordTask response structure.
 *
 * @method string getScrollToken() Obtain Page token: When the request does not return all data, this field indicates the token of the next record. When this field is empty, it means there is no more data.
 * @method void setScrollToken(string $ScrollToken) Set Page token: When the request does not return all data, this field indicates the token of the next record. When this field is empty, it means there is no more data.
 * @method array getTaskList() Obtain List of recording tasks. When this field is empty, it means all data has been returned.
 * @method void setTaskList(array $TaskList) Set List of recording tasks. When this field is empty, it means all data has been returned.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRecordTaskResponse extends AbstractModel
{
    /**
     * @var string Page token: When the request does not return all data, this field indicates the token of the next record. When this field is empty, it means there is no more data.
     */
    public $ScrollToken;

    /**
     * @var array List of recording tasks. When this field is empty, it means all data has been returned.
     */
    public $TaskList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ScrollToken Page token: When the request does not return all data, this field indicates the token of the next record. When this field is empty, it means there is no more data.
     * @param array $TaskList List of recording tasks. When this field is empty, it means all data has been returned.
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
        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new RecordTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
