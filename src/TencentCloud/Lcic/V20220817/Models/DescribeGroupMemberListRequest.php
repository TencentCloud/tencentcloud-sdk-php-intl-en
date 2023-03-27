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
 * DescribeGroupMemberList request structure.
 *
 * @method string getGroupId() Obtain The group ID.
 * @method void setGroupId(string $GroupId) Set The group ID.
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method integer getPage() Obtain The page to return records from. The default value is 1.
 * @method void setPage(integer $Page) Set The page to return records from. The default value is 1.
 * @method integer getLimit() Obtain The maximum number of records per page. The value of this parameter cannot exceed 1000 and is 20 by default.
 * @method void setLimit(integer $Limit) Set The maximum number of records per page. The value of this parameter cannot exceed 1000 and is 20 by default.
 */
class DescribeGroupMemberListRequest extends AbstractModel
{
    /**
     * @var string The group ID.
     */
    public $GroupId;

    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var integer The page to return records from. The default value is 1.
     */
    public $Page;

    /**
     * @var integer The maximum number of records per page. The value of this parameter cannot exceed 1000 and is 20 by default.
     */
    public $Limit;

    /**
     * @param string $GroupId The group ID.
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param integer $Page The page to return records from. The default value is 1.
     * @param integer $Limit The maximum number of records per page. The value of this parameter cannot exceed 1000 and is 20 by default.
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
