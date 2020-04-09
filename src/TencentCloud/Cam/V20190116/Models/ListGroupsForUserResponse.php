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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListGroupsForUser response structure.
 *
 * @method integer getTotalNum() Obtain Total number of User Groups to which the sub-user has been added
 * @method void setTotalNum(integer $TotalNum) Set Total number of User Groups to which the sub-user has been added
 * @method array getGroupInfo() Obtain User Group information
 * @method void setGroupInfo(array $GroupInfo) Set User Group information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListGroupsForUserResponse extends AbstractModel
{
    /**
     * @var integer Total number of User Groups to which the sub-user has been added
     */
    public $TotalNum;

    /**
     * @var array User Group information
     */
    public $GroupInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalNum Total number of User Groups to which the sub-user has been added
     * @param array $GroupInfo User Group information
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("GroupInfo",$param) and $param["GroupInfo"] !== null) {
            $this->GroupInfo = [];
            foreach ($param["GroupInfo"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
