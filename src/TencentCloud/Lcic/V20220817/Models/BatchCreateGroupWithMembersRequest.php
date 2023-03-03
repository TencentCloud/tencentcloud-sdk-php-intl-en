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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateGroupWithMembers request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method array getGroupBaseInfos() Obtain The information of the groups to create. Array length limit: 256.
 * @method void setGroupBaseInfos(array $GroupBaseInfos) Set The information of the groups to create. Array length limit: 256.
 * @method array getMemberIds() Obtain The group members. Array length limit: 200.
 * @method void setMemberIds(array $MemberIds) Set The group members. Array length limit: 200.
 */
class BatchCreateGroupWithMembersRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var array The information of the groups to create. Array length limit: 256.
     */
    public $GroupBaseInfos;

    /**
     * @var array The group members. Array length limit: 200.
     */
    public $MemberIds;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param array $GroupBaseInfos The information of the groups to create. Array length limit: 256.
     * @param array $MemberIds The group members. Array length limit: 200.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("GroupBaseInfos",$param) and $param["GroupBaseInfos"] !== null) {
            $this->GroupBaseInfos = [];
            foreach ($param["GroupBaseInfos"] as $key => $value){
                $obj = new GroupBaseInfo();
                $obj->deserialize($value);
                array_push($this->GroupBaseInfos, $obj);
            }
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }
    }
}
