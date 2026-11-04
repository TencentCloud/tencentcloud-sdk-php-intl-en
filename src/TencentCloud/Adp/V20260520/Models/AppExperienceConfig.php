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
 * Trial configuration
 *
 * @method AppAdvancedConf getAdvanced() Obtain Advanced configuration
 * @method void setAdvanced(AppAdvancedConf $Advanced) Set Advanced configuration
 * @method ConversationExperience getConversation() Obtain Dialogue experience configuration
 * @method void setConversation(ConversationExperience $Conversation) Set Dialogue experience configuration
 * @method RoleConfig getRole() Obtain Role configuration
 * @method void setRole(RoleConfig $Role) Set Role configuration
 */
class AppExperienceConfig extends AbstractModel
{
    /**
     * @var AppAdvancedConf Advanced configuration
     */
    public $Advanced;

    /**
     * @var ConversationExperience Dialogue experience configuration
     */
    public $Conversation;

    /**
     * @var RoleConfig Role configuration
     */
    public $Role;

    /**
     * @param AppAdvancedConf $Advanced Advanced configuration
     * @param ConversationExperience $Conversation Dialogue experience configuration
     * @param RoleConfig $Role Role configuration
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
        if (array_key_exists("Advanced",$param) and $param["Advanced"] !== null) {
            $this->Advanced = new AppAdvancedConf();
            $this->Advanced->deserialize($param["Advanced"]);
        }

        if (array_key_exists("Conversation",$param) and $param["Conversation"] !== null) {
            $this->Conversation = new ConversationExperience();
            $this->Conversation->deserialize($param["Conversation"]);
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = new RoleConfig();
            $this->Role->deserialize($param["Role"]);
        }
    }
}
