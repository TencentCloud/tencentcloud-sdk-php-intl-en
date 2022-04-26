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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserResourcesAuthorization request structure.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getUserId() Obtain User ID. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method void setUserId(string $UserId) Set User ID. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method string getUserName() Obtain Username. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method void setUserName(string $UserName) Set Username. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method boolean getIncludeInheritedAuthorizations() Obtain Whether the query scope includes the application access of the user groups and organizations associated with the user. Valid values: false: no; true: yes. Default value: false.
 * @method void setIncludeInheritedAuthorizations(boolean $IncludeInheritedAuthorizations) Set Whether the query scope includes the application access of the user groups and organizations associated with the user. Valid values: false: no; true: yes. Default value: false.
 */
class DescribeUserResourcesAuthorizationRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var string User ID. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     */
    public $UserId;

    /**
     * @var string Username. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     */
    public $UserName;

    /**
     * @var boolean Whether the query scope includes the application access of the user groups and organizations associated with the user. Valid values: false: no; true: yes. Default value: false.
     */
    public $IncludeInheritedAuthorizations;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $UserId User ID. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     * @param string $UserName Username. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     * @param boolean $IncludeInheritedAuthorizations Whether the query scope includes the application access of the user groups and organizations associated with the user. Valid values: false: no; true: yes. Default value: false.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IncludeInheritedAuthorizations",$param) and $param["IncludeInheritedAuthorizations"] !== null) {
            $this->IncludeInheritedAuthorizations = $param["IncludeInheritedAuthorizations"];
        }
    }
}
