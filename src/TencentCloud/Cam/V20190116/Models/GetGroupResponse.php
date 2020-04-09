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
 * GetGroup response structure.
 *
 * @method integer getGroupId() Obtain User Group ID
 * @method void setGroupId(integer $GroupId) Set User Group ID
 * @method string getGroupName() Obtain User Group name
 * @method void setGroupName(string $GroupName) Set User Group name
 * @method integer getGroupNum() Obtain Number of members in the User Group
 * @method void setGroupNum(integer $GroupNum) Set Number of members in the User Group
 * @method string getRemark() Obtain User Group description
 * @method void setRemark(string $Remark) Set User Group description
 * @method string getCreateTime() Obtain Time User Group created
 * @method void setCreateTime(string $CreateTime) Set Time User Group created
 * @method array getUserInfo() Obtain User Group member information
 * @method void setUserInfo(array $UserInfo) Set User Group member information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetGroupResponse extends AbstractModel
{
    /**
     * @var integer User Group ID
     */
    public $GroupId;

    /**
     * @var string User Group name
     */
    public $GroupName;

    /**
     * @var integer Number of members in the User Group
     */
    public $GroupNum;

    /**
     * @var string User Group description
     */
    public $Remark;

    /**
     * @var string Time User Group created
     */
    public $CreateTime;

    /**
     * @var array User Group member information
     */
    public $UserInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $GroupId User Group ID
     * @param string $GroupName User Group name
     * @param integer $GroupNum Number of members in the User Group
     * @param string $Remark User Group description
     * @param string $CreateTime Time User Group created
     * @param array $UserInfo User Group member information
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = [];
            foreach ($param["UserInfo"] as $key => $value){
                $obj = new GroupMemberInfo();
                $obj->deserialize($value);
                array_push($this->UserInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
