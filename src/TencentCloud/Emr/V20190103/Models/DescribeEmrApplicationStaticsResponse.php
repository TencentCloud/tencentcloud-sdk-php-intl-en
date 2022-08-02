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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrApplicationStatics response structure.
 *
 * @method array getStatics() Obtain Application statistics
 * @method void setStatics(array $Statics) Set Application statistics
 * @method integer getTotalCount() Obtain Total count
 * @method void setTotalCount(integer $TotalCount) Set Total count
 * @method array getQueues() Obtain Available queue name
 * @method void setQueues(array $Queues) Set Available queue name
 * @method array getUsers() Obtain Available usernames
 * @method void setUsers(array $Users) Set Available usernames
 * @method array getApplicationTypes() Obtain Available application type
 * @method void setApplicationTypes(array $ApplicationTypes) Set Available application type
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEmrApplicationStaticsResponse extends AbstractModel
{
    /**
     * @var array Application statistics
     */
    public $Statics;

    /**
     * @var integer Total count
     */
    public $TotalCount;

    /**
     * @var array Available queue name
     */
    public $Queues;

    /**
     * @var array Available usernames
     */
    public $Users;

    /**
     * @var array Available application type
     */
    public $ApplicationTypes;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Statics Application statistics
     * @param integer $TotalCount Total count
     * @param array $Queues Available queue name
     * @param array $Users Available usernames
     * @param array $ApplicationTypes Available application type
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
        if (array_key_exists("Statics",$param) and $param["Statics"] !== null) {
            $this->Statics = [];
            foreach ($param["Statics"] as $key => $value){
                $obj = new ApplicationStatics();
                $obj->deserialize($value);
                array_push($this->Statics, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Queues",$param) and $param["Queues"] !== null) {
            $this->Queues = $param["Queues"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("ApplicationTypes",$param) and $param["ApplicationTypes"] !== null) {
            $this->ApplicationTypes = $param["ApplicationTypes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
