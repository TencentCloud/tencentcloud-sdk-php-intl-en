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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration in appeal - Record whether each configuration item is in appeal
 *
 * @method boolean getAvatarInAppeal() Obtain Whether the avatar is under appeal
 * @method void setAvatarInAppeal(boolean $AvatarInAppeal) Set Whether the avatar is under appeal
 * @method boolean getFallbackReplyInAppeal() Obtain Is the fallback response included in the appeal?
 * @method void setFallbackReplyInAppeal(boolean $FallbackReplyInAppeal) Set Is the fallback response included in the appeal?
 * @method boolean getGreetingInAppeal() Obtain Whether the welcome message is required in an appeal
 * @method void setGreetingInAppeal(boolean $GreetingInAppeal) Set Whether the welcome message is required in an appeal
 * @method boolean getNameInAppeal() Obtain Whether the application name is under appeal
 * @method void setNameInAppeal(boolean $NameInAppeal) Set Whether the application name is under appeal
 * @method boolean getRoleInAppeal() Obtain Whether the role description is in the appeal
 * @method void setRoleInAppeal(boolean $RoleInAppeal) Set Whether the role description is in the appeal
 */
class AppealingStatus extends AbstractModel
{
    /**
     * @var boolean Whether the avatar is under appeal
     */
    public $AvatarInAppeal;

    /**
     * @var boolean Is the fallback response included in the appeal?
     */
    public $FallbackReplyInAppeal;

    /**
     * @var boolean Whether the welcome message is required in an appeal
     */
    public $GreetingInAppeal;

    /**
     * @var boolean Whether the application name is under appeal
     */
    public $NameInAppeal;

    /**
     * @var boolean Whether the role description is in the appeal
     */
    public $RoleInAppeal;

    /**
     * @param boolean $AvatarInAppeal Whether the avatar is under appeal
     * @param boolean $FallbackReplyInAppeal Is the fallback response included in the appeal?
     * @param boolean $GreetingInAppeal Whether the welcome message is required in an appeal
     * @param boolean $NameInAppeal Whether the application name is under appeal
     * @param boolean $RoleInAppeal Whether the role description is in the appeal
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
        if (array_key_exists("AvatarInAppeal",$param) and $param["AvatarInAppeal"] !== null) {
            $this->AvatarInAppeal = $param["AvatarInAppeal"];
        }

        if (array_key_exists("FallbackReplyInAppeal",$param) and $param["FallbackReplyInAppeal"] !== null) {
            $this->FallbackReplyInAppeal = $param["FallbackReplyInAppeal"];
        }

        if (array_key_exists("GreetingInAppeal",$param) and $param["GreetingInAppeal"] !== null) {
            $this->GreetingInAppeal = $param["GreetingInAppeal"];
        }

        if (array_key_exists("NameInAppeal",$param) and $param["NameInAppeal"] !== null) {
            $this->NameInAppeal = $param["NameInAppeal"];
        }

        if (array_key_exists("RoleInAppeal",$param) and $param["RoleInAppeal"] !== null) {
            $this->RoleInAppeal = $param["RoleInAppeal"];
        }
    }
}
