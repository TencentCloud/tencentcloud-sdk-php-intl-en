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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partial information of the user
 *
 * @method string getUserId() Obtain User Id which matches the sub-user UIN on the CAM side
 * @method void setUserId(string $UserId) Set User Id which matches the sub-user UIN on the CAM side
 * @method string getUserDescription() Obtain User description
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setUserDescription(string $UserDescription) Set User description
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getCreator() Obtain The creator of the current user
 * @method void setCreator(string $Creator) Set The creator of the current user
 * @method string getCreateTime() Obtain The creation time of the current user, e.g. 16:19:32, July 28, 2021
 * @method void setCreateTime(string $CreateTime) Set The creation time of the current user, e.g. 16:19:32, July 28, 2021
 * @method string getUserAlias() Obtain User alias
 * @method void setUserAlias(string $UserAlias) Set User alias
 */
class UserMessage extends AbstractModel
{
    /**
     * @var string User Id which matches the sub-user UIN on the CAM side
     */
    public $UserId;

    /**
     * @var string User description
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $UserDescription;

    /**
     * @var string The creator of the current user
     */
    public $Creator;

    /**
     * @var string The creation time of the current user, e.g. 16:19:32, July 28, 2021
     */
    public $CreateTime;

    /**
     * @var string User alias
     */
    public $UserAlias;

    /**
     * @param string $UserId User Id which matches the sub-user UIN on the CAM side
     * @param string $UserDescription User description
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $Creator The creator of the current user
     * @param string $CreateTime The creation time of the current user, e.g. 16:19:32, July 28, 2021
     * @param string $UserAlias User alias
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }
    }
}
